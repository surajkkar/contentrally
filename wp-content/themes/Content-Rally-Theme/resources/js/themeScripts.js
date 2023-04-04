jQuery(document).ready(function($) {

    // calls search function from functions.php on page load
    fetch();

    //Subscription
    $('.footer-sec .es_subscription_form input[type="submit"]').hide().parent().parent().addClass( "w-full");
    $('.footer-sec .es_subscription_form input[name="esfpx_email"]').addClass("input-mail").after('<button aria-label="subscribe"><svg class="newsletter-arrow" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5342 9.86745L3.61756 2.36745C2.86756 2.03412 2.03423 2.70078 2.36756 3.45078L4.4509 9.03412L13.9509 10.6175L4.4509 12.2008L2.36756 17.7841C2.11756 18.5341 2.86756 19.2008 3.61756 18.7841L18.5342 11.2841C19.1176 11.0341 19.1176 10.2008 18.5342 9.86745Z" fill="white" /></svg></button>').parent().addClass("input-area mb-12 flex items-center w-full");
    $(".footer-sec .emaillist input[name='esfpx_es_hp_email']").attr('id', 'sub').parent().attr("for","sub");
            var formid = $('.footer-sec form.es_subscription_form').attr('id');
            $(".footer-sec button.subscribe").attr( { form:formid} );

    //Menu
    $(".navbar-center .sub-menu").addClass("center-dropdown");
    $(".navbar-center .center-dropdown a").addClass("dropdown-options").removeClass("navlinks");

    $(".dropdown .sub-menu").addClass("submenu-dropdown");
    $(".dropdown .submenu-dropdown a").addClass("dropdown-options").removeClass("ham-links");
    $(".dropdown li.menu-item-has-children a").not("a.dropdown-options").prepend('<a href="#"><svg class="fill-current rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" /></svg></a>');

    //Active Menu
    $(".menu-horizontal .current-menu-item a, .menu-horizontal .current-menu-parent a").not("a.dropdown-options").addClass("nav-active-item");

    //Pagination
    $('.pagination span.page-numbers.current').addClass('page-num active-page').parent().addClass('pagination-sec flex gap-2 justify-center pt-16');
    // $('.pagination span.dots').empty().addClass('page-dot').before('<span class="page-dot"></span>').after('<span class="page-dot"></span>');
    $('.pagination a.page-numbers').addClass('page-num hover-page');
    $('.pagination a.prev').html('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z" /><path d="M7.828 11H20v2H7.828l5.364 5.364-1.414 1.414L4 12l7.778-7.778 1.414 1.414z" /></svg>');
    $('.pagination a.next').html('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z" /><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" /></svg>');

    // //Post Content
    $(".content *[style]").removeAttr("style");
    $(".content p").addClass( "inner-detail");
    $(".content img").addClass( "inner-img");
    $(".content figure").addClass( "mb-4 w-full h-[20rem] md:h-[38rem]");
    $(".content h1").addClass( "inner-title-h1");
    $(".content h2").addClass( "inner-title-h2");
    $(".content h3").addClass( "inner-title-h3");
    $(".content h4").addClass( "inner-title-h4");
    $(".content h5").addClass( "inner-title-h5");
    $(".content table").addClass( "table w-full").wrap("<div class='overflow-x-auto'> </div>");
    $(".content ul").addClass( "read-list-sec");
    $(".content ol").addClass( "inner-ol-sec");
    $('.content').children().last("ul").wrap("<div class='read-sec my-12'> </div>")
    // $(".content ul>li").addClass( "inner-detail-ul-li");
    $(".content ol>li").addClass( "inner-detail-ol-li");
    $(".content a").addClass("read-list");

    //About Content
    $(".about *[style]").removeAttr("style");
    $(".about p").addClass( "about-detail");
    $(".about h2").addClass( "about-title-h2");
    $(".about h3").addClass( "about-title-h3");
    $(".about h4").addClass( "about-title-h4");
    $(".about h5").addClass( "about-title-h5");
    $(".about ul").addClass( "about-ul-sec");
    $(".about ol").addClass( "about-ol-sec");
    $(".about ol>li").addClass( "list-decimal");
    $(".about ul>li>a, .about ol>li>a").addClass( "about-list");
    $(".about a").addClass("underline underline-offset-4 hover:text-[#EC9A15]");

    //Contact Content
    $(".contact h2").addClass( "about-detail font-medium");
    $(".contact p").addClass( "about-detail");
    $(".contact a").addClass("underline underline-offset-4 hover:text-[#EC9A15]");
    $(".contact .wpcf7-form textarea, .contact .wpcf7-form input[name=your-subject], .contact .wpcf7-form input[name=your-email], .contact .wpcf7-form input[name=your-name]").unwrap().addClass("input-detail");
    $(".contact .wpcf7-form br").remove();
    $(".contact .wpcf7-form input[type=submit]").addClass("w-full text-center p-6 bg-[#EC9A15] text-white text-2xl font-Ubuntu font-bold cursor-pointer");
    $(".contact .wpcf7-form input.wrap").wrapAll("<div class='form-detail w-full flex flex-col md:flex-row justify-between gap-6'></div>")
    $('.contact .wpcf7-form p.about-detail').children().wrapAll('<div class="flex flex-col gap-6"></div>');

    //Comment Section
    $(".comment-sec a").addClass("transition hover:text-[#EC9A15]"); //All Link in Comment Template

    $(".comment-sec h3#comments").contents().unwrap().wrapAll('<h1 class="text-base leading-8 text-[#281B17] uppercase font-medium mb-6"></h1>'); //Commnet Box Title
    $(".comment-sec .commentlist li").addClass("p-4 w-full outline-none border border-[#DEDEDE] mt-2"); //comment Box
    $(".comment-sec .comment-author b, .comment-sec .comment-author span").addClass("leading-6 font-medium font-Work-Sans text-[#505050] text-sm"); //Author Div
    $(".comment-sec .commentlist .comment-metadata time").parent().addClass("leading-6 font-Work-Sans text-[#281B17] text-xs"); //Comment Date
    $(".comment-sec .comment-content p").addClass( "text-[20px] leading-6 font-Work-Sans px-2 py-4 "); //Comment
    $(".comment-sec .commentlist .reply a, .comment-sec .commentlist .edit-link a").addClass("px-2 py-1 w-14 text-center outline-none border border-[#DEDEDE] text-[#281B17] text-xs cursor-pointer float-right"); //Edit, Reply Button
    $(".comment-sec .commentlist li").not("li.parent").addClass("flex"); //Imp for Reply float
    $(".comment-sec .commentlist ul.children").addClass("mt-10"); //Imp for Reply float
    $(".comment-sec .commentlist article").addClass("w-full"); //Imp for Reply float

    $(".comment-sec div.navigation").addClass("mb-6"); //Navigation Bottom Margin
    $(".comment-sec ol.commentlist").addClass("mb-6"); //Comments Bottom Margin

    $(".comment-sec .comment-form-comment label[for='comment'], .comment-sec .comment-form label[for='author'], .comment-sec .comment-form label[for='email'], .comment-sec .comment-form label[for='url']").addClass("label px-0 font-medium text-lg text-[#281B17]"); //Lable
    $(".comment-sec h3.comment-reply-title").contents().unwrap().wrapAll('<h1 class="text-base leading-8 text-[#281B17] uppercase font-medium mb-6"></h1>'); //Leave Reply Title
    $(".comment-sec p.comment-notes, .comment-sec p.logged-in-as").addClass("text-[#281B17] text-base leading-6 pt-4 mb-6"); //Comment Notes
    $(".comment-sec p.comment-form-cookies-consent").addClass("text-black text-base leading-6 font-medium mb-6"); //Comment Notes
    $(".comment-sec .comment-form-comment textarea").attr( { cols:"30", rows:"10"}).addClass( "outline-none p-2 border border-[#DEDEDE] mt-2 w-full").unwrap(); //Add Class to Reply Input
    $(".comment-sec .comment-form input[name='author'], .comment-sec .comment-form input[name='url'], .comment-sec .comment-form input[name='email']").addClass( "p-2 w-full border border-[#DEDEDE] outline-none mt-2"); //Add Class to Name, URL, Email
    $(".comment-sec p.comment-form-author, .comment-sec p.comment-form-email, .comment-sec p.comment-form-url").wrapAll( "<div class='info flex flex-col md:flex-row justify-between gap-2 md:gap-4 2xl:gap-6 w-full mb-4' />"); //Wrap Name, Email, URL in Div
    $(".comment-sec p.comment-form-author").children().wrapAll('<div class="input-wrapper w-full"></div>').parent().unwrap();
    $(".comment-sec p.comment-form-email").children().wrapAll('<div class="input-wrapper w-full"></div>').parent().unwrap();
    $(".comment-sec p.comment-form-url").children().wrapAll('<div class="input-wrapper w-full"></div>').parent().unwrap();
    $(".comment-sec .form-submit input.submit").addClass( "form-btn cursor-pointer").wrap("<div class='mt-8'></div>").parent().unwrap(); //Post Comment Button

    $(".comment-sec div#respond").addClass("flex flex-col pt-4"); //Comments Bottom Margin

    //Share Section
    $(".heateor_sss_sharing_ul span").css({"margin-right":"16px","margin-left":"-2px", "padding": "5px"});

    //External link open in new tab
    $('a').each(function() { 
        var a = new RegExp('/' + window.location.host + '/');
        if (this.href && !a.test(this.href)) {
            $(this).click(function(event) {
            event.preventDefault();
            event.stopPropagation();
            window.open(this.href, '_blank');
            });
        }
    });
});

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    effect: "fade",
    navigation: {
        nextEl: ".right",
        prevEl: ".left",
    },
    loop: true,
});