<?PHP
include "../config.inc.php";
include "../open.inc.php";
include "../instr.php";
include "../image.lib.php";
include "../killfile.lib.php";
include "../myUmlaute.php";
include "dispatcher.lib.php";

global $link, $conn;

// get filename and strip / at end
$Filename = $installDir."showcaves.com".$link;
if (substr($Filename,-1)=="/") {
    $Filename = substr($Filename,0,-1);
}

// if it is a directory, we add the default filename
if (is_dir($Filename)) {
    $Filename = $Filename."/index.html";
}


$ending = substr(strrchr($Filename,"."),1);

// check if the file exits
if ( !file_exists($Filename) ) {
    header ("HTTP/1.0 404 Not Found");
    include "404.php";
    @mysql_close($conn);
    exit;
}

switch ($ending) {
    case "asc":
    case "txt":
        header ( "Content-type: text/plain" );
        readfile ( $Filename );
        break;

    case "js":
        header ( "Content-type: application/x-javascript" );
        readfile ( $Filename );
        break;

    case "php":
        include $Filename;
        break;
    
    case "html":
        header ( "Content-type: text/html" );
        readfile ( $Filename );
        break;
        
    case "css":
        header ( "Content-type: text/css" );
        readfile ( $Filename );
        break;

    case "ico":
        header ( "Content-type: image/x-icon" );
        readfile ( $Filename );
        break;

    case "jpg":
    case "gif":
    case "png":
        $pieces = explode ( "/", $link );
        $sizeOfPieces = sizeof($pieces);
        header ( "Content-type: text/html" );
        if ($pieces[$sizeOfPieces-2]=="Big") {
            $size = "big";
            $lev = $sizeOfPieces-2;
            $pic = $pieces[$sizeOfPieces-1];

            switch ($pieces[1]) {
                case "images": $type = "i"; break;
                case "foreign": $type = "f"; break;
                case "graphics": $type = "g"; break;
                case "maps": 
                    showImage ( $Filename );
                    @mysql_close($conn);
                    exit;
                    break;
                case "surveys": $type = "s"; break;
                case "entrance": 
                    $type = "e"; 
                    if ( $pieces[0] == "german" ) {
                        $l = "de";
                    } else {
                        $l = "en";
                    }
                    break;
                default: 
                    exit; 
                    break;
            }
            header ( "Content-type: text/html" );
            include 'big.php';
        } else {
            showImage ( $Filename );
        }
        break;
        
    default:
        header ("HTTP/1.0 404 Not Found");
        break;
}
@mysql_close($conn);
exit;

?>
