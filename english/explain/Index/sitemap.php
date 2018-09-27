<?php
include("../../../php/opendb.php");
$pdo = openDB();

$NumberOfColumns = 3;

$xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"></urlset>");

$sql = "SELECT filename FROM sights WHERE visible='yes' ORDER BY sortby";

$filebase = "../../..";


$statement = $pdo->prepare($sql);
if ($statement->execute()) {
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $filename = $row['filename'];
        $url = $xml->addChild('url');
        $url->addChild('loc', "http://www.showcaves.com$filename");
        $url->addChild('lastmod', date ("Y-m-d", filemtime($filebase.$filename)));
        $url->addChild('changefreq', "monthly");
        //$url->addChild('priority', "0.8");
    }
}
Header('Content-type: text/xml');
print ($xml->asXML());
?>