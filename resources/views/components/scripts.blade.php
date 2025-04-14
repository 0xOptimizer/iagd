<script>
function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}
function getCookie(name) {
    const nameEQ = name + "=";
    const cookies = document.cookie.split(';');
    
    for(let i = 0; i < cookies.length; i++) {
        let cookie = cookies[i];
        
        // Remove leading spaces if any
        while (cookie.charAt(0) === ' ') {
            cookie = cookie.substring(1, cookie.length);
        }
        
        // Check if the cookie matches the desired name
        if (cookie.indexOf(nameEQ) === 0) {
            return cookie.substring(nameEQ.length, cookie.length);
        }
    }
    
    return null;  // Return null if cookie is not found
}
/**
 * Sweet alert confirmation template
 * @returns {any}
 */
function sweatAlertConfirmation(messageText,messageIcon,messageBtnText,messageBtnStyle,messageCancelStyle) {
    return Swal.fire({
        text: `${messageText}`,
        icon: `${messageIcon}`,
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: `${messageBtnText}`,
        focusConfirm: true,
        cancelButtonText: `<span class="mdi mdi-cancel"></span> Cancel`,
        customClass: {
            confirmButton: `${messageBtnStyle}`,
            cancelButton: `${messageCancelStyle}`,
        },
    });
}

/**
 * The function `sweetAlertStatusMessage` displays a SweetAlert popup with a custom message and
 * icon.
 * @param {any} messageText
 * @param {any} messageIcon
 * @returns {any}
 */
function sweetAlertStatusMessage(messageText, messageIcon) {
    return Swal.fire({
        text: `${messageText}`,
        icon: `${messageIcon}`,
        heightAuto: false,
        buttonsStyling: false,
        customClass: {
            confirmButton: "btn btn-primary me-2",
        },
        confirmButtonText: `Okay`,
    });
}
function animateShine(selector, duration = 400, delay = 0) {
    setTimeout(function () {
        // Calculate dimensions and offset of the target element
        let targetElement = $(selector);
        let width = targetElement.outerWidth();
        let height = targetElement.outerHeight();
        let offset = targetElement.offset();

        // Calculate the diagonal length of the target element
        let diagonalLength = Math.sqrt(width * width + height * height);

        // Normalize the duration based on the diagonal length
        let normalizedDuration = (duration * diagonalLength) / (width + height);

        // Make the target element's position relative
        targetElement.css("position", "relative");

        // Create a wrapper element and set its style
        let shineWrapper = $("<div>")
            .css({
                position: "absolute",
                top: 0,
                left: 0,
                overflow: "hidden",
                width: width,
                height: height,
                pointerEvents: "none",
            })
            .appendTo(targetElement);

        let shine = $("<div>")
            .css({
                position: "absolute",
                top: -diagonalLength / 2, // Adjust top position based on diagonal length
                left: -diagonalLength, // Adjust left position to ensure off-screen start
                width: diagonalLength * 2, // Adjust width based on the diagonal length
                height: diagonalLength, // Adjust height based on the diagonal length
                background:
                    "linear-gradient(225deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0) 100%)",
                transform: "rotate(45deg)",
                pointerEvents: "none",
            })
            .appendTo(shineWrapper);

        shine.animate(
            {
                left: diagonalLength, // Adjust left position for the animation based on diagonal length
            },
            normalizedDuration,
            function () {
                shine.remove();
                shineWrapper.remove();
            }
        );
    }, delay);
}
const responseMap = {
    cat: [
        "That's a cute cat!",
        "Aww, such a fluffy feline!",
        "Look at this adorable cat!",
        "This little furball is precious!",
        "A majestic feline appears!"
    ],
    dog: [
        "What a good boy!",
        "Such a loyal companion!",
        "Look at this happy pupper!",
        "A wagging tail means a happy heart!",
        "A playful doggo joins the fun!"
    ],
    bird: [
        "A beautiful little bird!",
        "Chirp chirp! What a cutie!",
        "Feathers so vibrant!",
        "Look at this singing wonder!",
        "A tiny flyer is here!"
    ],
    rabbit: [
        "A fluffy bunny hops in!",
        "Such soft ears!",
        "Bouncy and cute!",
        "A little hopper joins the fun!",
        "This rabbit is just too adorable!"
    ],
    fish: [
        "A shimmering swimmer!",
        "Look at those dazzling scales!",
        "A graceful fish glides by!",
        "Swimming through with elegance!",
        "Such a vibrant aquatic friend!"
    ],
    reptile: [
        "A scaly friend appears!",
        "Look at this cool reptile!",
        "Slithery or scaly, still adorable!",
        "Such a unique little creature!",
        "A reptilian beauty joins in!"
    ],
    rodent: [
        "A tiny ball of energy!",
        "Look at this adorable rodent!",
        "This little critter is full of life!",
        "Such a curious little creature!",
        "Whiskers and cuteness overload!"
    ],
    mythical: [
        "A rare and magical creature!",
        "A legendary being appears!",
        "Mystical and majestic!",
        "A creature of pure wonder!",
        "A fantasy friend has arrived!"
    ],
    default: [
        "Such a wonderful creature!",
        "A truly unique companion!",
        "Nature’s beauty in motion!",
        "What an amazing little friend!",
        "A special guest appears!"
    ]
};

