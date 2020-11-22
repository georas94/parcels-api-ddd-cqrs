<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('da', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'En fejl indtraf ved godkendelse.',
    'Authentication credentials could not be found.' => 'Loginoplysninger kan findes.',
    'Authentication request could not be processed due to a system problem.' => 'Godkendelsesanmodning kan ikke behandles på grund af et systemfejl.',
    'Invalid credentials.' => 'Ugyldige loginoplysninger.',
    'Cookie has already been used by someone else.' => 'Cookie er allerede brugt af en anden.',
    'Not privileged to request the resource.' => 'Ingen adgang til at forespørge ressourcen.',
    'Invalid CSRF token.' => 'Ugyldig CSRF-token.',
    'No authentication provider found to support the authentication token.' => 'Ingen godkendelsesudbyder er fundet til understøttelsen af godkendelsestoken.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen session tilgængelig, sessionen er enten udløbet eller cookies er ikke aktiveret.',
    'No token could be found.' => 'Ingen token kan findes.',
    'Username could not be found.' => 'Brugernavn kan ikke findes.',
    'Account has expired.' => 'Brugerkonto er udløbet.',
    'Credentials have expired.' => 'Loginoplysninger er udløbet.',
    'Account is disabled.' => 'Brugerkonto er deaktiveret.',
    'Account is locked.' => 'Brugerkonto er låst.',
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
