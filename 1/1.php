<!DOCTYPE html>
<?php require 'timer.php' ?>
<html>
	<head>
		<link rel="stylesheet" href="	../css/bootstrap.min.css">
		<script src="../js/bootstrap.min.js"></script>
		<script src="nb.js"></script>
		<script src="../js/jquery.min.js"></script>


	<script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });

    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});
</script>

	<style>

		@font-face {
				    font-family: 'harry_potterregular';
    				src: url('../fonts/harrp___-webfont.woff2') format('woff2'),
         			url('../fonts/harrp___-webfont.woff') format('woff');
    				font-weight: normal;
    				font-style: normal;

			}
			@font-face {
			font-family: 'lumoslatinoregular';
			src: url('../fonts/wizards_magic-webfont.woff2') format('woff2'),
			url('../fonts/wizards_magic-webfont.woff') format('woff');
			font-weight: normal;
			font-style: normal;

			}



		body {
    				background: url("../images/bg/1.jpg");
			    	background-repeat: no-repeat;
 background-size: cover;
				  color:white;
		}
		h1 {
				padding-top:20px;
			    font-family: 'lumoslatinoregular';
			    font-size: 50px;
				text-align: center;
				color:Red;
			}



		#form1 {

				padding: 120px ;
			   	text-align: center;
			    font-family: 'harry_potterregular';
    			font-size:25px;
    			color:white;
		}
		#form1 input{

				background: transparent;

		}

			input[type=input] {

    			font-size:50px;
    			box-sizing: border-box;
    			border: 2px transparent blue ;
    			border-radius: 10px;
    			width:700px;
    			height:100px;
    			color:black;
		}

		button{
				font-family: 'harry_potterregular';
				font-size=40px;
		}

	</style>

	</head>

	<body>

			<h1>Identify the given CPU component.<h1>
				<img src="../images/ih1/1-1.png" style="width:300px;height:300px;">


			<form id="form1" action="" method="post">

			<input  type="input" name="ans" id="ans"	 autocomplete="off" spellcheck="false" placeholder="YOUR ANSWER">
			</form>

	<?php

			error_reporting(0);
			$ans2 = ($_POST['ans']);
			$ans2 = strtolower("$ans2");

			if ($ans2 == "processor fan")
			{
				setcookie('score', "1", time()+1800);

				header("Location: 2.php");

			}
 	?>
</body>
</html>
