<div class="container-fluid">
    <div class="row-fluid row-list-area">
        <div class="span12">
            <div class="tabbable"> <!-- Only required for left/right tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">网站运行状况1</a></li>
                    <li><a href="#tab2" data-toggle="tab">网站运行状况2</a></li>
                    <li><a href="#tab3" data-toggle="tab">网站运行状况2</a></li>
                </ul>
                <div class="tab-content tab-content-content">
                    <div class="tab-pane active" id="tab1">
                    <p>I'm in Section 1.</p>
                    <?php print_r($_REQUEST);?>
                    <?php print_r($_ENV);?>
                    <?php print_r(basename($_SERVER['PHP_SELF']));?>
                    </div>
                    
                    <div class="tab-pane" id="tab2">
                    <p>Howdy, I'm in Section 2.</p>
                    </div>
                    <div class="tab-pane" id="tab3">
                    <p>Howdy, I'm in Section 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>