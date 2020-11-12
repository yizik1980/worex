<?php 
if(isset($_POST['submit'])){
    $to = "email@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $utm_medium = $_GET['utm_medium'];
    $utm_source = $_GET['utm_source'];
    $name = $_POST['name'];
    $last = $_POST['last'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $homeNumber = $_POST['homeNumber'];
    $zipcode = $_POST['zipcode'];


// subject
$subject = 'יצירת קשר מדף הנחיתה';

// message
$message = '
<html>
<head>
  <title>יצירת קשר מדף נחיתה</title>
</head>
<body>
  <p>'.$name." ".$last.' שם מלא</p>
  <table>
    <tr>
      <th>מספר נייד</th><th>'.$phone.'</th><th>'..'</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";
$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>