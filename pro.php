<?php
 header('Content-type: text/html; charset=utf-8');


include'autoload.php';

foreach (Reporte::lista() as $key => $value) {
	
   $data [] = $value;

}


$results = ["sEcho" => 1,
        	"iTotalRecords" => count($data),
        	"iTotalDisplayRecords" => count($data),
        	"aaData" => $data ];

function jsonEncodeArray( $array ){
    array_walk_recursive( $array, function(&$item) { 
       $item = utf8_encode( $item ); 
    });
    return json_encode( $array );
}

        
 echo 	jsonEncodeArray($results);
 
?>