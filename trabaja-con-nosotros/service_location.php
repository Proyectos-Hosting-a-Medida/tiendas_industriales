<?php
// // Función para llamar al webservice y devolver el resultado en un array
// function callWebService($method)
// {
//   $url ='https://bogota-laburbano.opendatasoft.com/api/records/1.0/search/?dataset=poligonos-localidades&q=&facet=Nombre+de+la+localidad';
//   $json = file_get_contents($url);
//   $array = json_decode($json,true);
//   return $array;
// }

// $resul = callWebService();
// foreach($resul['geonames'] as $city)
// {
//     $cities .= '<p>'.$city['name'].'</p>';    
// }
// print_r ($cities);


function httpGetTerminos($url){
    $ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $output=curl_exec($ch);
    curl_close($ch);
    return $output;
 }
 $localidades = "https://bogota-laburbano.opendatasoft.com/api/records/1.0/search/?dataset=poligonos-localidades&q=&facet=Nombre+de+la+localidad";
 $response = httpGetTerminos($localidades);
 
//  var_dump($response);
//  die;

 $localidades = json_decode($response, true);

// var_dump($localidades);
//  die;

$facet_groups = $localidades["facet_groups"][0]["facets"];

// var_dump($facet_groups);


// var_dump(json_encode($facet_groups));
// var_dump($facet_groups);


// foreach($facet_groups as $location){
//     print_r ($location.[path]);


   

    

        
            // foreach ($facet_groups as $location => $value) {
            //     echo $location."-".$value."<br />";
            // }
        



$facet_groups = $localidades["facet_groups"][0]["facets"];
$array_num = count($facet_groups);
for ($i = 0; $i < $array_num; ++$i){
    print_r ($facet_groups[$i]['name'].',');
}


$array = ($facet_groups[$i]['name']);
//Explode(): divide un string en varios string.
$nombre = explode(",", $array);
echo $nombre;

// $name = $localidades["name"];

// var_dump($name);
//  die;

// $pizza  = "porción1 porción2 porción3 porción4 porción5 porción6";
// $porciones = explode(" ", $pizza);
// echo $porciones[0]; // porción1
// echo $porciones[1]; // porción2

// $array_num = count($facet_groups);
// for ($i = 1; $i <= $array_num; $i++) {
//     print_r($facet_groups[$i][name]);
// }

  ?>