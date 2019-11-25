var csrf = document.getElementById('csrf').getAttribute('content');

function serverRequest(data,method,url,asyn,type,callback){
	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	callback(this.response);
        }
    };
    xhttp.open(method, url, asyn);
    if(type != '') {
        xhttp.setRequestHeader("Content-type", type);
    }
    xhttp.setRequestHeader('X-CSRF-TOKEN', csrf);
    xhttp.send(data);

}
