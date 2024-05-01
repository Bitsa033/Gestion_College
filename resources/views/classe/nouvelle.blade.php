@extends('layouts.admin')
@section('content')
	<div class="row">

		<div class="col-8 offset-1">

			<div class="card card-blue">
				<div class="card-header">
					<form action="" method="post">
						<div class="form-inline">
							<input type="number" name="nb_row_classe" class="form-control" placeholder="Nb classes ex: 2">
							<button type="submit" class="form-control">Générer</button>

						</div>
					</form>

				</div>
				<div class="card-header">
					<a href="{{route('liste_classes')}}">Consulter la liste des classes</a>
				</div>
				<!-- /.card-header -->
				<div class="card-body table-warning table-responsive p-0" style="height: 250px;">
					<form action="{{route('store_classe')}}" method="post">
						@csrf
						<table class="table table-head-fixed text-nowrap">

							<tbody>
								<tr>
									<th>Classe</th>
								</tr>

								<tr>
									<th>
										<input type="text" name="name" class="form-control" placeholder="Nom de la classe"
											id="" required>
									</th>
								</tr>

							</tbody>
							<!-- /.tbody -->
						</table>

						<!-- /.form -->

				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" name="enregistrer" class="btn btn-success form-control offset-1 col-10">Enregistrer</button>
					<br>
					<br></form>
				</div>
			</div>

		</div>


	</div>
	<!-- /.card -->

	</div>
	<!-- /.col -->


	</div>

	<!-- /.row -->
@endsection
