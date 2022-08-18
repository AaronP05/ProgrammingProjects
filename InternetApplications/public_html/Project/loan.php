<?php
require(__DIR__ . "/../../partials/nav.php");

?>

<?php


//session_start();
$user = $_SESSION["user"]["id"];
$acc_num = mt_rand(000000000000, 999999999999);

$db = getDB();
$user = get_user_id();



$type = 'loan';


?>


<?php 

// Getting the user accounts (will be the same as deposit)
$stmt = $db->prepare('SELECT * FROM Accounts WHERE user_id = :id and active = "true" ORDER BY id ASC');
$stmt->execute([':id' => $user]);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$value = 1;
$stmt2 = $db->prepare('SELECT * FROM APY WHERE id = :id2');
$stmt2->execute([':id2' => $value]);
$apyResult = $stmt2->fetchAll(PDO::FETCH_ASSOC);


if (isset($_POST["save"])) {



  $stmt = $db->prepare("INSERT INTO Accounts (account_number, user_id, balance, account_type) VALUES (:account, :client, :amount, :acc_type)");
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$r = $stmt->execute([
    ":account" => $acc_num,
    ":client" => $user,
    ":amount" => $_POST["balance"],
    "acc_type" => "loan"
])

;


if($r){
    flash("Created Loan Account successfully with id: " . $db->lastInsertId(),"success");
  }



else {

     $e = $stmt->errorInfo();
      flash("Error creating: " . var_export($e, true), "danger");

}
}

?>

<h3><?php echo(ucfirst($type)) ?> </h3> 


<?php

$user = get_user_id();
echo $user;
echo "<br>";
$username = get_username();
echo (ucfirst($username)); 
echo "<br>";
$email = get_user_email();
echo ($email);
echo "<br>";
$db = getDB();
echo "<br>";
?>

<form method="POST" onsubmit="return validate(this);">
  <?php if (count($results) > 0): ?>



  <label for="transfer">Account DEST </label>
    <select id="transfer" name="transfer">
<
     <?php foreach ($results as $r): ?>
      <option value="<?php echo($r["id"]); ?>">
        <?php echo($r["account_number"]); ?> | <?php echo($r["account_type"]); ?> | <?php echo($r["balance"]); ?>
      </option>
      <?php endforeach; ?>
    </select>
    <div>

    <label for="apy">APY Rate</label>
    <select id="apy" name="apy">
<
     <?php foreach ($apyResult as $apys): ?>
      <option value="<?php echo($r["id"]); ?>">
        <?php echo($apys["apyRate"]);?>
      </option>
      <?php endforeach; ?>
    </select>

<br>
<br>
  <label for="loans">Enter Loan Amount </label>
    <div >
      <div >
        <span >$</span>
      </div>
      <input type="number" id="loanAmount" min="500.00" name="balance" step="0.01" placeholder="0.00"/>
    </div>
  </div>
<br>
<br>

    <label for="memo">Memo</label>
    <br>
    <textarea id="memo" name="memo" maxlength="250"></textarea>
  </div>
  <br>
  <button type="submit" name="save" value="Submit">Submit</button>

  </div>
  <?php endif; ?>
  <div >

</form>





<?php require(__DIR__ . "/../../partials/flash.php");
 ?>