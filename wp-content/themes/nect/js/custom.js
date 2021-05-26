/* 

1. Add your custom JavaScript code below
2. Place the this code in your template:

  

*/

(function($){
// if ($(window).width() > 992) {
    $(window).scroll(function(){  
        if ($(this).scrollTop() > 40) {
           $('.nav-bar').addClass("nav--fixed");
           // add padding top to show content behind navbar
           $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
         }else{
           $('.nav-bar').removeClass("nav--fixed");
            // remove padding top from body
           $('body').css('padding-top', '0');
         }   
     });
 // };

//  Board Member Section
const desc = $('.boardMember');
const firstBio = desc[0].firstElementChild;
// $('.boardMemberDetail').appendChild(firstBio);
document.getElementById('bodMember').innerHTML = firstBio.outerHTML;

let active = $('.boardMember')[0];
$(active).addClass("current");


desc.on('click', function() {  
    $('.boardMember').removeClass( "current" );
    $(this).toggleClass( "current" ); 
    const l = $(this).find('.boardMemberDetail__desc')[0];

    document.getElementById('bodMember').innerHTML = l.outerHTML;   
}); 


// Video Section
const link = $('.video-url-link');
// console.log(link);
const newLink = link[0].innerText;
const frame = document.getElementById("video-frame").src = newLink;
const frameTitle = document.getElementById("video-frame").title = newLink;

const activeContainer = $('.video-overlay-container');
const act = activeContainer[0];
$(act).addClass("current");

const content = $('.video-content');
document.getElementById('content-block').innerHTML = content[0].outerHTML;


const vidContainer = $('.video-content-container');
vidContainer.click(function() {
   $('.video-overlay-container').removeClass("current");
    const url = $(this).find('p')[0].innerText;
    const activeLink = $(this).find('.video-overlay-container')[0];
    $(activeLink).toggleClass("current");
    const frame = document.getElementById("video-frame").src = url;
    const frameTitle = document.getElementById("video-frame").title = url;
    // Content display
    const singleContent = $(this).find('.video-content')[0];
    document.getElementById('content-block').innerHTML = singleContent.outerHTML;
});


// $(window).on('load', function () {
//     $('html, body').animate({
//         scrollTop: $("#cta-section").offset().top
//     }, 2000);
// });

// scroll to CTA
$(".subscribe-btn").click(function() {
       console.log('hello');
    $(window).on('load', function () {
        $('html, body').animate({
            scrollTop: $("#cta-section").offset().top
        }, 2000);
    });
       
});

})(jQuery);