function getRandomResponse(species) {
    let responses = responseMap[species] || responseMap.default;
    return responses[Math.floor(Math.random() * responses.length)];
}

(function ($) {
    $.fn.floatingText = function (options) {
        let settings = $.extend({
            text: "Floating Text",
            color: "#fff",
            backgroundColor: "rgba(0, 0, 0, 0.7)",
            fontSize: "20px",
            duration: 2000,
            floatDistance: 50
        }, typeof options === "string" ? { text: options } : options);

        return this.each(function () {
            let $parent = $(this);
            let parentOffset = $parent.offset();
            let parentWidth = $parent.outerWidth();
            let parentHeight = $parent.outerHeight();

            let randomX = Math.random() * (parentWidth - 50); 
            let randomY = Math.random() * (parentHeight - 20); 

            let $text = $("<div>", {
                text: settings.text,
                css: {
                    position: "absolute",
                    left: parentOffset.left + randomX,
                    top: parentOffset.top + randomY,
                    color: settings.color,
                    background: settings.backgroundColor,
                    padding: "5px 10px",
                    borderRadius: "5px",
                    fontSize: settings.fontSize,
                    fontWeight: "bold",
                    whiteSpace: "nowrap",
                    zIndex: 9999,
                    opacity: 1,
                    transition: `transform ${settings.duration / 1000}s ease-out, opacity ${settings.duration / 1000}s ease-out`
                }
            }).appendTo("body");

            requestAnimationFrame(() => {
                $text.css({ transform: `translateY(-${settings.floatDistance}px)`, opacity: 0 });
            });

            setTimeout(() => $text.remove(), settings.duration);
        });
    };
}(jQuery));
$(document).ready(function() {
    $('body').on('show.bs.modal', '.modal', function () { // when the modal begins opening
        $('.blur-overlay').show();
		$('.triangle-left').animate({
			top: 0,
			left: 0
		}, 250, 'linear');
		$('.triangle-right').animate({
			bottom: 0,
			right: 0
		}, 250, 'linear');
    });

    $('body').on('shown.bs.modal', '.modal', function () { // after the animation of opening ends
        const _this = this;
        const input = $(_this).find('input').first();

        if (input.length) {
            input.focus();
        }
    });

    $('body').on('hide.bs.modal', '.modal', function (e) { // when the modal begins closing
		$('.blur-overlay').hide();
		$('.triangle-left').animate({
			top: -62.5,
			left: -62.5
		}, 125, 'linear');
		$('.triangle-right').animate({
			bottom: -62.5,
			right: -62.5
		}, 125, 'linear');
    });

    $('body').on('click', '.switchable-tabs', function() {
		let group = $(this).data('group');
		$('.switchable-tabs').addClass('tewi-tab-hoverable');
		$('.switchable-tabs').removeClass('tewi-tab-active');
		$(this).addClass('tewi-tab-active');
		$(this).removeClass('tewi-tab-hoverable');
		$('.container-groups').hide();
		$('.container-groups[data-group=' + group + ']').show();
	});

    $('body').on('click', '.group-navigate-btn', function() {
        const group = $(this).data('group');
        const $current = $('.group-container:visible');
        const $next = $(`.group-container[data-group="${group}"]`);

        if (group == 'main') {
            $current.addClass('animate__animated animate__fadeOutRight');

            $current.one('animationend', function() {
                $current.hide().removeClass('animate__animated animate__fadeOutRight');
                $(window).scrollTop(0);
                $next.show().addClass('animate__animated animate__fadeInLeft');
                $next.one('animationend', function() {
                    $next.removeClass('animate__animated animate__fadeInLeft');
                });
            });
        } else {
            $current.addClass('animate__animated animate__fadeOutLeft');

            $current.one('animationend', function() {
                $current.hide().removeClass('animate__animated animate__fadeOutLeft');
                $(window).scrollTop(0);
                $next.show().addClass('animate__animated animate__fadeInRight');
                $next.one('animationend', function() {
                    $next.removeClass('animate__animated animate__fadeInRight');
                });
            });
        }
    });

    $('body').on('click', '.btn', function(e) {
        const $btn = $(this);
        const ripple = $('<span class="ripple"></span>');

        const offset = $btn.offset();
        const x = e.pageX - offset.left;
        const y = e.pageY - offset.top;
        const diameter = Math.max($btn.outerWidth(), $btn.outerHeight());
        const radius = diameter / 2;

        ripple.css({
            width: diameter,
            height: diameter,
            left: x - radius,
            top: y - radius
        });

        $btn.append(ripple);
        
        const checkVisibility = () => {
            if (!$btn.is(':visible')) {
                ripple.remove();
            } else {
                requestAnimationFrame(checkVisibility);
            }
        };
        
        requestAnimationFrame(checkVisibility);

        ripple.on('animationend webkitAnimationEnd', function() {
            ripple.remove();
        });
    });

    $('body').on('click', '.card-interactable', function() {
        animateShine($(this));
    });

    // $('body').on('click', '.input-interactable', function() {
    //     let parent = $(this).parent('.form-floating');
    //     animateShine(parent);
    // });

    $('body').on('click', '.offcanvas-nav-apps-btn', function() {
        $('#offcanvas-nav-apps').offcanvas('show');
    });
});
</script>