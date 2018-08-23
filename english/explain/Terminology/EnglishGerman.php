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
    <!-- begin responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="../../../css/jquery.mobile-1.4.5.min.css" rel="stylesheet"/>
    <script src="../../../js/jquery-1.11.3.min.js"></script>
    <script src="../../../js/jquery.mobile-1.4.5.min.js"></script>
    <link href="../../../css/jquery.mmenu.all.css" type="text/css" rel="stylesheet"/>
    <script src="../../../js/jquery.mmenu.min.all.js" type="text/javascript"></script>
    <link href="../../../css/lightbox.min.css" rel="stylesheet">
    <script src="../../../js/lightbox.min.js" type="text/javascript"></script>
    <!-- end responsive -->

    <?
    include("../../../../opendb.php");
    ?>

    <title>Terminology: English-German Dictionary</title>
</head>

<body>
<div data-role="page" id="pageroot">
    <div data-role="main" class="ui-content">


        <h1 align="center">English-German Dictionary</h1>
        <h2 align=center></h2>

        <hr>

        <p>
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>English</th>
                <th>German</th>
                <th>Spanish</th>
                <th>French</th>
                <th>Hungarian</th>
                <th>Italian</th>
                <th>Portuguese</th>
                <th>Romanian</th>
                <th>Explanation</th>
            </tr>
            </thead>
            <tbody>
            <?
            $sql = "SELECT * FROM Terminology";
            $statement = $pdo->query($sql);
            if ($statement->execute()) {
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $Id = $row['Id'];
                    $English = $row['English'];
                    $German = $row['German'];
                    $Spanish = $row['Spanish'];
                    $French = $row['French'];
                    $Hungarian = $row['Hungarian'];
                    $Italian = $row['Italian'];
                    $Portuguese = $row['Portuguese'];
                    $Romanian = $row['Romanian'];
                    $Description = $row['Description'];
                    print ("<TR><TD>$Id</TD><TD>$English</TD><TD>$German</TD><TD>$Spanish </TD><TD>$French</TD><TD>$Hungarian</TD><TD>$Italian</TD><TD>$Portuguese</TD><TD>$Romanian</TD><TD>$Description</TD></TR>\n");
                }
            }
            ?>
            </tbody>
        </table>

    </div>

    <!-- Path Begin -->
    <div data-role="header" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a data-ajax="false" target="_top" href="../../index.html">Main Index</a></li>
                <li><a data-ajax="false" target="_top" href="../index.html">General Information</a></li>
                <li><a data-ajax="false" target="_top" href="index.html">Terminology</a></li>
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
                <li><a data-ajax="false" target="_top" href="#" onClick="xemhid('octavian','showcaves','com')">Contact <span class="mySiteName">showcaves.com</span>: <img class="xemhid" alt="contact" src="../../../xemhid.php?p1=octavian&p2=showcaves&p3=com"></a></li>
            </ul>
        </div>
    </div>
    <!-- Navigation Bar End -->


</div>

</body>
</html>
