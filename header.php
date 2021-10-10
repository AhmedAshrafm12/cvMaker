
<?php include('connect.php');?>
<?php include('function.php');?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/wall.css" rel="stylesheet">
    <?php

     if(!isset($temp)){
        echo "<link href='css/ovv.css' rel='stylesheet'>";
           }  
            
    
    ?>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <?php
    
    ?>
    <title><?php echo $tit;?></title>
    <style>
        <?php
        if(isset($_GET['uni'])){
        $uni=$_GET['uni'];
            $stmt2=$con->prepare(" SELECT color from cv WHERE uniq=?");
            $stmt2->execute(array($uni));
            $co=$stmt2->fetch();
       
        if($temp=='t1'){
           echo ".head h1,.head h3, .head h2, .exps h2,.pers h2,.cer h2 ,.edu h2,.skills h2,.langs h2,.inter h2 {
            color:".$co[0]." !important;}";
            echo ".co {
                border-color:".$co[0]." !important;}";
        }else{
            echo ".head h2, .exps2 h2,.pers h2,.cer2 h2 ,.edu h2,.skills h2,.langs h2,.inter h2 {
                color:".$co[0]." !important;}";
                echo ".colo {
                    background-color:".$co[0]." !important;}";

        }}
        
        
        
        ?>

    </style>
</head>
<?php if(isset($nav)) {include('navbar.php');}; ?>