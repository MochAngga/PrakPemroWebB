<?php
include_once 'connect.php';

    if(isset($_GET['hal'])){
        if($_GET['hal'] == "edit"){
            $tampil = mysqli_query($db, "SELECT * FROM city WHERE ID = '$_GET[id]' ");
            $dt = mysqli_fetch_array($tampil);
            if($dt)
            {
                $vID = $dt['ID'];
                $vName = $dt['Name'];
                $vCountryCode = $dt['CountryCode'];
                $vDistrict = $dt['District'];
                $vPopulation = $dt['Population'];
            }
        }
    
    
    }

    if(isset($_POST["bsimpan"])){
        if($_GET['hal'] == "edit"){
            $edit = mysqli_query($db, "UPDATE city set
                                       ID = '$_POST[tID]',
                                       Name = '$_POST[tName]',
                                       CountryCode = '$_POST[tCountryCode]',
                                       District = '$_POST[tDistrict]',
                                       Population = '$_POST[tPopulation]'
                                       WHERE ID = '$_GET[ID]'
                                  ");
            if($edit){
                echo "<script>
                        alert('Data Berhasil Diedit');
                        document.location.href = 'index.php'
                      </script>";
            } 
            else {
                echo "<script>
                        alert('Data Gagal Diedit');
                        document.location.href = 'create.php'
                      </script>";
            }
        }else{
            $simpan = mysqli_query($db, "INSERT INTO city (ID, Name, CountryCode, District, Population)
                                   VALUES('$_POST[tID]',
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
    }

?>