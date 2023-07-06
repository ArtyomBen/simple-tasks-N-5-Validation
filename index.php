<link rel = "stylesheet" href ="styles.css" >
<!--1-->
<!-- 
<form method = "post" action = "<?php echo $_SERVER["PHP_SELF"] ?>">
   Name: <input type = "text" name = "name" /> <br><br>
   Email: <input type = "email" name = "email" /> <br><br>
    <input type = "submit" />
</form> -->

<?php 

    // if (isset ($_POST["name"])){
    //     $name = $_POST["name"];
    //     echo "Hi $name! ";
    // }
    // if (isset ($_POST["email"])){
    //     $email = $_POST ["email"];
    //     echo "Its Your $email";
    // }
?>

<!-- 2 -->

<?php
include "./validation&security.php";
$arrayMonhths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$currentYear = date ("Y");
?>
<form method = "post" action = "<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]) ?>">
    <?php echo $nameErr ?>
    <input type="text" name="name" placeholder = "First Name" value="<?php echo isset($name) ? ($name) : ''; ?>" />
    <?php echo $lastNameErr ?>
    <input type = "text" name = "lastname" placeholder = "Last name" value = "<?php echo isset($lastName) ? ($lastName) : ''; ?>" /><br><br>
    <?php echo $emailErr ?>
    <input type = "email" name = "email" placeholder = "email" value = "<?php echo isset($email) ? ($email) : ''; ?>" /><br><br>
    <?php echo $telErr ?>
    <input type = "tel" name = "tel" placeholder = "Mobile Number" value = "<?php echo isset($tel) ? ($tel) : ''; ?>" /> <br><br>
    <?php echo $passwordErr ?>
    <input type = "password" name = "password" placeholder = "New password" value = "<?php echo isset($password) ? ($password) : ''; ?>" /><br><br>
 
     <small class = "default-style">Birthday</small><br>
    <select>
        <?php 
        array_map (function ($months) {
            echo '<option>' . $months;
        },$arrayMonhths);
        ?>
        </select>
         <select>
            <?php
            for ($i = 1; $i <= 31; $i++){
                echo "<option>" . $i;
            }
            ?>
        </select> 
        <select>
        <?php 
        for (;$currentYear >= 1905; $currentYear--){
            echo "<option>" . $currentYear;
        }
        ?>
        </select> <br><br>
         <small class = "default-style">Gender</small>
        <?php echo $genderErr . "<br>" ?>
        <label for = "female"><small class = "default-style"> Female </small><input type = "radio" name = "gender" id = "female" value = "female" <?php if (isset ($gender) && $gender == 'female') echo 'checked' ?> /> 
        <label for = "male"><small class = "default-style"> Male </samll><input type = "radio" name = "gender" id = "male" value = "male" <?php if (isset ($gender) && $gender == 'male') echo 'checked'  ?> /> <br><br>
        <button> Sign Up </button>  
</form> 



