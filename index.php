<?php 

	include('mysql.php');
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Marketplace_php | Home</title>
</head>
<body>
	    <div class="container">

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">

        <h3>OSIEL</h3>

      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

        <li><a href="#" class="nav-link px-2 link-secondary">Produtos</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Contato</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Sobre</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">FAQ</a></li>      

      </ul>
      <!---
      <div class="col-md-3 text-end">
        <button id="login" type="button" class="btn btn-outline-primary me-2">Login</button>
        <button id="cadastro" type="button" class="btn btn-primary">Sing-up</button>    
      	</div>-->

    
      <div class="col-md-3 text-end">
        <button id="login" type="button" class="btn btn-outline-primary me-2">Login</button>
        <button id="cadastro" type="button" class="btn btn-primary">Sing-up</button>    
      	</div>
  <?php 
      if (isset($_SESSION["login"])){ 	
      ?>
      <?php}else{ ?>
      	<button type="button" class="btn btn-primary">Cadastrar Produto</button>
      	<button id="logout" type="button" class="btn btn-primary">Logout</button>
				<?php	} ?>
    </header>

  </div>		

	<?php 
/*
	$sql = Mysql::getConn()->prepare("SELECT * FROM usuario");
	$sql->execute();

	$usuario = $sql->fetchAll();

	foreach ($usuario as $key => $value) 
	{

		echo $value['login'];

		echo '<br/>';

		}
*/
	if(isset($_SESSION['login'])) 
	{
		echo '<h3>Bem vindo</h3>'.$_SESSION['login'];
	}

	if(isset($_GET['url']))
	{
			$url = $_GET['url'];
			IF(file_exists('pages/'.$url.'.php'))
			include('pages/'.$url.'.php');
			else
				die('não existe');
	}

?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">		
	</script>

	<script>

		document.getElementById('login')?.addEventListener('click',()=>
		{
			window.location.href="?url=login";
		});


		document.getElementById('cadastro')?.addEventListener('click',()=>
		{
			window.location.href="?url=cadastro";
		});

		document.getElementById('logout')?.addEventListener('click',()=>
		{
			window.location.href="?url=login&acao=deslogar";
		});

	</script>

</body>
</html>