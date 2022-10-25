## Exercice du Niveau G

*Savez-vous ce qu'est un arbre binaire ?

Nous avons deux structures de données qui sont liées.
La première structre est le noeud,
 le noeud est composée d'une valeur, d'un lien vers un fils gauche et d'un lien vers son fils droit.
 une des règles de composition de l'arbre est que les fils qui se situent à gauche ont une valeur plus petite que la valeur du noeud courrant
 (respectivement à droite avec des valeurs plus grande)

La seconde est l'arbre qui est composée principalement d'un noeud root,
 qui permet d'accéder au reste de l'arborescence.

Ici nous avons fait le choix de stocker l'arbre dans un tableau :D
Pour un noeud situé à l'index i,
 le fils droit est stocké à l'index 2*i+1
 et le fils gauche est stocké à l'index 2*i
Ce qui fait que le parent d'un noeud i est située en i%2
Pour le reste des opérations, je vous invite à regarder le code non documenté :D

Important, pour des raisons d'hygiène l'index du tableau démarre à 1

*Exercice*

Pour ajouter un élement dans notre arbre (via la fonction add),
 nous avons besoin de créer la fonction course qui parcours l'arbre (en recursif).
 Si l'emplacement est disponible, la fonction course retourne un index,
 Sinon elle continue son parcours à gauche, si la valeur du noeud a insérer est plus petite que la valeur que je lit
 (respectivement à droit, si la valeur est plus grande)

Vous avez trois fonctions @TOOLBOX qui peuvent être utiles.