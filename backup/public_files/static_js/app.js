// Header Navigation Funciontality
var is_menu_hover = false;
var is_menu_btn_hover = false;

var special_country_list = new Array(
    "AT","BE","BG","HR","CY","CZ","DK",
    "EE","FI","FR","DE","GR","HU","IE",
    "IT","LV","LT","LU","MT","NL","PL",
    "PT","RO","SM","SK","SI","ES","SE",
    "GB","VA","UK","AU"
);
//

var telOnlyCountryList = ['al','at','by','be','bg','hr','cy','cz','dk','ee','fi','fr','ge','de','gr','hu','ie','it','kz','lv','lt','lu','mt','mc','nl','no','pl','pt','ro','ru','rs','sk','si','es','se','ch','tr','ua','gb','bh','eg','jo','kw','om','qa','sa','ae','ar','bo','br','cl','co','cr','ec','mx','pz','py','pe','uy','ve','ca','id','my','ph','vn','hk'];

/**** Additional JS ******/
$(function(){
    $('.std-la-form .selection-country').change(function(){
        var country = $(this).find('option:selected').data('name');
        $(this).parent().find('input[name="country_name"]').val(country);
        var form = $(this).parent().parent('form');
        if (form.find('select[name="company"] option:selected').val() == 1 && !special_country_list.includes(country.toUpperCase())) {
            form.find('select[name="company"]').val(6);
            alterForm_TinField();
        }
    });
});

$(function() {
    var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;

    if (width <= 1024) {
        $('nav-menu').empty();
    } else {
        $('.header-menu-trigger').click(function () {
            $(this).addClass('active');
            var menu_type = $(this).data('type') + '-menu';
            openDropdownMenu(menu_type);

            $('.nav-menu').unbind('hover');

            $('.nav-menu').hover(function () {
                is_menu_hover = true;
            }, function () {
                is_menu_hover = false;
                closeDropdownMenu(menu_type);
            });

        });


    }

    $('.nav-menu-mobile-section').click(function() {
        var sub_list = $(this).children('ul');
        var currentDisplay = sub_list.css('display');

        $('.nav-menu-mobile-section > ul').hide();

        if (currentDisplay == 'block') {
            sub_list.hide();
        } else {
            sub_list.show();
        }
    });


    $('.nav-menu-hamburger').click(function() {
        $('.nav-menu-mobile').toggle();
    });
});

function openDropdownMenu(type) {
    $('.nav-menu').show();
    $('.nav-menu').css("display", "block");

    var menus = document.getElementsByClassName('header-nav-menu');

    for (var i = 0; i < menus.length; i++) {
        menus[i].style.display = "none";

    }

    $('.nav-' + type).css("display", "block");

}

function closeDropdownMenu(type) {
    //$('.nav-menu').css("display", "none");
    $('.nav-menu').hide();
}

var itiList = {};

