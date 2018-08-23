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
    <link rel="shortcut icon" href="../../../favicon.ico">
    <link rel="stylesheet" type="text/css" href="../../../css/global.css">
    <script language="JavaScript" src="../../../js/xemhid.js"></script>
    <!-- begin responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="../../../css/jquery.mobile-1.4.5.min.css" rel="stylesheet"/>
    <script src="../../../js/jquery-1.11.3.min.js"></script>
    <script src="../../../js/jquery.mobile-1.4.5.min.js"></script>
    <link href="../../../css/jquery.mmenu.all.css" type="text/css" rel="stylesheet"/>
    <script src="../../../js/jquery.mmenu.min.all.js" type="text/javascript"></script>
    <!-- end responsive -->

    <?
    include("../../../../opendb.php");

    $statement = $pdo->prepare("SELECT countrycode, chapter, country, category, COUNT(*) AS count FROM sights WHERE visible='yes' GROUP BY countrycode, chapter, country, category ORDER BY country, category");
    $statement->bindParam('limit', $limit, PDO::PARAM_INT);
    ?>
    <title>Alphabethisches Register: Statistik von showcaves.com</title>
</head>

<body>
<div data-role="page" id="pageroot">
    <div data-role="main" class="ui-content">


        <h1 align="center">Statistik von <span class="mySiteName">showcaves.com</span></h1>
        <h2 align="center"><span class="mySiteName">showcaves.com</span> entries as of <? print date("d-M-Y H:i:s") ?></h2>

        <br clear="all">


        <p>
            Die folgende Tabelle ist eine Statistik über den Inhalt von <span class="mySiteName">showcaves.com</span>.
            Die Website enthält unterirdische touristische Sehenswürdigkeiten aus der ganzen Welt, die nach politischen Einheiten, also Ländern, gruppiert sind und als Höhlen, Schauhöhlen, Bergwerke oder künstliche Hohlräume klassifiziert wurden.
        </p>


        <br clear="all">


        <table align="center" border="1" cellspacing="0" cellpadding="5">
            <thead>
            <tr>
                <th bgcolor="white">Länder</th>
                <th bgcolor="white"><img class="symbol" src="../../../graphics/symbol/Showcave.png" alt="Showcave">Schauhöhlen</th>
                <th bgcolor="white"><img class="symbol" src="../../../graphics/symbol/Cave.png" alt="Cave">Höhlen</th>
                <th bgcolor="white"><img class="symbol" src="../../../graphics/symbol/Karst.png" alt="Karst">Karsterscheinungen</th>
                <th bgcolor="white"><img class="symbol" src="../../../graphics/symbol/Spring.png" alt="Spring">Karstquellen</th>
                <th bgcolor="white"><img class="symbol" src="../../../graphics/symbol/Mine.png" alt="Mine">Bergwerke</th>
                <th bgcolor="white"><img class="symbol" src="../../../graphics/symbol/Misc.png" alt="Misc">Künstliche Hohlräume</th>
                <th bgcolor="white"><img class="symbol" src="../../../graphics/symbol/Gorge.png" alt="Gorge">Schuchten</th>
                <th bgcolor="white">Gesamt Land</th>
            </tr>
            </thead>
            <tbody>
            <?
            $oldCountry = '';
            $entries = 0;

            $showcaves = 0;
            $caves = 0;
            $karst = 0;
            $springs = 0;
            $mines = 0;
            $subterranea = 0;
            $gorges = 0;
            $countrytotal = 0;

            $allshowcaves = 0;
            $allcaves = 0;
            $allkarst = 0;
            $allsprings = 0;
            $allmines = 0;
            $allsubterranea = 0;
            $allgorges = 0;
            $alltotal = 0;

            $countries = 0;

            function createCountryCell($countrycode, $country, $chapter, $countries)
            {
                $filebase = "../../../english";

                if ($countrycode == 'XX') {
                    $countrycell = $country;
                    $cellatts = "";
                } else if ($countrycode == 'us') {
                    $countrycell = "<a name=\"usa\" target=\"_top\" href=\"$filebase/usa/index.html\">$country</a>";
                    $cellatts = " bgcolor=\"silver\"";
                } else if ($chapter != null) {
                    $countrycell = "<a name=\"$countrycode\" href=\"$filebase/$chapter/region/$countrycode.html\">$country</a>";
                    $cellatts = "";
                } else {
                    $countrycell = "<a name=\"$countrycode\" target=\"_top\" href=\"$filebase/$countrycode/index.html\">$country</a>";
                    $cellatts = " bgcolor=\"silver\"";
                }

                $oldCountry = $country;
                $countries++;
                return array($countrycell, $cellatts, $oldCountry, $countries);
            }

            if ($statement->execute()) {
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $countrycode = $row['countrycode'];
                    $chapter = $row['chapter'];
                    $country = $row['country'];
                    $category = $row['category'];
                    $count = $row['count'];

                    if ($oldCountry == '') {
                        list($countrycell, $cellatts, $oldCountry, $countries) = createCountryCell($countrycode, $country, $chapter, $countries);
                    }

                    // head for new country
                    if ($oldCountry != $country) {
                        print ("
            <tr>
            <td$cellatts>$countrycell</td>
            <td$cellatts align=\"right\">$showcaves</td>
            <td$cellatts align=\"right\">$caves</td>
            <td$cellatts align=\"right\">$karst</td>
            <td$cellatts align=\"right\">$springs</td>
            <td$cellatts align=\"right\">$mines</td>
            <td$cellatts align=\"right\">$subterranea</td>
            <td$cellatts align=\"right\">$gorges</td>
            <td$cellatts align=\"right\">$countrytotal</td>
            </tr>
");

                        list($countrycell, $cellatts, $oldCountry, $countries) = createCountryCell($countrycode, $country, $chapter, $countries);

                        $allshowcaves += $showcaves;
                        $allcaves += $caves;
                        $allkarst += $karst;
                        $allsprings += $springs;
                        $allmines += $mines;
                        $allsubterranea += $subterranea;
                        $allgorges += $gorges;
                        $alltotal += $countrytotal;

                        $showcaves = 0;
                        $caves = 0;
                        $karst = 0;
                        $springs = 0;
                        $mines = 0;
                        $subterranea = 0;
                        $gorges = 0;
                        $countrytotal = 0;
                    }

                    switch ($category) {
                        case 'showcaves':
                            $showcaves = $count;
                            $countrytotal += $count;
                            break;
                        case 'caves':
                            $caves = $count;
                            $countrytotal += $count;
                            break;
                        case 'subterranea':
                            $subterranea = $count;
                            $countrytotal += $count;
                            break;
                        case 'mines':
                            $mines = $count;
                            $countrytotal += $count;
                            break;
                        case 'karst':
                            $karst = $count;
                            $countrytotal += $count;
                            break;
                        case 'springs':
                            $springs = $count;
                            $countrytotal += $count;
                            break;
                        case 'gorges':
                            $gorges = $count;
                            $countrytotal += $count;
                            break;
                        default:
                            break;
                    }
                }
            }

            print ("
            <tr>
            <td$cellatts>$countrycell</td>
            <td$cellatts align=\"right\">$showcaves</td>
            <td$cellatts align=\"right\">$caves</td>
            <td$cellatts align=\"right\">$karst</td>
            <td$cellatts align=\"right\">$springs</td>
            <td$cellatts align=\"right\">$mines</td>
            <td$cellatts align=\"right\">$subterranea</td>
            <td$cellatts align=\"right\">$gorges</td>
            <td$cellatts align=\"right\">$countrytotal</td>
            </tr>
            ");

            print("</tbody>");
            print ("<tfoot style=\"background-color: #FFFFFF\">
            <tr>
            <th bgcolor=\"white\">Länder</th>
            <th bgcolor=\"white\"><img class=\"symbol\" src=\"../../../graphics/symbol/Showcave.png\" alt=\"Showcave\">Schauhöhlen</th>
            <th bgcolor=\"white\"><img class=\"symbol\" src=\"../../../graphics/symbol/Cave.png\" alt=\"Cave\">Höhlen</th>
            <th bgcolor=\"white\"><img class=\"symbol\" src=\"../../../graphics/symbol/Karst.png\" alt=\"Karst\">Karsterscheinungen</th>
            <th bgcolor=\"white\"><img class=\"symbol\" src=\"../../../graphics/symbol/Spring.png\" alt=\"Spring\">Karstquellen</th>
            <th bgcolor=\"white\"><img class=\"symbol\" src=\"../../../graphics/symbol/Mine.png\" alt=\"Mine\">Bergwerke</th>
            <th bgcolor=\"white\"><img class=\"symbol\" src=\"../../../graphics/symbol/Misc.png\" alt=\"Misc\">Künstliche Hohlräume</th>
            <th bgcolor=\"white\"><img class=\"symbol\" src=\"../../../graphics/symbol/Gorge.png\" alt=\"Gorge\">Schuchten</th>
            <th bgcolor=\"white\">Gesamt</th>
            </tr>
            ");

            print ("
            <tr>
            <td>$countries Länder</td>
            <td align=\"right\">$allshowcaves</td>
            <td align=\"right\">$allcaves</td>
            <td align=\"right\">$allkarst</td>
            <td align=\"right\">$allsprings</td>
            <td align=\"right\">$allmines</td>
            <td align=\"right\">$allsubterranea</td>
            <td align=\"right\">$allgorges</td>
            <td align=\"right\">$alltotal</td>
            </tr>
            ");

            print ("</tfoot>");
            ?>
        </table>

        <br clear="all">

        <p>
            Diese Tabelle zeigt die Anzahl der aufgelisteten Sehenswürdigkeiten, gruppiert nach Ländern und Kategorien.
            Die Zwischensummen pro Land und Kategorie werden ebenfalls angegeben.
            Die Gesamtzahl der auf dieser Website aufgeführten Seiten ist unten rechts angegeben.
        </p>

        <p class="indentedText">
            Einige Länder haben nur wenige Einträge, so dass diese Länder in einer Sektion namens "Other Countries" verwaltet werden.
            In dieser Tabelle haben sie einen hellgrauen Hintergrund.
            Länder mit einer bestimmten Mindestanzahl von unterirdischen Stätten (ca. 10) erhalten einen eigenen Abschnitt oder ein eigenes Kapitel, das zusätzliche Seiten wie Länderhintergrund, Geologie und die Übersetzung wichtiger Höhlenbegriffe enthält.
            In dieser Tabelle haben sie einen dunkelgrauen Hintergrund.
        </p>


    </div>

    <!-- Path Begin -->
    <div data-role="header" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a data-ajax="false" target="_top" href="../../index.html">Hauptseite</a></li>
                <li><a data-ajax="false" target="_top" href="index.html">Alphabethisches Register</a></li>
                <li><a data-ajax="false" target="_top" href="../../../english/explain/Index/Statistics.html"><img alt="English" src="../../../graphics/flags/gb-small.png" class="language"></a></li>
            </ul>
        </div>
    </div>
    <!-- Path End -->

    <!-- Navigation Bar Begin -->
    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a data-ajax="false" target="_top" href="../../explain/Maps/index.html">Landkarten</a></li>
                <li><a data-ajax="false" target="_top" href="../../explain/Index/index.html">Alphabethisches Register</a></li>
                <li><a data-ajax="false" target="_top" href="../../explain/index.html">Allgemeine Informationen</a></li>
            </ul>
            <ul>
                <li><a data-ajax="false" target="_top" href="../../Impressum.html">Impressum</a></li>
                <li><a data-ajax="false" target="_top" href="../../Jochen.html">©Jochen Duckeck</a></li>
                <li><a data-ajax="false" target="_top" href="#" onClick="xemhid('octavian','showcaves','com')">Änderungen und Kritik: <img class="xemhid" alt="contact" src="../../../xemhid.php?p1=octavian&p2=showcaves&p3=com"></a></li>
            </ul>
        </div>
    </div>
    <!-- Navigation Bar End -->

</div>
</body>
</html>
