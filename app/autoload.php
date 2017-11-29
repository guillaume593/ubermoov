<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/** @var ClassLoader $loader */
$loader = require __DIR__.'/../vendor/autoload.php';
Debug::enable();

$kernel = new AppKernel('dev', true);
// $kernel->loadClassCache();
$request = Request::createFromGlobals();

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;
