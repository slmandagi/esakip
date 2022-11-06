// Ini for kase hide/show sidebar

const listBar = document.getElementById("list-bar");
const sidebar = document.getElementsByClassName("sidebar")[0];

listBar.addEventListener("click", function () {
	sidebar.classList.toggle("close");
	console.log("ok");
});

// Ini for kse bdiam background color pas click salah satu menu

// const menu = document.querySelectorAll(".menu");
// const menu = document.querySelectorAll(".menu");
// menu.addEventListener("click", function () {
// 	menu.classList.add(".active");
// 	console.log("hallo");
// });

// $(".menu").on("click", function () {
// 	$(".menu").find(".active").removeClass("active");
// 	$(".menu").parent.addClass("active");
// 	console.log("halo");
// });
$(document).on("click", ".menu", function () {
	$(this).addClass("active").siblings().removeClass("active");
	console.log("active");
});
