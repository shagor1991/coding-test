<?php $__env->startSection('content'); ?>
<div class="container-fluid app-body">
	

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Recent Post sent to Buffer </h3>
		</div>
		<div class="panel-body">
			<div class="row" style="margin-bottom:15px;">
				<div class="col-md-4">
					<input type="text" name="query" class="form-control" placeholder="Search">
				</div>
				<div class="col-md-4">
					<input type="date" name="date" class="form-control">
				</div>
				<div class="col-md-4">
					<select name="" id="" class="form-control">
						<?php $__currentLoopData = $allgroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each_group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($each_group->id); ?>"><?php echo e($each_group->name); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>						
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered"> 
						<thead>
							<tr>
								<td>Group Name</td>
								<td>Group Type </td>
								<td>Account Name</td>
								<td>Post Text</td>
								<td>Time</td>
							</tr>
						</thead> 
						<tbody> 
							<?php $__currentLoopData = $histories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>					
							
							<tr>
								<td><?php echo e($history->groupInfo->name); ?></td>
								<td><?php echo e($history->groupInfo->type); ?></td>
								<td><?php echo e($history->accountInfo->name); ?></td>
								<td><?php echo e($history->post->text); ?></td>
								<td><?php echo e($history->created_at->format('D M, Y H:i')); ?> </td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody> 
					</table>
					<?php echo e($histories->links()); ?>

				</div>
			</div> 
		</div>
	  </div>


	<history-component/>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>