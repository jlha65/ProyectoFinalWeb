$('#menu > li').on('click', function(event){
  // primero le quitamos el estilo a la lista seleccionada
  $('.selected_nav_element').removeClass('selected_nav_element');
  // agarramos el elemento que clickeamos
  let $current_element = $(this);
  let section_name = $current_element.attr('id');

  // actualizar los estilos del elemento al que se le hizo click
  $current_element.addClass('selected_nav_element');

  // ocultamos la seccion previa y las demas
  $('section').addClass('element_hidden');

  // mostrar la seccion actual
  $('#' + section_name + '_section').removeClass('element_hidden');
});

$(".trigger_popup_fricc").on('click', function(event){
  let $current_element = $(this);
  let pet_name = $current_element.attr('id');
  $('.clase_'+pet_name).removeClass('element_hidden');
});


$('.hover_bkgr_fricc').on('click', function(event){
  $('.hover_bkgr_fricc').addClass('element_hidden');
});

$('.popupCloseButton').on('click', function(event){
  $('.hover_bkgr_fricc').addClass('element_hidden');
});