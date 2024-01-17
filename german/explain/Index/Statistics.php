<!DOCTYPE html>
<html lang="de">
<head>
    <meta name="resource-type" content="document">
    <meta charset="utf-8">
    <meta name="keywords" content="Schauhöhle Schaubergwerk Grotte Schlucht Quelle Bergwerk Höhle Sehenswürdigkeit Führung Tourismus">
    <meta name="page-topic" content="travel tourism destination">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="distribution" content="global">
    <link rel="shortcut icon" href="../../../favicon.ico">
    <link rel="stylesheet" type="text/css" href="../../../css/global.css">
    <script type="text/javascript" src="../../../js/xemhid.js"></script>
    <link rel="alternate" hreflang="en" href="../../../english/explain/Index/Statistics.html"/>
    <!-- begin responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="../../../css/jquery.mobile-1.4.5.min.css" rel="stylesheet"/>
    <script src="../../../js/jquery-1.11.3.min.js"></script>
    <script src="../../../js/jquery.mobile-1.4.5.min.js"></script>
    <!-- end responsive -->

<?php
include("../../../php/opendb.php");
$pdo = openDB();

$statement = $pdo->prepare("SELECT countrycode, chapter, country, category, COUNT(*) AS count FROM sights WHERE visible='yes' GROUP BY countrycode, chapter, country, category ORDER BY country, category");
?>

    <meta property="og:locale" content="de_DE"/>
    <meta property="og:title" content="Alphabethisches Register: Statistik von showcaves.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://www.showcaves.com/entrance/entrance.jpg"/>
    <meta property="og:site_name" content="Schauhöhlen der Welt"/>
    <meta property="og:description" content="Unterirdische Sehenswürdigkeiten der Welt"/>
    <title>Alphabethisches Register: Statistik von showcaves.com</title>
</head>

<body>
<div data-role="page" id="pageroot">
    <div data-role="main" class="ui-content">


        <h1 class="center">Statistik von <span class="mySiteName">showcaves.com</span></h1>
        <h2 class="center"><span class="mySiteName">showcaves.com</span> entries as of <?php print strtoupper(date("d-M-Y H:i")) ?></h2>

        <br class="clear">


        <p>
            Die folgende Tabelle ist eine Statistik über den Inhalt von <span class="mySiteName">showcaves.com</span>.
            Die Website enthält unterirdische touristische Sehenswürdigkeiten aus der ganzen Welt, die nach politischen Einheiten, also Ländern, gruppiert sind und als Höhlen, Schauhöhlen, Bergwerke oder künstliche Hohlräume klassifiziert wurden.
            Die Zahlen geben alle aufgelisteten Sehenswürdigkeiten an, aber nicht alle davon sind noch für die Öffentlichkeit zugänglich.
            <span class="mySiteName">showcaves.com</span> ist fast 30 Jahre alt, und etwa 75 Standorte wurden mittelfristig oder endgültig für die Öffentlichkeit geschlossen.
            Diese sind in den unten stehenden Zahlen allerdings enthalten.
        </p>


        <br class="clear">


        <table class="statistics">
            <thead>
            <tr>
                <th>Länder</th>
                <th><img alt="Showcave" class="symbol" src="../../../graphics/symbol/Showcave.png">Schauhöhlen</th>
                <th><img alt="Cave" class="symbol" src="../../../graphics/symbol/Cave.png">Höhlen</th>
                <th><img alt="Karst" class="symbol" src="../../../graphics/symbol/Karst.png">Karsterscheinungen</th>
                <th><img alt="Spring" class="symbol" src="../../../graphics/symbol/Spring.png">Karstquellen</th>
                <th><img alt="Mine" class="symbol" src="../../../graphics/symbol/Mine.png">Bergwerke</th>
                <th><img alt="Misc" class="symbol" src="../../../graphics/symbol/Misc.png">Künstliche Hohlräume</th>
                <th><img alt="Gorge" class="symbol" src="../../../graphics/symbol/Gorge.png">Schuchten</th>
                <th>Gesamt Land</th>
            </tr>
            </thead>
            <tbody>
