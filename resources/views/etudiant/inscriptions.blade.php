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
    <!-- /col-lg-9 END SECTION MIDDLE -->
    <!-- **********************************************************************************************************************************************************
        RIGHT SIDEBAR CONTENT
        *********************************************************************************************************************************************************** -->
    <div class="col-lg-3 ds">
      
      <!-- CALENDAR-->
      <div id="calendar" class="mb">
        <div class="panel green-panel no-margin">
          <div class="panel-body">
            <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
              <div class="arrow"></div>
              <h3 class="popover-title" style="disadding: none;"></h3>
              <div id="date-popover-content" class="popover-content"></div>
            </div>
            <div id="my-calendar"></div>
          </div>
        </div>
      </div>
      <!-- / calendar -->
    </div>
    <!-- /col-lg-3 -->
  </div>
  <!-- /row -->
@endsection
@include('layouts.footer')
