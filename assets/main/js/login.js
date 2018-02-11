var login = {}

login.recordLogin = function() {
	var data = {
		USERNAME : "",
		PASSWORD : ""
	}

	return data
}

login.doLogin = function() {
	var data = login.recordLogin()
	data.USERNAME = $("#username").val()
	data.PASSWORD = $("#password").val()

	var url = "login/DoLogin"
	var param = {
		Data: data
	}

	ajaxPost(url, param, function(res) {
		if (res == 'Login Berhasil') {
			window.location.assign("dashboard")
		}
		alert(res)
	})

}