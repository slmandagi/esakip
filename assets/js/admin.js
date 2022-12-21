$(document).ready(function () {
	var form = $("#triwulan1");

	form.submit(function (e) {
		e.preventDefault();

		$.ajax({
			type: form.attr("method"),
			url: form.attr("action"),
			data: form.serialize(),
			success: function (data) {
				if ((data.status = true)) {
					location.reload();
				} else if ((data.status = false)) {
					location.reload();
				}
			},
			error: function () {
				alert("Terjadi Kesalahan!");
			},
		});
	});
});
