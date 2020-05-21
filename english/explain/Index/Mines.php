<!DOCTYPE html>
<html lang="en">
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
    <script type="text/javascript" src="../../../js/xemhid.js"></script>
    <!-- begin responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="../../../css/jquery.mobile-1.4.5.min.css" rel="stylesheet"/>
    <script src="../../../js/jquery-1.11.3.min.js"></script>
    <script src="../../../js/jquery.mobile-1.4.5.min.js"></script>
    <link href="../../../css/jquery.mmenu.all.css" type="text/css" rel="stylesheet"/>
    <script src="../../../js/jquery.mmenu.min.all.js" type="text/javascript"></script>
    <!-- end responsive -->


    <?
    include("../../../php/opendb.php");
    $pdo = openDB();
    include("../../../php/showcaves.php");
    $count = countSights($pdo, " AND category='mines'");
    ?>


    <title>Indexes: All Mines</title>
</head>

<body>
<div data-role="page" id="pageroot">
    <div data-role="main" class="ui-content">


        <h1 class="center">All Mines</h1>
        <h2 class="center"><? print $count ?> Mines are listed on <span class="mySiteName">showcaves.com</span> on <? print date("d-M-Y H:i:s") ?></h2>

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
<?
printAllByCategory($pdo, 'mines');
?>
        </ul>

    </div>

    <!-- Path Begin -->
    <div data-role="header" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a data-ajax="false" target="_top" href="../../index.html">Main Index</a></li>
                <li><a data-ajax="false" target="_top" href="index.html">Indexes</a></li>
                <li><a data-ajax="false" target="_top" href="../../../german/explain/Index/Mines.php"><img alt="Deutsch - German" src="../../../graphics/flags/de-small.png" class="language"></a></li>
            </ul>
        </div>
    </div>
    <!-- Path End -->

    <!-- Navigation Bar Begin -->
    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a target="_top" href="../../explain/Maps/index.html">Maps</a></li>
                <li><a target="_top" href="../../explain/Index/index.html">Alphabetical Index</a></li>
                <li><a target="_top" href="../../explain/index.html">General Information</a></li>
            </ul>
            <ul>
                <li><a data-ajax="false" target="_top" href="../../TermsOfUse.html">Terms of Use</a></li>
                <li><a data-ajax="false" target="_top" href="../../Jochen.html">©Jochen Duckeck</a></li>
                <li><a data-ajax="false" target="_top" href="#" onClick="xemhid('octavian','showcaves','com')">Contact <span class="mySiteName">showcaves.com</span>: <img alt="contact" class="xemhid" src="../../../xemhid.php?p1=octavian&p2=showcaves&p3=com"></a></li>
            </ul>
        </div>
    </div>
    <!-- Navigation Bar End -->

</div>
</body>
</html>
