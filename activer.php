<?php  

include "Clients.php";
if(isset($_GET['activation_code']))
{
	 $client=new Clients();
	 $info=$client->afficherClient2($_GET['activation_code']);

foreach($info as $row){
if($row['EmailConfirmed']==1)
{
	session_start();
	    $_SESSION['l']= $row['USERNAME'];
    $_SESSION['p']=$row['PASSWORD'];
     $_SESSION['ID']=$row['ID_CLIENT'];
			      ?>
      <script language="javascript">
      	 alert('Mail already confirmed  ');

location.replace("../views/account.php");

</script>
<?PHP 
} 
else {

 
$msg=$client->activer($_GET['activation_code']);
	if($msg='ok')  
	{  
		session_start();
	    $_SESSION['l']= $row['USERNAME'];
    $_SESSION['p']=$row['PASSWORD'];
     $_SESSION['ID']=$row['ID_CLIENT'];

		      ?>
      <script language="javascript">
      	 alert('Mail confirmed ');
location.replace("../views/account.php");

</script>
<?PHP 
	}  
	else 
	{
		echo 'error';
	}
}
} }
else{echo 'error2' ; } 
 ?>



