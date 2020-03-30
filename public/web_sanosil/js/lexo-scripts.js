var $ = jQuery;

 // ML - remove edit page from frontend
function lexoML_stuff() {

    if ($('body').hasClass('page-template-template-home')) {
        $('#wp-admin-bar-root-default > li#wp-admin-bar-edit > a').remove();
    }
}

// Calculate width for menuOverLay ( shop button area )
function menuShop() {
    var menuLastChild = $(window).width() - ($('#MainNav .menu li:last-child').offset().left + $('#MainNav .menu li:last-child').width());
    $('#menuOverLay').css("width", menuLastChild+"px");
}

function titleScrollAnim() {
    var documentTop = $(document).scrollTop() + $(window).height() - 100;
    $('.bigTitle').each(function(){
        if((documentTop > $(this).offset().top) && $(this).hasClass('blue')) {
            $(this).removeClass('off');
            $(this).addClass('on');
        } else if((documentTop > $(this).offset().top) && $(this).hasClass('white')) {
            $(this).removeClass('off');
            $(this).addClass('onBlue');
        }
    });
    if($('#distributor').is(':visible')) {
        if (documentTop - 150 > $('#swissSelector').offset().top &&  $('#swissSelector').hasClass( "remove" )) {
            setTimeout(function(){
                $('#swissSelector > #swissSlide').removeClass('swissSelectedNot');
                $('#swissSelector > #swissSlide').addClass('swissSelected');
                if($(window).width() < 992) {
                    $('#swissSlide').find('div.selectorMobileButton').addClass('selectorMobileButtonShow');
                }
                
                $('#swissSelector').removeClass('remove');
                setTimeout(function(){
                    $('.worldmap').removeClass('activemap');
                    $('#worldmapeurope').addClass('activemap');
                    $('#sanosil').addClass('contAnima');
                    $('#sanosil').addClass('activeContinent');
                    $('#sanosil > .ringHolder > .circle').addClass('circleAnima');
                    $('#sanosil > .ringHolder > .ring1').addClass('ring1Anima');
                    $('#sanosil > .ringHolder > .ring2').addClass('ring2Anima');
                    $('#sanosil > .arrow_box').addClass('dialogAnima');
                },500);
            }, 250);
        }
    }
}


function handleTitle() {
    var pageHeader = jQuery('#pageHeader').height() / 2;
    var pageTitleHolder = jQuery('#pageTitleHolder').outerHeight() / 2;
    jQuery('#pageTitleHolder').css('top', pageHeader - pageTitleHolder +'px').addClass('pageTitleHolderShow');
}

