
<?php
include "../entites/client.php";
include "../Core/Clients.php";



  $pseudo =$_POST['email'];

  $pass = $_POST['pass'];





if(!empty($_POST['email']) && !empty($_POST['pass']))
{
  $password =$_POST['pass'];

    $password=hash('sha512',$password);

  try{
 $db = config::getConnexion();
  $db->exec('SET NAMES utf8');
  }
  
  catch(Exeption $e){
  die('Erreur:'.$e->getMessage());
  }
$req = $db->prepare('SELECT ID_CLIENT  FROM client WHERE ((USERNAME=:pseudo  || EMAIL=:pseudo ))');
  $req->execute(array(':pseudo'=>$pseudo));
  if($req->rowCount()>0)
  {
      $req = $db->prepare('SELECT ID_CLIENT FROM client WHERE ((USERNAME=:pseudo && PASSWORD=:pass)) || (EMAIL=:pseudo && PASSWORD=:pass)');
  $req->execute(array(':pseudo'=>$pseudo ,':pass'=>$password));
  if($req->rowCount()>0)
  {
  $req = $db->prepare('SELECT ID_CLIENT  FROM client WHERE ((USERNAME=:pseudo  || EMAIL=:pseudo ) && (EmailConfirmed=1))');
  $req->execute(array(':pseudo'=>$pseudo));
 if($req->rowCount()>0)
{
   $req = $db->prepare('SELECT ID_CLIENT  FROM client WHERE ((USERNAME=:pseudo  || EMAIL=:pseudo ) && (status="active"))');
  $req->execute(array(':pseudo'=>$pseudo));

if($req->rowCount()>0){

  	echo '

    <script type=""> location.replace("alert_succes_login.html");</script>

 ';
      session_start();
    $_SESSION['l']= $pseudo;
    $_SESSION['p']= $password;
                   $client=new Clients();
$info=$client->afficherClient($_SESSION['l'],$_SESSION['p']);

foreach($info as $row){
   $_SESSION['ID']=$row['ID_CLIENT'];
}
  	 ?>


    <?php
    $status = 'success';
    $message = 'welcome';
}
else {echo ' <script type=""> location.replace("alert_error_login_blocked.html");</script>';

}

  }

else {echo ' <script type=""> location.replace("alert_error_login_notconfirmed.html");</script>';

}
}
  else {
  echo ' <script type=""> location.replace("alert_error_login.html");</script>';

} 
 }
 else { $status = 'error';
  echo '<script type=""> location.replace("alert_error_login_notamemeber.html");</script>';

     }
}

else
{
  $status = 'error';
  $message = 'veuillez saisir votre username and mdp';
}




//echo json_encode($data);



?>