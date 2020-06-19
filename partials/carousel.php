<?php $carouselPics = $DestinationsManager->getCarouselPics()?>

  <div class="carousel carousel-slider">
    <?php foreach($carouselPics as $carouselPic):?>
    
      <a class="carousel-item" href="#one!"><img src="../assets/images/parallax/<?=$carouselPic->getParallax_1()?>"></a>
   
    <?php endforeach;?>

  </div>
      