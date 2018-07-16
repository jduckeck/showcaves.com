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

    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $sql = "SELECT COUNT(*) AS count FROM sights WHERE visible='yes'";
    $statement = $conn->prepare($sql);
    $statement->bindParam('limit', $limit, PDO::PARAM_INT);
    $statement->execute();
    $count = $row->count;

    ?>


    <title>Indexes: All Entries of showcaves.com</title>
</head>

<body>
<div data-role="page" id="pageroot">
    <div data-role="main" class="ui-content">


        <h1 align="center">All Entries of showcaves.com</h1>
        <h2 align="center"><? print $count ?> sites are listed on <span class="mySiteName">showcaves.com</span> on <? print date("d-M-Y H:i:s") ?></h2>

        <br clear="all">

        <h4>Explanation:</h4>

        <ul>
            <li>The names are listed <b>alphabetically</b>.</li>
            <li>The <b>country codes</b> are added to each site. Those codes are the two letter country codes, used for first level domains, as defined in ISO 3166.</li>
            <li>The names are always given in the original language, if possible and known.</li>
            <li>If the original language has no Latin font, we give the common transcription.</li>
            <li>The search works on parts of the name, so its not necessary to enter the beginning, if you only know a part in the middle it will work.</li>
            <li>Wait a second after your input, the list is quite long, search will take a little. Actually it is done on your computer so the speed depends on your own machine.</li>
        </ul>

        <br clear="all">

        <label for="theList">search the list...</label>
        <ul id="theList" data-role="listview" data-inset="true" data-filter="true">

            <?
            $sql = "SELECT name, filename, countrycode, country, category FROM sights WHERE visible='yes' ORDER BY sortby";
            $result = mysql_query($sql, $conn);

            $filebase = "../../..";
            $NumberOfObjects = 0;

            while ($row = mysql_fetch_object($result)) {

                // check row and derive all texts
                //$name       = myUmlaute($row->name);
                //$country    = myUmlaute($row->country);
                $name = $row->name;
                $country = $row->countrycode;
                $Category = "Showcave";
                switch ($row->category) {
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

                print ("         <li><a data-ajax=\"false\" target=\"_top\" href='$filebase$row->filename'><img class='ui-li-icon ui-corner-none symbol' src='../../../graphics/symbol/$Category.png' alt='$Category'>$name, $country</a></li>\n");
            }

            @mysql_close($conn);
            ?>
        </ul>

    </div>

    <!-- Path Begin -->
    <div data-role="header" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a data-ajax="false" target="_top" href="../../index.html">Main Index</a></li>
                <li><a data-ajax="false" target="_top" href="index.html">Indexes</a></li>
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
                <li><a data-ajax="false" target="_top" href="#" onClick="xemhid('askir','showcaves','com')">Contact <span class="mySiteName">showcaves.com</span>: <img class="xemhid" alt="contact" src="/xemhid.php?p1=askir&p2=showcaves&p3=com"></a></li>
            </ul>
        </div>
    </div>
    <!-- Navigation Bar End -->

</div>
</body>
</html>
