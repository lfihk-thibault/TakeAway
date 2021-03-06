<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Coding&Chill">

    <title>Take Away</title>

    <link href="css/bootstrap.css" rel="stylesheet">


    <link href="css/3-col-portfolio.css" rel="stylesheet">



</head>

<body>
<?php
	if (!isset($_POST['order_code'])) {
		header("Location: http://172.16.5.217/Hackathon/App/TakeOut/www/Takeout_interface/restaurants");
		die();
	}
	$Order_Code =  $_POST['order_code'];
	$time =  $_POST['time'];
	$order = $_POST['order'];
	$price = $_POST['price'];
	
	$con = mysqli_connect("localhost","root","","Hackathon");
	$res = mysqli_query($con, "SELECT * FROM current_order WHERE current_order.order_code = '$Order_Code'");
	
	while($row = mysqli_fetch_array($res) ) {
		$Code = $row['id'];
	}
?>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="img-responsive" src="./img/takeoutlogo1.png" alt="" style="vertical-align:middle" width="100px"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="restaurants.html"><b>Restaurants</b></a>
                    </li>
                    <li>
                        <a href="#"><b>Orders</b></a>
                    </li>
                    <li>
                        <a href="#"><b>Favourites</b></a>
                    </li>
					<li>
                        <a href="#"><b>Profile</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-md-12">
			<center>
                <h3 class="page-header">
				
					Order Food
                </h3>
			</center>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
		<div class="row">
		<div class="col-md-3">
            <table style="width:100%"> 
				<tr>
					<td style="vertical-align:middle"  align="center" valign="middle">
						<img class="img-responsive" src="./img/chezpatrick.png" alt="" style="vertical-align:middle" width="150px">
					</td>	
				</tr>
				<tr>
					<td style="vertical-align:middle"  align="center" valign="middle">
						<img class="img-responsive" src="./img/6.png" alt="" style="vertical-align:middle" width="150px">
					</td>	
				</tr>
				<tr>
					<td style="vertical-align:middle"  align="center" valign="middle">
						<img class="img-responsive" src="./img/fave.png" alt="" style="vertical-align:middle" width="150px">
					</td>	
				</tr>
				<tr>
					<td style="vertical-align:middle"  align="center" valign="middle">
						<img class="img-responsive" src="./img/address.png" alt="" style="vertical-align:middle" width="125px">
					</td>	
				</tr>
				<tr>
					<td bgcolor="#FFFFFF" colspan="3">&nbsp </td>
				</tr>
				<tr>
					<td style="vertical-align:middle"  align="center" valign="middle">
						<img class="img-responsive" src="./img/map.png" alt="" style="vertical-align:middle" width="80px">
					</td>	
				</tr>
				<tr>
					<td bgcolor="#FFFFFF" colspan="3">&nbsp </td>
				</tr>
				<tr>
					<td style="vertical-align:middle"  align="center" valign="middle">
						<img class="img-responsive" src="./img/tel.png" alt="" style="vertical-align:middle" width="175px">
					</td>	
				</tr>
			</table>
		</div>
		<div class="col-md-9">
			<h3><b>Payment Confirmation</b></h3>
			Thank you for using Take Out! <br>
			Please remember to pick up your order at <?php print $time; ?> with your order code. 
			<br> <br>
			<h4><b>Order Code </b></h4>
			<h5><?php print $Code ?></h5>
			<br>
			<h4><b>Order List {<?php print $price; ?>$}</b></h4>
			<h5><?php print $order; ?></h5> 


		</div>
		

        <!-- Footer -->
        <footer>
            <div class="row" id="footer">
                    <center><p>Copyright 2017 &copy; Coding & Chilling</p></center>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
