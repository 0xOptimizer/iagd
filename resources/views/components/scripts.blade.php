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
});
</script>