<?php
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
                    $countrycell = "<a data-ajax=\"false\" target=\"_top\" href=\"$filebase/usa/index.html\" id=\"usa\">$country</a>";
                    $cellatts = " class=\"chapter\"";
                } else if ($chapter != null) {
                    $countrycell = "<a data-ajax=\"false\" href=\"$filebase/$chapter/region/$countrycode.html\" id=\"$countrycode\">$country</a>";
                    $cellatts = "";
                } else {
                    $countrycell = "<a data-ajax=\"false\" target=\"_top\" href=\"$filebase/$countrycode/index.html\" id=\"$countrycode\">$country</a>";
                    $cellatts = " class=\"chapter\"";
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
            <tr$cellatts>
            <td class='left'>$countrycell</td>
            <td>$showcaves</td>
            <td>$caves</td>
            <td>$karst</td>
            <td>$springs</td>
            <td>$mines</td>
            <td>$subterranea</td>
            <td>$gorges</td>
            <td>$countrytotal</td>
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
            <tr$cellatts>
            <td class='left'>$countrycell</td>
            <td>$showcaves</td>
            <td>$caves</td>
            <td>$karst</td>
            <td>$springs</td>
            <td>$mines</td>
            <td>$subterranea</td>
            <td>$gorges</td>
            <td>$countrytotal</td>
            </tr>
            ");

            print("</tbody>");
            print ("<tfoot style=\"background-color: #FFFFFF\">
            <tr>
            <th class='left'>Länder</th>
            <th><img alt=\"Showcave\" class=\"symbol\" src=\"../../../graphics/symbol/Showcave.png\">Schauhöhlen</th>
            <th><img alt=\"Cave\" class=\"symbol\" src=\"../../../graphics/symbol/Cave.png\">Höhlen</th>
            <th><img alt=\"Karst\" class=\"symbol\" src=\"../../../graphics/symbol/Karst.png\">Karsterscheinungen</th>
            <th><img alt=\"Spring\" class=\"symbol\" src=\"../../../graphics/symbol/Spring.png\">Karstquellen</th>
            <th><img alt=\"Mine\" class=\"symbol\" src=\"../../../graphics/symbol/Mine.png\">Bergwerke</th>
            <th><img alt=\"Misc\" class=\"symbol\" src=\"../../../graphics/symbol/Misc.png\">Künstliche Hohlräume</th>
            <th><img alt=\"Gorge\" class=\"symbol\" src=\"../../../graphics/symbol/Gorge.png\">Schuchten</th>
            <th>Gesamt</th>
            </tr>
            ");

            print ("
            <tr>
            <td class='left'>$countries Länder</td>
            <td>$allshowcaves</td>
            <td>$allcaves</td>
            <td>$allkarst</td>
            <td>$allsprings</td>
            <td>$allmines</td>
            <td>$allsubterranea</td>
            <td>$allgorges</td>
            <td>$alltotal</td>
            </tr>
            ");

            print ("</tfoot>");
            ?>
        </table>

        <br class="clear">

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
                <li><a data-ajax="false" target="_top" href="../../../english/explain/Index/Statistics.html"><img alt="English" src="../../../graphics/language/gb.png" class="language"></a></li>
            </ul>
        </div>
    </div>
    <!-- Path End -->

    <!-- Navigation Bar Begin -->
    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a target="_top" href="../../explain/Index/index.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Index.png">Index</a></li>
                <li><a target="_top" href="../../explain/Topic/index.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Topic.png">Themen</a></li>
                <li><a target="_top" href="../../explain/Hierarchy/index.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Hierarchical.png">Hierarchisch</a></li>
                <li><a target="_top" href="../../Countries.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Countries.png">Länder</a></li>
                <li><a target="_top" href="../../explain/Maps/index.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Map.png">Karten</a></li>
            </ul>
            <ul>
                <li><a target="_top" href="../../explain/Index/Search.html"><img alt="Search" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Search.png">Suche</a></li>
                <li><a target="_top" href="../../explain/index.html">Allgemeine Informationen</a></li>
                <li><a data-ajax="false" target="_top" href="../../Impressum.html">Impressum</a></li>
                <li><a data-ajax="false" target="_top" href="../../Jochen.html">©Jochen Duckeck</a></li>
                <li><a data-ajax="false" target="_top" href="#" onClick="xemhid('soylentgreen','showcaves','com')">Änderungen und Kritik</a></li>
            </ul>
        </div>
    </div>
    <!-- Navigation Bar End -->

</div>
</body>
</html>
