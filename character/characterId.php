<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
   if (isset($_GET['characterId'])) {


      $curl = curl_init();
      $character_id = $_GET['characterId'];

      $ts = time();
      $public_key = '995d5d1ba44a8300fceefa1cde23dfbb';
      $private_key = '2a7dc362d4420cf3329dda08ca5f17d8671c5253';
      $hash = md5($ts . $private_key . $public_key);

      $autenticacao = array(
         'apikey' => $public_key,
         'ts' => $ts,
         'hash' => $hash,
      );
   $url = 'https://gateway.marvel.com:443/v1/public/characters/'. $character_id .'?'. http_build_query($autenticacao);

   curl_setopt($curl, CURLOPT_URL,$url);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   $result = json_decode(curl_exec($curl), true);

   curl_close($curl);

   echo json_encode($result);

 } else {
  echo "Não foi encontrado o personagem";
 }
} else {
 echo "Servidor não encontrado";
}
