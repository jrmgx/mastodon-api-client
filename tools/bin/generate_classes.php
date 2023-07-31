<?php

declare(strict_types=1);

use Tools\CollectionClassTemplate;
use Tools\Entity;
use Tools\EntitySpecsRepository;
use Tools\ModelClassTemplate;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

// $entity = new Entity('Role');
// $classTemplate = new ModelClassTemplate($entity);

// $entity = new Entity('Admin::Ip');
// $classTemplate = new CollectionClassTemplate($entity);

// echo 'Writing file ... ';
// $classTemplate->write(true);
// echo "Done!\n\n";

// $classTemplate = new ModelClassTemplate($entity);

// echo 'Writing file ... ';
// $classTemplate->write(true);
// echo "Done!\n\n";

$specsRepo = new EntitySpecsRepository();

foreach ($specsRepo->getAllEntityNames() as $name) {
    $entity = new Entity($name);
    $classTemplate = new ModelClassTemplate($entity);

    echo "Writing file for entity {$name}... ";
    $classTemplate->write(true);
    echo "Done!\n\n";
}

// print_r($specsRepo->getNamesWithCollection() ); exit;

foreach ($specsRepo->getNamesWithCollection() as $name) {
    $entity = new Entity($name);
    $classTemplate = new CollectionClassTemplate($entity);

    echo "Writing file for entity {$name}... ";
    $classTemplate->write(true);
    echo "Done!\n\n";
}