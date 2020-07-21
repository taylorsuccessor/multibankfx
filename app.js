var is_menu_hover = !1,
    is_menu_btn_hover = !1,
    special_country_list = new Array("AT", "BE", "BG", "HR", "CY", "CZ", "DK", "EE", "FI", "FR", "DE", "GR", "HU", "IE", "IT", "LV", "LT", "LU", "MT", "NL", "PL", "PT", "RO", "SM", "SK", "SI", "ES", "SE", "GB", "VA", "UK", "AU"),
    telOnlyCountryList = [
        "al",
        "at",
        "by",
        "be",
        "bg",
        "hr",
        "cy",
        "cz",
        "dk",
        "ee",
        "fi",
        "fr",
        "ge",
        "de",
        "gr",
        "hu",
        "ie",
        "it",
        "kz",
        "lv",
        "lt",
        "lu",
        "mt",
        "mc",
        "nl",
        "no",
        "pl",
        "pt",
        "ro",
        "ru",
        "rs",
        "sk",
        "si",
        "es",
        "se",
        "ch",
        "tr",
        "ua",
        "gb",
        "bh",
        "eg",
        "jo",
        "kw",
        "om",
        "qa",
        "sa",
        "ae",
        "ar",
        "bo",
        "br",
        "cl",
        "co",
        "cr",
        "ec",
        "mx",
        "pz",
        "py",
        "pe",
        "uy",
        "ve",
        "ca",
        "id",
        "my",
        "ph",
        "vn",
        "hk",
    ];
function openDropdownMenu(e) {
    $(".nav-menu").show();
    for (var a = document.getElementsByClassName("header-nav-menu"), n = 0; n < a.length; n++) a[n].style.display = "none";
    $(".nav-" + e).css("display", "block");
}
function closeDropdownMenu(e) {
    $(".nav-menu").hide();
}
$(function () {
    $(".std-la-form .selection-country").change(function () {
        var e = $(this).find("option:selected").data("name");
        $(this).parent().find('input[name="country_name"]').val(e);
        var a = $(this).parent().parent("form");
        1 != a.find('select[name="company"] option:selected').val() || special_country_list.includes(e.toUpperCase()) || (a.find('select[name="company"]').val(6), alterForm_TinField());
    });
}),
    $(function () {
        (window.innerWidth > 0 ? window.innerWidth : screen.width) <= 1024
            ? $("nav-menu").empty()
            : $(".header-menu-trigger").click(function () {
                  $(this).addClass("active");
                  var e = $(this).data("type") + "-menu";
                  openDropdownMenu(e),
                      $(".nav-menu").unbind("hover"),
                      $(".nav-menu").hover(
                          function () {
                              is_menu_hover = !0;
                          },
                          function () {
                              (is_menu_hover = !1), closeDropdownMenu(e);
                          }
                      );
              }),
            $(".nav-menu-mobile-section").click(function () {
                var e = $(this).children("ul"),
                    a = e.css("display");
                $(".nav-menu-mobile-section > ul").hide(), "block" == a ? e.hide() : e.show();
            }),
            $(".nav-menu-hamburger").click(function () {
                $(".nav-menu-mobile").toggle();
            });
    });