function mapMasterFunction() {
var windowWidth = $(document).width();

//=========================================================

    var childPos3 = $('#mappath3').offset();
    var parentPos3 = $('#mappath3').parent().offset();
    $("#europe").css({'top': childPos3.top - parentPos3.top - 20 + 'px', 'left' : childPos3.left - parentPos3.left - 20 + "px"});
    $("#sanosil").css({'top': childPos3.top - parentPos3.top - 20 + 'px', 'left' : childPos3.left - parentPos3.left - 20 + "px"});
//=========================================================

    var childPos6 = $('#mappath6').offset();
    var parentPos6 = $('#mappath6').parent().offset();
    $("#southamerica").css({'top': childPos6.top - parentPos6.top + 'px', 'left' : childPos6.left - parentPos6.left + "px"});

//=========================================================

    var childPos2 = $('#mappath2').offset();
    var parentPos2 = $('#mappath2').parent().offset();
    $("#asia").css({'top': childPos2.top - parentPos2.top  + 'px', 'left' : childPos2.left - parentPos2.left + 13 + "px"});

//=========================================================

    var childPos5 = $('#mappath5').offset();
    var parentPos5 = $('#mappath5').parent().offset();
    $("#northamerica").css({'top': childPos5.top - parentPos5.top + 5 + 'px', 'left' : childPos5.left - parentPos5.left + 5 + "px"});

//=========================================================

    var childPos7 = $('#mappath7').offset();
    var parentPos7 = $('#mappath7').parent().offset();
    $("#middleeast").css({'top': childPos7.top - parentPos7.top + 'px', 'left' : childPos7.left - parentPos7.left + "px"});

//=========================================================

    var childPos4 = $('#mappath4').offset();
    var parentPos4 = $('#mappath4').parent().offset();
    $("#africa").css({'top': childPos4.top - parentPos4.top - 20 + 'px', 'left' : childPos4.left - parentPos4.left + "px"});

//=========================================================

    var childPos1 = $('#mappath1').offset();
    var parentPos1 = $('#mappath1').parent().offset();
    $("#oceania").css({'top': childPos1.top - parentPos1.top - 20 + 'px', 'left' : childPos1.left - parentPos1.left + 18 + "px"});

//=========================================================

    $('.mapSelectors').on('click', function(){
        if(windowWidth > 992) {
            $('.mapSelectors').removeClass('selectedContinent');
            $('#swissSlide').removeClass('swissSelected');
            $('#sanosil').removeClass('contAnima');
            $('#sanosil > .ringHolder > .circle').removeClass('circleAnima');
            $('#sanosil > .ringHolder > .ring1').removeClass('ring1Anima');
            $('#sanosil > .ringHolder > .ring2').removeClass('ring2Anima');
            $('#sanosil > .arrow_box').removeClass('dialogAnima');
            $(this).addClass('selectedContinent');
            var selectData = $(this).data('select');
            $('.worldmap').removeClass('activemap');
            $('#worldmap'+selectData).addClass('activemap');
            $('#'+selectData).addClass('contAnima');
            $('#'+selectData).addClass('activeContinent');
            // $('#'+selectData+' > .ringHolder > .circle').addClass('circleAnima');
            // $('#'+selectData+' > .ringHolder > .ring1').addClass('ring1Anima');
            // $('#'+selectData+' > .ringHolder > .ring2').addClass('ring2Anima');
            $('#'+selectData+' > .arrow_box').addClass('dialogAnima');
            $('.mapSelectors').each(function(){
                if ($(this).data('select') != selectData) {
                    var eachData = $(this).data('select');
                    $('#'+eachData).removeClass('contAnima');
                    $('#'+eachData).removeClass('activeContinent');
                    // $('#'+eachData+' > .ringHolder > .circle').removeClass('circleAnima');
                    // $('#'+eachData+' > .ringHolder > .ring1').removeClass('ring1Anima');
                    // $('#'+eachData+' > .ringHolder > .ring2').removeClass('ring2Anima');
                    $('#'+eachData+' > .arrow_box').removeClass('dialogAnima');
                }
                
            });
        } else if (windowWidth < 993) {
            $('.selectorMobileButton').removeClass('selectorMobileButtonShow');
            $(this).find('div.selectorMobileButton').addClass('selectorMobileButtonShow');
            $('.mapSelectors').removeClass('selectedContinent');
            $('#swissSlide').removeClass('swissSelected');
            $('#sanosil').removeClass('contAnima');
            $('#sanosil > .ringHolder > .circle').removeClass('circleAnima');
            $('#sanosil > .ringHolder > .ring1').removeClass('ring1Anima');
            $('#sanosil > .ringHolder > .ring2').removeClass('ring2Anima');
            $('#sanosil > .arrow_box').removeClass('dialogAnima');
            $(this).addClass('selectedContinent');
            var selectData = $(this).data('select');
            $('.worldmap').removeClass('activemap');
            $('#worldmap'+selectData).addClass('activemap');
            $('#'+selectData).addClass('contAnima');
            $('#'+selectData).addClass('activeContinent');
            // $('#'+selectData+' > .ringHolder > .circle').addClass('circleAnima');
            // $('#'+selectData+' > .ringHolder > .ring1').addClass('ring1Anima');
            // $('#'+selectData+' > .ringHolder > .ring2').addClass('ring2Anima');
            $('#'+selectData+' > .arrow_box').addClass('dialogAnima');
            $('.mapSelectors').each(function(){
                if ($(this).data('select') != selectData) {
                    var eachData = $(this).data('select');
                    $('#'+eachData).removeClass('contAnima');
                    $('#'+eachData).removeClass('activeContinent');
                    // $('#'+eachData+' > .ringHolder > .circle').removeClass('circleAnima');
                    // $('#'+eachData+' > .ringHolder > .ring1').removeClass('ring1Anima');
                    // $('#'+eachData+' > .ringHolder > .ring2').removeClass('ring2Anima');
                    $('#'+eachData+' > .arrow_box').removeClass('dialogAnima');
                }
                
            });
        } else if (windowWidth < 769) {
            $('.selectorMobileButton').removeClass('selectorMobileButtonShow');
            $(this).find('div.selectorMobileButton').addClass('selectorMobileButtonShow');
            $('.mapSelectors').removeClass('selectedContinent');
            $('#swissSlide').removeClass('swissSelected');
            // $('#sanosil').removeClass('contAnima');
            // $('#sanosil > .ringHolder > .circle').removeClass('circleAnima');
            // $('#sanosil > .ringHolder > .ring1').removeClass('ring1Anima');
            // $('#sanosil > .ringHolder > .ring2').removeClass('ring2Anima');
            // $('#sanosil > .arrow_box').removeClass('dialogAnima');
            $(this).addClass('selectedContinent');
            // var selectData = $(this).data('select');
            // $('.worldmap').removeClass('activemap');
            // $('#worldmap'+selectData).addClass('activemap');
            // $('#'+selectData).addClass('contAnima');
            // $('#'+selectData).addClass('activeContinent');
            // $('#'+selectData+' > .ringHolder > .circle').addClass('circleAnima');
            // $('#'+selectData+' > .ringHolder > .ring1').addClass('ring1Anima');
            // $('#'+selectData+' > .ringHolder > .ring2').addClass('ring2Anima');
            // $('#'+selectData+' > .arrow_box').addClass('dialogAnima');
            // $('.mapSelectors').each(function(){
            //     if ($(this).data('select') != selectData) {
            //         var eachData = $(this).data('select');
            //         $('#'+eachData).removeClass('contAnima');
            //         $('#'+eachData).removeClass('activeContinent');
                    // $('#'+eachData+' > .ringHolder > .circle').removeClass('circleAnima');
                    // $('#'+eachData+' > .ringHolder > .ring1').removeClass('ring1Anima');
                    // $('#'+eachData+' > .ringHolder > .ring2').removeClass('ring2Anima');
                    // $('#'+eachData+' > .arrow_box').removeClass('dialogAnima');
                // }
                
            // });
        }
    });

    $('#swissSlide').on('click', function(){
        if(windowWidth > 992) {
            $('.mapSelectors').removeClass('selectedContinent');
            $(this).addClass('swissSelected');
            var selectData = $(this).parent().data('select');
            $('#'+selectData).addClass('contAnima');
            $('.worldmap').removeClass('activemap');
            $('#worldmapeurope').addClass('activemap');
            $('#'+selectData).addClass('activeContinent');
            $('#'+selectData+' > .ringHolder > .circle').addClass('circleAnima');
            $('#'+selectData+' > .ringHolder > .ring1').addClass('ring1Anima');
            $('#'+selectData+' > .ringHolder > .ring2').addClass('ring2Anima');
            $('#'+selectData+' > .arrow_box').addClass('dialogAnima');
            $('.mapSelectors').each(function(){
                if ($(this).data('select') != selectData) {
                    var eachData = $(this).data('select');
                    $('#'+eachData).removeClass('contAnima');
                    $('#'+eachData).removeClass('activeContinent');
                    // $('#'+eachData+' > .ringHolder > .circle').removeClass('circleAnima');
                    // $('#'+eachData+' > .ringHolder > .ring1').removeClass('ring1Anima');
                    // $('#'+eachData+' > .ringHolder > .ring2').removeClass('ring2Anima');
                    $('#'+eachData+' > .arrow_box').removeClass('dialogAnima');
                }
                
            });
        } else if (windowWidth < 992) {
            $('.selectorMobileButton').removeClass('selectorMobileButtonShow');
            $(this).find('div.selectorMobileButton').addClass('selectorMobileButtonShow');
            $('.mapSelectors').removeClass('selectedContinent');
            $(this).addClass('swissSelected');
            var selectData = $(this).parent().data('select');
            $('#'+selectData).addClass('contAnima');
            $('.worldmap').removeClass('activemap');
            $('#worldmapeurope').addClass('activemap');
            $('#'+selectData).addClass('activeContinent');
            // $('#'+selectData+' > .ringHolder > .circle').addClass('circleAnima');
            // $('#'+selectData+' > .ringHolder > .ring1').addClass('ring1Anima');
            // $('#'+selectData+' > .ringHolder > .ring2').addClass('ring2Anima');
            $('#'+selectData+' > .arrow_box').addClass('dialogAnima');
            $('.mapSelectors').each(function(){
                if ($(this).data('select') != selectData) {
                    var eachData = $(this).data('select');
                    $('#'+eachData).removeClass('contAnima');
                    $('#'+eachData).removeClass('activeContinent');
                    // $('#'+eachData+' > .ringHolder > .circle').removeClass('circleAnima');
                    // $('#'+eachData+' > .ringHolder > .ring1').removeClass('ring1Anima');
                    // $('#'+eachData+' > .ringHolder > .ring2').removeClass('ring2Anima');
                    $('#'+eachData+' > .arrow_box').removeClass('dialogAnima');
                }
                
            });
        } else if (windowWidth < 769) {
            $('.selectorMobileButton').removeClass('selectorMobileButtonShow');
            $(this).find('div.selectorMobileButton').addClass('selectorMobileButtonShow');
            $('.mapSelectors').removeClass('selectedContinent');
            $(this).addClass('swissSelected');
            // var selectData = $(this).parent().data('select');
            // $('#'+selectData).addClass('contAnima');
            // $('.worldmap').removeClass('activemap');
            // $('#worldmapeurope').addClass('activemap');
            // $('#'+selectData).addClass('activeContinent');
            // $('#'+selectData+' > .ringHolder > .circle').addClass('circleAnima');
            // $('#'+selectData+' > .ringHolder > .ring1').addClass('ring1Anima');
            // $('#'+selectData+' > .ringHolder > .ring2').addClass('ring2Anima');
            // $('#'+selectData+' > .arrow_box').addClass('dialogAnima');
            // $('.mapSelectors').each(function(){
            //     if ($(this).data('select') != selectData) {
            //         var eachData = $(this).data('select');
            //         $('#'+eachData).removeClass('contAnima');
            //         $('#'+eachData).removeClass('activeContinent');
            //         $('#'+eachData+' > .ringHolder > .circle').removeClass('circleAnima');
            //         $('#'+eachData+' > .ringHolder > .ring1').removeClass('ring1Anima');
            //         $('#'+eachData+' > .ringHolder > .ring2').removeClass('ring2Anima');
            //         $('#'+eachData+' > .arrow_box').removeClass('dialogAnima');
            //     }
                
            // });
        }
    });

    $('#distributor .paths').on('click', function(){
        if(windowWidth > 992) {
            var selectContient = $(this).data('continent');
            // console.log(selectContient);
            $('#sanosil').removeClass('contAnima');
            $('#sanosil > .ringHolder > .circle').removeClass('circleAnima');
            $('#sanosil > .ringHolder > .ring1').removeClass('ring1Anima');
            $('#sanosil > .ringHolder > .ring2').removeClass('ring2Anima');
            $('#sanosil > .arrow_box').removeClass('dialogAnima');
            $('.mapSelectors').removeClass('selectedContinent');
            $('#swissSlide').removeClass('swissSelected');
            $('#selector'+selectContient).addClass('selectedContinent');
            $('.worldmap').removeClass('activemap');
            $('#worldmap'+selectContient).addClass('activemap');
            $('#sanosil').removeClass('activeContinent');
            $('#'+selectContient).addClass('contAnima');
            $('#'+selectContient).addClass('activeContinent');
            $('#'+selectContient+' > .ringHolder > .circle').addClass('circleAnima');
            $('#'+selectContient+' > .ringHolder > .ring1').addClass('ring1Anima');
            $('#'+selectContient+' > .ringHolder > .ring2').addClass('ring2Anima');
            $('#'+selectContient+' > .arrow_box').addClass('dialogAnima');
                $('.mapSelectors').each(function(){
                    if ($(this).data('select') != selectContient) {
                        var eachData = $(this).data('select');
                        $('#'+eachData).removeClass('contAnima');
                        $('#'+eachData).removeClass('activeContinent');
                        $('#'+eachData+' > .ringHolder > .circle').removeClass('circleAnima');
                        $('#'+eachData+' > .ringHolder > .ring1').removeClass('ring1Anima');
                        $('#'+eachData+' > .ringHolder > .ring2').removeClass('ring2Anima');
                        $('#'+eachData+' > .arrow_box').removeClass('dialogAnima');
                    }
                    
                });
        }
    });

}


