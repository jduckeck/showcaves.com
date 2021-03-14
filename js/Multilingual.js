var multilingual = [];
var languages = [];
var language1 = "en";
var language2 = "de";

$(document).ready(init());

function init() {
    $.getJSON("../../../js/languages.json", function(json) {
        languages = json;
        $.getJSON("../../../js/Multilingual.json", function(json) {
            multilingual = json;
            writeTable("en", "de");
        });
    });

    let $language1select = $("#language1-select");
    $language1select.change(function() {
        let $select = $language1select.filter("option:selected");
        $select.each(function() {
            language1 = $(this).value();
        });

        writeTable(language1, language2);
    });

    let $language2select = $("#language2-select");
    $language2select.change(function() {
        let $select = $language2select.filter("option:selected");
        $select.each(function() {
            language2 = $(this).value();
        });

        writeTable(language1, language2);
    });
}

/**
 * fill the table with two languages
 *
 * @param {string} language1 the language of column 1
 * @param {string} language2 the language of column 2
 */
function writeTable(language1, language2) {

    let html = '<tbody id="Multilingual">';
    multilingual.forEach(function(item) {
        html += '<tr>';
        html += '<td>' + item["glossaryId"] + '</td>';
        html += '<td>' + item[language1] + '</td>';
        html += '<td>' + item[language2] + '</td>';
        html += '</tr>';
    });
    html += '</tbody>';

    //append created html to the table body:
    $('#Multilingual').replaceWith(html);
}

/**
 *
 * @param {string} replace
 * @param {string} selected
 */
function selectLanguage(replace, selected) {

    let html = '<select id="' + replace + '-select" name="' + replace + '-select">';
    Object.getOwnPropertyNames(languages).forEach(function(item) {
        let isSelected = (item === selected) ? 'selected' : '';
        let langdef = languages[item];
        html += '<option value="' + item + '" ' + isSelected + '>' + langdef["text"] + '</option>';
    });
    html += '</select>';

    //append created html to the table body:
    $('select#' + replace + '-select').replaceAll(html);
}

