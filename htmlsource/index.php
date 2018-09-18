<?php
include('../include/conn.php');
include('../include/top-most.php');
include('../include/header.php');
?>

<body>
	<div class="content">
		<div class="container">
            <div class="card-columns">	
				<?php
                    $query="SELECT * FROM foodmenu ORDER BY id DESC";
                    $result=mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($result))
                    {
                ?>
                <div class="card border-success mb-3  w-75">
                    <img class="card-img-top" src="data:image/jpg;base64,
                    <?PHP echo base64_encode($row['food_image']) ?>" alt="Card image cap">
                    <div class="card-body ">      
                        <h1 class="card-title"><?php echo $row['food_name'] ?></h1>
                        <p class="card-text"> <b>Ingradients: </b><?php echo $row['ingradients'] ?></p>
                        <p class="card-text"> Price:<?php echo $row['price'] ?></p>
                        <a  href="#" class="btn btn-success">Order Now</a>
                    </div>
                </div>  
                <?PHP
						}
                ?>
            </div>
		</div>
	</div>
<?php include('../include/footer.php'); ?>