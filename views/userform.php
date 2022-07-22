<div class="col-md-8">
  
<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.js" type="text/javascript"></script>

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><b>User Registration</b></h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="<?php echo WEB_ROOT; ?>views/process.php?cmd=create" method="post">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <span id="sprytf_name">
		<input type="text" name="name" class="form-control input-sm" placeholder="Username">
		<span class="textfieldRequiredMsg">Nama diperlukan.</span>
		<span class="textfieldMinCharsMsg">Name must specify at least 6 characters.</span>
		</span>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
		<span id="sprytf_address">
        <textarea name="address" class="form-control input-sm" placeholder="Alamat"></textarea>
		<span class="textareaRequiredMsg">Alamat diperlukan.</span>
		<span class="textareaMinCharsMsg">Address must specify at least 10 characters.</span>	
		</span>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1">Telepon</label>
		<span id="sprytf_phone">
        <input type="text" name="phone" class="form-control input-sm"  placeholder=" Telepon">
		<span class="textfieldRequiredMsg">Telepon diperlukan.</span>
		</span>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1">Email </label>
		<span id="sprytf_email">
        <input type="text" name="email" class="form-control input-sm" placeholder=" email">
		<span class="textfieldRequiredMsg">Email diperlukan.</span>
		<span class="textfieldInvalidFormatMsg">Please enter a valid email (user@domain.com).</span>
		</span>
      </div>
	  

	<div class="form-group">
        <label for="exampleInputEmail1">User Tipe</label>
		<span id="sprytf_type">
        <select name="type"  class="form-control input-sm">
			<option value=""> -- pilih user type --</option>
			<option value="student">lain-lain</option>
			<option value="teacher">Mahasiswa</option>
		</select>
		<span class="selectRequiredMsg">Please select User Type.</span>
		</span>
		
      </div>
	  		  
	  
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </form>
</div>
<!-- /.box -->
<script type="text/javascript">
<!--
var sprytf_name 	= new Spry.Widget.ValidationTextField("sprytf_name", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_address 	= new Spry.Widget.ValidationTextarea("sprytf_address", {minChars:10, isRequired:true, validateOn:["blur", "change"]});
var sprytf_phone 	= new Spry.Widget.ValidationTextField("sprytf_phone", 'none', {validateOn:["blur", "change"]});
var sprytf_mail 	= new Spry.Widget.ValidationTextField("sprytf_email", 'email', {validateOn:["blur", "change"]});
//var sprytf_rdate 	= new Spry.Widget.ValidationTextField("sprytf_rdate", "date", {format:"yyyy-mm-dd", useCharacterMasking: true, validateOn:["blur", "change"]});
//var sprytf_rtime 	= new Spry.Widget.ValidationTextField("sprytf_rtime", "time", {hint:"i.e 20:10", useCharacterMasking: true, validateOn:["blur", "change"]});
//var sprytf_ucount 	= new Spry.Widget.ValidationTextField("sprytf_ucount", "integer", {validateOn:["blur", "change"]});
var sprytf_type 	= new Spry.Widget.ValidationSelect("sprytf_type");
//-->
</script>
</div>