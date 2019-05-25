<?php
header('Content-type:text/html;charset=utf-8');
$template['title']='新闻列表页';
$link=mysqli_connect('localhost','root','','php');
$query="select * from news order by istop desc";
$result=mysqli_query($link,$query);
session_start();
include_once'admain.php';
include_once'tools.php';
?>
<div id="main">
	<div class="title">新闻标题列表</div>
		<table class="list">
			<tr>
				<th>排序</th>
				<th>新闻标题</th>
				<th>操作</th>
			</tr>
			<?php
			while($data=mysqli_fetch_assoc($result)){
$html=<<<A
            <tr>
				<td>{$data['sort']}</td>
				<td>{$data['news_name']}[id:{$data['id']}]</td>
				<td><a href="news_update.php?id={$data['id']}">[编辑]</a>&nbsp;&nbsp;<a href="news_delete.php?id={$data['id']}">[删除]</a>&nbsp;&nbsp;<a href="istop.php?id={$data['id']}">[置顶]</a>&nbsp;&nbsp;<a href="istop.php?id={$data['id']}">[取消置顶]</a></td>
			</tr>

A;
            echo $html;
			}
			?>
    	</table>
</div>