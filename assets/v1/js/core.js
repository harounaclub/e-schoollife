;(function($, window, document){

	'use strict';

	var wnd = $(window),
	w = wnd.outerWidth(),
	h = wnd.outerHeight(),
	wrap = $('.wrap'),
	parallaxContainer = $('.parallax-container'),
	countdown = $('.countdown'),
	ch = null,
	subscribe = $('.subscribe'),
	sh = null,
	points = $('.point'),
	pdays = $('.pdays'), phours = $('.phours'), pminutes = $('.pminutes'), pseconds = $('.pseconds'),
	pdaysv = pdays.find('.pvalue'),
	phoursv = phours.find('.pvalue'),
	pminutesv = pminutes.find('.pvalue'),
	psecondsv = pseconds.find('.pvalue'),
	pbar = $('.pbar'),
	defaultFontSize = 72,
	checkEmail = function(em)
	{
		var emailRe = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return emailRe.test(em);
	},
	toMiddle = function(selector, animate)
	{
		var els = $(selector);

		els.each(function(idx, _el){
			var el = $(_el),
			cel = el.find('.content'),
			elh = el.outerHeight(),
			celh = cel.outerHeight();

			if(animate)
				cel.animate({
					'margin-top': celh < elh ? parseInt((elh - celh) / 2, 10) : 0
				}, 600);
			else
				cel.css({
					'margin-top': celh < elh ? parseInt((elh - celh) / 2, 10) : 0
				});
		});
	},
	onResize = function()
	{
		w = wnd.outerWidth();
		h = wnd.outerHeight();

		var fontCalc = defaultFontSize * (w >= 940 ? 940 : w) / 940;

		$('.pvalue').css({
			'font-size': fontCalc + 'px'
		});

		wrap.css({
			width: w
		});

		ch = parseInt(countdown.find('.content').outerHeight() + 40, 10);
		sh = parseInt(subscribe.find('.content').outerHeight(), 10);
		sh = sh + 40 < h - ch ? h - ch : sh + 40;

		countdown.css({ height: ch });
		subscribe.css({ height: sh });

		toMiddle('.subscribe, .countdown');

		$.fn.parallax.doResize();
	}, times = ['seconds', 'minutes', 'hours', 'days'];

	$('.social img').css({opacity: 0.4});

	$('.social img').mouseover(function(){
		$(this).stop().animate({opacity: 1.0}, 400);
	}).mouseout(function(){
		$(this).stop().animate({opacity: 0.4}, 400);
	});

	$('.countdown').countdown(countdownDate, function(e){

		var idx = $.inArray(e.type, times);

		if(idx < 0)
			return;

		for(var i = 0; i < idx + 1; i++)
		{
			var text = e.lasting[times[i]];
			$('.p'.concat(times[i], ' .pvalue')).text(''.concat(text < 10 ? '0' : '', text));
		}

		pbar.stop().animate({ width: 100 - (e.lasting.seconds * 100 / 60) + '%' }, 700);
	});

	parallaxContainer.parallax({
		overflow: 0.08,
		children: '.parallax-item',
		motion: [{x: 0.5, y: 0.5}, {x: 0.8, y: 0.8}]
	});

	// handle subscribe form
	$('.buttonsubs').click(function(){

		// get informations
		var emEl = $('.inputsubs'),
			emValue = emEl.val(),
			msgbox = $('.msgbox'),
			msg = $('.msg'),
			cab = $('.custom-alert-box'),
			showMessage = function(type, message)
			{
				cab.removeClass('alert success');
				cab.addClass(type).html(message);

				msgbox.show();
				cab.show();

				toMiddle('.subscribe', true);
			}, hideMessage = function()
			{
				msgbox.hide();
				cab.hide();
			};

		if(emEl.attr('disabled'))
			return;

		//validate
		if(emValue.length < 1)
		{
			showMessage('alert', 'Nothing entered!');
			return;
		}

		if(checkEmail(emValue) !== true)
		{
			showMessage('alert', 'Invalid email address!');
			return;
		}

		$.ajax({
			url: 'subscribe.php',
			type: 'POST',
			dataType: 'json',
			timeout: 10000,
			data: {
				email: emValue
			},
			beforeSend: function()
			{
				emEl.attr('disabled', 'disabled');
				showMessage('', 'Loading, please wait ...');
			}
		})
		.done(function(response){
			if(response.success === true)
			{
				showMessage('success', 'Thank you');
				$('.msgbox, .form').delay(2000).fadeOut(1000, function(){
					toMiddle('.subscribe', true);
				});
			}
			else
				showMessage('alert', response.message);
		}).fail(function(){
			showMessage('alert', 'Server error. Please try later.');
		}).always(function(){
			emEl.removeAttr('disabled');
		});

	});

	wrap.show();
	parallaxContainer.show();
	onResize();
	wnd.resize(onResize);

})($, window, document);