<?php
$nav='';
$tit='script';
include('head.php');


 $do=isset($_GET['do']) ? $_GET['do'] : 'titles';

if($do=='add'){
    ?>
    <h1 class=text-center>Add new Script</h1>
    <div class='container'>
    <form action="?do=insert" class="form-horizontal" method='Post'>
    
    <div class="form-group form-group-lg">
        <label class='col-sm-2 control-label'>Address</label>
        <div class='col-sm-10 col-md-7'>
        <input type="text" name='address' class='form-control' required='required' >
        </div>
    </div>
    <!--  -->

    <div class="form-group form-group-lg">
        <label class='col-sm-2 control-label'>content</label>
        <div class='col-sm-10 col-md-7 '>
        <textarea  style='height:350px' name='cont' class='form-control password' required='required' >
        </textarea>
    </div>
    </div>
    <div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">status</label>
						<div class="col-sm-10 col-md-6">
							<div>
								<input id="vis-yes" type="radio" name="stat" value="0" checked />
								<label for="vis-yes">compelete</label> 
							</div>
							<div>
								<input id="vis-no" type="radio" name="stat" value="1" />
								<label for="vis-no">pended</label> 
							</div>
						</div>
					</div>
    <!-- submit -->
    <div class="form-group">
        <div class='col-sm-10 col-sm-offset-2 col-md-7'>
        <input type="submit" value='save' class=' btn btn-primary btn-lg'>
        </div>
    </div>
    </form></div>    

<?php


}
elseif($do=='insert'){
    if($_SERVER['REQUEST_METHOD']=='POST'){ 
$add=$_POST['address'];
$cont=$_POST['cont'];

$stmt=$con->prepare("INSERT INTO script (sc_name ,sc_content) values (:Zadd,:Zcon)");
$stmt->execute(array(':Zadd'=>$add,':Zcon'=>$cont));
echo "<div class='alert alert-success'style='margin-top:15px;'>". $stmt->rowCount().' record inserted'."</div>";
    }
    else{

        echo '<br><div class="alert alert-danger">you cannot browse here</div>';;
    }


}

elseif($do=='titles'){
    $stmt=$con->prepare("SELECT * FROM script  ");
    $stmt->execute();
    $rows=$stmt->fetchAll();


 
?>
                    <div class='container'>
                    <div class='sc-box'>
                    <div class="panel panel-default">
                       <div class="panel-heading">
							Scripts
							</div>                        
                            <div class="panel-body">
								<ul class="list-unstyled latest-users">
								<?php
								
										foreach ($rows as $r) {
											echo '<li>';
                                                echo '<a class="pull-right" style="direction:rtl" href="?do=show&scid=' . $r['sc_id'] . '">';
                                                    echo $r['sc_name'];
                                                    echo " <a  style='color:#d23e3e; margin-right:10px' href='?do=edit&scid=".$r['sc_id']."' class=' pull-left'> تعديل</a>
                                                    <a  style='color:#0c2b0c;'  href='?do=delete&scid=".$r['sc_id']."' class=' del pull-left'> حذف</a>";
                                                    if ($r['sc_status'] == 0) {
                                                        echo "<a 
                                                                href='?do=Activate&scid=" . $r['sc_id'] . "' 
                                                                style='color:#397bb5; margin-left:10px'>
                                                                 تحديد كمكتمل</a>";
                                                    }
											echo '</li>';
										}
									
								?>
								</ul>
							</div>
                        </div>
                    </div>
                    <a class=" btn btn-primary" href="script.php?do=add"><i class="fa fa-plus"></i> Add New script</a>
                    </div>

<?php
}

elseif($do=='comp'){
    $stmt=$con->prepare("SELECT * FROM script where sc_status=1 ");
    $stmt->execute();
    $rows=$stmt->fetchAll();


 
?>
                    <div class='container'>
                    <div class='sc-box'>
                    <div class="panel panel-default">
                       <div class="panel-heading">
							Scripts
							</div>                        
                            <div class="panel-body">
								<ul class="list-unstyled latest-users">
								<?php
								
										foreach ($rows as $r) {
											echo '<li>';
                                                echo '<a class="pull-right" style="direction:rtl" href="?do=show&scid=' . $r['sc_id'] . '">';
                                                    echo $r['sc_name'];
                                                    echo " <a  style='color:#d23e3e; margin-right:10px' href='?do=edit&scid=".$r['sc_id']."' class=' pull-left'> تعديل</a>
                                                    <a  style='color:#0c2b0c;'  href='?do=delete&scid=".$r['sc_id']."' class=' del pull-left'> حذف</a>";
                                                    if ($r['sc_status'] == 0) {
                                                        echo "<a 
                                                                href='?do=Activate&scid=" . $r['sc_id'] . "' 
                                                                style='color:#397bb5; margin-left:10px'>
                                                                 تحديد كمكتمل</a>";
                                                    }
											echo '</li>';
										}
									
								?>
								</ul>
							</div>
                        </div>
                    </div>
                    <a class=" btn btn-primary" href="script.php?do=add"><i class="fa fa-plus"></i> Add New script</a>

                    </div>

<?php
}


