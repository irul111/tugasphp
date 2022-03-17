<!DOCTYPE html>
<html>
  <head>
    <title>Looping PHP</title>
	
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
			<h2>Data pegawai</h2><hr/>		
			
			<b><label>Nama : </b> </label>
			<b><input type="text" name="fnama" id="fnama" />
			
			<label>Pekerjaan :</label>
			<input type="text" name="pekerjaan" id="pekerjaan" />

            <label>Hobby:</label>
            <input type="radio" name="method" value="post" id= "hobby" >Hobby</span>
				
			<input type="submit" name="submit" id="submit" value="Simpan">
		  </form>
		<?php include "proses.php";?>
		</div>
   </div>

  </body>
</html>