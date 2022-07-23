  <?php

  
  if(isset($_POST['acao']))
  {
  	$login = strip_tags($_POST['login']);
  	$senha = strip_tags($_POST['senha']);
  	$sql = Mysql::getConn()->prepare("SELECT * FROM usuario WHERE login = ? AND senha = ?");
  	$sql->execute(array($login,$senha));

  	if ($sql->rowCount() == 1)
  	{
  		// Login...
  		$_SESSION['login'] = $login;
  	}
  	else
  	{
  		//Falha....
  		die('falhou tente novamente mais tarde');
  	}
  }
  else if (isset($_GET['acao']) && $_GET['acao'] == 'deslogar')
  {
    $_SESSION['login'] = "";
    unset($_SESSION['login']);
    echo '<script>location.href="/Marketplace_php"</script>';
  }

  if (isset($_SESSION['login']))
  {
  	echo '<script>location.href="/Marketplace_php"</script>';
  }

  ?>


<div class="container" style="width: 800px;background-color: #63bbf2;border-radius: 20px;">
  <form method="post">
    
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

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
