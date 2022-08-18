<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<!DOCTYPE html>
<html>

<body>
    <div class="container"> 
        
        <button id="Button">Create a Account</button>
        <script>
            document.getElementById("Button").onclick = function () {
                location.href = "create_account.php";
            };
        </script>
        <button id="button1">My Account</button>
        <script>
            document.getElementById("button1").onclick = function () {
                location.href = "list_accounts.php";
            };
        </script>
        <button id="button2">Deposit</button>  
        <script>
            document.getElementById("button2").onclick = function () {
                location.href = "deposit.php";
            };
        </script>
        <button id="button3">Withdraw</button> 
        <script>
            document.getElementById("button3").onclick = function () {
                location.href = "withdraw.php";
            };
        </script>  
        <button id="battan2">Transfer</button> 
        <script>
            document.getElementById("battan2").onclick = function () {
                location.href = "transfer_accounts.php";
            };
        </script>
        <button id="button">Profile</button> 
        <script>
            document.getElementById("button").onclick = function () {
                location.href = "profile.php";
            };
        </script>     
    </div>
</html>

<?php

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}


?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>