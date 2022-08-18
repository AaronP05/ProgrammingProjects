<?php
require(__DIR__ . "/../../partials/nav.php");
require(__DIR__ . "/../../partials/flash.php")
?>

<?php



$acc_num = mt_rand(000000000000, 999999999999);
$user = $_SESSION["user"]["id"];

$db = getDB();

$stmt = $db->prepare("INSERT INTO Accounts (account_number, user_id, balance, account_type) VALUES (:account, :client, :amount, :acc_type)");

$r = $stmt->execute([
    ":account" => $acc_num,
    ":client" => $user,
    ":amount" => 5.00,
    "acc_type" => "Checking"
]);
    //$stmt->bind_result();

if($r){

   echo '<script>
        alert("Account Succesfully created")
        </script>';       

} else {

    echo '<script>
    alert("Something went wrong")
    </script>';

}


?>