function moreButtonSingle() {
    if(jQuery(window).width() > 992 && $('#morebutton').is(':visible')) {
            var overflowHeight = jQuery('.overflowWrapper').height();
            var imageHeight = jQuery('#single_image_wrapper').height();
            var titleHeight = jQuery('.content .bigTitle').outerHeight(true);
            var contentWrapper = imageHeight - titleHeight - 69;
            
            jQuery('.contentWrapper').css('max-height', contentWrapper + 'px');
            jQuery('#morebutton').attr('data-height', overflowHeight);

            jQuery('#morebutton').on('click',function(){
                var dataAttr = jQuery(this).data('height');
                jQuery(this).siblings('.contentWrapper').css('max-height', dataAttr + 'px');
                jQuery(this).siblings('.contentWrapper').find('.contentGradient').fadeOut();
                jQuery(this).fadeOut();
            });
    }  else {
        jQuery('.contentWrapper').css('max-height', '');
    }
}

// $(window).resize( function() {
//     if( !$('body').hasClass( 'archive' ) || $(window).width() > 768 ) {
//         $('.load_fancy').css( 'margin-top', ($('.prissuuholder .h_iframe').height() - $('.load_fancy').height() ) / 2 );
//     } else {
//         $('.load_fancy').css( 'margin-top', 0 );
//     }
// });

