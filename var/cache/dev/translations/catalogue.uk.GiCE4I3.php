<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('uk', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Помилка автентифікації.',
    'Authentication credentials could not be found.' => 'Автентифікаційні дані не знайдено.',
    'Authentication request could not be processed due to a system problem.' => 'Запит на автентифікацію не може бути опрацьовано у зв’язку з проблемою в системі.',
    'Invalid credentials.' => 'Невірні автентифікаційні дані.',
    'Cookie has already been used by someone else.' => 'Хтось інший вже використав цей сookie.',
    'Not privileged to request the resource.' => 'Відсутні права на запит цього ресурсу.',
    'Invalid CSRF token.' => 'Невірний токен CSRF.',
    'No authentication provider found to support the authentication token.' => 'Не знайдено провайдера автентифікації, що підтримує токен автентифікаціії.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесія недоступна, її час вийшов, або cookies вимкнено.',
    'No token could be found.' => 'Токен не знайдено.',
    'Username could not be found.' => 'Ім’я користувача не знайдено.',
    'Account has expired.' => 'Термін дії облікового запису вичерпано.',
    'Credentials have expired.' => 'Термін дії автентифікаційних даних вичерпано.',
    'Account is disabled.' => 'Обліковий запис відключено.',
    'Account is locked.' => 'Обліковий запис заблоковано.',
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