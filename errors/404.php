<!DOCTYPE html>
<html>
<head>
    <meta name="resource-type" content="document">
    <meta charset="utf-8">
    <meta name="keywords" content="show cave public cave commercial cave show mine spring karst feature tunnel cellar subterranean tourist info">
    <meta name="copyright" content="Jochen Duckeck (http://www.JochenDuckeck.de/)">
    <meta name="author" content="Jochen Duckeck (http://www.JochenDuckeck.de/)">
    <meta name="publisher" content="Jochen Duckeck (http://www.JochenDuckeck.de/)">
    <meta name="page-topic" content="travel tourism destination">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="distribution" content="global">
    <meta http-equiv="content-language" content="en">
    <meta name="language" content="en">
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/global.css">
    <script language="JavaScript" src="../js/xemhid.js"></script>
    <!-- begin responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="../css/jquery.mobile-1.4.5.min.css" rel="stylesheet"/>
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/jquery.mobile-1.4.5.min.js"></script>
    <link href="../css/jquery.mmenu.all.css" type="text/css" rel="stylesheet"/>
    <script src="../js/jquery.mmenu.min.all.js" type="text/javascript"></script>
    <!-- end responsive -->

    <meta http-equiv="refresh" content="120; URL=http://www.showcaves.com/index.html">

    <?
    $redirURL = "http://www.showcaves.com/";
    $redirTime = "0";

    switch ($REDIRECT_URL) {
        case "/english/global.css":
            $redirURL = "/global.css";
            break;
        case "/german/global.css":
            $redirURL = "/global.css";
            break;
        case "/english/otherellaneous.html":
            $redirURL = "/english/Subterranea.html";
            break;
        case "/german/Miscellaneous.html":
            $redirURL = "/german/Subterranea.html";
            break;
        case "/english/at/showcaves/Dachstein.html":
            $redirURL = "/english/at/region/Dachstein.html";
            break;
        case "/english/at/showcaves/Frauenmauer.html":
            $redirURL = "/english/at/caves/Frauenmauer.html";
            break;
        case "/english/de/springs/aach.html":
            $redirURL = "/english/de/springs/Aach.html";
            break;
        case "/english/de/springs/blautopf.html":
            $redirURL = "/english/de/springs/Blautopf.html";
            break;
        case "/english/es/region/Azores.html":
            $redirURL = "/english/pt/region/Azores.html";
            break;
        case "/english/es/region/Madeira.html":
            $redirURL = "/english/pt/region/Madeira.html";
            break;
        case "/english/explain/Maps/World.html":
            $redirURL = "/english/explain/Maps/index.html";
            break;
        case "/english/gb/region/SecretBunkers.html":
            $redirURL = "/english/explain/Subterranea/SecretBunkers.html";
            break;
        case "/english/gb/region/WWIIBunkers.html":
            $redirURL = "/english/explain/Subterranea/WWIIBunkers.html";
            break;
        case "/english/gr/showcaves/Nymphs.html":
            $redirURL = "/english/gr/showcaves/Marmarospilia.html";
            break;
        case "/english/hu/region/ Aggtelek.html":
            $redirURL = "/english/hu/region/Aggtelek.html";
            break;
        case "/english/il/Politics.html":
            $redirURL = "/english/il/About.html";
            break;
        case "/english/it/subterranea/CapriGregorovius.html":
            $redirURL = "/german/explain/Literature/CapriGregorovius.html";
            break;
        case "/english/it/subterranea/CollepardoGregorovius.html":
            $redirURL = "/german/explain/Literature/CollepardoGregorovius.html";
            break;
        case "/english/it/showcaves/CastelloTesino.html":
            $redirURL = "/english/it/caves/CastelloTesino.html";
            break;
        case "/english/other/caves/Drakonina.html":
            $redirURL = "/english/hr/caves/Drakonina.html";
            break;
        case "/english/other/caves/Golondrinas.html":
            $redirURL = "/english/mx/caves/Golondrinas.html";
            break;
        case "/english/other/caves/Naica.html":
            $redirURL = "/english/mx/caves/Naica.html";
            break;
        case "/english/other/caves/VillaLuz.html":
            $redirURL = "/english/mx/caves/VillaLuz.html";
            break;
        case "/english/other/mines/Wieliczka.html":
            $redirURL = "/english/pl/mines/Wieliczka.html";
            break;
        case "/english/other/subterranea/ShiptonsArch.html":
            $redirURL = "/english/cn/subterranea/ShiptonsArch.html";
            break;
        case "/english/other/region/cn.html":
            $redirURL = "/english/cn/index.html";
            break;
        case "/english/other/region/hr.html":
            $redirURL = "/english/hr/index.html";
            break;
        case "/english/other/region/mx.html":
            $redirURL = "/english/mx/index.html";
            break;
        case "/english/other/region/pl.html":
            $redirURL = "/english/pl/index.html";
            break;
        case "/english/other/region/plMap.html":
            $redirURL = "/english/pl/region/Map.html";
            break;
        case "/english/other/showcaves/AktunChen.html":
            $redirURL = "/english/mx/showcaves/AktunChen.html";
            break;
        case "/english/other/showcaves/Cacahuamilpa.html":
            $redirURL = "/english/mx/showcaves/Cacahuamilpa.html";
            break;
        case "/english/other/showcaves/Coyame.html":
            $redirURL = "/english/mx/showcaves/Coyame.html";
            break;
        case "/english/other/showcaves/Garcia.html":
            $redirURL = "/english/mx/showcaves/Garcia.html";
            break;
        case "/english/other/showcaves/Niedzwiedzia.html":
            $redirURL = "/english/pl/showcaves/Niedzwiedzia.html";
            break;
        case "/english/other/showcaves/Raj.html":
            $redirURL = "/english/pl/showcaves/Raj.html";
            break;
        case "/english/other/showcaves/VanHato.html":
            $redirURL = "/english/car/showcaves/VanHato.html";
            break;
        case "/english/other/showcaves/ZhiJin.html":
            $redirURL = "/english/cn/showcaves/ZhiJin.html";
            break;
        case "/english/nz/showcaves/Taniwha.html":
            $redirURL = "/english/nz/caves/Taniwha.html";
            break;
        case "/german/de/karst/Travertin.html":
            $redirURL = "/german/de/region/ThueringerBecken.html";
            break;
        case "/german/de/region/Alb.html":
            $redirURL = "/german/de/region/SchwaebischeAlb.html";
            break;
        case "/german/explain/Literature/Sagen/SyrauerLindwurm.html":
            $redirURL = "/german/explain/Literature/SyrauerLindwurm.html";
            break;
        case "/english/explain/Speleothem/Pilar.html":
            $redirURL = "/english/explain/Speleothem/Pillar.html";
            break;
        case "/english/it/showcaves/Sogno.html":
            $redirURL = "/english/it/caves/Sogno.html";
            break;

        default:
            $redirTime = "120";
            break;
    }

    if (FALSE != strstr($REDIRECT_URL, "/german/explain/Literature/Lau")) {
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
        $server = "mysql.domainfactory.de";    // MySQL-Server
        $user = "db8399";            // MySQL-Nutzer
        $pass = "Kreibich";        // MySQL-Kennwort
        $dbase = "db8399";            // Standarddatenbank

        $conn = @mysql_connect($server, $user, $pass);
        if ($conn) {
            mysql_select_db($dbase, $conn);
            $sql = "SELECT Id,count FROM Error404 WHERE url='" . $REDIRECT_URL . "' AND domain='" . $SERVER_NAME . "'";
            $results = mysql_query($sql, $conn);
            //echo "<BR>[".$sql."]";

            if ($row = mysql_fetch_object($results)) {
                $sql = "UPDATE Error404 SET count=" . ($row->count + 1) . " WHERE Id=" . $row->Id;
            } else {
                $sql = "INSERT INTO Error404 (url,domain,count) VALUES('" . $REDIRECT_URL . "','" . $SERVER_NAME . "',1)";
            }
            $results = mysql_query($sql, $conn);
            //echo "<BR>[".$sql."]";
            //echo mysql_error($conn);
        }
    }
    ?>

    <title><? echo $theTitle ?>: Error 404</title>
