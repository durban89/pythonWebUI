<!-- Modal -->
 <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">添加用户</h3>
</div>
<div class="modal-body">
    <p>具体的细节操作在这里</p>
</div>
<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
    <button id='saveUser' class="btn btn-primary">保存</button>
</div>
<script>
$(function(){
   //用户保存
	$('#saveUser').click(function(){
		$('#modal').modal('hide');
	}); 
});
</script>