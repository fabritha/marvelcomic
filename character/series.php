<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {

   if (!empty($_GET['characterId'])){

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

      $charId = trim($_GET['characterId']);

      $params = '';

      if(!empty($_GET['title'])){
         $params .= 'title='.$_GET['title'].'&';
      }
      if(!empty($_GET['titleStartsWith'])){
         $params .= 'titleStartsWith='.$_GET['titleStartsWith'].'&';
      }
      if(!empty($_GET['startYear'])){
         $params .= 'startYear='.$_GET['startYear'].'&';
      }
      if(!empty($_GET['modifiedSince'])){
         $params .= 'modifiedSince='.$_GET['modifiedSince'].'&';
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
      if(!empty($_GET['creators'])){
         $params .= 'creators='.$_GET['creators'].'&';
      }
      if(!empty($_GET['seriesType'])){
         $params .= 'seriesType='.$_GET['seriesType'].'&';
      }
      if(!empty($_GET['contains'])){
         $params .= 'contains='.$_GET['contains'].'&';
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


      $url = 'https://gateway.marvel.com:443/v1/public/characters/'.$charId.'/series?' .$params.http_build_query($autenticacao);


      curl_setopt($curl, CURLOPT_URL,$url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
      $result = json_decode(curl_exec($curl), true);

      curl_close($curl);

      echo json_encode($result);

 } else {
  echo json_encode("Não foi encontrado o personagem");
 }
} else {
 echo json_encode("Servidor não encontrado");
}
