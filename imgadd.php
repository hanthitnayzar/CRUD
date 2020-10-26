<?php 
include 'confs/config.php';
if (isset($_POST['upload'])) {
  $file=$_FILES['image']['name'];
  $tmp = $_FILES['image']['tmp_name'];
  $comment=$_POST['comment'];
  
  $err=array();
  $query="INSERT INTO photos(image,comment) VALUES('$file','$comment')";
  $sql=mysqli_query($conn,$query);
  if ($sql) {
    move_uploaded_file($tmp, "images/$file");
  }
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>


 
<div class="container col-4 pt-4">
  <div class="row">
    <h2 class="text-center">Upload Image</h2>
    <form action="imgadd.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <input type="file" name="image" class="form-control">
      </div>    
      <div class="form-group">
        <textarea name="comment" class="form-control" placeholder="Comment"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" name="upload" class="btn btn-secondary">
      </div>

      <div class="row">
        <h2 class="text-center">Display Image</h2>
      </div>
    </form>


  
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-lg-12">
          <?php 
include 'confs/config.php';

$sql="SELECT * FROM photos";
$result=mysqli_query($conn,$sql);

while ($row=mysqli_fetch_array($result)) { ?>
  
  <img src="images/<?php echo $row['image']; ?>" alt="" width="150">

  <!-- <h2><?php echo $row['comment']; ?></h2> -->
<?php } ?>
    </div>
  </div>
  </div>
</body>
</html>
