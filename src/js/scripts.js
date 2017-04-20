$(document).ready(function(){
  $('.le-btnRedireciona').on('click', function(){
    window.location.assign($(this).val());
  });
});