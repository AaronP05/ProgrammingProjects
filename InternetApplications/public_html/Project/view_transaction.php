<?php require(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/functions.php")
?>
<?php
  $user = get_act_src_id();
  if(isset($user)){
  $results = [];
  $db = getDB();
  $initital_statement = $db->prepare("SELECT Transactions.act_src_id as ID, Transactions.id as selected_acc, act_src_id, act_dest_id, action_type, expected_total FROM Transactions WHERE Transactions.act_src_id = :customer_id ");
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
                        <div><strong>Source Account Number:</strong> <?php echo($final["act_src_id"]); ?> </div>
                    </div>
                    <div>
                        <div><strong>Destination Account Type:</strong> <?php echo($final["act_dest_id"]); ?> </div>
                    </div>
                    <div>
                        <div><strong>Transaction Type:</strong> <?php echo($final["action_type"]); ?> </div>
                    </div>

                    <div>
                        <div><strong>Balance:</strong> <?php echo($final["expected_total"]); ?> </div>
                    </div>
                    </div>

                        <a type="button" href="<?php echo get_url("view_transaction.php?id=" . $final["selected_acc"]); ?>">Click Here To View Transaction History</a>
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