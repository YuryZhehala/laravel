<?php $__env->startSection('scripts'); ?>
##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
<script src="<?php echo e(asset('/ckeditor/ckeditor.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form enctype="multipart/form-data" method="post" action="<?php echo e(asset('home')); ?>">
<?php echo csrf_field(); ?>

    <div class="form-group">
      <label for="disabledTextInput">ФИО</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Nickname</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Контактный телефон</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">О себе</label>
      <textarea class="form-control ckeditor" name="body" id="editor1"></textarea>
    </div>
    
    <div class="form-group">
      <label for="disabledSelect">Страна</label>
      <select id="disabledSelect"  class="form-control">
        <option>Страна</option>
      </select>
    </div>
    <div class="form-group">
      <label for="disabledSelect">Город</label>
      <select id="disabledSelect" name="city" class="form-control">
        <option>Город</option>
      </select>
    </div>
    <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" name="picture1" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Can't check this
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>