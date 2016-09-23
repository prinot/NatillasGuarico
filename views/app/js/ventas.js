$('#ventas').click(function(){

  var error_icon = '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ',
      success_icon = '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ',
      process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';

  $('#ajax_ventas').removeClass('alert-danger');
  $('#ajax_ventas').removeClass('alert-warning');
  $('#ajax_ventas').addClass('alert-warning');
  $("#ajax_ventas").html(process_icon  + 'Procesando por favor espere...');
  $('#ajax_ventas').removeClass('hide');

  $.ajax({
    type : "GET",
    url : "api/ventas",
    data : $('#ventas_form').serialize(),
    success : function(json) {
      var obj = jQuery.parseJSON(json);
      if(obj.success == 1) {
        $('#ajax_ventas').html(success_icon + obj.message);
        $("#ajax_ventas").removeClass('alert-warning');
        $("#ajax_ventas").addClass('alert-success');
        setTimeout(function(){
          location.reload();
        },1000);
      } else {
        $('#ajax_ventas').html(error_icon  + obj.message);
        $("#ajax_ventas").removeClass('alert-warning');
        $("#ajax_ventas").addClass('alert-danger');
      }
    },
    error : function() {
      window.alert('#ventas ERORR');
    }
  });
});
