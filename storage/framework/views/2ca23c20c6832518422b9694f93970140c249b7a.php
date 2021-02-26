<section class="content tab-pane fade" id="custom-content-below-lessions" role="tabpanel"
  aria-labelledby="custom-content-below-lessions-tab">
  <div class="container-fluid">
    <h4 class="pt-pb">Lessions list</h4>
    <div class="card card-primary">

      <div class="card-body">

        <table class="table table-bordered">
          <tbody>
            <tr>
              <td class="add-font">Add lesson</td>
              <td class="right-addbtn" data-toggle="modal" data-target="#modal-lesson-add">
                <span>
                  <i class="fa fa-plus"></i>
                </span>
              </td>
            </tr>
            <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td style="width:90%"><?php echo e($lesson->title_english); ?></td>
                <td class="right-editbtn" data-toggle="modal" data-target="#modal-lesson-edit-<?php echo e($lesson->lesson_id); ?>">
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


    <h4 class="pt-pb">Display Order</h4>
    <div class="card card-primary">

      <div class="card-body">

        <table class="table table-bordered">
          <tbody>
            <?php for($i = 0; $i < count($lessons); $i++): ?>
              <tr>
                <td style="width:90%"><?php echo e($lessons[$i]->title_english); ?></td>

                <th style="width:46px">
                  <?php if($i == 0): ?>
                    <a href="javascript:void(0)">
                      <i class="fa fa-arrow-up order-arrow disabled"></i></a>
                  <?php else: ?>
                    <a
                      href="/lesson_order/<?php echo e($lessons[$i]->lesson_id); ?>/<?php echo e($lessons[$i - 1]->lesson_id); ?>/<?php echo e($lessons[$i]->order_number); ?>/<?php echo e($lessons[$i - 1]->order_number); ?>">
                      <i class="fa fa-arrow-up order-arrow"></i></a>
                  <?php endif; ?>
                </th>
                <th style="width:46px">
                  <?php if($i + 1 == count($lessons)): ?>
                    <a href="javascript:void(0)">
                      <i class="fa fa-arrow-down order-arrow disabled"></i></a>
                  <?php else: ?>
                    <a
                      href="/lesson_order/<?php echo e($lessons[$i]->lesson_id); ?>/<?php echo e($lessons[$i + 1]->lesson_id); ?>/<?php echo e($lessons[$i]->order_number); ?>/<?php echo e($lessons[$i + 1]->order_number); ?>">
                      <i class="fa fa-arrow-down order-arrow"></i></a>
                  <?php endif; ?>
                </th>
              </tr>
            <?php endfor; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card -->
    </div>
  </div>
</section>

<!-- lesson add modal -->
<div class="modal fade" id="modal-lesson-add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add lesson</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo e(route('addLesson')); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="box-body">
            <div><label for="video">Video</label></div>
            <div class="center">
              <video id="thumb2" controls="controls" style="width:65%; height: 175px;">
                <source src="/uploads/mov_bbb.mp4" id="video_here">
                Your browser does not support HTML5 video.
              </video>
            </div>
            <!-- <div class="form-group">
                        <input type="file" class="form-control btn btn-red video_upload" accept="video/*" name="video_upload">
                    </div> -->
            <div class="custom-file" id="customFile" style="margin-top: 15px;" lang="es">
              <input type="file" class="custom-file-input video_upload" accept="video/*" name="video_upload">
              <label class="custom-file-label" for="exampleInputFile">
                Select video...
              </label>
            </div>
            <div class="form-group">
              <div><label>Serie</label></div>
              <select class="form-control select2" name="serie" style="width: 100%;">
                <?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($serie->serie_id); ?>"><?php echo e($serie->title_english); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <div class="form-group">
              <div><label>Tool</label></div>
              <select class="form-control select2" name="tool" style="width: 100%;">
                <?php $__currentLoopData = $tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($tool->tools_id); ?>"><?php echo e($tool->name_english); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <div class="form-group">
              <div><label>Challenge</label></div>
              <select class="form-control select2" name="challenge_id" style="width: 100%;">
                <?php $__currentLoopData = $challenges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $challenge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($challenge->challenge_id); ?>"><?php echo e($challenge->name_english); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <div class="form-group">
              <div><label>Coaches</label></div>
              <select class="form-control select2" name="coach_id" style="width: 100%;">
                <?php $__currentLoopData = $coaches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coache): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($coache->id); ?>"><?php echo e($coache->first_name); ?> <?php echo e($coache->last_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <div class="form-group">
              <div><label>Title</label></div>
              <span for="english">English</span>
              <input type="text" name="lessons_title_en" class="form-control" required>
              <span for="french">French</span>
              <input type="text" name="lessons_title_fr" class="form-control" required>
            </div>
            <div class="form-group">
              <div><label for="description">Description</label></div>
              <span for="english">English</span>
              <textarea name="lessons_description_en" class="form-control" required></textarea>
              <span for="english">French</span>
              <textarea name="lessons_description_fr" class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success shadow-btn btn-block">Create new lesson</button>
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


