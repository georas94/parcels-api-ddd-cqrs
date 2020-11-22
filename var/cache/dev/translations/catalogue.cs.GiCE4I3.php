<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('cs', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Při ověřování došlo k chybě.',
    'Authentication credentials could not be found.' => 'Ověřovací údaje nebyly nalezeny.',
    'Authentication request could not be processed due to a system problem.' => 'Požadavek na ověření nemohl být zpracován kvůli systémové chybě.',
    'Invalid credentials.' => 'Neplatné přihlašovací údaje.',
    'Cookie has already been used by someone else.' => 'Cookie již bylo použité někým jiným.',
    'Not privileged to request the resource.' => 'Nemáte oprávnění přistupovat k prostředku.',
    'Invalid CSRF token.' => 'Neplatný CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Poskytovatel pro ověřovací token nebyl nalezen.',
    'No session available, it either timed out or cookies are not enabled.' => 'Session není k dispozici, vypršela její platnost, nebo jsou zakázané cookies.',
    'No token could be found.' => 'Token nebyl nalezen.',
    'Username could not be found.' => 'Přihlašovací jméno nebylo nalezeno.',
    'Account has expired.' => 'Platnost účtu vypršela.',
    'Credentials have expired.' => 'Platnost přihlašovacích údajů vypršela.',
    'Account is disabled.' => 'Účet je zakázaný.',
    'Account is locked.' => 'Účet je zablokovaný.',
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
