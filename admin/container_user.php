<div class="container-fluid">
    <div class='navbar navbar-contrlpanel' style=''>
        <form class="navbar-form pull-left" style='width: 100%;'>
            <div class="span2 subnav-search-select" style='margin-right:5px;margin-left: 0px'>
                <select value="X-Men" class="span2" tabindex="1" name="herolist">
                    <option value="0">ID</option>
                    <option value="1">用户名</option>
                    <option value="2">Email</option>
                    <option value="3">性别</option>
                    <option value="3">新浪微博</option>
                    <option value="3">QQ</option>
                    <option value="3">手机号</option>
                    <option value="3">角色</option>
                </select>
            </div>
            <input type="text" class="span2 subnav-search-text">
            <button type="submit" class="btn btn-primary">搜索</button>
            <a id="createModal" href="adduser.php" data-target="#modal" data-toggle="modal" class="btn btn-primary">添加用户</a>
        </form>
        <!-- Modal -->
        <div id="modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            
        </div>
    </div>
    <div class="row-fluid row-list-area">
        <div class="span12">
            <div class="table" style="min-height:300px">
                <table class='table'>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>用户名称</td>
                            <td>Email地址</td>
                            <td>性别</td>
                            <td>新浪微博</td>
                            <td>QQ</td>
                            <td>手机号</td>
                            <td>角色</td>
                            <td>操作</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0;$i<10;$i++):?>
                        <tr>
                            <td><span class="badge"><?php echo $i;?></span></td>
                            <td>David</td>
                            <td>zhangdapeng89@126.com</td>
                            <td>男</td>
                            <td>岁月风云</td>
                            <td>896360979</td>
                            <td>15000711267</td>
                            <td>管理员</td>
                            <td>
                                <a class="btn btn-primary">编辑</a>
                                <a class="btn btn-primary">删除</a>
                                <a class="btn btn-primary">锁定</a>
                            </td>
                        </tr>
                        <?php endfor;?>
                    </tbody>
                </table>
            </div>
            <div class="pagination">
                <ul>
                    <li class="previous"><a href="#fakelink" class="fui-arrow-left"></a></li>
                    <li class="active"><a href="#fakelink">1</a></li>
                    <li><a href="#fakelink">2</a></li>
                    <li><a href="#fakelink">3</a></li>
                    <li><a href="#fakelink">4</a></li>
                    <li><a href="#fakelink">5</a></li>
                    <li><a href="#fakelink">6</a></li>
                    <li><a href="#fakelink">7</a></li>
                    <li><a href="#fakelink">8</a></li>
                    <li class="next"><a href="#fakelink" class="fui-arrow-right"></a></li>
                </ul>
            </div>
        </div>
        
    </div>
</div>