<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('nb', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'En autentiseringsfeil har skjedd.',
    'Authentication credentials could not be found.' => 'Påloggingsinformasjonen kunne ikke bli funnet.',
    'Authentication request could not be processed due to a system problem.' => 'Autentiserings forespørselen kunne ikke bli prosessert grunnet en system feil.',
    'Invalid credentials.' => 'Ugyldig påloggingsinformasjon.',
    'Cookie has already been used by someone else.' => 'Cookie har allerede blitt brukt av noen andre.',
    'Not privileged to request the resource.' => 'Ingen tilgang til å be om gitt ressurs.',
    'Invalid CSRF token.' => 'Ugyldig CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Ingen autentiserings tilbyder funnet som støtter gitt autentiserings token.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen sesjon tilgjengelig, sesjonen er enten utløpt eller cookies ikke skrudd på.',
    'No token could be found.' => 'Ingen token kunne bli funnet.',
    'Username could not be found.' => 'Brukernavn kunne ikke bli funnet.',
    'Account has expired.' => 'Brukerkonto har utgått.',
    'Credentials have expired.' => 'Påloggingsinformasjon har utløpt.',
    'Account is disabled.' => 'Brukerkonto er deaktivert.',
    'Account is locked.' => 'Brukerkonto er sperret.',
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
