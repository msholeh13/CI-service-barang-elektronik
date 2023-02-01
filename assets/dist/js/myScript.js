$("#editModal").on("show.bs.modal", function (event) {
	var button = $(event.relatedTarget); // Button that triggered the modal
	var id = button.data("id");
	var nama = button.data("nama");
	var alamat = button.data("alamat");
	var hp = button.data("hp");
	var barang = button.data("barang");
	var keterangan = button.data("keterangan");
	var tgl = button.data("tgl");
	var modal = $(this);
	modal.find(".modal-body #id1").val(id);
	modal.find(".modal-body #Nama1").val(nama);
	modal.find(".modal-body #Alamat1").val(alamat);
	modal.find(".modal-body #Nomor_Telepon1").val(hp);
	modal.find(".modal-body #barang1").val(barang);
	modal.find(".modal-body #keterangan1").val(keterangan);
	modal.find(".modal-body #tanggal_perbaikan1").val(tgl);
});

function sum() {
	let biayaGantiAlat = document.getElementById("Biaya_ganti_alat").value;
	let biayaPerbaikan = document.getElementById("Biaya_perbaikan").value;

	let result = parseInt(biayaGantiAlat) + parseInt(biayaPerbaikan);
	if (!isNaN(result)) {
		console.log("ok!");
		document.getElementById("total_biaya").value = result;
	}
}

