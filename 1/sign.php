<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="../js/bootstrap.min.js"></script>
	<script url:"../includes/nb.js"></script>

<style>

		@font-face {
		    font-family: 'harry_potterregular';
    		src: url('../fonts/harrp___-webfont.woff2') format('woff2'),
         	url('../fonts/harrp___-webfont.woff') format('woff');
    		font-weight: normal;
    		font-style: normal;

			}
			.ih{
							font-family: 'harry_potterregular';
							padding-top:10px;
							padding-left: 300px;
							font-size: 30px;
							position:absolute;
						}


		body {
    			background: url("../images/423162.jpg");
			    background-repeat: no-repeat;
			   background-size: 1980PX 1000PX;

				  color:white;
		}
		h1 {
			padding-top:60px;
		    font-family: 'harry_potterregular';
		    font-size: 75px;
			text-align: center;
			color:white;
			}



		#form1 {

				padding : 200px ;
text-align: justify;
			    font-family: 'harry_potterregular';
    			font-size:30px;
    			color:white;
		}
		#form1 input{
				background: transparent;
		}

		input[type=text] {
    			margin: 5px 0;
    			box-sizing: border-box;
    			border: 2px transparent blue ;
    			border-radius: 10px;
    			color:white;
		}
		button{

						font-family: 'harry_potterregular';
						font-size=40px;
		}




</style>

		<title>WELCOME TO ITH</title>

</head>

<body>

			<h1>WELCOME  TO  INTERNET  HUNTERS</h1>

		<form id="form1" action="signup.inc.php" method="POST">
			<div class="ih">
				HUNTERS  NAME...!!<input type="text" name="first" autocomplete="off" 	placeholder="Name">
				<br>
				<br>
				GOD  OF  HUNTER  ASKS  YOUR  ADDRESS?<input type="text" name="email" autocomplete="off" placeholder="E-Mail">
				<br>
				<br>
				WUMPUS  WANTS  TO  CALL  YOU..!!!<input type="text" name="number" autocomplete="off" placeholder="Mobile Number">
				<br>
				<br>

				<button type="submit" name="submit" class="btn btn-default btn-lg">ENTER</button>
</div>
	</form>

</body>
</html>
  
