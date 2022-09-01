/* Выпадающее меню Каталог в шапке */

document.addEventListener("DOMContentLoaded", function () {
	let arrSimilarProductSliders = document.querySelectorAll(".similar-product");

	if (arrSimilarProductSliders.length > 0) {
		arrSimilarProductSliders.forEach((element) => {
			let slider = element.querySelector(".similar_product-slider");
			let next = element.querySelector(".swiper-button-next");
			let prev = element.querySelector(".swiper-button-prev");

			let sliderSimilarProduct = new Swiper(slider, {
				slidesPerView: 1,
				watchOverflow: true,
				watchSlidesVisibility: true,
				watchSlidesProgress: true,
				spaceBetween: 24,
				navigation: {
					nextEl: next,
					prevEl: prev,
				},
				breakpoints: {
					1200: {
						slidesPerView: 4,
					},

					880: {
						slidesPerView: 3,
					},

					550: {
						slidesPerView: 2,
					},
				},
			});
		});
	}

	let sliderRelatedNews = new Swiper(".related_slider", {
		slidesPerView: 1,
		watchOverflow: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		spaceBetween: 24,
		navigation: {
			nextEl: ".related_product-arrow .swiper-button-prev",
			prevEl: ".related_product-arrow .swiper-button-next",
		},
		breakpoints: {
			1024: {
				slidesPerView: 2,
			},
		},
	});

	let sliderNews = new Swiper(".news_slider", {
		slidesPerView: 1,
		watchOverflow: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		spaceBetween: 32,
		navigation: {
			nextEl: ".news_wrap .swiper-button-next ",
			prevEl: ".news_wrap .swiper-button-prev",
		},
		breakpoints: {
			1200: {
				slidesPerView: 3,
			},

			750: {
				slidesPerView: 2,
			},
		},
	});

	let galleryThumbs = new Swiper(".gallery-thumbs", {
		centeredSlides: true,
		centeredSlidesBounds: true,
		slidesPerView: 5,
		watchOverflow: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		direction: "vertical",
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		breakpoints: {
			375: {
				slidesPerView: 4,
				centeredSlides: true,
				direction: "horizontal",
				navigation: {
					enabled: false,
				},
			},
			550: {
				slidesPerView: 4,
				centeredSlides: false,
				direction: "horizontal",
			},
			650: {
				slidesPerView: 4,
				centeredSlides: false,
			},
			880: {
				slidesPerView: 4,
				centeredSlides: false,
			},
			1024: {
				slidesPerView: 4,
				centeredSlides: false,
			},
			1200: {
				slidesPerView: 5,
			},
		},
	});

	let galleryMain = new Swiper(".gallery-main", {
		watchOverflow: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		preventInteractionOnTransition: true,
		effect: "fade",
		fadeEffect: {
			crossFade: true,
		},
		thumbs: {
			swiper: galleryThumbs,
		},
		breakpoints: {
			375: {
				navigation: {
					nextEl: ".swipermain-button-next",
					prevEl: ".swipermain-button-prev",
				},
			},
			650: {
				navigation: {
					enabled: false,
				},
			},
		},

		on: {
			slideChangeTransitionStart: function (swiper) {
				swiper.slideTo(swiper.activeIndex);
			},

			transitionStart: function (swiper) {
				swiper.slideTo(swiper.activeIndex);
			},
		},
	});

	let sliderReviews = new Swiper(".reviews_wrap .reviews_slider", {
		direction: "vertical",
		loop: true,
		pagination: {
			el: ".reviews_wrap .swiper-pagination",
		},

		navigation: {
			nextEl: ".reviews_wrap .swiper-button-next",
			prevEl: ".reviews_wrap .swiper-button-prev",
		},
	});

	let arrGallery = document.querySelectorAll(".lightgallery");

	if (arrGallery.length > 0) {
		arrGallery.forEach((element) => {
			lightGallery(element, {
				selector: "a",
				addClass: "lightGallery-white-theme",
				exThumbImage: "data-external-thumb-image",
				speed: 500,
				plugins: [lgFullscreen, lgThumbnail],
				thumbnail: true,
				zoomFromOrigin: false,
				mobileSettings: {
					thumbnail: false,
				},
			});
		});
	}

	// Раскрытие отзывов

	let reviewsContainer = document.querySelector(".product-reviews_list");
	let buttonViewAllRev = document.querySelector(".product-reviews_button-all");
	let arrReviewsItem = Array.prototype.slice.call(document.querySelectorAll(".product-reviews_item"));

	if (arrReviewsItem.length > 0 && arrReviewsItem.length > 0) {
		if (arrReviewsItem.length < 6) {
			buttonViewAllRev.classList.add("button-hidden");
		} else {
			buttonViewAllRev.classList.add("view-all");
		}

		arrReviewsItem.forEach((el, index) => {
			if (index > 4) {
				el.style.height = "0px";
				el.classList.add("--hidden");
			}
		});
	}

	if (buttonViewAllRev != null) {
		buttonViewAllRev.addEventListener("click", (e) => {
			e.preventDefault();

			arrReviewsItem.forEach((el, index) => {
				if (index > 4) {
					if (el.style.height == "0px") {
						el.classList.remove("--hidden");
						el.style.height = el.scrollHeight + "px";
						buttonViewAllRev.classList.remove("view-all");
					} else {
						el.classList.add("--hidden");
						el.style.height = "0px";
						buttonViewAllRev.classList.add("view-all");
					}
				}
			});

			if (buttonViewAllRev.classList.contains("view-all")) {
				buttonViewAllRev.textContent = "Посмотреть все";
			} else {
				buttonViewAllRev.textContent = "Скрыть";
			}
		});
	}

	const da = new DynamicAdapt("max");
	da.init();
});

