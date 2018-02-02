<!-- Contribuyente Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('contribuyente_id', 'Contribuyente:'); ?>

    <?php echo Form::select('contribuyente_id', $contribuyetes , null, ['class' => 'form-control']); ?>

</div>

<!-- Rubro Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('rubro_id', 'Rubro:'); ?>

    <?php echo Form::select('rubro_id', $rubros, null, ['class' => 'form-control']); ?>

</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('direccion', 'Direccion:'); ?>

    <?php echo Form::textarea('direccion', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('negocios.index'); ?>" class="btn btn-default">Cancel</a>
</div>
