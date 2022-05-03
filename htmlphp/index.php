<?php

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
