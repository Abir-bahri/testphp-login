<!DOCTYPE html>
<?php
include('connectdb.php');
if (isset($_GET["PK_USER"]) && isset($_GET["S_EMAIL"]) && isset($_GET["action"]) 
&& ($_GET["action"]=="reset") && !isset($_POST["action"])){
  $PK_USER = $_GET["PK_USER"];
  $S_EMAIL = $_GET["S_EMAIL"];
  $D_DATE_ADD= date("Y-m-d H:i:s");
  $query = mysqli_query($con,
  "SELECT * FROM `UserPasswordReset` WHERE `PK_USER`='".$PK_USER."' and `S_EMAI`='".$S_EMAI."';"
  );
  
  ?>
  <br />
  <form class="pt-3">
        <div class="form-group py-2">
            <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" placeholder="Username or Email Address" required class=""> </div>
        </div>
  <label><strong>Enter New Password:</strong></label><br />
  <div class="form-group py-1 pb-2">
            <div class="input-field"> <span class="fas fa-lock p-2"></span><input type="text" placeholder="Enter your new Password" required class=""> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
  <label><strong>Re-Enter New Password:</strong></label><br />
  <div class="form-group py-1 pb-2">
            <div class="input-field"> <span class="fas fa-lock p-2"></span><input type="text" placeholder="Re-Enter your Password" required class=""> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
  <br /><br />
  <input type="hidden" name="email" value="<?php echo $S_EMAIL;?>"/>
  <input type="submit" value="Reset Password" />
  </form>
<?php
}else{
$error .= "<h2>Link Expired</h2>"

            }
      
if($error!=""){
  echo "<div class='error'>".$error."</div><br />";
  }			



if(isset($_POST["S_EMAIL"]) && isset($_POST["action"]) &&
 ($_POST["action"]=="update")){
$error="";
$pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
$S_EMAIL = $_POST["S_EMAIL"];
$D_DATE_ADD = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
$error.= "<p>Password do not match, both password should be the same.<br /><br /></p>";
  }
  if($error!=""){
echo "<div class='error'>".$error."</div><br />";
}else{
$pass1 = md5($pass1);
mysqli_query($con,
"UPDATE `users` SET `S_PASSWORD`='".$pass1."', `D_DATE_ADD`='".$D_DATE_ADD."' 
WHERE `S_EMAIL`='".$S_EMAIL."';"
);

mysqli_query($con,"DELETE FROM `UserPasswordReset` WHERE `S_EMAIL`='".$S_EMAIL."';");
	
echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>'

	  	
}
?>