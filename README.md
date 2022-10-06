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

### Composer.json
Fichier décrivant toutes les dépendances du projet, en plus d'autres métadonnées.

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

### Namespace
Le namespace est le chemin du fichier. On le déclare avec `namespace qqch\qqchautre`.  
Il sert afin d'utiliser du code contenu dans d'autre fichier, grâce à la commande `use <namespace>`.  

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
  - la spécification dans l'instanciation 🤯

### Classe Abstraite
Une classe abstraite contient des méthodes abstraites — c'est-à-dire qu'elles n'ont qu'une signature. Les classes abstraites ne s'occupent pas de l'implémentation des différentes méthodes, mais exigent des classes qui héritent d'elles qu'elles les mettent en œuvre.  

### Interface
Comme une classe abstraite, une interface ne peut contenir que la signature d'une fonction qui sera **toujours publique** et toujours imposée à la classe qui l'implémente, et des constantes.  
On définit une classe qui l'implémente avec `class <Class> implements <Interface>`.  
Si une classe implémente plusieurs interfaces, elles sont listées avec des virgules.

## Object calisthenics
La gymnastique des objets est régie par 9 principes qui constituent des bonnes pratiques de l'orienté objet, dont certaines sont illustrées pour Java dans le livre de Robert Martin, *Clean Code* :  
  - rester à un seul niveau d'indentation (en théorie, en pratique 2 est acceptable) :
    - ce qui demande un niveau supplémentaire peut être abstrait dans une fonction ;
  - *éviter* l'usage de else :
    - on pourra par exemple essayer d'inverser la logique (dans le cas d'une condition qui jetterait une exception) ;
  - un opérateur d'objet (-> en php, . en python ou JS) maximum par ligne :
    - permet de ne pas être pris au piège d'un effet secondaire, ou d'un objet qui n'existerait pas.
  - ne pas abréger ;
    - si le nom contient un "et", la fonction est en réalité plusieurs fonctions.
  - faire des petites classes (sinon la classe en contient peut-être plusieurs) ;
  - limiter le nombre de propriétés d'une classe ;
  - limiter les getters et setters :
    - inutile de mettre des getters et setters publics qui permettront partout de modifier une variable censée être privée : autant qu'elle soit publique ;
    - essayer de ne pas utiliser de setters sans condition.
