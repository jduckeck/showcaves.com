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

    use classes\Statistics;


    include("../../../../opendb.php");

    try {
        $statement = $conn->prepare("SELECT countrycode, chapter, country, category, COUNT(*) AS count FROM sights WHERE visible='yes' GROUP BY countrycode, chapter, country, category ORDER BY country, category");
        $statement->bindParam('limit', $limit, PDO::PARAM_INT);
        $statement->execute();
        $conn->setFetchMode(PDO::FETCH_INTO, new Statistics);

        $sql = "SELECT * FROM users";
        foreach ($pdo->query($sql) as $row) {
            echo $row['email'] . "<br />";
            echo $row['vorname'] . "<br />";
            echo $row['nachname'] . "<br /><br />";
        }
        foreach ($stmt as $student) {
            echo $student->getFullName() . '<br />';
        }

        $dbh = null;
    } catch (PDOException $e) {
        print("<H2 ALIGN=CEMTER>Oops, something went wrong....</H2>\n\n");
        print("<P>\nPlease send your comment by e-mail to <A HREF=\"mailto:submit@showcaves.com\">submit@showcaves.com</A>\n</P>\n\n");
        die;
    }
    $NumberOfColumns = 7;
    ?>


    <title>Indexes: Statistics of showcaves.com</title>
</head>

