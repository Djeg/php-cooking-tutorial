<?php
/*
Dans cet exercice libre votre objectif est de créer un site
"vitrine" de recette de cuisine, dynamique, en
utilisant tout vos aquis PHP.

Dans un dossier "exercice5" placer le code comme vous le
voulez de l'exercice.

Important : Vous pouvez vous organiser comme vous le souhaitez
et créer autant de fichier que nescessaire. Vous pouvez aussi
utiliser bootstrap ou d'autres outils frontend pour le design.
*/

/*
Exercice 1 : La page d'accueil

Créer une page "accueil.php" qui affiche une bar de navigation
avec le menu suivant : Accueil, Les Plus populaire, Contact, Nouvelle Recette

Dans le contenu de la page afficher toutes les recette du tableaux 
de recette sous forme de carte

Dans le footer créer un menu : Accueil, Les Plus Populaire, Contact, Nouvelle Recette
*/

/*
Exercice 2 : La page les plus populaire

Créer une page "popularity.php" qui affiche :

- La même bar de navigation que l'accueil
- La même footer
- La même liste de recette mais cette fois classé par "likes" !

Lié cette page au menu "Les plus populaire" !
*/

/*
Exercice 3 : La page contact

Créer une page "contact.php" qui affiche :

- La même bar de navigation que l'accueil
- La même footer
- Un formulaire de contact avec les champs suivant :
    - email, message

Lier cette page au menu "Contact"
*/

/*
Exercice 4 : La page nouvelle recette

Créer une page "nouvelleRecette.php" qui affiche :

- La même bar de navigation que l'accueil
- La même footer
- Un formulaire de contact avec les champs suivant :
    - intitulé
    - description
    - image url
    - difficulté
    - prix

Lier cette page au menu "Contact"
*/


