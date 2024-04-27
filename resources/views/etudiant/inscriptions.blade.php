@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-9">
      <!--CUSTOM CHART START -->
      <div class="border-head"><br><br>
        <h3>Etudiants par classe</h3>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Etudiant</th>
                    <th>Classe</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etudiants as $item)
                <tr>
                  <td>{{$item->etudiant['name']}} {{$item->surname}}</td>
                  <td>{{$item->classe['name']}}</td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
      </div>
    
      <!--custom chart end-->
      <div class="row mt">
        <!-- SERVER STATUS PANELS -->
        
        <!-- /col-md-4-->
        
        <!-- /col-md-4 -->
        
        <!-- /col-md-4 -->
      </div>
      <!-- /row -->
    
    </div>
    
  </div>
  <!-- /row -->
@endsection
@include('layouts.footer')
