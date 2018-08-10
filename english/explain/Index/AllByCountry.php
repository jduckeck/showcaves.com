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
    <script language="JavaScript" src="../../../js/global.js"></script>
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

    $count = 0;
    $sql = "SELECT COUNT(*) AS count FROM sights WHERE visible='yes'";
    $statement = $pdo->query($sql);
    if ($statement->execute()) {
        if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $count = $row['count'];
        }
    }
    ?>


    <title>Indexes: All Underground Sites of showcaves.com</title>
</head>

<body>
<div data-role="page" id="pageroot">
    <div data-role="main" class="ui-content">


        <h1 align="center">All Underground Sites of showcaves.com</h1>
        <h2 align="center"><? print $count ?> Underground Sites are listed on <span class="mySiteName">showcaves.com</span> on <? print date("d-M-Y H:i:s") ?></h2>

        <br clear="all">

        <h4>Explanation:</h4>

        <ul>
            <li>The names are listed <b>alphabetically</b>.</li>
            <li>The names are always given in the original language, if possible and known.</li>
            <li>If the original language has no Latin font, we give the common transcription.</li>
        </ul>

        <br clear="all">

        <?
        $sql = "SELECT name, filename, countrycode, country, chapter, category FROM sights WHERE visible='yes' ORDER BY country, sortby";
        $filebase = "../../..";
        $oldCountry = '';
        $entries = 0;
        $entriesText = '';
        $countryText = '';
        $itemsText = '';
        $Category = "Showcave";

        $statement = $pdo->prepare($sql);
        if ($statement->execute()) {
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $country = $row['country'];
                $name = $row['name'];
                $filename = $row['filename'];
                $countrycode = $row['countrycode'];
                $chapter = $row['chapter'];

                // finalize old country
                if ($oldCountry != '' && $oldCountry != $country) {
                    if (1 == $entries) {
                        $entriesText = "1 entry";
                    } else {
                        $entriesText = "$entries entries";
                    }
                    $entries = 0;

                    print ("         <div data-role=\"collapsible\">\n");
                    print ("            <h3><span style=\"float: right;\">$entriesText</span></h3>\n");
                    print ("            <ul id=\"$oldCountry" . "List\" data-role=\"listview\" data-inset=\"true\">\n");
                    print ($itemsText);
                    print ("            </ul>\n");
                    print ("         </div>\n");
                }

                // store head for new country
                if ($oldCountry != $country) {
                    $countryText = $country;

                    $itemsText = '';
                    $oldCountry = $country;
                }

                switch ($row['category']) {
                    case 'showcaves':
                        $Category = "Showcave";
                        break;
                    case 'caves':
                        $Category = "Cave";
                        break;
                    case 'subterranea':
                        $Category = "Misc";
                        break;
                    case 'mines':
                        $Category = "Mine";
                        break;
                    case 'karst':
                        $Category = "Karst";
                        break;
                    case 'springs':
                        $Category = "Spring";
                        break;
                    case 'gorges':
                        $Category = "Gorge";
                        break;
                    default:
                        break;
                }

                $itemsText .= "               <li><a data-ajax=\"false\" target=\"_top\" href='$filebase$filename'><img class='ui-li-icon ui-corner-none symbol' src='../../../graphics/symbol/$Category.png' alt='$Category'>$name</a></li>\n";
                $entries++;
            }

            // there is no more row when the last country is done, so we have to output the last country
            if (1 == $entries) {
                $entriesText = "1 entry";
            } else {
                $entriesText = "$entries entries";
            }

            if ($entries > 0) {
                print ("         <div data-role=\"collapsible\">\n");
                print ("            <h3><span style=\"float: right;\">$entriesText</span>$countryText</h3>\n");
                print ("            <ul id=\"$oldCountry" . "List\" data-role=\"listview\" data-inset=\"true\">\n");
                print ($itemsText);
                print ("            </ul>\n");
                print ("         </div>\n");
            }
        }
        ?>

    </div>

    <!-- Path Begin -->
    <div data-role="header" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a data-ajax="false" target="_top" href="../../index.html">Main Index</a></li>
                <li><a data-ajax="false" target="_top" href="index.html">Indexes</a></li>
                <li><a data-ajax="false" target="_top" href="../../../german/explain/Index/AllByCountry.html"><img alt="Deutsch" src="../../../graphics/flags/de-small.png" class="language"></a></li>
            </ul>
        </div>
    </div>
    <!-- Path End -->

    <!-- Navigation Bar Begin -->
    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a data-ajax="false" target="_top" href="../../explain/Maps/index.html">Maps</a></li>
                <li><a data-ajax="false" target="_top" href="../../explain/Index/index.html">Alphabetical Index</a></li>
                <li><a data-ajax="false" target="_top" href="../../explain/index.html">General Information</a></li>
            </ul>
            <ul>
                <li><a data-ajax="false" target="_top" href="../../TermsOfUse.html">Terms of Use</a></li>
                <li><a data-ajax="false" target="_top" href="../../Jochen.html">©Jochen Duckeck</a></li>
                <li><a data-ajax="false" target="_top" href="#" onClick="xemhid('askir','showcaves','com')">Contact <span class="mySiteName">showcaves.com</span>: <img class="xemhid" alt="contact" src="../../../xemhid.php?p1=askir&p2=showcaves&p3=com"></a></li>
            </ul>
        </div>
    </div>
    <!-- Navigation Bar End -->

</div>
</body>
</html>