// Form Funcionality
$(function() {
    $('.send-verification-code-btn').click(function (e) {
        e.preventDefault();
        // var country = $(this).parent().parent().find(".select_with_country").children("option:selected");
        var formId = $(this).parent().parent().attr('id');
        var countryCode = $(this).parent().parent().find('input[name="country_code"]').val();
        var phone = $(this).parent().parent().find(".input_with_phone").first();
        var smscode = $(this).parent().parent().find(".sms_verif_code").first();
        var sendBtn = $(this);

        sendBtn.attr("disabled", true);

        phone.parent().find("#phone-error").remove();
        if (countryCode == "" || typeof countryCode === undefined) {
            phone.parent().append('<label id="phone-error" class="error" for="phone">Please select a country</label>');
            sendBtn.attr("disabled", false);
        } else if (!itiList[formId].isValidNumber()) {
            smscode.parent().parent().find('.form-tooltip').remove();
            phone.parent().append('<span class="form-tooltip active error">Invalid Phone Number</span>');
            // phone.parent().append('<label id="phone-error" class="error" for="phone">Phone Number Invalid</label>');
            sendBtn.attr("disabled", false);
        } else {
            let filteredPhoneCode = phone.val().replace(countryCode, '').replace('-', '').replace('(', '').replace(')', '').replace(/ /g, '');
            $.ajax({
                url: '/api/sendSMSCode',
                type: 'POST',
                data: {'countrycode': countryCode, 'phone': filteredPhoneCode},
                success: function (data) {
                    var response = JSON.parse(data);

                    if (response.response.status.toLowerCase() == 'success') {
                        smscode.parent().parent().find('.form-tooltip').remove();
                        smscode.parent().append('<span class="form-tooltip active success">SMS Code Sent</span>');
                        smscode.data('verified', '0');
                        let countdownSeconds = 60;
                        var countdown = setInterval(function(){
                            sendBtn.text('(' + countdownSeconds + ')');
                            countdownSeconds--;
                            if (countdownSeconds <= 0) {
                                clearInterval(countdown);

                                if (smscode.data('verified') === '0') {
                                    sendBtn.attr("disabled", false);
                                }
                                sendBtn.text('Send Code');
                            }
                        },1000);
                    } else {
                        sendBtn.attr("disabled", false);
                    }
                },
                error: function(data) {
                    sendBtn.attr("disabled", false);
                }
            });
        }
    });

    $('.sms_verif_code').keyup(function() {
        var smscode = $(this).parent().find(".sms_verif_code").first();
        if (smscode.val().length < 6) {
            return;
        }

        if (smscode.data('verified') === '1') {
            return;
        }

        // var country = $(this).parent().parent().find(".select_with_country").children("option:selected");
        var countryCode = $(this).parent().parent().find('input[name="country_code"]').val();
        var phone = $(this).parent().parent().find(".input_with_phone").first();
        var phoneContainer = $(this).parent().parent().find('.phone-field').first();
        var sendBtn = $(this).parent().parent().find(".send-verification-code-btn").first();

        smscode.attr('readonly', true);
        phone.parent().find("#phone-error").remove();
        let filteredPhoneCode = phone.val().replace(countryCode, '').replace('-', '').replace('(', '').replace(')', '').replace(/ /g, '');

        $.ajax({
            url: '/api/verifySMSCode',
            type: 'POST',
            data: {'countrycode': countryCode, 'phone': filteredPhoneCode, 'verify_code': smscode.val()},
            success: function (data) {
                var response = JSON.parse(data);
                if (response.response.status.toLowerCase() == 'success') {
                    smscode.addClass('border-valid');
                    smscode.attr('readonly', 'true');

                    smscode.parent().parent().find('.form-tooltip').remove();
                    smscode.parent().append('<span class="form-tooltip active success">Code Verified</span>');
                    smscode.data('verified', '1');
                    sendBtn.attr("disabled", true);
                    smscode.prop('readonly', true);
                    phoneContainer.append('<div style="width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 10; background-color: transparent; cursor: not-allowed;"></div>');

                } else {
                    smscode.parent().parent().find('.form-tooltip').remove();
                    smscode.parent().append('<span class="form-tooltip active error">Invalid Code</span>');
                    smscode.attr('readonly', false);
                }
            }
        });
    });

    // Add regex validation
    $.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        function(params, element) {
            return (typeof $(element).data('extra-message') !== 'undefined') ? $(element).data('extra-message') : 'Invalid Input';
        }
    );

    // Add phone validation
    $.validator.addMethod(
        "phone_format",
        function(value, element) {
            if ($.trim(value)) {
                let form_id = $(element).closest('form').attr('id');
                if (itiList[form_id].isValidNumber()) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        },
        function(params, element) {
            return 'Invalid Phone Number Format';
        }

    );

    // Initialize each form
    $('form').each(function() {
        var form_id = $(this).attr('id');
        var form = $(this);

        // Test new phone field
        if (form.hasClass('new')) {
            let input = document.querySelector('#' + form_id + ' input[name="phone_display"]');
            if (input !== null) {
                let telInputConfig = {
                    initialCountry: "auto",
                    nationalMode: false,
                    geoIpLookup: function(callback) {

                        var country_code = input.dataset.ip_country_code;

                        if (typeof country_code !== 'undefined') {
                            if (country_code != '') {
                                callback(country_code);
                            }
                        }

                    },
                    preferredCountries: [],
                    utilsScript: "/public_files/static_js/utils.js"
                }

                if (form_id == 'philippine_seminar_registration_form') {
                    telInputConfig['onlyCountries'] = ["ph"];
                }

                if (form_id == 'demo_competition_form_2019_08_13') {
                    telInputConfig['onlyCountries'] = telOnlyCountryList;
                }

                itiList[form_id] = window.intlTelInput(input, telInputConfig);

                var session_country = $('#' + form_id + ' select[name="country_name"] option:selected');
                if (session_country.val() != '') {
                    itiList[form_id].setCountry(session_country.data('country_iso_code'));
                }

                var country_code_value = $('#' + form_id + ' input[name="country_code"]').val();
                var country_code = input.dataset.ip_country_code;
                if (typeof country_code !== 'undefined') {
                    if (country_code != '') {
                        var countryData = itiList[form_id].getSelectedCountryData();
                        if (typeof countryData['iso2'] !== 'undefined') {
                            $('#' + form_id + ' select[name="country_name"]').val((countryData['iso2']).toUpperCase());
                            $('#' + form_id + ' input[name="country_code"]').val('+' + countryData['dialCode']);
                        }
                    }
                }

                if (country_code_value != '') {
                    itiList[form_id].setNumber($('#' + form_id + ' input[name="phone_display"]').val());
                }

                input.onfocus = function() {
                    if (input.value == '') {
                        var selectedCountry = itiList[form_id].getSelectedCountryData();
                        input.value = '+' + selectedCountry['dialCode'];
                    }
                }

                input.addEventListener("countrychange", function() {
                    var countryData = itiList[form_id].getSelectedCountryData();
                    if (typeof countryData['iso2'] !== 'undefined') {
                        $('#' + form_id + ' select[name="country_name"]').val((countryData['iso2']).toUpperCase());
                        $('#' + form_id + ' input[name="country_code"]').val('+' + countryData['dialCode']);

                        if ($('#' + form_id + ' select[name="company"] option:selected').val() == 1 && !special_country_list.includes(countryData['iso2'].toUpperCase())) {
                            $('#' + form_id + ' select[name="company"]').val(6);
                            alterForm_TinField();
                        }
                    }
                });

                if (form_id == 'philippine_seminar_registration_form') {
                    itiList[form_id].setCountry('ph');

                }

            }

            /*$('#' + form_id + ' .selection-country').change(function(event) {
                itiList[form_id].setCountry($(this).children("option:selected").data('country_iso_code'));
            });*/
        } else if (form.hasClass('old-new')) {
            let input = document.querySelector('#' + form_id + ' input[name="phone_display"]');
            if (input !== null) {
                itiList[form_id] = window.intlTelInput(input, {
                    initialCountry: "auto",
                    geoIpLookup: function(callback) {

                        var country_code = input.dataset.ip_country_code;

                        if (typeof country_code !== 'undefined') {
                            if (country_code != '') {
                                callback(country_code);
                            }
                        }

                    },
                    preferredCountries: [],
                    utilsScript: "/public_files/static_js/utils.js"
                });

                var session_country = $('#' + form_id + ' select[name="country_name"] option:selected');
                if (session_country.val() != '') {
                    itiList[form_id].setCountry(session_country.data('country_iso_code'));
                }

                var country_code_value = $('#' + form_id + ' input[name="country_code"]').val();
                var country_code = input.dataset.ip_country_code;
                if (typeof country_code !== 'undefined') {
                    if (country_code != '') {
                        var countryData = itiList[form_id].getSelectedCountryData();
                        if (typeof countryData['iso2'] !== 'undefined') {
                            //$('#' + form_id + ' select[name="country_name"]').val((countryData['iso2']).toUpperCase());
                            $('#' + form_id + ' input[name="country_code"]').val('+' + countryData['dialCode']);
                        }
                    }
                }


                if (country_code_value != '') {
                    itiList[form_id].setNumber(country_code_value + $('#' + form_id + ' input[name="phone_display"]').val());
                }

                input.addEventListener("countrychange", function() {
                    var countryData = itiList[form_id].getSelectedCountryData();
                    if (typeof countryData['iso2'] !== 'undefined') {
                        //$('#' + form_id + ' select[name="country_name"]').val((countryData['iso2']).toUpperCase());
                        $('#' + form_id + ' input[name="country_code"]').val('+' + countryData['dialCode']);
                    }
                });
            }

            $('#' + form_id + ' .selection-country').change(function(event) {
                itiList[form_id].setCountry($(this).children("option:selected").data('country_iso_code'));
            });
        }


        $(this).find('.selection-country').parent().find('input[name="country_name"]').val($(this).find('.selection-country').find('option:selected').data('name'));
        $(this).find('.selection-country').change(function() {
            var country = $(this).find('option:selected').data('name');
            $(this).parent().find('input[name="country_name"]').val(country);

            if (form_id == 'live_account_form') {
                if (form.find('select[name="company"] option:selected').val() == 1 && !special_country_list.includes(country)) {
                    form.find('select[name="company"]').val(6);
                }

            }
        });


        var formRules = {};
        var formMessages = {};
        // Generate the rules array.
        $(this).find(':input').each(function() {
            // Only set rules when the input has name attribute
            if (typeof $(this).attr('name') !== 'undefined') {
                var inputName = $(this).attr('name');
                formRules[inputName] = {};

                if ($(this).prop('required')) {
                    formRules[inputName]['required'] = true;
                    var input_type = $(this).attr('')
                    if ($(this).attr('type') != 'hidden' && $(this).attr('type') != 'radio' && $(this).attr('type') != 'checkbox') {
                        if (inputName === 'phone_display') {
                            $(this).parent().prev().append('<sup class="sup-size">*</sup>');
                        } else {
                            $(this).siblings('label').append('<sup class="sup-size">*</sup>');
                        }
                    }
                }

                if (typeof $(this).data('regex') !== 'undefined') {
                    if ($(this).data('regex') !== null) {
                        formRules[inputName]['regex'] = $(this).data('regex');
                    }
                }

                if (typeof $(this).data('message') !== 'undefined') {
                    if ($(this).data('regex') !== null) {
                        formMessages[inputName] = {};
                        formMessages[inputName]['required'] = $(this).data('message');
                    }
                }

                if ($(this).attr('name') == 'confirm_email') {
                    formRules[inputName]['equalTo'] = '#' + form_id + ' input[name="email"]';
                    formMessages[inputName]['equalTo'] = $(this).data('extra-message');
                }

                if (form.hasClass('new') && $(this).attr('name') == 'phone_display') {
                    formRules[inputName]['phone_format'] = true;
                }
            }
        });

        var formObject = $(this);
        // Initialize the form validation.
        $(this).validate({
            /*errorClass: "form-input-invalid",
            validClass: "valid",
	        highlight: function(element, errorClass, validClass) {
                $(element).removeClass('border-valid');
                $(element).addClass('border-error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('border-error');
                $(element).addClass('border-valid');
            },*/
            rules: formRules,
            messages: formMessages,
            submitHandler: function(form) {
                var loader_html = '<div class="form-loader-container"><img src="/public_files/images/common/icons/form-loading.GIF"/></div>';
                formObject.append(loader_html);
                var phoneDisplayField = formObject.find('input[name="phone_display"]');
                if (typeof phoneDisplayField !== 'undefined') {
                    let phoneNum = phoneDisplayField.val();
                    let countryCode = formObject.find('input[name="country_code"]').val();

                    formObject.find('input[name="phone"]').val(phoneNum.replace(countryCode, '').replace('-', '').replace('(', '').replace(')', ''));
                }
                form.submit();
            },
            errorPlacement: function(error, element) {
                if (element.attr("name") == "privacy") {
                    error.insertAfter(element.parent());
                } else if (element.attr('name') === 'file_id_front') {
                    error.insertAfter(element.parent().children().last());
                } else if (form.hasClass('new') && element.attr('name') == "phone_display") {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            }
        })
    });
});

function parseUrl(url) {
    var getUrl = "";
    getUrl = window.location.href;
    if (getUrl.includes('www.multibankfx.me')) {
        return url;
    } else {
        return '/~cms/mfx/v1' + url;
    }
}

// Company News
$(function() {
    var news_blocks = document.querySelectorAll('.article-block');

    for (var i = 0; i < news_blocks.length; i++) {
        var title = news_blocks[i].querySelector('.article-big-title');

        if (title.textContent == '') {
            news_blocks[i].style.display = 'none';
        }
    }
});



// Global Presence
/*
$(document).ready(function () {
    var global_presence_swiper = new Swiper('#home_global_presence .swiper-container', {
        navigation: {
            nextEl: '#home_global_presence .swiper-button-next',
            prevEl: '#home_global_presence .swiper-button-prev',
        },
        updateOnImagesReady: true,
        slidesPerView: 3,
        loop: true,
        breakpoints: {
            991: {
                slidesPerView: 1,
            },
        },
        on: {
            init: function () {
                home_global_toggle_card(this)
            },
            slideChangeTransitionStart: function () {
                home_global_toggle_card(this)
            },
        },
        autoplay: {
            delay: 5000
        },

    });

    function home_global_toggle_card(obj) {
        if ($(window).width() > 991) {
            $('#home_global_presence .width-30').removeClass('width-30');
            $('#home_global_presence .width-40').removeClass('width-40');
            obj.slides.eq(obj.activeIndex).addClass('width-30');
            obj.slides.eq(obj.activeIndex + 1).addClass('width-40');
            obj.slides.eq(obj.activeIndex + 2).addClass('width-30');
        } else {
            $('#home_global_presence .width-30').removeClass('width-30');
            $('#home_global_presence .width-40').removeClass('width-40');
        }
    }
});
*/

$('.bonus-page-tab').click(function(event){
    var tab = $(this).data('tab');

    $('.bonus-page-tab').removeClass('active');
    $(this).addClass('active');
    $('.bonus-page-pane').removeClass('active');
    $('#' + tab).addClass('active');
});

//Sidebar and Header Event
var isHeaderFixed = false;
var winHeight = 0;
$(function() {
    winHeight = window.innerHeight;
    toggleSideBar();

    $(window).scroll(function() {
        toggleSideBar();
        toggleHeader();
        toggleLPBtn();
    });

    $(window).resize(function() {
        winHeight = window.innerHeight;
    })

    $('.slidebar a').mouseover(function() {
        $(this).find('.text').show();
    });

    $('.slidebar a').mouseout(function () {
        $(this).find('.text').hide();
    });

    function toggleSideBar() {
        var scrollTop = $(window).scrollTop();
        if ( scrollTop >= winHeight && window.innerWidth >= 768) {
            $('.slidebar').show(200);
        } else if (scrollTop < winHeight && window.innerWidth >= 768) {
            $('.slidebar').hide(200);
        }
    }

    function toggleHeader() {
        var scrollTop = $(window).scrollTop();
        if ( scrollTop >= winHeight && !isHeaderFixed && window.innerWidth >= 1200) {
            $('.header').addClass('sticky');
            //$('.header-spacer').addClass('active');
            isHeaderFixed = true;
        } else if (scrollTop < winHeight && isHeaderFixed && window.innerWidth >= 1200) {
            $('.header').removeClass('sticky');
            //$('.header-spacer').removeClass('active');
            isHeaderFixed = false;
        }
    }

    function toggleLPBtn() {
        var scrollTop = $(window).scrollTop();
        if ( scrollTop >= winHeight && window.innerWidth >= 1200) {
            $('.bottom-bar').slideDown(300);
        } else if (scrollTop < winHeight && window.innerWidth >= 1200) {
            $('.bottom-bar').slideUp(300);
        }
    }
});

// Company News
$(function() {
    var page_year = getUrlVars()["page_year"];
    if (typeof page_year === 'undefined') {
        page_year = 1;
    }

    if (typeof numNewsPage !== 'undefined') {
        var paginationCode = '<li class="page-item';
        if (page_year == 1) {
            paginationCode += ' disabled';
        }
        paginationCode += '"><a class="page-link" href="/about/company-news?page_year=' + (page_year - 1) + '" tabindex="-1">Previous</a></li>';
        for (var i = 0; i < numNewsPage; i++) {
            paginationCode += '<li class="page-item';
            if ((i + 1) == page_year) {
                paginationCode += ' active';
            }

            paginationCode += '"><a class="page-link" href="/about/company-news?page_year=' + (i + 1) + '">' + (i + 1) + '</a></li>';
        }

        paginationCode += '<li class="page-item';
        if (page_year == numNewsPage) {
            paginationCode += ' disabled';
        }

        paginationCode += '"><a class="page-link" href="/about/company-news?page_year=2">Next</a></li>';
        $('.pagination').html(paginationCode);
    }
});


function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}


