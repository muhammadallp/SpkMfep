 $(window).load(function(){
     $('body').magnificPopup({
            type: 'image',
            delegate: 'a.mfp-gallery',
            fixedContentPos: true,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: true,
            removalDelay: 0,
            mainClass: 'mfp-fade',
            gallery:{enabled:true},
            callbacks: {
                buildControls: function() {
                    console.log('inside'); this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
                }
            }
        });

        $('.mfp-image').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-fade',
            image: {
                verticalFit: true
            }
        });
        
        $('.slider').fractionSlider({
            'fullWidth':            true,
            'controls':             true,
            'responsive':           true,
            'dimensions':           "1920,450",
            'timeout' :             5000,
            'increase':             true,
            'pauseOnHover':         true,
            'slideEndAnimation':    false,
            'autoChange':           true
        });

        //boton up
    var btnUp = $('<div/>', {'class':'btntoTop'});
    btnUp.appendTo('body');
    $(document)
        .on('click', '.btntoTop', function() {
            $('html, body').animate({
                scrollTop: 0
            }, 700);
        });

    $(window)
        .on('scroll', function() {
            if ($(this).scrollTop() > 200)
                $('.btntoTop').addClass('active');
            else
                $('.btntoTop').removeClass('active');
        });
    });
    // WOW Animation
    new WOW().init();

    
