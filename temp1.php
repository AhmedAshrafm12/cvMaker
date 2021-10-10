<html>

<?php 


$temp='t1';
$tit='personal cv';
$u=intval($_GET['uni']);
include('header.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
$co= $_POST['color']; 
$uni=$u;
   $stmt2=$con->prepare("UPDATE cv SET color=? WHERE uniq=?");
   $stmt2->execute(array($co,$u));
   header("Refresh:0");}
   


$stnt=$con->prepare('select * from cv where uniq=? ');
$stnt->execute(array($u));
$row=$stnt->fetch();
$skills=explode(',',$row['skills']);

$exphead=explode(',',$row['exphead']);
$exps=explode(',',$row['expsince']);
$expt=explode(',',$row['expto']);
$expr=explode(',',$row['exproles']);

$edn=explode(',',$row['eduname']);
$eds=explode(',',$row['edusince']);
$edt=explode(',',$row['eduto']);

$cern=explode(',',$row['cer']);
$cert=explode(',',$row['cerat']);
$int=explode(',',$row['inter']);





?>











</div>

<div class='co'>
<div class='head tcol'>
<h1><?php echo $row['name']?></h1>
<h3><?php echo $row['title']?></h3>
<ul>
<li><h4><i class="fa fa-address-card-o" aria-hidden="true"></i>  <span><?php echo $row['adress']?></span></h4></li>
<li><h4><i class="fa fa-phone-square" aria-hidden="true"></i></i> <span><?php echo $row['mobile']?></span></h4></li>
<li><h4><i class="fa fa-envelope" aria-hidden="true"></i>  <span><?php echo $row['email']?></span></h4></li>

</ul>
</div>
<div>
<div class='row'>
<div class='col-md-12'>
<div class='pers mar'>
<p class='lead'><?php echo $row['sumary']?></p>
</div>
<div class='skills mar'>
<h2> <i class="fa fa-hand-rock-o" aria-hidden="true"></i> skills</h2>
<hr>
<ul>
<?php 
foreach($skills as $s){
    if($s !='')
    echo "<li>".$s."</li>";
}
?>
</ul>
</div>
<div class='langs mar
<?php
if(count($int)==3 && $int[2]==''){
    echo("empty");
}

?>
'>
<h2> <i class="fa fa-language" aria-hidden="true"></i> languages</h2>
<hr>
<ul>
    <?php 
for($i=0;$i<count($int);$i++){
    if(!empty($int[$i]))
    echo"<li>".$int[$i]."</li>";
}
?>
</ul>
</div>
</div>


<div class='col-md-12'>
<div class='exps mar
<?php
if(count($exphead)==3 && $exphead[2]==''){
    echo("empty");
}

?>

'>
<h2><i class="fa fa-briefcase" aria-hidden="true"></i> Experiances</h2>
<hr>

<?php 
for($i=0;$i<count($exphead);$i++){
    if(!empty($exps[$i])){
    echo"<div><h3><span class='esp'>".$exps[$i]."</span>".$exphead[$i]."</h3>";
    echo "<p class='lead'><span class='eto'>".$expt[$i]."</span>".$expr[$i]."</p></div>";}
}
?>

</div>



<div class='edu mar  
<?php
if(count($edn)==3 && $edn[2]==''){
    echo("empty");
}

?>
' >
<h2> <i class="fa fa-graduation-cap" aria-hidden="true"></i> Education</h2>
<hr>
<?php 
for($i=0;$i<count($edn);$i++){
    if(!empty($edn[$i])){
    echo"<div><h3>".$edn[$i]."</h3>";
    echo "<p><span class='eto'>".$eds[$i]."</span> <span class='eto'>".$edt[$i]."</span></p></div>";}
}
?>
</div>


<div class='cer mar <?php

if(count($cern)==3 && $cern[2]==''){
    echo("empty");
}

?>'>
<h2><i class="fa fa-certificate" aria-hidden="true"></i> certifications</h2>
<hr>
<?php 
for($i=0;$i<count($cern);$i++){
    if(!empty($cern[$i])){
    echo"<div><h3><span>".$cert[$i]."</span>".$cern[$i]."</h3>";
    echo "</div>";}
}
?>
</div>


<div class='chcolor'>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?uni=<?php echo $uni?>" method='POST' style='margin-top:30px'>
      <div class='form-group'>
        <input type="color" name="color"  value="<?php echo $row['color'] ?>" style='width:200px;margin-top:10px;display:block '/>
      <input type="hidden" class='intv' value="<?php echo $int?>" name='intv'>
      <input type="hidden" value="<?php echo $uni?>" name='uniq'>
      <input type="submit" name="" value="Applay" class='btn btn-info btn-block' style='width:200px;margin-top:10px '>
     </div>
</form>
</div>

      
 
<button class='changeColor btn btn-danger'>change main color</button>
<button class='print btn btn-success'>Save this Cv</button>

</div>




</div>


</div>



<?php include('footer.php')?>;

</body>

</html>