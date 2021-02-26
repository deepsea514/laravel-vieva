<section class="content tab-pane fade" id="custom-content-below-tools" role="tabpanel" aria-labelledby="custom-content-below-tools-tab">
    <div class="container-fluid">
        <h4 class="pt-pb">Tools list</h4>
        <div class="card card-primary">
        
            <div class="card-body">
                
                <table class="table table-bordered">
                    <tbody>
                        <?php $__currentLoopData = $tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <?php if($tool->name_english): ?>
                            <td style="width:90%"><?php echo e($tool->name_english); ?></td>
                            <?php else: ?>
                            <td style="width:90%"><?php echo e($tool->name_frensh); ?></td>
                            <?php endif; ?>
                            <td class="right-editbtn" data-toggle="modal" data-target="#modal-breathing-edit-<?php echo e($tool->tools_id); ?>">
                                <span>
                                    <i class="fa fa-edit"></i>
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        <!-- /.card -->
        </div>
    </div>
</section>

<?php $__currentLoopData = $tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- breathing edit modal -->
<div class="modal fade" id="modal-breathing-edit-<?php echo e($tool->tools_id); ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Breathing exercises</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('editTool', $tool->tools_id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="box-body">
                    <div class="form-group">
                        <div><label for="author">Tool name</label></div>
                        <span>English</span>
                        <input type="text" name="tool_title_en" value="<?php echo e($tool->name_english); ?>" class="form-control">
                        <span>French</span>
                        <input type="text" name="tool_title_fr" value="<?php echo e($tool->name_frensh); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <div><label for="tool description">Tool Description</label></div>
                        <span>English</span>
                        <textarea name="tool_description_en" class="form-control"><?php echo e($tool->description_english); ?></textarea>
                        <span>French</span>
                        <textarea name="tool_description_fr" class="form-control"><?php echo e($tool->description_frensh); ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success shadow-btn btn-block">Save changes</button>
                        <!-- <button type="submit" class="btn btn-red shadow-btn btn-block">Remove quotes</button> -->
                    </div>
                </div>
                <!-- /.box-body -->
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->  
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\ZZZZZZZZZ\vieva_project\resources\views/backend/superadmin/content/tools.blade.php ENDPATH**/ ?>