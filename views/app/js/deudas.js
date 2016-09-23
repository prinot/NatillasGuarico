$('#deudas').click(function(){

  var error_icon = '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ',
      success_icon = '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ',
      process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';

  $('#ajax_deudas').removeClass('alert-danger');
  $('#ajax_deudas').removeClass('alert-warning');
  $('#ajax_deudas').addClass('alert-warning');
  $("#ajax_deudas").html(process_icon  + 'Procesando por favor espere...');
  $('#ajax_deudas').removeClass('hide');

  $.ajax({
    type : "GET",
    url : "api/deudas",
    data : $('#deudas_form').serialize(),
    success : function(json) {
      var obj = jQuery.parseJSON(json);
      if(obj.success == 1) {
        $('#ajax_deudas').html(success_icon + obj.message);
        $("#ajax_deudas").removeClass('alert-warning');
        $("#ajax_deudas").addClass('alert-success');
        setTimeout(function(){
          location.reload();
        },1000);
      } else {
        $('#ajax_deudas').html(error_icon  + obj.message);
        $("#ajax_deudas").removeClass('alert-warning');
        $("#ajax_deudas").addClass('alert-danger');
      }
    },
    error : function() {
      window.alert('#deudas ERORR');
    }
  });
});
