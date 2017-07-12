<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo ucfirst(Fuseaction);?></title>
	<link rel="stylesheet" href="src/template/Layouts/style.css" type="text/css" media="screen" />
	<script language="javascript" type="text/javascript" src="src/template/Layouts/functions.js" ></script>
	<link href="../src/template/Layouts/css/bootstrap.css" rel="stylesheet">
	<!--<link rel="stylesheet" href="src/template/Layouts/style.css" type="text/css" media="screen" />-->
	<script language="javascript" type="text/javascript" src="../src/template/Layouts/functions.js" ></script>
	<!--[if lt IE 9]>
	 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
</head>

<body>

<?php
	DefaultController::checkUser();
if(isset($_SESSION['id_usuario'])){ ?>

<a href="index.php?page=home">
<div class="header-logo">
	<p>Megatron</p><span>PAINEL</span>
</div>
</a>
<div class="header">
	<ul>
    	<li><a href="index.php?page=login&action=logout">Logout</a></li>
        <li>Ola, <?php echo $_SESSION['usuario']; ?></li>
    </ul>
</div>

<div class="sidebar">
	<ul>
    	<li><a href="index.php?page=usuarios">Usuarios</a></li>
        <li><a href="index.php?page=categorias">Categorias</a></li>
        <li><a href="index.php?page=produtos">Produtos</a></li>
    </ul>
</div>
<?php echo $this->render("src/template/Usuarios/cadastrado.php", array()); ?>
<?php


				if(MsgHandler::getError()){
					foreach(MsgHandler::getError() as $erro){
						echo '<p class="error" align="center">'.$erro.'</p>';
					}
				}elseif(MsgHandler::getSucess()){
					foreach(MsgHandler::getSucess() as $sucess){
						echo '<p class="sucess" align="center">'.$sucess.'</p>';
					}
				}

				echo $content;

    		?>
</div>
</div>
<?php }else{

	if(MsgHandler::getError()){
					foreach(MsgHandler::getError() as $erro){
						echo '<p class="error" align="center">'.$erro.'</p>';
					}
				}elseif(MsgHandler::getSucess()){
					foreach(MsgHandler::getSucess() as $sucess){
						echo '<p class="sucess" align="center">'.$sucess.'</p>';
					}
				}

	echo $content;

} ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../src/template/Layouts/js/bootstrap.js"></script>

</body>
</html>
