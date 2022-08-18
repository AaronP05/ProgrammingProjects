<?php
require_once(__DIR__ . "/../../partials/nav.php");

//TODO create lookup query and fetch results, set them to $results

  $user = get_user_id();
  if(isset($user)){
  $results = [];
  $db = getDB();
  $initital_statement = $db->prepare("SELECT Transactions.id as UserID, Transactions.id as selected_acc, act_src_id, act_dest_id, action_type, expected_total FROM Transactions WHERE Transactions.id = :customer_id LIMIT 10");
  $final = $initital_statement->execute([":customer_id" => $user]);
    if($final){
      $results = $initital_statement->fetchAll(PDO::FETCH_ASSOC);
    }
    else{
      flash("A problem occured while listing your accounts"); 
    }
     
  }


?>
<h1>Account History</h1>
<?php if (count($results) == 0) : ?>
    <p>No results to show</p>
<?php else : ?>
    <table class="table">
        <?php foreach ($results as $index => $record) : ?>
            <?php if ($index == 0) : ?>
                <thead>
                    <?php foreach ($record as $column => $value) : ?>
                        <th><?php se($column); ?></th>
                    <?php endforeach; ?>
                    
                </thead>
            <?php endif; ?>
            <tr>
                <?php foreach ($record as $column => $value) : ?>
                    <td><?php se($value, null, "N/A"); ?></td>
                <?php endforeach; ?>
                <td>
                    
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>