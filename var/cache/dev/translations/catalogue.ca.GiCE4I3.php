<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ca', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ha succeït un error d\'autenticació.',
    'Authentication credentials could not be found.' => 'No s\'han trobat les credencials d\'autenticació.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud d\'autenticació no s\'ha pogut processar per un problema del sistema.',
    'Invalid credentials.' => 'Credencials no vàlides.',
    'Cookie has already been used by someone else.' => 'La cookie ja ha estat utilitzada per una altra persona.',
    'Not privileged to request the resource.' => 'No té privilegis per solicitar el recurs.',
    'Invalid CSRF token.' => 'Token CSRF no vàlid.',
    'No authentication provider found to support the authentication token.' => 'No s\'ha trobat un proveïdor d\'autenticació que suporti el token d\'autenticació.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hi ha sessió disponible, ha expirat o les cookies no estan habilitades.',
    'No token could be found.' => 'No s\'ha trobat cap token.',
    'Username could not be found.' => 'No s\'ha trobat el nom d\'usuari.',
    'Account has expired.' => 'El compte ha expirat.',
    'Credentials have expired.' => 'Les credencials han expirat.',
    'Account is disabled.' => 'El compte està deshabilitat.',
    'Account is locked.' => 'El compte està bloquejat.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
