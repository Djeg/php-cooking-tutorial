<?
/*
Il est possible en php de récupérer et de traiter
les données d'une formulaire HTML.

Graçe au super global $_GET, $_POST et $_FILES nous
avons à toutes les données d'un formulaire :

Afin d'envoyer des données à PHP en utilisant un
formulaire HTML, il faut tout d'abord créer le formulaire.

Prenons un éxemple :

<form method="POST">
    <input type="email" value="john@mail.com" name="email" />
</form>

Un formulaire possède 2 atrributs :

1. La méthode HTTP (GET => obtenir, POST => créer).
   Si la méthode est GET alors les données du formulaires
   sont envoyé dans les query string de l'url
   Si la méthode est POST alors les données du formulaires
   sont envoyé dans le corps de la requête.

2. l'attribut action permet de determiné le fichier php
   qui recevra les données (lors du l'envoie du formulaire).

Nous pouvons récupérer les données d'un formulaire dans le script
de l'action du formulaire en utilisant :
    - $_GET lorsque la méthode est GET
    - $_POST lorsque la méthode est POST

À l'intérieur de ces super global, nous pouvons récupérer la valeur
d'un champs en utilisant son name

Exemple :

$_POST['email']; // récupére la valeur de l'input avec le name="email"

ATTENTION !!!!

Dans le cas on notre balise form ne possède pas d'action,
c'est la page actuel qui sera utilisé pour recvoir les données.
*/