var itiList = {};
function parseUrl(e) {
    return window.location.href.includes("www.multibankfx.me") ? e : "/~cms/mfx/v1" + e;
}
$(function () {
    $(".send-verification-code-btn").click(function (e) {
        e.preventDefault();
        var a = $(this).parent().parent().attr("id"),
            n = $(this).parent().parent().find('input[name="country_code"]').val(),
            t = $(this).parent().parent().find(".input_with_phone").first(),
            i = $(this).parent().parent().find(".sms_verif_code").first(),
            o = $(this);
        if ((o.attr("disabled", !0), t.parent().find("#phone-error").remove(), "" == n || void 0 === typeof n)) t.parent().append('<label id="phone-error" class="error" for="phone">Please select a country</label>'), o.attr("disabled", !1);
        else if (itiList[a].isValidNumber()) {
            let e = t.val().replace(n, "").replace("-", "").replace("(", "").replace(")", "").replace(/ /g, "");
            $.ajax({
                url: "/api/sendSMSCode",
                type: "POST",
                data: { countrycode: n, phone: e },
                success: function (e) {
                    if ("success" == JSON.parse(e).response.status.toLowerCase()) {
                        i.parent().parent().find(".form-tooltip").remove(), i.parent().append('<span class="form-tooltip active success">SMS Code Sent</span>'), i.data("verified", "0");
                        let e = 60;
                        var a = setInterval(function () {
                            o.text("(" + e + ")"), --e <= 0 && (clearInterval(a), "0" === i.data("verified") && o.attr("disabled", !1), o.text("Send Code"));
                        }, 1e3);
                    } else o.attr("disabled", !1);
                },
                error: function (e) {
                    o.attr("disabled", !1);
                },
            });
        } else i.parent().parent().find(".form-tooltip").remove(), t.parent().append('<span class="form-tooltip active error">Invalid Phone Number</span>'), o.attr("disabled", !1);
    }),
        $(".sms_verif_code").keyup(function () {
            var e = $(this).parent().find(".sms_verif_code").first();
            if (e.val().length < 6) return;
            if ("1" === e.data("verified")) return;
            var a = $(this).parent().parent().find('input[name="country_code"]').val(),
                n = $(this).parent().parent().find(".input_with_phone").first(),
                t = $(this).parent().parent().find(".phone-field").first(),
                i = $(this).parent().parent().find(".send-verification-code-btn").first();
            e.attr("readonly", !0), n.parent().find("#phone-error").remove();
            let o = n.val().replace(a, "").replace("-", "").replace("(", "").replace(")", "").replace(/ /g, "");
            $.ajax({
                url: "/api/verifySMSCode",
                type: "POST",
                data: { countrycode: a, phone: o, verify_code: e.val() },
                success: function (a) {
                    "success" == JSON.parse(a).response.status.toLowerCase()
                        ? (e.addClass("border-valid"),
                          e.attr("readonly", "true"),
                          e.parent().parent().find(".form-tooltip").remove(),
                          e.parent().append('<span class="form-tooltip active success">Code Verified</span>'),
                          e.data("verified", "1"),
                          i.attr("disabled", !0),
                          e.prop("readonly", !0),
                          t.append('<div style="width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 10; background-color: transparent; cursor: not-allowed;"></div>'))
                        : (e.parent().parent().find(".form-tooltip").remove(), e.parent().append('<span class="form-tooltip active error">Invalid Code</span>'), e.attr("readonly", !1));
                },
            });
        }),
        $.validator.addMethod(
            "regex",
            function (e, a, n) {
                var t = new RegExp(n);
                return this.optional(a) || t.test(e);
            },
            function (e, a) {
                return void 0 !== $(a).data("extra-message") ? $(a).data("extra-message") : "Invalid Input";
            }
        ),
        $.validator.addMethod(
            "phone_format",
            function (e, a) {
                if ($.trim(e)) {
                    let e = $(a).closest("form").attr("id");
                    return !!itiList[e].isValidNumber();
                }
                return !1;
            },
            function (e, a) {
                return "Invalid Phone Number Format";
            }
        ),
        $("form").each(function () {
            var e = $(this).attr("id"),
                a = $(this);
            if (a.hasClass("new")) {
                let a = document.querySelector("#" + e + ' input[name="phone_display"]');
                if (null !== a) {
                    let s = {
                        initialCountry: "auto",
                        nationalMode: !1,
                        geoIpLookup: function (e) {
                            var n = a.dataset.ip_country_code;
                            void 0 !== n && "" != n && e(n);
                        },
                        preferredCountries: [],
                        utilsScript: "/public_files/static_js/utils.js",
                    };
                    "philippine_seminar_registration_form" == e && (s.onlyCountries = ["ph"]),
                        "demo_competition_form_2019_08_13" == e && (s.onlyCountries = telOnlyCountryList),
                        (itiList[e] = window.intlTelInput(a, s)),
                        "" != (t = $("#" + e + ' select[name="country_name"] option:selected')).val() && itiList[e].setCountry(t.data("country_iso_code"));
                    var n = $("#" + e + ' input[name="country_code"]').val();
                    if (void 0 !== (i = a.dataset.ip_country_code))
                        if ("" != i) void 0 !== (o = itiList[e].getSelectedCountryData()).iso2 && ($("#" + e + ' select[name="country_name"]').val(o.iso2.toUpperCase()), $("#" + e + ' input[name="country_code"]').val("+" + o.dialCode));
                    "" != n && itiList[e].setNumber($("#" + e + ' input[name="phone_display"]').val()),
                        (a.onfocus = function () {
                            if ("" == a.value) {
                                var n = itiList[e].getSelectedCountryData();
                                a.value = "+" + n.dialCode;
                            }
                        }),
                        a.addEventListener("countrychange", function () {
                            var a = itiList[e].getSelectedCountryData();
                            void 0 !== a.iso2 &&
                                ($("#" + e + ' select[name="country_name"]').val(a.iso2.toUpperCase()),
                                $("#" + e + ' input[name="country_code"]').val("+" + a.dialCode),
                                1 != $("#" + e + ' select[name="company"] option:selected').val() || special_country_list.includes(a.iso2.toUpperCase()) || ($("#" + e + ' select[name="company"]').val(6), alterForm_TinField()));
                        }),
                        "philippine_seminar_registration_form" == e && itiList[e].setCountry("ph");
                }
            } else if (a.hasClass("old-new")) {
                let a = document.querySelector("#" + e + ' input[name="phone_display"]');
                if (null !== a) {
                    var t;
                    (itiList[e] = window.intlTelInput(a, {
                        initialCountry: "auto",
                        geoIpLookup: function (e) {
                            var n = a.dataset.ip_country_code;
                            void 0 !== n && "" != n && e(n);
                        },
                        preferredCountries: [],
                        utilsScript: "/public_files/static_js/utils.js",
                    })),
                        "" != (t = $("#" + e + ' select[name="country_name"] option:selected')).val() && itiList[e].setCountry(t.data("country_iso_code"));
                    var i, o;
                    n = $("#" + e + ' input[name="country_code"]').val();
                    if (void 0 !== (i = a.dataset.ip_country_code)) if ("" != i) void 0 !== (o = itiList[e].getSelectedCountryData()).iso2 && $("#" + e + ' input[name="country_code"]').val("+" + o.dialCode);
                    "" != n && itiList[e].setNumber(n + $("#" + e + ' input[name="phone_display"]').val()),
                        a.addEventListener("countrychange", function () {
                            var a = itiList[e].getSelectedCountryData();
                            void 0 !== a.iso2 && $("#" + e + ' input[name="country_code"]').val("+" + a.dialCode);
                        });
                }
                $("#" + e + " .selection-country").change(function (a) {
                    itiList[e].setCountry($(this).children("option:selected").data("country_iso_code"));
                });
            }
            $(this).find(".selection-country").parent().find('input[name="country_name"]').val($(this).find(".selection-country").find("option:selected").data("name")),
                $(this)
                    .find(".selection-country")
                    .change(function () {
                        var n = $(this).find("option:selected").data("name");
                        $(this).parent().find('input[name="country_name"]').val(n),
                            "live_account_form" == e && (1 != a.find('select[name="company"] option:selected').val() || special_country_list.includes(n) || a.find('select[name="company"]').val(6));
                    });
            var s = {},
                l = {};
            $(this)
                .find(":input")
                .each(function () {
                    if (void 0 !== $(this).attr("name")) {
                        var n = $(this).attr("name");
                        if (((s[n] = {}), $(this).prop("required"))) {
                            s[n].required = !0;
                            $(this).attr("");
                            "hidden" != $(this).attr("type") &&
                                "radio" != $(this).attr("type") &&
                                "checkbox" != $(this).attr("type") &&
                                ("phone_display" === n ? $(this).parent().prev().append('<sup class="sup-size">*</sup>') : $(this).siblings("label").append('<sup class="sup-size">*</sup>'));
                        }
                        void 0 !== $(this).data("regex") && null !== $(this).data("regex") && (s[n].regex = $(this).data("regex")),
                            void 0 !== $(this).data("message") && null !== $(this).data("regex") && ((l[n] = {}), (l[n].required = $(this).data("message"))),
                            "confirm_email" == $(this).attr("name") && ((s[n].equalTo = "#" + e + ' input[name="email"]'), (l[n].equalTo = $(this).data("extra-message"))),
                            a.hasClass("new") && "phone_display" == $(this).attr("name") && (s[n].phone_format = !0);
                    }
                });
            var r = $(this);
            $(this).validate({
                rules: s,
                messages: l,
                submitHandler: function (e) {
                    r.append('<div class="form-loader-container"><img src="/public_files/images/common/icons/form-loading.GIF"/></div>');
                    var a = r.find('input[name="phone_display"]');
                    if (void 0 !== a) {
                        let e = a.val(),
                            n = r.find('input[name="country_code"]').val();
                        r.find('input[name="phone"]').val(e.replace(n, "").replace("-", "").replace("(", "").replace(")", ""));
                    }
                    e.submit();
                },
                errorPlacement: function (e, n) {
                    "privacy" == n.attr("name")
                        ? e.insertAfter(n.parent())
                        : "file_id_front" === n.attr("name")
                        ? e.insertAfter(n.parent().children().last())
                        : a.hasClass("new") && "phone_display" == n.attr("name")
                        ? e.insertAfter(n.parent())
                        : e.insertAfter(n);
                },
            });
        });
}),
    $(function () {
        for (var e = document.querySelectorAll(".article-block"), a = 0; a < e.length; a++) {
            "" == e[a].querySelector(".article-big-title").textContent && (e[a].style.display = "none");
        }
    }),
    $(".bonus-page-tab").click(function (e) {
        var a = $(this).data("tab");
        $(".bonus-page-tab").removeClass("active"), $(this).addClass("active"), $(".bonus-page-pane").removeClass("active"), $("#" + a).addClass("active");
    });
