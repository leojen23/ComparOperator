

<?php for ($i=0; $i < 6 ; $i++):?>

    <div class="col s12 m8">

        <div class="card">
    
            <div class="card horizontal z-depth-4 card-operator">
                
                <div class="card-image">
                    <img src="https://ph-files.imgix.net/aae4b5bd-f69b-43ba-8d5b-10d5bf79c32f.gif?auto=format&auto=compress&codec=mozjpeg&cs=strip&w=120&h=120&fit=crop">
                </div>


                <div class="card-stacked">
                    <div class="card-content">


                        <div class="card-content-header">
                            <span class="card-title card-operator">EasyJet</span>
                            <span class="card-span">Prix :190</span>
                        </div>
                        

                        <div class="card-buttons-container">
                            <div class="star-grading">
                                <i class="small material-icons">star_border</i>
                                <i class="small material-icons">star_border</i>
                                <i class="small material-icons">star_border</i>
                                <i class="small material-icons">star_border</i>
                                <i class="small material-icons">star_border</i>
                            </div>
                            <span class="new badge" data-badge-caption="Premium"></span>
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

<?php endfor;?>