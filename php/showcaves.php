<?php
error_reporting (0);

/**
 * print the whole block of a country with collapsible header and list of items
 *
 * @param $entries number of the entries in the list for printing the summary
 * @param $countryName string the name of the country for the heading
 * @param $itemsText string the concatenated list of items
 */
function printCountry($entries, $countryName, $itemsText)
{
    if (1 == $entries) {
        $entriesText = "1 entry";
    } else {
        $entriesText = "$entries entries";
    }

    print ("        <div data-role=\"collapsible\">\n");
    print ("            <h3>$countryName<span class=\"ui-li-count\">$entriesText</span></h3>\n");
    print ("            <ul id=\"$countryName" . "List\" data-role=\"listview\" data-inset=\"true\">\n");
    print ($itemsText);
    print ("            </ul>\n");
    print ("        </div>\n");
}

/**
 * Get the category of a sight from the category in the database
 *
 * @param $category string conatins lowercase category
 * @return string with uppercase category for icon names
 */
function getCategory($category)
{
    switch ($category) {
        case 'showcaves':
            $Category = "Showcave";
            break;
        case 'caves':
            $Category = "Cave";
            break;
        case 'subterranea':
            $Category = "Subterranea";
            break;
        case 'mines':
            $Category = "Mine";
            break;
        case 'karst':
            $Category = "Karst";
            break;
        case 'springs':
            $Category = "Spring";
            break;
        case 'gorges':
            $Category = "Gorge";
            break;
        default:
            $Category = "Subterranea";
            break;
    }
    return $Category;
}

/**
 * display all entries grouped by country
 *
 * @param $pdo PDO the database
 */
function printByCountryAll($pdo)
{
    $filebase = "../../..";
    $oldCountry = '';
    $entries = 0;
    $itemsText = '';

    $sql = "SELECT name, filename, countrycode, country, chapter, category, closed FROM sights WHERE visible='yes' ORDER BY country, sortby";
    $statement = $pdo->prepare($sql);

    if ($statement->execute()) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $country = $row['country'];
            $name = $row['name'];
            if($row['closed']) {
                $name = "<span class='closed'>" . $name . "</span>";
            }
            $filename = $row['filename'];
            $Category = getCategory($row['category']);

            // initialize variables with first row
            if ($oldCountry == '') {
                $oldCountry = $country;
                $entries = 0;
                $itemsText = '';
            }

            // finalize old country
            if ($oldCountry != $country) {
                printCountry($entries, $oldCountry, $itemsText);
                $itemsText = '';
                $entries = 0;
                $oldCountry = $country;
            }

            $itemsText .= "                <li><a data-ajax=\"false\" target=\"_top\" href='$filebase$filename'><img alt='$Category' class='ui-li-icon ui-corner-none symbol' src='../../../graphics/symbol/$Category.png'>$name</a></li>\n";
            $entries++;
        }

        // there is no more row when the last country is done, so we have to output the last country
        printCountry($entries, $oldCountry, $itemsText);
    }
}

/**
 * display all entries grouped by country
 *
 * @param $pdo PDO the database
 * @param $category string the category which is displayed
 */
function printByCountry($pdo, $category)
{
    $filebase = "../../..";
    $oldCountry = '';
    $entries = 0;
    $itemsText = '';
    $Category = getCategory($category);

    $sql = "SELECT name, filename, countrycode, country, chapter, closed FROM sights WHERE visible='yes' AND category='$category' ORDER BY country, sortby";
    $statement = $pdo->prepare($sql);

    if ($statement->execute()) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $country = $row['country'];
            $name = $row['name'];
            if($row['closed']) {
                $name = "<span class='closed'>" . $name . "</span>";
            }
            $filename = $row['filename'];

            // initialize variables with first row
            if ($oldCountry == '') {
                $oldCountry = $country;
                $entries = 0;
                $itemsText = '';
            }

            // finalize old country
            if ($oldCountry != $country) {
                printCountry($entries, $oldCountry, $itemsText);
                $itemsText = '';
                $entries = 0;
                $oldCountry = $country;
            }

            $itemsText .= "                <li><a data-ajax=\"false\" target=\"_top\" href='$filebase$filename'><img alt='$Category' class='ui-li-icon ui-corner-none symbol' src='../../../graphics/symbol/$Category.png'>$name</a></li>\n";
            $entries++;
        }

        // there is no more row when the last country is done, so we have to output the last country
        printCountry($entries, $oldCountry, $itemsText);
    }
}

/**
 * count sights with the given filter
 *
 * @param $pdo PDO the database
 * @param $where string additional filters, empty string for no add filters
 * @return int number of entries
 */
function countSights($pdo, $where)
{
    $count = 0;
    $sql = "SELECT COUNT(*) AS count FROM sights WHERE visible='yes' " . $where;
    $statement = $pdo->query($sql);
    if ($statement->execute()) {
        if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $count = $row['count'];
        }
    }
    return $count;
}

/**
 * @param $pdo PDO the database
 */
function printAllByCategory($pdo, $category, $isGerman)
{
    $sql = "SELECT name, filename, countrycode, country, closed FROM sights WHERE visible='yes' AND category='$category' ORDER BY sortby";
    $filebase = "../../..";
    $Category = getCategory($category);

    $statement = $pdo->prepare($sql);
    if ($statement->execute()) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $name = $row['name'];
            if($row['closed']) {
                $name = "<span class='closed'>" . $name . "</span>";
            }
            $country = $row['country'];
            $filename = $row['filename'];

            // modify path for multilingual countries (currently de, at)
            if ($isGerman) {
                $countrycode = $row['countrycode'];
                switch ($countrycode) {
                    case 'de':
                    case 'at':
                        $filename = str_replace('/english/', '/german/', $filename);
                        break;
                    default:
                        break;
                }
            }

            print ("            <li><a data-ajax=\"false\" target=\"_top\" href='$filebase$filename'><img alt='$Category' class='ui-li-icon ui-corner-none symbol' src='../../../graphics/symbol/$Category.png'>$name, $country</a></li>\n");
        }
    }
}

/**
 * @param $pdo PDO the database
 */
function printAll($pdo, $isGerman)
{
    $sql = "SELECT name, filename, countrycode, country, category, closed FROM sights WHERE visible='yes' ORDER BY sortby";
    $filebase = "../../..";

    $statement = $pdo->prepare($sql);
    if ($statement->execute()) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $name = $row['name'];
            if($row['closed']) {
                $name = "<span class='closed'>" . $name . "</span>";
            }
            $country = $row['country'];
            $filename = $row['filename'];

            // modify path for multilingual countries (currently de, at)
            if ($isGerman) {
                $countrycode = $row['countrycode'];
                switch ($countrycode) {
                    case 'de':
                    case 'at':
                        $filename = str_replace('/english/', '/german/', $filename);
                        break;
                    default:
                        break;
                }
            }

            $Category = getCategory($row['category']);
            print ("            <li><a data-ajax=\"false\" target=\"_top\" href='$filebase$filename'><img alt='$Category' class='ui-li-icon ui-corner-none symbol' src='../../../graphics/symbol/$Category.png'>$name, $country</a></li>\n");
        }
    }
}

?>
