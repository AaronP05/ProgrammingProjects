<?php require(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/functions.php")
?>
<?php
  $user = get_user_id();
  if(isset($user)){
  $results = [];
  $db = getDB();
  $initital_statement = $db->prepare("SELECT Accounts.user_id as UserID, Accounts.id as selected_acc, account_number, account_type, balance, created FROM Accounts WHERE Accounts.user_id = :customer_id LIMIT 5");
  $final = $initital_statement->execute([":customer_id" => $user]);
    if($final){
      $results = $initital_statement->fetchAll(PDO::FETCH_ASSOC);
    }
    else{
      flash("A problem occured while listing your accounts"); 
    }
  }
?>

<h3><?php echo("Personal Accounts") ?></h3>

<div>
    <?php if (count($results) > 0): ?>
        <div >
            <?php foreach ($results as $final): ?>
                <div>
                    <div>
                        <div><strong>Account Number:</strong> <?php echo($final["account_number"]); ?> </div>
                    </div>
                    <div>
                        <div><strong>Account Type:</strong> <?php echo($final["account_type"]); ?> </div>
                    </div>
                    <div>
                        <div><strong>Balance:</strong> <?php echo($final["balance"]); ?> </div>
                    </div>
                    <div>
                        <div><strong>Account Created</strong> <?php echo($final["created"]); ?> </div>
                    </div>

                    </div>


                        <a type="button" href="<?php echo get_url("history.php?id=" . $final["selected_acc"]); ?>">Click Here To View Transaction History</a>
                        <h2></h2>

                </div>
            <?php endforeach; ?>
        </div>
        <div><button onclick="history.go(-1);">Back </button>
        </div>

    <?php else: ?>
        <p>No results</p>
    <?php endif; ?>
</div>
<?php 
require(__DIR__ . "/../../partials/flash.php");