function ajaxObj( meth, url, asyn ) {
	var x = new XMLHttpRequest();
	x.open( meth, url, asyn );
	x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	return x;
}
function ajaxReturn(x){
	if(x.readyState == 4 && x.status == 200){
	    return true;	
	}
}