
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?PHP
include "../entites/client.php";
include "Clients.php";
$token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
$token = str_shuffle($token);
$token = substr($token, 0, 10);
        if( isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['firstname'])  && isset($_POST['lastname'])  && isset($_POST['mobile'])  && isset($_POST['gender']) && isset($_POST['address']) )
        {

               $pass=$_POST['password'];

$password = hash('sha512', $pass);
        $email =$_POST['email'];
$client=new Client($_POST['username'],$_POST['email'],$password,$_POST['firstname'],$_POST['lastname'],'','' ,$_POST['mobile'],
	$_POST['gender'], $_POST['address'],$token);

$mail=$_POST['email'];
	$client1=new Clients();

if($client1->ajouterClientbyadmin($client)=='ok'){
    echo "<script type='text/javascript'>;
window.location.replace(\"alert_succes_ajout.html\");
</script>";

}
else
{
    echo "<script type='text/javascript'>;
window.location.replace(\"alert_error_ajout.html\");
</script>";
}


}
  else{
            echo "you have no permission";
        }



//*/

?>