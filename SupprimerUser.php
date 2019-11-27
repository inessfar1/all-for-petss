<?PHP
include "../entites/client.php";
include "Clients.php";


if( isset($_POST['IDSUP']) ){

    $client1=new Clients();
    $client1->SuppClient2($_POST['IDSUP'])

      ?>
      <script language="javascript">
      	 alert('Utilisateur supprimé');
setTimeout(myFunction, 0)

function myFunction() {
	 location.replace("../views/backoffice/users.php")

}


</script>
<?PHP



        }
        else{ 
            echo "Failed";
        }


 
    
//*/

?>