\# CAHIER DES CHARGES TECHNIQUE

\# PROJET : AUTOSUR.SN



\*\*Plateforme numérique intégrée pour l’automobiliste sénégalais\*\*



\*\*Promoteur :\*\* Babacar DIOUME  

\*\*Localisation :\*\* Dakar, Sénégal



\---



\## 1. OBJET DU PROJET



AutoSur.sn est une plateforme numérique destinée à centraliser les principaux besoins de l’automobiliste sénégalais.



La plateforme doit permettre à un utilisateur de :



\- Enregistrer son ou ses véhicules ;

\- Conserver ses informations et documents automobiles ;

\- Suivre les échéances importantes et recevoir des notifications ;

\- Gérer ses besoins d’assurance et demander des services administratifs ;

\- Prendre rendez-vous pour la visite technique ou solliciter une assistance SOS Panne géolocalisée ;

\- Localiser les prestataires partenaires ;

\- Effectuer des paiements numériques (Wave/Orange Money) ;

\- Accéder à son historique de services.



Le projet doit être conçu de manière évolutive pour intégrer progressivement les administrations, compagnies d'assurance, garages et dépanneurs.



\## 2. OBJECTIFS TECHNIQUES



Le développeur devra concevoir une solution répondant aux critères suivants :



\*\*1. Simplicité d'utilisation :\*\* Interface ergonomique et intuitive.



\*\*2. Performance :\*\* Chargement rapide même avec une connexion Internet mobile moyenne.



\*\*3. Multiplateforme :\*\* Compatible nativement ou via framework cross-platform avec Android et iOS.



\*\*4. Sécurité :\*\* Protection stricte des données utilisateurs et sécurisation des flux financiers.



\*\*5. Évolutivité :\*\* Architecture modulaire préparée pour l'intégration de nouvelles API externes sans refonte globale.



\*\*6. Adaptation locale :\*\* Intégration fine des usages et moyens de paiement du contexte sénégalais.



\*\*7. Autonomie :\*\* Back-office permettant une administration complète par l'équipe sans intervention technique permanente.



\## 3. COMPOSANTS À DÉVELOPPER



\### A. Application mobile



Versions iOS et Android destinées aux clients finaux et aux dépanneurs.



\### B. Site Web



\- Vitrine de présentation ;

\- Formulaires d'inscription et de connexion ;

\- Espace client complet ;

\- Référencement des partenaires ;

\- Support de contact.



\### C. Back-office administrateur



Interface centralisée de gestion comprenant :



\- Les utilisateurs ;

\- Les véhicules ;

\- Les documents ;

\- Les prestataires ;

\- Les transactions ;

\- Les statistiques ;

\- Les notifications.



\### D. API / Backend central



Serveur et base de données sécurisés centralisant toute la logique métier et la communication des applications.



\## 4. PROFILS UTILISATEURS \& ACCÈS



\### 4.1 Automobiliste / Client



\- Gestion du profil ;

\- Ajout de véhicules ;

\- Coffre-fort numérique ;

\- Paiement en ligne ;

\- Demandes d'assistance SOS géolocalisées ;

\- Suivi des alertes.



\### 4.2 Administrateur AutoSur.sn



\- Contrôle total sur la modération ;

\- Validation des partenaires ;

\- Suivi comptable des transactions ;

\- Configuration des services.



\### 4.3 Garage partenaire



\- Réception des demandes ;

\- Gestion des interventions ;

\- Mise à jour des statuts ;

\- Suivi de la réputation et de l'évaluation des clients.



\### 4.4 Dépanneur partenaire



\- Réception des alertes SOS en temps réel ;

\- Visualisation de la géolocalisation du client ;

\- Acceptation ou refus des demandes ;

\- Suivi de l'état de l'intervention.



\*\*Note de fidélité au document original :\*\* le cahier des charges transmis contient la formulation « visualisation de la géolocalisation du client dépressif ». Le terme « dépressif » semble devoir être confirmé par le promoteur. Il n'est pas remplacé silencieusement dans cette transcription.



\### 4.5 Partenaire assurance



\- Réception de prospects ;

\- Suivi des souscriptions ;

\- Traitement des commissions de manière asynchrone ou via API dédiées.



\## 5. INSCRIPTION ET AUTHENTIFICATION



Le système devra prévoir :



\- Inscription principale par numéro de téléphone avec vérification obligatoire par code OTP (SMS).

\- Option d'inscription secondaire par adresse e-mail.

\- Système de gestion des mots de passe sécurisés avec procédure de récupération fiable.

\- Option d'activation d'une authentification renforcée (2FA) pour la protection des données personnelles.



\## 6. PROFIL AUTOMOBILISTE \& VÉHICULES



\### Profil complet



Chaque automobiliste devra pouvoir renseigner les informations suivantes :



\- Prénom ;

\- Nom ;

\- Téléphone ;

\- E-mail ;

\- Adresse géographique ;

\- Photo facultative.



\### Module « Mes Véhicules »



Chaque véhicule devra disposer d'une fiche individuelle stockant :



\- L'immatriculation ;

\- La marque ;

\- Le modèle ;

\- L'année ;

\- La couleur ;

\- Le numéro de châssis ;

\- L'historique de visite technique ;

\- Le statut de l'assurance.



\## 7. COFFRE-FORT NUMÉRIQUE



La plateforme devra intégrer un système de stockage sécurisé des documents automobiles.



\### Formats acceptés



\- PDF ;

\- JPG ;

\- PNG.



Exemples de documents : carte grise, attestation d'assurance, factures, etc.



\### Fonctionnalités associées



\- Téléchargement des documents ;

\- Consultation ;

\- Suppression ;

\- Classement ;

\- Liaison dynamique d'un document à un véhicule spécifique ;

\- Suivi de la date d'expiration.



\## 8. SYSTÈME D'ALERTES \& NOTIFICATIONS



\### Surveillance automatisée des échéances



Le système devra surveiller :



\- L'expiration de l'assurance ;

\- La date imminente du contrôle technique ;

\- La maintenance préventive.



\### Canaux de diffusion



Les canaux de diffusion devront être configurables depuis le back-office :



\- Notifications push ;

\- SMS (passerelle locale) ;

\- E-mails.



\## 9. MODULES MÉTIERS SPÉCIFIQUES



\### 9.1 Assurance



Le module assurance devra proposer :



\- La demande de devis ;

\- La consultation des offres partenaires ;

\- Un outil de calcul automatisé des commissions d'apport d'affaires.



\*\*Taux de commission prévu : entre 5 % et 12 %.\*\*



\### 9.2 Visite Technique



Le module devra permettre :



\- La planification de rendez-vous ;

\- Le suivi des statuts ;

\- La facturation du service de facilitation.



\*\*Montant estimé du service de facilitation : entre 1 500 et 3 000 FCFA par acte.\*\*



\### 9.3 Services Administratifs (Carte Grise)



Le système devra disposer d'une architecture ouverte permettant :



\- La transmission de dossiers ;

\- Le suivi de leur traitement dès que les API administratives officielles seront disponibles.



\---



\## FIN DU CAHIER DES CHARGES TECHNIQUE



\*\*Projet : AutoSur.sn\*\*  

\*\*Promoteur : Babacar DIOUME\*\*  

\*\*Localisation : Dakar, Sénégal\*\*

