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


	$('.pilih-lihat-upload-pengukuran').click(function () {
		$(this).addClass("active").siblings().removeClass("active")

		if ($('.pilih-lihat-hasil-pengukuran').hasClass('active')) {
			$('.pilih-lihat-hasil-pengukuran-content').toggleClass('active')
		}
		else {
			$('.pilih-lihat-hasil-pengukuran-content').removeClass('active')
		}
		if ($('.pilih-upload-dokumen-pengukuran').hasClass('active')) {
			$('.form-input-dokumen-pengukuran').toggleClass('active')
		}
		else {
			$('.form-input-dokumen-pengukuran').removeClass('active')

		}

	})

	/*FOR UBAH WARNA DI BUTTON PAGINATION */
});


