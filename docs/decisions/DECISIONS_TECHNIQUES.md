

\# AUTOSUR.SN — DÉCISIONS TECHNIQUES



\## 1. Objectif



Ce document centralise les décisions techniques validées pour le développement d'AutoSur.sn.



Il complète le cahier des charges sans remplacer ni supprimer ses exigences.



Toute modification d'une décision validée doit être discutée et documentée.



\## 2. Technologies principales



\- Backend : Laravel 12.

\- Langage : PHP 8.2.

\- Interface web : Blade.

\- Styles : Tailwind CSS.

\- Interactivité : JavaScript.

\- Base de données : MySQL ou MariaDB.

\- Gestion du code : Git et GitHub.



React et Vue ne seront pas ajoutés sans justification technique réelle.



\## 3. Architecture générale



Le projet reposera sur une application Laravel centrale.



Elle prendra progressivement en charge :



\- Le site web public.

\- L'espace personnel des clients.

\- Le back-office administrateur.

\- Les espaces professionnels.

\- Une API destinée aux futures applications Android et iOS.



Le site web et les futures applications mobiles utiliseront le même backend et la même base de données.



L'architecture devra permettre l'évolution du système sans nécessiter une refonte globale.



\## 4. Comptes personnels et établissements professionnels



\### 4.1. Principe fondamental



Un compte utilisateur représente une personne physique.



Un établissement professionnel représente une organisation indépendante de la personne qui le possède ou le gère.



Il ne faut jamais confondre les coordonnées personnelles d'un utilisateur avec les coordonnées commerciales de son établissement.



\### 4.2. Comptes personnels



La table `users` contiendra notamment :



\- Prénom.

\- Nom.

\- Téléphone personnel.

\- Adresse e-mail personnelle facultative.

\- Adresse géographique personnelle facultative.

\- Photo de profil facultative.

\- Mot de passe.

\- Date de vérification du téléphone.

\- État du compte.



Le numéro de téléphone personnel sera obligatoire, unique et vérifié par SMS OTP.



L'adresse e-mail personnelle ne sera pas obligatoire.



\### 4.3. Établissements professionnels



Les établissements disposeront de leurs propres tables et informations.



Les catégories professionnelles prévues sont :



\- Garages.

\- Sociétés de dépannage.

\- Compagnies d'assurance.



Chaque établissement possédera notamment :



\- Son nom commercial.

\- Son téléphone professionnel.

\- Son adresse professionnelle.

\- Son adresse e-mail professionnelle facultative.

\- Son logo facultatif.

\- Son statut de validation.

\- Ses informations spécifiques à son activité.



Le téléphone professionnel ne remplacera jamais le téléphone personnel du propriétaire ou des employés.



\### 4.4. Gestion par plusieurs utilisateurs



Un même établissement pourra être géré par plusieurs personnes possédant chacune leur compte personnel AutoSur.sn.



Une personne pourra également gérer plusieurs établissements.



Les associations seront organisées avec des tables pivot adaptées, par exemple :



\- `garage\_user`

\- `depanneur\_user`

\- `assureur\_user`



Ces associations permettront de définir la fonction et les autorisations de chaque utilisateur dans l'établissement.



Les fonctions pourront notamment être :



\- Propriétaire.

\- Responsable.

\- Gestionnaire.

\- Employé.



Les autorisations seront contrôlées côté serveur.



\### 4.5. Continuité des établissements



Les informations professionnelles ne devront pas dépendre du compte personnel d'une seule personne.



Un changement de propriétaire ou de responsable ne devra pas entraîner la suppression de l'établissement ni de son historique.



Les transferts de responsabilités devront être sécurisés et autorisés.



\## 5. Gestion des rôles et des autorisations



\### 5.1. Rôles prévus



Les rôles principaux sont :



\- `client`

\- `admin`

\- `garage`

\- `depanneur`

\- `assureur`



La gestion des rôles repose sur :



\- `users`

\- `roles`

\- `role\_user`



Un utilisateur pourra posséder plusieurs rôles.



\### 5.2. Attribution des rôles



Lors de son inscription, un nouvel utilisateur recevra automatiquement le rôle `client`.



Les rôles professionnels seront attribués après validation de la demande professionnelle selon les règles définies.



Le rôle `admin` sera réservé aux personnes expressément autorisées.



Un client pourra donc devenir administrateur sans créer un deuxième compte.



Il conservera son rôle `client` et recevra également le rôle `admin`.



\### 5.3. Sécurité administrative



Un utilisateur ne pourra jamais s'attribuer lui-même le rôle `admin`.



