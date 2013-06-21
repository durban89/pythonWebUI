<div class="container-fluid">
    <div class='navbar navbar-contrlpanel' style=''>
        <form class="navbar-form pull-left" style='width: 100%;'>
            <div class="span2 subnav-search-select" style='margin-right:5px;margin-left: 0px'>
                <select value="X-Men" class="span2" tabindex="1" name="herolist">
                    <option value="0">ID</option>
                    <option value="1">标题</option>
                    <option value="2">内容</option>
                    <option value="3">创新日期</option>
                </select>
            </div>
            <input type="text" class="span2 subnav-search-text">
            <button type="submit" class="btn btn-primary">搜索</button>
            <a target="_blank" href="#" class="btn btn-primary">新建文章</a>
        </form>
    </div>
    <div class="row-fluid row-list-area">
        <div class="span12">
            <div class="table" style="min-height:300px">
                <table class='table'>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>标题</td>
                            <td>内容</td>
                            <td>阅览数</td>
                            <td>创建时间</td>
                            <td>更新时间</td>
                            <td>操作</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0;$i<10;$i++):?>
                        <tr>
                            <td><span class="badge"><?php echo $i;?></span></td>
                            <td>黄金甲</td>
                            <td>内容个数200字内容个 数200字内容个数200字 内容个数200字内容个数200字内容个数200字内容 个数200字内容</td>
                            <td>10</td>
                            <td>2013-01-09 12-10-22</td>
                            <td>2013-01-19 12-10-22</td>
                            <td>
                                <a class="btn">编辑</a>
                                <a class="btn">删除</a>
                                <a class="btn">锁定</a>
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