<body>
<div data-role="page" id="pageroot">
    <div data-role="main" class="ui-content">


        <h1 align="center">Statistics of showcaves.com</h1>
        <h2 align="center"></h2>

        <br clear="all">


        <p>
            The following table is a statistics about the contents of <span class="mySiteName">showcaves.com</span>.
            The site contains underground tourist sites from all over the world, which are
            grouped by political units aka countries and categorized as caves, show caves, mines, subterranea asf..
        </p>


        <br clear="all">


        <table align="center" border="1" cellspacing="0" cellpadding="5">
            <tfoot style="background-color: #FFFFFF">
            <tr>
                <td rowspan="9" class="center">
                    <span class="mySiteName">showcaves.com</span> entries as of <? print date("d-M-Y H:i:s") ?>
                </td>
            </tr>
            </tfoot>

            <thead>
            <tr>
                <th bgcolor="white">Country</th>
                <th bgcolor="white"><img src="../../../graphics/symbol/Showcave.gif" width="12" height="12">&nbsp;Showcaves</th>
                <th bgcolor="white"><img src="../../../graphics/symbol/Cave.gif" width="12" height="12">&nbsp;Caves</th>
                <th bgcolor="white"><img class="symbol" src="../../../graphics/symbol/Karst.png" alt="Karst">&nbsp;Karst Features</th>
                <th bgcolor="white"><img class="symbol" src="../../../graphics/symbol/Spring.png" alt="Spring">&nbsp;Springs</th>
                <th bgcolor="white"><img vspace="0" hspace="0" src="../../../graphics/symbol/Mine.png" class="symbol">Mines</th>
                <th bgcolor="white"><img vspace="0" hspace="0" src="../../../graphics/symbol/Misc.png" class="symbol">Subterranea</th>
                <th bgcolor="white"><img vspace="0" hspace="0" src="../../../graphics/symbol/Gorge.png" width="12" height="12">&nbsp;Gorges</th>
                <th bgcolor="white">Country Sum</th>
            </tr>

            </thead>
            <?
            $filebase = "../../..";
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

            while ($row = mysql_fetch_object($result)) {

                if ($oldcountry == '') {

                    if ($row->countrycode == 'XX') {
                        $countrycell = $row->country;
                        $cellatts = "";
                    } else if ($row->countrycode == 'us') {
                        $countrycell = "<a name=\"usa\" target=\"_top\" href=\"../../usa/index.html\">" . $row->country . "</a>";
                        $cellatts = " bgcolor=\"silver\"";
                    } else if ($row->chapter != null) {
                        $countrycell = "<a name=\"" . $row->countrycode . "\" href=\"../../" . $row->chapter . "/region/" . $row->countrycode . ".html\">" . $row->country . "</a>";
                        $cellatts = "";
                    } else {
                        $countrycell = "<a name=\"" . $row->countrycode . "\" target=\"_top\" href=\"../../" . $row->countrycode . "/index.html\">" . $row->country . "</a>";
                        $cellatts = " bgcolor=\"silver\"";
                    }

                    $oldcountry = $row->country;
                    $countries++;
                }

                // head for new country
                if ($oldcountry != $row->country) {
                    print ("<tr>\n");
                    print ("<td" . $cellatts . ">" . $countrycell . "</td>\n");
                    print ("<td" . $cellatts . " align=\"right\">" . $showcaves . "</td>\n");
                    print ("<td" . $cellatts . " align=\"right\">" . $caves . "</td>\n");
                    print ("<td" . $cellatts . " align=\"right\">" . $karst . "</td>\n");
                    print ("<td" . $cellatts . " align=\"right\">" . $springs . "</td>\n");
                    print ("<td" . $cellatts . " align=\"right\">" . $mines . "</td>\n");
                    print ("<td" . $cellatts . " align=\"right\">" . $subterranea . "</td>\n");
                    print ("<td" . $cellatts . " align=\"right\">" . $gorges . "</td>\n");
                    print ("<td" . $cellatts . " align=\"right\">" . $countrytotal . "</td>\n");
                    print ("</tr>\n");

                    if ($row->countrycode == 'XX') {
                        $countrycell = $row->country;
                        $cellatts = "";
                    } else if ($row->countrycode == 'us') {
                        $countrycell = "<a name=\"usa\" target=\"_top\" href=\"../../usa/index.html\">" . $row->country . "</a>";
                        $cellatts = " bgcolor=\"silver\"";
                    } else if ($row->chapter != null) {
                        $countrycell = "<a name=\"" . $row->countrycode . "\" href=\"../../" . $row->chapter . "/region/" . $row->countrycode . ".html\">" . $row->country . "</a>";
                        $cellatts = "";
                    } else {
                        $countrycell = "<a name=\"" . $row->countrycode . "\" target=\"_top\" href=\"../../" . $row->countrycode . "/index.html\">" . $row->country . "</a>";
                        $cellatts = " bgcolor=\"silver\"";
                    }

                    $oldcountry = $row->country;
                    $countries++;

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

                switch ($row->category) {
                    case 'showcaves':
                        $showcaves = $row->count;
                        $countrytotal += $row->count;
                        break;
                    case 'caves':
                        $caves = $row->count;
                        $countrytotal += $row->count;
                        break;
                    case 'subterranea':
                        $subterranea = $row->count;
                        $countrytotal += $row->count;
                        break;
                    case 'mines':
                        $mines = $row->count;
                        $countrytotal += $row->count;
                        break;
                    case 'karst':
                        $karst = $row->count;
                        $countrytotal += $row->count;
                        break;
                    case 'springs':
                        $springs = $row->count;
                        $countrytotal += $row->count;
                        break;
                    case 'gorges':
                        $gorges = $row->count;
                        $countrytotal += $row->count;
                        break;
                    default:
                        break;
                }

            }

            print ("<tr>\n");
            print ("<td" . $cellatts . ">" . $countrycell . "</td>\n");
            print ("<td" . $cellatts . " align=\"right\">" . $showcaves . "</td>\n");
            print ("<td" . $cellatts . " align=\"right\">" . $caves . "</td>\n");
            print ("<td" . $cellatts . " align=\"right\">" . $karst . "</td>\n");
            print ("<td" . $cellatts . " align=\"right\">" . $springs . "</td>\n");
            print ("<td" . $cellatts . " align=\"right\">" . $mines . "</td>\n");
            print ("<td" . $cellatts . " align=\"right\">" . $subterranea . "</td>\n");
            print ("<td" . $cellatts . " align=\"right\">" . $gorges . "</td>\n");
            print ("<td" . $cellatts . " align=\"right\">" . $countrytotal . "</td>\n");
            print ("</tr>\n");

            print ("<tr>");
            print ("<th bgcolor=\"white\">Countries</th>");
            print ("<th bgcolor=\"white\"><img vspace=\"0\" hspace=\"0\" src=\"../../../graphics/symbol/Showcave.gif\" width=\"12\" height=\"12\">&nbsp;Showcaves</th>");
            print ("<th bgcolor=\"white\"><img vspace=\"0\" hspace=\"0\" src=\"../../../graphics/symbol/Cave.gif\" width=\"12\" height=\"12\">&nbsp;Caves</th>");
            print ("<th bgcolor=\"white\"><img vspace=\"0\" hspace=\"0\" src=\"../../../graphics/symbol/Karst.gif\" width=\"12\" height=\"12\">&nbsp;Karst Features</th>");
            print ("<th bgcolor=\"white\"><img vspace=\"0\" hspace=\"0\" src=\"../../../graphics/symbol/Spring.gif\" width=\"12\" height=\"12\">&nbsp;Springs</th>");
            print ("<th bgcolor=\"white\"><img vspace=\"0\" hspace=\"0\" src=\"../../../graphics/symbol/Mine.gif\" width=\"12\" height=\"12\">&nbsp;Mines</th>");
            print ("<th bgcolor=\"white\"><img vspace=\"0\" hspace=\"0\" src=\"../../../graphics/symbol/Misc.gif\" width=\"12\" height=\"12\">&nbsp;Subterranea</th>");
            print ("<th bgcolor=\"white\"><img vspace=\"0\" hspace=\"0\" src=\"../../../graphics/symbol/Gorge.png\" width=\"12\" height=\"12\">&nbsp;Gorges</th>");
            print ("<th bgcolor=\"white\">Entries Total</th>");
            print ("</tr>\n");

            print ("<tr>\n");
            print ("<td>" . $countries . " countries</td>\n");
            print ("<td align=\"right\">" . $allshowcaves . "</td>\n");
            print ("<td align=\"right\">" . $allcaves . "</td>\n");
            print ("<td align=\"right\">" . $allkarst . "</td>\n");
            print ("<td align=\"right\">" . $allsprings . "</td>\n");
            print ("<td align=\"right\">" . $allmines . "</td>\n");
            print ("<td align=\"right\">" . $allsubterranea . "</td>\n");
            print ("<td align=\"right\">" . $allgorges . "</td>\n");
            print ("<td align=\"right\">" . $total . "</td>\n");
            print ("</tr>\n");
            ?>

        </table>

        <br clear="all">

        <p>
            This table gives the numbers of listed sites, grouped by countries and category.
            The subtotals per country and category are given too.
            The total number of sites listed on this website is given at the bottom right.
        </p>

        <p class="indentedText">
            Some countries have only a few entries, so those countrries are managed in a
            section called Misc Countires.
            In this table they have a <b>bright grey</b> background.
            Countries with a certain amount of underground sites (about 10) get their own
            section or chapter, which includes additional pages like some country
            background, geology and the translation of important caving terms.
            In this table they have a <b>dark grey</b> background.
        </p>


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
                <li><a data-ajax="false" target="_top" href="../../Jochen.html">&copy;&nbsp;Jochen Duckeck</a></li>
                <li><a data-ajax="false" target="_top" href="#" onClick="xemhid('askir','showcaves','com')">Contact
                        <span class="mySiteName">showcaves.com</span>: <img vspace="0" alt="contact" title="contact"
                                                                            border="0" style="cursor: pointer;"
                                                                            src="/xemhid.php?p1=askir&p2=showcaves&p3=com"></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Navigation Bar End -->


</div>


</body>
</html>
