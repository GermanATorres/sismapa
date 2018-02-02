<table class="table table-responsive" id="rubros-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Porcentaje</th>
            <th>Icon</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $rubros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rubros): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $rubros->nombre; ?></td>
            <td><?php echo $rubros->porcentaje; ?></td>
            <td>
                <?php echo Html::image($rubros->icon); ?>

            </td>
            <td>
                <?php echo Form::open(['route' => ['rubros.destroy', $rubros->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('rubros.show', [$rubros->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('rubros.edit', [$rubros->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>