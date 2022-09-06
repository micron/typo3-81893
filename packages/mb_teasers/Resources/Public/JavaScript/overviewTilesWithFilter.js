(function (window, $) {
	$('.overview-tiles__links a').on('click', function (e) {
		e.preventDefault();
		const target = $(this).attr('href');
		$('.overview-tiles__links a').removeClass('active');
		$(this).addClass('active');
		$('.overview-tiles').removeClass('d-block').addClass('d-none');
		$(target).removeClass('d-none').addClass('d-block');
	});

	$('button[data-bs-target="#overview-tiles-model"]').on('click', function () {
		const content = $(this).parent().find('.modal-content').html();
		$('#overview-tiles-model .modal-body').html(content);
	});
}(window, jQuery));
