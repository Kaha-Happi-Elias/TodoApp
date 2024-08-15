<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODIF ITEM PAGE</title>
    <link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>MODIFIER UN ITEM</h1>
                <hr>

                <?php if(session('status')): ?>
                    <div class="alert alert-succes">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>

                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="alert alert-danger"><span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

                <form action="/update/traitement" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="id" style="display: none;" value="<?php echo e($items->id); ?>">
                    <div class="row">
                        <div class="col-25">
                            <label for="Titre" class="form-label">Titre</label>
                        </div>
                        <div class="col-75">
                            <input type="text" class="form-control" id="Titre" name="titre" value="<?php echo e($items->titre); ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="Description" class="form-label">Description</label>
                        </div>
                        <div class="col-75">
                            <textarea name="description" id="Description" value="<?php echo e($items->description); ?>" style="height:200px"></textarea>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-info">Modifier un item</button>
                    <br><br>
                    <a href="/item" class="btn btn-danger">Révenir à la liste des items</a>

                </form>
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\todo_crud\resources\views/item/update.blade.php ENDPATH**/ ?>