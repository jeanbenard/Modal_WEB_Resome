# Modal_WEB_Resome
Projet Web Resome final

Projet réalisé dans le cadre du cours d'INF 472W - Modal Web - Application Web - à l'Ecole polytechnique

Installation de l'environnement de travail

      - XAMPP (qui regroupe un serveur Apache, un logiciel de base de données MySQL, et PHP qui permet de gérer les pages web dynamiques), 
      - et d'autre part l'environnement de développement NetBeans.
      
Installation de XAMPP

      Installer un serveur web Apache en y ajoutant de plus, des serveurs MySQL (pour la gestion de bases de donnée) et PHP (pour gérer les pages web dynamiques) n'est en général pas chose aisée.
      Pour résoudre ces difficultés, plusieurs auteurs ont développé des kits d'installation automatique de ces divers composants.
      Dans le cadre du modal web, nous avons utilisé XAMPP, qui possède l'avantage de s'installer très simplement et d'exister pour les trois plateformes principales : Linux, Windows et MacOs.

Installation, démarrage et test sous Linux

      L'installation se déroule en plusieurs étapes, décrites sur la page de XAMPP dédiée à Linux. (https://www.apachefriends.org/faq_linux.html)
      - Téléchargez XAMPP pour Linux en cliquant sur ce lien: https://www.apachefriends.org/xampp-files/5.6.24/xampp-linux-x64-5.6.24-1-installer.run
      - Une fois le fichier téléchargé, suivez les instructions données sur la page officielle pour installer XAMPP dans le répertoire /opt. 
      Pour cela, vous aurez besoin de connaitre votre mot de passe root ou d'utiliser la commande sudo (par exemple, sudo su permet d'obtenir l'équivalent de la commande su en tapant son propre mot de passe, cela ne fonctionne que pour les «administrateurs de l'ordinateur»).
      - Lancez XAMPP selon les explications de la page officielle.
      - Une fois XAMPP démarré, ouvrez un navigateur web et saisissez l'adresse suivante : http://localhost. Si tout se passe bien, la page d'accueil s'affiche.
      - Les serveurs de XAMPP continueront à tourner jusqu'à ce que vous éteigniez votre ordinateur ou exécutiez la commande /opt/lampp/lampp stop
      
 Installation, démarrage et test sous Windows (Vista, XP, 7, 8)
 
        L'installation se déroule en plusieurs étapes, décrites sur la page de XAMPP dédiée à Windows: https://www.apachefriends.org/faq_windows.html
        - Téléchargez le kit de base de XAMPP pour Windows en cliquant sur ce lien: https://www.apachefriends.org/xampp-files/5.6.24/xampp-win32-5.6.24-1-VC11-installer.exe
        - Une fois le fichier téléchargé, exécutez-le (il s'agit d'un .exe) pour lancer le programme d'installation. Celui-ci vous demande de choisir une destination ; puis l'installation se poursuit sans nécessiter d'intervention de votre part.
        Surtout, n'installez pas dans le répertoire Programmes qui se traduit en anglais en Program Files ou tout autre répertoire contenant un espace ; un bogue dans XAMPP vous empêchera de démarrer le serveur web proprement.
        - Lancez le panneau de contrôle de XAMPP qui se trouve dans le menu Démarrer -> Programmes -> XAMPP. Ensuite, il suffit de cliquer sur Start dans la ligne All components.
        - Une fois XAMPP démarré, ouvrez un navigateur web et saisissez l'adresse suivante : http://localhost. Si tout se passe bien, la page d'accueil s'affiche. Si le serveur Apache n'est pas lancé, il se peut que son port soit bloqué par une autre application, telle que Skype. 
        Cliquez sur le bouton Port check pour le vérifier, et arrêtez le cas échéant le programme concurrent.

 Installation, démarrage et test sous MacOS X

        L'installation se déroule en plusieurs étapes, décrites sur la page de XAMPP dédiée à MacOs X: https://www.apachefriends.org/faq_osx.html
        - Téléchargez le kit d'installation de XAMPP pour MacOs X en cliquant sur ce lien: https://www.apachefriends.org/xampp-files/5.6.24/xampp-osx-5.6.24-1-installer.dmg
        - Une fois le fichier téléchargé, votre navigateur vous informe que le fichier contient une image disque (ce que vous acceptez) et lance ensuite le programme d'installation.
        Celui-ci vous demande de choisir une destination (par exemple votre disque dur principal). Ensuite votre mot de passe administrateur vous est demandé, puis l'installation se poursuit sans nécessiter d'intervention de votre part.
        - Pour lancer XAMPP, on peut soit suivre la procédure de la page officielle, soit, plus simplement, lancer directement l'application XAMPP Control Panel depuis le Finder (dossier Applications, sous-dossier XAMPP) en cliquant sur Start dans la ligne All components. A noter que votre mot de passe d'administrateur vous sera demandé à chaque démarrage de XAMPP.
        - Une fois XAMPP démarré, ouvrez un navigateur web et saisissez l'adresse suivante : http://localhost. Si tout se passe bien, la page d'accueil s'affiche.

Installer un IDE

        Un IDE, Integrated Development Environment (EDI, environnement de développement intégré en français), est un logiciel qui simplifie la programmation. Il intègre un éditeur texte pour écrire votre code et propose un certain nombre de raccourcis et d'aides adaptées au langage utilisé.
        Pour le modal, le logiciel NetBeans est recommandé ; une alternative est Eclipse, utilisé dans d'autres cours du département d'informatique. Les deux sont libres. Mais il est parfaitement possible de créer son site web simplement avec n'importe quel éditeur de texte ; choisissez l'approche qui vous convient le mieux.

        L'installation de Netbeans est simple.
        Sous Linux, utilisez de préférence les paquetages de votre distribution. Téléchargez une version de Netbeans pour PHP (soit la version PHP soit la version complète si vous désirez par exemple vous en servir pour Java) sur la page de téléchargement officielle, et exécutez le fichier téléchargé (ex. : netbeans-8.2-php-windows-x64.exe).

Navigateur web

        Pensez à bien mettre à jour votre navigateur web préféré! Prévoyez d'avoir au moins Chrome ou Firefox d'installé.