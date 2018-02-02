<table class="table table-responsive" id="negocios-table">
    <thead>
        <tr>
            <th>Contribuyente</th>
            <th>Rubro</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $negocios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $negocios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $negocios->contribuyente->nombre; ?></td>
            <td><?php echo $negocios->rubro->nombre; ?></td>
            <td><?php echo $negocios->nombre; ?></td>
            <td><?php echo $negocios->direccion; ?></td>
            <td>
                <?php echo Form::open(['route' => ['negocios.destroy', $negocios->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('negocios.show', [$negocios->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('negocios.edit', [$negocios->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="/mapa/<?php echo $negocios->id; ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-globe"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>