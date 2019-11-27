<?php
include "../entites/client.php";
include "../Core/Clients.php";
session_start ();  
if(!empty($_POST['pseudo']))
{
  $regex = "/^[a-zA-Z0-9]+$/";
if (preg_match($regex, $_POST['pseudo']))
{
  extract($_POST);
  $pseudo = strip_tags($pseudo);
  

  try{
 $db = config::getConnexion();
  $db->exec('SET NAMES utf8');
  }
  
  catch(Exeption $e){
  die('Erreur:'.$e->getMessage());
  }
  $id=$_SESSION['ID'];

  $req = $db->prepare('SELECT ID_CLIENT FROM client WHERE (USERNAME=:pseudo and ID_CLIENT!=:id)');
  $req->execute(array(':pseudo'=>$pseudo, ':id'=>$id));
  
  if($req->rowCount()>0)
  {
    $status = 'error';
    $message = 'Username unavailable';
  }
  else
  {
    $status = 'success';
    $message = 'Username available';
  }
  
}
else 
{ $status = 'error';
  $message = 'Username invalid';}}
else
{
  $status = 'error';
  $message = 'Username invalid';
}

$data = array('status'=>$status, 'message'=>$message);

echo json_encode($data);

?>