<?php
$idP = $_GET['id'];
?>
  
  
  
  <div class="col-9">
    <div class="row">

      <?php

      $product = new Product($con);
      echo printProductByCommentary($product->getProductByID($idP));

      ?> 

    </div>
  </div>
</div>

<!-- <div class="row justify-content-center mt-4">
    <div class="col-6">
        <h1 class="text-center h2">Iniciar Sesión</h1>
    </div>
</div>




<div class="row justify-content-center">
    <div class="col-12 col-md-6">
        <div class="card mb-4">
            <div class="card-body">
                <form action="admin/index.php?section=products" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="" value="<?php echo isset($usuario->usuario)?$usuario->usuario:'';?>">  
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="clave" name="clave" placeholder="**********"> 
                    </div>
                    <button type="submit" class="btn btn-info btn-block" name="login">Ingresar</button>

                </form>
            </div>
        </div>    
    </div>
</div> -->