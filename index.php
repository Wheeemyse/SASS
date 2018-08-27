<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
		<link rel="stylesheet" href="simplon/css/index.css">

		<title>Accueil</title>
	</head>
	<body>

		<header>
			<?php include('simplon/include/header.html'); ?>
		</header>
		<main>
			<div class="containerindex">
				<div class="containerindexpart1">
					<div class="boxindex">
						<i class="fa fa-user icone" aria-hidden="true"></i><br>
						<p class="souhait">Vous souhaitez</p>
						<p class="typesouhait">Apprendre&nbsp;?</p><br>
						<a class="waves-effect waves-light btn-large btn-souhait">Cliquez-ici</a>
					</div>

					<div class="boxindex">
						<i class="fa fa-comment icone" aria-hidden="true"></i><br>
						<p class="souhait">Vous souhaitez</p>
						<p class="typesouhait">Proposer un Projet&nbsp;?</p><br>
						<a class="waves-effect waves-light btn-large btn-souhait">Cliquez-ici</a>
					</div>
				</div>

				<div class="containerindexpart2">
					<div class="boxindex">
						<i class="fas fa-child icone"></i><br>
						<p class="souhait">Vous souhaitez</p>
						<p class="typesouhait">Engager un Stagiaire&nbsp;?</p><br>
						<a class="waves-effect waves-light btn-large btn-souhait">Cliquez-ici</a>
					</div>

					<div class="boxindex">
						<i class="fa fa-cloud icone" aria-hidden="true"></i><br>
						<p class="souhait">Vous souhaitez</p>
						<p class="typesouhait">Nous aider&nbsp;?</p><br>
						<a class="waves-effect waves-light btn-large btn-souhait">Cliquez-ici</a>
					</div>
				</div>
			</div>
		</main>

		<footer>
			<?php include('simplon/include/footer.php'); ?>
		</footer>
	</body>
</html>
