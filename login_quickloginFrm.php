<?php
session_start();

if (isset($_POST['reg_login'])) {
    include('dbconnection.php'); // Make sure to include your database connection

    $email = $_POST['uemail'];
    $pass = $_POST['upass'];

    // Use prepared statements to prevent SQL injection
    $sql_select = "SELECT reg_id, email, pasword, status, u_type, mention FROM registration WHERE email = ? AND pasword = ? AND status = '1'";
    $stmt = $conn->prepare($sql_select);
    $stmt->bind_param('ss', $email, $pass);
    $stmt->execute();
    
    // Check if mysqlnd is enabled before using get_result()
    if (method_exists($stmt, 'get_result')) {
        $result_login = $stmt->get_result();
        $login_count = $result_login->num_rows;
        $res = $result_login->fetch_assoc();
    } else {
        $stmt->store_result();
        $login_count = $stmt->num_rows;
        $stmt->bind_result($reg_id, $db_email, $db_password, $db_status, $u_type, $mention); // Ensure these match the columns in SELECT
        $stmt->fetch();
        $res = [
            'reg_id' => $reg_id,
            'email' => $db_email,
            'pasword' => $db_password,
            'status' => $db_status,
            'u_type' => $u_type,
            'mention' => $mention
        ];
    }
    
    if ($login_count > 0) { 
        $_SESSION['msg'] = "Login Successful.";
        $_SESSION['uname'] = $email;
        $utype = $res['u_type'];

        $sql_mention = "SELECT mention, reg_id FROM registration WHERE email = ? AND status = '1'";
        $stmt_mention = $conn->prepare($sql_mention);
        $stmt_mention->bind_param('s', $email);
        $stmt_mention->execute();
        
        if (method_exists($stmt_mention, 'get_result')) {
            $result_mention = $stmt_mention->get_result();
            $row_mention = $result_mention->fetch_assoc();
        } else {
            $stmt_mention->store_result();
            $stmt_mention->bind_result($mention, $rgid);
            $stmt_mention->fetch();
            $row_mention = [
                'mention' => $mention,
                'reg_id' => $rgid
            ];
        }

        $mention = $row_mention['mention'];
        $_SESSION['mention'] = $mention;
        $rgid = $row_mention['reg_id'];

        // Generate a random value
        $x = array_merge(range('a', 'z'), range('0', '9'));
        $randvalue = '';
        for ($i = 0; $i < 5; $i++) {
            $randvalue .= $x[rand(0, count($x) - 1)];
        }

        $sql_random = "SELECT * FROM random_values WHERE user_id = ?";
        $stmt_random = $conn->prepare($sql_random);
        $stmt_random->bind_param('i', $rgid);
        $stmt_random->execute();
        
        if (method_exists($stmt_random, 'get_result')) {
            $result_random = $stmt_random->get_result();
            $totrandom = $result_random->num_rows;
        } else {
            $stmt_random->store_result();
            $totrandom = $stmt_random->num_rows;
        }

        if ($totrandom > 0) {
            $sql_rand = "UPDATE random_values SET random_value = ? WHERE user_id = ?";
        } else {
            $sql_rand = "INSERT INTO random_values (user_id, random_value) VALUES (?, ?)";
        }

        $stmt_rand = $conn->prepare($sql_rand);
        if ($totrandom > 0) {
            $stmt_rand->bind_param('si', $randvalue, $rgid);
        } else {
            $stmt_rand->bind_param('is', $rgid, $randvalue);
        }
        $stmt_rand->execute();

        // Redirect based on user type
        if ($utype == 'member') {
            header("Location:member_dashboard.php");
        } else {
          //  header("Location:$mention/Sponsortexts");
			  header("Location:member_dashboard.php");
        }
        exit;
    } else {
        $_SESSION['msg'] = "Invalid Email or Password.";
        header("Location:member_dashboard.php");
        exit;
    }

    // Close statements and connection
    $stmt->close();
    $stmt_mention->close();
    $stmt_random->close();
    $stmt_rand->close();
    $conn->close();
}
?>
