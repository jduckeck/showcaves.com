<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<HTML>
<HEAD>
<META NAME="resource-type" CONTENT="document">
<META NAME="description" CONTENT="Showcaves.com">
<META NAME="keywords" CONTENT="show cave public cave commercial cave show mine spring karst feature tunnel cellar subterranean tourist info">
<META NAME="copyright" CONTENT="Jochen Duckeck (http://www.JochenDuckeck.de/)">
<META NAME="robots" CONTENT="NOINDEX,FOLLOW">
<META NAME="distribution" CONTENT="global">
<LINK REL="stylesheet" TYPE="text/css" HREF="http://www.showcaves.com/global.css">

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
        echo "</HEAD>";
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

<TITLE><?echo $theTitle?>: Error 404</TITLE>
</HEAD>

<BODY STYLE="background-image: url('http://www.showcaves.com/Bilder/explain/Background/default.jpg')">

<H2 ALIGN=CENTER><?echo $theTitle?></H2>
<H1 ALIGN=CENTER>Error 404 = Page Not Found</H1>

<?
    if ($redirTime == "30") {
        echo "<P>";
        echo "<CENTER>";
        echo "The site <B>$theTitle</B> does not exist!";
        echo "<BR><BR>";
        echo "Please visit <A TARGET=\"_top\" HREF=\"http://www.showcaves.com/\">www.showcaves.com</A>";
        echo "</CENTER>";
        echo "</P>";
        echo "</BODY>";
        echo "</HTML>";
        exit;
    }
?>

<P>
The page you were looking for (<?=$REDIRECT_URL?>) could not be found on this server.
There are several possibile reasons:
</P>

<H2>You may have mispelled the URL</H2>

<P>
If you have typed in the URL manually, please check first, if you have mispelled it.
Be carefull with capital letters!
</P>


<H2>The link/bookmark you followed is outdated</H2>

<P>
I sometimes move pages, when I add new sections.
This applies for the <B>Misc Countries</B> section, if the number of entries for a country
increases and I decide to make a new chapter for this country.
</P>

<P>
The following chapters were created recently, so if the cavern is located in one of those countries,
have a look at:
</P>

<UL>
<LI class="liRegion"  ><A HREF="/english/pl/index.html">Poland</A></LI>
<LI class="liRegion"  ><A HREF="/english/hr/index.html">Hrvatska (Croatia)</A></LI>
<LI class="liRegion"  ><A HREF="/english/mx/index.html">M&eacute;xico</A></LI>
<LI class="liRegion"  ><A HREF="/english/cn/index.html">China</A></LI>
</UL>

<P>
But the shortest way to a page will be the navigation bar at the bottom.
The search will only work online and it uses Google, so if you found the malformed link in Google, try
the other possibilities.
</P>


<H2>Tell me about broken links....</H2>

<P>
If you followed a link from a foreign page, please tell me where the broken link was
(the page you where coming from).
Just paste its URL/title into an email and send it to
        <B><A HREF="mailto:404@showcaves.com">404@showcaves.com</A></B>.
I will do the best to give you the new address of the page.
</P>

<P>
If you found the link in a search engine, there is nothing I can do about it.
But search engines update their links continually and chance is, that it will be updated in a few weeks.
</P>


<BR CLEAR="ALL">
<BR CLEAR="ALL">

<TABLE ALIGN="CENTER" BORDER="0" CELLSPACING="0" CELLPADDING="5">
<TR><TD ALIGN="CENTER" VALIGN="middle" class="footerNav">
<A TARGET="_top" HREF="http://www.showcaves.com/">showcaves.com</A>
</TD></TR>
<TR><TD ALIGN="CENTER" class="copyMsg">
<A HREF="../../TermsOfUse.html">Terms of Use</A>,
&copy;&nbsp;<IMG VSPACE="0" HSPACE="0" SRC="http://www.showcaves.com/Bilder/explain/Symbol/World.gif"    WIDTH="12" HEIGHT="12">&nbsp;<A TARGET="_blank"  HREF="http://www.JochenDuckeck.de/">Jochen Duckeck</A>.
</TD></TR>
</TABLE>

<BR><BR>

<!-- Navigation Bar Begin -->
<TABLE class="navBar" WIDTH="100%">
<TR>
<TD class="navBar">
Search <span class="mySiteName">showcaves.com</span><BR>
<FORM class="noBorder" method="GET" action="http://www.google.com/search"><INPUT TYPE="hidden" NAME="as_qt" VALUE="w"><INPUT TYPE="hidden" NAME="as_eqt" VALUE="w"><INPUT TYPE="hidden" NAME="as_eq" VALUE=""><INPUT TYPE="hidden" NAME="as_dt" VALUE="i"><INPUT TYPE="hidden" NAME="as_sitesearch" VALUE="showcaves.com" VALIGN="middle"><INPUT TYPE="hidden" NAME="lr" VALUE=""><INPUT TYPE="hidden" NAME="num" VALUE="100"><INPUT TYPE="text"   NAME="as_q" SIZE="30" MAXLENGTH="255" VALUE="" VALIGN="middle"><INPUT TYPE="submit" NAME="btnG" VALUE="Search!"></FORM>
</TD>
<TD><IMG VSPACE="0" HSPACE="0" SRC="http://www.showcaves.com/Bilder/explain/Grafik/space.gif" WIDTH="1" HEIGHT="10"></TD>
<TD class="navBar"><A TARGET="_top" HREF="http://www.showcaves.com/explain/Maps/index.html">Clickable Maps</A></TD>
<TD><IMG VSPACE="0" HSPACE="0" SRC="http://www.showcaves.com/Bilder/explain/Grafik/space.gif" WIDTH="1" HEIGHT="10"></TD>
<TD class="navBar"><A TARGET="_top" HREF="http://www.showcaves.com/explain/Index/index.html">Alphabethical Index</A></TD>
<TD><IMG VSPACE="0" HSPACE="0" SRC="http://www.showcaves.com/Bilder/explain/Grafik/space.gif" WIDTH="1" HEIGHT="10"></TD>
<TD class="navBar"><A TARGET="_top" HREF="http://www.showcaves.com/explain/index.html">General Information</A></TD>
</TR>
</TABLE>
<!-- Navigation Bar End -->

</BODY>
</HTML>
