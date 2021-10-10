
<?php
function redirectHome($theMsg, $url = null, $seconds = 3) {

    if ($url === null) {

        $url = 'index.php';

        $link = 'Homepage';

    } else {

        if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== '') {

            $url = $_SERVER['HTTP_REFERER'];

            $link = 'Previous Page';

        } else {

            $url = 'index.php';

            $link = 'Homepage';

        }

    }

    echo $theMsg;

    echo "<div class='alert alert-info'>You Will Be Redirected to $link After $seconds Seconds.</div>";

    header("refresh:$seconds;url=$url");

    exit();

}


/* Check function */

function check($sel,$from,$val){
    global $con;
  $stmt=$con->prepare("SELECT $sel FROM $from where $sel=?");
  $stmt->execute(Array($val));
  $count=$stmt->rowcount();
  return $count;
}


function countItems($item,$table,$stat){
    global $con;
    $stmt2=$con->prepare("SELECT COUNT($item) from $table where sc_status=$stat");
    $stmt2->execute();
    return $stmt2->fetchColumn();
}


function getlatest($sel,$tab,$d,$ord,$lim=5){
   global $con;
   $stmt=$con->prepare("SELECT $sel FROM $tab  where sc_status=$d ORDER BY $ord DESC limit $lim");
   $stmt->execute();
   $rows=$stmt->fetchall();
   return $rows;

}

/* <!-- getAll from --> */

function getAllFrom($field, $table, $where = NULL, $and = NULL, $orderfield, $ordering = "DESC") {

global $con;

$getAll = $con->prepare("SELECT $field FROM $table $where $and ORDER BY $orderfield $ordering");

$getAll->execute();

$all = $getAll->fetchAll();

return $all;

}?>