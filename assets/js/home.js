const landingClasses = document.querySelectorAll(".landing");
const navClasses = document.querySelectorAll(".nav-right ul li");

window.addEventListener("scroll", () => {
	let current = "";

	// console.log(scrollY); //ini untuk cek so dimana torang d scroll (atas ke bawah)
	landingClasses.forEach((landingClass) => {
		const landingTop = landingClass.offsetTop; //ini untuk menghitung jarak antar landing ->cek console.log(landingTop)
		const landingHeight = landingClass.clientHeight; // ini untuk mencari tahu berapa tinggi dari masing-masing landing

		if (scrollY >= landingTop - landingHeight / 3) {
			current = landingClass.getAttribute("id");
		}
	});

	navClasses.forEach((li) => {
		li.classList.remove("active");

		if (li.classList.contains(current)) {
			li.classList.add("active");
		}
	});
});
