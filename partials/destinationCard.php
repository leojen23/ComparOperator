<?php 



?>

<div class="container"> 
    <div class="row">
        <?php foreach($destinationsCardInfos as $card):?>

            <div class="card col s12 m4 offset-m1">
                
                <div class="card-image small">
                    <img id="imgcard" src="../assets/images/cards/<?=$card["card_pic"]?>">
                                           
                    <a href="./views/operators.php?destinationName=<?=$card["location"]?>" class="btn-floating btn-large pulse halfway-fab waves-effect waves-light red"><i class="material-icons">flight</i></a>
                
                </div>
                <h6 class="card-title card-destination center-align"><?=$card["location"]?></h6> 
            </div>

        <?php endforeach;?>
    </div>
    
</div> 
