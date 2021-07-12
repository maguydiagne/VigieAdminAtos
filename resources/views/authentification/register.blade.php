<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
        <link href="{{asset("assets/css/bootstrap.min.css")}}">

        <!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset("assets/css_register.css")}}">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Veuillez renseigner les informations suivantes </h5>
					<form class="" method="post" action="#">

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Prénom</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="prenom" id="prenom"  placeholder="Entrer le prénom"/>
								</div>
							</div>
						</div>

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Nom</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="nom" id="nom"  placeholder="Entrer le nom"/>
                                </div>
                            </div>
                        </div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Das</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-credit-card-alt"" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="das" id="das"  placeholder="Entrer le das"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Pôle</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-home fa-fw" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="pole" id="pole"  placeholder="Donner le pôle"/>
								</div>
							</div>
						</div>


                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Projet</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-book fa-fw" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="projet" id="projet"  placeholder="Donner le nom du projet"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Nombre de jour sur site</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
                                    <input type="int" class="form-control" name="nombrJour" id="nombreJour"  placeholder="Nombre de jour sur site"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Mot de passe</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="motDePasse" id="motDePasse"  placeholder="Donner le mot de passe"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirmation du Mot de passe</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirmer le mot de passe"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<a href="https://deepak646.blogspot.com/" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Soumettre</a>
						</div>

					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
	</body>
</html>
