# les 3 fonctions à ajouter dans le webservice : 

- UserAdd
- UserLogin
- UserPasswordReset

# Les demandes :

- le fichier webservice.php (dedans les fonctions pour correspondre en curl/json avec le front)
- le fichier login.php (code pour appeler le webservice pour savoir si le email/pass a un compte)
- le fichier register.php (code qui appelle le webservice pour enregistrer un utilisateur)
- le fichier forgotpassword.php (code qui appelle le webservice pour envoyer un la demande de réinitialisation de compte qui envoie le mot de pass sur le mail)

# Les contraintes sont les suivante :

- L’email doit etre validé à la création du compte + au login
- le password doit être encodé à la création  et décoder pour le login
- l’utilisateur doit être inactif à l’ajout

# La table des utilisateurs (simulez les requêtes sur mysql, mongo ou sqlserver… peu importe) : 

```
PK_USER (bigint, pk, autoincrement)
S_EMAIL (varchar)
S_PASSWORD (varchar)
D_DATE_ADD (date)
B_ACTIF (bool)
D_DATE_NAISSANCE (date)
```

# Bonus :

Proposer une méthode mieux sécurisé avec le code pour le reset du mot de pass

# N'oubliez pas d'envoyer le lien sur les emails du PDF
