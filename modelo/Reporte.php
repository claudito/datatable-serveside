<?php 

class Reporte
{

function __construct()
{


}


function lista()
{

try {
	
$conexion  = Conexion::get_conexion(); 
$query     =  "declare @fechainicio varchar(10)
declare @fechafin varchar(10)
SET @fechainicio='2017-01-01'
SET @fechafin='2017-12-31'
execute [INTRAINDU].dbo.[OBG_INVFullv1] 'SIS425',@fechainicio,@fechafin;
     Select  TipoDoc
            , NumAtCard
            , FechaEmision
            , DocYear, DocMonth, DocMes,Canceled
            , VendCodActual
            , VendNomActual
            , CardCode
            , CardName
            , ItemCode
            , Dscription
            , cast(Quantity as numeric(10,2)) as 'Quantity'
            , Unidad
            , Linea
            , Currency
            , cast(Price     as numeric(10,4)) as 'Price'
            , cast(DiscPrcnt as numeric(10,2)) as 'DiscPrcnt'
            , cast(DocDiscnt as numeric(10,2)) as 'DocDiscnt'
            , cast((case when Currency='S/' then LineTotalPE else LineTotalFC end) as numeric(12,2)) as 'SubTotal'
            , cast(IGV as numeric(5,2)) as 'IGV'
            , cast((case when Currency='S/' then LineTotalPEcIGV else LineTotalFCcIGV end) as numeric(12,2)) as 'SubTotal2'
            , GuiaFecha
            , GuiaNum
            , replace(CodLote,'LOTE: ','') as 'CodLote'
       from [INTRAINDU].dbo.OBG_Temp_SIS425
      where left(NumAtCard,11)!='ANL: LT/001'
            and U_OK1_Anulada='N'  --Salen documentos anulados
            and not (TipoDoc='BV' and Canceled='Y')   --Salen Boletas Anuladas con correspondiente Factura Cancelada
            and TipoDoc!='LT'
            and not (SeriesName like ('INT%') or TipoDoc like ('%INT%'))
            and FechaEmision between @fechainicio and @fechafin
   order by CardCode";
$statement =  $conexion->prepare($query);
$statement->execute();
$result    = $statement->fetchAll(PDO::FETCH_ASSOC);
return $result;

} catch (Exception $e) {
	
	echo "Error: ".$e->getMessage();
}

}




}


 ?>