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
<link rel="shortcut icon" href="http://www.showcaves.com/favicon.ico">
<link rel="stylesheet" type="text/css" href="http://www.showcaves.com/global.css">
<script language="JavaScript" src="http://www.showcaves.com/xemhid.js"></script>

<meta http-equiv="refresh" content="120; URL=http://www.showcaves.com/index.html">

<?
    $redirURL = "http://www.showcaves.com/";
    $redirTime = "0";

    switch ($REDIRECT_URL) {
        case "/english/global.css":                             $redirURL = "/global.css";  break;
        case "/german/global.css":                              $redirURL = "/global.css";  break;
        case "/english/Miscellaneous.html":                     $redirURL = "/english/Subterranea.html";  break;
        case "/german/Miscellaneous.html":                      $redirURL = "/german/Subterranea.html";  break;
        case "/english/at/showcaves/Dachstein.html":            $redirURL = "/english/at/region/Dachstein.html";  break;
        case "/english/at/showcaves/Frauenmauer.html":          $redirURL = "/english/at/caves/Frauenmauer.html";  break;
        case "/english/de/springs/aach.html":                   $redirURL = "/english/de/springs/Aach.html";  break;
        case "/english/de/springs/blautopf.html":               $redirURL = "/english/de/springs/Blautopf.html";  break;
        case "/english/es/region/Azores.html":                  $redirURL = "/english/pt/region/Azores.html";  break;
        case "/english/es/region/Madeira.html":                 $redirURL = "/english/pt/region/Madeira.html";  break;
        case "/english/explain/Maps/World.html":                $redirURL = "/english/explain/Maps/index.html";  break;
        case "/english/gb/region/SecretBunkers.html":           $redirURL = "/english/explain/Subterranea/SecretBunkers.html";  break;
        case "/english/gb/region/WWIIBunkers.html":             $redirURL = "/english/explain/Subterranea/WWIIBunkers.html";  break;
        case "/english/gr/showcaves/Nymphs.html":               $redirURL = "/english/gr/showcaves/Marmarospilia.html";  break;
        case "/english/hu/region/ Aggtelek.html":               $redirURL = "/english/hu/region/Aggtelek.html";  break;
        case "/english/il/Politics.html":                       $redirURL = "/english/il/About.html";  break;
        case "/english/it/misc/CapriGregorovius.html":          $redirURL = "/german/explain/Literature/CapriGregorovius.html";  break;
        case "/english/it/misc/CollepardoGregorovius.html":     $redirURL = "/german/explain/Literature/CollepardoGregorovius.html";  break;
        case "/english/it/showcaves/CastelloTesino.html":       $redirURL = "/english/it/caves/CastelloTesino.html";  break;
        case "/english/misc/caves/Drakonina.html":              $redirURL = "/english/hr/caves/Drakonina.html";  break;
        case "/english/misc/caves/Golondrinas.html":            $redirURL = "/english/mx/caves/Golondrinas.html";  break;
        case "/english/misc/caves/Naica.html":                  $redirURL = "/english/mx/caves/Naica.html";  break;
        case "/english/misc/caves/VillaLuz.html":               $redirURL = "/english/mx/caves/VillaLuz.html";  break;
        case "/english/misc/mines/Wieliczka.html":              $redirURL = "/english/pl/mines/Wieliczka.html";  break;
        case "/english/misc/misc/ShiptonsArch.html":            $redirURL = "/english/cn/misc/ShiptonsArch.html";  break;
        case "/english/misc/region/cn.html":                    $redirURL = "/english/cn/index.html";  break;
        case "/english/misc/region/hr.html":                    $redirURL = "/english/hr/index.html";  break;
        case "/english/misc/region/mx.html":                    $redirURL = "/english/mx/index.html";  break;
        case "/english/misc/region/pl.html":                    $redirURL = "/english/pl/index.html";  break;
        case "/english/misc/region/plMap.html":                 $redirURL = "/english/pl/region/Map.html";  break;
        case "/english/misc/showcaves/AktunChen.html":          $redirURL = "/english/mx/showcaves/AktunChen.html";  break;
        case "/english/misc/showcaves/Cacahuamilpa.html":       $redirURL = "/english/mx/showcaves/Cacahuamilpa.html";  break;
        case "/english/misc/showcaves/Coyame.html":             $redirURL = "/english/mx/showcaves/Coyame.html";  break;
        case "/english/misc/showcaves/Garcia.html":             $redirURL = "/english/mx/showcaves/Garcia.html";  break;
        case "/english/misc/showcaves/Niedzwiedzia.html":       $redirURL = "/english/pl/showcaves/Niedzwiedzia.html";  break;
        case "/english/misc/showcaves/Raj.html":                $redirURL = "/english/pl/showcaves/Raj.html";  break;
        case "/english/misc/showcaves/VanHato.html":            $redirURL = "/english/car/showcaves/VanHato.html";  break;
        case "/english/misc/showcaves/ZhiJin.html":             $redirURL = "/english/cn/showcaves/ZhiJin.html";  break;
        case "/english/nz/showcaves/Taniwha.html":              $redirURL = "/english/nz/caves/Taniwha.html";  break;
        case "/german/de/karst/Travertin.html":                 $redirURL = "/german/de/region/ThueringerBecken.html";  break;
        case "/german/de/region/Alb.html":                      $redirURL = "/german/de/region/SchwaebischeAlb.html";  break;
        case "/german/explain/Literature/Sagen/SyrauerLindwurm.html": $redirURL = "/german/explain/Literature/SyrauerLindwurm.html";  break;
        case "/english/explain/Speleothem/Pilar.html":          $redirURL = "/english/explain/Speleothem/Pillar.html";  break;
        case "/english/it/showcaves/Sogno.html":                $redirURL = "/english/it/caves/Sogno.html";  break;
//        case "/english/gr/showcaves/Graves.html":               $redirURL = "/english/gr/showcaves/Graves.html";  break;
//        case "": $redirURL = "";  break;

        default:
            $redirTime = "120";
            break;
    }

    if ( FALSE != strstr ( $REDIRECT_URL,"/german/explain/Literature/Lau" ) ) {
        $redirURL = "/german/explain/Literature/Lau.html";
        $redirTime = "0";
    }

    switch ($SERVER_NAME) {
        case "www.showcaves.com":
        case "showcaves.com":
        case "www.showcaves.info":
        case "showcaves.info":
            $theTitle = "Show Caves of the World";
            break;

        case "www.schauhoehlen.com":
            $theTitle = "Schauhöhlen der Welt";
            break;

        case "www.jochenduckeck.de":
            $theTitle = "Jochens Homepage";
            break;

        case "hhvl.showcaves.com":
            $theTitle = $SERVER_NAME;
            $redirURL = "http://www.showcaves.com".$REDIRECT_URL;
            $redirTime = "0";
            break;

        default:
            $theTitle = $SERVER_NAME;
            $redirURL = "http://www.showcaves.com/";
            $redirTime = "30";
            break;
    }

    echo "<META http-equiv=\"refresh\" CONTENT=\"$redirTime; URL=$redirURL\">";

    if ($redirTime == "0") {
        echo "</head>";
        echo "<BODY>";
        echo "</BODY>";
        echo "</HTML>";
        exit;
    } else {
        $liveserver = "mysql.domainfactory.de";
    	$server = "mysql.domainfactory.de";	// MySQL-Server
    	$user   = "db8399";		    // MySQL-Nutzer
    	$pass   = "Kreibich";		// MySQL-Kennwort
    	$dbase  = "db8399";	        // Standarddatenbank

        $conn = @mysql_connect($server, $user, $pass);
        if($conn) {
            mysql_select_db($dbase, $conn);
            $sql =  "SELECT Id,count FROM Error404 WHERE url='".$REDIRECT_URL."' AND domain='".$SERVER_NAME."'";
            $results = mysql_query($sql, $conn);
            //echo "<BR>[".$sql."]";

            if ( $row = mysql_fetch_object($results) ) {
                $sql = "UPDATE Error404 SET count=".($row->count+1)." WHERE Id=".$row->Id;
            } else {
                $sql = "INSERT INTO Error404 (url,domain,count) VALUES('".$REDIRECT_URL."','".$SERVER_NAME."',1)";
            }
            $results = mysql_query($sql, $conn);
            //echo "<BR>[".$sql."]";
            //echo mysql_error($conn);
        }
    }
