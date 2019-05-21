 <div class="addUser">添加用户</div>
           

          
        
            <!--表格-->
            <table class="usertable" >
              <thead>
                <tr>
                  <th width="70px" >id</th>
                  <th >用户名称</th>
                <th class="center">操作</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    header("Content-Type: text/html;charset=utf-8");          
                   require("../data/config.inc.php");
                    $conn = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
                    $select = mysqli_select_db($conn,DBNAME);       //选择数据库


                    $pagesize = 15 ;                 //每页显示记录数
                   $sql="select id ,username from user";//定义查询语句
                    $resu = mysqli_query($conn,$sql);//执行查询语句
                    $totalNum = mysqli_num_rows($resu);          //总记录数
                    $pagecount = ceil($totalNum/$pagesize);           //总页数
                    (!isset($_GET['page']))?($page = 1):$page = $_GET['page'];        //当前显示页数
                    ($page <= $pagecount)?$page:($page = $pagecount);//当前页大于总页数时把当前页定义为总页数
                    $f_pageNum = $pagesize * ($page - 1);               //当前页的第一条记录
                    $sqlstr1 = $sql." limit ".$f_pageNum.",".$pagesize;//定义SQL语句，通过limit关键字控制查询范围和数量
                    $result = mysqli_query($conn,$sqlstr1);               //执行查询语句
                                 
                  ?>


                  <?php
                    
                    //解析结果集
                        while($row=mysqli_fetch_array($result)){
                          echo "<tr>";
                          echo "<td align='right' height='20px'>{$row['id']}</td>";
                          echo "<td>{$row['username']}</td>";
                          echo "<td class='center'><a href='javascript:delUser({$row["id"]})'>删除</a>
                                               <a href='updateUser.php? id={$row["id"]} '>修改</a>
                                           </td>";
                          echo "</tr>";
                }?>

                      
                          <td height="25" colspan="3" bgcolor="#FFFFFF" style="padding-left: 170px;border:none;">&nbsp;&nbsp;
                        <?php
                            
                          echo "第".$page."页/共".$pagecount."页&nbsp;&nbsp;&nbsp;&nbsp;";
                          if($page!=1){//如果当前页不是1则输出有链接的首页和上一页
                              echo "<a href='?page=1'>首页</a>&nbsp;&nbsp;&nbsp;";
                            echo "<a href='?page=".($page-1)."'>上一页</a>&nbsp;&nbsp;&nbsp;&nbsp;";
                          }else{//否则输出没有链接的首页和上一页
                              echo "首页&nbsp;上一页&nbsp;&nbsp;";
                          }
                          if($page!=$pagecount){//如果当前页不是最后一页则输出有链接的下一页和尾页
                              echo "<a href='?page=".($page+1)."'>下一页</a>&nbsp;&nbsp;";
                            echo "<a href='?page=".$pagecount."'>尾页</a>&nbsp;&nbsp;&nbsp;";
                          }else{//否则输出没有链接的下一页和尾页
                              echo "下一页&nbsp;尾页&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                          }
                          echo "共".$totalNum."个用户&nbsp;&nbsp;&nbsp;";
                        ?>
                            </td>
                         
                                            
                  
                
            <?php

                //释放结果集，关闭数据库  
                   mysqli_close($conn);
               ?>
                </tbody>

                      
            </table>

