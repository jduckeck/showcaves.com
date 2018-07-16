<?xml version="1.0" encoding="UTF-8"?>
<kml xmlns="http://www.opengis.net/kml/2.2" xmlns:atom="http://www.w3.org/2005/Atom">
    <Document>
        <atom:author>             
          <atom:name>Jochen Duckeck</atom:name>         
        </atom:author>         
        <atom:link href="http://www.showcaves.com" />
        <Style id="showcave">
            <IconStyle>
                <Icon>
                    <href>http://www.showcaves.com/graphics/symbol/Showcave.gif</href>
                </Icon>
            </IconStyle>
        </Style>
        <Style id="cave">
            <IconStyle>
                <Icon>
                    <href>http://www.showcaves.com/graphics/kml/cave.png</href>
                </Icon>
            </IconStyle>
        </Style>
        <Style id="subterranea">
            <IconStyle>
                <Icon>
                    <href>http://www.showcaves.com/graphics/kml/misc.png</href>
                </Icon>
            </IconStyle>
        </Style>
        <Style id="mine">
            <IconStyle>
                <Icon>
                    <href>http://www.showcaves.com/graphics/kml/mine.png</href>
                </Icon>
            </IconStyle>
        </Style>
        <Style id="karst">
            <IconStyle>
                <Icon>
                    <href>http://www.showcaves.com/graphics/kml/karst.png</href>
                </Icon>
            </IconStyle>
        </Style>
        <Style id="spring">
            <IconStyle>
                <Icon>
                    <href>http://www.showcaves.com/graphics/kml/spring.png</href>
                </Icon>
            </IconStyle>
        </Style>
        <Style id="gorge">
            <IconStyle>
                <Icon>
                    <href>http://www.showcaves.com/graphics/kml/gorge.png</href>
                </Icon>
            </IconStyle>
        </Style>
    	<name>pa.kml</name>
<?
include("../../../../opendb.php");

if ($conn) {
    $sql = "SELECT COUNT(*) AS count FROM sights WHERE visible='yes' AND category='caves'";
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

<?
    $sql = "SELECT name, filename, countrycode, country, chapter FROM sights WHERE visible='yes' AND category='caves' ORDER BY country, sortby";
    $result = mysql_query($sql, $conn);

    $filebase = "../../..";
    $currentColumn = 0;
    $oldCountry = '';
    $entries = 0;

    while ( $row = mysql_fetch_object($result) ) {
?>
    <Placemark>
        <name>Woodward Cave</name>
        <description><![CDATA[<img src="../../../graphics/symbol/Showcave.png" class="symbol"><a href="../../../english/usa/showcaves/Woodward.html"           >Woodward Cave</a>]]></description>
        <LookAt>
            <longitude>-77.38763214096298</longitude>
            <latitude>40.8877923657711</latitude>
            <altitude>0</altitude>
            <range>57948.7069300782</range>
            <tilt>7.012424476596847e-013</tilt>
            <heading>0.0324632293210216</heading>
            <altitudeMode>relativeToGround</altitudeMode>
        </LookAt>
        <styleUrl>#showcave</styleUrl>
        <Point>
            <coordinates>-77.38707923407402,40.88891003939432,0</coordinates>
        </Point>
    </Placemark>
<?
        // finalize old country
        if ($oldcountry != '' && $oldcountry != $row->country) {
            while ( $currentColumn > 0 && $currentColumn < $NumberOfColumns ) {
                print ( "<td>&nbsp;</td>\n" );
                $currentColumn++;
            }
            $currentColumn = 0;
            print ( "</tr>\n" );
            if (1 == $entries) {
                print ( "<tr><th colspan=\"".$NumberOfColumns."\">1 entry</th></tr>");
            } else {
                print ( "<tr><th colspan=\"".$NumberOfColumns."\">".$entries." entries</th></tr>");
            }
            $entries = 0;
        }

        // head for new country
        if ($oldcountry != $row->country) {
            if ($row->countrycode == 'XX') {
                print ( "<tr><th colspan=\"".$NumberOfColumns."\" bgcolor=\"Silver\">".$row->country."</th></tr>\n");
            } else if ($row->countrycode == 'us') {
                print ( "<tr><th colspan=\"".$NumberOfColumns."\" bgcolor=\"Silver\"><a name=\"usa\" target=\"_top\" href=\"../../usa/index.html\">".$row->country."</a></th></tr>\n");
            } else if ($row->chapter != null) {
                print ( "<tr><th colspan=\"".$NumberOfColumns."\" bgcolor=\"Silver\"><a name=\"".$row->countrycode."\" href=\"../../".$row->chapter."/region/".$row->countrycode.".html\">".$row->country."</a></th></tr>\n");
            } else {
                print ( "<tr><th colspan=\"".$NumberOfColumns."\" bgcolor=\"Silver\"><a name=\"".$row->countrycode."\" target=\"_top\" href=\"../../".$row->countrycode."/index.html\">".$row->country."</a></th></tr>\n");
            }
            $oldcountry = $row->country;
        }

        // check row and derive all texts
        //$name       = myUmlaute($row->name);
        $name       = $row->name;

        // first of three, start new row
        if ( $currentColumn == 0 ) {
            print ( "<tr>\n" );
        }

        print ( "<td><a href=\"".$filebase.$row->filename."\">".$name."</a></td>\n" );
        $entries++;

        // thrird of three: new line
        if ( $currentColumn == $NumberOfColumns-1 ) {
            print ( "</tr>\n" );
            $currentColumn = 0;
        } else {
            $currentColumn++;
        }

    }

@mysql_close($conn);
?>
    </Document>
</kml>
