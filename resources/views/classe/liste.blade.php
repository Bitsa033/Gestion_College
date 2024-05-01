@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="col-md-8 offset-1 ">
			<div class="card card-blue">
				<div class="card-header ">
					<a href="">Imprimer</a>
				</div>

				<div class="card-body table-warning table-responsive p-0" style="height: 390px;">
					<table class="table table-head-fixed table-bordered">

						<tbody>
							<tr>
								<th style="width:3%;">ID</th>
								<th>Classe</th>

							</tr>

							@foreach ($classes as $item)
								
								<tr>
									<td>
										{{$item->id}}
									</td>
									<td>
										{{$item->name}}
									</td>

								</tr>
							@endforeach


						</tbody>
					</table>

				</div>
				<!-- /.card-body -->
				<div class="card-footer">@Developpé par: BITSA NDZIE PASCAL</div>
			</div>
		</div>
	@endsection
