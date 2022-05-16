<?php
include 'header.php';
include 'fonctions.php';

if (isset($_POST) && !empty($_POST)) {
    $email = htmlspecialchars($_POST['email']);
    $entering_password = $_POST['password'];
    var_dump($entering_password);
    //etape 1 : récupérer les données de l'utilisateur
    $userInfos = getUserInfosByMail($email);

    //etape 2 : comparer le mot de pass saisie avec celui de la base, problème celui ci est chiffré => password_verify
    $hashed_password = $userInfos['mdp'];
    $isConfirmed = password_verify($entering_password, $hashed_password);
    if ($isConfirmed) {
        $_SESSION['user'] = $userInfos;
        header('location:accueil.php?status=success&message=Vous êtes désormais connecté(e) !');
    }
}
?>

<div class="container">
    <form action="" method="post">
        <div>
            <label for="email">Email</label>
            <input id="email" class="form-control" name="email" type="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" class="form-control" name="password" type="password">
        </div>
        <input type="submit" value="Sign In">
    </form>
</div>
<?php include 'footer.php'; ?>