<section class="content tab-pane fade" id="custom-content-below-quotes" role="tabpanel" aria-labelledby="custom-content-below-quotes-tab">
    <div class="container-fluid">
        <h4 class="pt-pb">Quote status</h4>
        <div class="card card-primary">
        
            <div class="card-body">
                
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td style="width:40%">English quotes</td>
                            <td><?php echo e($quotes_en); ?></td>
                        </tr>
                        <tr>
                            <td style="width:40%">French quotes</td>
                            <td><?php echo e($quotes_fr); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <!-- /.card -->
        </div>

        <h4 class="pt-pb">Quotes list</h4>
        <div class="card card-primary">
        
            <div class="card-body">
                
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td class="add-font">Add quote</td>
                            <td class="right-addbtn" data-toggle="modal" data-target="#modal-quotes-add">
                                <span>
                                    <i class="fa fa-plus"></i>
                                </span>
                            </td>
                        </tr>
                        <?php $__currentLoopData = $quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td style="width:90%">
                                <li class="item-none"><?php echo e($quote->content); ?></li>
                                <li class="item-none"><strong><?php echo e($quote->Author); ?></strong></li>
                            </td>
                            <td class="right-editbtn" data-toggle="modal" data-target="#modal-quotes-edit-<?php echo e($quote->quote_id); ?>">
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
<!-- quote add modal -->
<div class="modal fade" id="modal-quotes-add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add quote</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('addQuote')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                <div class="box-body">
                    <div class="form-group">
                        <label for="description">Quote</label>
                        <textarea name="add_quote" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="add_author" class="form-control" required>
                        <!-- <select class="form-control select2" name="add_author" style="width: 100%;">
                            <option>Select author</option>
                            <?php $__currentLoopData = $coaches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coach): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($coach->first_name); ?>"><?php echo e($coach->first_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select> -->
                    </div>
                    <div class="form-group">
                        <div><label>Title</label></div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="quoteradio" value="1" checked>
                          <label for="customRadio1" class="custom-control-label">English</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="quoteradio" value='0'>
                          <label for="customRadio2" class="custom-control-label">French</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div><label>Associated lesson</label></div>
                        <select class="form-control select2" name="associated_le" style="width: 100%;">
                            
                            <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($lesson->lesson_id); ?>"><?php echo e($lesson->title_english); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success shadow-btn btn-block">Create new quote</button>
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



<!-- quotes edit modal -->
<?php $__currentLoopData = $quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modal-quotes-edit-<?php echo e($quote->quote_id); ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit quote</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('editQuote', $quote->quote_id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="box-body">
                    <div class="form-group">
                        <label for="quote">Quote</label>
                        <textarea name="edit_quote" class="form-control"><?php echo e($quote->content); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input name="edit_author" type="text" class="form-control" value="<?php echo e($quote->Author); ?>" required>
                        <!-- <select class="form-control select2" name="edit_author" style="width: 100%;">
                            <?php $__currentLoopData = $coaches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coach): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($coach->first_name); ?>" <?php echo e(($quote->Author == $coach->first_name)? 'selected':""); ?>><?php echo e($coach->first_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select> -->
                    </div>
                    <div class="form-group">
                        <div><label>Title</label></div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="editradio" value="1" <?php echo e($quote->language=="1"?"checked":""); ?> />
                          <label class="form-check-label">English</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="editradio" value="0" <?php echo e(($quote->language=="0") ? "checked" : ""); ?> />
                          <label class="form-check-label">French</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div><label>Associated lesson</label></div>
                        <select class="form-control select2" name="quote_le" style="width: 100%;">
                            <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($lesson->lesson_id); ?>" <?php echo e(($lesson->lesson_id == $quote->video_id) ? 'selected' : ''); ?>><?php echo e($lesson->title_english); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success shadow-btn btn-block">Save changes</button>
                        
                    </div>
                </div>
                <!-- /.box-body -->
                </form>
                <form action="<?php echo e(route('deleteQuote', $quote->quote_id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-red shadow-btn btn-block actionDelete">Remove quotes</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\ZZZZZZZZZ\vieva_project\resources\views/backend/superadmin/content/quotes.blade.php ENDPATH**/ ?>