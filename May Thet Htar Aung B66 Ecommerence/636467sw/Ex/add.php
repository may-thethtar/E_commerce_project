<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>Responsive Navigation Bar</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style>
  * {
    padding: 5;
    margin: 5;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;

  }

  body {
    font-family: montserrat;
    background: #fff;
  }

  table {
    border: 1 px black;
    padding-up: 10px;
  }

  table,
  td,
  tr {
    padding: 15px;
    font-size: 20px;
    line-height: 3;
    color: #332;
    background-color: #fff;
    height: 20px;
    vertical-align: up;
    width: 80%;

  }

  table,
  th,
  td {
    border: 1px solid black;
    border-collapse: collapse;
  }

  table.center {
    margin-left: auto;
    margin-right: auto;
  }

  main {
    text-align: center;
  }


  nav {
    background: #23463f;
    height: 80px;
    width: 100%;
  }

  label.logo {
    color: #fff;
    font-size: 35px;
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
  }

  nav ul {
    float: right;
    margin-right: 20px;
  }

  nav ul li {
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
  }

  nav ul li a {
    color: #fff;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
  }

  a.active,
  a:hover {
    background: #fff;
    transition: .5s;
    color: #022f69;
  }

  .checkbtn {
    font-size: 30px;
    color: #fff;
    float: right;
    line-height: 80px;
    margin-right: 40px;
    cursor: pointer;
    display: none;
  }

  #check {
    display: none;
  }

  @media (max-width: 968px) {
    label.logo {
      font-size: 30px;
      padding-left: 50px;
    }

    nav ul li a {
      font-size: 16px;
    }
  }

  @media (max-width: 875px) {
    .checkbtn {
      display: block;
    }

    nav ul {
      position: fixed;
      width: 100%;
      height: 100vh;
      background: #27282c;
      top: 80px;
      left: -100%;
      text-align: center;
      transition: all .5s;
    }

    nav ul li {
      display: block;
      margin: 50px 0;
      line-height: 30px;
    }

    nav ul li a {
      font-size: 20px;
    }

    a:hover,
    a.active {
      background: none;
      color: #0082e6;
    }

    #check:checked~ul {
      left: 0;
    }

    main.img.center {
      display: block;
      margin-left: auto;
      margin-right: auto;

    }
</style>

<body>

  <div class=header>
    <nav>

      <i class="fas fa-bars"></i>

      <label class="logo">ALL 4 U</label>
      <ul>
        
        <li><a href="view.php">View Item</a></li>
        <li><a class="active" href="add.php">Add Item</a></li>
        <li><a href="home.php">Feedback</a></li>
        <!-- <li><a href="viewadmin.php">View admin</a></li> -->
        <li><a  href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </div>
  <main>
    <form method="POST" action="add.php" enctype="multipart/form-data">
      <table class="center">
        <tr>
          <td text-align="center"><label for="fname">Food Name</label></td>
          <td><input type="text" id="lname" name="foodname" placeholder="Enter Foodname"></td>
        </tr>

        <tr>
          <td> <label for="cate">Category</label></td>
          <td> <input type="text" id="cate" name="category" placeholder="Enter category"></td>
        </tr>

        <tr>
          <td><label for="des" text-align="center">Descripton</label> </td>
          <td><textarea id="des" name="description" placeholder="Write something.."></textarea></td>
        </tr>

        <tr>
          <td><label for="price">Price</label> </td>
          <td> <input type="text" id="price" name="price" placeholder="Enter price"></textarea></td>
        </tr>

        <tr>
          <td><label for="image">Image</label></td>
          <td> <input type="file" id="image" name="image" placeholder="Choose a image"></textarea></td>
        </tr>

      </table><br><br>
      <input class="btn btn-primary" type="submit" name="buy" value="Submit" text-align="center"><br><br>
      
		<br><br>
    </form>
  </main>



  <?php
  if (isset($_POST['submit'])) {
    if (isset($_FILES['image'])) {
      $errors = array();
      $filename = $_FILES['image']['name'];
      $filesize = $_FILES['image']['size'];
      $filetype = $_FILES['image']['type'];
      $filetmp = $_FILES['image']['tmp_name'];
      $file_ext = explode("/", $filetype);
      $fileex = strtolower(end($file_ext));
      $extension = array("png", "jpg", "jpeg", "gif");
      if (in_array($fileex, $extension) == FALSE) {
        $errors[] = "invalid file type";
        print_r($errors);
      } else if ($filesize > 2097152) {
        $errors[] = "invalid file size";
        print_r($errors);
      } else if (empty($errors) == TRUE) {
        move_uploaded_file($filetmp, "image/" . $filename);
      } else print_r($errors);
    }
    try {
      include("connection.php");
      $sql = "INSERT INTO Item (foodname,category,description,price,image)
         VALUES(?,?,?,?,?)";
      $sq = $db->prepare($sql);

      $foodname = $_POST['foodname'];
      $category = $_POST['category'];
      $description = $_POST['description'];
      $price = $_POST['price'];
      $image = $filename;

      if ($sq->execute(array($foodname, $category, $description, $price, $image))) {
      }
      // echo "insert data successful";
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  ?>
  <?php 
  include 'footer.php';
  ?>

</body>

</html>