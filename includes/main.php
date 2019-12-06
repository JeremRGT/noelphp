<main>
  <?php
  //$page = isset($_GET['page']) ? $_GET['page'] : 'acceuil' ;

  if(isset ($_GET['page'])){
    $page = $_GET['page'];
  }
  else {
    $page = 'acceuil';
  }

$liste = glob("./includes/*.inc.php");
$page = "./includes/" . $page . ".inc.php";

if (in_array($page, $liste)) {
  require $page;
}
else {
  require "./includes/acceuil.inc.php";
}


  ?>
</main>
