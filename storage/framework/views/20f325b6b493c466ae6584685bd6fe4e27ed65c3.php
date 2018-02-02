<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Porcentaje Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('porcentaje', 'Porcentaje:'); ?>

    <?php echo Form::text('porcentaje', null, ['class' => 'form-control']); ?>

</div>

<!-- Icon Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('icon', 'Icon:'); ?>

    <?php echo Form::text('icon', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('rubros.index'); ?>" class="btn btn-default">Cancel</a>
</div>
