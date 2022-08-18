<?php
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in()) 
{
  //The if statement will be directed to login and end the rest of this script 
  flash("You don't have permission to access this page");
  die(header("Location: login.php"));
}

  $type = 'withdraw';


$user = get_user_id();
$db = getDB();

// Getting the user accounts (will be the same as deposit)
$stmt = $db->prepare('SELECT * FROM Accounts WHERE user_id = :id ORDER BY id ASC');
$stmt->execute([':id' => $user]);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST["save"])) 
{
  $account = $_POST["account"];
  $balance = $_POST["balance"];
  $memo = $_POST["memo"];

  if($type == 'withdraw')  
  {
    $r = changeBalance($db, $account, 1, 'withdraw', $balance, $memo);
  }
  if ($r) {
    flash("Successfully transaction.");
  } else 
  {
    flash("ERROR!!!");
  }
}

?>

<h3><?php echo(ucfirst($type)) ?></h3>

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
    <label for="account">Account</label>
    <select id="account" name="account">
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
<?php require(__DIR__ . "/../../partials/flash.php");
 ?>