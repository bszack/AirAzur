<div id="contenu">
    <?php
    foreach($lesVols as $unVol) { ?>
    Vol : <?php echo $unVol['numero'] ;?></br>
    Départ : <?php echo $unVol['libelle'];?> - <?php echo $unVol['ville'];?> </br>
    Arrivée : <?php echo $unVol['ville'];?> - <?php echo $unVol['libelle'];?> </br>
    Prix : <?php echo $unVol['prix'];?></br>
    Places : <?php echo $unVol['places'];?></br>
    <?php echo '<a href="index.php?action=formReservation&numero='.$unVol['numero'].'">Réserver</a></br></br>';
}
    ?>
</div>
