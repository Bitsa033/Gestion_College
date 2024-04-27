@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-9">
      <!--CUSTOM CHART START --> <br><br>
      <div class="border-head">
        <h3>Matières</h3>
        <form method="POST" class="form-inline" action="{{ route('store_matiere') }}">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-3 col-form-label text-md-end">{{ __('Nom de la matiere') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Enregistrer') }}
                    </button>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
            </div>

        </form><br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Matiere</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matieres as $item)
                    @if (!$item)
                        <tr>
                            <td class="text-center"> Liste vide...</td>
                        </tr>
                    @else
                        <tr>
                            <td>{{$item->name}}</td>
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
