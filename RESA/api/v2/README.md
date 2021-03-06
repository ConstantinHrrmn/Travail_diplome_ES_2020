# Cheat sheet API RESA V2
Ce fichier est la pour vous aider à utiliser l'API de RESA développée par Constantin Herrmann dans le cadre du travail de diplôme Technicien ES au CFPT-I (2020).

---
#### IMPORTANT : TOUTES LES DONNEES SONT RETOURNES EN JSON
---

## User
Lien : ```/api/v2/user/```

### Lecture
1. **Récupérer les informations d'un user avec ses permissions**
   - Lien : ```/api/v2/user/get/```
   - Paramètres : 
     - ```id``` : l'id de l'utilisateur recherché
   - Lien avec paramètres : ```/api/v2/user/get/?id=[id de l'utilisateur]```
   - Retour : 
     - Un tableau avec les champs :
       - ```id``` : l'id de l'utilisateur
       - ```first_name``` : le prénom de l'utilisateur
       - ```last_name``` : le nom de famille de l'utilisateur
       - ```phone``` : le numéro de téléphone de l'utilisateur
       - ```email``` : l'email de l'utilisateur
       - ```username``` : le code à 4 chiffre d'identification de l'utilisateur
       - ```permissions``` : un tableau avec toutes ses permissions. Chaque permission contient :
           - ```etablishment_name``` : le nom de l'établissement (si il y en à un, sinon "-")
           - ```permission_name``` : le nom de la permission (ex: manager)
  
