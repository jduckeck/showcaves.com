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
    <link rel="alternate" hreflang="en" href="../../../english/explain/Index/Search.html"/>
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
$count = countSights($pdo, "");
?>

    <meta property="og:locale" content="de_DE"/>
    <meta property="og:title" content="Alphabethisches Register: Suchen auf showcaves.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://www.showcaves.com/entrance/entrance.jpg"/>
    <meta property="og:site_name" content="Schauhöhlen der Welt"/>
    <meta property="og:description" content="Unterirdische Sehenswürdigkeiten der Welt"/>
    <title>Alphabethisches Register: Suchen auf showcaves.com</title>
</head>

<body>
<div data-role="page" id="pageroot">
    <div data-role="main" class="ui-content">

        <label for="theList">Suchen...</label>
        <ul id="theList" data-role="listview" data-inset="true" data-filter="true">
<?php
printAll($pdo, true);
?>
        </ul>

    </div>

    <!-- Path Begin -->
    <div data-role="header" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a data-ajax="false" href="../../index.html">Hauptseite</a></li>
                <li><a data-ajax="false" href="../../../english/explain/Index/Search.html"><img alt="English" src="../../../graphics/language/gb.png" class="language"></a></li>
            </ul>
        </div>
    </div>
    <!-- Path End -->

    <!-- Navigation Bar Begin -->
    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a data-ajax="false" href="../../explain/Index/index.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Index.png">Index</a></li>
                <li><a data-ajax="false" href="../../explain/Topic/index.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Topic.png">Themen</a></li>
                <li><a data-ajax="false" href="../../explain/Hierarchy/index.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Hierarchical.png">Hierarchisch</a></li>
                <li><a data-ajax="false" href="../../Countries.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Countries.png">Länder</a></li>
                <li><a data-ajax="false" href="../../explain/Maps/index.html"><img alt="Region" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Map.png">Karten</a></li>
            </ul>
            <ul>
                <li><a data-ajax="false" href="../../explain/Index/Search.html"><img alt="Search" class="ui-li-icon ui-corner-none symbol" src="../../../graphics/symbol/Search.png">Suche</a></li>
                <li><a data-ajax="false" href="../../explain/index.html">Allgemeine Informationen</a></li>
                <li><a data-ajax="false" href="../../Impressum.html">Impressum</a></li>
                <li><a data-ajax="false" href="../../Jochen.html">©Jochen Duckeck</a></li>
                <li><a data-ajax="false" href="#" onClick="xemhid('soylentgreen','showcaves','com')">Änderungen und Kritik</a></li>
            </ul>
        </div>
    </div>
    <!-- Navigation Bar End -->

</div>
</body>
</html>
