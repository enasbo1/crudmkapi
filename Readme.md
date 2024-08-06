# CrudMkAPI

## generation des crud

pour générer un crud, il faut:
- créer un fichier \<table>.crmd dans le dossier crudmaker_bin\\crmd
contenant les différentes colonnes de la table lié au model avec leur contraintes 
dans le format détaillé dans verif_doc.md
- lancer le code crudmaker.py : rentrer le nom du model et le nom de la table,
le code proposera d'utiliser le fichier .crmd qui a été trouvé à partir du nom de la table
- ajouter les import vers les fichiers
"src\\\<model>\\\<Model>Controller.php" et
"crud\\\<model>\\\<Model>ModelType.php"
dans le fichier index.php
- ajouter le \<Model>Controller à la "controllerList". La clef qui le refencence est utilisée 
par le code pour y diriger les requêtes http.


## modification des crud
les fichiers se trouvant dand le dossier crud ne doivent pas être modifiés, 
cependant les fichier se trouvant dans src\\\<model>\\ 
peuvent être modifier tant que les classes qui y sont définies respectent leurs interface

attention toutefois à ne pas modifier les fichiers se trouvant dans le dossier src/shared
et src/verif sans une certaine compréhention de leur portée.

le fichier index.php ne necessite pas non plus d'autres
modification que celles demandées pour la generation du crud