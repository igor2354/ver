/* Выпадающее меню Каталог в шапке */

document.addEventListener("DOMContentLoaded", function () {
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
});

function dropDownCatalog() {
	document.getElementById("Dropdown").classList.toggle("show");
}

if (document.documentElement.clientWidth < 960) {
	function myFunction() {
		var element = document.getElementById("search_wrapper");
		element.classList.toggle("down");
	}
	window.onclick = function (event) {
		element.classList.toggle("down");
	};
}

if (document.documentElement.clientWidth < 960) {
	var gallery = document.getElementById("gallery");
	var favorite = document.getElementById("favorite");
	if (gallery != null && favorite != null) {
		gallery.append(favorite);
	}
}

$(document).ready(function () {
	$(".fullmenu").click(function () {
		$(".overlay").toggleClass("opens");
		$(this).toggleClass("btn-open");
		$("body").toggleClass("hidden");
	});

	$(document).mouseup(function (e) {
		if (!$(".dropdown-content").is(e.target) && $(".dropdown-content").has(e.target).length === 0) {
			$(".dropdown-content").removeClass("show");
		}
	});

	$(".overlay").on("click", function () {
		$(".overlay").toggleClass("opens");
		$(".fullmenu").toggleClass("btn-open");
		$("body").toggleClass("hidden");
		open = false;
	});

	let match = [window.matchMedia("(max-width: 880px)")];

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

	/* Вкл/Выкл бегущей строки (true / false) */
	var enableS = true;

	if (enableS === true) {
		$(".runline-wrapper").marquee({
			duration: 30000,
			pauseOnHover: true,
			startVisible: true,
			gap: 40,
			delayBeforeStart: 0,
			direction: "left",
			duplicated: true,
		});
	}

	$("select").niceSelect();
});

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
