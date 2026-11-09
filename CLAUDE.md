
# AUTOSUR.SN — Instructions pour Claude Code

## 1. Présentation du projet

AutoSur.sn est une plateforme numérique destinée aux automobilistes sénégalais.

Elle vise à centraliser les services automobiles :

- Gestion des véhicules.
- Gestion des documents automobiles.
- Assurances.
- Visites techniques.
- Entretien.
- Assistance en cas de panne.
- Mise en relation avec les professionnels de l'automobile.

Le projet est développé progressivement par une développeuse débutante.

Tu dois expliquer tes propositions et tes modifications avec des explications simples et pédagogiques.

## 2. Documents à lire obligatoirement

Avant toute intervention importante, consulte :

1. `docs/CAHIER_DES_CHARGES.md`
2. `docs/decisions/DECISIONS_TECHNIQUES.md`
3. `docs/references/GITHUB_REFERENCES.md`
4. `docs/references/AUDIT_FONCTIONNALITES_GITHUB.md`
5. Le présent fichier `CLAUDE.md`

Ces documents constituent la référence fonctionnelle et technique du projet.

Ne prends pas une décision qui contredit une règle déjà validée sans en discuter au préalable.

## 3. Technologies retenues

- Backend : Laravel 12.
- PHP : 8.2.
- Frontend : Blade.
- Styles : Tailwind CSS.
- Interactivité : JavaScript.
- Base de données : MySQL ou MariaDB.
- Versionnement : Git et GitHub.

Ne pas ajouter React ou Vue sans justification technique réelle.

Ne pas ajouter de dépendances inutiles.

Vérifier la compatibilité de chaque dépendance avec Laravel 12 et PHP 8.2.

## 4. Architecture fondamentale des utilisateurs

### 4.1. Une personne = un compte personnel

La table `users` représente une personne physique.

Elle contient ses informations personnelles et ses informations de connexion.

Le compte personnel ne doit jamais être confondu avec une entreprise ou un établissement professionnel.

### 4.2. Téléphone et e-mail

Le téléphone personnel est obligatoire, unique et vérifié par SMS OTP.

L'adresse e-mail personnelle est facultative.

L'authentification principale doit utiliser le numéro de téléphone.

La récupération du compte doit fonctionner sans adresse e-mail.

Ne jamais rendre l'e-mail obligatoire dans les formulaires ou validations sans décision préalable.

Les e-mails professionnels sont également facultatifs.

### 4.3. Établissements professionnels indépendants

Les garages, sociétés de dépannage et compagnies d'assurance possèdent leurs propres fiches professionnelles.

Leurs informations commerciales sont indépendantes des informations personnelles des utilisateurs.

Ne jamais enregistrer le téléphone commercial d'un garage dans le champ `phone` de la table `users`.

Chaque établissement doit pouvoir conserver ses informations même si son propriétaire ou son responsable change.

### 4.4. Plusieurs utilisateurs par établissement

Un établissement peut être géré par plusieurs personnes.

Chaque personne conserve son propre compte AutoSur.sn.

Une personne peut également gérer plusieurs établissements.

Prévoir des tables d'association adaptées, notamment :

- `garage_user`
- `depanneur_user`
- `assureur_user`

Ces associations permettront de définir les fonctions et autorisations des personnes dans chaque établissement.

Fonctions possibles :

- Propriétaire.
- Responsable.
- Gestionnaire.
- Employé.

Ne pas créer ces tables avant d'avoir vérifié l'architecture existante et présenté la conception.

## 5. Gestion des rôles

Les rôles prévus sont :

- `client`
- `admin`
- `garage`
- `depanneur`
- `assureur`

Les tables principales sont :

- `users`
- `roles`
- `role_user`

Un utilisateur peut posséder plusieurs rôles.

À l'inscription, le rôle `client` est attribué automatiquement.

Les rôles professionnels sont attribués après validation de la demande professionnelle.

### Règle particulière concernant le rôle administrateur

Un client peut devenir administrateur sans créer un deuxième compte.

Il conserve son rôle `client` et reçoit le rôle `admin`.

