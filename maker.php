<html>

<?php
 $tit='workSpace';
 include('header.php');
 if($_SERVER['REQUEST_METHOD']=='POST'){
}
$do=isset($_GET['do']) ? $_GET['do'] : 'name';
 ?>;
<?php

if($do=='name'){
  $r=rand(0,1000);
  $stmt = $con->prepare("INSERT INTO 
  cv(uniq)
VALUES(:un)");
$stmt->execute(array(
'un' 	=> $r,
)); 
?>

<div class='container '>
<div class='bacg'>
<div class='jop'>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?do=summary&uni=<?php echo $r?>" method='POST' class='log' >
   <div class='form-group'>
     <label >name</label>
   <input required type="text" name="name"  class='form-control'></div>

   <div class='form-group'>
     <label > job title</label>
   <input required type="text" name="title" id="" class='form-control'></div>

  <div class ='form-group'>
     <label >adress</label>
   <input required type="text" name="address" id="" class='form-control'></div>

     <div class='form-group'>
     <label >number</label>
   <input required type="text" name="number" id="" class='form-control'></div> 

   <div class='form-group'>
     <label >Email</label>
   <input required type="email" name="Email" id="" class='form-control'></div> 
   <input type="hidden" name="uniq" value="<?php echo $r?>">
    <input type="submit" name="" value="sub" class='btn btn-info btn-block'>
    </form>
    </div>
    </div>
</div>

<?php }elseif($do=='summary'){
    if($_SERVER['REQUEST_METHOD']=='POST'){
     $name=$_POST['name'];
     $tit=$_POST['title'];
     $add=$_POST['address'];
     $num=$_POST['number'];
     $email=$_POST['Email'];
     $uni=$_POST['uniq'];
     $stmt=$con->prepare("UPDATE cv SET name=?,title=?,adress=?,mobile=?,email=? WHERE uniq=?");
        $stmt->execute(array($name,$tit,$add,$num,$email,$uni)); 
    }
  
  
  ?>
  <div class='container'>
   <div class='bacg'>
  <div class='jop'>
   </div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?do=skills" method='POST' class='log' >
    <h2>Summary</h2>
       <div class='form-group'>
         <label >write proffissional summary about you</label>
       <textarea required style="height:100px;" type="text" name="sum" id="" class='form-control'></textarea></div>
       <input type="hidden" name="uniq" value="<?php echo $uni?>">
        <input type="submit" name="" value="sub" class='btn btn-info btn-block'>
        </form>
        </div></div></div>

  
<?php }elseif($do=='skills'){ 
     $sum=$_POST['sum'];
     $uni=$_POST['uniq'];
     $stmt=$con->prepare("UPDATE cv SET sumary=? WHERE uniq=?");
        $stmt->execute(array($sum,$uni)); 
    
  ?>
<div class='container'>
  <div class='bacg'>
   <div class='jop'>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?do=exp" method='POST' class='log skills' >
    <h2>Skills</h2>
       <div class='form-group'>
       <div class='form-group'>
         <label >follow each skill with (,)</label>
       <textarea required style="height:100px;" type="text" name="skills" id="" class='form-control'></textarea></div>
       <input type="hidden" name="uniq" value="<?php echo $uni?>">
        <input type="submit" name="" value="sub" class='btn btn-info btn-block'>
        </form>
        </div>
  
        <?php }elseif($do=='exp'){ 
               $skill=$_POST['skills'];
               $uni=$_POST['uniq'];
               $stmt=$con->prepare("UPDATE cv SET skills=? WHERE uniq=?");
                  $stmt->execute(array($skill,$uni));
          ?>
          <div class='container'>
            <div class='bacg'>
           <div class='jop'>
           <div style='display:none' class='adcont'>
       <div class='form-group jo'>
       <h3>jop details</h3>
       <input type="text" name="sum"  placeholder='jop name' class='form-control jname'>
         <label for="">since</label>
         <input type="date" name="sum"class='form-control jsc tim'>
         <label for="">to</label>
         <input type="date" name="sum" class='form-control jt tim'>
         <label for="">role</label>
         <input type="text" name="sum" class='form-control rol'>
        
         </div></div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?do=edu" method='POST' class='log skills ex' >
    <h2 class='text-center'>experiences</h2>
    <h3>jop details</h3>
       <div class='form-group'>
       <input type="text" name="sum"  placeholder='jop name' class='form-control jname'>
         <label for="">since</label>
         <input type="date" name="sum" placeholder='' class='form-control jsc tim' >
         <label for="">to</label>
         <input type="date" name="sum" placeholder='' class='form-control jt tim'>
         <label for="">role</label>
         <input type="text" name="sum" placeholder='' class='form-control rol'>
         
         </div>
         <button class='byn btn-success btn-block addjop jo'>add jop</button>
        <input type="submit" name="" value="sub" class='btn btn-info btn-block sub wa'>
        <input type="hidden" name="uniq" value="<?php echo $uni?>">
         <input type="hidden" class='jhead' name='jhead'>
         <input type="hidden" class='since' name='jsince'>
         <input type="hidden" class='to' name='jto'>
         <input type="hidden" class='roles' name='roles'>
        </form>
        <button class='type btn btn-success fi'>finish</button>
        </div></div>
        </div></div></div>


        <?php }elseif($do=='edu'){
            $jhead=$_POST['jhead'];
            $sc=$_POST['jsince'];
            $to=$_POST['jto'];
            $rol=$_POST['roles'];
            $uni=$_POST['uniq'];
            $stmt=$con->prepare("UPDATE cv SET exphead=?,expsince=?,expto=?,exproles=? WHERE uniq=?");
               $stmt->execute(array($jhead,$sc,$to,$rol,$uni));
             
          
          ?>
          <div style='display:none' class='adcont'>
          <div class='form-group cop'>
          <h3> Details</h3>
       <input type="text" name="sum" placeholder='facualty or school name' class='form-control ename'>
         <label for="">since</label>
         <input type="date" name="sum"  class='form-control esince tim '>
         <label for="">to</label>
         <input type="date" name="sum"  class='form-control eto tim'>
         </div></div>
         <div class='container'>
            <div class='bacg'>
          <div class='jop'>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?do=cer" method='POST' class='log skills' >
    <h2 class='text-center'>Educations</h2>
    <h3> Details</h3>
       <div class='form-group '>
       <input type="text" name="sum" placeholder='facualty or school name' class='form-control ename'>
         <label for="">since</label>
         <input type="date" name="sum" class='form-control esince tim'>
         <label for="">to</label>
         <input type="date" name="sum"  class='form-control eto tim '>
         <input type="hidden" class='edname' name='edname'>
         <input type="hidden" class='edsince' name='edsince'>
         <input type="hidden" class='edto' name='edto'>
         <input type="hidden" name="uniq" value="<?php echo $uni?>">
         </div>
         <button class='byn btn-success btn-block addedu jo'>add new education</button>
        
        <input type="submit" name="" value="sub" class='btn btn-info btn-block wa'>
        </form>
        <button class='edtype btn btn-success fi'>finish</button>
      </div></div><div>



<?php }elseif($do=='cer'){ 
            $ename=$_POST['edname'];
            $esince=$_POST['edsince'];
            $eto=$_POST['edto'];
            $uni=$_POST['uniq'];
            $stmt=$con->prepare("UPDATE cv SET eduname=?,edusince=?,eduto=? WHERE uniq=?");
               $stmt->execute(array($ename,$esince,$eto,$uni))
  
  ?>

  <div class='cadcon ' style='display:none'>
  <div class='form-group cop'>
  <h3> Details</h3>
       <input type="text" name="sum" placeholder='facualty or school name' class='form-control cename'>
         <label for="">at</label>
         <input type="date" name="sum" placeholder='jop name' class='form-control ceat tim'>
         </div></div>
  </div>
  <div class='container'>
            <div class='bacg'>
  <div class='jop'>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?do=inter" method='POST' class='log skills' >
    <h2 class='text-center'>Certifications</h2>
    <h3> Details</h3>
       <div class='form-group'>
       <input type="text" name="sum" placeholder='facualty or school name' class='form-control cename'>
         <label for="">at</label>
         <input type="date" name="sum" placeholder='jop name' class='form-control ceat tim'>
         </div>
         <input type="hidden" name="cname"  class='cname' >
        <input type="hidden" name="cat" class='cat ' >
         <input type="hidden" name="uniq" value="<?php echo $uni?>">
         <button class='byn btn-success btn-block  addcer'>add certification</button>
        <input type="submit" name="" value="sub" class='btn btn-info btn-block wa'>
        </form>
        <button class='ctype btn btn-success fi'>finish</button>
        </div> 
        </div> 
        </div> 
       


<?php }
elseif($do=='inter'){ 
              $cname=$_POST['cname'];
              $cat=$_POST['cat'];
              $uni=$_POST['uniq'];
              $stmt=$con->prepare("UPDATE cv SET cer=?,cerat=? WHERE uniq=?");
                 $stmt->execute(array($cname,$cat,$uni))
  
  ?>
<div style="display:none" class='iadcon'>
<div class='form-group cop'>
       <input type="text" name="sum" placeholder='type here' class='form-control int'>
         </div>
</div>
<div class='container'>
            <div class='bacg'>
<div class='jop'>
 
    <form action="chooseTemplate.php?uni=<?php echo $uni?>" method='POST' class='log skills' >
    <h2 class='text-center'>Langusages</h2>
       <div class='form-group'>
       <input type="hidden" name='color' value='#00000'>
       <input type="text" name="sum" placeholder='type here' class='form-control  int'>
         </div>
         <input
          type="hidden" class='intv' name='intv'>
          <input type="hidden" class='' value='#000' name='color'>
         <input type="hidden" name="uniq" value="<?php echo $uni?>">
         <button class='byn btn-success btn-block addi jo'>add language</button>
        <input type="submit" name="" value="sub" class='btn btn-info btn-block wa'>
        </form>
        <button class='itype btn btn-success fi'>finish</button>
        </div></div></div>
<?php }?> 


<?php include('footer.php')?>;

</body>

</html>