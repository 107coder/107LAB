<html>
	<head>
		<title>���Ź���ϵͳ</title>
		<script type="text/javascript">
			function dodel(id){
				if(confirm("ȷ��Ҫɾ����")){
					window.location="action.php?action=del&id="+id;
				}
			}
		
		</script>
		<?php header('content-type:text/html;charset=gb2312');?>
	</head>
	<body>
		<center>
			<?php include("menu.php"); //���뵼���� ?>
			
			<h3>��ҳ�������</h3>
			
			<!-----������--------->
				<form action="list3.php" method="get">
					���⣺<input type="text" name="title" size="8" value="<?php echo $_GET['title']; ?>" />&nbsp;
					�ؼ��֣�<input type="text" name="keywords" size="8" value="<?php echo $_GET['keywords']; ?>" />&nbsp;
					���ߣ�<input type="text" name="author"  size="8"  value="<?php echo $_GET['author']; ?>"/>&nbsp;
					<input type="submit" value="����"/>
					<input type="button" value="ȫ����Ϣ" onclick="window.location='list3.php'"/>
				</form>
			<!-------------->
			
			<table width="880" border="1">
				<tr>
					<th>����id</th><th>���ű���</th><th>�ؼ���</th>
					<th>����</th><th>����ʱ��</th><th>��������</th>
					<th>����</th>
				</tr>
				<?php
					//=============================
					//��װ������Ϣ
					$wherelist = array();//����һ����װ�����������������
					$urllist = array(); //������һ����װ����������url���飬�����õ�url������url����ʹ��
					//�ж����ű����Ƿ���ֵ���������װ����������
					if(!empty($_GET["title"])){
						$wherelist[]="title like '%{$_GET['title']}%'";
						$urllist[]="title={$_GET['title']}";
					}
					//�жϹؼ����Ƿ���ֵ���������װ����������
					if(!empty($_GET["keywords"])){
						$wherelist[]="keywords like '%{$_GET['keywords']}%'";
						$urllist[]="keywords={$_GET['keywords']}";
					}
					//�ж������Ƿ���ֵ���������װ����������
					if(!empty($_GET["author"])){
						$wherelist[]="author like '%{$_GET['author']}%'";
						$urllist[]="author={$_GET['author']}";
					}
					//��װ��������
					if(count($wherelist)>0){
						$where = " where ".implode(" and ",$wherelist);
						$url = "&".implode("&",$urllist);
					}
					//echo $where;
					//echo $url;
					//=============================
					
					//1.���������ļ�
						require("dbconfig.php");
						
					//2.����MySQL��ѡ�����ݿ�
						$link = @mysql_connect(HOST,USER,PASS) or die("���ݿ�����ʧ�ܣ�");
						mysql_select_db(DBNAME,$link);
						
					//2.1 �����ҳ�������
					//======================================
						//1. ����һЩ��ҳ����
						$page=isset($_GET["page"])?$_GET['page']:1;		//��ǰҳ��
						$pageSize=3;	//ҳ��С
						$maxRows;		//���������
						$maxPages;		//���ҳ��
						
						//2. ��ȡ�����������
						$sql = "select count(*) from news {$where}";
						$res = mysql_query($sql,$link);
						$maxRows = mysql_result($res,0,0); //��λ�ӽ�����л�ȡ�������������ֵ��
						//3. ������������ҳ��
						$maxPages = ceil($maxRows/$pageSize); //���ý�һ������������ҳ�� 
						
						//4. Ч�鵱ǰҳ��
						if($page>$maxPages){
							$page=$maxPages;
						}
						if($page<1){
							$page=1;
						}
						
						//5. ƴװ��ҳsql���Ƭ��
						$limit = " limit ".(($page-1)*$pageSize).",{$pageSize}";   //��ʼλ���ǵ�ǰҳ��һ����ҳ��С
					//======================================
					
					//3. ִ�в�ѯ�������ؽ����
						$sql = "select * from news {$where} order by addtime desc {$limit}";
						$result = mysql_query($sql,$link);
						
					//4. ���������,���������
						while($row = mysql_fetch_assoc($result)){
							echo "<tr>";
							echo "<td>{$row['id']}</td>";
							echo "<td>{$row['title']}</td>";
							echo "<td>{$row['keywords']}</td>";
							echo "<td>{$row['author']}</td>";
							echo "<td>".date("Y-m-d",$row['addtime'])."</td>";
							echo "<td>{$row['content']}</td>";
							echo "<td>
								<a href='javascript:dodel({$row['id']})'>ɾ��</a>
								<a href='edit.php?id={$row['id']}'>�޸�</a></td>";
							echo "</tr>";
						}
					//5. �ͷŽ����
						mysql_free_result($result);
						mysql_close($link);
				?>
			</table>
				<?php
					//�����ҳ��Ϣ����ʾ��һҳ����һҳ������
					echo "<br/><br/>";
					echo "��ǰ{$page}/{$maxPages}ҳ ����{$maxRows}��";
					echo " <a href='list3.php?page=1{$url}'>��ҳ</a> ";
					echo " <a href='list3.php?page=".($page-1)."{$url}'>��һҳ</a> ";
					echo " <a href='list3.php?page=".($page+1)."{$url}'>��һҳ</a> ";
					echo " <a href='list3.php?page={$maxPages}{$url}'>ĩҳ</a> ";
				?>
		</center>
	</body>
</html>