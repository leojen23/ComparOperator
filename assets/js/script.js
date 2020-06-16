
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
// carousel vf
//   document.addEventListener('DOMContentLoaded', function() {
//     var elems = document.querySelectorAll('.carousel');
//     var instances = M.Carousel.init(elems,null);
//   });


//  var instance = M.Carousel.init({
//     fullWidth: true
      
//   });
  $(document).ready(function(){
    $('.carousel').carousel();

    setInterval(function(){
    $('.carousel').carousel('next');
  
    },4000);

  });


// function for auto play carousel-slider



  // Review Modal start ---------------------------------------------------------

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });

  var instance = M.Modal.getInstance(elem);

   // Review Modal end ---------------------------------------------------------
 
