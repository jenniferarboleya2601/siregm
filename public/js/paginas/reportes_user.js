$(document).ready(function(){
})

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': token,
    }
})

function vaciarFormulario(){
    $('#municipio').val('').change();
    document.getElementById("frmReporte").reset();
}

function nuevo() {
    var datosact = $('#frmReporte').serialize();
    $.ajax({
        method: "POST",
        data: datosact,
        url: baseurl+"reportes/agregar",
        success:function(data){
          if (data != 0) {
                SwalLargo('Reporte Guardado','success','Su Número de Reporte es: '+data);
                document.getElementById("frmReporte").reset();
                vaciarFormulario();
          } else {
                SwalLargo('ERROR','error','ALgo salio mal en el servidor, espere unos minutos y reintentalo, si persiste el error contacte con el informático');

          }
        }
    });
    return false;
};

function actualizar() {
    var datosact = $('#frmReporte').serialize();
    $.ajax({
        method: "POST",
        data: datosact,
        url: baseurl+"reportes/actualizar",
        success:function(data){
          if (data == 1) {
                SwalCorto('Información Actualizada','success');
                setTimeout(refrescar('tabla'), 1500);
                document.getElementById("frmReporte").reset();
                $('#reporteModal').modal('hide');
                vaciarFormulario();
          } else {
                SwalLargo('ERROR','error','ALgo salio mal en el servidor, espere unos minutos y reintentalo, si persiste el error contacte con el informático');
          }
        }
    });
    return false;
};
