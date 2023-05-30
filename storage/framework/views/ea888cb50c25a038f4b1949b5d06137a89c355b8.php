<ul class="sidebar-menu" data-widget="tree">
<li class="header">MAIN NAVIGATION</li>
<li class="<?php echo e(request()->is('/') ? 'active' : ''); ?>"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
<?php if(auth()->user()->level==1): ?>
    <li class="<?php echo e(request()->is('akun') ? 'active' : ''); ?>"><a href="/akun"><i class="fa fa-book"></i> <span>Akun</span></a></li>
    <li class="<?php echo e(request()->is('kereta') ? 'active' : ''); ?>"><a href="/kereta"><i class="fa fa-book"></i> <span>Kereta</span></a></li>
    <li class="<?php echo e(request()->is('penumpang') ? 'active' : ''); ?>"><a href="/penumpang"><i class="fa fa-book"></i> <span>Penumpang</span></a></li>
    <li class="<?php echo e(request()->is('tiket') ? 'active' : ''); ?>"><a href="/tiket"><i class="fa fa-book"></i> <span>Tiket</span></a></li>
<?php elseif(auth()->user()->level==2): ?>
    <li class="<?php echo e(request()->is('user') ? 'active' : ''); ?>"><a href="/user"><i class="fa fa-book"></i> <span>User</span></a></li>
    <li class="<?php echo e(request()->is('kereta') ? 'active' : ''); ?>"><a href="/kereta"><i class="fa fa-book"></i> <span>Kereta</span></a></li>
<?php endif; ?>





</ul><?php /**PATH C:\xampp\htdocs\pbd_uas\resources\views/layout/v_nav.blade.php ENDPATH**/ ?>