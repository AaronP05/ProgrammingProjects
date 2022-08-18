<?php
//TODO 1: require db.php
require_once(__DIR__ . "/db.php");
//This is going to be a helper for redirecting to our base project path since it's nested in another folder
//This MUST match the folder name exactly
$BASE_PATH = '/Project';
//TODO 4: Flash Message Helpers
require(__DIR__ . "/flash_messages.php");

//require safer_echo.php
require(__DIR__ . "/safer_echo.php");
//TODO 2: filter helpers
require(__DIR__ . "/sanitizers.php");

//TODO 3: User helpers
require(__DIR__ . "/user_helpers.php");


//duplicate email/username
require(__DIR__ . "/duplicate_user_details.php");
//reset session
require(__DIR__ . "/reset_session.php");

require(__DIR__ . "/get_url.php");



function depositBalance($db, $src, $dest, $type, $balChange, $memo = '') {
  // Src Account Balance
  $stmt = $db->prepare("SELECT balance from Accounts WHERE id = :id");
  $stmt->execute([":id" => $src]);
  $srcAcct = $stmt->fetch(PDO::FETCH_ASSOC);
  
    // Dest Account Balance
    $stmt->execute([":id" => $dest]);
    $destAcct = $stmt->fetch(PDO::FETCH_ASSOC);
  
    // Insert Transaction
    $transactions = $db->prepare(
      "INSERT INTO Transactions (act_src_id, act_dest_id, amount, action_type, memo, expected_total)
      VALUES (:act_src_id, :act_dest_id, :amount, :action_type, :memo, :expected_total)"
    );
    $accounts = $db->prepare(
      "UPDATE Accounts SET balance = :balance WHERE id = :id"
    );
  
    // Calc
    // Force balChange positive
    $balChange = abs($balChange);
    $finalSrcBalace = $srcAcct['balance'] - $balChange;
    $finalDestBalace = $destAcct['balance'] + $balChange;
  
    // First action
    $transactions->execute([
      ":act_src_id" => $src,
      ":act_dest_id" => $dest,
      ":amount" => -$balChange,
      ":action_type" => $type,
      ":memo" => $memo,
      ":expected_total" => $finalSrcBalace
    ]);
  
    // Second action
    $transactions->execute([
      ":act_src_id" => $dest,
      ":act_dest_id" => $src,
      ":amount" => $balChange,
      ":action_type" => $type,
      ":memo" => $memo,
      ":expected_total" => $finalDestBalace
    ]);
  
    // Update balances of Accounts
    $accounts->execute([":balance" => $finalSrcBalace, ":id" => $src]);
    $accounts->execute([":balance" => $finalDestBalace, ":id" => $dest]);
  
    return $transactions;
  }


function changeBalance($db, $src, $dest, $type, $balChange, $memo = '') {
    // Src Account Balance
    $stmt = $db->prepare("SELECT balance from Accounts WHERE id = :id");
    $stmt->execute([":id" => $src]);
    $srcAcct = $stmt->fetch(PDO::FETCH_ASSOC);
  
    // Dest Account Balance
    $stmt->execute([":id" => $dest]);
    $destAcct = $stmt->fetch(PDO::FETCH_ASSOC);
  
    // Insert Transaction
    $transactions = $db->prepare(
      "INSERT INTO Transactions (act_src_id, act_dest_id, amount, action_type, memo, expected_total)
      VALUES (:act_src_id, :act_dest_id, :amount, :action_type, :memo, :expected_total)"
    );
    $accounts = $db->prepare(
      "UPDATE Accounts SET balance = :balance WHERE id = :id"
    );
  
    // Calc
    // Force balChange positive
    $balChange = abs($balChange);
    $finalSrcBalace = $srcAcct['balance'] - $balChange;
    $finalDestBalace = $destAcct['balance'] + $balChange;
  
    // First action
    $transactions->execute([
      ":act_src_id" => $src,
      ":act_dest_id" => $dest,
      ":amount" => -$balChange,
      ":action_type" => $type,
      ":memo" => $memo,
      ":expected_total" => $finalSrcBalace
    ]);
  
    // Second action
    $transactions->execute([
      ":act_src_id" => $dest,
      ":act_dest_id" => $src,
      ":amount" => $balChange,
      ":action_type" => $type,
      ":memo" => $memo,
      ":expected_total" => $finalDestBalace
    ]);
  
    // Update balances of Accounts
    $accounts->execute([":balance" => $finalSrcBalace, ":id" => $src]);
    $accounts->execute([":balance" => $finalDestBalace, ":id" => $dest]);
  
    return $transactions;
  }
