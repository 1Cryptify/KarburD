<!DOCTYPE html>
<html>
<head>
  <title>KarBurD</title>
  <link rel="stylesheet" type="text/css" href="../static/css/styles.css">
</head>
<body>
  <div class="login-container">
    <h1>CONNEXION</h1>
    <form action="../index.php">
      <div class="form-group">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
      </div>
      <p>vous n'avez pas encore de compte ? <a href="./inscription.php">INSCRIPTION</a></p>
      <div class="form-group">
        <input type="submit" value="Se connecter">
      </div>
    </form>
  </div>
</body>
</html> 