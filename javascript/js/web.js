

var ci = 1;

var curTime = +new Date(),
	expiresTime = curTime + 1024;
if(ci){
//var name = prompt("What's your name?");
document.cookie = "name=" + name + ";expires=expiresTime"

ci--;

}
function getCookie(name){
	var cookies = document.cookie.split("; ");
	for (var i = 0,len=document.cookie.length; i < len; i++) {
	 	var s = cookies[i].split('=');
	 	if(s[0] == 'name') {return s[1];}
	};
}
var yourname = getCookie('name')
$('.wrap').text(yourname)