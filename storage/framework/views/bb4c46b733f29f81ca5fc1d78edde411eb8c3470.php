<li class="<?php echo e(Request::is('contribuyentes*') ? 'active' : ''); ?>">
    <a href="<?php echo route('contribuyentes.index'); ?>"><i class="fa fa-edit"></i><span>Contribuyentes</span></a>
</li>

<li class="<?php echo e(Request::is('rubros*') ? 'active' : ''); ?>">
    <a href="<?php echo route('rubros.index'); ?>"><i class="fa fa-edit"></i><span>Rubros</span></a>
</li>

<li class="<?php echo e(Request::is('negocios*') ? 'active' : ''); ?>">
    <a href="<?php echo route('negocios.index'); ?>"><i class="fa fa-edit"></i><span>Negocios</span></a>
</li>

