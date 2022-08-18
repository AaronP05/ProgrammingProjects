<?php require(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/functions.php");

 ?>
<?php
$query = "";
$results = [];

if(isset($_GET["id"])){ 
  $user = $_GET["id"];
}
?>

<?php
if (isset($user)) {
    $database = getDB();
    $stmt=$database->prepare("SELECT action_type,amount,created, act_src_id, act_dest_id, Transactions.id as tranID FROM Transactions as Transactions JOIN Accounts ON Transactions.act_src_id = Accounts.id WHERE Accounts.id = :userId LIMIT 10");
    $r = $stmt->execute([ ":userId" => $user]);
    if ($r) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        flash("Success!");
    }
    else {
        flash("There was a problem listing your transactions");
    }
}
?>


<h3>Transcations</h3>
<div>
        <?php if (count($results) > 0): ?>
            <div>
                <?php foreach ($results as $result): ?>
                    <div>
                        <div>
                            <div><strong>Action Type:</strong></div>
                            <div><?php echo($result["action_type"]); ?></div>
                        </div>
                        <div>
                            <div><strong>Source:</strong></div>
                            <div><?php echo($result["act_src_id"]); ?></div>
                        </div>
                        <div>
                            <div><strong>Destination:</strong></div>
                            <div><?php echo($result["act_dest_id"]); ?></div>
                        </div>
                        <div>
                            <div><strong>Amount:</strong></div>
                            <div><?php echo($result["amount"]); ?></div>
                        </div>
                        <div>
                            <a type="button" href="<?php echo get_url("view_transactions.php?id=" . $result["tranID"]); ?>">More Details</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>No transactions found</p>
        <?php endif; ?>
</div>
<?php require(__DIR__ . "/../../partials/flash.php");