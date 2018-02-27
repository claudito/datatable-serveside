<!DOCTYPE html>
<html lang="es">
<head>
   <title>PHP - Jquery Datatables Example</title>

<!-- JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>


<!-- JS  -->
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
  

  <h2>PHP - Jquery Datatables Example</h2><hr>
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
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]



      });  
  });
</script>
</html>