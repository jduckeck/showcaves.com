<?php
include("../../opendb.php");
if ($pdo == null) {
    exit();
}

$categories = array("showcave", "cave", "karst", "spring", "mine", "gorge", "subterranea");

$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><kml/>');
$xml->addAttribute('xmlns', 'http://www.opengis.net/kml/2.2');
$xml->addAttribute('xmlns:atom', 'http://www.w3.org/2005/Atom');
$Document = $xml->addChild('Document');
$author = $Document->addChild('atom:author');
$author->addChild('atom:name', 'Jochen Duckeck');
$Document->addChild('atom:link')->addAttribute('href', 'https://www.showcaves.com');

foreach ($categories as $category) {
    $Style = $Document->addChild('Style');
    $Style->addAttribute('id', $category);
    $Style->addChild('IconStyle')->addChild('Icon')->addChild('href', 'https://www.showcaves.com/graphics/symbol/$category.png');
}

$Document->addChild('name', 'pa.kml');

$sql = "SELECT name, filename, countrycode, country, chapter, region, category, latitude, longitude FROM sights WHERE visible='yes' AND category='caves' ORDER BY country, sortby";
$statement = $pdo->prepare($sql);
if ($statement->execute()) {
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $name = $row['name'];
        $filename = $row['filename'];
        $countrycode = $row['countrycode'];
        $country = $row['country'];
        $chapter = $row['chapter'];
        $category = $row['category'];
        $latitude = $row['latitude'];
        $longitude = $row['longitude'];

        $Placemark = $Document->addChild('Placemark');
        $Placemark->addChild('name', $name);
        $description = '<![CDATA[<img alt="" src="https://www.showcaves.com/graphics/symbol/$category.png" class="symbol"><a target="_blank" href="https://www.showcaves.com$filename">$name</a>]]';
        $Placemark->addChild('description', $description);
        $LookAt = $Placemark->addChild('LookAt');
        $LookAt->addChild('latitude', $latitude);
        $LookAt->addChild('longitude', $longitude);
        $LookAt->addChild('altitude', 0);
        $LookAt->addChild('range', 60000);
        $LookAt->addChild('tilt', 0);
        $LookAt->addChild('heading', 0);
        $LookAt->addChild('altitudeMode', 'relativeToGround');
        $Placemark->addChild('styleUrl', '#'.$category);
        $Placemark->addChild('Point')->addChild('coordinates', '$longitude,$latitude,0');
    }
}

Header('Content-type: text/xml');
print ($xml->asXML());

?>
