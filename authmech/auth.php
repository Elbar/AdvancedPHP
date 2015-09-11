<?php
  session_start();

if(($_POST['username'] == $_SESSION['username'])&& ($_POST['password'] == $_SESSION['password'])) {

echo 'Привет, '.$_SESSION['username']."<br>";

  
}else {
   echo "Введеные вами данные неверны! Повторите заново!";
   session_destroy();

}
?>

<?php
if(isset($_COOKIE['counter'])) {
       $counter = ++ $_COOKIE['counter'];
      }else {
           $counter = 1;
       }
setcookie('counter', $counter, time()+ 86400);


?>


<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<meta charset="utf-8">
<style> 
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: #eee;
    border: solid 1px #c3c3c3;
}

#panel {
    padding: 50px;
    display: none;
}
</style>


 </head>
   <body>

   <div id="flip">Полная информация о пользователе</div>
   <div id="panel"> 
     <?php 
     $user = $_SESSION['username'];
     $date = $_SESSION['date'];
  $info = $_SESSION['info'];
  
   echo $user ."-". $date. " " ."года рожденья";?>
  <p>Посещений :<?php   echo $counter; ?></p>
<p><?php echo $info;?></p>
</div>

<button type="button" class="btn btn-danger" a href="logout.php">Выйти</a> <span class="glyphicon glyphicon-log-out"></span></button>
</body>


 <p><a href="logout.php">Выйти</a></p>

</html>
