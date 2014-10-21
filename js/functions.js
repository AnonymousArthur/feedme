var xmlHttp;
function GetXmlHttpObject() {
  var xmlHttp=null;
  try {
	xmlHttp=new XMLHttpRequest();   
  } catch (e) {
	try {      
	  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
	  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
  }
  return xmlHttp;
}
function stateChanged1() {
  if (xmlHttp.readyState==4) {
  
	document.getElementById('restaurant-page').innerHTML = xmlHttp.responseText;
  }
}
function restaurant(s) {
  xmlHttp=GetXmlHttpObject()
  if (xmlHttp==null) {
	alert ('Your browser does not support AJAX!');
	return;
  }

  xmlHttp.onreadystatechange=stateChanged1;
  try {
	xmlHttp.open('GET','restaurant.php?restaurant='+s,true);
	xmlHttp.send(null);
	} catch(e) {
	  alert ('exception error : '+e.name+'<br>'+e.message);
	}
}
 function sleep(ms)
	{
		var dt = new Date();
		dt.setTime(dt.getTime() + ms);
		while (new Date().getTime() < dt.getTime());
	}
	
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) != -1) {
            return c.substring(name.length, c.length);            
        }
    }
    return "";
}

function checkCookie() {
    var new_visitor=getCookie("new");
    if (new_visitor != "") {
       $(".panel").hide();
    } else {
       new_visitor = 1;
       if (new_visitor != "" && new_visitor != null) {
           setCookie("new", new_visitor, 30);
       }
    }
}
