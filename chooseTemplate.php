<?php
$tit='chooseTemplate';
$temp = 'choose';
include "header.php";
 $int=$_POST['intv'];
 $uni=$_POST['uniq'];
 $col=$_POST['color'];
 $stmt=$con->prepare("UPDATE cv SET inter=? , color=? WHERE uniq=?");
    $stmt->execute(array($int,$col,$uni));

    $stmt2=$con->prepare(" SELECT color from cv WHERE uniq=?");
    $stmt2->execute(array($uni));
    $co=$stmt2->fetch();


 ?>
<div class='container'>
    
<h2>chose your temp</h2>
<a href="temp1.php?uni=<?php echo $_GET['uni']?>"><img src="temp1.png" class='tem'></a>
<a href="temp2.php?uni=<?php echo $_GET['uni']?>"><img src="temp3.png" class='tem'></a>



</div>
<?php include "footer.php"; ?>