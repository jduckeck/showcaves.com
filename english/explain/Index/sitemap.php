<?php
include("../../../../opendb.php");

$count = 0;
$sql = "SELECT COUNT(*) AS count FROM sights WHERE visible='yes'";
$statement = $pdo->query($sql);
if ($statement->execute()) {
    if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $count = $row['count'];
    }
}

$NumberOfColumns = 3;

print ("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");
print ("<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n");

$sql = "SELECT filename FROM sights WHERE visible='yes' ORDER BY sortby";

$filebase = "../../..";


$statement = $pdo->prepare($sql);
if ($statement->execute()) {
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        print ("<url>\n");
        print ("   <loc>http://www.showcaves.com" . $row->filename . "</loc>\n");
        print ("   <lastmod>" . "2008-06-01" . "</lastmod>\n");
        print ("   <changefreq>monthly</changefreq>\n");
        //print ( "   <priority>0.8</priority>\n" );
        print ("</url>\n");
    }
}
print ("</urlset>");
?>