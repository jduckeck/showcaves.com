<?PHP

function openDB()
{
    $SERVER_NAME = $_SERVER['SERVER_NAME'];

// Tragen Sie hier Ihre Werte ein!
    if ($SERVER_NAME == "localhost") {
        $server = "localhost";                      // MySQL-Server
        $user = "db8399";                        // MySQL-Nutzer
        $pass = "Kreibich";                            // MySQL-Kennwort
        $dbname = "db8399";                        // Standarddatenbank
    } else {
        $server = "mysql5.showcaves.com";        // MySQL-Server
        $user = "db8399_1";                        // MySQL-Nutzer
        $pass = "JGdamUUpvJjhcz4oCwAI";            // MySQL-Kennwort
        $dbname = "db8399_1";                        // Standarddatenbank
    }
    $pdo = null;
    try {
        $pdo = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $user, $pass);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return $pdo;
}

?>
