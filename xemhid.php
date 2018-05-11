<?
$text = $_GET['p1']."@".$_GET['p2'].".".$_GET['p3'];
$breite = 8 * strlen($text);
$hoehe = 15;
$fontheight = 12;
$posX = 0;
$posY = 0;
$im = ImageCreate($breite,$hoehe);
$backcolor = ImageColorAllocate($im, 0, 0, 0);
$linkcolor = ImageColorAllocate($im, 0, 0, 192);
ImageColorTransparent($im, $backcolor);
ImageString($im, 4, $posX, $posY, $text, $linkcolor);
//ImageTtfText($im, $fontheight, 0, $posX, $posY, $col, "arial.ttf", $text);
Header("Content-type: image/png");
ImagePNG($im);
ImageDestroy($im);
?>

