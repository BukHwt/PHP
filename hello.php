<?php

$articles_details = [
  ["title" => "First Post", "content" => "This is the first post"],
  ["title" => "Another Post", "content" => "Second Post yall"],
  ["title" => "Read This!", "content" => "Important stuff"]
];

$articles = [
  'a' => "First Post",
  'b' => "Another Post",
   'c' => "Read This!"
];

forEach ($articles as $index => $article) {
  echo $index . " - " . $article, ", ";
}

$array = [];

if (empty($array)) {
  echo "the condition is true";
} else {
  echo "the condition is false";
}
