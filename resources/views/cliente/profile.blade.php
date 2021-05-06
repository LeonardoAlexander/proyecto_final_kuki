	@extends('cliente/inicio')
	@section('contenido')

	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>profile</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<div class="wrap-login-item ">						
							<div class="login-form form-item form-stl">
								<form name="frm-login">
									<fieldset class="wrap-input">
										<label for="frm-login-uname">Nombre :</label>
										<input type="text" id="frm-login-uname" name="email" readonly="readonly">
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-pass">Tipo de Documento:</label>
										<input type="text" id="frm-login-pass" name="pass" readonly="readonly">
									</fieldset>
                                    <fieldset class="wrap-input">
										<label for="frm-login-pass">Número de Documento:</label>
										<input type="text" id="frm-login-pass" name="pass" readonly="readonly">
									</fieldset>
                                    <fieldset class="wrap-input">
										<label for="frm-login-pass">Email:</label>
										<input type="text" id="frm-login-pass" name="pass" readonly="readonly">
									</fieldset>
                                    <fieldset class="wrap-input">
										<label for="frm-login-pass">Sexo:</label>
										<input type="text" id="frm-login-pass" name="pass" readonly="readonly">
									</fieldset>
                                    <fieldset class="wrap-input">
										<label for="frm-login-pass">Fecha de Nacimiento:</label>
										<input type="text" id="frm-login-pass" name="pass" readonly="readonly"> 
									</fieldset>
                                    <fieldset class="wrap-input">
										<label for="frm-login-pass">Celular:</label>
										<input type="text" id="frm-login-pass" name="pass" readonly="readonly">
									</fieldset>
                                    <fieldset class="wrap-input">
										<label for="frm-login-pass">Pregunta Secreta:</label>
										<input type="text" id="frm-login-pass" name="pass" readonly="readonly">
									</fieldset>
                                    <fieldset class="wrap-input">
										<label for="frm-login-pass">Respuesta:</label>
										<input type="text" id="frm-login-pass" name="pass" readonly="readonly">
									</fieldset>
                                    <fieldset class="wrap-input">
										<label for="frm-login-pass">Password:</label>
										<input type="password" id="frm-login-pass" name="pass" readonly="readonly">
									</fieldset>
									
									<input type="submit" class="btn btn-submit" value="Actualizar" name="Actualizar">
								</form>
							</div>												
						</div>
					</div><!--end main products area-->		
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

	@endsection