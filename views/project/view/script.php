<?
use app\models\mgcms\db\Project;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model Project */

?>

<script>
  var map;

  function initMap() {
      var myLatLng = {lat: <?= $model->gps_lat ?>, lng: <?= $model->gps_long ?>};
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


  function openCalculator() {
      $.magnificPopup.open({
          items: {
              src: "#Calculator"
          }
      });
  }


  window.addEventListener('DOMContentLoaded', (event) => {


      $('#Calculator').on('change keyup', 'input:not(.disabled)', function (e) {

          data = {};

          console.log(e, this);

          if (e.target.name == 'capital') {
              data.capital = $(this).val();
          } else if (e.target.name == 'capital_btc') {
              data.capital_btc = $(this).val();
          } else if (e.target.name == 'capital_eth') {
              data.capital_eth = $(this).val();
          }

          data.percentage = $('#percentage').val();
          data.investition_time = parseInt($('#investition_time').text());
          $.ajax({
              type: "POST",
              url: "<?= \yii\helpers\Url::to(['calculator']) ?>",
              data: data,
              success: function (data) {
                  $('#capital').val(data.capital);
                  $('#capital_btc').val(data.capital_btc);
                  $('#capital_eth').val(data.capital_eth);
                  $('#income').val(data.income);
              },
              dataType: 'json'
          });
      });
  });


</script>

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeGtxbtJfB88Fgff3N_um_SjNBNAROskU&callback=initMap"
    async
    defer
></script>