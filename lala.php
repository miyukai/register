<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<!--<form action="post3.php" method="post">-->
			<input type="text" name="user" /><br />
			<input type="password" name="pass" /><br />
			
			<input type="button" class="register" value="登录" />
			<input type="button" class="login" value="注册" />
		<!--</form>-->
	</body>
	
	<script src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		
		function se(name,pass){
			$.ajax({
				type:"POST",
				url:"http://localhost/PHP/post3.php?user="+name+"&pass="+pass,
				data:{
					
				},
				async:true,
				success:function(data){
					console.log(data)
				}
			});
		}
		
		$(".register").click(function(){
			//console.log($("input[name='user']").val(),$("input[name='pass']").val())
			var s = $("input[name='user']").val();
			var a = $("input[name='pass']").val();
			se(s,a);
		});
		
		$(".login").click(function(){
			var s = $("input[name='user']").val();
			var a = $("input[name='pass']").val();
			se(s,a);
		})
		
		
	</script>
</html>
