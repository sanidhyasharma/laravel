<?php $__env->startSection('content'); ?>


<form action="/task" method="POST" role="form" style="display: inline-block;margin-left: 250px; width: 600px ;margin-top: 100px">

<?php echo e(csrf_field()); ?>


	<legend style="color: white">New Task</legend>

	<div class="form-group">
            		
       <label for="title" style="color: white">Title</label>
       <input type="text" name="task" class="form-control" id="" placeholder="Input Field">


	</div>

	<div class="form-group">
            		
       <label for="description" style="color: white">Description</label>
       <textarea name="description" type="text" class="form-control" id="" s></textarea>


	</div>
	<button type="submit" class="btn btn-primary">Submit</button>

	

</form>







<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Users/apple/sandy/resources/views/tasks/create.blade.php */ ?>