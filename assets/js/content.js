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
	$(".headline-for-all i").click(function () {
		$(".headline-for-all i").toggleClass("active");
		$('.head-notification-container').toggleClass("active");
		console.log("headline");
	});

	/*FOR UBAH WARNA DI BUTTON PAGINATION */
});


