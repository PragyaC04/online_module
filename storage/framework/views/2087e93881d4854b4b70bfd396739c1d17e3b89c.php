<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  
  <div class="card">
    <div class="card-header"><h4>Tests</h4></div>
    <div class="card-body">
    <?php $count = 0; ?>
    <?php $__currentLoopData = $qual; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a href="view/<?php echo e($q->setid); ?>"><p size=20px><?php echo e($q->setid); ?><br></p></a>
      <?php $count=$count+1; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        <a href="addt/<?php echo e($count+1); ?>" class="btn btn-success">Add test</a>
    

    </div> 
  </div>

  
</div>

</body>
</html>

<?php /**PATH C:\xampp\htdocs\onlinemodule\resources\views/tests.blade.php ENDPATH**/ ?>