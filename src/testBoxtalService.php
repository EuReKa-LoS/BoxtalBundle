<?php

use EurekaLos\BoxtalBundle\WebService;

require_once __DIR__ . '/BoxtalService.php';

// Instanciation de la classe WebService
$webService = new WebService();

// Configuration de l'environnement (test ou prod)
$webService->setEnv('test');

// Configuration des informations d'identification
$boxtalService->setLogin('dany.landrin@gmail.com');
$boxtalService->setPassword('Twx5LdOWxWApSytVAYg9');

// Exécution du test de connexion
if ($boxtalService->testConnection()) {
    echo 'La connexion est fonctionnelle.';
} else {
    echo 'La connexion a échoué.';
}
