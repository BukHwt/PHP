<?php

$db_host = 'localhost';
$db_name = 'cms';
$db_user = 'cms_www';
$db_pass = 'ONoN21T6q-19LDkR';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
  echo mysqli_connect_error();
  exit;
}

$sql = "SELECT *
        From article
        ORDER BY published_at;";

$results = mysqli_query($conn, $sql);

if ($results === false) {
  echo mysqli_error($conn);
} else {
  $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
  var_dump($articles);
}
