
<html>

<?php
 $tit='home';
 $homePage='homepage';
 include('header.php');
 if($_SERVER['REQUEST_METHOD']=='POST'){
  print_r($ar);
  echo $nam;
}
 ?>;
 


<div class='container text-center'>
<div class='bacg mainback'>
<div class='intro'>

<h1 class='h'></h1>
<p class='lead pa p1'></p>
<a class='btn btn-info' href="maker.php?do=name">let's start</a></div>
</div>

<ul class='links'>
<li><a href="#" style="color:blur"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
<li><a href="#" style="color:#736153"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
<li><a href="#" style="color:#736153"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
</ul>

</div>





<?php include('footer.php')?>;

</body>

</html>