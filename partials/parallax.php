<div class="parallax-container valign-wrapper">

    <div>
        <h1 class="destination-heading"><?= $destinationDisplay->getLocation()?></h1>
    </div>

    <div class="parallax">
        <img src="../assets/images/parallax/<?= $destinationDisplay->getParallax_1()?>">
    </div>
    
</div>

<div class="section section-parallax">
    

    <div class="container">
        <h2 class="header operatortitle center"><?=$destinationDisplay->getLocation()?></h2>
        <p class="grey-text text-darken-3 lighten-3 center">Découvrez la liste des Tour Opérators proposant des voyages au <?= $destinationDisplay->getLocation()?></p>
    </div>

    <div class="container">
        <!-- <div class="row"> -->
            <?php include "../partials/operatorCard.php"?>
        <!-- </div> -->
    </div>

<div class="parallax-container">
    <div class="parallax"><img src="../assets/images/parallax/<?= $destinationDisplay->getParallax_2()?>"></div>
</div>

