<?
$p1 = $_GET['p1'];
$p2 = $_GET['p2'];
$p3 = $_GET['p3'];
$ip = $_GET['ip'];
$text = "";
if (strlen($ip) > 0)
{
    $text = "+".$ip;
}
if (strlen($p1) > 0)
{
    if (strlen($text) > 0)
    {
        $text = $text."-";
    }
    $text = $text.$p1;
}
if (strlen($p2) > 0)
{
    if (strlen($text) > 0)
    {
        $text = $text."-";
    }
    $text = $text.$p2;
}
if (strlen($p3) > 0)
{
    if (strlen($text) > 0)
    {
        $text = $text."-";
    }
    $text = $text.$p3;
}
$breite = 8 * strlen($text);
$hoehe = 15;
$fontheight = 12;
$posX = 0;
$posY = 0;
$im = ImageCreate($breite,$hoehe);
$backcolor = ImageColorAllocate($im, 0, 0, 0);
$linkcolor = ImageColorAllocate($im, ff, ff, ff);
ImageColorTransparent($im, $backcolor);
ImageString($im, 4, $posX, $posY, $text, $linkcolor);
Header("Content-type: image/png");
ImagePNG($im);
ImageDestroy($im);
?>