Seul un administrateur disposant de l'autorisation nécessaire ou le responsable principal de la plateforme pourra attribuer ou retirer ce rôle.



Les contrôles administratifs devront être réalisés côté serveur avec des autorisations dédiées.



Masquer un bouton dans l'interface ne constitue pas une protection suffisante.



\## 6. Inscription et authentification



\### 6.1. Règles d'inscription



Le téléphone personnel est obligatoire.



La vérification SMS OTP est obligatoire avant l'activation définitive du compte.



L'adresse e-mail est facultative.



Le mot de passe est obligatoire.



\### 6.2. Authentification



L'identifiant principal de connexion sera le numéro de téléphone.



Le système devra être conçu pour fonctionner même si l'utilisateur ne possède aucune adresse e-mail.



\### 6.3. Récupération du compte



La récupération du compte devra être possible par téléphone avec une procédure OTP sécurisée.



Les codes OTP devront notamment avoir :



\- Une durée de validité limitée.

\- Un nombre de tentatives limité.

\- Une protection contre les demandes excessives.

\- Un stockage sécurisé.

\- Une vérification côté serveur.



\## 7. Choix concernant le frontend



Blade, Tailwind CSS et JavaScript seront privilégiés pour la première version web.



L'interface devra être responsive et adaptée aux smartphones Android et iOS.



Trois thèmes sont prévus :



\- Clair.

\- Sombre.

\- Intermédiaire.



React et Vue ne seront pas ajoutés sans justification technique réelle.



\## 8. Stratégie de développement



\### Phase 1 : Fondations



\- Installation et configuration de Laravel.

\- Configuration de la base de données.

\- Organisation de l'architecture.

\- Gestion des utilisateurs.

\- Authentification par téléphone.

\- Vérification SMS OTP.

\- Gestion des rôles et autorisations.



\### Phase 2 : Site web et espace client



\- Page d'accueil publique.

\- Présentation dynamique des services.

\- Inscription et connexion.

\- Profil utilisateur.

\- Tableau de bord.

\- Gestion des véhicules.



\### Phase 3 : Fonctionnalités automobiles



\- Coffre-fort numérique.

\- Gestion des documents.

\- Suivi des échéances.

\- Système d'alertes.



\### Phase 4 : Services partenaires



\- Garages.

\- Dépanneurs.

\- Assurances.

\- Visites techniques.

\- Services administratifs.

\- Gestion des responsables et employés.



\### Phase 5 : Paiements et géolocalisation



\- Intégration progressive de Wave.

\- Intégration progressive d'Orange Money.

\- Géolocalisation SOS Panne.

\- Suivi des interventions.



\### Phase 6 : Applications mobiles



\- API Laravel.

\- Application Android.

\- Application iOS.

\- Communication avec le backend central.



\## 9. Sécurité



La sécurité devra être prise en compte dès la conception :



\- Protection des comptes utilisateurs.

\- Vérification des accès selon les rôles et permissions.

\- Protection des données personnelles.

\- Protection des documents sensibles.

\- Validation des données reçues.

\- Protection des transactions.

\- Gestion sécurisée des sessions.

\- Limitation des tentatives d'authentification.

\- Journalisation des opérations sensibles.



\## 10. Gestion des références GitHub



Les dépôts externes seront étudiés pour identifier les fonctionnalités intéressantes.



Avant toute réutilisation :



\- Vérifier la licence.

\- Étudier le code.

\- Vérifier la compatibilité.

\- Identifier les dépendances.

\- Adapter les fonctionnalités au contexte d'AutoSur.sn.



Aucun dépôt ne sera copié intégralement.



\## 11. Collaboration avec les assistants



ChatGPT et Claude devront respecter :



\- Le cahier des charges original.

\- Le présent document.

\- Le fichier `CLAUDE.md`.

\- Les décisions déjà validées.

\- L'état réel du code source.



Toute proposition de modification importante devra être expliquée avant intégration.



Aucun assistant ne devra modifier une décision validée sans accord préalable.



En cas de contradiction entre le code existant et une décision documentée, l'assistant devra signaler le problème avant de modifier le code.



\## 12. Gestion du code source



\- `main` : branche stable.

\- `develop` : branche de développement.

\- `feature/\*` : branches dédiées aux fonctionnalités.



Les modifications devront être testées avant leur intégration dans `main`.



\## 13. Principe directeur



Construire une plateforme fiable, évolutive, sécurisée et adaptée aux besoins des automobilistes sénégalais, tout en conservant une architecture compréhensible et maintenable.



