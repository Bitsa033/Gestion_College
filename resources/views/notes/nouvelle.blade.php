@extends('layouts.admin')
@section('content')
	<div class="row">

		<div class="col-9 offset-1">
			<div class="card card-blue">
				<div class="card-header">
					<div class="row">
						{{-- classe --}}
						<div class="col">
							<form action="{{url('note_session')}}" method="post">
								@csrf
								<div class="form-inline">
									<select type="number" style="width: 55%" name="classe" class="form-control">
										<option value="">Classe</option>
										@foreach ($classes as $item)
											<option value="{{$item->id}}">{{$item->name}}</option>
										@endforeach
									</select>
									<button type="submit" class="form-control">Ok</button>
								</div>
							</form>
						</div>
						{{-- sequence --}}
						<div class="col">
							<form action="{{url('note_session')}}" method="post">
								@csrf
								<div class="form-inline">
									<select type="text" style="width: 55%" name="sequence" class="form-control">
										<option value="">Sequence</option>
										@foreach ($etudiants as $item)
											<option value="{{$item->id}}">{{$item->name}}</option>
										@endforeach
									</select>
									<button type="submit" class="form-control">Ok</button>
								</div>
							</form>
						</div>
						{{-- eleve --}}
						<div class="col">
							<form action="{{url('note_session')}}" method="post">
								@csrf
								<div class="form-inline">
									<select type="number" style="width: 55%" name="eleve" class="form-control">
										<option value="">Elève</option>
										@foreach ($etudiants as $item)
											<option value="{{$item->id}}">{{$item->name}}</option>
										@endforeach
									</select>
									<button type="submit" class="form-control">Ok</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<!-- /.card-header -->
				<div class="card-header">
					<a href="{{route('notes')}}">Consulter la liste des notes</a>
				</div>
				<!-- /.card-header -->
				<div class="card-body table-warning table-responsive p-0" style="height: 350px;">
					<form action="{{route('store_note')}}" method="post">
						@csrf
						<table class="table table-bordered">
							<tr>
								<td>T</td>
								<td>Matiere</td>
								<td>Note</td>

							</tr>

							<form method="post" action="">
								@foreach ($matieres as $item)
									
									<tr>
										<td>
											<input type="checkbox" name="cours[]" value="" required
												checked>
										</td>
										<td>
											{{$item->name}} <input type="hidden" name="matiere[]" value="{{$item->id}}">
										</td>
										
										<td>
											<input type="text" name="moyenne[]" id="" class='form-control'
												placeholder='Moyenne' required>
										</td>
									</tr>
								@endforeach
								
								<tr>
									<td colspan='5'>
										<div class="form-group">
											<button type="submit" name='enregistrer'
												class='btn btn-success col-4 offset-4'>Enregistrer</button>
										</div>
									</td>
								</tr>
							</form>

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
