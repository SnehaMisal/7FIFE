$(function() {
    "use strict";

    // Tooltops

    $(function() {
        $('[data-bs-toggle="tooltip"]').tooltip();
    })



    $(".nav-toggle-icon").on("click", function() {
        $(".wrapper").toggleClass("toggled")
    })

    $(".mobile-toggle-icon").on("click", function() {
        $(".wrapper").addClass("toggled")
    })

    $(function() {
        for (var e = window.location, o = $(".metismenu li a").filter(function() {
                return this.href == e
            }).addClass("").parent().addClass("mm-active"); o.is("li");) o = o.parent("").addClass("mm-show").parent("").addClass("mm-active")
    })

// Active Sidemenu
    // $(function() {
    //     $("#menu li a").each(function() {
    //         var pageUrl = window.location.href.split(/[?#]/)[0];
    //         if (this.href == pageUrl) {
    //             $(this).addClass("mm-active");
    //             // $(this).parent().addClass("active"); // add active to li of the current link
    //             $(this).parent().parent().parent().addClass("mm-active"); // add active class to an anchor
    //             $(this).parent().parent().prev().click(); // click the item to make it drop
    //             $(this).parent().parent().parent().parent().prev().click();
    //             // $('.aside-menu .menu-item.active').parents('li').addClass('active');
    //         }
    //     });
    // })
    $(".toggle-icon").click(function() {
        $(".wrapper").hasClass("toggled") ? ($(".wrapper").removeClass("toggled"), $(".sidebar-wrapper").unbind("hover")) : ($(".wrapper").addClass("toggled"), $(".sidebar-wrapper").hover(function() {
            $(".wrapper").addClass("sidebar-hovered")
        }, function() {
            $(".wrapper").removeClass("sidebar-hovered")
        }))
    })



    $(function() {
        $("#menu").metisMenu()
    })


    $(".search-toggle-icon").on("click", function() {
        $(".top-header .navbar form").addClass("full-searchbar")
    })
    $(".search-close-icon").on("click", function() {
        $(".top-header .navbar form").removeClass("full-searchbar")
    })


    $(".chat-toggle-btn").on("click", function() {
        $(".chat-wrapper").toggleClass("chat-toggled")
    }), $(".chat-toggle-btn-mobile").on("click", function() {
        $(".chat-wrapper").removeClass("chat-toggled")
    }), $(".email-toggle-btn").on("click", function() {
        $(".email-wrapper").toggleClass("email-toggled")
    }), $(".email-toggle-btn-mobile").on("click", function() {
        $(".email-wrapper").removeClass("email-toggled")
    }), $(".compose-mail-btn").on("click", function() {
        $(".compose-mail-popup").show()
    }), $(".compose-mail-close").on("click", function() {
        $(".compose-mail-popup").hide()
    })


    $(document).ready(function() {
        $(window).on("scroll", function() {
            $(this).scrollTop() > 300 ? $(".back-to-top").fadeIn() : $(".back-to-top").fadeOut()
        }), $(".back-to-top").on("click", function() {
            return $("html, body").animate({
                scrollTop: 0
            }, 600), !1
        })
    })


    // switcher 

    $("#LightTheme").on("click", function() {
            $("html").attr("class", "light-theme")
        }),

        $("#DarkTheme").on("click", function() {
            $("html").attr("class", "dark-theme")
        }),

        $("#SemiDarkTheme").on("click", function() {
            $("html").attr("class", "semi-dark")
        }),

        $("#MinimalTheme").on("click", function() {
            $("html").attr("class", "minimal-theme")
        })


    $("#headercolor1").on("click", function() {
        $("html").addClass("color-header headercolor1"), $("html").removeClass("headercolor2 headercolor3 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8")
    }), $("#headercolor2").on("click", function() {
        $("html").addClass("color-header headercolor2"), $("html").removeClass("headercolor1 headercolor3 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8")
    }), $("#headercolor3").on("click", function() {
        $("html").addClass("color-header headercolor3"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8")
    }), $("#headercolor4").on("click", function() {
        $("html").addClass("color-header headercolor4"), $("html").removeClass("headercolor1 headercolor2 headercolor3 headercolor5 headercolor6 headercolor7 headercolor8")
    }), $("#headercolor5").on("click", function() {
        $("html").addClass("color-header headercolor5"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor3 headercolor6 headercolor7 headercolor8")
    }), $("#headercolor6").on("click", function() {
        $("html").addClass("color-header headercolor6"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor5 headercolor3 headercolor7 headercolor8")
    }), $("#headercolor7").on("click", function() {
        $("html").addClass("color-header headercolor7"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor3 headercolor8")
    }), $("#headercolor8").on("click", function() {
        $("html").addClass("color-header headercolor8"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor7 headercolor3")
    })


    // new PerfectScrollbar(".header-message-list")
    // new PerfectScrollbar(".header-notifications-list")



});
$(document).ready(function() {
    // Table search
    $("#myInput").keyup(function() {
        var searchTerm = $("#myInput").val();
        var listItem = $('#myTable tbody').children('tr');
        var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

        $.extend($.expr[':'], {
            'containsi': function(elem, i, match, array) {
                return (elem.textContent || elem.innerText || '').toLowerCase().indexOf(
                    (match[3] || "").toLowerCase()) >= 0;
            }
        });

        $("#myTable tbody tr").not(":containsi('" + searchSplit + "')").each(function(e) {
            $(this).attr('visible', 'false');
        });

        $("#myTable tbody tr:containsi('" + searchSplit + "')").each(function(e) {
            $(this).attr('visible', 'true');
        });

        var jobCount = $('#myTable tbody tr[visible="true"]').length;

        if (jobCount == '0') {
            $('#founder').show();
        } else {
            $('#founder').hide();
        }
    });
    // Admin profile edit

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });


    // Dropify image
    $('.dropify').dropify();

    // Image preview
    $(".image-box").click(function(event) {
        var previewImg = $(this).children("img");

        $(this)
            .siblings()
            .children("input")
            .trigger("click");

        $(this)
            .siblings()
            .children("input")
            .change(function() {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var urll = e.target.result;
                    $(previewImg).attr("src", urll);
                    previewImg.parent().css("background", "#efefef");
                    previewImg.show();
                    previewImg.siblings("p").hide();
                };
                reader.readAsDataURL(this.files[0]);
            });
    });
    // lightgallery
    jQuery(".lightgallery").length > 0 && $(".lightgallery").lightGallery({
        loop: !0,
        thumbnail: !0,
        exThumbImage: "data-exthumbimage",
        download: false,
        share: false,
    });
    $('.select2').select2({
        placeholder: "Select an option",
    allowClear: true
    });
});