?>

<title><?echo $theTitle?>: Error 404</title>
</head>

<body>

<h2 align="center"><?echo $theTitle?></h2>
<h1 align="center">Error 404 = Page Not Found</h1>

<?
    if ($redirTime == "30") {
        echo "<p>";
        echo "<div style="text-align: center;">";
        echo "The site <b>$theTitle</b> does not exist!";
        echo "<br><br>";
        echo "Please visit <a target=\"_top\" href=\"http://www.showcaves.com/\">www.showcaves.com</A>";
        echo "</div>";
        echo "</p>";
        echo "</body>";
        echo "</html>";
        exit;
    }
?>

<p>
The page you were looking for (<?=$REDIRECT_URL?>) could not be found on this
server.
There are several possibile reasons:
</p>

<h2>You may have mispelled the URL</h2>

<p>
If you have typed in the URL manually, please check first, if you have mispelled
it.
Be carefull with capital letters!
</p>


<h2>The link/bookmark you followed is outdated</h2>

<p>
We sometimes move pages, when we add new sections.
This applies for the <b>Misc Countries</b> section, if the number of entries for
a country increases and we decide to make a new chapter for this country.
</p>

<p>
But the shortest way to a page will be the navigation bar at the bottom.
The search will only work online and it uses Google, so if you found the malformed link in Google, try
the other possibilities.
</p>


