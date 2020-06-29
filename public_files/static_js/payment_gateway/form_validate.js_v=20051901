function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}

const urlParams = getUrlVars();

(function($) {
	$.validator.addMethod(
		"regex",
		function(value, element, regexp) {
			let regResult = false;
			// loop
			if (regexp === '') {
				regResult = true;
			} else {
				multiple_regex = regexp.split('###');

				for (i = 0; i < multiple_regex.length; i++) {
					inputregex = multiple_regex[i].replace('+','');
					inputregex = '^'+inputregex+'$';
					var re = new RegExp(inputregex);
					if(re.test(value)){
						regResult = true;
					}
				}
			}

			return this.optional(element) || regResult;
		},
		function(params, element) {
			return (typeof $(element).data('extra-message') !== 'undefined') ? $(element).data('extra-message') : 'Invalid Input';
		}
	);

	$.fn.validateForm = function(options = {}) {
		const formObject = $(this).first();

		if (!formObject.is('form')) {
			throw 'Element is not a form';
		}

		// Inject Amount from param if amount exists
		let amount = urlParams['amount'];
		let intregex = RegExp('^[0-9.]{1,8}$');
		if(!!amount && intregex.test(amount)){
			formObject.find('input[name="amount"]').val(amount);
		}

		const formId = formObject.attr('id');
		if (typeof formId === 'undefined') {
			throw 'Form doesn\'t have an id';
		}

		// Merging custom options with default options
		var opts = $.extend(true, {}, $.fn.validateForm.defaults, options);

		$('body').append('<div id="cd_' + formId + '" class="modal-box-container">' +
			'<div class="confirm-dialog">' +
			'<div class="cd-title">' + opts.text.cd_title + '</div>' +
			'<div>' + opts.text.cd_label + '</div>' +
			'<div class="cd-login-group">' +
			'<input class="cd-login" />' +
			'<div class="cd-login-error"></div>' +
			'</div>' +
			'<div class="cd-btn-group">' +
			'<button class="cd-btn-submit" type="button">' + opts.text.cd_btn_confirm + '</button>' +
			'<button class="cd-btn-cancel" type="button">' + opts.text.cd_btn_cancel + '</button>' +
			'</div>' +
			'</div>' +
			'</div>');

		let formLogin = '';
		let isLoginConfirmed = false;
		const modalBox = $('#cd_' + formId);
		const inputLogin = $('#cd_' + formId + ' .cd-login');
		const labelError = $('#cd_' + formId + ' .cd-login-error');
		const btnCancel = modalBox.find('.cd-btn-cancel');
		const btnSubmit = modalBox.find('.cd-btn-submit');

		btnSubmit.css('background-color', opts.buttonBgColor);
		btnSubmit.css('color', opts.buttonTextColor);

		// Bind cancel button click listener
		btnCancel.click(function() {
			formLogin = '';
			inputLogin.val('');
			labelError.text('');
			modalBox.css('display', 'none');
		});

		// Bind submit button click listener
		btnSubmit.click(function() {
			if (inputLogin.val() === formLogin) {
				isLoginConfirmed = true;
				formObject.submit();
			} else {
				labelError.text(opts.text.cd_mismatch_error);
			}
		});

		let formRules = {};
		let formMessages = {};

		// Generate the rules array.
		formObject.find(':input').each(function() {
			// Only set rules when the input has name attribute
			if (typeof $(this).attr('name') !== 'undefined') {
				var inputName = $(this).attr('name');
				formRules[inputName] = {};

				if ($(this).prop('required')) {
					formRules[inputName]['required'] = true;
					var input_type = $(this).attr('');
					if ($(this).attr('type') != 'hidden' && $(this).attr('type') != 'radio' && $(this).attr('type') != 'checkbox') {
						$(this).siblings('label').append('<sup class="sup-size">*</sup>');
					}
				}

				if (typeof $(this).data('regex') !== 'undefined') {
					if ($(this).data('regex') !== null) {
						formRules[inputName]['regex'] = $(this).data('regex');
					}
				}

				if (typeof $(this).data('message') !== 'undefined') {
					if ($(this).data('message') !== null) {
						formMessages[inputName] = {};
						formMessages[inputName]['required'] = $(this).data('message');
					}
				}

				if ($(this).attr('name') == 'confirm_email') {
					formRules[inputName]['equalTo'] = '#' + formId + ' input[name="email"]';
					formMessages[inputName]['equalTo'] = $(this).data('extra-message');
				}
			}
		});

		// Initialize the form validation.
		formObject.validate({
			rules: formRules,
			messages: formMessages,
			submitHandler: function(form) {
				if (isLoginConfirmed) {
					if (typeof opts.beforeSubmitValidator === 'function') {
						if (!opts.beforeSubmitValidator()) {
							return false;
						}
					}

					return form.submit();
				}

				if (typeof opts.beforeConfirmDialogValidator === 'function') {
					if (!opts.beforeConfirmDialogValidator()) {
						return false;
					}
				}
				modalBox.css('display', 'flex');
				formLogin = formObject.find('input[name=account_login]').val();
				inputLogin.focus();
			}
		});

	};

	$.fn.validateForm.defaults = {
		buttonBgColor: '#000',
		buttonTextColor: '#FFF',
		beforeConfirmDialogValidator: null,
		beforeSubmitValidator: null,
		text: {
			cd_title: 'Confirmation',
			cd_label: 'Please re-type your MT4 account number',
			cd_btn_confirm: 'Confirm',
			cd_btn_cancel: 'Cancel',
			cd_mismatch_error: 'Trading Account Not Matching.'
		}
	};
}(jQuery));