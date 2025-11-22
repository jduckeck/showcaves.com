<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="resource-type" content="document">
    <meta charset="utf-8">
    <meta name="keywords" content="show cave public cave commercial cave show mine spring karst feature tunnel cellar subterranean tourist info">
    <meta name="page-topic" content="travel tourism destination">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="distribution" content="global">
    <link rel="shortcut icon" href="../../../favicon.ico">
    <link rel="stylesheet" type="text/css" href="../../../css/global.css">
    <script type="text/javascript" src="../../../js/xemhid.js"></script>
    <link rel="alternate" hreflang="de" href="../../../german/explain/Index/Statistics.html"/>
    <!-- begin responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="../../../css/jquery.mobile-1.4.5.min.css" rel="stylesheet"/>
    <script src="../../../js/jquery-1.11.3.min.js"></script>
    <script src="../../../js/jquery.mobile-1.4.5.min.js"></script>
    <!-- end responsive -->

<?php
include("../../../php/opendb.php");
$pdo = openDB();
$statement = $pdo->prepare("SELECT countrycode, chapter, country, category, COUNT(*) AS count FROM sights WHERE visible='yes' and closed=0 GROUP BY countrycode, chapter, country, category ORDER BY country, category");
?>

    <meta property="og:locale" content="en_GB"/>
    <meta property="og:title" content="Indexes: Statistics of showcaves.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://www.showcaves.com/entrance/entrance.jpg"/>
    <meta property="og:site_name" content="Show Caves of the World"/>
    <meta property="og:description" content="Underground tourist destinations of the World"/>
    <title>Indexes: Statistics of showcaves.com</title>
</head>

<body>
<div data-role="page" id="pageroot">
    <div data-role="main" class="ui-content">


        <h1 class="center">Statistics of showcaves.com</h1>
        <h2 class="center"><span class="mySiteName">showcaves.com</span> entries as of <?php print strtoupper(date("d-M-Y H:i")) ?></h2>

        <br class="clear">

        <p>
            The following table is a statistics about the contents of <span class="mySiteName">showcaves.com</span>.
            The site contains underground tourist sites from all over the world, which are grouped by political units aka countries and categorized as caves, show caves, mines, subterranea asf.
            The numbers give all listed sites, but not all of them are still open to the public.
            <span class="mySiteName">showcaves.com</span> ist almost 30 years old, and about 75 sites were temporarily or finally closed to the public.
            These are included in the below numbers.
        </p>


        <br class="clear">

        <table class="statistics">
            <thead>
            <tr>
                <th>Country</th>
                <th><img alt="Showcave" class="symbol" src="../../../graphics/symbol/Showcave.png">Showcaves</th>
                <th><img alt="Cave" class="symbol" src="../../../graphics/symbol/Cave.png">Caves</th>
                <th><img alt="Karst" class="symbol" src="../../../graphics/symbol/Karst.png">Karst Features</th>
                <th><img alt="Spring" class="symbol" src="../../../graphics/symbol/Spring.png">Springs</th>
                <th><img alt="Mine" class="symbol" src="../../../graphics/symbol/Mine.png">Mines</th>
                <th><img alt="Misc" class="symbol" src="../../../graphics/symbol/Misc.png">Subterranea</th>
                <th><img alt="Gorge" class="symbol" src="../../../graphics/symbol/Gorge.png">Gorges</th>
                <th>Country Sum</th>
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
                    $countrycell = "<a data-ajax=\"false\" href=\"$filebase/$chapter/region/$country.html\" id=\"$country\">$country</a>";
                    $cellatts = "";
                } else if ($countrycode == 'us') {
                    $countrycell = "<a data-ajax=\"false\" href=\"$filebase/usa/index.html\" id=\"usa\">$country</a>";
                    $cellatts = " class=\"chapter\"";
                } else if ($chapter != null) {
                    $countrycell = "<a data-ajax=\"false\" href=\"$filebase/$chapter/region/$countrycode.html\" id=\"$countrycode\">$country</a>";
                    $cellatts = "";
                } else {
                    $countrycell = "<a data-ajax=\"false\" href=\"$filebase/$countrycode/index.html\" id=\"$countrycode\">$country</a>";
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
            <th>Countries</th>
            <th><img alt=\"Showcave\" class=\"symbol\" src=\"../../../graphics/symbol/Showcave.png\">Showcaves</th>
            <th><img alt=\"Cave\" class=\"symbol\" src=\"../../../graphics/symbol/Cave.png\">Caves</th>
            <th><img alt=\"Karst\" class=\"symbol\" src=\"../../../graphics/symbol/Karst.png\">Karst Features</th>
            <th><img alt=\"Spring\" class=\"symbol\" src=\"../../../graphics/symbol/Spring.png\">Springs</th>
            <th><img alt=\"Mine\" class=\"symbol\" src=\"../../../graphics/symbol/Mine.png\">Mines</th>
            <th><img alt=\"Misc\" class=\"symbol\" src=\"../../../graphics/symbol/Misc.png\">Subterranea</th>
            <th><img alt=\"Gorge\" class=\"symbol\" src=\"../../../graphics/symbol/Gorge.png\">Gorges</th>
            <th>Entries Total</th>
            </tr>
            ");

            print ("
            <tr>
            <td class='left'>$countries countries</td>
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
            This table gives the numbers of listed sites, grouped by countries and category.
            The subtotals per country and category are given too.
            The total number of sites listed on this website is given at the bottom right.
        </p>

        <p class="indentedText">
            Some countries have only a few entries, so those countries are managed in a section called <i>Other Countries</i>.
            In this table they have a <b>bright grey</b> background.
            Countries with a certain amount of underground sites (about 10) get their own section or chapter, which includes additional pages like some country background, geology and the translation of important caving terms.
            In this table they have a <b>dark grey</b> background.
        </p>


    </div>

    <!-- Path Begin -->
    <div data-role="header" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a data-ajax="false" href="../../index.html">Main Index</a></li>
                <li><a data-ajax="false" href="../../../german/explain/Index/Statistics.html"><img alt="Deutsch - German" src="../../../graphics/language/de.png" class="language"></a></li>
            </ul>
        </div>
    </div>
    <!-- Path End -->

    <!-- Navigation Bar Begin -->
    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a data-ajax="false" href="../../explain/Index/index.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Index.png">Index</a></li>
                <li><a data-ajax="false" href="../../explain/Topic/index.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Topic.png">Topics</a></li>
                <li><a data-ajax="false" href="../../explain/Hierarchy/index.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Hierarchical.png">Hierarchical</a></li>
                <li><a data-ajax="false" href="../../Countries.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Countries.png">Countries</a></li>
                <li><a data-ajax="false" href="../../explain/Maps/index.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Map.png">Maps</a></li>
            </ul>
            <ul>
                <li><a data-ajax="false" href="../../explain/Index/Search.html"><img alt="Search" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Search.png">Search</a></li>
                <li><a data-ajax="false" href="../../explain/index.html">General Information</a></li>
                <li><a data-ajax="false" href="../../TermsOfUse.html">Terms of Use</a></li>
                <li><a data-ajax="false" href="../../Jochen.html">©Jochen Duckeck</a></li>
                <li><a data-ajax="false" href="#" onClick="xemhid('soylentgreen','showcaves','com')">Contact <span class="mySiteName">showcaves.com</span></a></li>
            </ul>
        </div>
    </div>
    <!-- Navigation Bar End -->

</div>
</body>
</html>
