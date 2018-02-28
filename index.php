<!DOCTYPE html>
<html lang="es">
<head>
   <title>Reporte Server Side</title>

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

<style>
#my-example_processing{

z-index: 1;
}

</style>



</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
  

  <h2>PHP - Datatable Server Side</h2><hr>
  <div class="table-responsive">
  <table id="my-example" class="table table-condensed table-bordered">
    <thead>
      <tr class="info">
      <th> TipoDoc </th>
      <th> NumAtCard </th>
      <th> FechaEmision  </th>
      <th> DocYear </th>
      <th> DocMonth  </th>
      <th> DocMes  </th>
      <th> Canceled  </th>
      <th> VendCodActual </th>
      <th> VendNomActual </th>
      <th> CardCode  </th>
      <th> CardName  </th>
      <th> ItemCode  </th>
      <th> Dscription  </th>
      <th> Quantity  </th>
      <th> Unidad  </th>
      <th> Linea </th>
      <th> Currency  </th>
      <th> Price </th>
      <th> DiscPrcnt </th>
      <th> DocDiscnt </th>
      <th> SubTotal  </th>
      <th> IGV </th>
      <th> SubTotal2 </th>
      <th> GuiaFecha </th>
      <th> GuiaNum </th>
      <th> CodLote </th>

      </tr>
    </thead>
  </table>
</div>

</div>
</div>
</div>

</body>


<script type="text/javascript">
  $(document).ready(function() {
      $('#my-example').dataTable({
        "bProcessing": true,
        "sAjaxSource": "pro.php",
        "aoColumns": [
        
        { mData: 'TipoDoc' },
        { mData: 'NumAtCard' },
        { mData: 'FechaEmision' },
        { mData: 'DocYear' },
        { mData: 'DocMonth' },
        { mData: 'DocMes' },
        { mData: 'Canceled' },
        { mData: 'VendCodActual' },
        { mData: 'VendNomActual' },
        { mData: 'CardCode' },
        { mData: 'CardName' },
        { mData: 'ItemCode' },
        { mData: 'Dscription' },
        { mData: 'Quantity' },
        { mData: 'Unidad' },
        { mData: 'Linea' },
        { mData: 'Currency' },
        { mData: 'Price' },
        { mData: 'DiscPrcnt' },
        { mData: 'DocDiscnt' },
        { mData: 'SubTotal' },
        { mData: 'IGV' },
        { mData: 'SubTotal2' },
        { mData: 'GuiaFecha' },
        { mData: 'GuiaNum' },
        { mData: 'CodLote' }

            ],
        
        dom: 'Bfrtip',
        buttons: [
          
        {

        extend:    'csvHtml5',
        text:      'Exportar a Csv',
        fieldSeparator: ',',
        filename: 'Reporte',
        extension: '.csv'
        
        }

        ]

      });  
  });
</script>

<script>
$(window).load(function() {
      alert("PoC!");
});
</script>
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
