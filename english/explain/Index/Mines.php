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
    <link rel="alternate" hreflang="de" href="../../../german/explain/Index/Mines.html"/>
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
    $count = countSights($pdo, " AND category='mines'");
    ?>

    <meta property="og:locale" content="en_GB"/>
    <meta property="og:title" content="Indexes: All Mines"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://www.showcaves.com/entrance/entrance.jpg"/>
    <meta property="og:site_name" content="Show Caves of the World"/>
    <meta property="og:description" content="Underground tourist destinations of the World"/>
    <title>Indexes: All Mines</title>
</head>

<body>
<div data-role="page" id="pageroot">
    <div data-role="main" class="ui-content">


        <h1 class="center">All Mines</h1>
        <h2 class="center"><?php print $count ?> mines are listed on <span class="mySiteName">showcaves.com</span> on <?php print strtoupper(date("d-M-Y H:i")) ?></h2>

        <br class="clear">

        <h4>Explanation:</h4>

        <ul>
            <li>The names are listed <b>alphabetically</b>.</li>
            <li>The names are always given in the original language, if possible and known.</li>
            <li>If the original language has no Latin font, we give the common transcription.</li>
            <li>The search works on parts of the name, so its not necessary to enter the beginning, if you only know a part in the middle it will work.</li>
            <li>Wait a second after your input, the list is quite long, search will take a little. Actually it is done on your computer so the speed depends on your own machine.</li>
        </ul>

        <br class="clear">

        <label for="theList">search the list...</label>
        <ul id="theList" data-role="listview" data-inset="true" data-filter="true">
            <?php
            printAllByCategory($pdo, 'mines', false);
            ?>
        </ul>

    </div>

    <!-- Path Begin -->
    <div data-role="header" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a data-ajax="false" target="_top" href="../../index.html">Main Index</a></li>
                <li><a data-ajax="false" target="_top" href="index.html">Indexes</a></li>
                <li><a data-ajax="false" target="_top" href="../../../german/explain/Index/Mines.php"><img alt="Deutsch - German" src="../../../graphics/language/de.png" class="language"></a></li>
            </ul>
        </div>
    </div>
    <!-- Path End -->

    <!-- Navigation Bar Begin -->
    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a target="_top" href="../../explain/Index/index.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Index.png">Index</a></li>
                <li><a target="_top" href="../../explain/Topic/index.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Topic.png">Topics</a></li>
                <li><a target="_top" href="../../explain/Hierarchy/index.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Hierarchical.png">Hierarchical</a></li>
                <li><a target="_top" href="../../Countries.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Countries.png">Countries</a></li>
                <li><a target="_top" href="../../explain/Maps/index.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Map.png">Maps</a></li>
            </ul>
            <ul>
                <li><a target="_top" href="../../explain/Index/Search.html"><img alt="Search" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Search.png">Search</a></li>
                <li><a target="_top" href="../../explain/index.html">General Information</a></li>
                <li><a data-ajax="false" target="_top" href="../../TermsOfUse.html">Terms of Use</a></li>
                <li><a data-ajax="false" target="_top" href="../../Jochen.html">©Jochen Duckeck</a></li>
                <li><a data-ajax="false" target="_top" href="#" onClick="xemhid('soylentgreen','showcaves','com')">Contact <span class="mySiteName">showcaves.com</span></a></li>
            </ul>
        </div>
    </div>
    <!-- Navigation Bar End -->

</div>
</body>
</html>
