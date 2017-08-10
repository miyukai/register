<?php
	header("Content-Type:text/html;charset=utf-8");
	
	$user = $_GET["user"];
	$pass = $_GET["pass"];
	
//	echo $user."--".$pass;
	
	//链接数据库
	$coon = new mysqli("localhost","root","","mysql");
	
	//编写sql
	$res = $coon->query("select * from heheda where name='".$user."'");
	$row = $res->fetch_row();
	if($row){
		if($row[1]==$pass){
			echo "登录成功";
		}else{
			echo "你的密码是".$row[1];
		}
	}else{
		$int = $coon->query("insert into heheda (name,pass) values('".$user."','".$pass."')");
		echo "注册成功";
	}
	
//	echo $user."==".$pass
	
?>