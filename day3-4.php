
<?php 
$errors = [];
$missing = [];

if(isset($_POST['send'])){

    $expected = ['name','email','comments'];
    $required = ['name','comments'];
require './includes/process_male.php';


};
?>
<!doctype html>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Get and post</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Contact Us</h1>
<?php if($errors || $missing): ?>
    <p class="warning"> Please fix the item(s) indicated </p>
<?php endif;?>
     
<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
  <p>
    <label for="name">Name:
        <?php if ($missing && in_array('name', $missing)): ?>
        <span class="warning"> Please Enter your name! </span>
        <?php endif; ?>
    </label>

    <input type="text" name="name" id="name"
    <?php 
      if($errors || $missing){

        echo 'value="' . htmlentities($name) . '"';
      }
     ?>
    
    >
  </p>
  <p>
    <label for="email">Email:
        <?php if ($missing && in_array('email', $missing)): ?>
        <span class="warning"> Please Enter your email! </span>
        <?php endif; ?>
    </label>
    <input type="email" name="email" id="email">
  </p>
  <p>
    <label for="comments">Comments:
        <?php if ($missing && in_array('comments', $missing)): ?>
        <span class="warning"> Please Enter your comments! </span>
        <?php endif; ?>
    
    </label>
    <textarea name="comments" id="comments"></textarea>
  </p>
  <p>
    <input type="submit" name="send" id="send" value="Send Comments">
  </p>
</form>
<pre>


<?php     

      if ($_GET) {

      echo 'Content of the $_GET array: <br>';
      print_r($_GET);

    } elseif($_POST) {
        echo 'Content of the $_POST array: <br>';
        print_r($_POST);
    }
    ?>

</pre>
</body>
</html>