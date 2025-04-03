<?php include('Template1_header.php'); ?>

<!--- Template1_header.php--->
<header class="masthead text-center text-white">
     <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0">ArtizonHub</h1>
          <h2 class="masthead-subheading mb-0">we are connecting likeminds </h2>
          <a class="btn btn-primary btn-xl rounded-pill mt-5" href="login.php">Click Here to Signup</a>
        </div>
      </div>
</header>

<section class="container mt-5">
	<div class="row align-items-center">
		<div class="col-lg-6 order-lg-2">
			<img class="img-fluid rounded-circle mx-auto d-block" src="img/01.png" alt="">
		</div>
		<div class="col-lg-6 order-lg-1">
			<div class="p-3">
				<h2 class="display-4">How We're Helping</h2>
				<p>We are creating a platform for social and economic growth of performing Artists and Handicraft artists and connecting artists all over the world.
				Artizonhub is the first of its kind that is bringing and collaborating artists for all over the world under one umbrella. Simply register, 
				upload your profile and Media, connect, share, like post, follow, recommend and get sponsored!! Set up your online shop in minutes and sell you
				work to the world!! Land a contract may it be performing art or retailing your handicrafts!!.
				</p>
			</div>
		</div>
	</div>
</section>

<section class="container mt-5">
	<div class="row align-items-center">
		<div class="col-lg-6 order-lg-1">
			<img class="img-fluid rounded-circle mx-auto d-block" src="img/02.png" alt="">
		</div>
		<div class="col-lg-6 order-lg-2">
			<div class="p-3">
				<a href="https://www.gofundme.com/supportartist"><h2 class="display-4">Get Involved</h2></a>
				<p>If you are an artist this is where you belong. Help spread the word about ArtizonHub and be part of the world.
                If you are a Philantrophist, help the world, donate, contribute to great causes of supporting this platform. 
                The funds generated will be used to improve the technological platform on which this portal runs. We will also use to 
                lower the cost of shipping to vendors and decreasing overhead costs.
				</p>
			</div>
		</div>
	</div>
</section>

<section class="container mt-5">
	<div class="row align-items-center">
		<div class="col-lg-6 order-lg-2">
			<img class="img-fluid rounded-circle mx-auto d-block" src="img/03.png" alt="">
		</div>
		<div class="col-lg-6 order-lg-1">
			<div class="p-3">
				<h2 class="display-4">We Salute you!!</h2>
				<p>We salute the artist in you. Come join the ArtizonHub community where you can show case and braodcast your talent, find your niche, 
                sell your porducts and network with like minded people. We are moved by the tremendous potential of churning visually impressive 
                pieces or perfroming a mind blowing musical number that resonates. The world is large community that appreaciates and enjoys the handicraft art 
                of perform art that you bring to the table. You are teh unsung heros of the society that harness and unleash your artistic potential to
                save and heal the world.
            
				</p>
			</div>
		</div>
	</div>
</section>
 <section>
        <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 order-lg-2">
                <div class="p-6">
                </div>
              </div>
              <div class="col-lg-6 order-lg-1">
                <div class="p-6">
                  <h2 class="display-6">CONTACT US </h2>
                  <p>Drop us a Line !!</p>
                </div>
              </div>
            </div>
          </div>
      <div class="container">
	 
   <form class="home-contactus-form" action="home_contactusPHP.php" method="POST">
    <div class="center_div">
        <div class="col-lg-8 order-lg-1">
            <div class="form-group">
                <input type="text" class="form-control" id="FormControlInput1" name="name" placeholder="Name" required>
            </div>         
        </div>
    </div>  
    <div class="center_div">  
        <div class="col-lg-8 order-lg-1">
            <div class="form-group">  
                <input type="email" class="form-control" id="FormControlInput2" name="email" placeholder="Email Address" required>
            </div>
        </div>
    </div>
    <div class="center_div">
        <div class="col-lg-8 order-lg-1">
            <div class="form-group">
                <textarea class="form-control" id="FormControlTextarea1" name="message" rows="3" placeholder="Message" required></textarea>
            </div> 
        </div>
    </div>
    <div class="center_div">
        <div class="col-lg-8 order-lg-1">
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Submit">       
            </div> 
        </div> 
    </div>
</form>
	   </div>
      </section>
	   <section class="contact-info"> 
           
          <div class="container">
              <h6 class="text-center" > May I Help You </h6>
              <address>
                <P class="text-center">To contact support, you can email :<a href="mailto:artizonhub@gmail.com"> artizonhub@gmail.com </a>
                 <br>Call us at (973) 531-7342</br>  </p>
                 </address>
				   <h6 class="text-center" > Support Hours</h6>
          <p class="text-center">Monday through Sunday <time> 6am - 8pm </time> PST/PDT <br> </P>
          </div>
       </section>
	   <section>    
       <!-- Footer -->
   <!--- Template1_footer.php--->
      <?php include('Template1_footer.php'); ?>