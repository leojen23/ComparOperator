
<?php include "../partials/head.php"?>
<a href="../index.php" class="brand-logo center">Logo</a>
<body>
 <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s4"><a href="#test1">Ajouter un Tour Opérateur</a></li>
        <li class="tab col s4"><a  href="#test2">Statut du tour opérateur</a></li>
        <li class="tab col s4"><a href="#test4">Ajouter une Destination</a></li>
        
      </ul>
    </div>
    <div id="test1" class="col s12">
        <div class="row">
        <div class="container">
        <form class="col s12">
        <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          This is an inline input field:
          <div class="input-field inline">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
          </div>
        </div>
        </div>
      </div>
    </form>
  </div> 
    </div>
    <div id="test2" class="col s12">Test 2</div>
    <div id="test3" class="col s12">Test 3</div>
    <div id="test4" class="col s12">Test 4</div>
  </div>
        
<div class="row">
    <div class="col s12">
        
    </div>
   
</div>

  
        

    

 <!-- END of body content ------------------------------------------------------------------------------------------>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<!-- Materialize Compiled and minified JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- Link to JavaScript file-->

<script src="../assets/js/script.js"></script>

            


</body>       