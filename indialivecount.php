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
						        <a class="nav-link" href="index.php#about">about</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="index.php#symptoms">symptoms</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="index.php#prevention">prevention</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="index.php#livecount">Live count World</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="indialivecount.php">Live count India</a>
						      </li>
						      
						    </ul>
						    
						  </div>

			</nav>

			<!-- //////////////////////////////////India Live Count update/////////////////////////////// -->

			<div class="container-fluid pt-5">
				<h2 class="text-center  text-danger" style="font-weight: bolder;">India Covid19 Cases Live Count</h2>

				<br>
				<div class="corona_updates container-fluid pt-2" id="indialivecount">
							

							<div class="table-responsive">
								<table class="table table-bordered table-striped text-center"  id="tval"> 
									<tr>
										<th>State</th>
										<th>Total Confirmed</th>
										<th>Active</th>
										<th>Recovered</th>
										<th>Deaths</th>
										
									</tr>

									<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);



$i=1;
while($i < $statescount){
	?>

	<tr>
		<td style="position: sticky; left: 0; background-color: #00bcd4; "><?php echo $coranalive['statewise'][$i]['state'] ?></td>
		<td><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
		<td><?php echo $coranalive['statewise'][$i]['active'] ?></td>
		<td><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
		<td><?php  echo $coranalive['statewise'][$i]['deaths'] ?></td>

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

<br>
<br>

				<!-- ////////////////////footer///////////// -->
			<footer class="mt-5 myfoot">
				<div class="text-center container pt-2 pb-2">
					<h5>made by <a href="https://kannav4199.github.io/">KANNAV SHARMA</a></h5>
					<p><a href="index.php">Covid19Explorer@2020</p>
				</div>

			</footer>

	</div>



</body>
</html>