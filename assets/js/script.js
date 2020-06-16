
// Parallax start--------------------------------------------------------------------

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems, null);
  });

// Parallax end--------------------------------------------------------------------


// Sidenav start--------------------------------------------------------------------

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, null);
  });


  $(document).ready(function(){
    $('.carousel').carousel();

    setInterval(function(){
    $('.carousel').carousel('next');
  
    },4000);

  });

// Sidenav end--------------------------------------------------------------------


  // Review Modal start ---------------------------------------------------------
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, null);
  });

  var instance = M.Modal.getInstance(elem);


   // Review Modal end ---------------------------------------------------------

