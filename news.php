
<?php
  
  $ch = curl_init();
  $url = "https://api.newsriver.io/v2/search?query=text%3ANFL";
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Authorization: sBBqsGXiYgF0Db5OV5tAw_vgAEVEGVbvC62kfcJrKfGPPdViWsKnXl-knmPH43ZM' ) );
  $output = curl_exec($ch);

  $news_array = json_decode($output, true);

  foreach($news_array as $article){
    echo $article["text"];
  }
?>
