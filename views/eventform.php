<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.js" type="text/javascript"></script>

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><b>Buat Jadwal Saya</b></h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="<?php echo WEB_ROOT; ?>api/process.php?cmd=book" method="post">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
		<input type="hidden" name="userId" value=""  id="userId"/>
        <span id="sprytf_name">
		<select name="name" class="form-control input-sm">
			<option>--Pilih user--</option>
			<?php
			$sql = "SELECT id, name FROM tbl_users";
			$result = dbQuery($sql);
			while($row = dbFetchAssoc($result)) {
				extract($row);
			?>
			<option value="<?php echo $id; ?>"><?php echo $name; ?></option>
			<?php 
			}
			?>
		</select>
		<span class="selectRequiredMsg">Nama diperlukan.</span>
		
		</span>
    </div>
	
	<div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
		<span id="sprytf_address">
        <textarea name="address" class="form-control input-sm" placeholder="Alamat" id="address"></textarea>
		<span class="textareaRequiredMsg">Alamat diperlukan.</span>
		<span class="textareaMinCharsMsg">Alamat minimal 10 karakter.</span>	
		</span>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1">Telepon</label>
		<span id="sprytf_phone">
        <input type="text" name="phone" class="form-control input-sm"  placeholder=" No Telepon" id="phone">
		<span class="textfieldRequiredMsg">Telepon diperlukan.</span>
		</span>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
		<span id="sprytf_email">
        <input type="text" name="email" class="form-control input-sm" placeholder="Masukan email" id="email">
		<span class="textfieldRequiredMsg">Email diperlukan.</span>
		<span class="textfieldInvalidFormatMsg">Please enter a valid email (user@domain.com).</span>
		</span>
      </div>
	  
      <div class="form-group">
      <div class="row">
      	<div class="col-xs-6">
			<label>Tanggal boking</label>
			<span id="sprytf_rdate">
        	<input type="text" name="rdate" class="form-control" placeholder="YYYY-mm-dd">
			<span class="textfieldRequiredMsg">Tanggalnya mana?</span>
			<span class="textfieldInvalidFormatMsg">format tanggal salah</span>
			</span>
        </div>
        <div class="col-xs-6">
			<label>Waktu bokingan</label>
			<span id="sprytf_rtime">
            <input type="text" name="rtime" class="form-control" placeholder="HH:mm">
			<span class="textfieldRequiredMsg">Waktunya kapan?</span>
			<span class="textfieldInvalidFormatMsg">Waktunya salah format</span>
			</span>
       </div>
      </div>
	  </div>
				  
	  <div class="form-group">
        <label for="exampleInputPassword1">Jumlah Komputer</label>
		<span id="sprytf_ucount">
        <input type="text" name="ucount" class="form-control input-sm" placeholder="Jumlah Komputer" >
		<span class="textfieldRequiredMsg">Harus diisi ini te</span>
		<span class="textfieldInvalidFormatMsg">Formatnya salah.</span>
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
var sprytf_name 	= new Spry.Widget.ValidationSelect("sprytf_name");
var sprytf_address 	= new Spry.Widget.ValidationTextarea("sprytf_address", {minChars:6, isRequired:true, validateOn:["blur", "change"]});
var sprytf_phone 	= new Spry.Widget.ValidationTextField("sprytf_phone", 'none', {validateOn:["blur", "change"]});
var sprytf_mail 	= new Spry.Widget.ValidationTextField("sprytf_email", 'email', {validateOn:["blur", "change"]});
var sprytf_rdate 	= new Spry.Widget.ValidationTextField("sprytf_rdate", "date", {format:"yyyy-mm-dd", useCharacterMasking: true, validateOn:["blur", "change"]});
var sprytf_rtime 	= new Spry.Widget.ValidationTextField("sprytf_rtime", "time", {hint:"i.e 20:10", useCharacterMasking: true, validateOn:["blur", "change"]});
var sprytf_ucount 	= new Spry.Widget.ValidationTextField("sprytf_ucount", "integer", {validateOn:["blur", "change"]});
//-->
</script>

<script type="text/javascript">
$('select').on('change', function() {
	//alert( this.value );
	var id = this.value;
	$.get('<?php echo WEB_ROOT. 'api/process.php?cmd=user&userId=' ?>'+id, function(data, status){
		var obj = $.parseJSON(data);
		$('#userId').val(obj.user_id);
		$('#email').val(obj.email);
		$('#address').val(obj.address);
		$('#phone').val(obj.phone_no);
	});
	
})
</script>