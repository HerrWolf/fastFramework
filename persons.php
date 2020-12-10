<?php

use fastFramework\helper\doctrine\DoctrineHelper;
use fastFramework\helper\twig\TwigHelper;
use fastFramework\model\Person;

require_once 'vendor/autoload.php';

$idSelected = $_GET['person'];
$personRepository = DoctrineHelper::getRepository(Person::class);
$person = $personRepository->find($idSelected);

TwigHelper::renderTemplate('person', [
    'Person' => $person,
]);