$(document).ready(function(){

    jQuery('#search_form_elem').on('click', function(e){
        if(jQuery(this).hasClass('active')) {
            jQuery(this).removeClass('active');
            jQuery('#search_form_wrapper').removeClass('active');
        } else {
            jQuery(this).addClass('active');
            jQuery('#search_form_wrapper').addClass('active');
        }
        e.stopPropagation();
    });

    jQuery('#search_form_wrapper').on('click', function(e){
        e.stopPropagation();
    });

    jQuery('body').on('click', function(){
        if(jQuery('#search_form_wrapper').hasClass('active')) {
            jQuery('#search_form_elem').removeClass('active');
            jQuery('#search_form_wrapper').removeClass('active');
        }
    });
    
    // alert($(window).width());
    // Initialise slick slider for home page

    $('.pageSlider').slick({
        autoplay: true,
        autoplaySpeed: 8000,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
    });

    $('.SinglepageSlider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        // dots: true,
        pauseOnHover: true,
          responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    });


    // Add clear fix class to mainmenu
    $('#MainNav .menu').addClass('clearfix');
    

    $('#footerToTop').on('click', function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });

    // // Elements to inject
    // var mySVGsToInject = document.querySelectorAll('img.inject-me');
    
    // // Do the injection
    // SVGInjector(mySVGsToInject);

    $('#modalDropdowns select').selectric();

    $('#modalDropdowns select').each(function(){
        $(this).parent().siblings('.selectric').attr('id',$(this).attr('id')+'-select');
        $(this).parent().siblings('.selectric-items').attr('id',$(this).attr('id')+'-items');
    });

    if ($('#region-items > .selectric-scroll > ul > li[data-index="0"]').hasClass('selected')) {
        $('#regionCountry').attr("disabled", "disabled").selectric('refresh');
    }

    $('#nav_burger').click(function(){
        $(this).toggleClass('open');
        $('#MobileNav').toggleClass('openMobileNav');
    });

    lexoML_stuff();

    jQuery('p').filter(function() {
        return jQuery.trim(jQuery(this).text()) === '' && jQuery(this).children().length == 0
    }).remove();

}); // DOCUMENT READY

