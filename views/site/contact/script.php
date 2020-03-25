<?
use app\components\mgcms\MgHelpers;
?>

<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeGtxbtJfB88Fgff3N_um_SjNBNAROskU&callback=initMap"
        async
        defer
></script>

<script>
    var map;

    function initMap() {
        var myLatLng = {lat: <?=MgHelpers::getSetting('contact_map_lat',false, '52.249502')?>, lng: <?=MgHelpers::getSetting('contact_map_long',false, '21.0435739')?>};
        // Create a map object and specify the DOM element for display.
        map = new google.maps.Map(document.getElementById("map"), {
            center: myLatLng,
            zoom: 15,
            scrollwheel: false,
            mapTypeControl: false,
            styles: [
                {
                    featureType: "administrative",
                    elementType: "labels.text.fill",
                    stylers: [
                        {
                            color: "#444444"
                        }
                    ]
                },
                {
                    featureType: "landscape",
                    elementType: "all",
                    stylers: [
                        {
                            color: "#f2f2f2"
                        }
                    ]
                },
                {
                    featureType: "poi",
                    elementType: "all",
                    stylers: [
                        {
                            visibility: "off"
                        }
                    ]
                },
                {
                    featureType: "road",
                    elementType: "all",
                    stylers: [
                        {
                            saturation: -100
                        },
                        {
                            lightness: 45
                        }
                    ]
                },
                {
                    featureType: "road.highway",
                    elementType: "all",
                    stylers: [
                        {
                            visibility: "simplified"
                        }
                    ]
                },
                {
                    featureType: "road.arterial",
                    elementType: "labels.icon",
                    stylers: [
                        {
                            visibility: "off"
                        }
                    ]
                },
                {
                    featureType: "transit",
                    elementType: "all",
                    stylers: [
                        {
                            visibility: "off"
                        }
                    ]
                },
                {
                    featureType: "water",
                    elementType: "all",
                    stylers: [
                        {
                            color: "#46bcec"
                        },
                        {
                            visibility: "on"
                        }
                    ]
                }
            ]
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
            map: map,
            position: myLatLng,
            title: "",
            icon: "/images/marker.png"
        });
    }
</script>