$(document).ready(function () {
	// Карусель на главной странице
	$(".main-carousel").flickity({
		cellSelector: ".carousel-cell",
		cellAlign: "left",
		contain: true,
	});

	let el1 = $(".flickity-prev-next-button.previous");
	let el2 = $(".flickity-prev-next-button.next");
	let container = $(".main-carousel .control-arrows");

	container.append(el1);
	container.append(el2);

	let dots = $(".flickity-page-dots");
	let control = $(".control.static-banner");

	control.append(dots);

	// Карусель команды
	$(".team-slider").flickity({
		cellSelector: ".carousel-cell",
		cellAlign: "left",
		contain: true,
		pageDots: false,
	});

	let btn1 = $(".team-slider .previous");
	let btn2 = $(".team-slider .next");
	let box = $(".control-arrows");
	box.append(btn1);
	box.append(btn2);

	// Открытие каталога
	$(".dropbtn").on("click", function () {
		$("#Dropdown").toggleClass("show");
	});

	$(document).mouseup(function (e) {
		if (!$(".dropdown-content").is(e.target) && !$(".dropbtn").is(e.target)) {
			$(".dropdown-content").removeClass("show");
		}
	});

	//Меню
	$(".fullmenu").click(function () {
		$(".overlay").toggleClass("opens");
		$(this).toggleClass("btn-open");
		$("body").toggleClass("hidden");
	});

	$(".overlay").on("click", function () {
		$(".overlay").toggleClass("opens");
		$(".fullmenu").toggleClass("btn-open");
		$("body").toggleClass("hidden");
		open = false;
	});

	let match = [window.matchMedia("(max-width: 880px)"), window.matchMedia("(max-width: 960px)")];

	// Поиск
	function toogleSearch() {
		$("#search_wrapper").toggleClass("down");
	}

	function actvieToogleSearch() {
		if (match[1].matches) {
			$("#search_btn").on("click", toogleSearch);
		} else {
			$("#search_btn").off("click", toogleSearch);
		}
	}

	actvieToogleSearch();
	match[1].addListener(actvieToogleSearch);

	// Меню подвала
	function toogleFooterMenu() {
		$(this).toggleClass("show");
		$(this).next().slideToggle(300);
	}

	function actvieToogleFooterMenu() {
		if (match[0].matches) {
			$(".js-toggle .head").next().slideUp(300);
			$(".js-toggle .head").on("click", toogleFooterMenu);
		} else {
			$(this).removeClass("show");
			$(".js-toggle .head").next().slideDown(300);
			$(".js-toggle .head").off("click", toogleFooterMenu);
		}
	}

	actvieToogleFooterMenu();
	match[0].addListener(actvieToogleFooterMenu);

	/* Выезжающий фильтр */
	const menuBtn = $(".filter_name"),
		menu = $("#filter"),
		close = $("#cloze");

	menuBtn.on("click", function () {
		if ($(this).hasClass("is-active")) {
			$(this).removeClass("is-active");
			menu.toggleClass("slide");
		} else {
			$(this).addClass("is-active");
			menu.toggleClass("slide");
		}
	});

	close.on("click", function () {
		$(this).removeClass("is-active");
		menu.toggleClass("slide");
	});

	$(document).click(function (e) {
		if (!menuBtn.is(e.target) && !menu.is(e.target) && menu.has(e.target).length === 0) {
			menu.removeClass("slide");
			menuBtn.removeClass("is-active");
		}
	});

	// Табы

	$(".tablinks").on("click", function () {
		let idContent = $(this).attr("data-tab-control");
		$(".tabcontent").removeClass("active");
		$(".tablinks").removeClass("active");
		$(".tabcontent").css({ display: "none" });

		$(this).addClass("active");
		$("#" + idContent).addClass("active");
		$("#" + idContent).css({ display: "block" });
	});

	$(".tablinks").eq(0).click();

	// Бегущая строка
	$(".runline-wrapper").marquee({
		duration: 30000,
		pauseOnHover: true,
		startVisible: true,
		gap: 40,
		delayBeforeStart: 0,
		direction: "left",
		duplicated: true,
	});

	$("select").niceSelect();

	$("input[type=tel]").inputmask({
		mask: "+7 (Z99) 999-99-99",
		definitions: {
			Z: {
				validator: "[0-6,9]",
			},
		},
	});
});

(function () {
	function emit(target, name) {
		var event;
		if (document.createEvent) {
			event = document.createEvent("HTMLEvents");
			event.initEvent(name, true, true);
		} else {
			event = document.createEventObject();
			event.eventType = name;
		}

		event.eventName = name;

		if (document.createEvent) {
			target.dispatchEvent(event);
		} else {
			target.fireEvent("on" + event.eventType, event);
		}
	}

	var outputsSelector = "input[type=number][source],select[source]";

	function onChange(e) {
		var outputs = document.querySelectorAll(outputsSelector);

		for (var index = 0; index < outputs.length; index++) {
			var item = outputs[index];
			var source = document.querySelector(item.getAttribute("source"));
			if (source) {
				if (item === e.target) {
					source.value = item.value;
					emit(source, "input");
					emit(source, "change");
				}

				if (source === e.target) {
					item.value = source.value;
				}
			}
		}
	}

	document.addEventListener("change", onChange);
	document.addEventListener("input", onChange);
})();

var modal = document.getElementById("subscribe");

// Get the button that opens the modal
var btn = document.getElementById("sub_btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function () {
	modal.style.display = "flex";
	modal.style.opacity = "1";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
	modal.style.display = "none";
	modal.style.opacity = "0";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
	if (event.target == modal) {
		modal.style.display = "none";
		modal.style.opacity = "0";
	}
};
