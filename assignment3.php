<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>
	<link rel="stylesheet" href="./assignment3.css">
	<link rel="stylesheet" href="./bootstrap/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?php
	require 'Building.php';
	require 'Apartment.php';
	$building1 = new Building("3369 Parkview Avenue",500000,45,0.18,2200,450000);
	$building2 = new Building("407 Semple Street",300000,36,0.48,1600,240000);
	$building3 = new Building("166 Crossing Ridge Trail",260000,24,2.5,16000,180000);
	$apartment1 = new Apartment("3805 University Drive C",33200000,45,0.078,99640,26000000,48,550);
	$apartment2 = new Apartment("6001 University Blvd",20000000,10,0.15,150000,15000000,36,500);
?>
	<header>
		<h1 class="jumbotron head" style="text-align: center; background: ;">Welcome to the Apartment-data presenter! </h1>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<table class="table-bordered table-responsive">
					<tr>
						<th>Address  </th>
						<th>Price  </th>
						<th>Square Feet  </th>
					   	<th>Payments Remaining  </th>
						<th>Remaining Balance  </th>
						<th>Interest Rate </th>
						<th>Number of Units </th>
						<th>Rate </th>
					</tr>
					<tr>
						<td> <?php echo $building1->address; ?> </td>
						<td> <?php echo $building1->original_price; ?> </td>
						<td> <?php echo $building1->square_feet; ?> </td>
						<td> <?php echo $building1->payments_remaining; ?> </td>
						<td> <?php echo $building1->remaining_balance; ?> </td>
						<td> <?php echo $building1->interest_rate; ?> </td>		
						<td> <?php echo "N/A"; ?> </td>	
						<td> <?php echo "N/A"; ?> </td>		
					</tr>
					<tr>
						<td> <?php echo $building2->address; ?> </td>
						<td> <?php echo money_format("%i", $building2->original_price) ?> </td>
						<td> <?php echo $building2->square_feet; ?> </td>
						<td> <?php echo $building2->payments_remaining; ?> </td>
						<td> <?php echo $building2->remaining_balance; ?> </td>
						<td> <?php echo $building2->interest_rate; ?> </td>		
						<td> <?php echo "N/A"; ?> </td>	
						<td> <?php echo "N/A"; ?> </td>	
				
					</tr>
					<tr>
						<td> <?php echo $building3->address; ?> </td>
						<td> <?php echo $building3->original_price; ?> </td>
						<td> <?php echo $building3->square_feet; ?> </td>
						<td> <?php echo $building3->payments_remaining; ?> </td>
						<td> <?php echo $building3->remaining_balance; ?> </td>
						<td> <?php echo $building3->interest_rate; ?> </td>	
						<td> <?php echo "N/A"; ?> </td>	
						<td> <?php echo "N/A"; ?> </td>			
					
					</tr>
					<tr>
						<td> <?php echo $apartment1->address; ?> </td>
						<td> <?php echo $apartment1->original_price; ?> </td>
						<td> <?php echo $apartment1->square_feet; ?> </td>
						<td> <?php echo $apartment1->payments_remaining; ?> </td>
						<td> <?php echo $apartment1->remaining_balance; ?> </td>
						<td> <?php echo $apartment1->interest_rate; ?> </td>
						<td> <?php echo $apartment1->number_of_units; ?> </td>						
						<td> <?php echo $apartment1->retention_rate; ?> </td>	
						
					</tr>
					<tr>
						<td> <?php echo $apartment2->address; ?> </td>
						<td> <?php echo $apartment2->original_price; ?> </td>
						<td> <?php echo $apartment2->square_feet; ?> </td>
						<td> <?php echo $apartment2->payments_remaining; ?> </td>
						<td> <?php echo $apartment2->remaining_balance; ?> </td>
						<td> <?php echo $apartment2->interest_rate; ?> </td>
						<td> <?php echo $apartment2->number_of_units; ?> </td>						
						<td> <?php echo $apartment2->retention_rate; ?> </td>		
					

					</tr>
				</table>
			</div>
			<div class="col-lg-6">
				<h3> Search for your favorite apartments in the Pittsburgh area! </h3>
				<a href="www.zillow.com"><img class="img-rounded img-responsive" src="./skyvue.jpg"></a></img>
			</div>
		</div>
	</div>

<script>//Event Listener designed to actively await address input and respond with a specific example
 function inputAddresses(str){
	 var xmlhttp = new XMLHttpRequest();
	 xmlhttp.onreadystatechange = function() {
		 if (this.readyState == 4 && this.status == 200){

		 }
	 }
	 xmlhttp.open("GET", "printbuildings.php?q=" + str, true);
	 xmlhttp.send();
 }
</script>


</body>
</html>
