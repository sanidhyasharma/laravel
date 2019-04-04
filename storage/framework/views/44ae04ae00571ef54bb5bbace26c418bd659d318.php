<?php $__env->startSection('content'); ?>
        
<?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



	<div class="panel panel-primary" style="border-width: 2px">
		<div class="panel-heading" style="border-width: 2px">

			<h3 class="panel-title   "> <?php echo e($task->task); ?> </h3>
			
            <a class="btn btn-default btn-xs" href="<?php echo e(route('task.edit',$task->id)); ?>" style="margin-left: 1020px; position: absolute;  " >Edit</a>

            <form action="<?php echo e(route('task.destroy',$task->id)); ?>" method="post">
            	
             <?php echo e(csrf_field()); ?>

             <?php echo e(method_field('delete')); ?>

             <input type="submit" value="delete" class="btn btn-default btn-xs " style="margin-left: 1070px;position: absolute; ">

            </form>
            
		</div>
		<div class="panel-body">
			
<?php echo e($task->description); ?>

		</div>


	</div>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Users/apple/sandy/resources/views/tasks.blade.php */ ?>