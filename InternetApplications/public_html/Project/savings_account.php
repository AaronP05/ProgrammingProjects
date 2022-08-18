<?php
require(__DIR__ . "/../../partials/nav.php");

?>

<?php


//session_start();
$acc_num = mt_rand(000000000000, 999999999999);
$user = $_SESSION["user"]["id"];

$db = getDB();




if (isset($_POST["save"])) {
    

    $stmt = $db->prepare("INSERT INTO Accounts (account_number, user_id, balance, account_type, active) VALUES (:account, :client, :amount, :acc_type, :active)");

    $r = $stmt->execute([
        ":account" => $acc_num,
        ":client" => $user,
        ":amount" => $_POST["balance"],
        "acc_type" => "Savings",
        ":active" => "true"
        
    ]);
    
    
    if($r){

        $stmt2 = $db->prepare("Select account_number from Accounts where id=:lastInsertId");
     
        $rs = $stmt2->execute([
            ":lastInsertId" => $db->lastInsertId()
        ]);

        $results = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        



    
        flash("Created Savings Account successfully!!!");
      }
    
             
    
    else {
    
         $e = $stmt->errorInfo();
          flash("Error creating: " . var_export($e, true), "danger");
    
    }

}

?>
  
  <form method="POST" onsubmit="return validate(this);">

      
  <br>
  <br>
    <label for="savings">Enter Amount to Deposit </label>
      <div >
        <div >
          <span >$</span>
        </div>
        <input type="number" id="balance" min="5.00" name="balance" step="0.01" placeholder="0.00"/>
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
    <div >
  
  </form>
  
  

  <?php require(__DIR__ . "/../../partials/flash.php");
 ?>