//Transfer function
  function transferBalance($db, $src, $dest, $type, $balChange, $memo = '') {
    // Src Account Balance
    $stmt = $db->prepare("SELECT balance from Accounts WHERE id = :id");
    $availableAmount = (int) $stmt->fetchColumn();
    $stmt->execute([":id" => $src]);
    $srcAcct = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();

    if ($srcAcct['balance'] < $balChange) {
        echo 'Insufficient amount to transfer';
        return false;
    }

  
    // Dest Account Balance
    $stmt->execute([":id" => $dest]);
    $destAcct = $stmt->fetch(PDO::FETCH_ASSOC);


  
    // Insert Transaction
    $transactions = $db->prepare(
      "INSERT INTO Transactions (act_src_id, act_dest_id, amount, action_type, memo, expected_total)
      VALUES (:act_src_id, :act_dest_id, :amount, :action_type, :memo, :expected_total)"
    );
    $accounts = $db->prepare(
      "UPDATE Accounts SET balance = :balance WHERE id = :id"
    );
  
    // Calc
    // Force balChange positive
    $balChange = abs($balChange);
    $finalSrcBalace = $srcAcct['balance'] - $balChange;
    $finalDestBalace = $destAcct['balance'] + $balChange;
  
    // First action
    $transactions->execute([
      ":act_src_id" => $src,
      ":act_dest_id" => $dest,
      ":amount" => -$balChange,
      ":action_type" => $type,
      ":memo" => $memo,
      ":expected_total" => $finalSrcBalace
    ]);
  
    // Second action
    $transactions->execute([
      ":act_src_id" => $src,
      ":act_dest_id" => $dest,
      ":amount" => $balChange,
      ":action_type" => $type,
      ":memo" => $memo,
      ":expected_total" => $finalDestBalace
    ]);
  
    // Update balances of Accounts
    $accounts->execute([":balance" => $finalSrcBalace, ":id" => $src]);
    $accounts->execute([":balance" => $finalDestBalace, ":id" => $dest]);
  
    return $transactions;
  }
  




  //Transfer function to different account 
  function transfer_account($db, $src, $dest, $type, $balChange, $memo = '') {
    // Src Account Balance
    $stmt = $db->prepare("SELECT balance from Accounts WHERE id = :id");
    $stmt->execute([":id" => $src]);
    $srcAcct = $stmt->fetch(PDO::FETCH_ASSOC);


    if ($srcAcct['balance'] < $balChange) {
        echo 'Insufficient amount to transfer';
        return false;
    }


    // Dest Account Balance
    $stmt2 = $db->prepare("SELECT * from Accounts WHERE account_number = :account_number");
    $stmt2->execute([":account_number" => $dest]);
    $destAcct = $stmt2->fetch(PDO::FETCH_ASSOC);


  
    // Insert Transaction
    $transactions = $db->prepare(
      "INSERT INTO Transactions (act_src_id, act_dest_id, amount, action_type, memo, expected_total)
      VALUES (:act_src_id, :act_dest_id, :amount, :action_type, :memo, :expected_total)"
    );
    $accounts = $db->prepare(
      "UPDATE Accounts SET balance = :balance WHERE id = :id"
    );

    // Calc
    // Force balChange positive
    $balChange = abs($balChange);
    $finalSrcBalace = $srcAcct['balance'] - $balChange;
    $finalDestBalace = $destAcct['balance'] + $balChange;
  
      
    // Update balances of Accounts
    $accounts->execute([":balance" => $finalSrcBalace, ":id" => $src]);
    $accounts->execute([":balance" => $finalDestBalace, ":id" => $dest]);

    return true;
 
  }

  ?>