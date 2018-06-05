<!DOCTYPE html>
<html>
<head>
    <!-- Jochen Duckeck,&nbsp;Nuernberg,&nbsp;Germany -->
    <meta name="resource-type" content="document">
    <meta name="description"
          content="Show Caves of the World is a site about underground sights open to the public, like caves and mines, all over the World">
    <meta name="keywords"
          content="show cave public cave commercial cave show mine spring karst feature tunnel cellar subterranean tourist info">
    <meta name="copyright" content="Jochen Duckeck (http://www.JochenDuckeck.de/)">
    <meta name="author" content="Jochen Duckeck (http://www.JochenDuckeck.de/)">
    <meta name="publisher" content="Jochen Duckeck (http://www.JochenDuckeck.de/)">
    <meta name="page-topic" content="travel tourism destination">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="distribution" content="global">
    <meta http-equiv="content-language" content="en">
    <meta name="language" content="en">
    <link rel="shortcut icon" href="../../../favicon.ico">
    <link rel="stylesheet" type="text/css" href="../../../global.css">
    <script language="JavaScript" src="../../../xemhid.js"></script>


    <?
    include("../../../../open.inc.php");

    if ($conn) {
        $sql = "SELECT COUNT(*) AS count FROM sights WHERE visible='yes' AND category='showcaves'";
        $result = mysql_query($sql, $conn);
        echo mysql_error($conn);

        $row = mysql_fetch_object($result);
        $count = $row->count;

        $NumberOfColumns = 3;

    } else {
        print("<H2 ALIGN=CEMTER>Oops, something went wrong....</H2>\n\n");
        print("<P>\nPlease send your comment by e-mail to <A HREF=\"mailto:submit@showcaves.com\">submit@showcaves.com</A>\n</P>\n\n");
        die;
    }
    ?>


    <title>Indexes: All Show Caves Grouped By Country</title>
</head>

<body>


<h1 align="center">All Show Caves Grouped By Country</h1>
<h2 align="center"></h2>

<br clear="all">


<table align="center" border="1" cellspacing="0" cellpadding="5">
    <tfoot style="background-color: #FFFFFF">
    <td colspan="<? print $NumberOfColumns ?>"><? print $count ?> show caves are listed on <span class="mySiteName">showcaves.com</span>
        on <? print date("d-M-Y H:i:s") ?></td>
    </tfoot>

    <?
    $sql = "SELECT name, filename, countrycode, country, chapter FROM sights WHERE visible='yes' AND category='showcaves' ORDER BY country, sortby";
    $result = mysql_query($sql, $conn);

    $filebase = "../../..";
    $currentColumn = 0;
    $oldCountry = '';
    $entries = 0;

    while ($row = mysql_fetch_object($result)) {

        // finalize old country
        if ($oldcountry != '' && $oldcountry != $row->country) {
            while ($currentColumn > 0 && $currentColumn < $NumberOfColumns) {
                print ("<td>&nbsp;</td>\n");
                $currentColumn++;
            }
            $currentColumn = 0;
            print ("</tr>\n");
            if (1 == $entries) {
                print ("<tr><th colspan=\"" . $NumberOfColumns . "\">1 entry</th></tr>");
            } else {
                print ("<tr><th colspan=\"" . $NumberOfColumns . "\">" . $entries . " entries</th></tr>");
            }
            $entries = 0;
        }

        // head for new country
        if ($oldcountry != $row->country) {
            if ($row->countrycode == 'XX') {
                print ("<tr><th colspan=\"" . $NumberOfColumns . "\" bgcolor=\"Silver\">" . $row->country . "</th></tr>\n");
            } else if ($row->countrycode == 'us') {
                print ("<tr><th colspan=\"" . $NumberOfColumns . "\" bgcolor=\"Silver\"><a name=\"usa\" target=\"_top\" href=\"../../usa/index.html\">" . $row->country . "</a></th></tr>\n");
            } else if ($row->chapter != null) {
                print ("<tr><th colspan=\"" . $NumberOfColumns . "\" bgcolor=\"Silver\"><a name=\"" . $row->countrycode . "\" href=\"../../" . $row->chapter . "/region/" . $row->countrycode . ".html\">" . $row->country . "</a></th></tr>\n");
            } else {
                print ("<tr><th colspan=\"" . $NumberOfColumns . "\" bgcolor=\"Silver\"><a name=\"" . $row->countrycode . "\" target=\"_top\" href=\"../../" . $row->countrycode . "/index.html\">" . $row->country . "</a></th></tr>\n");
            }
            $oldcountry = $row->country;
        }

        // check row and derive all texts
        //$name       = myUmlaute($row->name);
        $name = $row->name;

        // first of three, start new row
        if ($currentColumn == 0) {
            print ("<tr>\n");
        }

        print ("<td><a href=\"" . $filebase . $row->filename . "\">" . $name . "</a></td>\n");
        $entries++;

        // thrird of three: new line
        if ($currentColumn == $NumberOfColumns - 1) {
            print ("</tr>\n");
            $currentColumn = 0;
        } else {
            $currentColumn++;
        }

    }

    while ($currentColumn > 0 && $currentColumn < $NumberOfColumns) {
        print ("<td>&nbsp;</td>\n");
        $currentColumn++;
    }
    $currentColumn = 0;
    print ("</tr>\n");

    @mysql_close($conn);
    ?>

