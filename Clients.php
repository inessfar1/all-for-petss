<?PHP
include_once "config.php";
class Clients {


    function activer($email){
        $var= $email ;


        $sql ="UPDATE client SET EmailConfirmed='1' WHERE token='$var'";
        $db = config::getConnexion();
        try{

            $req=$db->prepare($sql);
            $req->execute();
            echo 'Your email has been verified! You can log in now!';
            echo $var;

            return ("ok");
        }

        catch (Exception $err){
            return ("no");
        }
    }


    function ajouterClientbyadmin($Client){





        $sql="insert into client (USERNAME,EMAIL,PASSWORD,Firstname,Lastname,mobile,sexe,IMAGE,adresse,token,EmailConfirmed) values (:USERNAME,:EMAIL,:PASSWORD ,:Firstname,:Lastname,:mobile,:sexe,:IMAGE,:adresse,:token,:confirmed)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $USERNAME=$Client->getUsername();
            $EMAIL=$Client->getEmail();
            $PASSWORD=$Client->getPWD();
            $Firstname=$Client->getFIRSTNAME();
            $Lastname=$Client->getLASTNAME();

            $IMAGE="profil";
            $confirmed=1;
            $mobile=$Client->getMobile();
            $sexe=$Client->getSexe();
            $adresse=$Client->getAdresse();

            $token=$Client->getToken();

            $req->bindValue(':USERNAME',$USERNAME);
            $req->bindValue(':EMAIL',$EMAIL);
            $req->bindValue(':PASSWORD',$PASSWORD);
            $req->bindValue(':Firstname',$Firstname);
            $req->bindValue(':Lastname',$Lastname);
            $req->bindValue(':IMAGE',$IMAGE);
            $req->bindValue(':mobile',$mobile);
            $req->bindValue(':sexe',$sexe);
            $req->bindValue(':confirmed',$confirmed);
            $req->bindValue(':adresse',$adresse);
            $req->bindValue(':token',$token);
            $req->execute();
            return('ok');
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }

    }
	
	function ajouterClient($Client){
		$sql="insert into client (USERNAME,EMAIL,PASSWORD,Firstname,Lastname,mobile,sexe,IMAGE,BIRTHDAY,adresse,token) values (:USERNAME,:EMAIL,:PASSWORD ,:Firstname,:Lastname,:mobile,:sexe,:IMAGE,:BIRTHDAY,:adresse,:token)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $USERNAME=$Client->getUsername();
        $EMAIL=$Client->getEmail();
        $PASSWORD=$Client->getPWD();
        $Firstname=$Client->getFIRSTNAME();
        $Lastname=$Client->getLASTNAME();
        $BIRTHDAY=$Client->getBirthday();
        $IMAGE="profil.png";
        $mobile=$Client->getMobile();
        $sexe=$Client->getSexe();
        $adresse=$Client->getAdresse();
         
    $token=$Client->getToken();

		$req->bindValue(':USERNAME',$USERNAME);
		$req->bindValue(':EMAIL',$EMAIL);
		$req->bindValue(':PASSWORD',$PASSWORD);
		$req->bindValue(':Firstname',$Firstname);
		$req->bindValue(':Lastname',$Lastname);
		$req->bindValue(':BIRTHDAY',$BIRTHDAY);
		$req->bindValue(':IMAGE',$IMAGE);
		$req->bindValue(':mobile',$mobile);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':adresse',$adresse);
	$req->bindValue(':token',$token);
          $req->execute();
            return('ok');
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
		
	}

	function modifierClient($Client,$ID){
		
		$sql="UPDATE Client SET USERNAME=:USERNAME,adresse=:adresse,mobile=:mobile,EMAIL=:EMAIL  WHERE ID_CLIENT='$ID' ";
		$db = config::getConnexion();
	  
		try{
			
        $req=$db->prepare($sql);
		$USERNAME=$Client->getUsername();
        $EMAIL=$Client->getEmail();
        $mobile=$Client->getMobile();
        $adresse=$Client->getAdresse();
      
          
		$req->bindValue(':USERNAME',$USERNAME);
		$req->bindValue(':EMAIL',$EMAIL);
		$req->bindValue(':mobile',$mobile);
		$req->bindValue(':adresse',$adresse);
		
        $req->execute();
        
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
		
	}


    function upload($image,$login,$pwd){
        $sql="UPDATE Client SET IMAGE=:IMAGE WHERE (USERNAME='$login' && PASSWORD='$pwd') || (EMAIL='$login' && PASSWORD='$pwd')";

        $db = config::getConnexion();

        try{

            $req=$db->prepare($sql);



            $req->bindValue(':IMAGE',$image);


            $req->execute();

        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }

    }
	function modifierMDP($Client,$login,$pwd){
		
		$sql="UPDATE Client SET PASSWORD=:PASSWORD  WHERE (USERNAME='$login' && PASSWORD='$pwd') || (EMAIL='$login' && PASSWORD='$pwd')";
		$db = config::getConnexion();
	  
		try{
			
        $req=$db->prepare($sql);
		$PASSWORD=$Client->getPWD();
   
      
          
		$req->bindValue(':PASSWORD',$PASSWORD);

		
        $req->execute();
        
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
		
	}

	
	function afficherClient($login,$pwd){
		$sql="SElECT * From client WHERE (USERNAME='$login' && PASSWORD='$pwd') || (EMAIL='$login' && PASSWORD='$pwd')";
		$db = config::getConnexion();
		try{
		$info=$db->query($sql);
		return $info;
		}
        catch (Exception $err){
            die('Erreur: '.$err->getMessage());
        }	
	}


    function afficherClient2($token){
        $sql="SElECT * From client WHERE token='$token' ";
        $db = config::getConnexion();
        try{
            $info=$db->query($sql);
            return $info;
        }
        catch (Exception $err){
            die('Erreur: '.$err->getMessage());
        }
    }


function afficherClients(){


	$sql="SElECT * From client ";
		$db = config::getConnexion();
		try{
		$info=$db->query($sql);
		return $info;
		}
        catch (Exception $err){
            die('Erreur: '.$err->getMessage());
        }	
	}






    function AFFavis(){

        $query = " SELECT * FROM note ORDER BY ID_CLIENT DESC ";

        $db = config::getConnexion();
        try{
            return ( $db->query($query));
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();

        }


    }


  function AFFClient(){
         
        $query = "SELECT * FROM client WHERE role='user' ORDER BY ID_CLIENT DESC ";

     $db = config::getConnexion();
        try{
           return ( $db->query($query));
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             
        }
        
    }
 function change($email,$token){
         $var= $email ;
         $e=$token;
    $sql ="UPDATE client SET PASSWORD='$e'  WHERE EMAIL='$var'";
    $db = config::getConnexion();
    try{
      $req=$db->prepare($sql);
     $req->execute(); 
         return ("ok");
      }
catch (Exception $err){
 return ("no");
  }
}
    function Suppavis($id){
        $var=$id;
        $sql = "DELETE FROM note WHERE ID_CLIENT ='". $var. "'";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $req->execute();
            return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
            return ("no");
        }

    }
  function SuppClient2($id){
         $var=$id;
        $sql = "DELETE FROM client WHERE ID_CLIENT ='". $var. "'";  
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
          $req->execute();
           return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             return ("no");
        }
        
    }


        function Enable($id){
         $var=$id;
       $sql = "UPDATE client SET  status = 'active' WHERE ID_CLIENT = '".$var."'";  
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
          $req->execute();
           return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             return ("no");
        }
        
    }
        function Disable($id){
         $var=$id;
       $sql = "UPDATE client SET  status = 'Blocked' WHERE ID_CLIENT = '".$var."'";  
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
          $req->execute();
           return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             return ("no");
        }
    }
}

?>