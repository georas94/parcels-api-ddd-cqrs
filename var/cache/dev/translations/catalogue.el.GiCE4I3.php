<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('el', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Συνέβη ένα σφάλμα πιστοποίησης.',
    'Authentication credentials could not be found.' => 'Τα στοιχεία πιστοποίησης δε βρέθηκαν.',
    'Authentication request could not be processed due to a system problem.' => 'Το αίτημα πιστοποίησης δε μπορεί να επεξεργαστεί λόγω σφάλματος του συστήματος.',
    'Invalid credentials.' => 'Λανθασμένα στοιχεία σύνδεσης.',
    'Cookie has already been used by someone else.' => 'Το Cookie έχει ήδη χρησιμοποιηθεί από κάποιον άλλο.',
    'Not privileged to request the resource.' => 'Δεν είστε εξουσιοδοτημένος για πρόσβαση στο συγκεκριμένο περιεχόμενο.',
    'Invalid CSRF token.' => 'Μη έγκυρο CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Δε βρέθηκε κάποιος πάροχος πιστοποίησης που να υποστηρίζει το token πιστοποίησης.',
    'No session available, it either timed out or cookies are not enabled.' => 'Δεν υπάρχει ενεργή σύνοδος (session), είτε έχει λήξει ή τα cookies δεν είναι ενεργοποιημένα.',
    'No token could be found.' => 'Δεν ήταν δυνατόν να βρεθεί κάποιο token.',
    'Username could not be found.' => 'Το Username δε βρέθηκε.',
    'Account has expired.' => 'Ο λογαριασμός έχει λήξει.',
    'Credentials have expired.' => 'Τα στοιχεία σύνδεσης έχουν λήξει.',
    'Account is disabled.' => 'Ο λογαριασμός είναι απενεργοποιημένος.',
    'Account is locked.' => 'Ο λογαριασμός είναι κλειδωμένος.',
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
