var suratmasuk = {}

suratmasuk.recordSuratMasuk = function() {
	data = {
		tanggal_terima	: "",
		nomor_surat		: "",
		tangal_surat	: "",
		pengirim_surat	: "",
		tujuan_surat	: "",
		subjek_surat	: "",
		deskripsi		: "",
		file_upload		: "",
		tipe_surat		: "",
		id_user			: "",
	}

	return data
}

suratmasuk.dataSuratMasuk = []

suratmasuk.showModal = function() {
	$("#tambahSuratMasukModal").modal('show')
}

suratmasuk.saveSuratMasuk = function() {
	var data = suratmasuk.recordSuratMasuk()

	data.tanggal_terima = $("#tanggal_terima").val()
	data.nomor_surat = $("#nomor_surat").val()
	data.tangal_surat = $("#tangal_surat").val()
	data.pengirim_surat = $("#pengirim_surat").val()
	data.tujuan_surat = $("#tujuan_surat").val()
	data.subjek_surat = $("#subjek_surat").val()
	data.deskripsi = $("#deskripsi").val()
	data.file_upload = $("#file_upload").val()


	var formData = new FormData()

	var attachment = document.getElementById("file_upload").files[0]

	formData.append('file_upload', attachment)
	formData.append('Data', JSON.stringify(data))

	var url = "surat_masuk/SaveSuratMasuk"

	ajaxFilePost(url, formData,function(x) {
		// console.log(x)
		if (!x.isErrror) {
			$('#mytabs a[href="#listSuratMasuk"]').tab('show');
			suratmasuk.init()
		}else{
			alert(x.message)
		}
	}, function(err) {
		console.log(err)
	})


}

suratmasuk.getDataSuratMasuk = function() {
	var url = "surat_masuk/GetDataSuratMasuk"

	ajaxPost(url,{},function(result) {
		suratmasuk.dataSuratMasuk = result
		suratmasuk.renderTableSurat(result)
	})
}

suratmasuk.renderTableSurat = function(data) {
	$("#listSurat").empty()
	var TBODY = $('<tbody></tbody>')

	data.forEach(function(val,key){
		TBODY.append('<tr>'+
						'<td>'+(key+1)+'</td>'+
						'<td>'+val.nomor_surat+'</td>'+
						'<td>'+val.pengirim_surat+'</td>'+
						'<td>'+val.tanggal_surat+'</td>'+
						'<td>'+val.tanggal_terima+'</td>'+
						'<td>'+val.subjek_surat+'</td>'+
						'<td>'+
							'<a href="'+base_url+'disposisi/'+val.id_surat+'" class="btn btn-primary btn-sm">Disposisi</a>'+
						'</td>'+
					'</tr>')
	})

	$("#listSurat").append(TBODY.html())
}


suratmasuk.init = function() {
	suratmasuk.getDataSuratMasuk()
}


$(function() {
	suratmasuk.init()
	// $("#tambahSuratMasukModal").on('hidden.bs.modal', function(e){
	// 	console.log("MODAL CLOSSED")
	// })
})