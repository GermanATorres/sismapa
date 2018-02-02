<table class="table table-responsive" id="contribuyentes-table">
    <thead>
        <tr>
        <th>Nombre</th>
        <th>Dui</th>
        <th>Nit</th>
        <th>Nacimiento</th>
        <th>Telefono</th>
        <th>Genero</th>
        <th>Direccion</th>
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $contribuyentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contribuyentes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $contribuyentes->nombre; ?></td>
                <td><?php echo $contribuyentes->dui; ?></td>
                <td><?php echo $contribuyentes->nit; ?></td>
                <td><?php echo $contribuyentes->nacimiento; ?></td>
                <td><?php echo $contribuyentes->telefono; ?></td>
                <td><?php echo $contribuyentes->genero; ?></td>
                <td><?php echo $contribuyentes->direccion; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['contribuyentes.destroy', $contribuyentes->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('contribuyentes.show', [$contribuyentes->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('contribuyentes.edit', [$contribuyentes->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if(count($contribuyentes) == 0): ?>
            <tr>
                <td colspan="8">
                    <h2 class='text-center'>Lo sentimos pero no hay contribuyentes por el momento</h2>
                </td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>