<?php
include 'db.php';
if(isset($_POST['add']))
  mysqli_query($conn,"INSERT INTO items(title,price) VALUES('{$_POST['title']}','{$_POST['price']}')");
if(isset($_GET['delete']))
  mysqli_query($conn,"DELETE FROM items WHERE id=".$_GET['delete']);
$r = mysqli_query($conn,"SELECT * FROM items");
?>
<!DOCTYPE html>
<html>
<head><title>Admin</title></head>
<body>

<h2>Admin Panel</h2>
<a href="index.html">Home</a>

<form method="POST">
  Title: <input type="text" name="title"><br><br>
  Price: <input type="number" name="price"><br><br>
  <input type="submit" name="add" value="Add">
</form>

<table border="1">
<tr><th>ID</th><th>Title</th><th>Price</th><th>Delete</th></tr>
<?php while($row=mysqli_fetch_assoc($r)): ?>
<tr>
  <td><?=$row['id']?></td>
  <td><?=$row['title']?></td>
  <td><?=$row['price']?></td>
  <td><a href="?delete=<?=$row['id']?>">Delete</a></td>
</tr>
<?php endwhile; ?>
</table>

</body>
</html>
