<?php
	include_once 'connect.php';

    $id = $_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM city WHERE id =$id");

    while($data_edit = mysqli_fetch_array($result)){
      $Name = $data_edit['Name'];
      $CountryCode = $data_edit['CountryCode'];
      $District = $data_edit['District'];
      $Population = $data_edit['Population'];
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>UPDATE KOTA</title>
  </head>
  <body>
    <div class="container">
    		<h1 class="text-center">UPDATE DATA</h1>
      	<div class="card">
    			<div class="card-header bg-primary text-white">
    				Edit Data Kota
    			</div>
    			<div class="card-body">
    				<form action="action_update.php" method="POST">
    					<div class="form-group">
    						<label>Name</label>
    						<input type="text" name="tName" value="<?= $Name;?>" class="form-control" placeholder="Edit nama kotamu"required><br>
    					</div>	
    					<div class="form-group">
    						<label>CountryCode</label>
    						<input type="text" name="tCountryCode" value="<?=$CountryCode;?>" class="form-control" placeholder="Edit kode negaramu"required><br>
    					</div>
    					<div class="form-group">
    						<label>District</label>
    						<input type="text" name="tDistrict" value="<?=$District;?>" class="form-control" placeholder="Edit provinsimu"required><br>
    					</div>	
    					<div class="form-group">
    						<label>Population</label>
    						<input type="number" name="tPopulation" value="<?=$Population;?>"" class="form-control" placeholder="Edit jumlah penduduk di daerahmu"required><br> <br>
    					</div>	
    					<button type="submit" name="bsimpan" class="btn btn-success">Simpan</button>
    					<button type="reset" name="breset" class="btn btn-danger">Kosongkan</button>
                        <div class="text-right mb-1">
            		    <a href="index.php" class="btn btn-info">Kembali</a>
       				    </div>		
    				</form>
    			</div>
    
    
    	</div>
      </div>
      </form>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>