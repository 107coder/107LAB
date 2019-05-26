<?php
include_once'tools.php';
header('Content-type:text/html;charset=utf-8');
$template['title']='新闻内容列表页';
$link=mysqli_connect('localhost','root','','php');
session_start();
include_once'admain.php';
?>
<div id="main">
	<div class="title">新闻内容列表</div>
		<table class="list">
			<tr>
				<th>排序</th>
				<th>新闻标题</th>
				<th>新闻内容</th>
				<th>管理员</th>
				<th>操作</th>
			</tr>
			<?php
			$query="select id,sort,news_name,ge_us_name,info from news_content";
			$result=mysqli_query($link,$query);
			while($data=mysqli_fetch_assoc($result)){
$html=<<<A
            <tr>
				<td>{$data['sort']}</td>
				<td>{$data['news_name']}[id:{$data['id']}]</td>
                <td>{$data['info']}</td>
                <td>{$data['ge_us_name']}</td>
				<td><a href="content_delete.php?id={$data['id']}">[删除]</a></td>
			</tr>
A;
            echo $html;
			}
			?>
    	</table>
</div>