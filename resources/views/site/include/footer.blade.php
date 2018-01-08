<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

<script type="text/javascript" src="{!! asset('js/site/jquery-1.11.3.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/site/jquery-migrate-1.2.1.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/site/owl.carousel.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/site/jquery.magnific-popup.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/site/jquery.easytabs.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/site/jquery.easing.1.3.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/site/modernizr.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/site/placeholders.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/site/script.js') !!}"></script>

<script>

    (function($) {
        "use strict";

        $(document).ready(function(){

            $('#wrapper').easytabs({
                animate			: true,
                updateHash		: false,
                transitionIn	:'fadeIn',
                transitionOut	:'fadeOut',
                animationSpeed	:100,
                tabActiveClass	:'active',
                tabs            :' #main-nav.tabbed > ul > li ',
                transitionInEasing: 'linear',
                transitionOutEasing: 'linear'

            });


//---------------------------------- Google map location -----------------------------------------//


            $('#wrapper').bind('easytabs:after', function() {




                var styles = [
                        {
                            stylers: [
                                { saturation: -100 }

                            ]
                        },{
                            featureType: 'road',
                            elementType: 'geometry',
                            stylers: [
                                { hue: "#74b7b0" },
                                { visibility: 'simplified' }
                            ]
                        },{
                            featureType: 'road',
                            elementType: 'labels',
                            stylers: [
                                { visibility: 'on' }
                            ]
                        }
                    ],

                    lat = -33.867487,
                    lng = 151.20699,





                    customMap = new google.maps.StyledMapType(styles,
                        {name: 'Styled Map'}),


                    mapOptions = {
                        zoom: 14,
                        scrollwheel: false,
                        disableDefaultUI: true,
                        center: new google.maps.LatLng( lat, lng ),
                        mapTypeControlOptions: {
                            mapTypeIds: [google.maps.MapTypeId.ROADMAP]
                        }
                    },
                    map = new google.maps.Map(document.getElementById('map'), mapOptions),
                    myLatlng = new google.maps.LatLng( lat, lng ),




                    marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        icon: {
                            url: 'img/marker.png',
                            scaledSize: new google.maps.Size(26, 42)
                        }
                    });





                map.mapTypes.set('map_style', customMap);
                map.setMapTypeId('map_style');








            });









//---------------------------------- End google map location -----------------------------------------//


        });

    })(jQuery);

</script>


<!-- Google analytics -->


<!-- End google analytics -->


</body>
</html>
