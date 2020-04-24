<!DOCTYPE html>
<html>
<head>
	
	<title>Covid19Exploer</title>
<?php include 'link/links.php' ?>
	
	<?php include 'css/style.php'; ?>
	
</head>

<body onload="fetch()">

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
						        <a class="nav-link" href="#livecount">Live count worldwide</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="indialivecount.php">Live count India</a>
						      </li>
						      
						    </ul>
						    
						  </div>

			</nav>



					<!------------------------------main header----------------------->

					<div class="main_header container-fluid" id="home">

							<div class="justify-content-center align-content-center w-100 h-100 d-flex align-items-center">
								<h1 style="color: #e81313 !important;">Let's Fight Covid19 Together</h1>

							</div>

					</div>


					<!-- //////////////////////////about/////////////////////// -->
					<div class="container-fluid  pt-5 pb-5" id=about>
						<div class="section_header mt-4 mb-5  text-center">
							<h1 style="font-weight: bold;">About COVID-19</h1>
							
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-6 col-sm-12 ml-2 items-center pt-3 pl-3">
								<img src="images/virus.jpg" class="img-fluid" style="border-radius: 10px;">
								
							</div>
							
							<div class="col-lg-5 col-md-6 col-sm-12 pt-3 pl-3">
								<h2 style="font-weight: bold; text-align: center;">What is Coronavirus ?</h3>
								<p  style="text-align: center !important;">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

								Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.
								</p>
							</div>
							
						</div>
						
					</div>



<!-- ////////////////////////////covid19 update section///////////////////////////////// -->
<br><br>
							<div class="corona_updates container-fluid" id="livecount">
							<div class="mb-3">
								<h2 style="font-weight: bolder;" class="text-center text-danger" >Covid19 Live Updates</h2>
							</div>

							<div class="table-responsive">
								<table class="table table-bordered table-striped text-center" id="tval"> 
									<tr>
										<th>Country</th>
										<th>Total Confirmed</th>
										<th>Total Recovered</th>
										<th>Total Deaths</th>
										<th>New Confirmed</th>
										<th>New Recovored</th>
										<th>New Deaths</th>
									</tr>
								</table>

							</div>

							
						    </div>

						    <a href="indialivecount.php" class="text-capitalize text-info" style="padding-left:10%; padding-top: 40%; margin-top: 20%; align-items: center;text-align: center;" >Click here for india Live count (statewise)</a>
						
						

					<!-- ///////////////////////////////Symptoms//////////////////////////// -->
					<div class="container-fluid colored_section pt-5 pb-5" id="symptoms" style="background-color: white !important;">
						<div class="section_header mt-4 mb-5  text-center">
							<h2 style="font-weight: bold;">Coronavirus Symptoms</h2>
							
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



					<div class="container-fluid  pt-5 pb-5 " id="prevention" style="background-color: #e3e3de !important;">
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
		
					

					
<!-- 						<div class=" container scrolltop float-right pr-5">

	<i class="fa fa-arrow-up" onclick="topfunction()" id="mybtn"></i>
	
</div>  -->

 
	
		</div>


<!-- //////////////////top button///////////// -->
  <a href="#" style="" class="mr-3 pull-right"><i class="fa fa-arrow-up" id="mybtn"></i></a>


				<!-- ////////////////////footer///////////// -->
			<footer class="mt-5 myfoot">
				<div class="text-center container pt-2 pb-2">
					<h5>made by <a href="https://kannav4199.github.io/">KANNAV SHARMA</a></h5>
					<p><a href="index.php">Covid19Explorer@2020</p>
				</div>

			</footer>

	</div>

	<script type="text/javascript">
		
			function fetch(){
				$.get("https://api.covid19api.com/summary",
					function(data)
					{
						var tbval=document.getElementById('tval');
						for (var i = 1;i<(data['Countries'].length);i++) {
							var x=tbval.insertRow();
							x.insertCell(0);

							tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
							tbval.rows[i].cells[0].style.background='#7a4a91';
							tbval.rows[i].cells[0].style="position: sticky; left: 0; background-color: #00bcd4;";
							tbval.rows[i].style.color='white !important';

							x.insertCell(1);
							tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
							tbval.rows[i].cells[1].style.background='#35c1fc';
							

							x.insertCell(2);
							tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
							tbval.rows[i].cells[2].style.background='#00cf0a';


							x.insertCell(3);
							tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
							tbval.rows[i].cells[3].style.background='#9c0606';
							

							x.insertCell(4);
							tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
							tbval.rows[i].cells[4].style.background='#f52a2a';


							x.insertCell(5);
							tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
							tbval.rows[i].cells[5].style.background='green';
							

							x.insertCell(6);
							tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
							tbval.rows[i].cells[6].style.background='red';
						}
					});
			}


	// 		var mybtnn=document.getElementById("mybtn");
	// window.onscroll=function(){scroll()};
	// function scroll() {
	// 	if(document.body.scrolltop>100||document.documentElement.scrolltop>100){
	// 		mybtnn.style.display="block";}
	// 		else{
	// 			mybtnn.style.display="none";
	// 		}
	// 	}

	// 		function topfunction(){
	// 			document.body.scrolltop=0;//for safari
	// 			document.documentElement.scrolltop=0;////forchrome
	// 		}

	</script>


</body>
</html>