elseif($do=='pend'){
    $stmt=$con->prepare("SELECT * FROM script where sc_status=0  ");
    $stmt->execute();
    $rows=$stmt->fetchAll();


 
?>
                    <div class='container'>
                    <div class='sc-box'>
                    <div class="panel panel-default">
                       <div class="panel-heading">
							Scripts
							</div>                        
                            <div class="panel-body">
								<ul class="list-unstyled latest-users">
								<?php
								
										foreach ($rows as $r) {
											echo '<li>';
                                                echo '<a class="pull-right" style="direction:rtl" href="?do=show&scid=' . $r['sc_id'] . '">';
                                                    echo $r['sc_name'];
                                                    echo " <a  style='color:#d23e3e; margin-right:10px' href='?do=edit&scid=".$r['sc_id']."' class=' pull-left'> تعديل</a>
                                                    <a  style='color:#0c2b0c;'  href='?do=delete&scid=".$r['sc_id']."' class=' del pull-left'> حذف</a>";
                                                    if ($r['sc_status'] == 0) {
                                                        echo "<a 
                                                                href='?do=Activate&scid=" . $r['sc_id'] . "' 
                                                                style='color:#397bb5; margin-left:10px'>
                                                                 تحديد كمكتمل</a>";
                                                    }
											echo '</li>';
										}
									
								?>
								</ul>
							</div>
                        </div>
                    </div>
                    <a class=" btn btn-primary" href="script.php?do=add"><i class="fa fa-plus"></i> Add New script</a>
                    </div>

<?php
}




elseif($do=='show'){
    $scid=$_GET['scid'];
    $stmt=$con->prepare("SELECT sc_content,sc_name FROM script WHERE sc_id=? limit 1");
    $stmt->execute(array($scid));
    $row=$stmt->fetch();
?>
<div class="container sh">
 <div class="panel panel-default">
                       <div class="panel-heading">
						   <?php echo $row[1];?>
                            </div>                       
                             <div class="panel-body">
                             <?php echo $row[0];?>
							</div>
                        </div> </div>
<?php
    
}


elseif($do=='edit'){
    $scid=$_GET['scid'];
    $stmt=$con->prepare("SELECT * FROM script WHERE sc_id=? limit 1");
    $stmt->execute(array($scid));
    $row=$stmt->fetch();
   
    ?>
    <h1 class=text-center>Add new Script</h1>
    <div class='container'>
    <form action="?do=update" class="form-horizontal" method='Post'>
    
    <div class="form-group form-group-lg">
        <label class='col-sm-2 control-label'>Address</label>
        <div class='col-sm-10 col-md-7'>
        <input type="text" name='address' class='form-control' required='required' placeholder='' value='<?php echo $row['sc_name'];?>'>
        </div>
    </div>
    <!--  -->

    <div class="form-group form-group-lg">
        <label class='col-sm-2 control-label'>content</label>
        <div class='col-sm-10 col-md-7 '>
        <textarea  style='height:350px' name='cont' class='form-control password' required='required' placeholder=''>
        <?php echo $row['sc_content'];?>
        </textarea>
    </div>
    </div>
    <input type="hidden" value='<?php echo $scid?>' name='scid'>
    <!--  -->
    <div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">status</label>
						<div class="col-sm-10 col-md-6">
							<div>
								<input id="vis-yes" type="radio" name="stat" value="1" <?php if ($row['sc_status'] == 1) { echo 'checked'; } ?>  />
								<label for="vis-yes">compelete</label> 
							</div>
							<div>
								<input id="vis-no" type="radio" name="stat" value="0" <?php if ($row['sc_status'] == 0) { echo 'checked'; } ?>  />
								<label for="vis-no">pended</label> 
							</div>
						</div>
					</div>
    <!-- submit -->
    <div class="form-group">
        <div class='col-sm-10 col-sm-offset-2 col-md-7'>
        <input type="submit" value='save' class=' btn btn-primary btn-lg'>
        </div>
    </div>
    </form></div>    

<?php
    
}
elseif($do=='update'){
    if($_SERVER['REQUEST_METHOD']=='POST'){ 
        $add=$_POST['address'];
        $cont=$_POST['cont'];
        $s_id=$_POST['scid'];
        $vis=$_POST['stat'];
        
        $stmt=$con->prepare("UPDATE script SET sc_name=?,sc_content=?,sc_status=? WHERE sc_id=?");
        $stmt->execute(array($add,$cont,$vis,$s_id));
        echo "<div class='alert alert-success'style='margin-top:15px;'>". $stmt->rowCount().' record updated'."</div>";
            }
            else{
        
                echo '<br><div class="alert alert-danger">you cannot browse here</div>';;
            }
  
}



elseif ($do == 'delete') {

    echo "<h1 class='text-center'>Delete member</h1>";
    echo "<div class='container'>";

        // Check If Get Request Catid Is Numeric & Get The Integer Value Of It

        $s_id = isset($_GET['scid']) && is_numeric($_GET['scid']) ? intval($_GET['scid']) : 0;


            $stmt = $con->prepare("DELETE FROM script WHERE sc_id = :zid");

            $stmt->bindParam(":zid", $s_id);

            $stmt->execute();

            echo "<div class='alert alert-success'>" . $stmt->rowCount() . ' Record Deleted</div>';


         

    echo '</div>';
}
else if($do=='Activate'){
   
    echo "<div class='container'>";

        // Check If Get Request userid Is Numeric & Get The Integer Value Of It

        $sid = isset($_GET['scid']) && is_numeric($_GET['scid']) ? intval($_GET['scid']) : 0;


            $stmt = $con->prepare("UPDATE script SET sc_status = 1 WHERE sc_id = ?");

            $stmt->execute(array($sid));

            echo"<div class='alert alert-success'>" . $stmt->rowCount() . ' Record Updated</div>';

        
    echo '</div>';

}








include('foot.php');
?>