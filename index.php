<!DOCTYPE html>
<html>
  <head>
    <title>Nilai</title>
	
	<!-- include css file here-->
   <link rel="stylesheet" href="css/style.css"/>
   
	<!-- include JavaScript file here-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/metode.js"></script>
  </head>	
 
  <body>
	<div class="container">
		<div class="main">
	      <form  method="POST" action="index.php" id="form">
			<h2>Nilai</h2><hr/>		
			
			<label>Nama :</label>
			<input type="text" name="fnama" id="fnama" />
			
			<label>Matpel :</label>
			<input type="text" name="matpel" id="matpel" />

			<label>Nilai :</label>
			<input type="text" name="nilai" id="nilai" />
			
			<label>Metode :</label>
			<input type="radio" name="method" value="post" > POST </span>	
			<input type="submit" name="submit" id="submit" value="Simpan">
		  </form>
		<?php include "proses.php";?>
		</div>
   </div>

  </body>
</html>