</head>

<body>
<div data-role="page" id="pageroot">
    <div data-role="main" class="ui-content">

        <h2 align="center"><? echo $theTitle ?></h2>
        <h1 align="center">Error 404 = Page Not Found</h1>

        <?
        if ($redirTime == "30") {
            echo "<p>";
            echo "<div class="center">";
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
            The page you were looking for (<?= $REDIRECT_URL ?>) could not be found on this
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
            <b>E-mail: <img onClick="xemhid('octavian','showcaves','com')" style="cursor: pointer;" src="http://www.showcaves.com/xemhid.php?p1=octavian&p2=showcaves&p3=com" vspace="0" alt="contact" title="contact" border="0"></b>.
            We will do the best to give you the new address of the page.
        </p>

        <p>
            If you found the link in a search engine, there is nothing we can do about it.
            But search engines update their links continually and chance is, that it will be updated in a few weeks.
        </p>


    </div>

    <!-- Path Begin -->
    <div data-role="header" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a data-ajax="false" target="_top" href="../german/index.html"><img alt="Deutsch - German" src="../graphics/flags/de-small.png" class="language"></a></li>
            </ul>
        </div>
    </div>
    <!-- Path End -->

    <!-- Navigation Bar Begin -->
    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a data-ajax="false" target="_top" href="../english/TermsOfUse.html">Terms of Use</a></li>
                <li><a data-ajax="false" target="_top" href="../english/Jochen.html">©Jochen Duckeck</a></li>
                <li><a data-ajax="false" target="_top" href="#" onClick="xemhid('octavian','showcaves','com')">Contact <span class="mySiteName">showcaves.com</span>: <img class="xemhid" alt="contact" src="../xemhid.php?p1=octavian&p2=showcaves&p3=com"></a></li>
            </ul>
        </div>
    </div>
    <!-- Navigation Bar End -->

</div>
</body>
</html>
