
function cookieOk() {
    document.cookie="cookies=accepted; path=/";
    history.back();
}

function cookieDeny() {
    window.location.href="http://ec.europa.eu/ipg/basics/legal/cookies/index_en.htm";
}

function checkCookie() {
    var ok = document.cookie.search("cookies=accepted") >= 0;
    var language = "english";
    if (document.href.search("german") >= 0) {
        language = "german";
    }
    if ( ok === false ) {
        window.location.href="/"+language+"/cookies.html";
    }
}
