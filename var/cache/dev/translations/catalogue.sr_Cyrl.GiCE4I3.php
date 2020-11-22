<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sr_Cyrl', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Изузетак при аутентификацији.',
    'Authentication credentials could not be found.' => 'Аутентификациони подаци нису пронађени.',
    'Authentication request could not be processed due to a system problem.' => 'Захтев за аутентификацију не може бити обрађен због системских проблема.',
    'Invalid credentials.' => 'Невалидни подаци за аутентификацију.',
    'Cookie has already been used by someone else.' => 'Колачић је већ искоришћен од стране неког другог.',
    'Not privileged to request the resource.' => 'Немате права приступа овом ресурсу.',
    'Invalid CSRF token.' => 'Невалидан CSRF токен.',
    'No authentication provider found to support the authentication token.' => 'Аутентификациони провајдер за подршку токена није пронађен.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесија није доступна, истекла је или су колачићи искључени.',
    'No token could be found.' => 'Токен не може бити пронађен.',
    'Username could not be found.' => 'Корисничко име не може бити пронађено.',
    'Account has expired.' => 'Налог је истекао.',
    'Credentials have expired.' => 'Подаци за аутентификацију су истекли.',
    'Account is disabled.' => 'Налог је онемогућен.',
    'Account is locked.' => 'Налог је закључан.',
  ),
));

$catalogueSr = new MessageCatalogue('sr', array (
));
$catalogue->addFallbackCatalogue($catalogueSr);
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
$catalogueSr->addFallbackCatalogue($catalogueFr);

return $catalogue;
