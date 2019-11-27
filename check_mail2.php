<?php
include "../entites/client.php";
include "../Core/Clients.php";
session_start (); 
if(!empty($_POST['email']))
{
  $regex = " /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/";
if (preg_match($regex, $_POST['email']))
{
  extract($_POST);
  $email = strip_tags($email);
  

  try{
 $db = config::getConnexion();
  $db->exec('SET NAMES utf8');
  }
  
  catch(Exeption $e){
  die('Erreur:'.$e->getMessage());
  }
  $id=$_SESSION['ID'];
  $req = $db->prepare('SELECT ID_CLIENT FROM client WHERE (EMAIL=:email and ID_CLIENT!=:id)');
  $req->execute(array(':email'=>$email, ':id'=>$id));
  
  if($req->rowCount()>0)
  {
    $status = 'error';
    $message = ' email address has already been used';
  }
  else
  {
    $status = 'success';
    $message = 'email address available';
  }
  
}
else
{
  $status = 'error';
  $message = 'invalid email address';
}
}
else
{
  $status = 'error';
  $message = 'invalid email address';
}

$data = array('status'=>$status, 'message'=>$message);

echo json_encode($data);

?>