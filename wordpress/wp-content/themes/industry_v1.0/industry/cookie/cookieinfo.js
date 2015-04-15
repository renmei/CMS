//skrypt CookieInfo v 1.0
//http://www.edious-system.pl
//kod jest udostępniony na zasadach Open Source GNU/GPL


//SKRYPT - NIE NALEŻY ZMIENIAC LUB MODYFIKOWAĆ 
function sprawdzCookie(nazwa){if (document.cookie!="NULL") {var thisCookie=document.cookie.split("; ");for (licz=0; licz<thisCookie.length; licz++){var Cookienazwa=thisCookie[licz].split("=")[0];var Cookiezawartosc=thisCookie[licz].split("=")[1];if (Cookienazwa==nazwa) return unescape(Cookiezawartosc);}}}function UsunCookieKomunikat() {var CookieKomunikat = document.getElementById('CookieKomunikat');document.body.removeChild(CookieKomunikat);var waznosc = new Date();waznosc.setMonth(waznosc.getMonth()+1);ustawCookie('akceptuj-cookie','ok',waznosc);}window.onload = (function() {var CookieKomunikat = document.createElement('div');var generujdiv = ''+komunikat+'<a class="button-link" href="#" onclick="UsunCookieKomunikat()">'+ButtonAkceptuj+'</a>';CookieKomunikat.setAttribute('id','CookieKomunikat');CookieKomunikat.innerHTML = generujdiv;if (sprawdzCookie('akceptuj-cookie')!='ok') {document.body.appendChild(CookieKomunikat);}});
function ustawCookie(nazwa, value, expire){document.cookie = nazwa + "=" + escape(value) + ((expire==null)?"" : ("; expires=" + expire.toGMTString()));}
