

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
    

    <div class=" container col s12 ">

        <div class="card">
    
            <div class="card horizontal z-depth-4 card-operator">
                
                <div class="card-image operator-logo">
                    <img  src="../assets/images/logos/<?= $offer->getLogo()?>">
                </div>


                <div class="card-stacked">
                    <div class="card-content">


                        <div class="card-content-header">
                            <span class="card-title card-operator"><?= $offer->getName()?></span>
                            <span class="card-span"><?= $offer->getPrice()?> Euros</span>
                        </div>
                        
                        <div class="card-buttons-container">
                            <div class="star-grading">
                                <span><?= $offer->getGrade()?>/5</span>
                            </div>
                            
                            <!-- <span class="new badge <?= $btnColor?>" data-badge-caption=<?=$btnText?>></span> -->
                        </div>

                        <div class="card-content-header">
                       
                            <a href="<?= $offer->getLink()?>"><span class="card-span <?= $link?>"><?= $offer->getLink()?></span></a>
                        </div>
                    </div>
                </div> 

                <div class="card-action card-action-container">
                    <a class="btn-floating btn-large waves-effect waves-light teal modal-trigger" href="#modal2"><i class="small material-icons">comment</i></a>
                    
                </div>
                
                <?php include "modal.php"?> 
            </div>
        </div>
    </div>

<?php endforeach;?>