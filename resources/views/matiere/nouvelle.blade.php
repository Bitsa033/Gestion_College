@extends('layouts.admin')
@section('content')
	<div class="row">

		<div class="col-8 offset-1">

			<div class="card card-blue">
				<div class="card-header">
					<form action="" method="post">
						<div class="form-inline">
							<input type="number" name="nb_row" class="form-control" value="2" min='1'>
							<button type="submit" class="form-control">Ok</button>
						</div>
					</form>

				</div>
				<!-- /.card-header -->
				<div class="card-header">
					<a href="{{route('liste_matieres')}}">Consulter la liste des matieres</a>
				</div>
				<!-- /.card-header -->
				<div class="card-body table-warning table-responsive p-0" style="height: 350px;">
					<form action="{{route('store_matiere')}}" method="post">
						@csrf
						<table class="table table-head-fixed text-nowrap">

							<tbody>
								<tr class='row'>
									<th class='col'>
										Filiere
										<select type="text" name="filiere" class="form-control" id="">

										</select>
									</th>
									<th class='col'>
										Niveau
										<select type="text" name="niveau" class="form-control" id="">

										</select>
									</th>
									<th class='col'>
										Semestre
										<select type="text" name="semestre" class="form-control" id="">

										</select>
									</th>
								</tr>
								<tr>
									<th>Matiere</th>
								</tr>
								<tr class='row'>
									<th class='col'>
										<input type="text" name="name" class="form-control" placeholder="matiere" id="">
									</th>
									<th class='col'>
										<input type="text" name="note" class="form-control" placeholder="note Ex: 20" id="">
									</th>
								</tr>




							</tbody>
							<!-- /.tbody -->
						</table>

				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" name="enregistrer" class="btn btn-success form-control offset-1 col-10">Enregistrer</button>
					<br>
					<br></form>
					<!-- /.form -->

				</div>
			</div>

		</div>

	</div>
	<!-- /.card -->

	</div>
	<!-- /.col -->


	</div>

	<!-- /.row -->

	</div>

	</div>
@endsection
