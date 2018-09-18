<?php
include('../include/conn.php');
    if(isset($_POST['submit']))
    {  
       
        $foodimageconent = addslashes(file_get_contents($_FILES['foodimagefile']['tmp_name']));
      $msg="";
        $food_name=$_POST['food_name'];
        $ingradients=$_POST['ingradients'];
        $price=$_POST['price'];
        $sqld=$conn->query("INSERT INTO foodmenu(food_name,ingradients,price,food_image) 
            values('$food_name','$ingradients',$price,'$foodimageconent')");
        
        $msg= "recorded successfully";
    }
        ?>
        <script type="text/javascript">
window.location.href = 'admin.php';
</script>
    
   