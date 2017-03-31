<!DOCTYPE html>
<html lang="es">
<head>
<title>Validar Rut</title>
<meta charset="utf-8" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<style type="text/css">
.text-center{
	text-align: center;
}
</style>
 
<body>
    <header>
       <h1 class="text-center">Validación rut</h1>
    </header>
    <section>
       <article>
           <div class="container">
           		<form class="form-horizontal" action="post.php" method="POST">
					<fieldset>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="textinput">Rut</label>  
						  <div class="col-md-4">
						  <input id="rut" name="rut" type="text" placeholder="placeholder" class="form-control input-md" pattern="\d{1,2}.\d{3}.\d{3}-[\d|kK]{1}" title="Ingresar rut en este formato 11.111.111-1" required>
						  </div>
						</div>

						<!-- Button -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="singlebutton"></label>
						  <div class="col-md-4">
						    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
						  </div>
						</div>

					</fieldset>
				</form>

           </div>
       </article>
    </section>
</body>
</html>