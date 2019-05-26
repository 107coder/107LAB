
<div class="addNews">添加新闻</div>

   
                    <!--表格-->
            
                    <table class="table" border=1>
                         <thead>
                            <tr>
                                <th width="5%"height="50px" >id</th>
                                <th width="50%">新闻标题</th>
                                <th width="13%">发布时间</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                         <tbody>
                            <?php
                                
                                //建立连接
                                require("../data/config.inc.php");
                                $conn = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
                                $select = mysqli_select_db($conn,DBNAME);       //选择数据库
                                //执行查询   
                                $sql="select * from news order by ifTop desc,time";
                                mysqli_query($conn,'SET NAMES UTF8');
                                $result= mysqli_query($conn,$sql);
                            
                                //解析结果集
                                while($row=mysqli_fetch_array($result)){
                                echo "<tr>";
                                echo "<td align='center'height='40px'>{$row['news_id']}</td>";
                                echo "<td ><a href='../news/updateNews.php? action=update&news_id={$row["news_id"]}'>{$row['title']}</a></td>";
                                echo "<td>{$row['time']}</td>";
                                echo "<td align='center'><a href='javascript:delNews({$row["news_id"]})'>删除</a>
                                         <a href='../news/updateNews.php? action=update&news_id={$row["news_id"]}'>修改</a>";
                           
                               if("{$row['ifTop']}"=='0')
                                    echo "<a href='#'onclick=ifTop({$row["news_id"]})> 置顶</a>";
                               else
                                    echo "<a href='#'onclick=removeTop({$row["news_id"]})> 取消置顶</a>";
                                echo "</td></tr>";

                            }
                                //释放结果集，关闭数据库  
                            mysqli_close($conn);
                           ?>
                          
                        </tbody>    
                    </table>
               
          