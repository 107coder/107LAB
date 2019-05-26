<?php
		//1.导入配置文件
			require("newsdbconfig.php");
			
		//2.连接mysqli，选择数据库
			$link2 = @mysqli_connect(HOST2,USER2,PASS2) or die("数据库连接失败！");
			mysqli_select_db($link2,DBNAME2);
			
		//3. 执行查询，并返回结果集
			$sql2 = "select * from news order by addtime desc";
			$result = mysqli_query($link2,$sql2);
			
		//4. 解析结果集,并遍历输出
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>{$row['id']}</td>";
				echo "<td>{$row['title']}</td>";
				echo "<td>{$row['author']}</td>";
				echo "<td>".date("Y-m-d",$row['addtime'])."</td>";
				echo "<td>{$row['content']}</td>";
				echo "<td>
					<a href='javascript:dodel({$row['id']})'>删除</a>
					<a href='edit.php?id={$row['id']}'>修改</a></td>";
				echo "</tr>";
			}
		//5. 释放结果集
			mysqli_free_result($result);
			mysqli_close($link2);
