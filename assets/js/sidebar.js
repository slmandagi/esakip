// Ini for kase hide/show sidebar
const listBar = document.getElementById("list-bar");
const sidebar = document.getElementsByClassName("sidebar")[0];

listBar.addEventListener("click", function () {
	sidebar.classList.toggle("close");
	console.log("ok");
});

/* JQUERY START */
$(document).ready(function () {
	/* --FOR KASE TANDA USER D TINDIS PILIHAN APA */
	/* 1. INI KALO USER PILIH SALAH SATU MENU DI SIDEBAR*/
	$(".menu").click(function () {
		$(this).addClass("active").siblings().removeClass("active");
		console.log("active");

		if (
			$(".komponen-sakip").hasClass("active") &&
			$(".dropdown.bagian-komponen-sakip").is(":hidden")
		) {
			/* 1. FOR KASE TURUN DEPE DROPDOWN */
			$(".dropdown.bagian-komponen-sakip").slideDown("slow");
			/* 2. FOR UBAH ICON UP JADI DOWN */
			$(".panah-sakip", this).toggleClass("fa-chevron-down");
			console.log("komponen slidedown");
		} else {
			/* 1. FOR KASE NAE DEPE DROPDOWN */
			$(".dropdown.bagian-komponen-sakip").slideUp("slow");
			/* 2. FOR UBAH ICON DOWN JADI UP*/
			$(".panah-sakip", this).toggleClass("fa-chevron-down");
			console.log("komponen slide up");
		}

		if (
			$(".list-pengaturan").hasClass("active") &&
			$(".dropdown.bagian-pengaturan").is(":hidden")
		) {
			/* 1. FOR KASE TURUN DEPE DROPDOWN */
			$(".dropdown.bagian-pengaturan").slideDown("slow");
			/* 2. FOR UBAH ICON UP JADI DOWN */
			$(".panah-pengaturan", this).toggleClass("fa-chevron-down");
		} else {
			/* 1. FOR KASE NAE  DPE DROPDOWN*/
			$(".dropdown.bagian-pengaturan").slideUp("slow");
			/* 2. FOR UBAH ICON DOWN JADI UP */
			$(".panah-pengaturan", this).toggleClass("fa-chevron-down");
		}
	});

	/* 2. INI KALO USER PILIH SALAH SATU SUBMENU DI MENU KOMPONEN SAKIP*/
	$("ul .komponen, ul .pengaturan").click(function () {
		$(this).addClass("active").siblings().removeClass("active");
		console.log("halo");
	});

	/* --USER CLICK MENU KOMPONEN SAKIP  */
	// $(".komponen-sakip").click(function () {
	// 	if ($(".dropdown.bagian-komponen-sakip").is(":hidden")) {
	// 		$(".dropdown.bagian-komponen-sakip").slideDown("slow");
	// 		/* 2. FOR UBAH ICON UP JADI DOWN DAN SEBALIKNYA */
	// 		$(".panah", this).toggleClass("fa-chevron-down");
	// 		console.log("komponen");
	// 		// KALO DROPDOWN KOMPONEN SAKIP ADA TATUTUP KONG TORANG CLIC
	// 	} else {
	// 		$(".panah", this).toggleClass("fa-chevron-down");
	// 		$(".dropdown.bagian-komponen-sakip").slideUp("slow");
	// 		console.log("sakip visible");
	// 	}
	// });
	/* USER CLICK MENU PENGATURAN */
	// $(".list-pengaturan").click(function () {
	// 	$(".dropdown.bagian-pengaturan").toggle();
	// 	$(".panah", this).toggleClass("fa-chevron-down");
	// 	console.log("poengaturan");
	// });

	/* USER CLICK MENU KOMPONEN SAKIP SAAT SIDEBAR CLOSE */
	// $(".sidebar").hasClass("close")(function () {
	// 	console.log("hasclose");
	// });

	/* KETIKA SIDBEAR DI CLICK MAKA TAMBAH CLASS DI DROPDOWNN DENGAN NAMA side-close */
	/* DEPE FUNGSI FOR PENANDA KALO ITU DROP DOWN SO ADA DALAM KONDISI SIDEBAR CLOSE */
	$(".sidebar").click(function () {
		$(".dropdown.bagian-komponen-sakip, .dropdown.bagian-pengaturan").addClass(
			"side-close"
		);
		console.log("close");
	});

	$(".komponen-sakip").click(function () {});

	$(".list-pengaturan").click(function () {
		// KALO DROPDOWN PENGATURAN ADA TABUKA KONG TORANG D KLIK MENU, TORANG TOGGLE ULANG SPYA TTTUP
	});
});

/* JQUERY END */
