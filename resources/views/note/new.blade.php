@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-9">
      <!--CUSTOM CHART START -->
      <div class="border-head"><br><br>
        <h3>Notes</h3>
        
        <form method="POST" action="{{ route('store_note') }}">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-3 col-form-label text-md-end">{{ __('Etudiant') }}</label>

                <div class="col-md-6">
                    <input id="etudiant" type="text" class="form-control @error('name') is-invalid @enderror" name="etudiant" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br>
            <table class="table">
              <tr>
                <th>Matiere</th>
                <th>Note</th>
              </tr>
              @foreach ($matieres as $item)
                  
                <tr>
                  <td>
                    <input type="checkbox" checked name="matiere{{$item->id}}" value="{{$item->id}}">
                    {{$item->name}}
                  </td>
                  <td>
                    <input id="moyenne" type="text" class="form-control @error('moyenne') is-invalid @enderror" name="moyenne{{$item->id}}" required autofocus>
                  </td>
                </tr>
              @endforeach
              
            </table>
            
            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Enregistrer') }}
                    </button>
                </div>
            </div>
        </form>
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
