<script>
    jQuery(document).ready(function ($) {
        $("#mainmenu ul li").removeAttr('class');
        $("#btnRoute").addClass("active");
        $(".th-footer-bottom").addClass("hidden");
    });
</script>
<div class="container-fluid">
    <div class="row" style="height: 1024px;">
        <div class="col-md-12">
            <h1 class="page-header">หน้าหลัก ผู้ดูเเลระบบ</h1>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-fw fa-bars"></i>คิวงาน</h3>
                    <div style="float:right;margin-top:-20px">
                        <select name="JobStatusID" class="selecter" data-selecter-options='{"cover":"true"}'>
                            <option>ทั้งหมด</option>
                            <option value="1">ใหม่</option>
                            <option value="2">กำลังซ่อม</option>
                            <option value="3">ซ่อมเสร็จแล้ว</option>
                            <option value="4">ซ่อมไม่ได้</option>
                        </select>                    	
                    </div>                   
                </div>         
                <table class="table">
                    <thead>
	                    <th class="center" width="20%">เลขที่งาน</th>
	                    <th class="center" width="50%">หัวข้อ</th>
	                    <th class="center" width="30%">สถานะ</th>
                    </thead>
                    <tbody>
                    	<a href="#">
	                    	<tr>
	                    		<td>...</td>
	                    		<td>...</td>
	                    		<td>...</td>	                    		
	                    	</tr>
	                    </a>
	                    <a href="#">
	                    	<tr>
	                    		<td>...</td>
	                    		<td>...</td>
	                    		<td>...</td>	                    		
	                    	</tr>
	                    </a>
	                    <a href="#">
	                    	<tr>
	                    		<td>...</td>
	                    		<td>...</td>
	                    		<td>...</td>	                    		
	                    	</tr>
	                    </a>
	                    <a href="#">
	                    	<tr>
	                    		<td>...</td>
	                    		<td>...</td>
	                    		<td>...</td>	                    		
	                    	</tr>
	                    </a>
	                    <a href="#">
	                    	<tr>
	                    		<td>...</td>
	                    		<td>...</td>
	                    		<td>...</td>	                    		
	                    	</tr>
	                    </a>
	                    <a href="#">
	                    	<tr>
	                    		<td>...</td>
	                    		<td>...</td>
	                    		<td>...</td>	                    		
	                    	</tr>
	                    </a>
	                    <a href="#">
	                    	<tr>
	                    		<td>...</td>
	                    		<td>...</td>
	                    		<td>...</td>	                    		
	                    	</tr>
	                    </a>
	                    <a href="#">
	                    	<tr>
	                    		<td>...</td>
	                    		<td>...</td>
	                    		<td>...</td>            			
	                    	</tr>
	                    </a>
                    </tbody>
                </table>                
            </div>
        </div>
        <div class="col-md-6">
        	<div class="panel panel-default">
        		<div class="panel-heading">
        			<h3 class="panel-title"><i class="fa fa-fw fa-plus-square"></i>งานวันนี้</h3>
        		</div>
        	</div>
        </div>
    </div>
</div>
