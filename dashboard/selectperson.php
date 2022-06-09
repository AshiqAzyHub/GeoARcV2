<?php
require_once "config.php";
$id = $_POST["role"];
$result = mysqli_query($link,"SELECT * FROM `login` where role = $id");
?>
<option value="">Select Person</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["login_id"];?>"><?php echo $row["fname"];?></option>
<?php
}
?>