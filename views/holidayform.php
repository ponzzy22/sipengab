<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<!-- Horizontal Form -->
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Hari Libur</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal" action="<?php echo WEB_ROOT; ?>api/process.php?cmd=holiday" method="post">
    <div class="box-body">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">Tanggal Libur</label>
        <div class="col-sm-8">
		<span id="sprytf_date">
          <input type="text" class="form-control input-sm" name="date" placeholder="yyyy-mm-dd">
		  <span class="textfieldRequiredMsg">Tanggal diperlukan.</span>
		</span>
        </div>
      </div>
	  
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Alasan Libur</label>
        <div class="col-sm-8">
		<span id="sprytf_reason">
          <input type="text" class="form-control input-sm" name="reason" placeholder="Alasan Libur">
		  <span class="textfieldRequiredMsg">Alasan diperlukan.</span>
		  <span class="textfieldMinCharsMsg">Alasan harus minimal 8 karakter.</span>
		</span>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-info pull-right">Tambah</button>
    </div>
    <!-- /.box-footer -->
  </form>
</div>
<!-- /.box -->
<script>
<!--
var sprytf_date = new Spry.Widget.ValidationTextField("sprytf_date", "date", {format:"yyyy-mm-dd", useCharacterMasking: true, validateOn:["blur", "change"]});
var sprytf_reason = new Spry.Widget.ValidationTextField("sprytf_reason", "none", {minChars:8, maxChars: 100, validateOn:["blur", "change"]});
//-->
</script>
