<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set, Get and Delete Sessions</title>
</head>
<body>
    <div class="form_holder">
        <form method="post" action="">
            <input type="text" name="user"><br><br>
            <button name="button" value="set">Set</button>
            <button name="button" value="get">Get</button>
            <button name="button" value="delete">Delete</button>
        </form>
    </div>
</body>
</html>

<?php 
echo "<br>";
    session_start();
    if(isset($_POST['button'])){
        if($_POST['button']=='set'){
            $val = $_POST['user'];
            $_SESSION['user'] = $val;
        }
        elseif($_POST['button']=='get'){
            if(isset($_SESSION['user'])){
                echo $_SESSION['user'];
            }
            else {
                echo "No user avalable!!";
            }
            
        }
        
        if($_POST['button']=='delete'){
            session_destroy();
            echo "user deleted!";
        }
    }    
?>