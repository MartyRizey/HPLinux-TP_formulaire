# Projet : _`TP_formulaire`_

## Repos GitHub : _HPLinux-TP_formulaire_


- Codé sous Linux, dans un environnement classique PHP, Apache, MySQL, phpMyAdmin.

---

### INSTALLATION :

- Dossier Projet **`/TP_formulaire`** .
- Projet à installer ou à cloner dans le dossier **`/var/www/html`** .

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


- 2.Créer une fichier pour la config de la Bdd :

   - nom du fichier => `inc_configBdd.php`, le créer dans le dossier **inc**.
   - Vous pouvez créer votre propre fichier mais dans ce cas il faudra changer les chemin des `require` dans les différents fichiers.
   - En plus de votre `$dsn` qui contient le driver, l'endroit ou se trouve votre server, le nom de la Bdd et l'encodage,
     du `$user` qui contient l'utilisateur, et du `$password` qui contient le mot de passe de la Bdd,
     dans la config de connexion j'ai aussi ajouté => `$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING];`