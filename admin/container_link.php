<div class="container-fluid">
    <div class='navbar navbar-contrlpanel' style=''>
        <form class="navbar-form pull-left" style='width: 100%;'>
            <div class="span2 subnav-search-select" style='margin-right:5px;margin-left: 0px'>
                <select value="X-Men" class="span2" tabindex="1" name="herolist">
                    <option value="0">ID</option>
                    <option value="1">名称</option>
                    <option value="2">地址</option>
                    <option value="3">分类</option>
                </select>
            </div>
            <input type="text" class="span2 subnav-search-text">
            <button type="submit" class="btn btn-primary">搜索</button>
            <a data-toggle="modal" href="#myLink" class="btn btn-primary">添加链接</a>
        </form>
        <div id="myLink" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">添加链接</h3>
            </div>
            <div class="modal-body">
                <p>One fine body…</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                <button id='saveBlog' class="btn btn-primary">保存</button>
            </div>
        </div>
    </div>
    <div class="row-fluid row-list-area">
        <div class="span12">
            <div class="table" style="min-height:300px">
                <table class='table'>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>名称</td>
                            <td>地址</td>
                            <td>分类</td>
                            <td>创建时间</td>
                            <td>操作</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0;$i<10;$i++):?>
                        <tr>
                            <td><span class="badge"><?php echo $i;?></span></td>
                            <td>GoWhich</td>
                            <td>www.gowhich.com</td>
                            <td>友情链接</td>
                            <td>2013-10-11 10:12:20</td>
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