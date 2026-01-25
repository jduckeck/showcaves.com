$dir = "."
$files = Get-ChildItem $dir -Filter *.html

$out = "<ul>`n"

foreach ($file in $files) {
    $html = Get-Content $file.FullName -Raw
    if ($html -match "<h1[^>]*>(.*?)</h1>") {
        $title = $matches[1].Trim()
    } else {
        $title = $file.Name
    }
    $out += "         <li><a data-ajax='false' href='../../in/subterranea/$($file.Name)'><img alt='Subterranea' class='ui-li-icon ui-corner-none symbol' src='../../../graphics/symbol/Subterranea.png'>$title</a></li>`n"
}

$out += "</ul>`n"
$out | Set-Content "linkliste.txt" -Encoding UTF8

Write-Host "linkliste.html erzeugt"