// Live Account
const uploadButton = document.querySelector('.browse-btn');

$(function() {
    if ($('#la_select_company option:selected').val() == '1' && $('#la_select_client_type option:selected').val() == '1') {
        $('.lei-input-container').removeClass('invisible');
        $('.lei-input-container').addClass('visible');
    } else {
        $('.lei-input-container').removeClass('visible');
        $('.lei-input-container').addClass('invisible');
    }
    
    if ($('#la_select_company').length) {
        alterForm_TinField();
    }
    
    //show or hide second holder document fields
    /*
    if($('#la_select_client_type').val() == 3) {
      jointAccountDocFields.showJointAccountDocFields();
      jointAccountDocFields.enableJointAccountDocFields();
   }else {
      jointAccountDocFields.disableJointAccountDocFields();     
      jointAccountDocFields.hideJointAccountDocFields();
   }
   */
   
   
    $('#la_select_company').change(function() {
        alterForm_TinField();
        
        if ($('#la_select_company option:selected').val() == '1' && $('#la_select_client_type option:selected').val() == '1') {
            $('.lei-input-container').removeClass('invisible');
            $('.lei-input-container').addClass('visible');
        } else {
            $('.lei-input-container').removeClass('visible');
            $('.lei-input-container').addClass('invisible');
        }
    });

    $('#la_select_client_type').change(function() {
        switchLayout();
    });

    $('.browse-btn').click(function(e) {
        var realInput = $(this).parent().parent().find('input[type="file"]');
        realInput.off('change');
        realInput.on('change', function() {
            var filePath = realInput.val();
            var fileSize = realInput[0].files[0].size / 1048576;

            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.doc|\.pdf|\.docx)$/i;
            $(this).parent().find('.file-upload-error').remove();

            if(!allowedExtensions.exec(filePath)){
                $(this).parent().append('<div class="text-danger file-upload-error">Invalid file format.<br/>.jpeg/.jpg/.png/.doc/.docx/.pdf only</div>');
                realInput.val('');
                return false;
            } else if (fileSize > 5) {
                $(this).parent().append('<div class="text-danger file-upload-error">File size exceed 5MB</div>');
                realInput.val('');
                return false;
            } else {
                const name = realInput.val().split(/\\|\//).pop();
                const truncated = name.length > 20
                    ? name.substr(name.length - 20)
                    : name;

                var fileInfo = $(this).parent().find('.file-info');
                fileInfo.text(truncated);
            }
        });
        realInput.click();
    });

    var ibNum = getUrlVars()["ibNum"];
    if (typeof ibNum !== 'undefined') {
        var type = ibNum.substring(0,2);
        var regulatorValue = 1;
        switch (type) {
            case '88':
                regulatorValue = 1;
                break;
            case '66':
                regulatorValue = 3;
                break;
            case '33':
                regulatorValue = 6;
                break;
        }

        $('.std-la-form select[name="company"]').val(regulatorValue);
    }
});


