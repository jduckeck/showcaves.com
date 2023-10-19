<?PHP

function openDB()
{
    $SERVER_NAME = $_SERVER['SERVER_NAME'];

    // Tragen Sie hier Ihre Werte ein!
    $server = "mysql";                          // MySQL-Server
    $user = "db8399_1";                         // MySQL-Nutzer
    $pass = "JGdamUUpvJjhcz4oCwAI";             // MySQL-Kennwort
    $dbname = "db8399_1";                       // Standarddatenbank

    $pdo = null;
    try {
        $pdo = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $user, $pass);
    } catch (PDOException $e) {
        echo $e;
    }

    return $pdo;
}

?>
