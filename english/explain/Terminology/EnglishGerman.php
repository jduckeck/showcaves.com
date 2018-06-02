<!DOCTYPE html>
<html>
<head>
<meta name="resource-type" content="document">
<meta name="description" content="Show Caves of the World is a site about underground sights open to the public, like caves and mines, all over the World">
<meta name="keywords" content="show cave public cave commercial cave show mine spring karst feature tunnel cellar subterranean tourist info">
<meta name="copyright" content="Jochen Duckeck (http://www.JochenDuckeck.de/)">
<meta name="author" content="Jochen Duckeck (http://www.JochenDuckeck.de/)">
<meta name="publisher" content="Jochen Duckeck (http://www.JochenDuckeck.de/)">
<meta name="page-topic" content="travel tourism destination">
<meta name="robots" content="INDEX,FOLLOW">
<meta name="distribution" content="global">
<link rel="shortcut icon" href="../../../favicon.ico">
<link rel="stylesheet" type="text/css" href="../../../global.css">
<link rel="stylesheet" type="text/css" href="country.css">


<?
include("../../../../open.inc.php");

if ($conn) {
    $sql = "SELECT * FROM Terminology";
    $result = mysql_query($sql, $conn);

} else {
	print("<H2 ALIGN=CEMTER>Oops, something went wrong....</H2>\n\n");
    die;
}
?>


<TITLE>Terminology: English-German Dictionary</TITLE>
</HEAD>

<BODY>



<H1 ALIGN=CENTER>English-German Dictionary</H1>
<H2 ALIGN=CENTER></H2>

<HR>

<P>
<TABLE>
<TR><TH>Id</TH><TH>English</TH><TH>German</TH><TH>Spanish</TH><TH>French</TH><TH>Hungarian</TH><TH>Italian</TH><TH>Portuguese</TH><TH>Romanian</TH><TH>Explanation</TH></TR>
<?
    $NumberOfObjects = 0;
    while ( $row = mysql_fetch_object($result)) {
        print ( "<TR><TD>$row->Id" );
        print ( "</TD><TD>$row->English" );
        print ( "</TD><TD>$row->German" );
        print ( "</TD><TD>$row->Spanish " );
        print ( "</TD><TD>$row->French" );
        print ( "</TD><TD>$row->Hungarian" );
        print ( "</TD><TD>$row->Italian" );
        print ( "</TD><TD>$row->Portuguese" );
        print ( "</TD><TD>$row->Romanian" );
        print ( "</TD><TD>$row->Description" );

        print ( "</TD></TR>\n" );

        $NumberOfObjects++;
    }
@mysql_close($conn);
?>
</TABLE>
</P>


<HR>

<P>
<CENTER>
<A TARGET="_top" HREF="../../index.html">Main Index</A> |
<A TARGET="_top" HREF="../index.html">General Information</A> |
<A TARGET="_top" HREF="index.html">Terminology</A>
</CENTER>
</P>

<HR>

<ADDRESS>
Last updated
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
lastmod = document.lastModified // get string of last modified date
lastmoddate = Date.parse(lastmod)   // convert modified string to date
if(lastmoddate == 0){               // unknown date (or January 1, 1970 GMT)
   document.writeln("Unknown,")
   } else {
   document.writeln(lastmod + ",")
}
// End -->
</SCRIPT>
<a data-ajax="false" target="_top" href="../../TermsOfUse.html">Terms of Use</A>,
&copy;&nbsp;<a target="_blank"  href="../../Jochen.html">Jochen Duckeck</a>..
<!-- Thanx -->
</ADDRESS>

<P>
<CENTER>
<FONT SIZE=-1>
Comments, updates, additions:<BR>
<FORM ACTION="http://www.showcaves.com/english/explain/Misc/comment.php" METHOD="POST">
<INPUT TYPE=HIDDEN NAME="CaveName" VALUE="English-German Dictionary">
<TABLE BORDER="0" CELLSPACING="0" CELLPADDING="5">
<TR><TD>Your e-mail:</TD><TD><INPUT TYPE="TEXT" NAME="EMail" SIZE="70" MAXLENGTH="255"></TD></TR>
<TR><TD VALIGN="top">Your Comment:</TD><TD><TEXTAREA NAME="Comment" COLS="70" ROWS="4"></TEXTAREA></TD></TR>
<TR><TD COLSPAN="2" ALIGN=CENTER><INPUT TYPE=submit VALUE="Send!"></TD></TR>
</TABLE>
</FORM>
</FONT>
</CENTER>
</P>

</BODY>
</HTML>
