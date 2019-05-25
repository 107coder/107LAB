<?php
$link=mysqli_connect('localhost','root','','php');
$template['title']='管理员列表页';
session_start();
include_once 'admain.php';
?>
<div id="main">
	<div class="title">管理员列表</div>
	<table class="list">
		<tr>
			<th>名称</th>
			<th>等级</th>
			<th>操作</th>
		</tr>
		<?php
		$query="select * from general_user";
		$result=mysqli_query($link,$query);
		while ($data=mysqli_fetch_assoc($result)){
			if($data['level']==0){
				$data['level']='超级管理员';
			}else{
				$data['level']='普通管理员';
			}
$html=<<<A
			<tr>
				<td>{$data['name']}</td>
				<td>{$data['level']}</td>
	            <td><a href="manage_delete.php?name={$data['name']}">[删除]</a></td>
			</tr>
A;
			echo $html;
		}
		?>
	</table>
</div>