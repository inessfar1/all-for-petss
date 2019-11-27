<?PHP
include "../entites/client.php";
include "Clients.php";


if( isset($_POST['IDSUP']) ){
session_start();
session_destroy();
    $client1=new Clients();
    $client1->SuppClient2($_POST['IDSUP'])

      ?>
      <script language="javascript">

setTimeout(myFunction, 0)

function myFunction() {
	 location.replace("../views/signup.php")

}


</script>
<?PHP



        }
        else{ 
            echo "Failed";
        }


 
    
//*/

?>