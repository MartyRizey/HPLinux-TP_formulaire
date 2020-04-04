# Projet : _`TP_formulaire`_

## Repos GitHub : _HPLinux-TP_formulaire_

---

### INSTALLATION :

**Sous Linux**
Dans un environnement classique PHP, Apache, MySQL, phpMyAdmin.

   - Dossier Projet **`/TP_formulaire`** .
   - Utiliser la branche  **`master`** de Github.
   - Projet à installer ou à cloner dans le dossier **`/var/www/html`** .

**Sous Windows avec un environnement Laragon**

- Dossier Projet **`/HPLinux-TP_formulaire`** sur Github.
- Utiliser la branche  **`ASUSWds-TP_formulaire`** de Github.
- Projet à installer ou à cloner dans le dossier `www` de l'installation de `Laragon`, ex : **`DD:/...../laragon/www`** eventuellement.
   Vous pourrez ensuite y accèder en tapant `localhost` dans l'URL du navigateur. Vous aurez probablement un problème de chemin. Il faudra modifier quelque chose dans un fichier.
- dans le fichier `pathDefine_inc.php` du dossier `inc` modifier selon l'emplacement du `git clone` le chemin suivant : **`/tutoriels/HPLinux-TP_formulaire`**

```php
   define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/tutoriels/HPLinux-TP_formulaire');
```

---

### Création d'une Base de données

- 1.Créer un base de données avec les champs suivants :

   |   NOM    |   TYPE       |   INTERCLASSEMENT    |                 DESCRIPTION             |
   | -------- | ------------ | -------------------- | --------------------------------------- |
   |    id    |   int(11)    |                      | PRIMARY_KEY **&** non NULL **&** AUTO_INCREMENT |
   |  pseudo  | varchar(30)  |  utf8mb4_general_ci  | non NULL                                |
   | passHash | varchar(254) |  utf8mb4_general_ci  | non NULL                                |
   |  email   | varchar(100) |  utf8mb4_general_ci  | non NULL  **&** UNIQUE                  |
   | birthday |    date      |                      | non NULL                                |

---

### Accéder à votre Base de données

- 2.Créer une fichier pour la config de la Bdd :

   - Dans le dossier **inc** créer un fichier de configuration d'accès à votre Base de donées.

   ```php
      // $dsn, $user, $password, $options(option)
      // Cela est la config pour me connecter à la Bdd via l'objet PDO => https://www.php.net/manual/fr/book.pdo.php

      $dsn = 'mysql:host=localhost; dbname=nom_base_de_données; charset=utf8';
      $user = 'nom_utilisateur ou nom_Bdd'; // on donne souvent le même nom pour la Bdd et l'utilisateur.
      $password = 'mot_de_passe ou vide';

      // https://www.php.net/manual/en/pdo.setattribute.php
      $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING];
   ```

   - Dans le fichier **`connexBdd_inc.php`** à la ligne 3

   ```php 
      require_once ROOTPATH . '/inc/configBdd_inc.php'; 
   ```

   Mettre à la place de `configBdd_inc.php` votre propre nom de fichier de config que vous aurez créé.
  