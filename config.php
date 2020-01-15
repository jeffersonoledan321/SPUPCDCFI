  <?php 
class RaviKoQr
{
  public $server = "localhost";
  public $user = "root";
  public $pass = "";
  public $dbname = "system";
	public $conn;
  public function __construct()
  {
  	$this->conn= new mysqli($this->server,$this->user,$this->pass,$this->dbname);
  	if($this->conn->connect_error)
  	{
  		die("connection failed");
  	}
  }
 	public function insertQr($qrimage,$qrlink,$qrfirstname,$qrmiddlename,$qrlastname,$qrbirthdate,$qrgender,$qrfathersname,$qrmothersname,$qrbloodtype,$qrcontactperson,$qraddress,$qraccountstatus)
 	{
 			$sql = "INSERT INTO qrcodes(qrImg,qrlink,qrfirstname,qrmiddlename,qrlastname,qrbirthdate,qrgender,qrfathersname,qrmothersname,qrbloodtype,qrcontactperson,qraddress,qraccountstatus) VALUES('$qrimage','$qrlink','$qrfirstname','$qrmiddlename','$qrlastname','$qrbirthdate','$qrgender','$qrfathersname','$qrmothersname','$qrbloodtype','$qrcontactperson','$qraddress','$qraccountstatus')";
 			$query = $this->conn->query($sql);
 			return $query;

 	
 	}
 	public function displayImg()
 	{
 		$sql = "SELECT qrimg,qrlink from qrcodes where qrimg='$qrimage'";

 	}
}
$meravi = new RaviKoQr(); 