<?php
function ig($ms){
$url = "http://indosec.web.id/api/ig.php?action=info&username=".$ms;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
$js = json_decode($output, true);
print_r($js);
return $output;
}
include("bct.php");
echo "Masukan Username : ";
$ms = trim(fgets(STDIN));
ig($ms);
?>
