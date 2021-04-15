<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_content.inc.php");
$sql="select*from guest_content";
$result=mysql_query($sql);
while($row=mysql_fetch_row($result))
{
        echo"username:$row[0]"."content:$row[1]";
}
?>
<a href="member.php">我要留言</a>