<!DOCTYPE html>
<html>
<head>
	<title>Covid19Exploer</title>
<?php include 'link/links.php' ?>
	
	<?php include 'css/style.php'; ?>
</head>

<body>

	<div id="content">
		<div id="wrap">

			<nav class="navbar navbar-expand-lg navbar-light bg-light  p-3 mynav">
			  <a class="navbar-brand pl-5" href="index.php">Covid19Explorer</a>

			  <!-- <button  class="navbar-toggler"type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon" ></span>
			  </button>
				 -->
			 		<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			       
						  <div class="collapse navbar-collapse" id="navbarMenu">
						    <ul class="navbar-nav ml-auto text-capitalize pr-5 align-items-center">
						      <li class="nav-item active">
						        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#about">about</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#symptoms">symptoms</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#prevention">prevention</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Live count</a>
						      </li>
						      
						      
						    </ul>
						    
						  </div>

			</nav>



					<!------------------------------main header----------------------->

					<div class="main_header container-fluid" id="home">

							<div class="justify-content-center align-content-center w-100 h-100 d-flex align-items-center">
								<h1>Let's Fight Covid19 Together</h1>

							</div>
						
						
					</div>


					<!-- //////////////////////////about/////////////////////// -->
					<div class="container-fluid  pt-5 pb-5" id=about>
						<div class="section_header mt-4 mb-5  text-center">
							<h1>About COVID-19</h1>
							
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-6 col-sm-12 ml-5 pt-3 pl-3">
								<img src="images/virus.jpg" class="img-fluid" style="border-radius: 10px;">
								
							</div>
							
							<div class="col-lg-5 col-md-6 col-sm-12 pt-3 pl-3">
								<h3>What is Coronavirus ?</h3>
								<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

								Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.
								</p>
							</div>
							
						</div>
						
					</div>

					<!-- ///////////////////////////////Symptoms//////////////////////////// -->
					<div class="container-fluid colored_section pt-5 pb-5" id="symptoms">
						<div class="section_header mt-4 mb-5  text-center">
							<h1>Coronavirus Symptoms</h1>
							
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-5 col-sm-12 " >
								<figure class="text-center">
								<img src="images/cold.png" class="img-fluid" width="180" height="180">
								<figcaption>Cold</figcaption>
								</figure>
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 pt-4">
								<figure class="text-center">
								<img src="images/sorethroat.png" class="img-fluid" width="180" height="180">
								<figcaption>Sore Throat</figcaption>
								</figure>
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 pt-4">
								<figure class="text-center">
								<img src="images/cough.png" class="img-fluid" width="180" height="180">
								<figcaption>Dry Cough</figcaption>
								</figure>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 pt-4" >
								<figure class="text-center">
								<img src="images/runnynose.png" class="img-fluid" width="180" height="180">
								<figcaption>Running Nose</figcaption>
								</figure>
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 pt-4">
								<figure class="text-center">
								<img src="images/fever.png" class="img-fluid" width="180" height="180">
								<figcaption>Fever</figcaption>
								</figure>
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 pt-4">
								<figure class="text-center">
								<img src="images/tiredness.jpg" class="img-fluid" width="180" height="180">
								<figcaption>Tiredness</figcaption>
								</figure>
							</div>
						</div>

					</div>


					<!-- ////////////////////////Preventions/////////////////////// -->



					<div class="container-fluid  pt-5 pb-5 " id="prevention">
						<div class="mt-4 mb-5  ">
							<h1>Preventions Against Coronavirus</h1>

							<div class="container">
								<div class="row">
									<div class="col-lg-4 col-md-5 col-12 mt-5">
										<div class="row">
											<div class="col-lg-8 col-md-8 col-12">
												<figure class="text-center">
												<img src="images/handwash.png" width="150 " height="150">
											</figure>
											</div>
											

											<div class="col-lg-8 col-md-8 col-12">
												<p>Clean your hands often. Use soap and water, or an alcohol-based hand rub.</p>
											</div>
										</div>
										
									</div>
									<div class="col-lg-4 col-md-5 col-12 mt-5">
										<div class="row">
											<div class="col-lg-8 col-md-8 col-12">
												<figure class="text-center">
												<img src="images/covercough.png" width="200 " height="150">
											</figure>
											</div>
											

											<div class="col-lg-8 col-md-8 col-12">
												<p>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</p>
											</div>
										</div>
										
									</div>
								
								<div class="col-lg-4 col-md-5 col-12 mt-5">
										<div class="row">
											<div class="col-lg-8 col-md-8 col-12">
												<figure class="text-center">
												<img src="images/call.png" width="200 " height="150">
											</figure>
											</div>
											

											<div class="col-lg-8 col-md-8 col-12">
												<p>If you have a fever, a cough, and difficulty breathing, seek medical attention. Call in advance.</p>
											</div>
										</div>
										
									</div>

									<div class="col-lg-4 col-md-5 col-12 mt-5">
										<div class="row">

											<div class="col-lg-8 col-md-8 col-12">
												<figure class="text-center">		
												<img src="images/stayhome.png" width="200 " height="150">
											</figure>
											</div>
											

											<div class="col-lg-8 col-md-8 col-12">
												<p>Stay home if you feel unwell.</p>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-5 col-12 mt-5">
										<div class="row">
											<div class="col-lg-8 col-md-8 col-12">
												<figure class="text-center">
												<img src="images/safedistance.png" width="200 " height="150">
												</figure>
											</div>
											

											<div class="col-lg-8 col-md-8 col-12">
												<p>Maintain a safe distance from anyone who is coughing or sneezing.</p>
											</div>
										</div>
										
									</div>

								</div>
								
							</div>
							
						</div>


					<!-- //////////////////top button///////////// -->

					  <a href="#" style="" class="mr-3 pull-right"><i class="fa fa-arrow-up" id="mybtn"></i></a>


					</div>


		</div>

				<!-- ////////////////////footer///////////// -->
			<footer class="mt-5 myfoot">
				<div class="text-center container pt-2 pb-2">
					<h5>made by <a href="https://kannav4199.github.io/">KANNAV SHARMA</a></h5>
					<p>Covid19Explorer@2020</p>
				</div>

			</footer>

	</div>


</body>
</html>