</table>


<h4>Explanation:</h4>

<ul>
    <li>The names are always given in the original language, if possible and known.</li>
    <li>The names are listed <b>alphabetically</b>.</li>
</ul>


<br clear="all">

<table align="center" border="0" cellspacing="0" cellpadding="5" class="footerNav">
    <tr>
        <td align="center" valign="middle" class="footerNav">
            <a target="_top" href="../../index.html">Main Index</a> |
            <a target="_top" href="index.html">Indexes</a>
        </td>
    </tr>
    <tr>
        <td align="center" class="copyMsg">
            Last updated
            <script type="text/javascript">
                <!--
                Begin
                lastmod = document.lastModified // get string of last modified date
                lastmoddate = Date.parse(lastmod)   // convert modified string to date
                if (lastmoddate == 0) {               // unknown date (or January 1,&nbsp;1970 GMT)
                    document.writeln("Unknown,")
                } else {
                    document.writeln(lastmod + ",")
                }
                // End -->
            </script>
            <a data-ajax="false" target="_top" href="../../TermsOfUse.html">Terms of Use</a>,
            &copy;&nbsp;<a data-ajax="false" target="_top" href="../../Jochen.html">Jochen Duckeck</a>.
        </td>
    </tr>
</table>

<br><br>

<!-- Navigation Bar Begin -->
<table class="navBar" width="100%">
    <tr>
        <td class="navBar">
            <!-- SiteSearch Google -->
            <form method="get" action="http://www.google.com/custom">
                <table border="0">
                    <tr>
                        <td nowrap="nowrap" valign="top" align="left" height="32">
                            <a href="http://www.google.com/">
                                <img src="http://www.google.com/logos/Logo_25wht.gif" border="0" alt="Google"
                                     align="middle"></img></a>
                        </td>
                        <td nowrap="nowrap">
                            <input type="hidden" name="domains" value="www.showcaves.com"></input>
                            <label for="sbi" style="display: none">Enter your search terms</label>
                            <input type="text" name="q" size="25" maxlength="255" value="" id="sbi"></input>
                            <label for="sbb" style="display: none">Submit search form</label>
                            <input type="submit" name="sa" value="Search" id="sbb"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td nowrap="nowrap">
                            <table>
                                <tr>
                                    <td>
                                        <input type="radio" name="sitesearch" value="" id="ss0"></input>
                                        <label for="ss0" title="Search the Web"><font size="-1" color="black">Web</font></label>
                                    </td>
                                    <td>
                                        <input type="radio" name="sitesearch" value="www.showcaves.com" checked
                                               id="ss1"></input>
                                        <label for="ss1" title="Search www.showcaves.com"><font size="-1" color="black">www.showcaves.com</font></label>
                                    </td>
                                </tr>
                            </table>
                            <input type="hidden" name="client" value="pub-3096705250782116"></input>
                            <input type="hidden" name="forid" value="1"></input>
                            <input type="hidden" name="ie" value="ISO-8859-1"></input>
                            <input type="hidden" name="oe" value="ISO-8859-1"></input>
                            <input type="hidden" name="flav" value="0000"></input>
                            <input type="hidden" name="sig" value="8Si8pPlKIKw-wsNh"></input>
                            <input type="hidden" name="cof"
                                   value="GALT:#0000C0;GL:1;DIV:#336699;VLC:900000;AH:center;BGC:EDEDED;LBGC:EDEDED;ALC:0000FF;LC:0000FF;T:000000;GFNT:FF4040;GIMP:FF4040;LH:50;LW:150;L:http://www.showcaves.com/graphics/Logo.png;S:http://www.showcaves.com/english/explain/Misc/Google.html;FORID:1"></input>
                            <input type="hidden" name="hl" value="en"></input>
                        </td>
                    </tr>
                </table>
            </form>
            <!-- SiteSearch Google -->
            </form>
        </td>
        <td><img vspace="0" hspace="0" src="../../../graphics/space.gif" width="1" height="10"></td>
        <td class="navBar"><a target="_top" href="../../explain/Maps/index.html">Clickable Maps</a><br><a target="_top"
                                                                                                          href="../../explain/Index/index.html">Alphabetical
                Index</a></td>
        <td><img vspace="0" hspace="0" src="../../../graphics/space.gif" width="1" height="10"></td>
        <td class="navBar">Contact <span class="mySiteName">showcaves.com</span>:<br><img
                    onClick="xemhid('askir','showcaves','com')" style="cursor: pointer;"
                    src="/xemhid.php?p1=askir&p2=showcaves&p3=com" vspace="0" alt="contact" title="contact" border="0">
        </td>
        <td><img vspace="0" hspace="0" src="../../../graphics/space.gif" width="1" height="10"></td>
        <td class="navBar"><a target="_top" href="../../explain/index.html">General Information</a></td>
    </tr>
</table>
<!-- Navigation Bar End -->


</body>
</html>
