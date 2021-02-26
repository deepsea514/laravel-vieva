<section class="content tab-pane fade" id="custom-content-below-subtools" role="tabpanel"
  aria-labelledby="custom-content-below-tools-tab">
  <div class="container-fluid">
    <h4 class="pt-pb">SubTools list</h4>
    <div class="card card-primary">

      <div class="card-body">
        <div class="form-group">
          <div><label for="author">Tool Type</label></div>
          <select class="form-control" id="subtoolselecttable" style="cursor: pointer">
            <?php $__currentLoopData = $tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($tool->tools_id); ?>"><?php echo e($tool->name_english); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>

        <div><label for="author">Tool List</label></div>

        
        <table class="table table-bordered sub-tool-table" id="sub_tool_table_1">
          <tbody>
            <tr>
              <td class="add-font">Add SubTool</td>
              <td class="right-addbtn" data-toggle="modal" data-target="#modal-breathingtool-add">
                <span>
                  <i class="fa fa-plus"></i>
                </span>
              </td>
            </tr>
            <?php $__currentLoopData = $breathingTools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <?php if($tool->title_in_english): ?>
                  <td style="width:90%"><?php echo e($tool->title_in_english); ?></td>
                <?php else: ?>
                  <td style="width:90%"><?php echo e($tool->title_in_french); ?></td>
                <?php endif; ?>
                <td class="right-editbtn" style="color: orangered">
                  <form action="<?php echo e(route('breathing-tools.destroy', $tool->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="actionDelete" style="border: none; background: transparent;" type="submit">
                      <span>
                        <i class="fa fa-trash"></i>
                      </span>
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>

        
        <div class="sub-tool-table" id="sub_tool_table_2">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td class="add-font" colspan="2">Add SubTool</td>
                <td class="right-addbtn" data-toggle="modal" data-target="#modal-mindfulness-add">
                  <span>
                    <i class="fa fa-plus"></i>
                  </span>
                </td>
              </tr>
              <?php $__currentLoopData = $mindfulnessTools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><img style="width: 100%" src="/uploads/<?php echo e($tool->image_url); ?>" /></td>
                  <td style="width: 84%;"><?php echo e($tool->category->category_name_in_english); ?></td>
                  <td class="right-editbtn" style="color: orangered">
                    <form action="<?php echo e(route('mindfullness-tools.destroy', $tool->id)); ?>" method="post">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                      <button class="actionDelete" style="border: none; background: transparent;" type="submit">
                        <span>
                          <i class="fa fa-trash"></i>
                        </span>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>

        
        <div class="sub-tool-table" id="sub_tool_table_3">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td class="add-font">Add SubTool</td>
                <td class="right-addbtn" data-toggle="modal" data-target="#modal-guide-tool-add">
                  <span>
                    <i class="fa fa-plus"></i>
                  </span>
                </td>
              </tr>
              <?php $__currentLoopData = $guidedTools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <?php if($tool->title_english): ?>
                    <td style="width:90%"><?php echo e($tool->title_english); ?></td>
                  <?php else: ?>
                    <td style="width:90%"><?php echo e($tool->title_frensh); ?></td>
                  <?php endif; ?>
                  <td class="right-editbtn" style="color: orangered">
                    <form action="<?php echo e(route('guided-tools.destroy', $tool->guided_meditation_id)); ?>" method="post">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                      <button class="actionDelete" style="border: none; background: transparent;" type="submit">
                        <span>
                          <i class="fa fa-trash"></i>
                        </span>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>

        
        <div class="sub-tool-table" id="sub_tool_table_4">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td class="add-font">Add SubTool</td>
                <td class="right-addbtn" data-toggle="modal" data-target="#modal-selfhyp-tool-add">
                  <span>
                    <i class="fa fa-plus"></i>
                  </span>
                </td>
              </tr>
              <?php $__currentLoopData = $selfhypTools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <?php if($tool->title_english): ?>
                    <td style="width:90%"><?php echo e($tool->title_english); ?></td>
                  <?php else: ?>
                    <td style="width:90%"><?php echo e($tool->title_frensh); ?></td>
                  <?php endif; ?>
                  <td class="right-editbtn" style="color: orangered">
                    <form action="<?php echo e(route('selfhyp-tools.destroy', $tool->self_hypnosis_id)); ?>" method="post">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                      <button class="actionDelete" style="border: none; background: transparent;" type="submit">
                        <span>
                          <i class="fa fa-trash"></i>
                        </span>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.card -->
    </div>
  </div>
</section>


