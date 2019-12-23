<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>
  h4{ 
      word-spacing: 4px;
      letter-spacing: 1px;
      text-decoration: none;
      font-size: 1.2em;
   }

   .right{
    text-align:right;
   }
  </style>
</head>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Test Number: <?php echo e($a); ?></h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#sect1"><h4>Qualitative Analysis</h4></a></li>
    <li><a data-toggle="tab" href="#sect2"><h4>Analytical Analysis</h4></a></li>
    <li><a data-toggle="tab" href="#sect3"><h4>Creative Analysis</h4></a></li>
    <li><a data-toggle="tab" href="#sect4"><h4>Comprehension Analysis</h4></a></li>
  </ul>
  <br>
  <div class="tab-content">
    <!-------------------------------------------Qualitative--------------------------------------------->
    <div id="sect1" class="tab-pane fade in active">
        <?php $__currentLoopData = $qual; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="card-header">
                    Q<?php echo e($q->qid); ?>&nbsp;
                    <?php echo e($q->question); ?>

                    <img src="<?php echo e(asset('uploads/questions/'.$q->questionimg)); ?>"  alt="">
                    <p class="right"><?php echo e($q->marks); ?></p>
                </div>
                
                
                <div class="card-body">
                    <input type="radio" name="opt" value="1"> <?php echo e($q->option1); ?> <img src="<?php echo e(asset('uploads/option1/'.$q->option1img)); ?>"  alt=""> <br>
                    <input type="radio" name="opt" value="2"> <?php echo e($q->option2); ?> <img src="<?php echo e(asset('uploads/option2/'.$q->option2img)); ?>"  alt=""> <br>
                    <input type="radio" name="opt" value="3"> <?php echo e($q->option3); ?> <img src="<?php echo e(asset('uploads/option3/'.$q->option3img)); ?>"  alt=""> <br>
                    <input type="radio" name="opt" value="4"> <?php echo e($q->option4); ?> <img src="<?php echo e(asset('uploads/option4/'.$q->option4img)); ?>"  alt=""> <br>
                </div> 
            
            </div>
            
            <div class="card-footer">
                <input type="hidden" name="t_id" value="<?php echo e($q->setid); ?>">
                <input type="hidden" name="quest_id" value="<?php echo e($q->qid); ?>">
                <input type="submit" value="Edit">
                <a href="<?php echo e(url("'qedit/ ' . $a . '/' . $q->qid .")); ?>" class="btn btn-success">Edit</a>
                <a href="<?php echo e($a); ?>/route('qualedit',['sid' => $q->setid,'qid' => $q->qid])" class="btn btn-success">Edit</a>
                <button type="ditbutton" onclick="window.location.href = 'url (/qedit/<?php echo e($a); ?>/<?php echo e($q->qid); ?>)'" class="btn btn-primary">Edit</button>
                
                <p class="right">Correct option is: <?php echo e($q->correct); ?></p>  
            </div>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        
    </div>

    <!-------------------------------------------Analytical--------------------------------------------->
    <div id="sect2" class="tab-pane fade">
      <?php $__currentLoopData = $analy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="card-header">
                    Q<?php echo e($q->qid); ?>&nbsp;
                    <?php echo e($q->question); ?>

                    <img src="<?php echo e(asset('uploads/questions/'.$q->questionimg)); ?>"  alt="">
                    <p class="right"><?php echo e($q->marks); ?></p>
                </div>
                
                
                <div class="card-body">
                    <input type="radio" name="opt" value="1"> <?php echo e($q->option1); ?> <img src="<?php echo e(asset('uploads/option1/'.$q->option1img)); ?>"  alt=""> <br>
                    <input type="radio" name="opt" value="2"> <?php echo e($q->option2); ?> <img src="<?php echo e(asset('uploads/option2/'.$q->option2img)); ?>"  alt=""> <br>
                    <input type="radio" name="opt" value="3"> <?php echo e($q->option3); ?> <img src="<?php echo e(asset('uploads/option3/'.$q->option3img)); ?>"  alt=""> <br>
                    <input type="radio" name="opt" value="4"> <?php echo e($q->option4); ?> <img src="<?php echo e(asset('uploads/option4/'.$q->option4img)); ?>"  alt=""> <br>
                </div> 
            
            </div>
            
            <div class="card-footer">
                <button type="button" onclick="window.location='<?php echo e(url ("/analytical")); ?>'" class="btn btn-primary">Edit</button>
                <p class="right">Correct option is: <?php echo e($q->correct); ?></p>  
            </div>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        <button type="button" onclick="window.location='<?php echo e(url ("/question")); ?>'" class="btn btn-primary">Back</button>
    </div>
    
    
    <!-------------------------------------------Creative--------------------------------------------->
    <div id="sect3" class="tab-pane fade">
        <?php $__currentLoopData = $creat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="card-header">
                    Q<?php echo e($q->qid); ?>&nbsp;
                    <?php echo e($q->question); ?>

                    <img src="<?php echo e(asset('uploads/questions/'.$q->questionimg)); ?>"  alt="">
                    <p class="right"><?php echo e($q->marks); ?></p>
                </div>
                
                
                <div class="card-body">
                    <input type="radio" name="opt" value="1"> <?php echo e($q->option1); ?> <img src="<?php echo e(asset('uploads/option1/'.$q->option1img)); ?>"  alt=""> <br>
                    <input type="radio" name="opt" value="2"> <?php echo e($q->option2); ?> <img src="<?php echo e(asset('uploads/option2/'.$q->option2img)); ?>"  alt=""> <br>
                    <input type="radio" name="opt" value="3"> <?php echo e($q->option3); ?> <img src="<?php echo e(asset('uploads/option3/'.$q->option3img)); ?>"  alt=""> <br>
                    <input type="radio" name="opt" value="4"> <?php echo e($q->option4); ?> <img src="<?php echo e(asset('uploads/option4/'.$q->option4img)); ?>"  alt=""> <br>
                    <input type="radio" name="opt" value="5"> <?php echo e($q->option5); ?> <img src="<?php echo e(asset('uploads/option5/'.$q->option5img)); ?>"  alt=""> <br>
                </div> 
            
            </div>
            
            <div class="card-footer">
                <button type="button" onclick="window.location='<?php echo e(url ("/creative")); ?>'" class="btn btn-primary">Edit</button>
                <p class="right">Correct option is: <?php echo e($q->correct); ?></p>  
            </div>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
       <button type="button" onclick="window.location='<?php echo e(url ("/question")); ?>'" class="btn btn-primary">Back</button>

    </div>
    
    <!-------------------------------------------Comprehension--------------------------------------------->
    <div id="sect4" class="tab-pane fade">
        <?php $__currentLoopData = $comp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="card-header">
                    Q<?php echo e($q->qid); ?>&nbsp;
                    <?php echo e($q->para); ?><br>
                    <?php echo e($q->question); ?>

                    <img src="<?php echo e(asset('uploads/questions/'.$q->questionimg)); ?>"  alt="">
                    <p class="right"><?php echo e($q->marks); ?></p>
                </div>
                
                
                <div class="card-body">
                    <input type="radio" name="opt" value="1"> <?php echo e($q->option1); ?> <img src="<?php echo e(asset('uploads/option1/'.$q->option1img)); ?>"  alt=""> <br>
                    <input type="radio" name="opt" value="2"> <?php echo e($q->option2); ?> <img src="<?php echo e(asset('uploads/option2/'.$q->option2img)); ?>"  alt=""> <br>
                    <input type="radio" name="opt" value="3"> <?php echo e($q->option3); ?> <img src="<?php echo e(asset('uploads/option3/'.$q->option3img)); ?>"  alt=""> <br>
                    <input type="radio" name="opt" value="4"> <?php echo e($q->option4); ?> <img src="<?php echo e(asset('uploads/option4/'.$q->option4img)); ?>"  alt=""> <br>
                </div> 
            
            </div>
            
            <div class="card-footer">
                <button type="button" onclick="window.location='<?php echo e(url ("/comprehension")); ?>'" class="btn btn-primary">Edit</button>
                <p class="right">Correct option is: <?php echo e($q->correct); ?></p>  
            </div>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
       <button type="button" onclick="window.location='<?php echo e(url ("/question")); ?>'" class="btn btn-primary">Back</button>

    </div>

  </div>
</div>

</body>
</html>

<?php /**PATH C:\xampp\htdocs\onlinemodule\resources\views/viewtest.blade.php ENDPATH**/ ?>