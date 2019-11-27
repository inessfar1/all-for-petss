<?PHP

class Client{
	private $Firstname;
	private $Lastname;
	private $Username;
	private $ID;
	private $EMAIL;
	private $Birthday;
	private $image;
	private $password;
    private $adresse;
    private $sexe;
    private $mobile;
    private $token;
    private $login;
	private $role;
    public $conn;
function __construct()
{
    $ctp = func_num_args();
    $args = func_get_args();
    switch($ctp)
    {
        
        case '11':
            $this->fonction2($args[0],$args[1],$args[2],$args[3],$args[4],$args[5],$args[6],$args[7],$args[8],$args[9],$args[10]);
            break;
              case '3':
            $this->fonction0($args[0],$args[1],$args[2]);
            break;
        case '4':
        $this->fonction1($args[0],$args[1],$args[2],$args[3]);
            break;
             case '1':
        $this->setIMAGE($args[0]);
            break;
            case '2':
             $this->setPassword($args[0]);
            break;
         default:
            break;
    }
}
	public function fonction0($login,$pwd,$a)
	{
		$this->login=$login;
		$this->pwd=$pwd;
	
		
	}
	public function fonction1($Username,$EMAIL,$mobile,$adresse)
	{
		$this->Username=$Username;
	
		$this->EMAIL=$EMAIL;
	
		$this->adresse=$adresse;
		$this->mobile=$mobile;
	}

		

	public function fonction2($Username,$EMAIL,$password,$Firstname,$Lastname,$Birthday,$image,$mobile,$sexe,$adresse,$token)
	{
		$this->Username=$Username;
	
		$this->EMAIL=$EMAIL;
	
		$this->password=$password;
		$this->Firstname=$Firstname;
		$this->Lastname=$Lastname;
		$this->Birthday=$Birthday;
		$this->image=$image;
	    $this->sexe=$sexe;
		$this->mobile=$mobile;
	   $this->adresse=$adresse;
	   $this->token=$token;
	}





		
	/********************************************************/
	function getID(){
		return $this->ID;
	}
	function getFIRSTNAME(){
		return $this->Firstname;
	}
		function getLASTNAME(){
		return $this->Lastname;
	}
	function getUsername(){
		return $this->Username;
	}
	function getEmail(){
		return $this->EMAIL;
	}
	function getBirthday(){
		return $this->Birthday;
	}
    function getImage(){
		return $this->image;
	}

	function getAdresse(){
		return $this->adresse;
	}
    function getSexe(){
		return $this->sexe;
	}
	function getMobile(){
		return $this->mobile;
	}
function getToken(){
		return $this->token;
	}
	function getLog()
	{
		return $this->login;
	}
    function getPWD()
	{
		return $this->password;
		
	}
	 function getRole()
	{
		return $this->role;
		
	}

	function setID($ID){
		$this->ID=$ID;
	}
	function setFIRSTNAME($Firstname){
		$this->Firstname=$Firstname;
	}
		function setLASTNAME($Lastname){
		$this->Lastname=$Lastname;
	}
		function setUsername($Username){
		$this->Username=$Username;
	}

	function setEMAIL($EMAIL){
		$this->EMAIL=$EMAIL;
	}
	function setBirthday($Birthday){
		$this->Birthday=$Birthday;
	}

	function setIMAGE($image){
		$this->image=$image;
	}

	function setPassword($password){
		$this->password=$password;
	}
	function setAdresse($adresse){
		$this->adresse=$adresse;
	}
	function setMobile($mobile){
		$this->mobile=$mobile;
	}
	function setSexe($sexe){
		$this->sexe=$sexe;
	}
}

?>