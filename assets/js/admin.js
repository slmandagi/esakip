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

	jQuery(document).on("click", "#t1", function (e) {
		e.preventDefault();

		var idnya = $(this).data("opd");

		// var basee = window.base_url = <?php echo json_encode(base_url('karoo/')); ?> + 'disposisi';

		// console.log(basee);

		$("#modal_t1").modal("show");

		$.ajax({
			type: "POST", //send with post
			url: basee,
			data: {
				idnya: idnya,
			},
			success: function (data) {
				$("#detail_id").text(idnya);
			},
		});
	});
});
