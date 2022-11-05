<?php
    include "pay_parse.php";
    $status = "start";
    $result = "";
    if ($_GET && isset($_GET['ref'])) {
       $ref = $_GET['ref'];
       $result = hdev_payment::get_pay($ref);
      // var_dump($result);
        if (isset($result->p_id)) {

            $conn=new mysqli('localhost','root','','mobile');
            $stm=$conn->prepare("UPDATE `payement` SET `tx_id` = ?, `status` = ? WHERE `tx_ref` = ?");
            $stm->bind_param("sss",$result->tx_id,$result->status,$result->tx_ref);
            if($stm->execute() == TRUE)
            {
              if ($result->status =="pending") {
                echo "payment waiting for confirmation";
              }elseif ($result->status == "success") {
                $status = "ok";
                echo "payment success";
              }else{
                $status = "ok";
                echo "payment status :".$result->status;
              }
            }
            else
            {
                echo"<script>alert('Samething went wrong')</script>";
            }     
            if ($status != "ok") {
                echo '<script type="text/javascript">
                setTimeout(function(){
                  window.location.reload();
                },2000);
              </script>';
            }       

        }
    }


?>