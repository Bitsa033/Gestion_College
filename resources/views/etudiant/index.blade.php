@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-9">
      <!--CUSTOM CHART START -->
      <div class="border-head"><br><br>
        <h3>Etudiants</h3>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Adresse</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etudiants as $item)
                    @if (!$item)
                        <tr>
                            <td class="text-center"> Liste vide...</td>
                        </tr>
                    @else
                        <tr>
                            <td>{{$item->name}} {{$item->surname}}</td>
                            <td>{{$item->adress}}</td>
                        </tr>
                    @endif
                    
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
