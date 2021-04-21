<?php
    include_once 'connect.php';

    if(isset($_POST['bsimpan'])) {
      $Name = $_POST['Name'];
      $CountryCode = $_POST['CountryCode'];
      $District = $_POST['District'];
      $Population = $_POST['Population'];

      $result = mysqli_query($db, "UPDATE city SET Name='$Name', CountryCode='$CountryCode', District='$District', Population='$Population' WHERE id=$id"); 
    }
?>
<?php
    $id = $_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM city WHERE id =$id");

    while($data_edit = mysqli_fetch_array($result)){
      $Name = $_POST['Name'];
      $CountryCode = $_POST['CountryCode'];
      $District = $_POST['District'];
      $Population = $_POST['Population'];
    }
    if($result){
      echo "<script>
              alert('Data Berhasil Diedit');
              document.location.href = 'index.php'
            </script>";
      } 
      else {
          echo "<script>
                  alert('Data Gagal Diedit');
                  document.location.href = 'update.php'
                </script>";
      }

?>