Cependant :

- Un utilisateur ne peut jamais s'attribuer lui-même le rôle `admin`.
- Seul un administrateur autorisé ou le responsable principal de la plateforme peut attribuer ce rôle.
- Les actions administratives doivent être protégées côté serveur.
- Les permissions doivent être contrôlées individuellement.
- Il ne faut jamais se limiter à masquer des boutons dans l'interface.

Ne jamais exposer publiquement un formulaire permettant de choisir le rôle administrateur.

## 6. Inscription et authentification

Le processus d'inscription doit respecter les règles suivantes :

1. L'utilisateur renseigne son prénom et son nom.
2. Il fournit son numéro de téléphone personnel.
3. Il choisit son mot de passe.
4. Il peut éventuellement renseigner son adresse e-mail.
5. Son numéro est vérifié par SMS OTP.
6. Le rôle `client` lui est attribué.

La procédure OTP doit inclure :

- Une durée d'expiration.
- Une limitation des tentatives.
- Une protection contre les demandes répétées.
- Un stockage sécurisé des codes.
- Une vérification côté serveur.

Ne pas considérer qu'un champ `email` nullable suffit à rendre toute l'authentification compatible avec un compte sans e-mail.

Vérifier également les validations, les contrôleurs, les notifications et les mécanismes de récupération de compte.

## 7. Interface utilisateur

L'interface doit être professionnelle, moderne et responsive.

Elle doit fonctionner correctement sur ordinateur, tablette et smartphone.

Trois thèmes sont prévus :

- Clair.
- Sombre.
- Intermédiaire.

Privilégier Blade, Tailwind CSS et JavaScript.

La page d'accueil publique doit présenter les services AutoSur.sn avant l'inscription.

L'inscription doit proposer une interface soignée et simple à utiliser.

## 8. Sécurité et confidentialité

Respecter les bonnes pratiques Laravel.

Protéger :

- Les comptes personnels.
- Les coordonnées personnelles.
- Les documents automobiles.
- Les données des établissements.
- Les opérations administratives.
- Les transactions.

Les documents officiels sensibles ne doivent pas être stockés dans un espace public sans protection.

Toute action sensible doit être autorisée côté serveur.

## 9. Méthode de travail obligatoire

Avant de modifier un fichier :

1. Examiner son contenu actuel.
2. Comprendre son rôle.
3. Vérifier les dépendances.
4. Vérifier les conséquences de la modification.
5. Expliquer le changement proposé.

Après modification :

1. Vérifier la syntaxe.
2. Exécuter les tests pertinents.
3. Expliquer les fichiers modifiés.
4. Présenter les commandes Git nécessaires.

Ne pas réécrire inutilement les fichiers existants.

Ne pas supprimer une fonctionnalité existante sans justification et accord.

Ne pas créer de migration avant d'avoir expliqué sa structure et son utilité.

Ne pas exécuter de commande destructive sans accord explicite.

## 10. Collaboration et décisions

ChatGPT et Claude Code participent à la réflexion et au développement.

Ils doivent respecter les mêmes documents et décisions.

Si une nouvelle demande semble contredire une décision validée :

- Signaler la contradiction.
- Expliquer les conséquences.
- Demander une confirmation avant de modifier l'architecture.

Ne pas inventer des fonctionnalités déjà développées.

Toujours vérifier le code source réel avant de faire une affirmation.

## 11. Git et GitHub

Le projet utilise les branches suivantes :

- `main` : version stable.
- `develop` : développement.
- `feature/*` : nouvelles fonctionnalités.

Ne jamais intégrer directement une fonctionnalité non vérifiée dans `main`.

Ne jamais publier de fichier `.env`, mot de passe, clé API ou autre secret.

## 12. Règle finale

AutoSur.sn doit être construit progressivement avec une architecture fiable, sécurisée, évolutive et compréhensible.

La priorité est de respecter le cahier des charges, les décisions validées et le niveau de maîtrise de la développeuse.

Expliquer avant d'agir, vérifier avant de modifier et tester avant de valider.
