# Made With Love - La Manu

## Objectifs et Méthodo

### Objectifs

* Réaliser un site de rencontre en MVC conformément au cahier des charges fourni.
* Travailler en mméthode agile

### Trello 

* Garder le dashboard Trello ouvert et n'hésitez pas à vous y référer !

* Chaque demi journée, daily meeting, on débrief sur nos réalisations ou problèmes, on ajoute des cartes, on réorgannise le dashboard


### Git

* Chacun travail sur sa branche (cf plus bas)
* Une fonctionnalité fonctionelle => 1 commit
* Un commit => un commentaire explicite

## Setup de votre environnement de travail

### Local

* Cloner le repo *madeWithLove* à la racine de votre serveur local :
    * Ouvrer git bash à la racine de votre serveur local *www*
    * Vérifier avec la commande *pwd* que vous êtes au bon endroit
    * Cloner le repo *git clone https://github.com/Thot80/madeWithLove.git*
* Ajouter un virtual host *madeWithLove*
* Rafraichir le *DNS*
* Vérifier la bonne marche des étapes précédentes à l'adresse *127.0.0.1*
* Ouvrir git bash dans le dossier madeWithLove
* Créer vottre branche de travail :
    * *git branch [prenom]*
* Aller sur votre branche de travail :
    * *git switch[branche]*
* Pusher votre branch :
    * *git push --set-upstream origin [votreBranche]*

Vous êtes prêts !


## Workflow

![Provisoire](/doc/git.png)

* Avant de commit, on pull :
    * *git pull*
    * *git add [fichier]*
    * *git commit -m "Message du commit"*
    * *git push*


* Récupérer les changements apportés au main sur votre branche :
    * *git switch [votreBranche]*
    * *git fetch*
    * *git merge origin/main*
## Structure du site

![Provisoire](/doc/flux-made-with-love.png)


