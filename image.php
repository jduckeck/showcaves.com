<?PHP
include "../config.inc.php";
include "../opendb.php";
include "../instr.php";
include "../image.lib.php";
include "../killfile.lib.php";

global $pic, $type, $size, $l, $key;


//---------------------------------------------------------------------------------------------------
// first check blacklist
//---------------------------------------------------------------------------------------------------
if ( killfile() == true ) {
    echo "file not found (killfile)";
    exit;
}

//---------------------------------------------------------------------------------------------------
// find file
//---------------------------------------------------------------------------------------------------
$Filename = checkfile ( $pic, $type, $size, $l );

if ( empty($Filename) || !file_exists($Filename) ) {
    echo "file [$Filename] not found";
    exit;
}

$picInfo = @GetImageSize ( $Filename );
countHits ( $pic, $conn );
$Filename = checkKey ( $pic, $size, $l, $key, $conn, $installDir, $Filename, $installDir );

if ( $size == "big" ) {
    //$Filename = checkKey ( $pic, $type, $size, $l, $key, $conn, $installDir, $Filename, $installDir );
} else  if ( $size=="tiny" ) {
    // NOP at the moment
} else  {
    //branding ( $type, $size, $Filename );
}

$Filename = killfileVIP ( $Filename );
$picInfo = @GetImageSize ( $Filename );


//---------------------------------------------------------------------------------------------------
// Return an image instead of an html page.
// handle low res preview and display image.
//---------------------------------------------------------------------------------------------------
switch ( (int)$picInfo[2] ) {

    case 1: // GIF images
        header ( "Content-type: image/gif" );
        break;

    case 2: // jpeg images
        header ( "Content-type: image/jpeg" );
        break;

    default: // ??? images
        header ( "Content-type: image/png" );
        break;

}

readfile ( $Filename );
exit;

?>