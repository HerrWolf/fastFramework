<?php

use fastFramework\helper\twig\TwigHelper;
use fastFramework\kernel\FastFrameworkHttpKernel;
use Symfony\Component\HttpFoundation\Request;

require_once 'vendor/autoload.php';

try {
    $request = Request::createFromGlobals();
    $kernel = FastFrameworkHttpKernel::getInstance();
    $response = $kernel->handle($request);
    $response->send();
} catch (Exception $e) {
    echo TwigHelper::renderTemplate('error', array(
        'message' => $e->getMessage(),
        'stackTrace' => $e->getTraceAsString(), $e->getTrace()
    ));
}
