<form method="POST" action="login.php">
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="submit" name="log" value="Login">
</form>

<?php




    function validateUserAccount($a, $b){
        $t = false;
        //Some statement

        return !$k || $t = true;
    }


    $Email = $_POST['email'];
    $Password = $_POST['password'];

    if(isset($_POST['log'])){
        if(validateUserAccount($Email, $Password)){
            // Some statement
        }
        else{
            echo "Email / Password is incorrect!";
        }
    }
?>