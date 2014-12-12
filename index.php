<?php 
	if(isset($_POST['number']) && !empty($_POST['number'])) {
		if($_POST['number'] > 100) {
			$number = 100;
		} else {
			$number = $_POST['number'];
		}
	} else {
		$number = 1;
	}

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<div>
 		<div style="margin-top:10px; width:200px; height:20px; background-color:gray;" id="bar">
 			<div style="height:100%; width:<?= $number ?>%; background-color:red;">
 				
 			</div>
 		</div>
 		<div>
 			<form method="post" action="index.php">
 				<input type="number" name="number" id="number" autocomplete="off">
 				<button>Submit</button>
 			</form>
 		</div>
 	</div>
 </body>
 </html>
 <script src="js/jquery.min.1.9.1.js"></script>
 <script type="text/javascript" >
$(document).ready(function(){

	$("#number").change(function(){
		var number = $("#number").val();
		if(parseInt(number) > 100) {
			number = 100;
		} else if(!number) {
			number = 1
		}
		$("#bar").html('<div style="height:100%; width:'+number+'%; background-color:red;">');
	});

});

 </script>
