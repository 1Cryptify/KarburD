<!DOCTYPE html>
<html>
<head>
  <title>KarBurD</title>
  <link rel="stylesheet" type="text/css" href="../static/css/styles.css">
</head>
<body>
  <div class="login-container">
    <h1>INSCRIPTION</h1>
    <form>
    <div class="form-group">
        <label for="name">Nom complet:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
      </div>
      <p>vous avez deja un compte ? <a href="./connexion.php">CONNEXION</a></p>
      <div class="form-group">
        <input type="submit" value="Se connecter">
      </div>
    </form>
  </div>
</body>
</html> 