<!DOCTYPE html>
<html>
<head>
	
	<title>Covid19Exploer</title>
<?php include 'link/links.php' ?>
	
	<?php include 'css/style.php'; ?>
</head>

<body >

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
						        <a class="nav-link" href="#indialivecount">Live count</a>
						      </li>
						      
						      
						    </ul>
						    
						  </div>

			</nav>

			<!-- //////////////////////////////////India Live Count update/////////////////////////////// -->

			<div class="container-fluid">
				<h2 class="text-center ">India Covid19 Cases Live Count</h2>

				<br><br>
				<div class="corona_updates container-fluid" id="indialivecount">
							<div class="mb-3">
								<h2 class="text-center text-danger">Covid19 Live Updates</h3>
							</div>

							<div class="table-responsive">
								<table class="table table-bordered table-striped text-center" id="tval"> 
									<tr>
										<th>State</th>
										<!-- <th>Total Confirmed</th>
										<th>Total Recovered</th>
										<th>Total Deaths</th>
										<th>New Confirmed</th>
										<th>New Recovored</th>
										<th>New Deaths</th> -->
									</tr>

									<?php
										$data=file_get_contents('https://api.covid19india.org/data.json');
										$coronalive=json_decode('$data',true);
											$states=count($coronalive['statewise']);
										$i=1;
										while($i<$states)
										{
											?>

											<tr>
												<td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
											</tr>

<?php
											$i++;
										}
									?>
								</table>
							</div>
						    </div>
				
			</div>




<!-- //////////////////top button///////////// -->
  <a href="#" style="" class="mr-3 pull-right"><i class="fa fa-arrow-up" id="mybtn"></i></a>


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