var isHeaderFixed = !1,
    winHeight = 0;
function getUrlVars() {
    var e = {};
    window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (a, n, t) {
        e[n] = t;
    });
    return e;
}
$(function () {
    function e() {
        var e = $(window).scrollTop();
        e >= winHeight && window.innerWidth >= 768 ? $(".slidebar").show(200) : e < winHeight && window.innerWidth >= 768 && $(".slidebar").hide(200);
    }
    (winHeight = window.innerHeight),
        e(),
        $(window).scroll(function () {
            var a;
            e(),
                (a = $(window).scrollTop()) >= winHeight && !isHeaderFixed && window.innerWidth >= 1200
                    ? ($(".header").addClass("sticky"), (isHeaderFixed = !0))
                    : a < winHeight && isHeaderFixed && window.innerWidth >= 1200 && ($(".header").removeClass("sticky"), (isHeaderFixed = !1)),
                (function () {
                    var e = $(window).scrollTop();
                    e >= winHeight && window.innerWidth >= 1200 ? $(".bottom-bar").slideDown(300) : e < winHeight && window.innerWidth >= 1200 && $(".bottom-bar").slideUp(300);
                })();
        }),
        $(window).resize(function () {
            winHeight = window.innerHeight;
        }),
        $(".slidebar a").mouseover(function () {
            $(this).find(".text").show();
        }),
        $(".slidebar a").mouseout(function () {
            $(this).find(".text").hide();
        });
}),
    $(function () {
        var e = getUrlVars().page_year;
        if ((void 0 === e && (e = 1), "undefined" != typeof numNewsPage)) {
            var a = '<li class="page-item';
            1 == e && (a += " disabled"), (a += '"><a class="page-link" href="/about/company-news?page_year=' + (e - 1) + '" tabindex="-1">Previous</a></li>');
            for (var n = 0; n < numNewsPage; n++) (a += '<li class="page-item'), n + 1 == e && (a += " active"), (a += '"><a class="page-link" href="/about/company-news?page_year=' + (n + 1) + '">' + (n + 1) + "</a></li>");
            (a += '<li class="page-item'), e == numNewsPage && (a += " disabled"), (a += '"><a class="page-link" href="/about/company-news?page_year=2">Next</a></li>'), $(".pagination").html(a);
        }
    });
