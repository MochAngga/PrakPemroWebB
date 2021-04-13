<?php
    // tipe data
    $int = 12;
    $str = "asd";
    $dbl = 1.1;
    $arr = ["a", "b", "c"];

    // array associative
    $arr2 = [
        'nama' => 'asd',
        'nim' => '01',
        'umur' => '20'
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World!</title>
</head>
<body>
    <?php
        // cara print
        echo $int;
        echo $str;
    ?>
    <!-- ///////////// -->

    <?php
    // looping
        for($i = 0; $i < 5; $i++) {

            // if else
            if($i % 2 == 0) { ?>
                <p>genap</p>
            <?php } else { ?>
                <p>ganjil</p>
            <?php }

        } ?>
    <!-- ///////////// -->

    <?php 
        // penjumlahan string
        echo $str . " " . $str;
    ?>
    <!-- ///////////// -->

    <?php 
        // vardump
        var_dump($arr);
    ?>
    <!-- ///////////// -->

    <?php 
        //foreach array
        foreach($arr as $a) {
            echo $a . " ";
        }
    ?>
    <!-- ///////////// -->
    
    <?php 
        //echo array
        echo $arr[1];
        echo $arr2["nim"]
    ?>
    
</body>
</html>