<h2>Tell me about broken links....</h2>

<p>
If you followed a link from a foreign page, please tell me where the broken link was
(the page you where coming from).
Just paste its URL/title into an email and send it to
        <b>E-mail: <img onClick="xemhid('askir','showcaves','com')" style="cursor: pointer;" src="http://www.showcaves.com/xemhid.php?p1=askir&p2=showcaves&p3=com" vspace="0" alt="contact" title="contact" border="0"></b>.
We will do the best to give you the new address of the page.
</p>

<p>
If you found the link in a search engine, there is nothing we can do about it.
But search engines update their links continually and chance is, that it will be updated in a few weeks.
</p>


<br clear="all">
<br clear="all">

<table align="center" border="0" cellspacing="0" cellpadding="5" class="footerNav">
<tr><td align="center" valign="middle" class="footerNav">
<a target="_top" href="http://www.showcaves.com/">showcaves.com</a>
</td></tr>
<tr><td align="center" class="copyMsg">
Last updated
<script type="text/javascript">
<!-- Begin
lastmod=document.lastModified // get string of last modified date
lastmoddate=Date.parse(lastmod)   // convert modified string to date
if(lastmoddate == 0){               // unknown date (or January 1, 1970 GMT)
   document.writeln("Unknown,")
   } else {
   document.writeln(lastmod + ",")
}
// End -->
</script>
<a href="http://www.showcaves.com/english/TermsOfUse.html">Terms of Use</a>,
&copy;&nbsp;<a href="http://www.showcaves.com/english/Jochen.html">Jochen Duckeck</a>.
</td></tr>
</table>

<br><br>

<!-- Navigation Bar Begin -->
<table class="navBar" width="100%">
<tr>
<td class="navBar">
Search <span class="mySiteName">showcaves.com</span><br>
<form class="noBorder" method="GET" action="http://www.google.com/search">
<input type="hidden" name="as_qt" value="w">
<input type="hidden" name="as_eqt" value="w">
<input type="hidden" name="as_eq" value="">
<input type="hidden" name="as_dt" value="i">
<input type="hidden" name="as_sitesearch" value="showcaves.com">
<input type="hidden" name="lr" value="">
<input type="hidden" name="num" value="100">
<input type="text"   name="as_q" size="20" maxlength="255" value="">
<input type="submit" name="btnG" value="Search!">
</form>
</td>
<td><img vspace="0" hspace="0" src="http://www.showcaves.com/graphics/space.gif" width="1" height="10"></td>
<td class="navBar"><a target="_top" href="http://www.showcaves.com/english/explain/Maps/index.html">Clickable Maps</a></td>
<td><img vspace="0" hspace="0" src="http://www.showcaves.com/graphics/space.gif" width="1" height="10"></td>
<td class="navBar"><a target="_top" href="http://www.showcaves.com/english/explain/Index/index.html">Alphabetical Index</a></td>
<td><img vspace="0" hspace="0" src="http://www.showcaves.com/graphics/space.gif" width="1" height="10"></td>
<td class="navBar"><a target="_top" href="http://www.showcaves.com/english/explain/index.html">General Information</a></td>
</tr>
</table>
<!-- Navigation Bar End -->




</body>
</html>