const uploadButton = document.querySelector(".browse-btn");
function alterForm_TinField() {
    var e = "not available",
        a = new Array("1"),
        n = $("#la_select_company option:selected").val();
    a.indexOf(n) >= 0
        ? ($(".la-container-has_tin").removeClass("d-none"),
          $(".std-la-form input[name=has_tin]").prop("required", !0),
          $(".std-la-form input[name=tin_number]").prop("required", !0),
          1 == $(".std-la-form input[name=has_tin]:checked").val()
              ? ($(".std-la-form input[name=tin_number]").val() == e && $(".std-la-form input[name=tin_number]").val(""), $(".la-container-tin_number").removeClass("d-none"))
              : 0 == $(".std-la-form input[name=has_tin]:checked").val() && ($(".la-container-tin_number").addClass("d-none"), $(".std-la-form input[name=tin_number]").val(e)))
        : ($(".std-la-form input[name=has_tin]").prop("checked", !1),
          $(".la-container-has_tin").addClass("d-none"),
          $(".std-la-form input[name=tin_number]").val(""),
          $(".la-container-tin_number").addClass("d-none"),
          $(".std-la-form input[name=tin_number]").prop("required", !1),
          $(".std-la-form input[name=has_tin]").prop("required", !1));
}
function switchLayout() {
    var e = $("#la_select_client_type option:selected").val();
    switch (e) {
        case "1":
            $(".la-label-name").html('Company Name<sup class="sup-size">*</sup>'), $(".la-field-name-2").val(""), $(".la-container-name").removeClass("col-lg-6"), $(".la-container-name-2").addClass("d-none");
            break;
        case "3":
            $(".la-label-name").html('Name of 1st Individual\n<sup class="sup-size">*</sup>'), $(".la-container-name").addClass("col-lg-6"), $(".la-container-name-2").removeClass("d-none");
            break;
        case "2":
        case "4":
        default:
            $(".la-label-name").html('Name<sup class="sup-size">*</sup>'), $(".la-container-name").removeClass("col-lg-6"), $(".la-container-name-2").addClass("d-none"), $(".la-field-name-2").val("");
    }
    "1" == e && "1" == $("#la_select_company option:selected").val()
        ? ($(".lei-input-container").removeClass("invisible"), $(".lei-input-container").addClass("visible"))
        : ($(".lei-input-container").removeClass("visible"), $(".lei-input-container").addClass("invisible"));
}
$(function () {
    "1" == $("#la_select_company option:selected").val() && "1" == $("#la_select_client_type option:selected").val()
        ? ($(".lei-input-container").removeClass("invisible"), $(".lei-input-container").addClass("visible"))
        : ($(".lei-input-container").removeClass("visible"), $(".lei-input-container").addClass("invisible")),
        $("#la_select_company").length && alterForm_TinField(),
        $(".multibank-form #la_select_platform_version").change(function () {
            let e = $(this).val(),
                a = $(this).closest("form").find("select[name=platform_type]"),
                n = $(this).closest("form").find("select[name=company]");
            "MT5" === e
                ? (("5" !== a.val() && "ST" !== a.val()) || a.val("3"), a.find('option[value="5"]').addClass("d-none"), a.find('option[value="ST"]').addClass("d-none"), n.find('option[value="1"]').addClass("d-none"), n.val("6"))
                : "MT4" === e && (a.find('option[value="5"]').removeClass("d-none"), a.find('option[value="ST"]').removeClass("d-none"), n.find('option[value="1"]').removeClass("d-none"));
        }),
        $("#la_select_company").change(function () {
            alterForm_TinField(),
                "1" == $("#la_select_company option:selected").val() && "1" == $("#la_select_client_type option:selected").val()
                    ? ($(".lei-input-container").removeClass("invisible"), $(".lei-input-container").addClass("visible"))
                    : ($(".lei-input-container").removeClass("visible"), $(".lei-input-container").addClass("invisible")),
                "1" === $(this).val()
                    ? ($(this).closest("form").find('select[name=platform_version] option[value="MT5"]').addClass("d-none"),
                      $(this).closest("form").find('select[name=platform_type] option[value="5"]').addClass("d-none"),
                      $(this).closest("form").find('select[name=platform_type] option[value="ST"]').addClass("d-none"))
                    : ($(this).closest("form").find('select[name=platform_version] option[value="MT5"]').removeClass("d-none"),
                      $(this).closest("form").find('select[name=platform_type] option[value="5"]').removeClass("d-none"),
                      $(this).closest("form").find('select[name=platform_type] option[value="ST"]').removeClass("d-none"));
        }),
        $("#la_select_client_type").change(function () {
            switchLayout();
        }),
        $(".browse-btn").click(function (e) {
            var a = $(this).parent().parent().find('input[type="file"]');
            a.off("change"),
                a.on("change", function () {
                    var e = a.val(),
                        n = a[0].files[0].size / 1048576;
                    if (($(this).parent().find(".file-upload-error").remove(), !/(\.jpg|\.jpeg|\.png|\.doc|\.pdf|\.docx)$/i.exec(e)))
                        return $(this).parent().append('<div class="text-danger file-upload-error">Invalid file format.<br/>.jpeg/.jpg/.png/.doc/.docx/.pdf only</div>'), a.val(""), !1;
                    if (n > 5) return $(this).parent().append('<div class="text-danger file-upload-error">File size exceed 5MB</div>'), a.val(""), !1;
                    {
                        const e = a.val().split(/\\|\//).pop(),
                            n = e.length > 20 ? e.substr(e.length - 20) : e;
                        $(this).parent().find(".file-info").text(n);
                    }
                }),
                a.click();
        });
    var e = getUrlVars().ibNum;
    if (void 0 !== e) {
        var a = 1;
        switch (e.substring(0, 2)) {
            case "88":
                a = 1;
                break;
            case "66":
                a = 3;
                break;
            case "33":
                a = 6;
        }
        $('.std-la-form select[name="company"]').val(a);
    }
}),
    $(".std-la-form input[name=has_tin]").change(function (e) {
        alterForm_TinField();
    });
var jointAccountDocFields = {
    listJointAccountDocFields: function () {
        return ["secondary_file_id_front", "secondary_file_id_back", "secondary_file_address_proof"];
    },
    disableJointAccountDocFields: function () {
        for (var e = this.listJointAccountDocFields(), a = 0; a < e.length; a++) $("input[name=" + e[a] + "]").prop("disabled", !0);
    },
    enableJointAccountDocFields: function () {
        for (var e = this.listJointAccountDocFields(), a = 0; a < e.length; a++) $("input[name=" + e[a] + "]").removeAttr("disabled");
    },
    showJointAccountDocFields: function () {
        $(".secondary-file-upload-container").show();
    },
    hideJointAccountDocFields: function () {
        $(".secondary-file-upload-container").hide();
    },
};
function slider_login() {
    var e = $("#swiper-container-1").height();
    if ($(".login_Block").length > 0) {
        var a = $(window).width(),
            n = 0.1 * a;
        $(".nav-container nav").height();
        a >= 1400 ? (n = (a - 1300) / 2) : a >= 1150 ? (n = (a - 1150) / 2) : a >= 1e3 && (n = 20), $(".home_page .login_Block").css({ right: n }).fadeIn();
    }
}
function slider_login() {
    var e = $("#swiper-container-1").height();
    if ($(".login_Block").length > 0) {
        var a = $(window).width(),
            n = 0.1 * a;
        $(".nav-container nav").height();
        a >= 1400 ? (n = (a - 1300) / 2) : a >= 1150 ? (n = (a - 1150) / 2) : a >= 1e3 && (n = 20), $(".home_page .login_Block").css({ right: n }).fadeIn();
    }
}
if (
    ($(document).ready(function () {
        if ($("#regulations-global-presence").length) {
            new Swiper("#regulations-global-presence", {
                navigation: { nextEl: ".global-presence .swiper-button-next", prevEl: ".global-presence .swiper-button-prev" },
                pagination: {
                    el: ".global-presence .swiper-pagination",
                    clickable: !0,
                    renderBullet: function (e, a) {
                        switch (e) {
                            case 0:
                                (text = "ASIC"), (img_url = "/public_files/images/common/country/australia.png");
                                break;
                            case 1:
                                (text = "BaFin"), (img_url = "/public_files/images/common/country/germany.png");
                                break;
                            case 2:
                                (text = "FMA"), (img_url = "/public_files/images/common/country/austria.png");
                                break;
                            case 3:
                                (text = "CNMV"), (img_url = "/public_files/images/common/country/spain.png");
                                break;
                            case 4:
                                (text = "FSC"), (img_url = "/public_files/images/common/country/british_virgin_islands.png");
                                break;
                            case 5:
                                (text = "CIMA"), (img_url = "/public_files/images/common/country/cayman_islands.png");
                                break;
                            case 6:
                                (text = "RAK"), (img_url = "/public_files/images/common/country/uae.png");
                        }
                        return '<span class="' + a + '" data-img="' + img_url + '"><span>' + text + '</span><img src="' + img_url + '"></span>';
                    },
                },
                updateOnImagesReady: !0,
                slidesPerView: 1,
                loop: !0,
                breakpoints: { 991: { slidesPerView: 1 } },
                on: {
                    init: function () {
                        a(this);
                    },
                    slideChangeTransitionStart: function () {
                        a(this);
                    },
                },
            });
            function e() {
                var e = $(".regulations-bg .swiper-button-next"),
                    a = $(".regulations-bg .swiper-button-prev"),
                    n = $("#regulations-global-presence").width(),
                    t = ($(window).width() - n - 2 * e.width()) / 2;
                $(window).width() < 767 && (t = 50), e.css({ right: t - 40 + "px" }), a.css({ left: t - 40 + "px" });
            }
            function a(e) {
                var a = e.slides.eq(e.activeIndex).attr("data-img");
                $(".global-presence.regulations-bg").css({ backgroundImage: "url(" + a + ")" });
            }
            $(window).resize(function () {
                e();
            }),
                e();
        }
    }),
    $(function () {
        $(".platform-selector").click(function () {
            var e = $(this).data("tab");
            $(".tab-platform").removeClass("show").removeClass("active"),
                setTimeout(function () {
                    $(".tab-platform").removeClass("active"), $("#" + e).addClass("active");
                }, 150),
                setTimeout(function () {
                    $("#" + e).addClass("show");
                }, 300),
                $(".platform-selector-container").removeClass("active"),
                $(this).parent().addClass("active");
        });
    }),
    $(function () {
        slider_login(),
            $(window).resize(function () {
                slider_login();
            }),
            $("#login_Block_Modal").on("hidden.bs.modal", function (e) {
                var a = $("#login_Block_Modal .login_Block");
                a.remove(), $("body").append(a);
            }),
            $("#login_Block_Modal").on("show.bs.modal", function (e) {
                var a = $(".login_Block");
                a.remove(), $("#login_Block_Modal .modal-body").append(a);
            }),
            $(document).on("click", ".login_Block .title span", function () {
                var e = $("." + $(this).attr("data-name"));
                "long-form-block" == $(this).attr("data-name") ? $(".socialMedia-block .media_action_name").html("LOGIN WITH") : $(".socialMedia-block .media_action_name").html("REGISTER WITH"),
                    $(this).addClass("active").siblings().removeClass("active"),
                    e.addClass("active").siblings().removeClass("active"),
                    slider_login();
            });
    }),
    void 0 === whereToGoItemLabel)
)
    var whereToGoItemLabel = {
        ic_our_milestones_label: "Our Milestones",
        ic_our_regulations_label: "Our Regulations",
        ic_security_of_funds_label: "Security of Funds",
        ic_why_multibank_label: "Why Multibank",
        ic_accounts_funding_label: "Accounts and Funding",
        ic_bonus_programs_label: "Bonus Programs",
        ic_bonus_programs_for_ibs_label: "Bonus Programs for IBs",
        ic_Bonus_Programs_for_Individual_Clients_label: "Bonus Programs for Individual Clients",
        ic_compare_our_trading_platforms_label: "Compare our Trading Platforms",
        ic_download_mt4_label: "Download MT4",
        ic_our_products_label: "Our Products",
        ic_trading_tools_label: "Trading Tools",
        ic_partnership_programs_label: "Partnership Programs",
        ic_become_an_ib_label: "Become an IB",
        ic_live_chat_support_label: "Live Chat Support",
        ic_mymultibank_account_panel_label: "MyMultiBank Account Panel",
        ic_Call_Our_24_7_Hotline_label: "Call Our 24/5 Hotline",
        ic_forex_spreads_label: "View Forex Spreads",
        ic_global_offices_label: "Our Global Offices",
        ic_awards_label: "Our Awards",
    };
var whereToGoItem = {
    ic_our_milestones: '<a href="/about/milestones"><span class="ico-ic_our_milestones"> </span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_our_milestones_label + "</div></a>",
    ic_our_regulations: '<a href="/about/regulations"><span class="ico-ic_our_regulations">\x3c!-- --\x3e</span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_our_regulations_label + "</div></a>",
    ic_security_of_funds: '<a href="/about/security-of-funds"><span class="ico-ic_security_of_funds">\x3c!-- --\x3e</span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_security_of_funds_label + "</div></a>",
    ic_why_multibank: '<a href="/about/why-multibank-group"><span class="ico-ic_why_multibank">\x3c!-- --\x3e</span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_why_multibank_label + "</div></a>",
    ic_accounts_funding: '<a href="/account"><span class="ico-ic_accounts_funding">\x3c!-- --\x3e</span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_accounts_funding_label + "</div></a>",
    ic_bonus_programs: '<a href="/account/bonus"><span class="ico-ic_bonus_programs">\x3c!-- --\x3e</span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_bonus_programs_label + "</div></a>",
    ic_bonus_programs_for_ibs: '<a href="/account/bonus"><span class="ico-ic_bonus_programs_for_ibs"></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_bonus_programs_for_ibs_label + "</div></a>",
    ic_Bonus_Programs_for_Individual_Clients:
        '<a href="/account/bonus"><span class="ico-ic_Bonus_Programs_for_Individual_Clients"></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_Bonus_Programs_for_Individual_Clients_label + "</div></a>",
    ic_compare_our_trading_platforms:
        '<a href="/platforms/compare-platforms"><span class="ico-ic_compare_our_trading_platforms"></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_compare_our_trading_platforms_label + "</div></a>",
    ic_download_mt4: '<a href="/platforms/download-center"><span class="ico-ic_download_mt4">\x3c!-- --\x3e</span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_download_mt4_label + "</div></a>",
    ic_our_products: '<a href="/products"><span class="ico-ic_our_products">\x3c!-- --\x3e</span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_our_products_label + "</div></a>",
    ic_trading_tools: '<a href="/tools"><span class="ico-ic_trading_tools">\x3c!-- --\x3e</span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_trading_tools_label + "</div></a>",
    ic_partnership_programs: '<a href="/partnership"><span class="ico-ic_partnership_programs">\x3c!-- --\x3e</span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_partnership_programs_label + "</div></a>",
    ic_become_an_ib:
        '<a href="/partnership/introducing-brokers#introducing-brokers-form"><span class="ico-ic_become_an_ib">\x3c!-- --\x3e</span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_become_an_ib_label + "</div></a>",
    ic_live_chat_support:
        '<a href="/#" onclick="LC_API.open_chat_window();return false;"><span class="ico-ic_live_chat_support">\x3c!-- --\x3e</span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_live_chat_support_label + "</div></a>",
    ic_mymultibank_account_panel:
        '<a href="https://my.multibankfx.com" target="_blank"><span class="ico-ic_mymultibank_account_panel"></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_mymultibank_account_panel_label + "</div></a>",
    ic_Call_Our_24_7_Hotline: '<a href="/contact"><span class="ico-ic_Call_Our_24_7_Hotline"></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_Call_Our_24_7_Hotline_label + "</div></a>",
    ic_forex_spreads: '<a href="/products/forex"><span class="ico-ic_forex_spreads"></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_forex_spreads_label + "</div></a>",
    ic_global_offices: '<a href="/about/global-presence"><span class="ico-ic_global_offices"></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_global_offices_label + "</div></a>",
    ic_awards: '<a href="/about/awards"><span class="ico-ic_awards"></span><div class="mex-content mex-clamp-3">' + whereToGoItemLabel.ic_awards_label + "</div></a>",
    injectIcons: function (e, a) {
        var n = "",
            t = "";
        for ($(e).hide(), i = 0; i < a.length; i++) (t = a[i]), this.hasOwnProperty(t) && (n += "<li>" + this[t] + "</li>");
        $(e).html(n), $(e).show();
    },
};
function openWithdrawalForm(e, a, n) {
    $(".withdrawal-form-modal").addClass("show"), $(".withdrawal-form-modal").show(), $("#withdrawal_" + e + "_form").removeClass("d-none"), $("body").css("overflow", "hidden");
}
function closeWithdrawalForm() {
    $(".withdrawal-form-modal").removeClass("show"), $(".withdrawal-form-modal").hide(), $(".withdrawal-form-modal form").addClass("d-none"), $("body").css("overflow", "initial");
}
function update_amount_value(e) {
    $(".deposit_amount_value").val(e), $(".payment_form").find('input[name="amount"]').val(e), $(".deposit_amount_value_text").html(e);
}
function openRedirectionOption() {
    $(".paytrust-modalbox-container").css("display", "block");
}
function closeModalBox() {
    $(".paytrust-modalbox-container").css("display", "none");
}
function toggleWMGModal(e) {
    $("#wmg_modal_box_" + e).show();
}
function closeWMGModal(e) {
    $("#wmg_modal_box_" + e).hide();
}
$(function () {
    $("#call_back_footer_form, #contact_us_form, #career_apply_job").find(".send-code-container").removeClass("col-md-2").addClass("col-md-6"),
        $("#call_back_footer_form, #contact_us_form, #career_apply_job").find(".sms-code-container").removeClass("col-md-4").addClass("col-md-6"),
        $("#call_back_footer_form .cb-partnership > label , #contact_us_form .cb-partnership > label").remove(),
        $("#contact_us_form .cb-partership input").first().attr("checked", "checked"),
        $("#call_back_footer_form .cb-partnership label , #contact_us_form .cb-partnership label").addClass("mb-0 ml-1"),
        $("#career_apply_job .send-verification-code-btn").css("width", "100%");
}),
    $(function () {
        var e = $("#withdrawal_selection_form").validate();
        if (null != e) {
            e.destroy();
            var a,
                n = ["neteller", "skrill", "fasapay", "bank_transfer", "credit_card", "paytrust", "perfectmoney"],
                t = ["neteller", "skrill", "bank_transfer", "credit_card", "paytrust", "perfectmoney", "fxbit", "globepay", "thunderxpay"],
                i = ["neteller", "skrill", "bank_transfer", "credit_card", "paytrust", "perfectmoney", "fxbit"];
            "vn" === document.documentElement.lang && (i.push("ngan_luong"), t.push("ngan_luong"));
            var o = getUrlVars().r;
            getUrlVars().gateway;
            switch (o) {
                case "1":
                    a = n;
                    break;
                case "3":
                    a = t;
                    break;
                case "6":
                    a = i;
                    break;
                default:
                    a = n;
            }
            $(".payment_method option").each(function () {
                -1 == a.indexOf($(this).data("method")) && $(this).remove();
            }),
                $(".form-icon").each(function () {
                    -1 == a.indexOf($(this).data("method")) && $(this).remove();
                }),
                $("#withdrawal_selection_form .deposit_table td").click(function () {
                    $("#withdrawal_selection_form .deposit_table td").each(function () {
                        $(this).removeClass("active");
                    }),
                        $(this).addClass("active"),
                        $(this).find("input").prop("checked", !0),
                        update_amount_value($(this).find("input").val());
                }),
                $(".withdrawal-form-modal .modal-bg").click(function () {
                    closeWithdrawalForm();
                }),
                $("#withdrawal_selection_form .deposit_amount_value").change(function () {
                    return update_amount_value($(this).val()), !1;
                }),
                $("#withdrawal_selection_form .deposit_submit").click(function () {
                    openWithdrawalForm($(".payment_method option:selected").val(), $(".deposit_amount_value").val(), $(".currency_type option:selected").val());
                });
        }
    }),
    $(document).ready(function () {
        function e(e) {
            if ($(window).width() > 991) {
                $("#about-page-awards .width-30").removeClass("width-30"), $("#about-page-awards .width-40").removeClass("width-40"), e.slides.eq(e.activeIndex + 3).addClass("width-40");
                for (var a = 0; a < e.slides.length; a++) a != e.activeIndex + 3 && e.slides.eq(a).addClass("width-30");
            } else $("#about-page-awards .width-30").removeClass("width-30"), $("#about-page-awards .width-40").removeClass("width-40");
        }
        $("#about-page-awards .swiper-container").length &&
            new Swiper("#about-page-awards .swiper-container", {
                navigation: { nextEl: "#about-page-awards .swiper-button-next", prevEl: "#about-page-awards .swiper-button-prev" },
                updateOnImagesReady: !0,
                slidesPerView: 7,
                spaceBetween: 20,
                grabCursor: !0,
                loop: !0,
                breakpoints: { 991: { slidesPerView: 1 } },
                on: {
                    init: function () {
                        e(this);
                    },
                    slideChangeTransitionStart: function () {
                        e(this);
                    },
                },
                pagination: { el: "#about-page-awards .swiper-pagination", type: "bullets" },
            });
    }),
    $(function () {
        if (document.getElementById("leaderboard")) {
            let e = new Date("2020-01-05T22:00:00Z").getTime();
            new Date().getTime() >= e ? $("#leaderboard").show() : $("#leaderboard").hide();
        }
    });