function alterForm_TinField() {
    var na = 'not available';
    var companyRequireTinNumber = new Array("1");   //we set 1 as string as html input return string
    var selectedCompany = $('#la_select_company option:selected').val();
    if(companyRequireTinNumber.indexOf(selectedCompany) >= 0) {
        $('.la-container-has_tin').removeClass("d-none");                       //we show the check box
        $('.std-la-form input[name=has_tin]').prop('required',true);                           //make it required
        $('.std-la-form input[name=tin_number]').prop('required',true);                        //together with the field
        if($('.std-la-form input[name=has_tin]:checked').val() == 1) {
            //yes has been selected, so let the user input or reshow what was submitted
            if($('.std-la-form input[name=tin_number]').val() == na) {
                $('.std-la-form input[name=tin_number]').val('');
            }
            $('.la-container-tin_number').removeClass("d-none");                //we show the field
        }else if($('.std-la-form input[name=has_tin]:checked').val() == 0){
            // no is selected, set "not available" and hide field
            $('.la-container-tin_number').addClass("d-none");                       //we hide the field tin_number
            $('.std-la-form input[name=tin_number]').val(na);                 //we set tin_number as "not available"

        }
    }else {
        //no need TIN
        $('.std-la-form input[name=has_tin]').prop('checked', false); //we uncheck has_tin
        $('.la-container-has_tin').addClass("d-none");                      //we hide the check box
        $('.std-la-form input[name=tin_number]').val('');             //we set tin_number as ""
        $('.la-container-tin_number').addClass("d-none");                   //we hide the field
        $('.std-la-form input[name=tin_number]').prop('required',false);                   //we set tin_number as not required
        $('.std-la-form input[name=has_tin]').prop('required',false);                    //we set has_tin as not required

    }
}


