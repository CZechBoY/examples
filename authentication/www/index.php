<?php declare(strict_types=1);

(function() { // we do not want to explose $container to global
	// let bootstrap create Dependency Injection container
	$container = require __DIR__ . '/../App/bootstrap.php';

	// run application
	$container->getByType(Nette\Application\Application::class)->run();
})();
