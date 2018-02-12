ajaxPost = function(url,data,fnOk,fnNok) {
	$.ajax({
		url			: url,
		type		: 'POST',
		data		: data,
		dataType	: 'JSON',
		success		: function(data) {
			if (typeof fnOk == "function") {
				fnOk(data);
			}
		},
		error		: function(error) {
			if (typeof fnNok == "function") {
				fnNok(error)
			}else{
				alert("There was an error posting the data to the server: " + error.responseText)
			}
		}
	})
}

ajaxFilePost = function(url, formData, fnOK, fnNok){
	$.ajax({
		url		: url,
		type 	: 'POST',
		data 	: formData,
		dataType: 'JSON',
		mimeType: 'multipart/form-data',
		contentType	: false,
		processData	: false,
		success	: function (data) {
			if (typeof fnOK == "function") {
				fnOK(data)
			}
		},
		error	: function(error) {
			if (typeof fnNok == "function") {
				fnNok(error)
			}else{
				alert("There was an error posting the data to the server: " + error.responseText)
			}
		}
	})
}