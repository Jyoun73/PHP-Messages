<?php
$con = mysqli_connect("localhost:3306","Jonathan","password","Gratitude");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  echo "Success";
  
/*mysqli_query($con, "INSERT INTO tbl_Gratitude(fld_MessageID, fld_SenderFacebookID, fld_SenderName, 
 fld_RecepientsFacebookID, fld_RecepientsName, fld_RecepientsPhoneNumber, 
 fld_RecepientsEmail, fld_UniqueCode, fld_Date, fld_Message) 
 VALUES 
 (3, $_POST[FacebookID], $_POST[SenderName], $_POST[RecepientsFacebookID], 
 $_POST[RecepientsName], $_POST[RecepientsPhoneNumber], $_POST[RecepientsEmail], 
 $_POST[UniqueCode], $_POST[Date], $_POST[Message])"); */
  

/*$sql= "INSERT INTO tbl_gratitude (`fld_MessageID`, `fld_SenderFacebookID`, `fld_SenderName`, `fld_RecepientsFacebookID`, 
`fld_RecepientsName`, `fld_RecepientsPhoneNumber`, `fld_RecepientsEmail`, 
`fld_UniqueCode`, `fld_Date`, `fld_Message`) 
VALUES ('3', '2323', 'asdfa', 'asdfd', 'dfdfdf', 'dfdfdfd', 'asdsd', '4444', '2012-11-11', 'sqdfasdfasdfasdf')"; */
$test = $_POST['Message'];
mysqli_query($con, "INSERT INTO tbl_test (Test, B) Values (8, 'Meet')");
  echo $_POST['Message'];

  //Create an Insert Queries for tbl_sender
//mysqli_query($con, "INSERT INTO tbl_Sender (fld_SenderID, fld_SenderName, fld_PhoneNumber, fld_SenderFacebookID) Values (NULL, '$_POST[SenderName]', $_POST[RecepientsPhoneNumber], '$_POST[RecepientsFacebookID]')");

 // Create an Insert Query for tbl_recipiever
mysqli_query($con, "INSERT INTO tbl_recieverid (fld_RecieverID, fld_ReceiverName, fld_ReceiverPhoneNumber, fld_ReceiverEmail, fld_ReceiverFacebookID,  fld_ReceiverTwitter) 
				Values (NULL, '$_POST[RecepientsName]', '$_POST[RecepientsPhoneNumber]', '$_POST[RecepientsEmail]', '$_POST[RecepientsFacebookID]',  123) ");
				//Values (NULL, '$_POST[RecepientsName]', '422139771' , '$_POST[RecepientsEmail]', 1212,  123 ");
				

				
				
//$id = mysql_insert_id($con);
//echo $id;
$result = mysqli_query($con, "SELECT * FROM tbl_test");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Test'] . "</td>";
  echo "<td>" . $row['B'] . "</td>";
  echo "</tr>";
  }
echo "</table>";


echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";
$result2 = mysqli_query($con,"SELECT * FROM tbl_sender");
while($row = mysqli_fetch_array($result2))
  {
  echo "<tr>";
  echo "<td>" . $row['fld_SenderID'] . "</td>";
  echo "<td>" . $row['fld_SenderName'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";
$result3 = mysqli_query($con,"SELECT * FROM tbl_recieverid");
while($row = mysqli_fetch_array($result3))
  {
  echo "<tr>";
  echo "<td>" . $row['fld_RecieverID'] . "</td>";
  echo "<td>" . $row['fld_ReceiverName'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
?>
  
