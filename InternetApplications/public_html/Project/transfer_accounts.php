<?php
require(__DIR__ . "/../../partials/nav.php");

//The if statement will be directed to login and end the rest of this script 
if (!is_logged_in()) 

{
  flash("You don't have permission to access this page");
  die(header("Location: login.php")); 
}


$type = 'transfer';


$user = get_user_id();
$db = getDB();

// Getting the user accounts (will be the same as deposit)
$stmt = $db->prepare('SELECT * FROM Accounts WHERE user_id = :id ORDER BY id ASC');
$stmt->execute([':id' => $user]);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST["save"])) 
{
  $account = $_POST["account"];
  $accountDes = $_POST["transfer"];
  $balance = $_POST["balance"];
  $memo = $_POST["memo"];


  if($type == 'transfer')  
  {
    $r = transferBalance($db, $account, $accountDes, 'transfer', $balance, $memo);
  }
  else{
    $r = transfer_account($db, $account, $accountDes, 'transfer_account', $balance, $memo);
  }
  if ($r) {
    flash("Transaction Successful");
  } else 
  {
    flash("Sorry! You cannot make this transfer");
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
  <div>
    
  <label for="account">Account SRC </label>
    <select id="account" name="account">
      <?php foreach ($results as $r): ?>
      <option value="<?php echo($r["id"]); ?>">
        <?php echo($r["account_number"]); ?> | <?php echo($r["account_type"]); ?> | <?php echo($r["balance"]); ?>
      </option>
      <?php endforeach; ?>
    </select>
  </div>
  <div>
    
  <label for="transfer">Account DEST </label>
    <select id="transfer" name="transfer">
<
     <?php foreach ($results as $r): ?>
      <option value="<?php echo($r["id"]); ?>">
        <?php echo($r["account_number"]); ?> | <?php echo($r["account_type"]); ?> | <?php echo($r["balance"]); ?>
      </option>
      <?php endforeach; ?>
    </select>
  </div>
  <?php endif; ?>
  <div >
    <label for="deposit">Amount</label>
    <div >
      <div >
        <span >$</span>
      </div>
      <input type="number" id="deposit" min="0.00" name="balance" step="0.01" placeholder="0.00"/>
    </div>
  </div>
  <div > 
    <label for="memo">Memo</label>
    <textarea id="memo" name="memo" maxlength="250"></textarea>
  </div>
  <button type="submit" name="save" value="Submit">Submit</button>
</form>



<html> 


<button id="battan6">Transfer To Other User </button> 
<script>
    document.getElementById("battan6").onclick = function () {
        location.href = "transfer_to_user.php"; 
    };
</script>  

</html> 




<?php require(__DIR__ . "/../../partials/flash.php");
 ?>