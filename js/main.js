

(function($){
    $('.carousel').carousel({ interval: 4000 })

    $(document).click(function(){
        $('.submenu-dropdown').removeClass('submenu-dropdown-active',200);
    })
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    $(".icon").click(function(){
        $(".icon").toggleClass("active");
        $(".site-nav").toggleClass("site-nav-active",500);
    })
    $(".submenu-toggle").click(function(e){
        e.preventDefault();
        e.stopPropagation();

        $(this).siblings('.submenu .submenu-dropdown').toggleClass('submenu-dropdown-active',200)
    })

    function getSectionHeight(section){
        if($(section).length){
            return $(section).offset().top+ $(section).outerHeight()-150;
        }
        return null;
       
    }

    $(window).scroll(function(){


        var about = $('#about').height();


    var windowBottom = $(window).scrollTop()+$(window).height();
    var aboutSection = getSectionHeight('.about');
    var productSection = getSectionHeight('.products');
    var tradingSection = getSectionHeight('.tradings');
    var partnerSection = getSectionHeight('.partner');

        if(aboutSection && windowBottom >= aboutSection){
            
            $('#about .bounce-content').addClass('bounce');
        }
        if(productSection && windowBottom >= productSection-150){
            $('.products .bounce-content').addClass('bounce');

        }
        if(tradingSection && windowBottom >= tradingSection){
            
            $('.tradings .bounce-content').addClass('bounce');
        }
        if(partnerSection && windowBottom >= partnerSection){
            
            $('.partner .bounce-content').addClass('bounce');
        }

    });
    

    $(document).on('click','.ileys-load-more',function(){
        var that = $(this);
         var page = $(this).data('page');
         var newpage = page+1;

         
         var ajaxurl = $(this).data('url');
         var newpage = page +1;

         var category = $(this).data('category');
         $.ajax({
             url :ajaxurl,
             type:'post',
             data:{
                 page:page,
                 category:category,
                 action:'ileys_load_more'
             },
             error:function(res){
                console.log(res);
             },
             success:function(res){
                 that.data('page',newpage);
                $('.ileys-post-container').append(res);
             }
         })
    });

    $('.brand-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:true
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            }
        }
    })
    
        $('.partner-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:true
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            }
        }
    });

    var arr = $('.yt-thumbnail').toArray();
    if(arr){
        for(var i = 0; i < arr.length; i++){
            var url = $(arr[i]).data('url');
            var youtube_video_id = url.match(/youtube\.com.*(\?v=|\/embed\/)(.{11})/).pop();
            if (youtube_video_id.length == 11) {
                var video_thumbnail = 'http://img.youtube.com/vi/'+youtube_video_id+'/0.jpg';
                $(arr[i]).attr('src',video_thumbnail);
               
            }

        }
    }

})(jQuery)