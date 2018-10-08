<?php

use DrupalFinder\DrupalFinder;

set_time_limit(0);

$autoloaders = [
  __DIR__ . '/../vendor/autoload.php'
];

foreach ($autoloaders as $file) {
  if (file_exists($file)) {
    $autoloader = $file;
    break;
  }
}

if (isset($autoloader)) {
  require_once $autoloader;
}
else {
  echo 'You must set up the project dependencies using `composer install`' . PHP_EOL;
  exit(1);
}

$ROOT = getcwd();
$drupalRoot = FALSE;

$drupalFinder = new DrupalFinder();

if ($drupalFinder->locateRoot($ROOT)) {
  $drupalRoot = $drupalFinder->getDrupalRoot();
}

if ($drupalRoot === FALSE) {
  echo 'No drupal found.' . PHP_EOL;
  exit(1);
}

echo $drupalRoot;
