<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="user.php" class="text-light">Add User</a></button>
    </div>

    <table class="table" class="container">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>

  <tbody>
    <?php
  $sql="select * from `crud`";
  $result=mysqli_query($con,$sql);
  if($result){
    //  cannot write form all the record so we are going now in while loop 
    // $row=mysqli_fetch_assoc($result);
    // echo $row['name'];
    // $row=mysqli_fetch_assoc($result);
    // echo $row['name'];
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'"class="text-light">update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">delete</a></button>
    </td>
      </tr> ';
    }
  }

    ?>
    
  </tbody>
</table>

</body>
</html>