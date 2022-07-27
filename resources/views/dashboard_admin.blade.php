<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<style>
	.box{
		width: 22%;
		margin-left: 10px;
		margin-right: 10px;
		margin-top: 30px;
		box-shadow: 5px 5px 5px grey;

	}

	.icon{
		/*width: 35%;*/
		height: 12vh;
		padding-top: 10px;
		color: #707070;
	}

	.num{
		/*width: 65%;*/
		height: 12vh;
		font-size: 50px;
		color: #707070;
	}

	.name{
		color: #333;
	
		padding-top: 4px;
		padding-bottom: 4px;
		font-size: 18px;
	}

	.charts{
		margin-top: 30px;
		margin: 20px;
		margin-left: 10%;
		margin-top: 50px;
	}


	@media (max-width: 650px){
		.box{
			width: 85%;
			margin-left: 30px;
			margin-right: 30px;

		}
		.icon{
			width: 30%;
			height: 12vh;
			
			color: #707070;

			display: inline-block;
		}
		.num{
			width: 68%;
			display: inline-block;
			height: 12vh;
			font-size: 50px;
			color: #707070;
		}
		.charts{
		
	}

}
</style>

<body>

<div>
	<div class="row">
		<div class="col-sm-3 col-md-3 col-lg-3 box" style="margin-left: 30px; " >
				<div class="row" style="background: linear-gradient(to bottom, #33cc33 0%, #99ff99 100%);">
						<div class="col-sm-3 col-md-6 col-lg-6 icon" style=" background: linear-gradient(to bottom, #33cc33 0%, #99ff99 100%);">
							<center><i class="fa fa-desktop" style='font-size:50px'></i>
							</center>
						</div>
						<div class="col-sm-3 col-md-6 col-lg-6 num" style="background: linear-gradient(to bottom, #33cc33 0%, #99ff99 100%);">
							
							<center>{{$data}}</center>
						</div>
				</div>
				<div class="row name" ><center>Total Students</center></div>
			</div>



			<div class="col-sm-3 col-md-3 col-lg-3 box" >
				<div class="row" style="background: linear-gradient(to bottom, #6699ff 0%, #99ccff 100%);">
						<div class="col-sm-6 col-md-6 col-lg-6 icon" style="background: linear-gradient(to bottom, #6699ff 0%, #99ccff 100%);">
							<center><i class="fa fa-user" style='font-size:50px'></i>
							</center>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 num" style="background: linear-gradient(to bottom, #6699ff 0%, #99ccff 100%);">
							<center>{{$data1}}</center>
						</div>
				</div>
				<div class="row name" ><center>Total Teachers</center></div>
			</div>
			




			<div class="col-sm-3 col-md-3 col-lg-3 box" >
				<div class="row" style="background: linear-gradient(to bottom, #ff6666 0%, #ffcc99 100%);">
						<div class="col-sm-6 col-md-6 col-lg-6 icon" style="background: linear-gradient(to bottom, #ff6666 0%, #ffcc99 100%);">
							<center><i class="fa fa-user" style='font-size:50px'></i>
							</center>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 num" style="background: linear-gradient(to bottom, #ff6666 0%, #ffcc99 100%);">
							<center>{{$data3}}</center>
						</div>
				</div>
				<div class="row name" ><center>Logged Students</center></div>
			</div>
			



			<div class="col-sm-3 col-md-3 col-lg-3 box" >
				<div class="row" style="background: linear-gradient(to bottom, #33ccff 0%, #ccffff 100%);">
						<div class="col-sm-6 col-md-6 col-lg-6 icon" style="background: linear-gradient(to bottom, #33ccff 0%, #ccffff 100%);">
							<center><i class="fa fa-university" style='font-size:50px'></i>
							</center>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 num" style="background: linear-gradient(to bottom, #33ccff 0%, #ccffff 100%);">
							<center>{{$data2}}</center>
						</div>
				</div>
				<div class="row 	name" ><center>Total Examinations</center></div>
			</div>
						



			

	</div>




<div class="row" style="margin-top: 60px;">
	
		<div class="col-sm-12 col-md-12 col-lg-12">
			<center><iframe src="barchart" style="width: 90%; height: 85vh;"></iframe></center>
		</div>
</div>




	</body>
</html>