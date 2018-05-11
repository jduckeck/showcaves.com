<?php
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


$now = time();
if ( empty($key) || ($key>$now) || ($key<($now-30)) ) {
    $sql = "UPDATE myImagesCount SET Hacks=Hacks+1 WHERE Filename ='".$pic."'";
    $result = mysql_query($sql, $conn);

    // if update failed, the row is missing, so insert a row
    if (mysql_affected_rows()==0){
        $sql = "INSERT INTO myImagesCount (Filename, Hits, Hacks) VALUES ('".$pic."',0,1)";
        $result = mysql_query($sql, $conn);
    }

    // Add entries into the log table for foreign pages using my images
    if (!empty($HTTP_REFERER)){
        $sql = "INSERT INTO myImagesHacks (Filename, HttpReferer, RemoteAddr, timestamp) VALUES ('".$pic."','".$HTTP_REFERER."','".$REMOTE_ADDR."',NOW())";
        $result = mysql_query($sql, $conn);
    }

    if ($size[0]>$size[1]){
        if($l=="de"){
            $Filename = $installDir."showcaves.info/banner/BigQuerDE.jpg";
        } else {
            $Filename = $installDir."showcaves.info/banner/BigQuerEN.jpg";
        }
    } else {
        if($l=="de"){
            $Filename = $installDir."showcaves.info/banner/BigHochDE.jpg";
        } else {
            $Filename = $installDir."showcaves.info/banner/BigHochEN.jpg";
        }
    }
    if ( !file_exists($Filename) ) {
        echo "file does not exist";
        exit;
    }
    $size = GetImageSize ( $Filename );
} else {
    $sql = "UPDATE myImagesCount SET Hits=Hits+1 WHERE Filename ='".$pic."'";
    $result = mysql_query($sql, $conn);

    // if update failed, the row is missing, so insert a row
    if (mysql_affected_rows()==0){
        $sql = "INSERT INTO myImagesCount (Filename, Hits, Hacks) VALUES ('".$pic."',1,0)";
        $result = mysql_query($sql, $conn);
    }

}

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