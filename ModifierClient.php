<?PHP
include "../entites/client.php";
include "Clients.php";
session_start ();

if( isset($_POST['username']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['adresse']) ){

    $client=new Client($_POST['username'],$_POST['email'],$_POST['mobile'],$_POST['adresse']);

    $_SESSION['l']=$_POST['email'];
    $_SESSION['p']=$_SESSION['p'];
    ?>
    <script language="javascript">
      
        setTimeout(myFunction, 0)

        function myFunction() {
            location.replace("alert_succes_modification.html")

        }


    </script>
    <?PHP

    $client1=new Clients();
    $client1->modifierClient($client,$_SESSION['ID']);

}
else{
    echo "Failed";
}




//*/

?>