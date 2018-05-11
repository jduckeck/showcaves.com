<?
include "../../config.inc.php";
include "../../open.inc.php";
include "../../instr.php";


//---------------------------------------------------------------------------------------------------
// find file
//---------------------------------------------------------------------------------------------------
if ( empty($pic) ) {
    echo "pic not defined";
    exit;
}

$Filename = $installDir."showcaves.com/images/Big/".$pic;

if ( !file_exists($Filename) ) {
    echo "file does not exist";
    exit;
}

$size = GetImageSize ( $Filename );


if ( 0 == InStr("http://www.showcaves.com/", $HTTP_REFERER) ) {
    echo "you are not allowed to see this image";
    $sql = "UPDATE myImages SET Hacks=Hacks+1 WHERE Filename ='".$pic."'";
    $result = mysql_query($sql, $conn);
    @mysql_close($conn);
    exit;
}


$sql = "UPDATE myImages SET Hits=Hits+1 WHERE Filename ='".$pic."'";
$result = mysql_query($sql, $conn);


//---------------------------------------------------------------------------------------------------
// Return an image instead of an html page.
// handle low res preview and display image.
//---------------------------------------------------------------------------------------------------
switch ( (int)$size[2] ) {

    case 1: // GIF images
        header ( "Content-type: image/gif" );
        break;

    case 2: // jpeg images
        header ( "Content-type: image/jpeg" );
        break;

    default: // ??? images
        header ( "Content-type: image/jpeg" );
        break;

}

readfile ( $Filename );
@mysql_close($conn);
exit;

?>