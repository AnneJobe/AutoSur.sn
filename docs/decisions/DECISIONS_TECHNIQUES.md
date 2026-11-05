\# AUTOSUR.SN — DÉCISIONS TECHNIQUES



\## 1. Objectif



Ce document centralise les décisions techniques validées pour le développement d'AutoSur.sn.



Il complète le cahier des charges sans remplacer ni supprimer ses exigences.



\## 2. Technologies principales



\- Backend : Laravel 12.

\- Langage : PHP 8.2.

\- Interface web : Blade.

\- Styles : Tailwind CSS.

\- Interactivité : JavaScript.

\- Base de données : MySQL ou MariaDB.

\- Gestion du code : Git et GitHub.



\## 3. Architecture générale



Le projet reposera sur un backend Laravel central.



Il devra progressivement prendre en charge :



\- Le site web ;

\- L'espace client ;

\- Le back-office administrateur ;

\- Les partenaires ;

\- Une API destinée aux futures applications mobiles.



L'architecture devra permettre l'évolution du système sans nécessiter une refonte globale.



\## 4. Stratégie de développement



Le développement sera organisé en phases.



\### Phase 1 : Fondations



\- Installation et configuration de Laravel.

\- Configuration de la base de données.

\- Organisation de l'architecture.

\- Authentification et gestion des rôles.



\### Phase 2 : Site web et espace client



\- Page d'accueil.

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



\## 5. Choix concernant le frontend



Blade, Tailwind CSS et JavaScript seront privilégiés pour la première version web.



React et Vue ne seront pas ajoutés sans justification technique réelle.



\## 6. Gestion des références GitHub



Les dépôts externes seront étudiés pour identifier les fonctionnalités intéressantes.



Avant toute réutilisation :

\- Vérifier la licence.

\- Étudier le code.

\- Vérifier la compatibilité.

\- Identifier les dépendances.

\- Adapter les fonctionnalités au contexte d'AutoSur.sn.



Aucun dépôt ne sera copié intégralement.



\## 7. Sécurité



La sécurité devra être prise en compte dès la conception :



\- Protection des comptes utilisateurs.

\- Vérification des accès selon les rôles.

\- Protection des documents personnels.

\- Validation des données reçues.

\- Protection des transactions.

\- Gestion sécurisée des sessions.

\- Journalisation des opérations sensibles.



\## 8. Collaboration avec les assistants



ChatGPT et Claude devront respecter :



\- Le cahier des charges original.

\- Le présent document.

\- Le fichier CLAUDE.md.

\- Les décisions déjà validées.

\- L'état réel du code source.



Toute proposition de modification importante devra être expliquée et examinée avant intégration.



\## 9. Règle de validation



La branche principale main doit contenir uniquement du code vérifié.



Les nouvelles fonctionnalités seront développées progressivement et testées avant leur intégration.



\## 10. Principe directeur



Construire une plateforme fiable, évolutive, sécurisée et adaptée aux besoins des automobilistes sénégalais, tout en conservant une architecture compréhensible et maintenable.



