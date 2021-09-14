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

      if(!empty($_GET['format'])){
         $params .= 'format='.$_GET['format'].'&';
      }
      if(!empty($_GET['formatType'])){
         $params .= 'formatType='.$_GET['formatType'].'&';
      }
      if(!empty($_GET['noVariants'])){
         $params .= 'noVariants='.$_GET['noVariants'].'&';
      }
      if(!empty($_GET['dateDescriptor'])){
         $params .= 'dateDescriptor='.$_GET['dateDescriptor'].'&';
      }
      if(!empty($_GET['dateRange'])){
         $params .= 'dateRange='.$_GET['dateRange'].'&';
      }
      if(!empty($_GET['title'])){
         $params .= 'title='.$_GET['title'].'&';
      }
      if(!empty($_GET['titleStartsWith'])){
         $params .= 'titleStartsWith='.$_GET['titleStartsWith'].'&';
      }
      if(!empty($_GET['startYear'])){
         $params .= 'startYear='.$_GET['startYear'].'&';
      }
      if(!empty($_GET['issueNumber'])){
         $params .= 'issueNumber='.$_GET['issueNumber'].'&';
      }
      if(!empty($_GET['diamondCode'])){
         $params .= 'diamondCode='.$_GET['diamondCode'].'&';
      }
      if(!empty($_GET['digitalId'])){
         $params .= 'digitalId='.$_GET['digitalId'].'&';
      }
      if(!empty($_GET['upc'])){
         $params .= 'upc='.$_GET['upc'].'&';
      }
      if(!empty($_GET['isbn'])){
         $params .= 'isbn='.$_GET['isbn'].'&';
      }
      if(!empty($_GET['ean'])){
         $params .= 'ean='.$_GET['ean'].'&';
      }
      if(!empty($_GET['issn'])){
         $params .= 'issn='.$_GET['issn'].'&';
      }
      if(!empty($_GET['hasDigitalIssue'])){
         $params .= 'hasDigitalIssue='.$_GET['hasDigitalIssue'].'&';
      }
      if(!empty($_GET['modifiedSince'])){
         $params .= 'modifiedSince='.$_GET['modifiedSince'].'&';
      }
      if(!empty($_GET['creators'])){
         $params .= 'creators='.$_GET['creators'].'&';
      }
      if(!empty($_GET['series'])){
         $params .= 'series='.$_GET['series'].'&';
      }
      if(!empty($_GET['events'])){
         $params .= 'events='.$_GET['events'].'&';
      }
      if(!empty($_GET['stories'])){
         $params .= 'stories='.$_GET['stories'].'&';
      }
      if(!empty($_GET['sharedAppearences'])){
         $params .= 'sharedAppearences='.$_GET['sharedAppearences'].'&';
      }
      if(!empty($_GET['collaborators'])){
         $params .= 'collaborators='.$_GET['collaborators'].'&';
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


      $url = 'https://gateway.marvel.com:443/v1/public/characters/'.$charId.'/comics?' .$params.http_build_query($autenticacao);
      

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
