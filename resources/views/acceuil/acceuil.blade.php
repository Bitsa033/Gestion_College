@extends('layouts.navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Acceuil') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="my-3 p-3 bg-white rounded box-shadow">
                        <h6 class="border-bottom border-gray pb-2 mb-0 text-center">Informations générales</h6>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Classe</th>
                                    <th>Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr *ngFor="let item of classes">
                                    <td>{{'tem.name'}}</td>
                                    <td>{{'item.code'}}</td>
                                    <td class="option"><a (click)="removeData()" class="btn btn-info" >Supprimer</a></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
