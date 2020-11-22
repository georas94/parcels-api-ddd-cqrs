<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lb', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Bei der Authentifikatioun ass e Feeler opgetrueden.',
    'Authentication credentials could not be found.' => 'Et konnte keng Zouganksdate fonnt ginn.',
    'Authentication request could not be processed due to a system problem.' => 'D\'Ufro fir eng Authentifikatioun konnt wéinst engem Problem vum System net beaarbecht ginn.',
    'Invalid credentials.' => 'Ongëlteg Zouganksdaten.',
    'Cookie has already been used by someone else.' => 'De Cookie gouf scho vun engem anere benotzt.',
    'Not privileged to request the resource.' => 'Keng Rechter fir d\'Ressource unzefroen.',
    'Invalid CSRF token.' => 'Ongëltegen CSRF-Token.',
    'No authentication provider found to support the authentication token.' => 'Et gouf keen Authentifizéierungs-Provider fonnt deen den Authentifizéierungs-Token ënnerstëtzt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Keng Sëtzung disponibel. Entweder ass se ofgelaf oder Cookies sinn net aktivéiert.',
    'No token could be found.' => 'Et konnt keen Token fonnt ginn.',
    'Username could not be found.' => 'De Benotzernumm konnt net fonnt ginn.',
    'Account has expired.' => 'Den Account ass ofgelaf.',
    'Credentials have expired.' => 'D\'Zouganksdate sinn ofgelaf.',
    'Account is disabled.' => 'De Konto ass deaktivéiert.',
    'Account is locked.' => 'De Konto ass gespaart.',
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
