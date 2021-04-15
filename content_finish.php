<?php session_start(); ?>
<?php
include("content.php");
if($_SESSION['username'] != null)
{
        $username=$_SESSION['username'];
        $content=$_POST['content'];
        $time=date("Y:m:d H:i:s",time()+28800);
        mysql_query("insert into guest_content value('$username''$content''$time')")
}
echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
?>