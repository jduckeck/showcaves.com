<?
include "../config.inc.php";
include "../open.inc.php";
include "../instr.php";
include "../myUmlaute.php";


if ( lang=="de" ) {
  $language = "german";
} else {
  $language = "english";
}

//---------------------------------------------------------------------------------------------------
// Test if cookies are enabled
//---------------------------------------------------------------------------------------------------
$cookiesOn = false;

if ($dafa!=="34121324") {
    SetCookie("fbhf", "23423616");
    Header("Location: page.php?dafa=34121324&pic=$pic&type=$type&size=$size&lang=$lang");
    exit;
} else if ($fbhf=="23423616") {
    $cookiesOn = true;
    if (empty($sdfh)) {
        SetCookie("sdfh", "2442335");
    }
    SetCookie("dafa", "34121324");
} else {
    Header("Location: $language/explain/Shop/WhyCookies.html");
    exit;
}


//---------------------------------------------------------------------------------------------------
// Number of free images exceeded
//---------------------------------------------------------------------------------------------------
if ( $sdfh <= 2442330 ) {
    Header("Location: https://sslsites.de/showcaves.com/$language/explain/Shop/MagPic.php?pic=$pic&type=$type&size=$size&lang=$lang");
    exit;
}


//---------------------------------------------------------------------------------------------------
// generate filename
//---------------------------------------------------------------------------------------------------
if ( empty($type) ) {
} else if ( $type=="i" ) {
  $typeDir = "images/";
} else if ( $type=="f" ) {
  $typeDir = "foreign/";
} else if ( $type=="g" ) {
  $typeDir = "graphics/";
} else  {
  $typeDir = "";
}

if ( $size=="big" ) {
  $sizeDir = "Big/";
} else  {
  $sizeDir = "";
}

if ( empty($pic) ) {
  $typeDir = "graphics/";
  $sizeDir = "";
  $pic = "NotExist.png";
} else if ( $cookiesOn == false ) {
  // without cookies we display the small pictures only inside the site
  if (empty($sizeDir)) {
    if ( 0 == InStr("http://www.showcaves.com/", $HTTP_REFERER) &&
         0 == InStr("https://www.showcaves.com/", $HTTP_REFERER) &&
         0 == InStr("https://sslsites.de/showcaves.com/", $HTTP_REFERER) ) {
      $typeDir = "graphics/";
      $sizeDir = "";
      $pic = "NoCookies.png";
    }
  } else {
    $typeDir = "graphics/";
    $sizeDir = "";
    $pic = "NoCookies.png";
  }
}

$Filename = $installDir."showcaves.com/".$typeDir.$sizeDir.$pic;


//---------------------------------------------------------------------------------------------------
// find file
//---------------------------------------------------------------------------------------------------
if ( !file_exists($Filename) ) {
    echo "file [$Filename] does not exist";
    exit;
}

$imgSize = GetImageSize ( $Filename );

$picUrl = "image.php?pic=$pic&type=$type&size=$size";


//---------------------------------------------------------------------------------------------------
// find db entry
//---------------------------------------------------------------------------------------------------
$sql = "SELECT CaveName, Title, Description, Photographer FROM myImages WHERE Filename ='".$pic."'";
$result = mysql_query($sql, $conn);


if($result) {
    $row = mysql_fetch_object($result);

    if ( $row ) {
        $CaveName = myUmlaute($row->CaveName);
        $Title    = myUmlaute($row->Title);
        if (0 < strlen($row->Description)) {
            $Caption = "<b>Image:</b> ".myUmlaute($row->Description);
        }
        if ( (0 < strlen($row->Description)) && (0 < strlen($row->Photographer)) ) {
            $Caption .= "<br>";
        }
        if (0 < strlen($row->Photographer)) {
            $Caption .= "<b>Photograph:</b> ".myUmlaute($row->Photographer);
        }

    } else {
        $sql = "INSERT INTO myImages (Filename,Photographer) VALUES ('".$pic."','Jochen Duckeck')";
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
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="../global.css">

<title>Showcaves.com: <? echo $CaveName ?> - <? echo $Title ?></title>
</head>

<body>




<h2 align="center"><? echo $CaveName ?></h2>
<h1 align="center"><? echo $Title ?></h1>



<table align="center" border="0" cellspacing="0" cellpadding="0" width="<? echo $imgSize[0] ?>">
<tr><td><img src="<? echo $picUrl ?>" alternate="<? echo $CaveName ?> - <? echo $Title ?>" width="<? echo $imgSize[0] ?>" height="<? echo $imgSize[1] ?>"></td></tr>
<tr><td class="imgCaption"><? echo $Caption ?></td></tr>
</table>

<h1 align="center"><a href="<? echo $HTTP_REFERER ?>">Back</a></h1>


<br clear="all">

<table align="center" border="0" cellspacing="0" cellpadding="5">
<tr><td align="center" valign="middle" class="footerNav">
<a target="_top" href="../english/index.html">Main Index</a>
</td></tr>
<tr><td align="center" class="copyMsg">
Last updated
<script language="JavaScript">
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
<a href="../english/TermsOfUse.html">Terms of Use</a>,
&copy;&nbsp;<a href="../english/Jochen.html">Jochen Duckeck</a>.
</td></tr>
</table>

</body>
</html>
