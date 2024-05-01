@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="col-md-5 offset-2">

			<div class="card insert-filiere">
				<div class="card-header"><a href="{{ route('liste_etudiants') }}">Consulter la liste des élèves</a></div>
				<div class="card-body">
					<form action="{{route('store_etudiant')}}" method="post">
                        @csrf
						Nom
						<div class="form-group">
							<input type="text" name="name" class="form-control" id="" required>
						</div>
						Prenom
						<div class="form-group">
							<input type="text" name="surname" class="form-control" id="" required>
						</div>
                        Téléphone
						<div class="form-group">
							<input type="text" name="phone" class="form-control" id="" required>
						</div>
                        Adresse
                        <div class="form-group">
                            <input type="text" name="adress" class="form-control" id="" required>
                        </div>

						Classe
						<div class="form-group">
							<select type="text" name="classe" class="form-control" style="width:100%;" required>
                                @foreach ($classes as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
							</select>
						</div>
						<br>
						<div class="form-group">
							<button type="submit" style="width:100%;" class="btn btn-success">Valider</button>

						</div>
					</form>
				</div>

			</div>

		</div>

	</div>
	<!-- /row-->
@endsection
