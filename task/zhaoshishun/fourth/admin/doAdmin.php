<div class="addAdmin">添加管理员</div>
                
        <!--表格-->
        <table class="usertable" >
           <thead>
            <tr>
              <th width="70px" >id</th>
              <th >管理员名称</th>
              <th >操作</th>
            </tr>
          </thead>
          <tbody>
           <?php
           //建立连接
         require_once("../data/config.inc.php");
          $conn = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
          $select = mysqli_select_db($conn,DBNAME);       //选择数据库
              $sql="select id ,adminname from admin"; 
              $result= mysqli_query($conn,$sql);
               //解析结果集
              while($row=mysqli_fetch_array($result)){
              echo "<tr>";
              echo "<td align='right' height='20px'>{$row['id']}</td>";
              echo "<td>{$row['adminname']}</td>";
              echo "<td align='center'><a href='javascript:delAdmin({$row["id"]})'>删除</a>
                      <a href='updateAdmin.php? action=update&id={$row["id"]}'>修改</a>
                   </td>";
              echo "</tr>";
               }

              //释放结果集，关闭数据库  
               mysqli_close($conn);
          ?>
        </tbody>
      </table>





      