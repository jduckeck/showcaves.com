<?php
include("../../../../opendb.php");

if ($conn) {
    $sql = "SELECT COUNT(*) AS count FROM sights WHERE visible='yes'";
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
print ("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");
print ("<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n");

$sql = "SELECT filename FROM sights WHERE visible='yes' ORDER BY sortby";
$result = mysql_query($sql, $conn);

$filebase = "../../..";


while ($row = mysql_fetch_object($result)) {


    print ("<url>\n");
    print ("   <loc>http://www.showcaves.com" . $row->filename . "</loc>\n");
    print ("   <lastmod>" . "2008-06-01" . "</lastmod>\n");
    print ("   <changefreq>monthly</changefreq>\n");
    //print ( "   <priority>0.8</priority>\n" );
    print ("</url>\n");
}

@mysql_close($conn);
?>
</urlset> 
