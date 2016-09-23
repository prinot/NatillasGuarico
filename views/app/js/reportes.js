$('#reportes').click(function(){

  var error_icon = '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ',
      success_icon = '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ',
      process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';

  $('#ajax_reportes').removeClass('alert-danger');
  $('#ajax_reportes').removeClass('alert-warning');
  $('#ajax_reportes').addClass('alert-warning');
  $("#ajax_reportes").html(process_icon  + 'Procesando por favor espere...');
  $('#ajax_reportes').removeClass('hide');

  $.ajax({
    type : "GET",
    url : "api/reportes",
    data : $('#reportes_form').serialize(),
    success : function(json) {
      var obj = jQuery.parseJSON(json);
      if(obj.success == 1) {
        $('#ajax_reportes').html(success_icon + obj.message);
        $("#ajax_reportes").removeClass('alert-warning');
        $("#ajax_reportes").addClass('alert-success');
        setTimeout(function(){
          location.reload();
        },1000);
      } else {
        $('#ajax_reportes').html(error_icon  + obj.message);
        $("#ajax_reportes").removeClass('alert-warning');
        $("#ajax_reportes").addClass('alert-danger');
      }
    },
    error : function() {
      window.alert('#reportes ERORR');
    }
  });
});