$('.std-la-form input[name=has_tin]').change(function(e) {
    alterForm_TinField();
});

function switchLayout() {
    var selectedClientType = $('#la_select_client_type option:selected').val();
    switch (selectedClientType) {
        case "1": // Coporate Account
            $('.la-label-name').html("Company Name<sup class=\"sup-size\">*</sup>");
            $('.la-field-name-2').val("");
            $('.la-container-name').removeClass("col-lg-6");
            $('.la-container-name-2').addClass("d-none");
            //jointAccountDocFields.disableJointAccountDocFields();     
            //jointAccountDocFields.hideJointAccountDocFields();

            break;
        case "3": // Joint Account
            $('.la-label-name').html("Name of 1st Individual\n<sup class=\"sup-size\">*</sup>");
            $('.la-container-name').addClass("col-lg-6");
            $('.la-container-name-2').removeClass("d-none");
            //jointAccountDocFields.showJointAccountDocFields();
            //jointAccountDocFields.enableJointAccountDocFields();

            break;
        case "2": // IC
        case "4": // IB
        default:
            $('.la-label-name').html("Name<sup class=\"sup-size\">*</sup>");
            $('.la-container-name').removeClass("col-lg-6");
            $('.la-container-name-2').addClass("d-none");
            $('.la-field-name-2').val("");
            //jointAccountDocFields.disableJointAccountDocFields();     
            //jointAccountDocFields.hideJointAccountDocFields();

            break;
    }
    
    if (selectedClientType == '1' && $('#la_select_company option:selected').val() == '1') {
        $('.lei-input-container').removeClass('invisible');
        $('.lei-input-container').addClass('visible');
    } else {
        $('.lei-input-container').removeClass('visible');
        $('.lei-input-container').addClass('invisible');
    }
}

var jointAccountDocFields = {
  listJointAccountDocFields: function() {
   return ['secondary_file_id_front', 'secondary_file_id_back', 'secondary_file_address_proof'];
  },
  disableJointAccountDocFields: function() {
    var fields = this.listJointAccountDocFields();
    for (var i = 0; i < fields.length; i++) { 
      $("input[name=" + fields[i] + "]").prop( "disabled", true);
    }
  },
  enableJointAccountDocFields: function () {
    var fields = this.listJointAccountDocFields();
    for (var i = 0; i < fields.length; i++) { 
      $("input[name=" + fields[i] + "]").removeAttr("disabled");
    }  
  },
  showJointAccountDocFields: function() {
    $(".secondary-file-upload-container").show();
  },
  hideJointAccountDocFields: function () {
    $(".secondary-file-upload-container").hide();
  }
};

