<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sr_Latn', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Izuzetak pri autentifikaciji.',
    'Authentication credentials could not be found.' => 'Autentifikacioni podaci nisu pronađeni.',
    'Authentication request could not be processed due to a system problem.' => 'Zahtev za autentifikaciju ne može biti obrađen zbog sistemskih problema.',
    'Invalid credentials.' => 'Nevalidni podaci za autentifikaciju.',
    'Cookie has already been used by someone else.' => 'Kolačić je već iskorišćen od strane nekog drugog.',
    'Not privileged to request the resource.' => 'Nemate prava pristupa ovom resursu.',
    'Invalid CSRF token.' => 'Nevalidan CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Autentifikacioni provajder za podršku tokena nije pronađen.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija nije dostupna, istekla je ili su kolačići isključeni.',
    'No token could be found.' => 'Token ne može biti pronađen.',
    'Username could not be found.' => 'Korisničko ime ne može biti pronađeno.',
    'Account has expired.' => 'Nalog je istekao.',
    'Credentials have expired.' => 'Podaci za autentifikaciju su istekli.',
    'Account is disabled.' => 'Nalog je onemogućen.',
    'Account is locked.' => 'Nalog je zaključan.',
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
