<?php
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		 form{
		 	background-color: #DCB280;
		 	height: 300px;
		 	width: 300px;
		 	border-color: blur;
		    }
    </style>
</head>
<body>

<?= Html::beginForm(['add']) ?>
<center>
	<form>
		<table>
			<tr>
				<td>姓名</td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="text" name="pwd" required></td>
			</tr>
			<tr>
				<td>用户名</td>
				<td><input type="text" name="user" required></td>
			</tr>
			<tr>
				<td>性别</td>
				<td>
					<input type="radio" name="xb" value="男">男
				    <input type="radio"  name="xb" value="女">女
				</td>
			</tr>
			<tr>
				<td>地区</td>
				<td>
					<select name="city"> 
						<option   value="河南省">河南省</option> 
						<option   value="河北省">河北省</option> 
					</select> 
				</td>
			</tr>
			<tr>
				<td>手机号</td>
				<td><input type="tel" pattern="1[358]\w{9}" name="tel" minlength="5"  required></td>
			</tr>
			<tr>
				<td>邮箱</td>
				<td><input type="email" required name="excel"></td>
			</tr>
			<tr>
				<td><input type="submit" value="提交">
				</td>
			</tr>
		</table>
	</form>
</center>
<?= Html::endForm() ?>
</body>
</html>