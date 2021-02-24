/* Template: Evolo - StartUp HTML Landing Page Template
   Author: Inovatik
   Created: June 2019
   Description: Custom JS file
*/
const countries = [
	{ id: 'Burundi', text: 'Burundi' },
	{ id: 'Ethiopia', text: 'Ethiopia' },
	{ id: 'Kenya', text: 'Kenya' },
	{ id: 'Rwanda', text: 'Rwanda' },
	{ id: 'Somalia', text: 'Somalia' },
	{ id: 'South Sudan', text: 'South Sudan' },
	{ id: 'Tanzania', text: 'Tanzania' },
	{ id: 'Rest of Africa', text: 'Rest of Africa' },
];

const products = [
	{
		id: 'Disposable Medical Gown Overall',
		text: 'Disposable Medical Gown Overall',
	},
	{ id: 'Reusable Face Mask', text: 'Reusable Face Mask' },
	{ id: 'Disposable Face Mask', text: 'Disposable Face Mask' },
	{ id: 'Face Shield', text: 'Face Shield' },
	{ id: 'Face Shield With Headband', text: 'Face Shield With Headband' },
	{ id: 'Industrial Work Suit', text: 'Industrial Work Suit' },
	{ id: 'Hair Net', text: 'Hair Net' },
	{
		id: 'Latex Powdered Medical Gloves',
		text: 'Latex Powdered Medical Gloves',
	},
	{ id: 'Bio Hazard Disposable Bags', text: 'Bio Hazard Disposable Bags' },
	{
		id: 'KN95 l disposable protective respirator',
		text: 'KN95 l disposable protective respirator',
	},
	{
		id: 'Disposable tie back masks',
		text: 'Disposable tie back masks',
	},
];
(function($) {
	/* Preloader */
	// $(window).on('load', function() {
	// 	const preloaderFadeOutTime = 500;t
	// 	function hidePreloader() {s
	// 		const preloader = $('.spinner-wrapper');
	// 		setTimeout(function() {
	// 			preloader.fadeOut(preloaderFadeOutTime);
	// 		}, 500);
	// 	}
	// 	hidePreloader();
	// });

	/* Navbar Scripts */
	// jQuery to collapse the navbar on scroll
	$(window).on('scroll load', function() {
		if ($('.navbar').offset().top > 60) {
			$('.fixed-top').addClass('top-nav-collapse');
		} else {
			$('.fixed-top').removeClass('top-nav-collapse');
		}
	});
//code//
es = $('#banner_area img'),
        now = images.filter(':visible'),
        next = now.next().length ? now.next() : images.first(),
        speed = 1000;

    now.fadeOut(speed);
    next.fadeIn(speed);
}

$(function () {
    setInterval(cycleImages, 1400);
});





//end code//
@media screen and (max-width: 500px) {
  .mySlides {
    width: 100%;
  }
}
//pictures//
function myFunction(imgs) {
  // Get the expanded image
  var expandImg = document.getElementById("expandedImg");
  // Get the image text
  var imgText = document.getElementById("imgtext");
  // Use the same src in the expanded image as the image being clicked on from the grid
  expandImg.src = imgs.src;
  // Use the value of the alt attribute of the clickable image as text inside the expanded image
  imgText.innerHTML = imgs.alt;
  // Show the container element (hidden with CSS)
  expandImg.parentElement.style.display = "block";
}



//end//
	// jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$(document).on('click', 'a.page-scroll', function(event) {
			const $anchor = $(this);
			$('html, body')
				.stop()
				.animate(
					{
						scrollTop: $($anchor.attr('href')).offset().top,
					},
					600,
					'easeInOutExpo'
				);
			event.preventDefault();
		});
	});

	// closes the responsive menu on menu item click
	$('.navbar-nav li a').on('click', function(event) {
		if (
			!$(this)
				.parent()
				.hasClass('dropdown')
		)
			$('.navbar-collapse').collapse('hide');
	});

	/* Image Slider - Swiper */
	const imageSlider = new Swiper('.image-slider', {
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
		},
		loop: true,
		spaceBetween: 30,
		slidesPerView: 5,
		breakpoints: {
			// when window is <= 580px
			580: {
				slidesPerView: 1,
				spaceBetween: 10,
			},
			// when window is <= 768px
			768: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			// when window is <= 992px
			992: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
			// when window is <= 1200px
			1200: {
				slidesPerView: 4,
				spaceBetween: 20,
			},
		},
	});

	/* Card Slider - Swiper */
	const cardSlider = new Swiper('.card-slider', {
		autoplay: {
			delay: 4000,
			disableOnInteraction: false,
		},
		loop: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	/* Video Lightbox - Magnific Popup */
	$('.popup-youtube, .popup-vimeo').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false,
		iframe: {
			patterns: {
				youtube: {
					index: 'youtube.com/',
					id(url) {
						const m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
						if (!m || !m[1]) return null;
						return m[1];
					},
					src: '/images/ppe.webm',
				},
				vimeo: {
					index: 'vimeo.com/',
					id(url) {
						const m = url.match(
							/(https?:\/\/)?(www.)?(player.)?vimeo.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/
						);
						if (!m || !m[5]) return null;
						return m[5];
					},
					src: 'https://player.vimeo.com/video/%id%?autoplay=1',
				},
			},
		},
	});

	/* Lightbox - Magnific Popup */
	$('.popup-with-move-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: false /* keep it false to avoid html tag shift with margin-right: 17px */,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-slide-bottom',
	});

	/**
	 * NAV ITEM
	 */
	$(function() {
		const current = window.location.pathname;
		$('#navbarsExampleDefault li a').each(function() {
			const $this = $(this);
			// if the current path is like this link, make it active
			if ($this.attr('href').indexOf(current) !== -1) {
				$this.addClass('active');
			}
		});
	});

	/**
	 * SELECT
	 */
	// $('#ccountry').select2({
	// 	data: countries,
	// 	placeholder: 'Kenya',
	// });

	// $('#cproduct').select2({
	// 	data: products,
	// 	placeholder: 'Please select product of interest',
	// });

	/*start of logos*/





	/**end of logos*/

	/** REQUEST */

	$('.request-product-btn').on('click', function() {
		const product = $(this).data('product');
		$('#cproduct')
			.val(product)
			.change();
	});
	/* Move Form Fields Label When User Types */
	// for input and textarea fields
	$('input, textarea').keyup(function() {
		if ($(this).val() != '') {
			$(this).addClass('notEmpty');
		} else {
			$(this).removeClass('notEmpty');
		}
	});

	/* Request Form */
	$('#requestForm')
		.validator()
		.on('submit', function(event) {
			if (event.isDefaultPrevented()) {
				// handle the invalid form...
				rformError();
				rsubmitMSG(false, 'Please fill all fields!');
			} else {
				// everything looks good!
				event.preventDefault();
				rsubmitForm();
			}
		});
		$("#basic-13 > div:gt(0)").hide();

		setInterval(function() {
		  $('#basic-13 > div:first')
		    .fadeOut(1000)
		    .next()
		    .fadeIn(1000)
		    .end()
		    .appendTo('#slideshow');
		},  3000);




	function rsubmitForm() {
		// initiate variables with form content
		const name = $('#rname').val();
		const email = $('#remail').val();
		const phone = $('#rphone').val();
		const select = $('#rselect').val();
		const terms = $('#rterms').val();

		$.ajax({
			type: 'POST',
			url: '/submitRequest',
			data: `name=${name}&email=${email}&phone=${phone}&select=${select}&terms=${terms}`,
			success(text) {
				if (text == 'success') {
					rformSuccess();
				} else {
					rformError();
					rsubmitMSG(false, text);
				}
			},
		});
	}

	function rformSuccess() {
		$('#requestForm')[0].reset();
		rsubmitMSG(true, 'Request Submitted!');
		$('input').removeClass('notEmpty'); // resets the field label after submission
	}

	function rformError() {
		$('#requestForm')
			.removeClass()
			.addClass('shake animated')
			.one(
				'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
				function() {
					$(this).removeClass();
				}
			);
	}

	function rsubmitMSG(valid, msg) {
		if (valid) {
			var msgClasses = 'h3 text-center tada animated';
		} else {
			var msgClasses = 'h3 text-center';
		}
		$('#rmsgSubmit')
			.removeClass()
			.addClass(msgClasses)
			.text(msg);
	}

	/* Contact Form */
	$('#contactForm')
		.validator()
		.on('submit', function(event) {
			if (event.isDefaultPrevented()) {
				// handle the invalid form...
				cformError();
				csubmitMSG(false, 'Please fill all fields!');
			} else {
				// everything looks good!
				event.preventDefault();
				csubmitForm();
			}
		});

	function csubmitForm() {
		// initiate variables with form content
		const name = $('#cname').val();
		const product = $('#cproduct').val();
		const quantity = $('#cquantity').val();
		const phone = $('#cphone').val();
		const country = $('#ccountry').val();
		const email = $('#cemail').val();
		const message = $('#cmessage').val();
		const terms = $('#cterms').val();
		$.ajax({
			type: 'POST',
			url: '/submitRequest',
			data: `name=${name}&email=${email}&phone=${phone}&product=${product}&quantity=${quantity}&country=${country}&message=${message}&terms=${terms}`,
			success(text) {
				if (text == 'success') {
					cformSuccess();
				} else {
					cformError();
					csubmitMSG(false, text);
				}
			},
		});
	}

	function cformSuccess() {
		$('#contactForm')[0].reset();
		csubmitMSG(true, 'Message Submitted!');
		$('input').removeClass('notEmpty'); // resets the field label after submission
		$('textarea').removeClass('notEmpty'); // resets the field label after submission
	}

	function cformError() {
		$('#contactForm')
			.removeClass()
			.addClass('shake animated')
			.one(
				'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
				function() {
					$(this).removeClass();
				}
			);
	}

	function csubmitMSG(valid, msg) {
		if (valid) {
			var msgClasses = 'h3 text-center tada animated';
		} else {
			var msgClasses = 'h3 text-center';
		}
		$('#cmsgSubmit')
			.removeClass()
			.addClass(msgClasses)
			.text(msg);
	}

	/* Privacy Form */
	$('#privacyForm')
		.validator()
		.on('submit', function(event) {
			if (event.isDefaultPrevented()) {
				// handle the invalid form...
				pformError();
				psubmitMSG(false, 'Please fill all fields!');
			} else {
				// everything looks good!
				event.preventDefault();
				psubmitForm();
			}
		});

	function psubmitForm() {
		// initiate variables with form content
		const name = $('#pname').val();
		const email = $('#pemail').val();
		const select = $('#pselect').val();
		const terms = $('#pterms').val();

		$.ajax({
			type: 'POST',
			url: 'php/privacyform-process.php',
			data: `name=${name}&email=${email}&select=${select}&terms=${terms}`,
			success(text) {
				if (text == 'success') {
					pformSuccess();
				} else {
					pformError();
					psubmitMSG(false, text);
				}
			},
		});
	}

	function pformSuccess() {
		$('#privacyForm')[0].reset();
		psubmitMSG(true, 'Request Submitted!');
		$('input').removeClass('notEmpty'); // resets the field label after submission
	}

	function pformError() {
		$('#privacyForm')
			.removeClass()
			.addClass('shake animated')
			.one(
				'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
				function() {
					$(this).removeClass();
				}
			);
	}

	function psubmitMSG(valid, msg) {
		if (valid) {
			var msgClasses = 'h3 text-center tada animated';
		} else {
			var msgClasses = 'h3 text-center';
		}
		$('#pmsgSubmit')
			.removeClass()
			.addClass(msgClasses)
			.text(msg);
	}

	/* Back To Top Button */
	// create the back to top button
	$('body').prepend(
		'<a href="body" class="back-to-top page-scroll">Back to Top</a>'
	);
	const amountScrolled = 700;
	$(window).scroll(function() {
		if ($(window).scrollTop() > amountScrolled) {
			$('a.back-to-top').fadeIn('500');
		} else {
			$('a.back-to-top').fadeOut('500');
		}
	});

	/* Removes Long Focus On Buttons */
	$('.button, a, button').mouseup(function() {
		$(this).blur();
	});
})(jQuery);
