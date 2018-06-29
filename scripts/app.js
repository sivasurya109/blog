// function ajax( obj ){
// 	var xhttp, responseData;
// 	if (window.XMLHttpRequest) {
// 	    xhttp = new XMLHttpRequest();
// 	} else {
// 	    // code for IE6, IE5
// 	    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
// 	}

// 	xhttp.onprogress = function(){
// 		obj.loading();
// 	};

// 	xhttp.onreadystatechange = function() {
// 		if (xhttp.readyState == 4 && xhttp.status == 200) {
// 			obj.success();
// 		}else{
// 			obj.error();
// 		}
// 	};

// 	xhttp.open(obj.method, obj.url, true);
// 	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// 	xhttp.send(JSON.stringify(obj.data));

// }