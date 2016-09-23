$('#productores').click(function(){

  var error_icon = '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ',
      success_icon = '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ',
      process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';

  $('#ajax_productores').removeClass('alert-danger');
  $('#ajax_productores').removeClass('alert-warning');
  $('#ajax_productores').addClass('alert-warning');
  $("#ajax_productores").html(process_icon  + 'Procesando por favor espere...');
  $('#ajax_productores').removeClass('hide');

  $.ajax({
    type : "GET",
    url : "api/productores",
    data : $('#productores_form').serialize(),
    success : function(json) {
      var obj = jQuery.parseJSON(json);
      if(obj.success == 1) {
        $('#ajax_productores').html(success_icon + obj.message);
        $("#ajax_productores").removeClass('alert-warning');
        $("#ajax_productores").addClass('alert-success');
        setTimeout(function(){
          location.reload();
        },1000);
      } else {
        $('#ajax_productores').html(error_icon  + obj.message);
        $("#ajax_productores").removeClass('alert-warning');
        $("#ajax_productores").addClass('alert-danger');
      }
    },
    error : function() {
      window.alert('#productores ERORR');
    }
  });
});
