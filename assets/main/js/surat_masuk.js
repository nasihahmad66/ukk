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

suratmasuk.showModal = function() {
	$("#tambahSuratMasukModal").modal('show')
}



$(function() {
	$("#tambahSuratMasukModal").on('hidden.bs.modal', function(e){
		console.log("MODAL CLOSSED")
	})
})