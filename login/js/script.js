window.onload = function() {
	onResize();
	document.body.onresize = onResize;
}

function preload() {

}

function onResize() {
	var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0];
  var x = w.innerWidth || e.width || g.width;
  var y = w.innerHeight || e.height || g.height;

  var charCount = 1;
  var div = d.body.getElementsByTagName('main')[0].getElementsByTagName('div');
  for(var i = 0;i<div.length;i++) {
  	if(div[i].innerHTML.length > charCount) {
  		charCount = div[i].innerHTML.length;
  	}
  }
	var width = x/10;
	var fontWidth = charCount/100;

	var fontPerc = (width/fontWidth);
	fontPerc = Math.round(fontPerc*100)/100;

	document.getElementsByTagName('html')[0].style.fontSize = fontPerc + '%';
	var style = document.createElement('STYLE');
	style.innerHTML += "body { margin:0; }\n";
	style.innerHTML += "main > div { background-color: red; height: " + y/div.length + "px; }\n";
	document.head.appendChild(style);
}