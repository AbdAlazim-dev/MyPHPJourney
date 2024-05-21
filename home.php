<?php
    $name = '';
    $password = '';
    $languages = [];
    $gender = [];
    if(isset($_POST['submit'])){
        $ok = true;
        if(!isset($_POST['name']) || $_POST['name'] === ''){
            $ok = false;
        } else {
            $name = $_POST['name'];
        }
        if(!isset($_POST['password']) || $_POST['password'] === ''){
            $ok = false;
        } else {
            $password = $_POST['password'];
        }
        if(!isset($_POST['languages']) || !is_array($_POST['languages']) || count($_POST['languages']) === 0){
            $ok = false;
        } else {
            $languages = $_POST['languages'];
        }
        if(!isset($_POST['gender']) || $_POST['gender'] === ''){
            $ok = false;
        } else {
            $gender = $_POST['gender'];
        }
        if($ok){
            echo "name : %s, password : %s, languages : %s, gender : %s", $name, $password, implode(', ', $languages), $gender;
        }
    }
    
?>
<form method="POST">
    <label>Enter your name</label><br>
    <input type="text" name="name" placeholder="Enter your name"><br>
    <label>Enter your password</label><br>
    <input type="text" name="password" placeholder="Enter your password">
    <label for="languages">Spoken Languages</label><br>
    <input type="checkbox" name="languages[]" value="en"><label for="en">English</label>
    <input type="checkbox" name="languages[]" value="ar"><label for="ar">Arabic</label>
    <input type="checkbox" name="languages[]" value="fr"><label for="fr">French</label>
    <label for="gender">Gender</label><br>
    <input type="radio" value="m" name="gender"><label for="m">Male</label>
    <input type="radio" value="f" name="gender"><label for="f">Female</label>
    <input type="submit" value="Register" name="submit">
</form>