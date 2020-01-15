  <?php 
class RaviKoQr
{
	public function insertQr($qrimage,$qrlink,$qrfirstname,$qrmiddlename,$qrlastname,$qrbirthdate,$qrgender,$qrfathersname,$qrmothersname,$qrbloodtype,$qrcontactperson,$qraddress,$qraccountstatus)
 	{

		$mysqli = new mysqli("localhost", "root", "", "system");
		
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}

		$sql = "INSERT INTO `qrcodes` (`qrImg`,`qrlink`,`qrfirstname`,`qrmiddlename`,`qrlastname`,`qrbirthdate`,`qrgender`,`qrfathersname`,`qrmothersname`,`qrbloodtype`,`qrcontactperson`,`qraddress`,`qraccountstatus`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$stmt = $mysqli->prepare($sql);
		$query = $stmt;
		$stmt->bind_param('sssssssssssss', $qrimage, $qrlink, $qrfirstname, $qrmiddlename, $qrlastname, $qrbirthdate, $qrgender, $qrfathersname, $qrmothersname, $qrbloodtype, $qrcontactperson, $qraddress, $qraccountstatus);

		$stmt->execute();
		$stmt->close();
		$mysqli->close();
		
		return $query;
 	}
 	public function displayImg()
 	{
 		$sql = "SELECT qrimg,qrlink from qrcodes where qrimg='$qrimage'";

 	}
}
$meravi = new RaviKoQr(); 
?>