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
    <link rel="alternate" hreflang="de" href="../../../german/explain/Index/Springs.html"/>
    <!-- begin responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="../../../css/jquery.mobile-1.4.5.min.css" rel="stylesheet"/>
    <script src="../../../js/jquery-1.11.3.min.js"></script>
    <script src="../../../js/jquery.mobile-1.4.5.min.js"></script>
    <!-- end responsive -->

<?php
include("../../../php/opendb.php");
$pdo = openDB();
include("../../../php/showcaves.php");
$count = countSights($pdo, " AND category='springs'");
?>

    <meta property="og:locale" content="en_GB"/>
    <meta property="og:title" content="Indexes: All Springs By Country"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://www.showcaves.com/entrance/entrance.jpg"/>
    <meta property="og:site_name" content="Show Caves of the World"/>
    <meta property="og:description" content="Underground tourist destinations of the World"/>
    <title>Indexes: All Springs By Country</title>
</head>

<body>
<div data-role="page" id="pageroot">
    <div data-role="main" class="ui-content">


        <h1 class="center">All Springs By Country</h1>
        <h2 class="center"><?php print $count ?> springs are listed on <span class="mySiteName">showcaves.com</span> on <?php print strtoupper(date("d-M-Y H:i")) ?></h2>

        <br class="clear">

        <h4>Explanation:</h4>

        <ul>
            <li>The names are listed <b>alphabetically</b>.</li>
            <li>The names are always given in the original language, if possible and known.</li>
            <li>If the original language has no Latin font, we give the common transcription.</li>
        </ul>

        <br class="clear">

<?php
printByCountry($pdo, 'springs');
?>

    </div>

    <!-- Path Begin -->
    <div data-role="header" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a data-ajax="false" href="../../index.html">Main Index</a></li>
                <li><a data-ajax="false" href="index.html">Indexes</a></li>
                <li><a data-ajax="false" href="../../../german/explain/Index/SpringsByCountry.php"><img alt="Deutsch - German" src="../../../graphics/language/de.png" class="language"></a></li>
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
