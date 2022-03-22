<?

use app\models\mgcms\db\Project;

$projects = Project::find()->all();


?>

<section class="Map">
    <div class="animatedParent">
        <div class="Map__info">
            <div class="Map__info__icon Map__info__icon--active"></div>
            <div class="Map__info__description"><?= Yii::t('db', 'In progress / Planned') ?></div>
            <div class="Map__info__icon Map__info__icon--inactive"></div>
            <div class="Map__info__description"><?= Yii::t('db', 'Ended') ?></div>
            <div class="Map__info__icon Map__info__icon--ended"></div>
            <div class="Map__info__description"><?= Yii::t('db', 'Ended bprw') ?></div>
        </div>
        <div id="map" class="Contact__map fadeIn animated"></div>
    </div>
</section>

<script>
    const locations = [];
    <?foreach ($projects as $project):?>
    locations.push({
        status: '<?= $project->status?>',
        name: "<?=trim($project->name)?>",
        locatioin: "<?=$project->localization?>",
        investition: "<?=$project->investition_time?>",
        offering: "<?=$project->percentage?>%",
        more: "<?= Yii::t('db', 'Details of investition'); ?>",
        latitude: "<?=$project->gps_lat?>",
        longitude: "<?=$project->gps_long?>",
        link: "<?=$project->getLinkUrl()?>"
    });
    <?endforeach;?>
    var mapScriptLoaded = 0;
    window.addEventListener('DOMContentLoaded', (event) => {
        mapScriptLoaded++;
    })
    function initMapScript(){
        mapScriptLoaded++;
        if(mapScriptLoaded == 3){
            initMap();
        }

    }
</script>

<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeGtxbtJfB88Fgff3N_um_SjNBNAROskU" onload="initMapScript()"></script>
<script async src="https://cdn.rawgit.com/googlemaps/js-marker-clusterer/gh-pages/src/markerclusterer.js" onload="initMapScript()"></script>
