<?
/*
Remplacer l'utilisation de la session par des cookie !!!

Donc :
- Plus besoin de session_start
- Plus besoin de session destroy
- utiliser setcookie pour enregistrer
  l'utilisateur dans les cookie (6 mois d'expiration)
- utiliser setcookie pour le supprimer (le déconnécté)
- Remplacer la superglobal $_SESSION par $_COOKIE
*/
