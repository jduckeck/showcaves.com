<?PHP

global $HTTP_REFERER;

//---------------------------------------------------------------------------------------------------
// find file
//---------------------------------------------------------------------------------------------------
if ( empty($pic) ) {
    echo "pic not defined";
    exit;
}

if ( !file_exists($Filename) ) {
    header ("HTTP/1.0 404 Not Found");
    exit;
}

$imageSize = GetImageSize ( $Filename );


//---------------------------------------------------------------------------------------------------
// init
//---------------------------------------------------------------------------------------------------
if ( !empty($lev) ) {
    switch ($lev) {
        case 0: $relRoot= ""; break;
        case 1: $relRoot= "../"; break;
        case 2: $relRoot= "../../"; break;
        case 3: $relRoot= "../../../"; break;
        default: $relRoot= "../"; break;
    }
} else {
    $relRoot= "../";
}

//---------------------------------------------------------------------------------------------------
// find db entry
//---------------------------------------------------------------------------------------------------
$sql = "SELECT CaveName, Title, Description, Photographer, PhotographerLink, Copyright, CopyrightLink FROM myImages WHERE Filename ='".$pic."'";
$result = mysql_query($sql, $conn);


if($result) {
    $row = mysql_fetch_object($result);

    $Photographer       = myUmlaute($row->Photographer);
    $Copyright          = myUmlaute($row->Copyright);
    $PhotographerLink   = $row->PhotographerLink;
    $CopyrightLink      = $row->CopyrightLink;
    
    $Title    = "";
    $Caption  = "";
    $CaveName = "";

    // add small caps and link
    if (0 < strlen($Photographer)) {
        $PhotographerCaption   = "<b class=\"smallCaps\">".$Photographer."</b>";
        if (0 < strlen($PhotographerLink)) {
            $PhotographerCaption   = "<a href=\"".$PhotographerLink."\">".$PhotographerCaption."</a>";
        }
    }

    // add copy symbol and link
    if (0 < strlen($Copyright)) {
        $CopyrightCaption   = $Copyright;
        if (0 < strlen($CopyrightLink)) {
            $CopyrightCaption   = "<a href=\"".$CopyrightLink."\">".$CopyrightCaption."</a>";
        }
        $CopyrightCaption   = "&copy;&nbsp;".$CopyrightCaption;
    }

    if ( $row ) {
        $CaveName = myUmlaute($row->CaveName);
        $Title    = myUmlaute($row->Title);
        $break = false;
        if (0 < strlen($row->Description)) {
            $Caption = "<b>Image:</b> ".myUmlaute($row->Description);
            $break = true;
        }
        if ( $break ) {
            $Caption .= "<br>";
            $break = false;
        }
        if (0 < strlen($row->Photographer)) {
            $Caption .= "<b>Photographer:</b> ".$PhotographerCaption;
            $break = true;
        }
        if ( $break ) {
            $Caption .= "<br>";
        }
        if (0 < strlen($row->Copyright)) {
            $Caption .= $CopyrightCaption;
        }

    } else {
        $sql = "INSERT INTO myImages (Filename,Photographer) VALUES ('".$pic."','Jochen Duckeck')";
        $result = mysql_query($sql, $conn);
        $sql = "INSERT INTO myImagesCount (Filename) VALUES ('".$pic."')";
        $result = mysql_query($sql, $conn);
    }
} else {
    header ("HTTP/1.0 404 Not Found");
    exit;
}

//---------------------------------------------------------------------------------------------------
// generate page
//---------------------------------------------------------------------------------------------------
?>
<!DOCTYPE html>
<html>
<head>
<meta name="resource-type" content="document">
<meta name="description" content="Show Caves of the World is a site about underground sights open to the public, like caves and mines, all over the World">
<meta name="keywords" content="show cave public cave commercial cave show mine spring karst feature tunnel cellar subterranean tourist info">
<meta name="copyright" content="Jochen Duckeck (http://www.JochenDuckeck.de/)">
<meta name="author" content="Jochen Duckeck (http://www.JochenDuckeck.de/)">
<meta name="publisher" content="Jochen Duckeck (http://www.JochenDuckeck.de/)">
<meta name="page-topic" content="travel tourism destination">
<meta name="robots" content="INDEX,FOLLOW">
<meta name="distribution" content="global">
<link rel="shortcut icon" href="<? echo $relRoot ?>favicon.ico">
<link rel="stylesheet" type="text/css" href="<? echo $relRoot ?>global.css">

<title>Showcaves.com: <? echo $CaveName ?> - <? echo $Title ?></title>
</head>

<body>


<h2 class="center"><? echo $CaveName ?></h2>
<h1 class="center"><? echo $Title ?></h1>



<table align="center" border="0" cellspacing="0" cellpadding="0" width="<? echo $imageSize[0] ?>">
<tr><td><img src="<? echo $relRoot ?>image.php?pic=<? echo $pic ?>&type=<? echo $type ?>&size=<? echo $size ?>&key=<? echo time() ?>" alternate="<? echo $CaveName ?> - <? echo $Title ?>" width="<? echo $imageSize[0] ?>" height="<? echo $imageSize[1] ?>"></td></tr>
<tr><td class="imgCaption"><? echo $Caption ?></td></tr>
</table>

<h1 class="center"><a href="<? echo $HTTP_REFERER ?>">Back</a></h1>


<br class="clear">

<table align="center" border="0" cellspacing="0" cellpadding="5">
<tr><td align="center" valign="middle" class="footerNav">
<a target="_top" href="<? echo $relRoot ?>english/index.html">Main Index</a>
</td></tr>
<tr><td align="center" class="copyMsg">
Last updated
<script type="text/javascript">
<!-- Begin
lastmod = document.lastModified // get string of last modified date
lastmoddate = Date.parse(lastmod)   // convert modified string to date
if(lastmoddate == 0){               // unknown date (or January 1, 1970 GMT)
   document.writeln("Unknown,")
   } else {
   document.writeln(lastmod + ",")
}
// End -->
</script>
<a href="<? echo $relRoot ?>english/TermsOfUse.html">Terms of Use</a>,
&copy;&nbsp;<a href="<? echo $relRoot ?>english/Jochen.html">Jochen Duckeck</a>.
</td></tr>
</table>

</body>
</html>

