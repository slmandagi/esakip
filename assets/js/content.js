$(document).ready(function () {
	/* FOR UBAH DEPE WIDTH DARI KONTEN KETIKA SIDEBAR DI TUTUP */
	$(".sidebar").click(function () {
		const hasClass = $(".sidebar").hasClass("close");
		// TORANG CHECK DULU KALO DPE SIDEBAR ADA CLOSE ATO NDA
		if (hasClass) {
			// KALO ADA CLOSE, MAKA CONTENT JADI LEBIH LEBAR, SIDEBAR JADI LEBIH KECIL
			$(".content-container").addClass("lebih-lebar");
			$(".sidebar-container").addClass("lebih-kecil");
			console.log("lebih-lebar");
		} else {
			// KALO TABUKA, MAKA CONTENT JADI LEBIH KECIL, SIDEBAR JADI LEBE BESAR
			$(".content-container").removeClass("lebih-lebar");
			$(".sidebar-container").removeClass("lebih-kecil");
		}
	});

	/*FOR UBAH WARNA ICON NOTIFIKASI */
	$(".headline-dashboard i").click(function () {
		$(".headline-dashboard i").toggleClass("active");
	});

	/*FOR UBAH WARNA DI BUTTON PAGINATION */
	$(".button-pagination a").click(function () {
		$(".button-pagination a")
			.addClass("active")
			.siblings()
			.removeClass("active");
		console.log("pagination active");
	});
});
