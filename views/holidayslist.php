<?php 
$records = getHolidayRecords();
?>
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Daftar Liburan</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table class="table table-bordered">
      <tr>
        <th style="width: 10px">#</th>
        <th>Tanggal</th>
        <th>Alasan</th>
        <th>Action</th>
      </tr>
      <?php
	  $idx = 1;
	  foreach($records as $rec) {
	  	extract($rec);
	  ?>
      <tr>
        <td><?php echo $idx++; ?></td>
        <td><?php echo $hdate; ?></a></td>
        <td><?php echo $hreason; ?></td>
        <td><a href="javascript:deleteHoliday('<?php echo $hid ?>');">Hapus</a></td>
      </tr>
      <?php } ?>
    </table>
  </div>
  <!-- /.box-body -->
  <div class="box-footer clearfix">
    <?php echo generateHolidayPagination(); ?> </div>
</div>
<!-- /.box -->
<script language="javascript">
function deleteHoliday(hid) {
	if(confirm('Yakin kan aku bujang!!!')) {
		window.location.href = '<?php echo WEB_ROOT; ?>api/process.php?cmd=hdelete&hId='+hid;
	}
}

</script>
