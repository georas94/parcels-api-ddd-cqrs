<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lv', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Radās autentifikācijas kļūda.',
    'Authentication credentials could not be found.' => 'Autentifikācijas dati nav atrasti.',
    'Authentication request could not be processed due to a system problem.' => 'Autentifikācijas pieprasījums nevar tikt apstrādāts sistēmas problēmas dēļ.',
    'Invalid credentials.' => 'Nederīgi autentifikācijas dati.',
    'Cookie has already been used by someone else.' => 'Kāds cits jau izmantoja sīkdatni.',
    'Not privileged to request the resource.' => 'Nav tiesību ši resursa izsaukšanai.',
    'Invalid CSRF token.' => 'Nederīgs CSRF talons.',
    'No authentication provider found to support the authentication token.' => 'Nav atrasts, autentifikācijas talonu atbalstošs, autentifikācijas sniedzējs.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija nav pieejama - vai nu tā beidzās, vai nu sīkdatnes nav iespējotas.',
    'No token could be found.' => 'Nevar atrast nevienu talonu.',
    'Username could not be found.' => 'Nevar atrast lietotājvārdu.',
    'Account has expired.' => 'Konta derīguma termiņš ir beidzies.',
    'Credentials have expired.' => 'Autentifikācijas datu derīguma termiņš ir beidzies.',
    'Account is disabled.' => 'Konts ir atspējots.',
    'Account is locked.' => 'Konts ir slēgts.',
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
