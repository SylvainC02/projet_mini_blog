<?php
include 'header.php';
include 'fonctions.php';
if (isset($_POST) && !empty($_POST)) {
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password_clean = $_POST['password'];
    $hashed_password = password_hash($password_clean, PASSWORD_BCRYPT);
    register($pseudo, $hashed_password, $email);
    header('location:accueil.php?status=success&message=Votre compte a bien était créer !');
}

?>
<div class=container>
    <form action="" method="post">
        <div>
            <label for="pseudo">Pseudo</label>
            <input id="pseudo" name="pseudo" type="text" class="form-control">
        </div>
        <div>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" class="form-control">
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" class="form-control">
        </div>
        <input type="submit" value="Sign Up">
    </form>
</div>

<?php include 'footer.php'; ?>