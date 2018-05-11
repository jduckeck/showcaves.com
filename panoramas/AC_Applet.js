var gAttrs = null;
function _Attr(slot) {
	var	v = gAttrs[slot];
	if (null != v)
		return slot + '="' + v + '" ';
	else
		return "";
}
function _Param(slot, genXHTML) {
	var	pStr = "";
	var	eChar = (genXHTML) ? ' />' : '>';
	var v = gAttrs[slot];
	if (null!=v)
		pStr='<param name="' +slot+ '" value="' +v+ '"' +eChar+ '\n';
	return pStr;
}
function _DelAttrs() {
	for (var i=0; i<arguments.length; i++) {
		delete gAttrs[ arguments[i] ];
	}
}
function _Gen(caller, genXHTML, args) {
	if (args.length<3 || (1!=(args.length%2))) {
		alert("Invalid no. of args for "+caller);
		return "";
	}
	gAttrs = new Array();
	gAttrs["code"] = args[0];
	gAttrs["width"] = args[1];
	gAttrs["height"] = args[2];
	var	n, v, out;
	for (var i=3; i<args.length; i+=2) {
		n = args[i].toLowerCase();
		v = args[i+1];
		gAttrs[n] = v;
	}
	out = '<applet '+ _Attr("code") + _Attr("codebase") + _Attr("archive")
					+ _Attr("width") + _Attr("height")
					+ _Attr("hspace") + _Attr("vspace") + _Attr("align")
					+ _Attr("alt") + _Attr("accesskey") + _Attr("tabindex")
					+ _Attr("name") + _Attr("id")
					+ ' mayscript>\n';
	_DelAttrs("code","codebase","archive","width","height","name","tabindex",
					"hspace","vspace","align","title","accesskey");
	for (var n in gAttrs) {
		v=gAttrs[n];
		if (null!=v)
			out += _Param(n, genXHTML);
	}
	return out+'</ap'+'plet'+'>';
}
function writeAPPLET_HTML() {
	document.writeln(_Gen("writeAPPLET_HTML", false, arguments));
}
function writeAPPLET_XHTML() {
	document.writeln(_Gen("writeAPPLET_XHTML", true, arguments));
}
