<?php

  //PHP script to ping remote server and edit configs to enable HSB
  function ping($host) {
    exec(sprintf('ping -c 1 -W 5 %s', escapeshellarg($host)), $res, $rval);
    return $rval === 0;
  }

$str = file_get_contents('ServerConfig.json');
$arr = json_decode($str, true);

while(1) {
  $up =  ping($arr["M"]);

  if ($up) { }
  else {
  //go about your business sir

  $str = file_get_contents("ServerConfig.json");
  $arr = json_decode($str, true);
  
  foreach($arr as $key => $val) {
    if($key == "H") {
      $newIP = $val;
      $oldIP = $arr["M"];

      $newArr = Array();
      $newArr["M"] = $newIP;
      $newArr["H"] = $oldIP;

      $json = json_encode($newArr);
      file_put_contents('ServerConfig.json', $json);
    }
  }

}
}
  /*
  $str = file_get_contents("ServerConfig.json");
  $arr = json_decode($str, true);
  
  foreach($arr as $key => $val) {
    if($key == "H") {
      $newIP = $val;
      $oldIP = $arr["M"];

      $newArr = Array();
      $newArr["M"] = $newIP;
      $newArr["H"] = $oldIP;

      $json = json_encode($newArr);
      file_put_contents('ServerConfig.json', $json);
    }*/
