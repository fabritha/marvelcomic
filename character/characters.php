<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {

   $curl = curl_init();

   $ts = time();
   $public_key = '995d5d1ba44a8300fceefa1cde23dfbb';
   $private_key = '2a7dc362d4420cf3329dda08ca5f17d8671c5253';
   $hash = md5($ts . $private_key . $public_key);

   $autenticacao = array(
      'apikey' => $public_key,
      'ts' => $ts,
      'hash' => $hash,
   );
   $params = '';
   if(!empty($_GET['name'])){
      $params .= 'name='.$_GET['name'].'&';
   }
   if(!empty($_GET['nameStartsWith'])){
      $params .= 'nameStartsWith='.$_GET['nameStartsWith'].'&';
   }
   if(!empty($_GET['modifiedSince'])){
      $params .= 'modifiedSince='.$_GET['modifiedSince'].'&';
   }
   if(!empty($_GET['series'])){
      $params .= 'series='.$_GET['series'].'&';
   }
   if(!empty($_GET['comics'])){
      $params .= 'comics='.$_GET['comics'].'&';
   }
   if(!empty($_GET['stories'])){
      $params .= 'stories='.$_GET['stories'].'&';
   }
   if(!empty($_GET['events'])){
      $params .= 'events='.$_GET['events'].'&';
   }
   if(!empty($_GET['orderBy'])){
      $params .= 'orderBy='.$_GET['orderBy'].'&';
   }
   if(!empty($_GET['limit'])){
      $params .= 'limit='.$_GET['limit'].'&';
   }
   if(!empty($_GET['offset'])){
      $params .= 'offset='.$_GET['offset'].'&';
   }

   $url = 'https://gateway.marvel.com:443/v1/public/characters?' .$params.http_build_query($autenticacao);

   curl_setopt($curl, CURLOPT_URL,$url);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   $result = json_decode(curl_exec($curl), true);

   curl_close($curl);

   echo json_encode($result);

} else {
 echo json_encode("Servidor não encontrado");
}
