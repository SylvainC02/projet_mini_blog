<?php
session_start();
session_destroy();

header('location:accueil.php?status=success&message=Vous êtes bien déconnecté(e) !');