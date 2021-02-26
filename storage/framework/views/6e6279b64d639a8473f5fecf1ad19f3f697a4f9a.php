<?php $__env->startSection('content'); ?>
  <ul class="nav nav-tabs nav-tab-3" id="custom-content-below-tab" role="tablist">
    <li class="nav-item nav-item-2 text-center">
      <a class="nav-link nav-link-3 active" id="custom-content-below-series-tab" data-toggle="pill"
        href="#custom-content-below-series" role="tab" aria-controls="custom-content-below-series"
        aria-selected="true">Series</a>
    </li>
    <li class="nav-item nav-item-2 text-center">
      <a class="nav-link nav-link-3" id="custom-content-below-lessions-tab" data-toggle="pill"
        href="#custom-content-below-lessions" role="tab" aria-controls="custom-content-below-lessions"
        aria-selected="false">Lessions</a>
    </li>
    <li class="nav-item nav-item-2 text-center">
      <a class="nav-link nav-link-3" id="custom-content-below-quotes-tab" data-toggle="pill"
        href="#custom-content-below-quotes" role="tab" aria-controls="custom-content-below-quotes"
        aria-selected="false">Quotes</a>
    </li>
    <li class="nav-item nav-item-2 text-center">
      <a class="nav-link nav-link-3" id="custom-content-below-tools-tab" data-toggle="pill"
        href="#custom-content-below-tools" role="tab" aria-controls="custom-content-below-tools"
        aria-selected="false">Tools</a>
    </li>
    <li class="nav-item nav-item-2 text-center">
      <a class="nav-link nav-link-3" id="custom-content-below-subtools-tab" data-toggle="pill"
        href="#custom-content-below-subtools" role="tab" aria-controls="custom-content-below-subtools"
        aria-selected="false">SubTools</a>
    </li>
  </ul>
  <div class="content-wrapper tab-content" id="custom-content-below-tabContent">

    <?php echo $__env->make('backend.superadmin.content.series', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('backend.superadmin.content.lessons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('backend.superadmin.content.quotes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('backend.superadmin.content.tools', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('backend.superadmin.content.subtools', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout_content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ZZZZZZZZZ\vieva_project\resources\views/backend/superadmin/content.blade.php ENDPATH**/ ?>