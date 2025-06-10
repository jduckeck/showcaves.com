<?php
error_reporting(0);

include("../../../php/opendb.php");
$pdo = openDB();

$NumberOfColumns = 3;

$xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"></urlset>");

$filebase = "../../..";

$sql = "SELECT filename FROM sights WHERE visible='yes' ORDER BY sortby";
$statement = $pdo->prepare($sql);
if ($statement->execute()) {
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $filename = $row['filename'];
        $url = $xml->addChild('url');
        $url->addChild('loc', "https://www.showcaves.com$filename");
        $url->addChild('lastmod', date("Y-m-d", filemtime($filebase . $filename)));
        $url->addChild('changefreq', "monthly");
    }
}

$sql = "SELECT filename FROM sights WHERE visible='yes' AND countrycode='de' OR countrycode='at' ORDER BY sortby";
$statement = $pdo->prepare($sql);
if ($statement->execute()) {
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $filename = str_replace("/english/", "/german/", $row['filename']);
        $url = $xml->addChild('url');
        $url->addChild('loc', "https://www.showcaves.com$filename");
        $url->addChild('lastmod', date("Y-m-d", filemtime($filebase . $filename)));
        $url->addChild('changefreq', "monthly");
    }
}

$sql = "SELECT path FROM static";
$statement = $pdo->prepare($sql);
if ($statement->execute()) {
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $filename = $row['path'];
        $url = $xml->addChild('url');
        $url->addChild('loc', "https://www.showcaves.com$filename");
        $url->addChild('lastmod', date("Y-m-d", filemtime($filebase . $filename)));
        $url->addChild('changefreq', "monthly");
    }
}

$dom = new DOMDocument('1.0');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());

Header('Content-type: text/xml');
print ($dom->saveXML());
?>