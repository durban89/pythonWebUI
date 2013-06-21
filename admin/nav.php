<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="nav-collapse collapse">
                <a class="brand" href="index.php">网站名称 - 后台管理</a>
                <ul class="nav">
                    <li class="<?php echo preg_match('#blog#i',basename($_SERVER['PHP_SELF'])) ? 'active' : ''; ?>">
                        <a class="nav-item" href="blog.php">
                        博文管理
                        </a>
                    </li>
                    <li class="<?php echo preg_match('#file#i',basename($_SERVER['PHP_SELF'])) ? 'active' : ''; ?>">
                        <a class="nav-item" href="file.php">
                        文件管理
                        </a>
                    </li>
                    <li class="<?php echo preg_match('#link#i',basename($_SERVER['PHP_SELF'])) ? 'active' : ''; ?>">
                        <a class="nav-item" href="link.php">
                        链接管理
                        </a>
                    </li>
                    <li class="<?php echo preg_match('#user#i',basename($_SERVER['PHP_SELF'])) ? 'active' : ''; ?>">
                        <a class="nav-item" href="user.php">
                        用户管理
                        </a>
                    </li>
                    <li class="<?php echo preg_match('#category#i',basename($_SERVER['PHP_SELF'])) ? 'active' : ''; ?>">
                        <a class="nav-item" href="category.php">
                        分类管理
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-item" href="user.php">
                        退出（davidzhang）
                        </a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>