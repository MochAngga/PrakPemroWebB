<?php
    include_once 'connect.php';

    // $data_edit = mysqli_query($db, "SELECT * FROM city WHERE ID ='$_GET[ID]'");$result = mysqli_fetch_array($data_edit);
    if(isset($_POST['bsimpan'])) {
      $Name = $_POST['@vName'];
      $CountryCode = $_POST['@vCountryCode'];
      $District = $_POST['@vDistrict'];
      $Population = $_POST['@vPopulation'];

      $result = mysqli_query($db, "UPDATE city SET Name='$Name', CountryCode='$CountryCode', District='$District', Population='$Population' WHERE id=$id"); 
    }
?>
<?php
    $id = $_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM city WHERE id =$id");

    while($data_edit = mysqli_fetch_array($result)){
      $Name = $_POST['@vName'];
      $CountryCode = $_POST['@vCountryCode'];
      $District = $_POST['@vDistrict'];
      $Population = $_POST['@vPopulation'];
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