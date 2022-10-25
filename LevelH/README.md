## Exercice du Niveau H

Une liste de 142'714 villes est contenue dans la classe PHP CitiesData.
Cette classe contient un constructeur (qui ne sert à rien).
Cette classe contient une méthode getCityInfoById qui permet de récupérer les informations d'une ville.
> Les informations sont : l'id, le nom de la ville, sa lattitude et sa longitude
    /!\ N'ouvrez pas le fichier CitiesData.php /!\

La classe Geo a une méthode qui doit permettre de connaitre quelle est la ville
    la plus proche d'une autre ville.

Pour cela, nous parcourons l'ensemble des villes du tableau, nous calculons
    la distance entre la ville "source" et toutes les autres villes "destination"
    et nous retournons la ville ayant la distance la plus courte.

Votre objectif est d'améliorer la performance et de répondre au besoin fonctionnel.