<!-- breathing tool add modal -->
<div class="modal fade" id="modal-breathingtool-add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Breathing exercises</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form class="sub-tool-form" action="<?php echo e(route('breathing-tools.store')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="box-body">
            <div class="form-group">
              <span>English (English)</span>
              <input type="text" name="title_in_english" class="form-control" required />
              <span>French (French)</span>
              <input type="text" name="title_in_french" class="form-control" required />
            </div>
            <div class="form-group">
              <span>Breath In</span>
              <input type="number" name="breathe_in" class="form-control" required />
            </div>
            <div class="form-group">
              <span>Breath Out</span>
              <input type="number" name="breathe_out" class="form-control" required />
            </div>
            <div class="form-group">
              <span>Hold 1</span>
              <input type="number" name="hold1" class="form-control" required />
            </div>
            <div class="form-group">
              <span>Hold 2</span>
              <input type="number" name="hold2" class="form-control" />
            </div>
            <div class="form-group">
              <span>Locked</span>
              <select name="locked" class="form-control" required>
                <option value="0">unlocked</option>
                <option value="1">locked</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success shadow-btn btn-block">Create</button>
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

<!-- mindfulness tool add modal -->
<div class="modal fade" id="modal-mindfulness-add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Mindfullness Tool</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form class="sub-tool-form" action="<?php echo e(route('mindfullness-tools.store')); ?>" method="post"
          enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="box-body">
            <div class="form-group">
              <label>Category</label>
              <select class="form-control select2" name="category_id" style="width: 100%;">
                <?php $__currentLoopData = $mindfulnessCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($category->id); ?>">
                    <?php echo e($category->category_name_in_english); ?>

                  </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <div class="form-group">
              <label>Image</label>
              <div class="col-md-12 center" id="mindful">
                <img src="<?php echo e(asset('/images/default.png')); ?>" alt="User" width="65%" height="175"
                  class="img-rounded avatarUser" />
              </div>
              <div class="custom-file" id="customFile" style="margin-top: 15px;" lang="es">
                <input type="file" class="custom-file-input" name="image_url" id="mindfulImg"
                  aria-describedby="fileHelp" required>
                <label class="custom-file-label" for="exampleInputFile">
                  Select image...
                </label>
              </div>
            </div>
            <div class="form-group">
              <label>Sound</label>
              <input type="file" class="form-control" name="sound_link">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success shadow-btn btn-block">Create</button>
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

<!-- Guided Meditation tool add modal -->
<div class="modal fade" id="modal-guide-tool-add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Guided Meditation</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form class="sub-tool-form" action="<?php echo e(route('guided-tools.store')); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="box-body">
            <div class="form-group">
              <div><label>Title</label></div>
              <span>English</span>
              <input type="text" name="title_english" class="form-control" required />
              <span>French</span>
              <input type="text" name="title_frensh" class="form-control" required />
            </div>
            <div class="form-group">
              <div><label>Description</label></div>
              <span>English</span>
              <textarea name="description_english" class="form-control" required></textarea>
              <span>French</span>
              <textarea name="description_frensh" class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <div><label>File Name</label></div>
              <span>English</span>
              <input type="text" name="file_name_english" class="form-control" required />
              <span>French</span>
              <input type="text" name="file_name_frensh" class="form-control" required />
            </div>
            <div class="form-group">
              <label>File Upload</label>
              <input type="file" class="form-control" name="file_link">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success shadow-btn btn-block">Create</button>
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

<!-- Self Hypnosis tool add modal -->
<div class="modal fade" id="modal-selfhyp-tool-add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Self Hypnosis</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form class="sub-tool-form" action="<?php echo e(route('selfhyp-tools.store')); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="box-body">
            <div class="form-group">
              <div><label>Title</label></div>
              <span>English</span>
              <input type="text" name="title_english" class="form-control" required />
              <span>French</span>
              <input type="text" name="title_frensh" class="form-control" required />
            </div>
            <div class="form-group">
              <div><label>Description</label></div>
              <span>English</span>
              <textarea name="description_english" class="form-control" required></textarea>
              <span>French</span>
              <textarea name="description_frensh" class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <div><label>File Name</label></div>
              <span>English</span>
              <input type="text" name="file_name_english" class="form-control" required />
              <span>French</span>
              <input type="text" name="file_name_frensh" class="form-control" required />
            </div>
            <div class="form-group">
              <label>File Upload</label>
              <input type="file" class="form-control" name="file_link">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success shadow-btn btn-block">Create</button>
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
<?php /**PATH D:\ZZZZZZZZZ\vieva_project\resources\views/backend/superadmin/content/subtools.blade.php ENDPATH**/ ?>