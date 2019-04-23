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
        $server = "mysql4.showcaves.com";        // MySQL-Server
        $user = "db8399";                        // MySQL-Nutzer
        $pass = "Kreibich";                    // MySQL-Kennwort
        $dbname = "db8399";                        // Standarddatenbank
    }
    $pdo = null;
    try {
        $pdo = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    } catch (PDOException $e) {
        echo "$e->errorInfo";
    }

    return $pdo;
}

?>
