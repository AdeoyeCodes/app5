<?php 

session_start();

if(isset($_SESSION["email"])) {
    $userEmail = $_SESSION["email"];
}else {
    header("Location: login.php");
    exit();
}
?>

<?php  

include 'head.php';

?>

<body style= "background-color: whitesmoke;">
 <h2> Hello <?php echo ($userEmail) ?> </h2>

 <div class= "container" style= "background-color: pink; width: 30%; padding-top: 5dvh; padding-bottom: 5dvh; border-radius: 3dvh;">
  <h3> Enter your STUDIO </h3></br>
  <h1> <a href= "board2.php"> <i class="fas fa-film"></i>&nbsp; <b>STUDIO</b> </a> </h1>

 </div>


</body>