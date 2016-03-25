/**
 * Aqui se inicializan los componentes de boostrap mas genericos
 */

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

$(document).ready(function() {
			$('.producto-js').on('click', function(){

				alert("le amo mucho");
			});
});

  $(function() {
    $(".rslides").responsiveSlides();
  });



    $(document).ready(function() {

      var owl = $("#owl-demo");

      owl.owlCarousel({
          navigation : true

      });

    });
