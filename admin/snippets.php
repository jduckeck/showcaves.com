$host="v1-mysql-rds-dev-vl.cmcqq7i0f1v9.eu-central-1.rds.amazonaws.com";
$port=3306;
$socket="";
$user="M_RDS_DEV_VL";
$password="";
$dbname="";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
or die ('Could not connect to the database server' . mysqli_connect_error());

$con->close();

MySQL5
Php 5

$pdo = new PDO('mysql:$host=localhost;dbname=$dbname', $user, $password);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$statement = $pdo->prepare("SELECT * FROM users WHERE vorname = :vorname OR nachname = :nachname OR email = :email");
$statement->bindParam('limit', $limit, PDO::PARAM_INT);
$statement->execute(array('vorname' => $vorname, 'nachname' => $nachname, 'email' => $email));
while($row = $statement->fetch()) {
echo $row['vorname']." ".$row['nachname']."<br/>";
echo "E-Mail: ".$row['email']."<br/><br/>";
}

$statement = $pdo->prepare("INSERT INTO users (email, vorname, nachname) VALUES (?, ?, ?)");
$statement->execute(array('info@php-einfach.de', 'Klaus', 'Neumann'));

$statement = $pdo->prepare("INSERT INTO users (email, vorname, nachname) VALUES (:email, :vorname, :nachname)");
$statement->execute(array('email' => 'info@php-einfach.de', 'vorname' => 'Klaus', 'nachname' => 'Neumann'));

$neuer_user = array();
$neuer_user['email'] = 'info@php-einfach.de';
$neuer_user['vorname'] = 'Klaus';
$neuer_user['nachname'] = 'Neumann';
$neuer_user['weiteres_feld'] = 'Dieses wird beim Eintragen ignoriert';
$statement = $pdo->prepare("INSERT INTO users (email, vorname, nachname) VALUES (:email, :vorname, :nachname)");
$statement->execute($neuer_user);
