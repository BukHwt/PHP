<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "steve";
$db_pass = "steve123";

$conn = mysqli_connect($db_host, $db_name, $db_user, $db_pass);

if (mysqli_connect_error()) {
  echo mysqli_connect_error();
  exit;
}

echo "connected successfully";

$hour = 23;

?>

<!DOCTYPE html>
<html>
<head>
  <title>The Website</title>
  <meta charset="utf-8">
</head>
<body>
  <!-- Comment -->
  <p>Hello <?php echo "Steve"; ?><p/>
    <?php if ($hour < 12): ?>
      Good Morning
    <?php elseif ($hour < 18): ?>
      Good Afternoon
    <?php elseif ($hour <22): ?>
      Good Evenin
    <?php else: ?>
      Good night
    <?php endif; ?>

</body>
</html>
