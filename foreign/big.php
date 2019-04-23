<?php
include "../../config.inc.php";
include "../../open.inc.php";
include "../../instr.php";
include "../../myUmlaute.php";


//---------------------------------------------------------------------------------------------------
// find file
//---------------------------------------------------------------------------------------------------
if ( empty($pic) ) {
    echo "pic not defined";
    exit;
}

$Filename = $installDir."showcaves.com/foreign/Big/".$pic;

if ( !file_exists($Filename) ) {
    echo "file [$Filename] does not exist";
    exit;
}

$size = GetImageSize ( $Filename );


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
        $sql = "INSERT INTO myImages (Filename) VALUES ('".$pic."')";
        $result = mysql_query($sql, $conn);
        $sql = "INSERT INTO myImagesCount (Filename) VALUES ('".$pic."')";
        $result = mysql_query($sql, $conn);
    }
}
@mysql_close($conn);


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
<link rel="shortcut icon" href="<?php echo $relRoot ?>favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo $relRoot ?>global.css">

<title>Showcaves.com: <?php echo $CaveName ?> - <?php echo $Title ?></title>
</head>

<body>




<h2 class="center"><?php echo $CaveName ?></h2>
<h1 class="center"><?php echo $Title ?></h1>



<table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $size[0] ?>">
<tr><td><img src="<?php echo $relRoot ?>image.php?pic=<?php echo $pic ?>&type=f&size=big&key=<?php echo time() ?>" alternate="<?php echo $CaveName ?> - <?php echo $Title ?>" width="<?php echo $size[0] ?>" height="<?php echo $size[1] ?>"></td></tr>
<tr><td class="imgCaption"><?php echo $Caption ?></td></tr>
</table>

<h1 class="center"><a href="<?php echo $HTTP_REFERER ?>">Back</a></h1>


<br class="clear">

<table align="center" border="0" cellspacing="0" cellpadding="5">
<tr><td align="center" valign="middle" class="footerNav">
<a target="_top" href="<?php echo $relRoot ?>english/index.html">Main Index</a>
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
<a href="<?php echo $relRoot ?>english/TermsOfUse.html">Terms of Use</a>,
&copy;&nbsp;<a href="<?php echo $relRoot ?>english/Jochen.html">Jochen Duckeck</a>.
</td></tr>
</table>

</body>
</html>
