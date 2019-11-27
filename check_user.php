<?php
include "../entites/client.php";
include "../Core/Clients.php";

if(!empty($_POST['pseudo']))
{
  $regex = "/^[a-zA-Z0-9]+$/";
if (preg_match($regex, $_POST['pseudo']))
{
  extract($_POST);
  $pseudo = strip_tags($_POST['pseudo']);
  

  try{
 $db = config::getConnexion();
  $db->exec('SET NAMES utf8');
  }
  
  catch(Exeption $e){
  die('Erreur:'.$e->getMessage());
  }
  
  $req = $db->prepare('SELECT ID_CLIENT FROM client WHERE USERNAME=:pseudo');
  $req->execute(array(':pseudo'=>$pseudo));
  
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
  
}}
else
{
  $status = 'error';
  $message = 'Username invalid';
}

$data = array('status'=>$status, 'message'=>$message);

echo json_encode($data);

?>