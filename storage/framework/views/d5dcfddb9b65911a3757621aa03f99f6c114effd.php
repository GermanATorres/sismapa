<?php echo Html::script('js/jquery.mask.min.js'); ?>


<div class="form-group col-sm-5">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Dui Field -->
<div class="form-group col-sm-2">
    <?php echo Form::label('dui', 'Dui:'); ?>

    <?php echo Form::text('dui', null, ['class' => 'form-control']); ?>

</div>

<!-- Nit Field -->
<div class="form-group col-sm-3">
    <?php echo Form::label('nit', 'Nit:'); ?>

    <?php echo Form::text('nit', null, ['class' => 'form-control']); ?>

</div>

<!-- Telefono Field -->
<div class="form-group col-sm-2">
    <?php echo Form::label('telefono', 'Telefono:'); ?>

    <?php echo Form::text('telefono', null, ['class' => 'form-control']); ?>

</div>

<!-- Nacimiento Field -->
<div class="form-group col-sm-2">
    <?php echo Form::label('nacimiento', 'Nacimiento:'); ?>

    <div class='input-group date' id='datetimepicker9'>
        <?php echo Form::date('nacimiento', null, ['class' => 'form-control']); ?> 
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
</div>



<!-- Genero Field -->
<div class="form-group col-sm-3">
    <?php echo Form::label('genero', 'Genero:'); ?>

    
    <?php echo e(Form::select('genero', [
      "1" => "Masculino",
      "0" => "Femenino",
    ], null, [ "class" => "form-control" ])); ?>

</div>

<!-- Direccion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('direccion', 'Direccion:'); ?>

    <?php echo Form::textarea('direccion', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guadar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('contribuyentes.index'); ?>" class="btn btn-default">Cancelar</a>
</div>

<script type='text/javascript'>
    $(function(){
        $("#dui").mask('00000000-0')
        $("#nit").mask('0000-000000-000-0')
        $("#telefono").mask('0000-0000')
    });
</script>