<?PHP
include "../entites/client.php";
include "Clients.php";
session_start ();  



if( isset($_POST['password']) && isset($_POST['pass2']) ){
	if($_POST['password']==$_POST['pass2'] && $_POST['password']!='')
	{
		  $password =$_POST['password'];
    $password=hash('sha512',$password);

      $password2 =$_POST['pass2'];
    $password2=hash('sha512',$password2);

    $client=new Client($password, $password2);
	  $client1=new Clients();
$client1->modifierMDP($client,$_SESSION['l'], $_SESSION['p']); 

$_SESSION['p']=$password;
//sleep(5);
echo"<script language=\"javascript\">";
echo"alert('password changed')";
echo"</script>";
?>
<script >
document.location.href = '../views/account.php';
</script>
<?PHP 
}
	else if ($_POST['password']!='' || $_POST['pass2']!='')
    {echo"<script language=\"javascript\">";
        echo"alert('password cannot be empty')";
        echo"</script>";
        ?>
        <script >
            document.location.href = '../views/account.php';
        </script>
    <?PHP }
else{echo"<script language=\"javascript\">";
echo"alert('password NOT IDENTICAL')";
echo"</script>";
?>
<script >
document.location.href = '../views/account.php';
</script>
<?PHP }
}


 else { echo"<script language=\"javascript\">";
echo"alert('PASSWORD CANNOT BE EMPTY')";
echo"</script>";}



 
    
//*/

?>