<?php
$dir = "../assets/img/slider/*";
foreach (glob($dir) as $file) {
    
}
$phpArray = glob($dir);
$len = count($phpArray);
//print_r($phpArray);
?>
<!doctype html>
<html lang="da-DK">
    <head>
        <title>MASAT SPIL</title>
        <meta charset="utf-8">
        <!--<link  rel="stylesheet" type="text/css" href="assets/core.css">-->
        <meta name="viewport" content="width=device-width, initial-scale=1,
              minimum-scale=1, maximum-scale=1" />
        <link rel="icon" href="http://amw.nu/assets/img/favicon/blue_arrow.png">
        <style>
            #slides{
                position: relative;
                height: 300px;
                width: 60%;
                margin: auto;
                background-color: grey;
            }
            #img{
                position: absolute;
                width: 100%;
                height: auto;
            }
        </style>
    </head>
    <body>
<div id="slides">
    <?php
    for( $i=1; $i<= $len; $i++ ){
     
        ?>
    <img src="<?php echo $phpArray[$i]; ?> " id="img">
    
    <?php   
    }
    ?>
</div>
<script>
    var imgagePathAr = <?php echo json_encode($phpArray); ?>;

</script>

    </body>
</html>