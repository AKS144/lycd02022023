@extends('layout.mainlayout')
@section('content')

<div class="container">   
        <h1>Dropzone</h1>
        <form method="post" action="{{ url('/picstore') }}" enctype="multipart/form-data" class="dropzone" id="dropzone">
            @csrf
            <input type="hidden" name="album_id" value="{{ $album->id }}">
        </form>    
</div>    

@endsection