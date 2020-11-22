<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('pt_BR', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Uma exceção ocorreu durante a autenticação.',
    'Authentication credentials could not be found.' => 'As credenciais de autenticação não foram encontradas.',
    'Authentication request could not be processed due to a system problem.' => 'A autenticação não pôde ser concluída devido a um problema no sistema.',
    'Invalid credentials.' => 'Credenciais inválidas.',
    'Cookie has already been used by someone else.' => 'Este cookie já está em uso.',
    'Not privileged to request the resource.' => 'Não possui privilégios o bastante para requisitar este recurso.',
    'Invalid CSRF token.' => 'Token CSRF inválido.',
    'No authentication provider found to support the authentication token.' => 'Nenhum provedor de autenticação encontrado para suportar o token de autenticação.',
    'No session available, it either timed out or cookies are not enabled.' => 'Nenhuma sessão disponível, ela expirou ou os cookies estão desativados.',
    'No token could be found.' => 'Nenhum token foi encontrado.',
    'Username could not be found.' => 'Nome de usuário não encontrado.',
    'Account has expired.' => 'A conta está expirada.',
    'Credentials have expired.' => 'As credenciais estão expiradas.',
    'Account is disabled.' => 'Conta desativada.',
    'Account is locked.' => 'A conta está travada.',
  ),
));

$cataloguePt = new MessageCatalogue('pt', array (
));
$catalogue->addFallbackCatalogue($cataloguePt);
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
$cataloguePt->addFallbackCatalogue($catalogueFr);

return $catalogue;
