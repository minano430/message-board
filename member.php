<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="content_finish.php ?>">
您想說的話：<input type="text" name="content" /> <br>
<input type="submit" name="button" value="確定" />
<a href="log_out.php">登出</a>
</form>
<?php session_start(); ?>
<?php
        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
        include("mysql_content.inc.php");
        if($_SESSION['username'] != null&& $_POST['content']!=null)
        {
                $username=$_SESSION['username'];
                $content=$_POST['content'];
                $Time = date("Y:m:d H:i:s",time()+28800);
                $sql="insert into guest_content(id,username,content,time) values('','$username','$content','$Time')";
                 mysql_query($sql);
        }
        $sql="select*from guest_content";
        $result=mysql_query($sql);
        echo"<table>
                <tr>
                <th>Username</th>
                <th>content</th>
                <th>time</th>
                <th>change</th>
                <th>delete</th>
                </tr>";

        while($row=mysql_fetch_row($result))
        {
               echo"
                <tr>
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
                <td>";
                if($row[1]==$username)
                {
                        echo"<a href='change.php'>修改</a>";
                }
                echo"
                </td>
                <td>";
                if($row[1]==$username)
                {
                        echo"<a href='delete.php'>刪除</a>";
                }
                echo"
                </td>
                </tr>";
        }
}
?>
</body>
</html>
