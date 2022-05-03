<?php

// $articles_details = [
//   ["title" => "First Post", "content" => "This is the first post"],
//   ["title" => "Another Post", "content" => "Second Post yall"],
//   ["title" => "Read This!", "content" => "Important stuff"]
// ];

$articles = [
  'a' => "First Post",
  'b' => "Another Post",
   'c' => "Read This!"
];

forEach ($articles as $index => $article) {
  echo $index . " - " . $article, ", ";
}

$array = [];

for ($i = 1; $i <= 10; $i++) {
    if (i < 4) {
        $array[] = "a";
    } elseif (i >= 8) {
        $array[] = "c";
    } else {
        $array[] = "b";
    }
}

if (empty($array)) {
  echo "the condition is true";
} else {
  echo "the condition is false";
}

$month = 1;

while ($month <= 12) {
  echo $month . ", ";
  $month = $month +1;
}

for ($i = 1; $i <= 10; $i ++) {
  echo $i . ", ";
}

$hour = 23;

if ($hour < 12) {
  echo "Good Morning";
} elseif ($hour < 18) {
  echo "Good Afternoon";
} elseif ($hour <22) {
  echo "Good Evening";
} else {
  echo "Good night";
}

$day = "rue";

switch ($day) {
  case "Mon":
    echo "Monday";
    break;
  case "Tue":
    echo "Tuesday";
    break;
  case "Wed":
    echo "Wednesday";
    break;
  case "Thu":
    echo "Thursday";
    break;
  case "Fri":
    echo "Friday";
    break;
  case "Sat":
      echo "Saturday";
      break;
  case "Sun":
      echo "Sunday";
      break;
  default:
    echo "No information avaialbe for the day.";
    break;
}
