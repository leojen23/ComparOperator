<?php for ($i=0; $i < 6 ; $i++):?>

    <div class="col s12 m6">
        <div class="card horizontal z-depth-4">
            
            <div class="card-image">
                <img src="../assets/images/japan1.jpg">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <div class="card-content-header">
                        <span class="card-title">EasyJet</span>
                        <span class="card-span">195 euros</span>
                    </div>
                    

                    <span class="new badge" data-badge-caption="Premium"></span>
                    <div class="card-action">
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">REVIEWS</a>
                    </div>

                     <!-- Modal Structure -->
                     <?php include "modal.php"?>
 
                </div>
                   
            </div>
        </div>
    </div>

<?php endfor;?>