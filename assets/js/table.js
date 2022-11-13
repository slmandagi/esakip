/*TORANG BEKING DULU DATA DUMMY FOR TABLE DASHBOARD */
$(document).ready(function () {
	var tabledashboard = [
		{
			nomor: 1,
			opd: "Provinsi Sulawesi Utara",
			rpjmd: "check",
			iku: "check",
			renstra: "check",
			renja: "check",
			pk: "check",
			renaksi: "check",
			laporan_kinerja: "check",
			lainnya: "check",
		},
		{
			nomor: 2,
			opd: "Provinsi Sulawesi Utara",
			rpjmd: "check",
			iku: "check",
			renstra: "check",
			renja: "check",
			pk: "check",
			renaksi: "check",
			laporan_kinerja: "check",
			lainnya: "check",
		},
		{
			nomor: 3,
			opd: "Provinsi Sulawesi Utara",
			rpjmd: "check",
			iku: "check",
			renstra: "check",
			renja: "check",
			pk: "check",
			renaksi: "check",
			laporan_kinerja: "check",
			lainnya: "check",
		},
		{
			nomor: 4,
			opd: "Provinsi Sulawesi Utara",
			rpjmd: "check",
			iku: "check",
			renstra: "check",
			renja: "check",
			pk: "check",
			renaksi: "check",
			laporan_kinerja: "check",
			lainnya: "check",
		},
		{
			nomor: 5,
			opd: "Provinsi Sulawesi Utara",
			rpjmd: "check",
			iku: "check",
			renstra: "check",
			renja: "check",
			pk: "check",
			renaksi: "check",
			laporan_kinerja: "check",
			lainnya: "check",
		},
		{
			nomor: 6,
			opd: "Provinsi Sulawesi Utara",
			rpjmd: "check",
			iku: "check",
			renstra: "check",
			renja: "check",
			pk: "check",
			renaksi: "check",
			laporan_kinerja: "check",
			lainnya: "check",
		},
		{
			nomor: 7,
			opd: "Provinsi Sulawesi Utara",
			rpjmd: "check",
			iku: "check",
			renstra: "check",
			renja: "check",
			pk: "check",
			renaksi: "check",
			laporan_kinerja: "check",
			lainnya: "check",
		},
		{
			nomor: 8,
			opd: "Provinsi Sulawesi Utara",
			rpjmd: "check",
			iku: "check",
			renstra: "check",
			renja: "check",
			pk: "check",
			renaksi: "check",
			laporan_kinerja: "check",
			lainnya: "check",
		},
		{
			nomor: 9,
			opd: "Provinsi Sulawesi Utara",
			rpjmd: "check",
			iku: "check",
			renstra: "check",
			renja: "check",
			pk: "check",
			renaksi: "check",
			laporan_kinerja: "check",
			lainnya: "check",
		},
		{
			nomor: 10,
			opd: "Provinsi Sulawesi Utara",
			rpjmd: "check",
			iku: "check",
			renstra: "check",
			renja: "check",
			pk: "check",
			renaksi: "check",
			laporan_kinerja: "check",
			lainnya: "check",
		},
	];

	/*ABIS ITU TORANG DEKLARASI INISIALISASI 3 VARIABLE. VARIABLE PERTAMA FOR SIMPAN NOMOR PAGE, VARIABLE KEDUA FOR SIMPAN BANYAKNYA DATA YANG MO DITAMPILKAN, VARIABLE KETIGA FOR SIMPAN TOTAL DATA DALAM DATABASE */

	var n_page = 1;
	var n_rows_per_page = 5;
	var total_data = tabledashboard.length;

	// TORANG AMBE DULU NILAI DARI DROPDOWN LIHAT SUPAYA BISA TAMPILKAN BERDASARKAN ITU DROPDOWN PE NILAI
	// var dropdown_lihat_value = "";
	// var n_rows_per_page = "";
	// $(".lihat-n-table").click(function () {
	// 	dropdown_lihat_value = $(".lihat-n-table").find(":selected").val();
	// 	n_rows_per_page = dropdown_lihat_value;
	// 	console.log("dropdown" + dropdown_lihat_value);
	// 	console.log("nrows" + n_rows_per_page);
	// });

	/* ABIS ITU TORANG BEKING VARIABLE FOR HITUNG TOTAL PAGE YANG BISA DIBAGIKAN UNTUK SEMUA DATA */
	var total_page = Math.ceil(total_data / n_rows_per_page);
	// banyaknya data dibagi dengan banyaknya data yang akan ditampilkan dalam satu page

	//beking fungsi dulu, ini fungsi for kase tampil data dari json ke table
	$.fn.tampilkanDataTable = function () {
		/*ABIS ITU TORANG MO BEKING DEPE INDEX MULAI DARI MANA DENG ABIS DIMANA, SUPAYA MO JADI PATOKAN TORANG BAPINDAH-PINDAH */
		/* DI CASENYA TORANG, TORANG MO KASE TAMPIL 5 BARIS DALAM SATU PAGE. BERARTI TORANG MULAI DEPE INDEX DARI 0 SAMPE 4 */

		// deklarasi deng inisialisasi variable index_awal dengan index_akhir.

		/*1. BEKING INDEX AWAL */
		/*BAGIMANA? TORANG PAKE DENGAN DATA YANG SO ADA. YAITU ADA N_PAGE DENGAN N_ROWS_PER_PAGE */
		/*TORANG KASE KURANG ITU N_PAGE DENG 1 SUPAYA MO DAPA DEPE INDEX AWAL */
		/*ABIS ITU KARENA TORANG MO KASE TAMPIL DATA SESUAI YANG TORANG INGINIKAN (N_ROWS_PER_PAGE), MAKA NILAI DARI N_ROWS_PER_PAGE TORANG PAKE SEBAGAI PARAMETER INDEX AWAL*/

		/* KARENA KEDUA VARIABLE(N_PAGE, N_ROWS_PER_PAGE) SANGAT BERGANTUNGAN, TORANG KASE KALI(*)DORANG DUA P NILAI */
		var index_awal = (n_page - 1) * n_rows_per_page;

		/*2. BEKING INDEX AKHIR */
		/* INDEX AKHIR SANGAT BERKAITAN ERAT DENGAN INDEX AWAL DENGAN N_ROWS_PER_PAGE */
		/* JADI TORANG MO KASE TAMBAH HASIL DARI INDEX AWAL DENGAN N_ROWS_PER_PAGE YANG SO KASE KURANG 1*/
		/*INI SUPAYA TORANG MO DAPA DEPE SELISI ANTARA TOTAL ROWS YANG MO KASE TAMPIL PER PAGE DENGAN DEPE INDEX AWAL */
		var index_akhir = index_awal + (n_rows_per_page - 1);

		/* berikut ini kta blm tau bgmna */
		index_akhir = index_akhir >= total_data ? total_data - 1 : index_akhir;

		// ABIS ITU TORANG BEKING VARIABLE FOR SIMPAN BARIS HTML YANG NANTI MO KASE SELIP DI TABLE
		var selip_html = "";

		for (var i = index_awal; i <= index_akhir; i++) {
			selip_html =
				selip_html +
				"<tr>" +
				"<td>" +
				tabledashboard[i].nomor +
				"</td>" +
				"<td>" +
				tabledashboard[i].opd +
				"</td>" +
				"<td>" +
				tabledashboard[i].rpjmd +
				"</td>" +
				"<td>" +
				tabledashboard[i].iku +
				"</td>" +
				"<td>" +
				tabledashboard[i].renstra +
				"</td>" +
				"<td>" +
				tabledashboard[i].renja +
				"</td>" +
				"<td>" +
				tabledashboard[i].pk +
				"</td>" +
				"<td>" +
				tabledashboard[i].renaksi +
				"</td>" +
				"<td>" +
				tabledashboard[i].laporan_kinerja +
				"</td>" +
				"<td>" +
				tabledashboard[i].lainnya +
				"</td>" +
				"</tr>";

			console.log("table jalan");
		}

		/*ABIS ITU TORANG HAPUS BAGIAN BODY YANG DEFAULT */
		$("table tbody tr").remove();
		/*KONG TORANG SELIP YANG TORANG D BEKING */
		$("table tbody").append(selip_html);
	};

	$.fn.tampilkanDataTable();
});
