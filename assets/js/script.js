
  console.log("yo");

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems, null);
  });
// sidenav Js Vf
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, null);
  });



  // Review Modal start ---------------------------------------------------------

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });

  var instance = M.Modal.getInstance(elem);

   // Review Modal end ---------------------------------------------------------
