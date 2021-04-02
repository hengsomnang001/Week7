<?php
function even($var)
{
  return !($var & 1);
}

$array = [2, 3, 4, 6, 7, 9, 11, 20];

echo "even :\n";
print_r(array_filter($array, "even"));

?>