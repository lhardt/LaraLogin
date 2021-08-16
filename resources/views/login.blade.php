@extends('layouts.site')

@section('content')
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card " style="">
					<div class="card-header">Login</div>
					<div class="card-body">
						<p class="card-text">
							Bem-vindo ao sistema Sistemius!
						</p>
						<form>
							<div class="form-group">
								<label class="form-label" for="email-input">E-mail:</label>
								<input class="form-control" name="email-input" type="email" placeholder="Seu e-mail aqui" />
							</div>
							<div class="form-group">
								<label class="form-label" for="password-input">Senha:</label>
								<input class="form-control" name="password-input" type="email" placeholder="Sua senha aqui" />
							</div>
							<div class="row">
								<div class="col-12 col-md-5">
									<a href="#" class="btn btn-primary btn-block">Logar!</a>
								</div>
								<div class="col-12 col-md-2 text-center">
									ou
								</div>
								<div class="col-12 col-md-5">
									<a href="#" class="btn btn-outline-primary btn-block">Crie uma Conta</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection
