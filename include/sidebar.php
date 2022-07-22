<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
<ul class="sidebar-menu">
    <li class="header">Navigasi</li>
    <li class="treeview"> 
		<a href="<?php echo WEB_ROOT; ?>views/?v=DB"><i class="fa fa-calendar"></i><span>Jadwal dan Kalender</span></a>
	</li>
    <li class="treeview"> 
		<a href="<?php echo WEB_ROOT; ?>views/?v=LIST"><i class="fa fa-newspaper-o"></i><span>Daftar Bokingan</span></a>
	</li>
	<li class="treeview"> 
		<a href="<?php echo WEB_ROOT; ?>views/?v=USERS"><i class="fa fa-users"></i><span>Daftar User</span></a>
	</li>
	<?php 
	$type = $_SESSION['calendar_fd_user']['type'];
	if($type == 'admin') {
	?>
	
	<?php
	}
	?>
</ul>
</section>
<!-- /.sidebar -->