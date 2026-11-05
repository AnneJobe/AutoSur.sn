# Audit préliminaire des fonctionnalités GitHub --- AutoSur.sn

**Projet :** AutoSur.sn\
**Date :** 5 novembre 2026\
**Statut :** Audit préliminaire --- les dépôts et leurs licences doivent
être revérifiés avant toute réutilisation de code.

## 1. Objectif

Identifier des fonctionnalités pertinentes dans plusieurs projets open
source afin d'enrichir AutoSur.sn, sans copier intégralement leurs
applications, leur design ou leur architecture.

AutoSur conserve son identité propre et son socle technique : - Laravel
12 - PHP 8.2 - Blade - Tailwind CSS - JavaScript - MariaDB / MySQL

Les projets externes servent de références. Une idée intéressante peut
être réimplémentée proprement dans AutoSur sans reprendre le code
source.

## 2. Principes de sélection

Pour chaque dépôt, nous devons :

1.  Comprendre la fonctionnalité et le problème qu'elle résout.
2.  Examiner le code réel, et pas seulement le README ou les captures
    d'écran.
3.  Vérifier la licence dans le dépôt et les conditions des dépendances.
4.  Vérifier la compatibilité avec PHP 8.2 et Laravel 12.
5.  Examiner la sécurité, les tests, la maintenance et la qualité du
    code.
6.  Décider si AutoSur doit adapter le code, réimplémenter l'idée ou
    écarter la fonctionnalité.
7.  Documenter la source et conserver les mentions de licence si du code
    est effectivement réutilisé.

**Important :** une licence annoncée ou une fonctionnalité décrite dans
ce document n'est pas considérée comme définitivement vérifiée. Il faut
confirmer ces éléments dans le dépôt au moment de l'audit technique.

## 3. Dépôts à examiner

### 3.1 Revisalog --- Historique et passeport du véhicule

-   Dépôt : https://github.com/fellipesg/vehicle_maintenance
-   Licence : MIT indiquée dans les recherches préliminaires ; à
    confirmer dans le fichier LICENSE du dépôt.
-   Compatibilité : le dépôt a été signalé comme demandant PHP 8.4 ; ne
    pas intégrer directement dans notre environnement PHP 8.2 sans
    vérification.

**Idées à étudier :** - Historique des entretiens rattaché au
véhicule. - Référence au numéro de châssis (VIN). - QR code permettant
de consulter un historique partagé. - Documents ou justificatifs
associés aux interventions. - Distinction entre une intervention
déclarée et une intervention vérifiée.

**Proposition AutoSur :** créer un passeport numérique pour chaque
véhicule, avec un historique consultable et des interventions dont le
statut de vérification est clairement visible.

**Points de vigilance :** confidentialité des données, prévention des
modifications frauduleuses, autorisations de partage et contrôle des
justificatifs.

### 3.2 Fleet Laravel --- Suivi des coûts et entretien préventif

-   Dépôt : https://github.com/danilo62x/fleet-laravel
-   Licence : MIT indiquée dans les recherches préliminaires ; à
    confirmer dans le dépôt.
-   Compatibilité : PHP 8.2+ annoncée ; vérifier les dépendances exactes
    et les versions Laravel.

**Idées à étudier :** - Suivi des dépenses de carburant. - Calcul du
coût par kilomètre. - Historique des dépenses d'un véhicule. - Rappels
d'entretien selon le temps ou le kilométrage. - Contrôle de cohérence du
kilométrage. - Préférences d'affichage et de langue.

**Proposition AutoSur :** proposer un tableau de bord des dépenses et un
historique des coûts pour aider le propriétaire à mieux suivre son
véhicule.

**Points de vigilance :** les calculs doivent être expliqués et reposer
sur des données saisies ou vérifiées ; ne pas présenter une estimation
comme une mesure exacte.

### 3.3 FMS --- Inspection et validation des interventions

-   Dépôt : https://github.com/navodya0/FMS
-   Licence : à confirmer avant toute réutilisation du code.
-   Compatibilité : Laravel 12 a été annoncé ; vérifier le fichier
    composer.json, les dépendances et les versions PHP réellement
    supportées.

**Idées à étudier :** - Rapports d'inspection. - Validation par un
gestionnaire. - Gestion des rôles et autorisations. - Disponibilités et
réservations. - Génération de documents PDF.

**Proposition AutoSur :** mettre en place un processus de demande de
prestation, acceptation par le garage, rapport d'intervention et
confirmation par le client.

**Points de vigilance :** définir précisément qui peut créer, modifier,
valider ou clôturer une intervention. Garder une trace des changements
importants.

### 3.4 NaviFleet --- Organisation modulaire et événements

-   Dépôt : https://github.com/sydorowiczpawel/NaviFleet
-   Licence : MIT indiquée dans les recherches préliminaires ; à
    confirmer dans le dépôt.
-   Compatibilité : PHP 8.4+ signalé ; ne pas reprendre directement les
    composants incompatibles avec PHP 8.2.

**Idées à étudier :** - Organisation du code en modules métier. -
Historique des affectations. - Alertes d'expiration des documents. -
Événements déclenchant des notifications. - Suivi des dépenses et du
carburant.

**Proposition AutoSur :** s'inspirer d'une architecture claire et
utiliser les événements Laravel pour déclencher des notifications
lorsqu'une échéance approche.

