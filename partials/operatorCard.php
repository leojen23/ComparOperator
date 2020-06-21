

<?php foreach($offers as $offer):
    ?>

    <?php switch ($offer->getIs_premium())
      {
        case 0:
          
          $link = "";
        break;
        case 1:
          
          $link = "hide";
        break;
      }?>

<div class="container col s12 ">
    <div class="card">
       
            <div class="operator-card z-depth-2">

                <div class="operator-card-logo ">
                    <img  src="../assets/images/logos/<?= $offer->getLogo()?>">
                </div>

                <div class="operator-card-content  ">

                    <div class="operator-card-content-header">
                        <h3 class="operator-card-content-header-name"><?= $offer->getName()?></h3>
                        <div class="operator-card-content-header-price">
                            <span><?= $offer->getPrice()?>€</span>
                            
                    </div>
                    </div>

                    <div class="operator-card-content-destination">
                        <span class="operator-card-content-destination-name"><?=$destinationDisplay->getLocation()?></span>
                    </div>

                    <div class="operator-card-content-footer">
                        <span class="operator-card-content-footer-grade teal-text text-darken-2"><?= $offer->getGrade()?><small>/5</small></span>
                       

                        <a href="<?= $offer->getLink()?>" class="operator-card-content-footer-link waves-effect waves-light btn card-span <?= $link?> "><i class="material-icons left">link</i>SITE OFFICIEL</a>
                    </div>
                </div>

                <div class="operator-card-btn red lighten-5">
                    <a class="btn-floating btn-large waves-effect waves-light teal modal-trigger" href="#modal2"><i class="small material-icons  ">comment</i></a>
                </div>
            </div>
            <?php include "modal.php"?> 
    </div>
    
</div>
    
    

<?php endforeach;?>


