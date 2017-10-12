<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
 
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
 
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
<!--第二步：添加如下 HTML 代码-->
<table id="table_id_example" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>名字</th>
        </tr>
    </thead>
    <tbody>
    	<?php foreach ($res as $key => $val) { ?>
        <tr>
            <td><?php echo $val->id ?></td>
            <td><?php echo $val->city ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
 
 
 
<!--第三步：初始化Datatables-->
<script>
$(document).ready( function () {
    $('#table_id_example').DataTable();
} );
</script>