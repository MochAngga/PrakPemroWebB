<?php
require_once 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>192410101085</title>
  </head>
  <body>
  <header class="text-center">    
        <h1>UTS PEMROGRAMAN WEBSITE</h1>
        <h2>KELAS B</h2>
        <h3>DAFTAR KOTA</h3>
    </header>
    
    <div class="container">
        <div class="text-right mb-2">
            <a href="create.php" class="btn btn-primary">Tambah Baru</a>
        </div>
        <table border="1" class="text-center table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>CountryCode</th>
                <th>District</th>
                <th>Population</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php

            $batas = 200;
            $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

            $previous = $halaman - 1;
            $next = $halaman + 1;

            $data = mysqli_query($db,"select * from city order by ID asc");
			$jumlah_data = mysqli_num_rows($data);
			$total_halaman = ceil($jumlah_data / $batas);

			$data_kota = mysqli_query($db,"select * from city limit $halaman_awal, $batas");
			$nomor = $halaman_awal+1;

            while($dt = mysqli_fetch_array($data_kota)){   
            ?>
                <tr>
                    <td><?=$dt['ID'];?></td>
                    <td><?=$dt['Name'];?></td>
                    <td><?=$dt['CountryCode'];?></td>
                    <td><?=$dt['District'];?></td>
                    <td><?=$dt['Population'];?></td>
                    <td><a href="update.php?hal=edit&id=<?=$dt['ID']?>"class="btn btn-success">Edit</a></td>
                    <td><a href='delete.php?hal=hapus&id=<?=$dt['ID']?>" 
                    onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                </tr>
                <?php
                }
            ?>

        </tbody>
        </table>
    <p>Total: <?php echo mysqli_num_rows($data_kota) ?></p>
    </div>
    <nav>
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					if ($halaman==$x){
                       ?>
                       <li class="page-item active"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                       <?php 
                    }
                    else{
                        ?>
                        <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                        <?php
                    }
                    ?> 
					
					<?php
				}
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>
			</ul>
		</nav>
                
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