// Regulations
//Regulations page start
$(document).ready(function () {
    if ($('#regulations-global-presence').length) {
        var regulations_swiper = new Swiper('#regulations-global-presence', {
            navigation: {
                nextEl: '.global-presence .swiper-button-next',
                prevEl: '.global-presence .swiper-button-prev',
            },
            pagination: {
                el: '.global-presence .swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    switch (index) {
                        case 0:
                            text = 'ASIC';
                            img_url = '/public_files/images/common/country/australia.png';
                            break;
                        case 1:
                            text = 'BaFin';
                            img_url = '/public_files/images/common/country/germany.png';
                            break;

                        case 2:
                            text = 'FMA';
                            img_url = '/public_files/images/common/country/austria.png';
                            break;
                        case 3:
                            text = 'CNMV';
                            img_url = '/public_files/images/common/country/spain.png';
                            break;
                        case 4:
                            text = 'FSC';
                            img_url = '/public_files/images/common/country/british_virgin_islands.png';
                            break;
                        case 5:
                            text = 'CIMA';
                            img_url = '/public_files/images/common/country/cayman_islands.png';
                            break;
                        case 6:
                            text = 'RAK';
                            img_url = '/public_files/images/common/country/uae.png';
                            break;
                        //case 7:text='TFG';img_url='/resource/newwebsite/v1_0/images/country/china.png';break;
                    }
                    return '<span class="' + className + '" data-img="' + img_url + '">' +
                        '<span>' + text + '</span>' +
                        '<img src="' + img_url + '">' +
                        '</span>';
                },
            },
            updateOnImagesReady: true,
            slidesPerView: 1,
            loop: true,
            breakpoints: {
                991: {
                    slidesPerView: 1,
                },
            },
            on: {
                init: function () {
                    regulations_toggle_card(this)
                },
                slideChangeTransitionStart: function () {
                    regulations_toggle_card(this)
                },
            },
        });


        $(window).resize(function () {
            regulations_swiper_next();
        })
        regulations_swiper_next()

        function regulations_swiper_next() {
            var swiper_next = $('.regulations-bg .swiper-button-next');
            var swiper_prev = $('.regulations-bg .swiper-button-prev');
            var swiper_container_width = $('#regulations-global-presence').width();
            var size = ($(window).width() - swiper_container_width - (swiper_next.width() * 2)) / 2;
            if ($(window).width() < 767) {
                size = 50;
            }
            swiper_next.css({
                right: size - 40 + 'px'
            })
            swiper_prev.css({
                left: size - 40 + 'px'
            })
        }

        function regulations_toggle_card(obj) {
            var this_slide = obj.slides.eq(obj.activeIndex);
            var img_src = this_slide.attr('data-img');
            $('.global-presence.regulations-bg').css({
                backgroundImage: 'url(' + img_src + ')'
            })
        }
    }
});

// Platform - Download Center
$(function() {
    $('.platform-selector').click(function() {
        var tab_id = $(this).data('tab');
        $('.tab-platform').removeClass('show').removeClass('active');
        setTimeout(function() {
            $('.tab-platform').removeClass('active');
            $('#' + tab_id).addClass('active');
        }, 150)
        setTimeout(function() {
            $('#' + tab_id).addClass('show');
        }, 300)
        $('.platform-selector-container').removeClass('active');
        $(this).parent().addClass('active');
    });
});

function slider_login() {
    var slides_li_height = $('#swiper-container-1').height();
    if ($('.login_Block').length > 0) {
        var window_width = $(window).width();
        var right_size = window_width * 0.1;
        var top_size = slides_li_height * 0.1 + $('.nav-container nav').height();
        if (window_width >= 1400) {
            right_size = (window_width - 1300) / 2;
        } else if (window_width >= 1150) {
            right_size = (window_width - 1150) / 2;
        } else if (window_width >= 1000) {
            right_size = 20;
        }

        $('.home_page .login_Block').css({
            right: right_size
        }).fadeIn();
    }
}

// Home Banner
function slider_login() {
    var slides_li_height = $('#swiper-container-1').height();
    if ($('.login_Block').length > 0) {
        var window_width = $(window).width();
        var right_size = window_width * 0.1;
        var top_size = slides_li_height * 0.1 + $('.nav-container nav').height();
        if (window_width >= 1400) {
            right_size = (window_width - 1300) / 2;
        } else if (window_width >= 1150) {
            right_size = (window_width - 1150) / 2;
        } else if (window_width >= 1000) {
            right_size = 20;
        }

        $('.home_page .login_Block').css({
            right: right_size
        }).fadeIn();
    }
}

$(function() {
    slider_login()
    $(window).resize(function () {
        slider_login()
    })

    $('#login_Block_Modal').on('hidden.bs.modal', function (e) {
        var login_obj = $('#login_Block_Modal .login_Block');
        login_obj.remove();
        $('body').append(login_obj);
    });
    $('#login_Block_Modal').on('show.bs.modal', function (e) {
        var login_obj = $('.login_Block');
        login_obj.remove();
        $('#login_Block_Modal .modal-body').append(login_obj);
    });

    $(document).on('click', '.login_Block .title span', function () {
        var form_obj = $('.' + $(this).attr('data-name'));

        if ($(this).attr('data-name') == 'long-form-block') {
            $('.socialMedia-block .media_action_name').html('LOGIN WITH');
        } else {
            $('.socialMedia-block .media_action_name').html('REGISTER WITH');
        }

        $(this).addClass('active')
            .siblings().removeClass('active');
        form_obj.addClass('active')
            .siblings().removeClass('active');
        slider_login()
    })
});

/***  Where to go ***/
/* definition of default label */

if(typeof whereToGoItemLabel === 'undefined') {
    //the language specific language object is not loaded from static_js/lang_data/, lets use the English labels below
    var whereToGoItemLabel = {
        //attributes
        ic_our_milestones_label: 'Our Milestones',
        ic_our_regulations_label: 'Our Regulations',
        ic_security_of_funds_label: 'Security of Funds',
        ic_why_multibank_label: 'Why Multibank',
        ic_accounts_funding_label: 'Accounts and Funding',
        ic_bonus_programs_label: 'Bonus Programs',
        ic_bonus_programs_for_ibs_label: 'Bonus Programs for IBs',
        ic_Bonus_Programs_for_Individual_Clients_label: 'Bonus Programs for Individual Clients',
        ic_compare_our_trading_platforms_label: 'Compare our Trading Platforms',
        ic_download_mt4_label: 'Download MT4',
        ic_our_products_label: 'Our Products',
        ic_trading_tools_label: 'Trading Tools',
        ic_partnership_programs_label: 'Partnership Programs',
        ic_become_an_ib_label: 'Become an IB',
        ic_live_chat_support_label: 'Live Chat Support',
        ic_mymultibank_account_panel_label: 'MyMultiBank Account Panel',
        ic_Call_Our_24_7_Hotline_label: 'Call Our 24/5 Hotline',
        ic_forex_spreads_label: 'View Forex Spreads',
        ic_global_offices_label: 'Our Global Offices',
        ic_awards_label: 'Our Awards'
    };

}

