  <?php

  if(isset($_POST['acao']))
  {
    $login = strip_tags($_POST['login']);
    $senha = strip_tags($_POST['senha']);
    $nome = $_POST['nome'];

    $sql = Mysql::getConn()->prepare("SELECT * FROM usuario WHERE login = ?");
    $sql->execute(array($login));

    if ($sql->rowCount() == 1)
    {
      // Login...
      echo '<script>alert("já existe este login....."</script>';
      echo '<script>location.href="/Marketplace_php"</script>';
      die("já existe este login.....");
    }
    else
    {
      $sql = Mysql::getConn()->prepare("SELECT * FROM usuario VALUES (NULL,?,?,?");
      $sql->execute(array($login,$senha,""));
      echo '<script>alert("Cadastro feito"</script>';
    }
    
  }

  if (isset($_SESSION['login']))
  {
    echo '<script>location.href="/Marketplace_php"</script>';
  }

  ?>
<div >
  <form method="post">
    
    <h1 class="h3 mb-3 fw-normal">Cadastro</h1>

    <div class="form-floating">
      <input name="login" type="test" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Nome</label>
    </div>
    <br/>
    <div class="form-floating">
      <input name="login" type="test" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Login</label>
    </div>
    <br/>
    <div class="form-floating">
      <input name="senha" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <br/>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    
    <button name="acao" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</div>