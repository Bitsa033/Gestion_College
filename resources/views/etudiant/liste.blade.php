@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-10">

        <div class="card ">
            <div class="card-header">
                <a href="" class="btn btn-primary">Inscrire <i class="fa fa-pen"></i></a>
                <a href="" class="btn btn-primary">Telecharger <i class="fa fa-upload"></i></a>

            </div>
            <div class="card-body table-responsive p-0" style="height: 400px;">
                <table class="table table-bordered table-head-fixed text-nowrap">
                    <tr>
                        <td>Code</td>
                        <td>Nom</td>
                        <td>Prénom</td>
                        <td>Adresse</td>
                        <td>Contact</td>
                        <td>Inscrit</td>
                    </tr>
                    @foreach ($etudiants as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->surname}}</td>
                            <td>{{$item->adress}}</td>
                            <td>{{$item->phone}}</td>
                            <td><i class="btn btn-danger">Non</i></td>
                            
                        </tr>
                        
                    @endforeach

                    <tr>

                    </tr>


                </table>

            </div>
            <!--/card-body-->
            <div class="card-footer">@Developpé par: BITSA NDZIE PASCAL</div>

        </div>
    </div>
    <!-- col -->
</div>
<!-- row -->
@endsection