<?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <!-- lesson edit modal -->
  <div class="modal fade" id="modal-lesson-edit-<?php echo e($lesson->lesson_id); ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit lesson</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo e(route('editLesson', $lesson->lesson_id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="box-body">
              <div><label for="session date">Video</label></div>
              <div class="center">
                <video class="thumb3" controls="controls" style="width:65%; height: 175px;">
                  <source src="/uploads/<?php echo e($lesson->video_file); ?>" id="video_here1">
                  Your browser does not support HTML5 video.
                </video>
              </div>
              <!-- <div class="form-group">
                        <input type="file" value="<?php echo e($lesson->video_file); ?>" class="form-control btn btn-red video_upload1" accept="video/*" name="video_upload1">
                    </div> -->
              <div class="custom-file" id="customFile" style="margin-top: 15px;" lang="es">
                <input type="file" value="<?php echo e($lesson->video_file); ?>" class="custom-file-input video_upload1"
                  accept="video/*" name="video_upload1">
                <label class="custom-file-label" for="exampleInputFile">
                  Select video...
                </label>
              </div>
              <div class="form-group">
                <div><label>Serie</label></div>
                <select class="form-control select2" name="serie" style="width: 100%;">
                  <?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($serie->serie_id); ?>"
                      <?php echo e($serie->serie_id == $lesson->serie_id ? 'selected' : ''); ?>><?php echo e($serie->title_english); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <div class="form-group">
                <div><label>Tool</label></div>
                <select class="form-control select2" name="tool" style="width: 100%;">
                  <?php $__currentLoopData = $tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tool->tools_id); ?>" <?php echo e($tool->tools_id == $lesson->tools_id ? 'selected' : ''); ?>>
                      <?php echo e($tool->name_english); ?>

                    </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <div class="form-group">
                <div><label>Challenges</label></div>
                <select class="form-control select2" name="challenge_id" style="width: 100%;">
                  <?php $__currentLoopData = $challenges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $challenge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($challenge->challenge_id); ?>"
                      <?php echo e($challenge->challenge_id == $lesson->challenge_id ? 'selected' : ''); ?>>
                      <?php echo e($challenge->name_english); ?>

                    </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <div class="form-group">
                <div><label>Coaches</label></div>
                <select class="form-control select2" name="coach_id" style="width: 100%;">
                  <?php $__currentLoopData = $coaches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coache): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($coache->id); ?>" <?php echo e($coache->id == $lesson->coach_id ? 'selected' : ''); ?>>
                      <?php echo e($coache->first_name); ?> <?php echo e($coache->last_name); ?>

                    </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <div class="form-group">
                <div><label>Title</label></div>
                <span for="english">English</span>
                <input type="text" class="form-control" value="<?php echo e($lesson->title_english); ?>" name="lesson_edit_title_en"
                  required>
                <span for="french">French</span>
                <input type="text" class="form-control" value="<?php echo e($lesson->title_frensh); ?>" name="lesson_edit_title_fr"
                  required>
              </div>
              <div class="form-group">
                <div><label for="description">Description</label></div>
                <label for="lesson_description_en">English</label>
                <textarea name="lessons_edit_desc_en" class="form-control"
                  required><?php echo e($lesson->description_english); ?></textarea>
                <label for="lesson_description_fr">French</label>
                <textarea name="lessons_edit_des_fr" class="form-control"
                  required><?php echo e($lesson->description_frensh); ?></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success shadow-btn btn-block">Save changes</button>

              </div>
            </div>
            <!-- /.box-body -->
          </form>
          <form action="<?php echo e(route('deleteLesson', $lesson->lesson_id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button type="submit" class="btn btn-red shadow-btn btn-block actionDelete">Remove lesson</button>
          </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\ZZZZZZZZZ\vieva_project\resources\views/backend/superadmin/content/lessons.blade.php ENDPATH**/ ?>