2. **Récupérer les informations de base d'un user**
   - Lien : ```/api/v2/user/get/```
   - Paramètres : 
     - ```user``` : (il n'y à pas besoin de valeur)
     - ```id``` : l'id de l'utilisateur recherché
   - Lien avec paramètres : ```/api/v2/user/get/?user&id=[id de l'utilisateur]```
   - Retour : 
     - Un tableau avec les champs :
       - ```id``` : l'id de l'utilisateur
       - ```first_name``` : le prénom de l'utilisateur
       - ```last_name``` : le nom de famille de l'utilisateur
       - ```phone``` : le numéro de téléphone de l'utilisateur
       - ```email``` : l'email de l'utilisateur
       - ```username``` : le code à 4 chiffre d'identification de l'utilisateur

3. **Récupérer tous les utilisateurs avec une certaine permission**
   - Lien : ```/api/v2/user/get/```
   - Paramètres : 
     - ```byPermission``` : l'id de la permission recherchée
   - Lien avec paramètres : ```/api/v2/user/get/?byPermission=[id de la permission]```
   - Retour : 
     - Un tableau de users, ou chaque user possède les champs :
       - ```first_name``` : le prénom de l'utilisateur
       - ```last_name``` : le nom de famille de l'utilisateur
       - ```phone``` : le numéro de téléphone de l'utilisateur
       - ```email``` : l'email de l'utilisateur
       - ```username``` : le code à 4 chiffre d'identification de l'utilisateur

4. **Récupérer toutes les permissions d'un utilisateur**
   - Lien : ```/api/v2/user/get/```
   - Paramètres : 
     - ```permissions``` : (il n'y à pas besoin de valeur)
     - ```id``` : l'id de l'utilisateur recherché
   - Lien avec paramètres : ```/api/v2/user/get/?permissions&id=[id de l'utilisateur]```
   - Retour : 
     - Un tableau de permissions, ou chaque permissions possède les champs :
       - ```etablishment_name``` : le nom de l'établissement (si il y en à un, sinon "-")
       - ```permission_name``` : le nom de la permission (ex: manager)

5. **Récupérer tous les utilisateurs**
   - Lien : ```/api/v2/user/get/```
   - Paramètres : 
     - aucun
   - Lien avec paramètres : ```/api/v2/user/get/```
   - Retour : 
     - Un tableau de users, ou chaque user possède les champs :
       - ```id``` : l'id de l'utilisateur
       - ```first_name``` : le prénom de l'utilisateur
       - ```last_name``` : le nom de famille de l'utilisateur
       - ```phone``` : le numéro de téléphone de l'utilisateur
       - ```email``` : l'email de l'utilisateur
       - ```username``` : le code à 4 chiffre d'identification de l'utilisateur

6. **Récupérer tous les employés d'un etablissement**
   - Lien : ```/api/v2/user/employes/```
   - Paramètres : 
     - ```workingFor``` : l'id de l'etablissement
   - Lien avec paramètres : ```/api/v2/user/employes/?workingFor=[id de l'etablissement]```
   - Retour : 
     - Un tableau de users, ou chaque user possède les champs :
        - ```id``` : l'id de l'utilisateur
        - ```user_firstname``` : le prénom de l'utilisateur
        - ```user_lastname``` : le nom de famille de l'utilisateur
        - ```permission_name``` : le nom de sa permission (ex: Manager)
        - ```permission_level``` : le niveau de la permission (ex : 2)


### Divers
7. **Login d'un employé dans son restaurant**
   - Lien : ```/api/v2/user/get/```
   - Paramètres : 
     - ```login_e``` : (il n'y à pas besoin de valeur)
     - ```username``` : l'identifiant à 4 chiffres de l'utilisateur
     - ```password``` : le mot de passe hashé en sha256
   - Lien avec paramètres : ```/api/v2/user/get/?login&username=[identifiant 4 chiffres]&password=[mot de passe hashé (sha256)]```
   - Retour : 
       - Un tableau avec les champs :
       - ```id``` : l'id de l'utilisateur
       - ```first_name``` : le prénom de l'utilisateur
       - ```last_name``` : le nom de famille de l'utilisateur
       - ```phone``` : le numéro de téléphone de l'utilisateur
       - ```email``` : l'email de l'utilisateur

8. **Générer un identifiant numérique aléatoire**
   - Lien : ```/api/v2/user/username/generate/```
   - Paramètres : 
     - Aucun
   - Lien avec paramètres : ```/api/v2/user/username/generate/```
   - Retour : 
     - un numéro aléatoire


---
## Etablissement
Lien : ```/api/v2/etablishment/```

### Lecture
1. **Récupérer tous les établissements de la base de données**
   - Lien : ```/api/v2/etablishment/get/```
   - Paramètres : 
     - Aucun
   - Lien avec paramètres : ```/api/v2/etablishment/get/```
   - Retour : 
       - Un tableau avec les établissement ou chaque établissement contient:
         - ```id``` : l'id de l'établissement
         - ```name``` : le nom
         - ```address``` : l'addresse
         - ```phone``` : le numéro de téléphone
         - ```email``` : l'email
         - ```menu_name``` : le nom du menu (si il y en as un, sinon null)
         - ```menu_description``` : la description du menu (si il y en as une, sinon null)

2. **Récupérer les informations d'un établissement**
   - Lien : ```/api/v2/etablishment/get/```
   - Paramètres : 
     - ```id``` : l'id de l'établissement
   - Lien avec paramètres : ```/api/v2/etablishment/get/?id=[l'id de l'établissement]```
   - Retour : 
       - ```id``` : l'id de l'établissement
       - ```name``` : le nom
       - ```address``` : l'addresse
       - ```phone``` : le numéro de téléphone
       - ```email``` : l'email
       - ```menu_name``` : le nom du menu (si il y en as un, sinon null)
       - ```menu_description``` : la description du menu (si il y en as une, sinon null)

### Création 
3. **Création d'un etablissementr**
   - Lien : ```/api/v2/etablishment/create/```
   - Paramètres : 
     - ```name``` : le nom du nouvel établissement
     - ```address``` : l'adresse du nouvel établissement
     - ```phone``` : le numéro de téléphone du nouvel établissement
     - ```email``` : l'email du nouvel établissement
   - Lien avec paramètres : ```/api/v2/etablishment/create/?name=[nom]&address=[address]&phone=[numéro de téléphone]&email=[adress email]```
   - Retour : 
       - ```True``` : Si l'ajout dans la base de données à fonctionné
       - ```False``` : Si non

4. **Création d'un etablissement avec un manager**
   - Lien : ```/api/v2/etablishment/create/```
   - Paramètres : 
     - ```name``` : le nom du nouvel établissement
     - ```address``` : l'adresse du nouvel établissement
     - ```phone``` : le numéro de téléphone du nouvel établissement
     - ```email``` : l'email du nouvel établissement
     - ```creatorID``` : l'id de l'utilisateur qui est le manager
   - Lien avec paramètres : ```/api/v2/etablishment/create/?name=[nom]&address=[address]&phone=[numéro de téléphone]&email=[adress email]&creatorID=[id du manager]```
   - Retour : 
       - ```nothing```

5. **Création d'un établissement à partir d'un formulaire** 
   - Lien : ```/api/v2/etablishment/create/form/```
      - Paramètres : 
        - ```$_POST```
          - ```name``` : le nom de l'établissement 
          - ```address``` : l'addresse de l'établissement 
          - ```phone``` : le numéro de téléphone de l'établissement 
          - ```email``` : l'email de l'établissement 
          - ```creatorID``` : l'id du manager de l'établissement 
        - ```$_FILES```
          - ```[images]``` : les images qui prviennent d'un file picker d'un form
      - Lien avec paramètres : ```/api/v2/etablishment/create/form/```
      - Retour : 
          - ```nothing```

--- 
## Floor
Lien : ```/api/v2/etablishment/floor/```

### Lecture
1. **Récupérer tous les étages, zones et horaires d'un etablissement**
   - Lien : ```/api/v2/etablishment/floor/get/```
   - Paramètres : 
     - ```id``` : l'id de l'établissement
   - Lien avec paramètres : ```/api/v2/etablishment/floor/get/?id=[id de l'établissement]```
   - Retour : 
       - Un tableau avec comme clés les id des étages:
         - ```[id de l'étage]``` : l'id de l'étage comme index du tableau afin de facilement le retrouver
           - ```name``` : le nom de l'étage
           - ```zones``` : tableau des zones
             - ```[nom de la zone]``` : le nom de la zone
             - ```[xx:xx:xx]``` : l'heure de début (```begin```)
             - ```[xx:xx:xx]``` : l'heure de fin (```end```)

### Création 
1. **Créeation d'un étage**
   - Lien : ```/api/v2/etablishment/floor/create/```
   - Paramètres : 
     - ```create``` : (il n'y à pas besoin de valeur)
     - ```name``` : nom de l'étage
     - ```etablishment``` : l'id de l'établissement
   - Lien avec paramètres : ```/api/v2/etablishment/floor/create/?create&name=[nom de l'étage]&etablishment=[id de l'établissement]```
   - Retour : 
     - ```nothing```
  
2. **Création d'un étage à partir d'un formulaire**
   - Lien : ```/api/v2/etablishment/floor/create/form/```
   - Paramètres : 
     - ```$_POST```
       - ```name``` : nom de l'étage
       - ```etablishment``` : l'id de l'établissement
   - Lien avec paramètres : ```/api/v2/etablishment/floor/create/form/```
   - Retour : 
     - ```nothing```

---
## Zone
Lien : ```/api/v2/etablishment/floor/zone/```

### Lecture
1. **Récupère l'id de la dernière zone ajoutée**
   - Lien : ```/api/v2/etablishment/floor/zone/get/```
   - Paramètres : 
     - ```last``` : (il n'y à pas besoin de valeur)
   - Lien avec paramètres : ```/api/v2/etablishment/floor/zone/get/?last```
   - Retour : 
     - ```last``` : l'id de la dernière zone ajoutée

### Création
2. **Création d'une zone**
   - Lien : ```/api/v2/etablishment/floor/zone/create/```
   - Paramètres : 
     - ```create``` : (il n'y à pas besoin de valeur)
     - ```name``` : nom de la zone
   - Lien avec paramètres : ```/api/v2/etablishment/floor/zone/create/?create&name=[Nom de l'étage]```
   - Retour : 
     - ```nothing```

3. **Création du lien entre une zone et un étage**
   - Lien : ```/api/v2/etablishment/floor/zone/create/```
     - ```link``` : (il n'y à pas besoin de valeur)
     - ```floor``` : l'id de l'étage
     - ```zone``` : l'id de la zone
    - Lien avec paramètres : ```/api/v2/etablishment/floor/zone/create/?link&floor=[id de l'étage]&zone=[id de la zone]```
      - Retour : 
        - ```nothing```

4. **Création d'une zone à partir d'un formulaire**
   - Lien : ```/api/v2/etablishment/floor/zone/create/form/```
     - ```$_POST```
       - ```name``` : nom de l'étage
       - ```floor``` : l'id de l'étage
       - ```user``` : l'id de l'utilisateur
   - Lien avec paramètres : ```/api/v2/etablishment/floor/zone/create/form/```
   - Retour : 
     - ```nothing```


---
## Schedule
Lien : ```/api/v2/etablishment/floor/zone/schedule/```

### Lecture
1. **Récupère l'id de la dernière zone ajoutée**
   - Lien : ```/api/v2/etablishment/floor/zone/get/```
   - Paramètres : 
     - ```last``` : (il n'y à pas besoin de valeur)
   - Lien avec paramètres : ```/api/v2/etablishment/floor/zone/get/?last```
   - Retour : 
     - ```schedules``` :
       - ```schedule_id``` : l'id de l'horaire
       - ```begin``` : l'heure de début
       - ```end``` : l'heure de fin

---
## Images
Lien : ```/api/v2/images/```

1. **Récupérer les informations completes d'une image**
   - Lien : ```/api/v2/images/get/```
   - Paramètres : 
     - ```data``` : (il n'y à pas besoin de valeur)
     - ```id``` : l'id de l'image
   - Lien avec paramètres : ```/api/v2/images/get/?data&id=[l'id de l'image]```
   - Retour : 
       - ```[le path complet]```

2. **Etre rediriger sur l'image**
   - Lien : ```/api/v2/images/get/```
   - Paramètres : 
     - ```id``` : l'id de l'image
   - Lien avec paramètres : ```/api/v2/images/get/?id=[l'id de l'image]```
   - Retour : 
       - Redirection sur la page de l'image

3. **Récupérer toutes les images d'un etablissement**
   - Lien : ```/api/v2/images/get/```
   - Paramètres : 
     - ```etablishment``` : (il n'y à pas besoin de valeur)
     - ```id``` : l'id de l'établissement
   - Lien avec paramètres : ```/api/v2/images/get/?etablishment&id=[l'id de l'établissement]```
   - Retour : 
       - Un tbaleau avec tous les chemins:
         - ```full_path``` : le lien complet dans l'API pour rejoindre l'image

4. **Récupérer toutes les images d'un repas**
   - Lien : ```/api/v2/images/get/```
   - Paramètres : 
     - ```dish``` : (il n'y à pas besoin de valeur)
     - ```id``` : l'id du repas
   - Lien avec paramètres : ```/api/v2/images/get/?dish&id=[l'id du repas]```
   - Retour : 
       - Un tbaleau avec tous les chemins:
         - ```full_path``` : le lien complet dans l'API pour rejoindre l'image
  
5. **Récupérer la photo de profil d'un utilisateur**
   - Lien : ```/api/v2/images/get/```
   - Paramètres : 
     - ```user``` : (il n'y à pas besoin de valeur)
     - ```id``` : l'id de l'établissement
   - Lien avec paramètres : ```/api/v2/images/get/?user&id=[l'id de l'établissement]```
   - Retour : 
       - Un tbaleau avec tous les chemins:
         - ```full_path``` : le lien complet dans l'API pour rejoindre l'image

6. **Mise en ligne d'une photo**
     - Afin de mettre en ligne une photo il faut :
       1. Inclure le fichier ```/api/v2/images/upload/index.php```
       2. Dans ce fichier ce trouvent les 2 fonctions suivantes :
          1. ```SaveImageEtablishement($idEtbalishement, $idUploader, $file, $target_dir, $toMove)```
          2. ~~```SaveImageDish($idDish, $idUploader, $file, $target_dir, $toMove)```~~ N'est plus valide
          3. ~~```SaveImageUser($idDish, $idUploader, $file, $target_dir, $toMove)```~~ N'est plus valide

          Les deux fonction prennent les paramètres suivants :
          - ```idEtablissement``` ou  ```idDish``` ou ```idUser``` en fonction de quelle fonction on appelle
          - ```idUploader``` : l'id du user qui met en ligne la photo 
          - ```file_name``` : le nom de la photo à créer
          - ```$tmp``` : le fichier tempon de l'image