<?php

require 'vendor/autoload.php';
require 'init.php';

$app = new App();
//$app->add('HelloWorld');

$columns = $app->add('Columns');

$left = $columns->addColumn();
$right = $columns->addColumn();

/****************************************************************
 * You can now remove the text below and write your own Web App *
 *                                                              *
 * Thank you for trying out Agile Toolkit                       *
 ****************************************************************/


$right->add(['Message', 'Welcome to the party!','info'])->text
    ->addParagraph('Our party is using "Bring Your Own Drink" policy,  so be sure '.
    'to grab a beer or lemonade');

$left->add('Form')->setModel(new Guest($app->db));    
    