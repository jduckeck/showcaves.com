<?PHP

function openDB()
{
    // Tragen Sie hier Ihre Werte ein!
    $server = "localhost";                          // MySQL-Server
    $user = "d0437d24";                         // MySQL-Nutzer
    $pass = "7N3N45eDyB5uaZXWdVCi";             // MySQL-Kennwort
    $dbname = "d0437d24";                       // Standarddatenbank

    $pdo = null;
    try {
        $pdo = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $user, $pass);
    } catch (PDOException $e) {
        echo $e;
    }

    return $pdo;
}

?>