**Points de vigilance :** éviter une architecture trop complexe pour un
projet développé progressivement ; ne pas ajouter de système
événementiel externe si Laravel suffit.

### 3.5 MyGarage --- Gestion de plusieurs véhicules

-   Dépôt : https://github.com/homelabforge/mygarage
-   Licence : MIT indiquée dans les recherches préliminaires ; à
    confirmer dans le dépôt.
-   Compatibilité : à examiner.

**Idées à étudier :** - Plusieurs véhicules dans un même foyer. -
Partage d'accès entre membres autorisés. - Exports PDF ou CSV. -
Calendrier et recherche. - Possibilité d'accès mobile de type PWA.

**Proposition AutoSur :** permettre à un utilisateur de gérer plusieurs
véhicules et, éventuellement, de partager l'accès à un véhicule avec un
membre de sa famille.

**Points de vigilance :** le propriétaire doit contrôler les personnes
autorisées et les actions permises sur chaque véhicule.

### 3.6 DriveIQ --- Assistant d'information automobile

-   Dépôt : https://github.com/ry-ops/DriveIQ
-   Licence : MIT indiquée dans les recherches préliminaires ; à
    confirmer dans le dépôt.
-   Compatibilité : à examiner.

**Idées à étudier :** - Recherche dans les informations et manuels du
véhicule. - Aide à comprendre les opérations d'entretien. - Historique
enrichi avec des photos.

**Proposition AutoSur :** étudier un assistant d'information qui aide à
comprendre les échéances, les documents et les opérations courantes
d'entretien.

**Points de vigilance :** l'assistant ne doit pas se substituer à un
mécanicien, inventer des diagnostics ou présenter des conseils
incertains comme des certitudes. Les réponses doivent être prudentes et,
si nécessaire, orienter vers un professionnel.

## 4. Sélection fonctionnelle proposée pour AutoSur

  -----------------------------------------------------------------------
  Fonctionnalité          Valeur pour AutoSur     Priorité proposée
  ----------------------- ----------------------- -----------------------
  Passeport numérique du  Historique et confiance Haute
  véhicule                lors d'une revente      

  Carnet d'entretien      Centraliser les         Haute
                          interventions et        
                          justificatifs           

  Alertes intelligentes   Anticiper les échéances Haute
                          par date et kilométrage 

  Réservation et          Faciliter la relation   Haute
  validation des garages  client-prestataire      

  Suivi des dépenses      Comprendre les coûts    Haute
                          liés au véhicule        

  Gestion de plusieurs    Répondre aux besoins    Moyenne
  véhicules               des foyers              

  Partage sécurisé d'un   Donner un accès limité  Moyenne
  véhicule                à d'autres personnes    

  Assistant d'information Aider à comprendre les  Moyenne
  automobile              informations du         
                          véhicule                

  PWA et accès mobile     Améliorer l'accès       Moyenne
                          depuis un téléphone     

  QR code de consultation Partager certaines      Moyenne
                          informations du         
                          passeport               
  -----------------------------------------------------------------------

Ces priorités sont des propositions de travail, pas encore des décisions
définitives.

## 5. Règles de conception propres à AutoSur

-   Garder une identité visuelle originale : ne pas copier les couleurs,
    les écrans ou la disposition des dépôts.
-   Concevoir une interface responsive avec les thèmes clair, sombre et
    intermédiaire.
-   Garder Laravel comme backend central pour le site et les futures
    applications mobiles.
-   Utiliser les autorisations côté serveur ; masquer un bouton dans
    l'interface ne suffit pas à sécuriser une action.
-   Protéger les documents officiels et limiter leur accès aux personnes
    autorisées.
-   Ne pas exposer publiquement les données personnelles ou les
    documents d'un véhicule via un QR code.
-   Ne pas ajouter une table sans besoin métier identifié.
-   Éviter d'ajouter une dépendance lourde lorsqu'une fonctionnalité
    Laravel native suffit.

## 6. Vérifications techniques à effectuer pour chaque dépôt

-   [ ] Lire le fichier LICENSE et vérifier les éventuelles
    restrictions.
-   [ ] Examiner composer.json et la version PHP requise.
-   [ ] Examiner les dépendances et leurs licences.
-   [ ] Vérifier la dernière activité et les problèmes connus.
-   [ ] Lire les migrations, modèles, contrôleurs et routes concernés.
-   [ ] Vérifier les validations, autorisations et protections de
    sécurité.
-   [ ] Vérifier l'existence de tests automatisés.
-   [ ] Identifier les parties réellement réutilisables.
-   [ ] Documenter les modifications nécessaires pour AutoSur.

## 7. Décisions à prendre avant le développement des interfaces

1.  Valider les fonctionnalités qui feront partie de la première
    version.
2.  Reporter les fonctionnalités avancées à des phases ultérieures.
3.  Mettre à jour le cahier des charges.
4.  Concevoir le modèle de données correspondant aux fonctionnalités
    retenues.
5.  Seulement ensuite, développer les pages de présentation,
    d'inscription et les espaces utilisateurs.

## 8. Statut de cet audit

Ce document est une **première sélection fonctionnelle** fondée sur les
dépôts repérés. Il ne constitue pas encore une validation juridique ou
technique du code de ces projets.

Aucune copie de code n'est autorisée sur la seule base de ce document.
Toute réutilisation doit être précédée d'une vérification de la licence,
de la compatibilité, de la sécurité et des dépendances.
