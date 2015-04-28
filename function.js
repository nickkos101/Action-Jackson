$(document).ready(function(){

  function scrollY() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }



    //Initialize the client carousel
    setTimeout(function(){
      jQuery('.muscled').show("slide", {direction: "right" }, 1000 );
    },3000);

    jQuery('header.resp-menu i').click(function(){
      jQuery('header.resp-menu nav').slideToggle();
    });

    jQuery('.toggle-menu').click(function(){

      if (jQuery('.story-menu').css('display') === 'inline-block') {
        jQuery('.toggle-menu').text('STORY');
        jQuery('.story-menu').css('display', 'none');
        jQuery('.nav-menu').css('display', 'inline-block');
      }
      else {
       jQuery('.toggle-menu').text('PAGES');
       jQuery('.nav-menu').css('display', 'none');
       jQuery('.story-menu').css('display', 'inline-block');
     }
   });

    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

    //Random ways to say jacked

    var jackedList = [
    'Beef Wagon',
    'Yoked Chicken',
    'Eifel Power',
    'Zeus Laser',
    'Master Beef',
    'MASSachusets',
    'Ripped',
    'Diesel',
    'Corn Fed',
    'Cut',
    'Buff',
    'Whopper Sr.',
    'Pump Nectar',
    'Thunder Mammal',
    'Posseidein',
    'World War III',
    ];

    jQuery('.randJack').text(jackedList[Math.floor((Math.random() * 17) + 1)]);


    //Fixed Sidebar Stuff
    function fixSidebar() {
      var sidebarWidth = jQuery('.sidebar').parent().width();
      var sidebarWidth = sidebarWidth - 50;
      jQuery('.sidebar').css('position', 'fixed');
      jQuery('.sidebar').css('width', sidebarWidth);
    }

    fixSidebar();

    jQuery(window).resize(function(){
      fixSidebar();
    });




  });