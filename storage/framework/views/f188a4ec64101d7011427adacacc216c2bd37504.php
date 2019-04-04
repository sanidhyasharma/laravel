<?php $__env->startSection('content'); ?>


<form action="/task/edit/<?php echo e($task->id); ?>" method="POST" role="form" style="display: inline-block;margin-left: 250px; width: 600px ;margin-top: 100px">

<?php echo e(csrf_field()); ?>


<?php echo e(method_field("put")); ?>


	<legend>Editing <?php echo e($task->task); ?></legend>

	<div class="form-group">
            		
       <label for="title">Title</label>
       <input type="text" name="task" class="form-control" id="" placeholder="Input Field" value="<?php echo e($task->task); ?>">


	</div>

	<div class="form-group">
            		
       <label for="description">Description</label>
       <textarea name="description" type="text" class="form-control" id="" > <?php echo e($task->description); ?></textarea>


	</div>
	<button type="submit" class="btn btn-primary">Submit</button>

	

</form>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Users/apple/sandy/resources/views/tasks/edit.blade.php */ ?>