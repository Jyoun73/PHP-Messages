
<html>
<form action="input.php" method="post">
Sender Facebook ID: <input type="text" name="FacebookID"> <br>
Sender Name: <input type="text" name="SenderName"> <br>
RecepientsFacebookID: <input type="text" name="RecepientsFacebookID">   <br>
RecepientsName: <input type="text" name="RecepientsName"> <br>
RecepientsPhoneNumber: <input type="text" name="RecepientsPhoneNumber"> <br>
RecepientsEmail: <input type="text" name="RecepientsEmail"> <br>
UniqueCode: <input type="text" name="UniqueCode"> <br>
Date: <input type="text" name="Date"> <br>
Message: <input type="text" name="Message"> <br>
<input type="submit">
</form>
<?php
/*$con = mysqli_connect("localhost:3306","Jonathan","password","Gratitude");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $test = 1232;
  
  mysqli_query($con,"UPDATE tbl_Gratitude SET fld_UniqueCode = $test
  WHERE fld_MessageID = 1");
  
  $result = mysqli_query($con,"SELECT * FROM tbl_Gratitude");
  
  while($row = mysqli_fetch_array($result))
  {
  echo $row['fld_UniqueCode'] . " " . $row['fld_MessageID'];
  echo "<br />";
  }
  */
?>
</html>