/* definition of all icons */
var whereToGoItem = {
    //attributes
    ic_our_milestones: '<a href="/about/milestones"><span class="ico-ic_our_milestones"> </span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_our_milestones_label + '</div></a>',
    ic_our_regulations: '<a href="/about/regulations"><span class="ico-ic_our_regulations"><!-- --></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_our_regulations_label + '</div></a>',
    ic_security_of_funds: '<a href="/about/security-of-funds"><span class="ico-ic_security_of_funds"><!-- --></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_security_of_funds_label + '</div></a>',
    ic_why_multibank: '<a href="/about/why-multibank-group"><span class="ico-ic_why_multibank"><!-- --></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_why_multibank_label + '</div></a>',
    ic_accounts_funding: '<a href="/account"><span class="ico-ic_accounts_funding"><!-- --></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_accounts_funding_label + '</div></a>',
    ic_bonus_programs: '<a href="/account/bonus"><span class="ico-ic_bonus_programs"><!-- --></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_bonus_programs_label + '</div></a>',
    ic_bonus_programs_for_ibs: '<a href="/account/bonus"><span class="ico-ic_bonus_programs_for_ibs"></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_bonus_programs_for_ibs_label + '</div></a>',
    ic_Bonus_Programs_for_Individual_Clients: '<a href="/account/bonus"><span class="ico-ic_Bonus_Programs_for_Individual_Clients"></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_Bonus_Programs_for_Individual_Clients_label + '</div></a>',
    ic_compare_our_trading_platforms: '<a href="/platforms/compare-platforms"><span class="ico-ic_compare_our_trading_platforms"></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_compare_our_trading_platforms_label + '</div></a>',
    ic_download_mt4: '<a href="/platforms/download-center"><span class="ico-ic_download_mt4"><!-- --></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_download_mt4_label + '</div></a>',
    ic_our_products: '<a href="/products"><span class="ico-ic_our_products"><!-- --></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_our_products_label + '</div></a>',
    ic_trading_tools: '<a href="/tools"><span class="ico-ic_trading_tools"><!-- --></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_trading_tools_label + '</div></a>',
    ic_partnership_programs: '<a href="/partnership"><span class="ico-ic_partnership_programs"><!-- --></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_partnership_programs_label + '</div></a>',
    ic_become_an_ib: '<a href="/partnership/introducing-brokers#introducing-brokers-form"><span class="ico-ic_become_an_ib"><!-- --></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_become_an_ib_label + '</div></a>',
    ic_live_chat_support: '<a href="/#" onclick="LC_API.open_chat_window();return false;"><span class="ico-ic_live_chat_support"><!-- --></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_live_chat_support_label + '</div></a>',
    ic_mymultibank_account_panel: '<a href="https://my.multibankfx.com" target="_blank"><span class="ico-ic_mymultibank_account_panel"></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_mymultibank_account_panel_label + '</div></a>',
    ic_Call_Our_24_7_Hotline: '<a href="/contact"><span class="ico-ic_Call_Our_24_7_Hotline"></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_Call_Our_24_7_Hotline_label + '</div></a>',
    ic_forex_spreads: '<a href="/products/forex"><span class="ico-ic_forex_spreads"></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_forex_spreads_label + '</div></a>',
    ic_global_offices: '<a href="/about/global-presence"><span class="ico-ic_global_offices"></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_global_offices_label + '</div></a>',
    ic_awards: '<a href="/about/awards"><span class="ico-ic_awards"></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_awards_label + '</div></a>',
    //method
    injectIcons: function (cssSelector_, icons_) {
        /**
         * Insert list of Where to go icons in ul selected by cssSelector_
         * The selected tag should be an ul
         */
        var list = '';
        var attrName = '';
        $(cssSelector_).hide();
        for(i = 0; i < icons_.length; i++) {
            attrName = icons_[i];
            if(this.hasOwnProperty(attrName)) {
                list += '<li>'+ this[attrName] +'</li>';
            }
        }
        $(cssSelector_).html(list);
        $(cssSelector_).show();
    }
};
/*** End Where to go ***/

/* Footer Contact Form SMS Code and Send SMS styling */
$(function() {
    $('#call_back_footer_form, #contact_us_form, #career_apply_job').find('.send-code-container').removeClass('col-md-2').addClass('col-md-6');
    $('#call_back_footer_form, #contact_us_form, #career_apply_job').find('.sms-code-container').removeClass('col-md-4').addClass('col-md-6');
    $('#call_back_footer_form .cb-partnership > label , #contact_us_form .cb-partnership > label').remove();
    $('#contact_us_form .cb-partership input').first().attr('checked', 'checked');
    $('#call_back_footer_form .cb-partnership label , #contact_us_form .cb-partnership label').addClass('mb-0 ml-1');

    $('#career_apply_job .send-verification-code-btn').css('width', '100%');
});

/* End Footer Contact Form styling */

