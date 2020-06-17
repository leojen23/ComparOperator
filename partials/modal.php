 
 


<!-- Modal Structure -->
<div id="modal2" class="modal">

  <div class="modal-header teal">
    <h4>Votre avis compte!</h4>
  </div>

  <div class="modal-content ">

    <?php for ($x=0; $x < 5 ; $x++):?>

    <div class="col s12 m12">
      <div class="card-panel grey lighten-5 z-depth-1">
        <div class="row valign-wrapper">
          <div class="col s12">
            <h5 class="teal-text">User</h5>
            <span class="black-text">
              This is a square image. Add the "circle" class to it to make it appear circular.
            </span>
          </div>
        </div>
      </div>
    </div>

    <?php endfor;?>

  </div>

  <div class="modal-form ">
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">mode_edit</i>
            <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
            <label for="icon_prefix2">Message</label>
          </div>
        </div>
      </form>
    </div>
  </div>
  
</div>
   