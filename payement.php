<?php
include "pay_parse.php";
function gen_uuid()
{
    return "FMS-".sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),

        // 16 bits for "time_mid"
        mt_rand(0, 0xffff),

        // 16 bits for "time_hi_and_version",
        // four most signifibn cant bits holds version number 4
        mt_rand(0, 0x0fff) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand(0, 0x3fff) | 0x8000,

        // 48 bits for "node"
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff)
    );
}
$curl = curl_init();
$phone=$_POST['phone'];
$name=$_POST['name'];
$uuid = gen_uuid();
/*
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://opay-api.oltranz.com/opay/paymentrequest',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'
{
  "telephoneNumber" : "'.$phone.'",
  "amount" : 100.0,
  "organizationId" : "22278efe-21c1-4381-b07b-1485eb34c9fb",
  "description" : "Funeral Management System",
  "callbackUrl" : "http://localhost/irererosystem/testApi.php",
  "transactionId" : "'.$uuid.'"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;*/
$amount=100;
$conn=new mysqli('localhost','root','','mobile');
$stm=$conn->prepare("INSERT INTO `payement` (`id`, `name`, `phone`, `amount`, `tx_ref`, `tx_id`, `status`) VALUES (NULL, ?, ?, ?, ?, NULL, 'pending')");
$stm->bind_param("ssss",$name,$phone,$amount,$uuid);
if($stm->execute() == TRUE)
{
  $pay = hdev_payment::pay($phone,$amount,$uuid);
  if($pay->status == "success"){
    echo"<script>alert('insert to database successfully');window.location.href='payment_verify.php?ref=".$uuid."';</script>";
  }else{
    echo"<script>alert('payment failed : ".$pay->message."')</script>";
  }

}
else
{
    echo"<script>alert('Samething went wrong')</script>";
}
?>