$(window).load(function(){
    jQuery('p').filter(function() {
        return jQuery.trim(jQuery(this).text()) === '' && jQuery(this).children().length == 0
    }).remove();
    // if( !$('body').hasClass( 'term-55' ) && $(window).width() > 768 ) {
    //     $('.load_fancy').css( 'margin-top', ($('.prissuuholder .h_iframe').height() - $('.load_fancy').height() ) / 2 );
    // } else {
    //     $('.load_fancy').css( 'margin-top', 0 );
    // }
    $('#mapHolder').addClass('showMapOnLoad');

    titleScrollAnim();
    menuShop();
    handleTitle();
    moreButtonSingle();

    $(".customScroll").mCustomScrollbar({
        axis:"y",
        theme:"dark"
    });

    $('#homeSliderHolder').animate({ opacity: 0.99 });

    if($(window).width() < 992) {
        $("#modalWorkSpace").mCustomScrollbar({
            axis:"y",
            theme:"dark"
        });
    } else if ($(window).width() > 992) {
        $(".customScroll").mCustomScrollbar({
            axis:"y",
            theme:"dark"
        });
    }

if($('#distributor').is(':visible')) {
//========================================================= <- MAP STUFF STARTS HERE
mapMasterFunction();

}
//========================================================= <- MAP STUFF ENDS HERE

}); // WINDOW LOAD

$(window).resize(function(){
    menuShop();
    moreButtonSingle();

if($('#distributor').is(':visible')) {
mapMasterFunction();

}

    if($(window).width() < 992) {
        $(".customScroll").mCustomScrollbar("destroy");
        $("#modalWorkSpace").mCustomScrollbar({
            axis:"y",
            theme:"dark"
        });
    } else if ($(window).width() > 992) {
        $("#modalWorkSpace").mCustomScrollbar("destroy");
        $(".customScroll").mCustomScrollbar({
            axis:"y",
            theme:"dark"
        });
    }

}); // WINDOW RESIZE

$(document).scroll(function() {
    titleScrollAnim();
}); // DOCUMENT SCROLL