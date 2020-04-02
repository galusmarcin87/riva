<section class="Map">
    <div class="animatedParent">
        <div class="Map__info">
            <div class="Map__info__icon Map__info__icon--active"></div>
            <div class="Map__info__description">W trakcie / Planowane</div>
            <div class="Map__info__icon Map__info__icon--inactive"></div>
            <div class="Map__info__description">Zakończone</div>
        </div>
        <div id="map" class="Contact__map fadeIn animated"></div>
    </div>
</section>

<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        initMap();
    })
</script>

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeGtxbtJfB88Fgff3N_um_SjNBNAROskU"
></script>