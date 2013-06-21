<div class="container-fluid">
    <div class="row-fluid row-list-area">
        <div class='span3'>
            <?php require "left_nav.php";?>
        </div>
        <div class="span9">
            <?php for($i=0;$i<=3;$i++):?>
            <section class='item'>
                <div class="page-header">
                    <h1><a target="_blank" href='#'>第<?php echo $i;?>篇文章：下载</a></h1>
                    <h4 class='demo-panel-title'>
                        <small class=''>作者：大漠</small>
                        <small class=''>|</small>
                        <small>日期：2013-06-07</small>
                        <small class=''>|</small>
                        <small>分类：<a target='_blank' href='#'>ios</a></small>
                        <small class=''>|</small>
                        <small>点击：47</small>
                    </h4>
                </div>
                <div class='lead'>
                    <p itemprop="description">关于显示和隐藏TabBar的方法，自己开始不是很懂，查找了很多的资料，在http://blog.csdn.net/riveram/article/details/7345577

    	
    		这里面，有这样的描述，里面是给了两个方法：
    	
    	
    		隐藏tabbar的方法：
    	
    	
    - (void)hideTabBar {
        if (self.tabBarController.tabBar.hidden == YES) {
            return;
        }
        UIView *contentView;
        if ( [[self.tabBarController.view.subviews objectAtIndex:0] isKi......</p>
                    <p class="lead">下载之前先检查一下是否准备好了一个代码编辑器(我们推荐使用 <a href="http://sublimetext.com/2">Sublime Text 2</a>) ，你是否已经掌握了足够的HTML和CSS知识以开展工作。这里我们不详述源码文件，但是它们可以随时被下载。在这里我们只着重介绍使用已经编译好的Bootstrap文件进行入门讲解。</p>
            </div>
                
                <div id="tagsinput_tagsinput" class="tagsshow">
                    <span>标签：</span>
                    <span class="label">
                        <span>Clean&nbsp;&nbsp;</span>
                    </span>
                    <span class="label">
                        <span>Fresh&nbsp;&nbsp;</span>
                    </span>
                    <span class="label">
                        <span>Modern&nbsp;&nbsp;</span>
                    </span>
                    <span class="label">
                        <span>Modern&nbsp;&nbsp;</span>
                    </span>
                    <span class="label">
                        <span>Modern&nbsp;&nbsp;</span>
                    </span>
                    <span class="label">
                        <span>Modern&nbsp;&nbsp;</span>
                    </span>
                    <span class="label">
                        <span>Modern&nbsp;&nbsp;</span>
                    </span>
                    <span class="label">
                        <span>Modern&nbsp;&nbsp;</span>
                    </span>
                    <span class="label">
                        <span>Unique asdas asdasd asdasd asdasda asd&nbsp;&nbsp;</span>
                    </span>
                </div>
                <p class="bottom-handle">
                    <a class="btn btn-small" href="https://github.com/twitter/bootstrap/zipball/master">查看详情 &raquo;</a>
                </p>
            </section>
            <?php endfor;?>
            
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