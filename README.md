# php-oop
Remise à niveau php version orienté objet

(phar est un fichier exécutable php)

## Composer

### Principe
Package manager (comme npm dans JavaScript, ou pip en Python, ou Gradle pour Java) mais sans installation globale.  
Installe et maintient à jour les dépendances et libs d'un projet après qu'elles aient été déclarées.  

### Composer.json
Fichier décrivant toutes les dépendances du projet, en plus d'autres métadonnées.

### `^` et `+` dans le fichier .json
- `^` sert à indiquer la version du package utilisé ou la version avec laquelle le projet est compatible?;
  - pour aller plus loin, on peut consulter :
    - [Semantic Versioning](https://semver.org) ;
    - [la doc Composer](https://getcomposer.org/doc/articles/versions.md#caret-version-range-) ;
- `*` est comme souvent une wildcard qui match n'importe quel caractère (dans les versions, numérique) qui peuvent lui être substitué.Sorte de package manager (comme npm dans JavaScript, ou pip en Python) mais sans installation globale. 
Installe et maintient à jour les dépendances et libs d'un projet après qu'elles aient été déclarées.

### Composer.json
Fichier décrivant toutes les dépendances du projet, en plus d'autres métadonnées
.

### `^` et `+` dans le fichier .json
- `^` sert à indiquer la version du package utilisé ou la version jusqu'où le projet est compatiblei : n'autorise pas le code qui casse;
  - pour aller plus loin, on peut consulter :
    - [Semantic Versioning](https://semver.org) ;
    - [la doc Composer](https://getcomposer.org/doc/articles/versions.md#caret-version-range-) ;
- `*` est comme souvent une wildcard qui match n'importe quel caractère (dans les versions, numérique) qui peuvent lui être substitué.

### composer.lock
`composer.lock` sert à installer les dépendances, tandis que `composer.json` sert aux mises à jour.php

## Nouveau projet Composer
On initie un nouveau projet vide avec `composer init`.

### Autoload
L'autoload permet d'utiliser les classes fournies par les libs spécifiées sans ajout de code.
- voir aussi  [la page de la doc](https://getcomposer.org/doc/01-basic-usage.md#autoloading).

### Commencer avec Composer
- Créer un point d'entrée (hors du dossier src)
- aller récupérer l'autoload.
- besoin d'installer avec `composer install`
- on utilise une classe dans un autre fichier avec `use ...`

## Orienté objet
### Classe
Une définition, qui contient des attributs, des méthodes (fonctions)...

### Objet
Une instanciation de la classe

### 4 principes de l'OOP
- Abstraction : une classe n'est pas la chose qu'elle décrit
- Encapsulation :
  - public ;
  - private (utilisable seulement par la classe) ;
  - protected (utilisable par toutes classes partageant le même namspace).
- Héritage :
  - une classé bénéficie des mêmes attributs et comportements qu'une autre.
- Polymorphisme :
  - la spécification dans l'instanciation 

### Classe Abstraite / Interface