/*
Prérequis:

Voici un tableaux contenant toutes les recettes du site :
*/
$recettes = [
    [
        'id' => 1,
        'intitulé' => 'Poulet Basquaise',
        'description' => 'Une délicieuse recette de poulet au poivrons :)',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fauvraidelice.fr%2Fwp-content%2Fuploads%2F2020%2F06%2FIMG-AuVraiDelice-6.jpg&f=1&nofb=1&ipt=5192941f5ed4215a84f1436d1c078cb15fe138fbd50d865f5681fdd851283f76&ipo=images',
        'likes' => 8,
        'difficulte' => 4,
        'prix' => '€',
        'active' => true,
        'auteur' => [
            'id' => 1,
            'nom' => 'Doe',
            'prenom' => 'Jane',
        ]
    ],
    [
        'id' => 2,
        'intitulé' => 'Poulet Curry',
        'description' => 'Une délicieuse recette de poulet au curry :)',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fsunandgreen.fr%2Fwp-content%2Fuploads%2F2019%2F10%2Fpoulet_au_curry_et_oignons_recette_epices-768x768.jpg&f=1&nofb=1&ipt=50bbc90e5255fbfaa91d69843e82687a833227cb2b9e2fe9f976f0eae1df3e5d&ipo=images',
        'likes' => 18,
        'difficulte' => 2,
        'prix' => '€',
        'active' => true,
        'auteur' => [
            'id' => 2,
            'nom' => 'Doe',
            'prenom' => 'John',
        ]
    ],
    [
        'id' => 3,
        'intitulé' => 'Boeuf bourguignon',
        'description' => 'Une délicieuse recette de ragout de boeuf au petit légumes :)',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcooking-chef.sa.metacdn.com%2Fsites%2Fdefault%2Ffiles%2Frecettes%2Fboeuf-bourguignon-recette_4x3.jpg&f=1&nofb=1&ipt=5d356762cdc71564a9ffd16a952477bd93e4da8169e592dde0d5b0b7d07a2e3f&ipo=images',
        'likes' => 23,
        'difficulte' => 5,
        'prix' => '€€',
        'active' => true,
        'auteur' => [
            'id' => 1,
            'nom' => 'Doe',
            'prenom' => 'Jane',
        ]
    ],
    [
        'id' => 4,
        'intitulé' => 'Pasta Carbonara',
        'description' => 'Une délicieuse recette de pates aux oeufs et petit lardons généreuse',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.ilgiornalebg.it%2Fwp-content%2Fuploads%2F2020%2F12%2Fcarbonara.jpg&f=1&nofb=1&ipt=5b0f36da4149a0af7439d24bf765bec3533c3d8c4505eb4cc6bec33ec82dd6ea&ipo=images',
        'likes' => 43,
        'difficulte' => 2,
        'prix' => '€',
        'active' => false,
        'auteur' => [
            'id' => 2,
            'nom' => 'Doe',
            'prenom' => 'John',
        ]
    ],
    [
        'id' => 5,
        'intitulé' => 'Pizza Calzone',
        'description' => 'Une délicieuse pizza dans un chauson de pâte à dévorer',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.periodistadigital.com%2Fwp-content%2Fuploads%2F2020%2F05%2Fcalzone-tradicional-3.jpg&f=1&nofb=1&ipt=a7bd4dfd5f7bb55dd207d05d506ce0e2f7b1d6ca29cfee4b369ba6ed5e29a33a&ipo=images',
        'likes' => 12,
        'difficulte' => 7,
        'prix' => '€',
        'active' => true,
        'auteur' => [
            'id' => 1,
            'nom' => 'Doe',
            'prenom' => 'Jane',
        ]
    ],
    [
        'id' => 6,
        'intitulé' => 'Omelette au champignons',
        'description' => 'Des oeufs et de bon champignons frais, une recette pas chers et réconfortante',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.dexsa.de%2Fwp-content%2Fuploads%2F2019%2F08%2FAdobeStock_246243488-1.jpeg&f=1&nofb=1&ipt=b197730a8e8d8e04cba8a638a10afffedc80b63eb66e071455bc597b4f5ab739&ipo=images',
        'likes' => 17,
        'difficulte' => 2,
        'prix' => '€',
        'active' => false,
        'auteur' => [
            'id' => 2,
            'nom' => 'Doe',
            'prenom' => 'John',
        ]
    ],
    [
        'id' => 7,
        'intitulé' => 'Bar au beurre blanc',
        'description' => 'Un délicieux poisson au beurre blanc, une recette pour les grand jours !',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.ensauce.com%2Fwp-content%2Fuploads%2F2015%2F10%2Fbar-grill%25C3%25A9-au-beurre-blanc.jpg&f=1&nofb=1&ipt=e397418507aaf41ada75ddc94197616a1b22e3ed7eae04a16fb63685779222bf&ipo=images',
        'likes' => 8,
        'difficulte' => 6,
        'prix' => '€€€',
        'active' => true,
        'auteur' => [
            'id' => 1,
            'nom' => 'Doe',
            'prenom' => 'Jane',
        ]
    ],
    [
        'id' => 8,
        'intitulé' => 'Forêt Noire',
        'description' => 'Un délicieux gateaux pour les amoureux de chocolat',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ffac.img.pmdstatic.net%2Ffit%2Fhttp.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Ffac.2F2020.2F06.2F08.2F9ecf8e58-65e9-4e50-af3d-bc723292d06b.2Ejpeg%2F850x478%2Fquality%2F90%2Fcrop-from%2Fcenter%2Fforet-noire.jpeg&f=1&nofb=1&ipt=950a1b079d912914ae9f4f648a7e2132973e26eeede7ba058f3a4cc910a260e0&ipo=images',
        'likes' => 19,
        'difficulte' => 7,
        'prix' => '€€',
        'active' => false,
        'auteur' => [
            'id' => 2,
            'nom' => 'Doe',
            'prenom' => 'John',
        ]
    ],
    [
        'id' => 9,
        'intitulé' => 'Boeuf au oignons',
        'description' => 'Un délicieux plat asiatique pour toute la famille',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.Dy-vJKL-Tvuukd1LQTVYpQHaHI%26pid%3DApi&f=1&ipt=3f5034e774af25e68a885a8c6676911387100d64b500a075f94dd67a47936082&ipo=images',
        'likes' => 10,
        'difficulte' => 4,
        'prix' => '€€',
        'active' => true,
        'auteur' => [
            'id' => 1,
            'nom' => 'Doe',
            'prenom' => 'Jane',
        ]
    ],
    [
        'id' => 10,
        'intitulé' => 'Sushis',
        'description' => 'Un délicieux plat traditionnel asiatique pour satisfaire les palets les plus éxigent',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.nippon.com%2Ffr%2Fncommon%2Fcontents%2Fjapan-data%2F174999%2F174999.jpg&f=1&nofb=1&ipt=99fa80c190086d3665e048cae6ddd8ff535a60f5c479057b94a8d1cc79e40c81&ipo=images',
        'likes' => 37,
        'difficulte' => 8,
        'prix' => '€€€',
        'active' => true,
        'auteur' => [
            'id' => 2,
            'nom' => 'Doe',
            'prenom' => 'John',
        ]
    ],
];
