<?php
$coverage = new SebastianBergmann\CodeCoverage\CodeCoverage;
$coverage->setData(array (
  '/Users/alexandrpopov/Git/example-php/src/autoload.php' => 
  array (
    10 => 
    array (
    ),
    11 => 
    array (
    ),
    12 => 
    array (
    ),
    13 => 
    array (
    ),
    14 => 
    array (
    ),
    15 => 
    array (
    ),
    16 => 
    array (
    ),
    18 => 
    array (
    ),
    19 => 
    array (
    ),
    20 => 
    array (
    ),
    22 => 
    array (
    ),
    25 => 
    array (
    ),
    26 => 
    array (
    ),
  ),
  '/Users/alexandrpopov/Git/example-php/src/Example/Example.php' => 
  array (
    7 => 
    array (
      0 => 'Test::testExample',
    ),
    8 => 
    array (
    ),
    11 => 
    array (
      0 => 'Test::testExample',
    ),
    13 => NULL,
  ),
));
$coverage->setTests(array (
  'UNCOVERED_FILES_FROM_WHITELIST' => 
  array (
    'size' => 'unknown',
    'status' => -1,
  ),
  'Test::testExample' => 
  array (
    'size' => 'unknown',
    'status' => 0,
  ),
));

$filter = $coverage->filter();
$filter->setWhitelistedFiles(array (
  '/Users/alexandrpopov/Git/example-php/src/Example/Example.php' => true,
  '/Users/alexandrpopov/Git/example-php/src/autoload.php' => true,
));

return $coverage;