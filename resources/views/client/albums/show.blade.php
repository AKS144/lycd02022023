@include('layout.mainlayout')
<style>
	.spad {
    padding-top: 36px;
    padding-bottom: 19px;
    padding-left: 0px; 
}
</style>

<section class="breadcrumb-section spad set-bg" data-setbg="http://127.0.0.1:8000/assets/img/bg.jpg">
	<div class="container" style="padding-top: 65px; padding-bottom: 93px;">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-text">
					<h4>Add Albums </h4>
					<div class="bt-option">
						<a href="./index.html"><i class="fa fa-home"></i> Albums</a>
						<span>{{ $album->name }}</span>
						{{-- <a class="btn btn-secondary" href="/">Go Back</a> --}}
	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	<h1></h1>
	{{-- <a class="btn btn-secondary" href="/">Go Back</a>
	<a class="btn btn-primary" href="/photos/create/{{ $album->id }}">Add Photo To Album</a>
	<hr> --}}
	<div class="container" style="padding:75px;">
		{{-- <a class="btn btn-primary" href="{{ route('photos.create',$album->id )}}">Add Photo To Album</a><br><br> --}}
		
		<div class="row">
			@foreach($album->photos as $photo)
			<div class="card mr-2" style="width: 18rem;">
			  {{-- <img class="card-img-top" src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" alt="{{ $photo->title }}"> --}}
			  <img src="{{ asset('storage/photos/'."$photo->album_id"."$photo->photo") }}">
			  <div class="card-body">
			    <p class="card-title text-center"><a href="#">{{ $photo->title }}</a></p>
			  </div>
			</div>
			@endforeach
		</div>
		
		
	</div>
	

