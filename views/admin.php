
<?php include "../partials/head.php"?>
<a href="../index.php" class="brand-logo center">Logo</a>
<body>

 <div class="row">


 <!-- TAB ------------------------------------------ -->
    <div class="col s12">
      <ul class="tabs">
        <li class="tab active col s4"><a href="#test1">Ajouter un Tour Opérateur</a></li>
        <li class="tab active col s4"><a  href="#test2">Statut du tour opérateur</a></li>
        <li class="tab active col s4"><a href="#test4">Ajouter une Destination</a></li>
      </ul>
    </div>





    <div id="test1" class="col s12">
        <div class="row">
          <div class="container">
            <form class="col s12">
              <div class="row">

                <div class="input-field col s12">
                  <input id="name" name="name" type="text" class="validate">
                  <label for="name">Nom</label>
                </div>
                
                <div class="input-field col s12">
                  <input id="grade" name="grade" type="text" class="validate">
                  <label for="Grade">Avis</label>
                </div>

               
               <div class = "file-field input-field col s12">
                  <div class = "btn">
                     <span>Fichier</span>
                     <input type ="file" />
                  </div>
                  
                  <div class = "file-path-wrapper"> 
                     <input class = "file-path validate" type = "text" placeholder="Logo" name="file"/>
                  </div>
               </div>

                <!-- Switch -->
              <div class="input-field col sm12">
                <div class="checkbox-container">
                  <label>
                    <input type="checkbox" name="standard" />
                    <span>Standard</span>
                  </label>
                

                  <label>
                    <input type="checkbox" name="Premium" />
                    <span>Premium</span>
                  </label>
                </div>
              </div>
            </div>


              <div class="input-field col s12">
                  <input id="link" name="link" type="text" class="validate">
                  <label for="link">site Web</label>
              </div>


              <div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
              </button>
              </div>
            
            </div>
              
              
            </form>
         </div> 
       </div>
    </div>






    <div id="test2" class="col s12">Test 2</div>
    <div id="test3" class="col s12">Test 3</div>
    
  </div>
        


  
        

    

 <!-- END of body content ------------------------------------------------------------------------------------------>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<!-- Materialize Compiled and minified JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- Link to JavaScript file-->

<script src="../assets/js/script.js"></script>

            


</body>       