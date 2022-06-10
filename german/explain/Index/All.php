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
    <link rel="alternate" hreflang="en" href="../../../english/explain/Index/All.html"/>
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
    <meta property="og:title" content="Alphabethisches Register: Alle Sehenswürdigkeiten auf showcaves.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://www.showcaves.com/entrance/entrance.jpg"/>
    <meta property="og:site_name" content="Schauhöhlen der Welt"/>
    <meta property="og:description" content="Unterirdische Sehenswürdigkeiten der Welt"/>
    <title>Alphabethisches Register: Alle Sehenswürdigkeiten auf showcaves.com</title>
</head>

<body>
<div data-role="page" id="pageroot">
    <div data-role="main" class="ui-content">


        <h1 class="center">Alle Sehenswürdigkeiten auf showcaves.com</h1>
        <h2 class="center"><?php print $count ?> Sehenswürdigkeiten werden auf <span class="mySiteName">showcaves.com</span> am <?php print strtoupper(date("d-M-Y H:i")) ?> beschrieben</h2>

        <br class="clear">

        <h4>Erläuterungen:</h4>

        <ul>
            <li>Die Sehenswürdigkeiten sind <b>alphabethisch</b> nach ihrem Namen geordnet.</li>
            <li>Die Namen werden möglichst in der Landessprache angegeben, soweit bekannt.</li>
            <li>Wenn die Landessprache keinen lateinischen Zeichensatz benutzt wird eine gängige Schreibweise in lateinischer Schrift angegeben.</li>
            <li>Die Suchfunktion findet Teile des Namens, es ist nicht notwendig den Anfang des Namens zu kenen, ein Mittelteil wird ebenfalls gefunden.</li>
            <li>Die Suche kann bei langen Listen einige Sekunden dauern, da sie im Browser ausgeführt wird ist Dauer von der Geschwindigkeit Ihres eigenen Rechners abhängig.</li>
        </ul>

        <br class="clear">

        <label for="theList">Liste durchsuchen...</label>
        <ul id="theList" data-role="listview" data-inset="true" data-filter="true">
            <?php
            printAll($pdo);
?>
        </ul>

    </div>

    <!-- Path Begin -->
    <div data-role="header" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a data-ajax="false" target="_top" href="../../index.html">Hauptseite</a></li>
                <li><a data-ajax="false" target="_top" href="index.html">Alphabethisches Register</a></li>
                <li><a data-ajax="false" target="_top" href="../../../english/explain/Index/All.html"><img alt="English" src="../../../graphics/language/gb.png" class="language"></a></li>
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
                <li><a data-ajax="false" target="_top" href="#" onClick="xemhid('octavian','showcaves','com')">Änderungen und Kritik</a></li>
            </ul>
        </div>
    </div>
    <!-- Navigation Bar End -->

</div>
</body>
</html>
