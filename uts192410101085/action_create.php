<?php
    include_once 'connect.php';

    if(isset($_POST["bsimpan"])){
      $simpan = mysqli_query($db, "INSERT INTO city (ID, Name, CountryCode, District, Population)
                                   VALUES('$_POST[ID]',
                                         '$_POST[Name]',
                                         '$_POST[CountryCode]',
                                         '$_POST[District]',
                                         '$_POST[Population]')
                                  ");
      if($simpan){
          echo "<script>
                  alert('Data Berhasil Ditambahkan');
                  document.location.href = 'index.php'
                </script>";
      } 
      else {
          echo "<script>
                  alert('Data Gagal Ditambahkan');
                  document.location.href = 'create.php'
                </script>";
      }

}

?>