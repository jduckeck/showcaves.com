<?PHP

//---------------------------------------------------------------------------------------------------
// handles calls to images
//---------------------------------------------------------------------------------------------------
function showImage ( $Filename ) {

    //---------------------------------------------------------------------------------------------------
    // first check blacklist
    //---------------------------------------------------------------------------------------------------
    if ( killfile() == true ) {
        echo "file not found (killfile)";
        @mysql_close($conn);
        exit;
    }
    
    //---------------------------------------------------------------------------------------------------
    // find file
    //---------------------------------------------------------------------------------------------------
    if ( empty($Filename) || !file_exists($Filename) ) {
        echo "file [$Filename] not found";
        return;
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
}


?>
