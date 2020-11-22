<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hr', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Dogodila se autentifikacijske iznimka.',
    'Authentication credentials could not be found.' => 'Autentifikacijski podaci nisu pronađeni.',
    'Authentication request could not be processed due to a system problem.' => 'Autentifikacijski zahtjev nije moguće provesti uslijed sistemskog problema.',
    'Invalid credentials.' => 'Neispravni akreditacijski podaci.',
    'Cookie has already been used by someone else.' => 'Cookie je već netko drugi iskoristio.',
    'Not privileged to request the resource.' => 'Nemate privilegije zahtijevati resurs.',
    'Invalid CSRF token.' => 'Neispravan CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Nije pronađen autentifikacijski provider koji bi podržao autentifikacijski token.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija nije dostupna, ili je istekla ili cookies nisu omogućeni.',
    'No token could be found.' => 'Token nije pronađen.',
    'Username could not be found.' => 'Korisničko ime nije pronađeno.',
    'Account has expired.' => 'Račun je isteko.',
    'Credentials have expired.' => 'Akreditacijski podaci su istekli.',
    'Account is disabled.' => 'Račun je onemogućen.',
    'Account is locked.' => 'Račun je zaključan.',
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
