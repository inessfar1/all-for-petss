<?PHP
include "../entites/client.php";
include "Clients.php";


if( isset($_POST['ID']) ){

    $client1=new Clients();
    $client1->Suppavis($_POST['ID'])

      ?>
      <script language="javascript">
      	 alert('avis supprimé');
setTimeout(myFunction, 0)

function myFunction() {
	 location.replace("../views/backoffice/avis.php")

}


</script>
<?PHP



        }
        else{ 
            echo "Failed";
        }


 
    
//*/

?>