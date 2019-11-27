
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?PHP
include "../entites/client.php";
include "Clients.php";

     $token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
     $token = str_shuffle($token);
     $token = substr($token, 0, 10);
   
    
        if( isset($_POST['user']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['first_name'])  && isset($_POST['last_name'])  && isset($_POST['mobile_no'])  && isset($_POST['gender']) && isset($_POST['address']) )
        {

               $pass=$_POST['password'];

$password = hash('sha512', $pass);
        $email =$_POST['email'];
$client=new Client($_POST['user'],$_POST['email'],$password,$_POST['first_name'],$_POST['last_name'],$_POST['birthday'],'' ,$_POST['mobile_no'],
	$_POST['gender'], $_POST['address'],$token);

$mail=$_POST['email'];
	$client1=new Clients();
if($client1->ajouterClient($client)=='ok'){

  echo "<script type='text/javascript'>;
window.location.replace(\"alert_succes_signin.html\");
</script>";}
       else{ echo "<script type='text/javascript'>;
window.location.replace(\"alert_error_signin.html\");
</script>";}



}
  else{
            echo "you have no permission";
        }



//*/

?>