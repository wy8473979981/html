<?php
/*连接数据库*/
$conn=@mysql_connect("qdm162333298.my3w.com","qdm162333298","maixinke") or die("数据库连接失败!");
mysql_select_db("qdm162333298_db",$conn);
mysql_query("set names 'uft-8'");
/*格式化html代码*/
function htmlocode($content)
{
	$content=str_replace("\n","<br>",str_replace(" ","$nbsp",$content));
	return $content;
	# code...
}
$name =$_POST['name'];
$message = $_POST['message'];
if ($_POST['submit'])
{	
	
	$sql="insert into family (id,name,content,date) values ('','$name','$message',now())";
	mysql_query($sql);
	 // 关闭连接
    mysql_close($conn);  
/*//重定向浏览器 */
header("Location: /index.html");
/*//确保重定向后，后续代码不会被执行 */
exit;

	# code...
}else{
echo "请填写完整内容重新提交！";
 // 关闭连接
    mysql_close($conn);  
}
?>

