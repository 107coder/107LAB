
    
        
   
                    <!--表格-->
                    <table class="table1" border=1>
                         <thead>
                            <tr>
                                
                                <th width="50%" height="20px">中心简介</th> 
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                         <tbody>
                            <?php
                               
                                //建立连接
                                require_once("../data/config.inc.php");
                                $conn = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
                                $select = mysqli_select_db($conn,DBNAME);       //选择数据库
                                //执行查询   
                                $sql="select * from introduce ";
                                mysqli_query($conn,'SET NAMES UTF8');
                                $result= mysqli_query($conn,$sql);
                            
                                //解析结果集
                                while($row=mysqli_fetch_array($result)){
                                echo "<tr>";
                                
                                echo "<td >{$row['introduce']}</td>";
                                
                                echo "<td align='center' height='40px'>
                                         <a href='../introduce/updateIntroduce.php?id={$row['id']}'>修改</a>";

                            }
                                //释放结果集，关闭数据库 
                            mysqli_close($conn);
                           ?>
                          
                        </tbody>    
                    </table>

                    <div class="addWorkRange">添加信息</div>
            
                    <table class="table2" border=1>
                         <thead>
                            <tr>
                                <th width="5%" >id</th>
                                <th width="20%">工作范围</th> 
                                <th width="5%">操作</th>
                            </tr>
                        </thead>
                         <tbody>
                            <?php
                                
                                //建立连接
                                 $conn = mysqli_connect('localhost','root','');
                                //数据库连接成功
                                $select = mysqli_select_db($conn,"kaohe4"); 
                                //执行查询   
                                $sql="select * from workRange ";
                                mysqli_query($conn,'SET NAMES UTF8');
                                $result= mysqli_query($conn,$sql);
                            
                                //解析结果集
                                while($row=mysqli_fetch_array($result)){
                                echo "<tr>";
                                echo "<td align='center'  height='40px'>{$row['id']}</td>";
                                echo "<td ><a href='../introduce/updateWorkRange.php?id={$row['id']}'>{$row['workRange']}</a></td>";
                                
                                echo "<td align='center'><a href='javascript:delWorkRange({$row["id"]})'>删除</a>
                                         <a href='../introduce/updateWorkRange.php?id={$row['id']}'>修改</a>";

                            }
                                //释放结果集，关闭数据库  
                            mysqli_close($conn);
                           ?>
                          
                        </tbody>    
                    </table>
               
 
