@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="8" class="text-center"><h1 style="color: indigo;">Liste des notes</h1></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th>Elève</th>
                    <th>Matiere</th>
                    <th>Note</th>
                    <th>Credit</th>
                    <th>Total</th>
                    <th>Enseignant</th>
                    <th>Apprec</th>
                </tr>
                @foreach ($notes as $item)
                    <tr>
                        <td>{{$item->etudiants->name}}</td>
                        <td>{{$item->matieres->name}}</td>
                        <td>{{$item->moyenne}}</td>
                        <td>3</td>
                        <td>36/60</td>
                        <td>Ms TALLA FOTSO</td>
                        <td>{{$item->appreciations->name}}</td>
                    </tr>
                
                @endforeach
                
            </tbody>
        </table>
    </div>
    {{-- col --}}
</div>
{{-- row --}}
@endsection