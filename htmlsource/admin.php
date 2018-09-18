<?php
 
    include('../include/top-most.php'); 
    include('../include/header.php'); 
    ?>

<div class="form" >
<div class="card text-center text-white bg-info mb-3">
  <div class="card-body">
  <form action="adminlogic.php" method="POST" enctype="multipart/form-data">
        <div >
            <label>Food Title</label>
            
            <input type="text" name="food_name"/>
        </div>
    <div>
        <label>Ingradients</label>
        <input type="text" name="ingradients" placeholder="Food ingradients"/>
    </div>
    <div>
        <label>Food Price</label>
       
        <input type="text" name="price"/>
    </div>
    <div>
        <label >Upload Image</label>
        <input type="file" name="foodimagefile" style="margin-left:540px;"/>
        <input type="submit" class="btn btn-primary" name="submit" value="Upload data"/>
    </div>
  </div>
</div>


    </form>
</div>
<?php
include('../include/footer.php');

?>

