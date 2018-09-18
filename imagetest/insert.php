<?php
$conn = mysqli_connet('localhost','root','navee@123','testing');
if(isset($_POST["insert"]))
{
    $file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query= "INSERT INTO images(names_image) VAlUES ('.$file.') ";
    if(mysqli_query($conn,$query)){
        echo '<script>alert("uploaded")</script>';
    }
}
ini_set('display_errors',1);
?>
<!DOCTYPE html>
<html>
<head>
<body>
   <form action="" method="post" enctype="multipart/form-data">
   <input type="file" name="image" id="image"/>
   <br>
   <input type="submit" name="insert"/>
</form>
<?php 
$query="SELECT * from images";
$result= mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
    echo '
    <tr>
    <td>
        <img src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
    </td>
    </tr>
    ';
}
?>
</body>
</head>
</html>