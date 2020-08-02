<!DOCTYPE html>
<html lang="es">

@include("layouts.head")

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
			<div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-color:white">
					<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
						<!--begin::Login Header-->
							<div class="d-flex flex-center ">
								<a href="#">
									<img src="logo.jpg" width="200px" alt="" class="img-fluid"/>
								</a>
							</div>		
							<div class="mb-20">
								<h3 style="color:black">Inicia Sesion</h3>
								<p style="color:black">Ingresa tu usuario y contraseña</p>
							</div>
							<form method="POST" action="{{ route('login') }}" class="form" >
							@csrf
									<div class="form-group row">
                            			<input id="email" type="email" class="form-control text-center @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Usuario">
                                			@error('email')
                                    			<span class="invalid-feedback" role="alert">
                                        			<strong>{{ $message }}</strong>
                                    			</span>
                                			@enderror
									</div>
									<div class="form-group row">   
                                		<input id="password" type="password" class="form-control text-center  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="contraseña">
									 		@error('password')
                                    			<span class="invalid-feedback" role="alert">
                                        			<strong>{{ $message }}</strong>
                                    			</span>
                                			@enderror
									</div>
									<div class="form-group text-center mt-20">
										<button type="submit" class="btn btn-outline-primary  px-15 py-3">
                                    		Ingresar
										</button>
									</div>
							</form>
						</div>
					</div>
				</div>
				<!--end::Login-->
			</div>
		@include("layouts.scripts")
		<!--end::Page Scripts-->
	</body>
</html>