/* Withdrawal Page */
$(function() {
    var validator = $('#withdrawal_selection_form').validate();
    if (validator != null) {
        validator.destroy();

        var exchange = ["neteller", "skrill", "fasapay", "bank_transfer", "credit_card", "paytrust", "perfectmoney"];
        var multibankfx = ["neteller", "skrill", "bank_transfer","credit_card", "paytrust", "perfectmoney", "fxbit", "globepay", "thunderxpay"];
        var clearing = ["neteller", "skrill", "bank_transfer", "credit_card", "paytrust", "perfectmoney", "fxbit"];
        
        if (document.documentElement.lang === 'vn') {
            clearing.push('ngan_luong');
            multibankfx.push("ngan_luong");
        }
        
        // var exchange = ["neteller", "skrill", "fasapay", "bank_transfer", "credit_card", "paytrust", "perfectmoney","help_2_pay"];
        // var multibankfx = ["neteller", "skrill", "bank_transfer","credit_card", "paytrust", "perfectmoney","help_2_pay", "fxbit"];
        // var clearing = ["neteller", "skrill", "bank_transfer", "credit_card", "paytrust", "perfectmoney","help_2_pay", "fxbit"];
        var list;

        var r = getUrlVars()["r"];
        var gateway = getUrlVars()["gateway"];

        switch (r) {
            case "1":
                list = exchange;
                break;
            case "3":
                list = multibankfx;
                break;
            case "6":
                list = clearing;
                break;
            default:
                list = exchange;
        }

        $('.payment_method option').each(function() {
            if (list.indexOf($(this).data('method')) == -1) {
                $(this).remove();
            }
        });

        $('.form-icon').each(function() {
            if (list.indexOf($(this).data('method')) == -1) {
                $(this).remove();
            }
        })

        $('#withdrawal_selection_form .deposit_table td').click(function () {
            $('#withdrawal_selection_form .deposit_table td').each(function () {
                $(this).removeClass('active');
            });
            $(this).addClass('active');
            $(this).find('input').prop('checked', true);
            update_amount_value($(this).find('input').val())
        });

        $('.withdrawal-form-modal .modal-bg').click(function() {
            closeWithdrawalForm();
        });

        $('#withdrawal_selection_form .deposit_amount_value').change(function () {
            update_amount_value($(this).val())
            return false;
        })

        $('#withdrawal_selection_form .deposit_submit').click(function() {
            var withdrawalMethod = $('.payment_method option:selected').val();
            var amount = $('.deposit_amount_value').val();
            var currency = $('.currency_type option:selected').val();

            openWithdrawalForm(withdrawalMethod, amount, currency);

        });


    }
});

function openWithdrawalForm(withdrawalMethod, amount, currency) {
    $('.withdrawal-form-modal').addClass('show');
    $('.withdrawal-form-modal').show();

    $('#withdrawal_' + withdrawalMethod + '_form').removeClass('d-none');
    $('body').css('overflow', 'hidden');
}

function closeWithdrawalForm() {
    $('.withdrawal-form-modal').removeClass('show');
    $('.withdrawal-form-modal').hide();
    $('.withdrawal-form-modal form').addClass('d-none');
    $('body').css('overflow', 'initial');
}

function update_amount_value(value) {
    $('.deposit_amount_value').val(value);
    $('.payment_form').find('input[name="amount"]').val(value);
    $('.deposit_amount_value_text').html(value);
}


function openRedirectionOption() {
    $('.paytrust-modalbox-container').css("display", "block");
}

function closeModalBox() {
    $('.paytrust-modalbox-container').css("display", "none");
}

function toggleWMGModal(index) {
    $('#wmg_modal_box_' + index).show();
}

function closeWMGModal(index) {
    $('#wmg_modal_box_' + index).hide();
}
/*
function deleteMktCookie(name_, domain_, path_) {

	//document.cookie = name_+"=;domain="+domain_+";path="+path_+";expires=Thu, 01 Jan 1970 00:00:00 GMT";
}
*/


$(document).ready(function () {

    if ($('#about-page-awards').length) {
        new Swiper('#about-page-awards', {
            navigation: {
                nextEl: '#about-page-awards .swiper-button-next',
                prevEl: '#about-page-awards .swiper-button-prev',
            },
            autoplay:{delay: 5000, },
            updateOnImagesReady: true,
            slidesPerView: 7,
            spaceBetween: 20,
            grabCursor: true,
            loop: true,
            breakpoints: {
                991: {
                    slidesPerView: 1,
                },
            },
            on: {
                init: function () {
                    about_toggle_card_awards(this)
                },
                slideChangeTransitionStart: function () {
                    about_toggle_card_awards(this)
                },
            },
            pagination: {
                el: '#about-page-awards .swiper-pagination',
                type: 'bullets',
            },
        });
    }

    function about_toggle_card_awards(obj) {
        if ($(window).width() > 991) {
            $('#about-page-awards .width-30').removeClass('width-30');
            $('#about-page-awards .width-40').removeClass('width-40');
            obj.slides.eq(obj.activeIndex + 3).addClass('width-40');
            for (var i = 0; i < obj.slides.length; i++) {
                if (i != obj.activeIndex + 3) {
                    obj.slides.eq(i).addClass('width-30');
                }
            }
        } else {
            $('#about-page-awards .width-30').removeClass('width-30');
            $('#about-page-awards .width-40').removeClass('width-40');
        }
    }
})

$(function(){
        if(document.getElementById('leaderboard')){
            let leaderboard_display_time = new Date('2020-01-05T22:00:00Z').getTime();
            let now = new Date().getTime();
            if(now >= leaderboard_display_time){
                $('#leaderboard').show();
            }
            else{
                $('#leaderboard').hide();
            }
        }
    });

$(document).ready(function(){

    $(function(){
        new Swiper('#swiper-container-awards1',{
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
      
        loop: true,
        autoplay: {
            delay: 50000
        },
        updateOnImagesReady: true,
        paginationClickable: true,
        slidesPerView:7,
        spaceBetween: 30,
        centeredSlides: true,
        autoplayDisableOnInteraction: false,
        grabCursor: true,
        loop: true,
        breakpoints: {
            991: {
                slidesPerView: 1,
            },
        },     

    }
        )
    });


    $(function(){
        new Swiper('#swiper-container-awards2',{
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
      
        loop: true,
        autoplay: {
            delay: 50000
        },
        updateOnImagesReady: true,
        paginationClickable: true,
        slidesPerView:7,
        spaceBetween: 30,
        centeredSlides: true,
        autoplayDisableOnInteraction: false,
        grabCursor: true,
        loop: true,
        breakpoints: {
            991: {
                slidesPerView: 1,
            },
        },     

    }
        )
    })

})
    