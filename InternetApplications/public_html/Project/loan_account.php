<?php
require(__DIR__ . "/../../partials/nav.php");

?>

<?php


//session_start();
$acc_num = mt_rand(000000000000, 999999999999);
$user = $_SESSION["user"]["id"];

$db = getDB();
$user = get_user_id();



$type = 'loan';



?>


<?php
$stmt = $db->prepare("INSERT INTO Accounts (account_number, user_id, balance, account_type) VALUES (:account, :client, :amount, :acc_type)");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$r = $stmt->execute([
    ":account" => $acc_num,
    ":client" => $user,
    ":amount" => 500.00,
    "acc_type" => "loan"
]);


if($r){
    flash("Created Loan Account successfully with id: " . $db->lastInsertId(),"success");
  }



else {

     $e = $stmt->errorInfo();
      flash("Error creating: " . var_export($e, true), "danger");

}

require(__DIR__ . "/../../partials/flash.php")
?>

<?php  