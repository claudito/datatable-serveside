<!DOCTYPE html>
<html lang="es">
<head>
   <title>PHP - Jquery Datatables Example</title>

<!-- JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>


<!-- JS Exports -->
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>


<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">





</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<button id="boton">presionar</button>
</div>
</div>
</div>
<script>

$(document).ready(function(){



$("#boton").click(function (){


$("#modal-message").modal('show');

});  

return false;
});

</script>
</body>
</html>


<div class="modal fade" id="modal-message">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center">Mensaje</h4>
      </div>
      <div class="modal-body">
      <p> Archivo Generado con exito </p>
      <p> Ahora Necesita Guardar el archivo con la extensión .xlsx</p>
      </div>
      <div class="modal-footer">
        <button type="button"  data-dismiss="modal" class="btn btn-primary">ok</button>
      </div>
    </div>
  </div>
</div>


