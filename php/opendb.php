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
    echo "ServerName is ";
    echo $_SERVER['SERVER_NAME'];
    $pdo = null;
    try {
        $pdo = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e) {
        echo "ServerName is ";
        echo $_SERVER['SERVER_NAME'];
        die("<b>Oops, something went wrong</b>");
    }

    return $pdo;
}

?>
