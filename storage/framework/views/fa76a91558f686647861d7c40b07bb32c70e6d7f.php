<?php $__env->startSection('content'); ?>
  <div ng-controller='ApplicationControllers'>
    <div class="container-maps">
      <div map-lazy-load="https://maps.google.com/maps/api/js" 
        map-lazy-load-params="[[googleMapsUrl]]">
        <ng-map center='13.6443693,-88.8701964' class="center-maps"  zoom="17" on-click="addMarker()">
          <marker ng-repeat="position in vm.positions" position="[[position.lat]], [[position.lng]]" animation="Animation.BOUNCE"></marker>
        </ng-map>
      </div>
    </div>
  </div>
  <?php echo Html::script('js/app.js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>