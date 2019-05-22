 <div class="addUserForm">
              <img src="../4/images/close.jpg"></img>
              <form action = "./userAction.php?action=add" method = "post">
                  <div class="name">用户名:<br><input type="text" name="username"></div> 
                  <div class="password1">密码:<br><input type="password" name="password"></div>
                  <div class="password2">确认密码:<br><input type = "password" name = "re_password"></div>
                  <div class="sub"><input type="submit" value="立即添加" name="subr"></div>
              </form>
            </div> 


<div class="addAdminForm">
                  <img src="../4/images/close.jpg"></img>
                  <form action = "./adminAction.php?action=add" method = "post">
                    <div class="name">管理员名:<br><input type="text" name="adminname"></div> 
                    <div class="password1">密码:<br><input type="password" name="password"></div>
                    <div class="password2">确认密码:<br><input type = "password" name = "re_password"></div>
                    <div class="sub"><input type="submit" value="立即添加" name="subr"></div>
                  </form>
            </div>



 <div class="addWorkRangeForm">
            <img src="../4/images/close.jpg"></img>
            <form action = "../introduce/introduceAction.php?action=add" method = "post">
                 
                
                <div class="workRange">工作范围:<br><textarea name = "workRange"></textarea></div>
                <div class="sub"><input type="submit" value="立即添加" name="subr"></div>
            </form>

        </div>
        

  
        <div class="addNewsForm">
            <img src="../4/images/close.jpg"></img>
            <form action = "./newsAction.php?action=add" method = "post">
                 
                <div class="title">新闻标题:<br><input type="text" name="title"></div>
                <div class="content">新闻内容:<br><textarea name = "content"></textarea></div>
                <div class="sub"><input type="submit" value="立即添加" name="subr"></div>
            </form>

        </div>                 

