@include('layouts.header')
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
					<h4>Add Wallet </h4>
					<div class="bt-option">
						<a href="./index.html"><i class="fa fa-home"></i> Add Album   </a>
						<span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<h1>{{ $photo->title }}</h1>
	<p>{{ $photo->description }}</p>
	<a class="btn btn-primary" href="{{ route('albums.show',$photo->album_id) }}">Go Back To Gallery</a>
	<hr>
	<div class="row">
		<img src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" alt="{{ $photo->title }}" class="mx-auto">

	</div>
	<div class="row mt-3">
		<form method="POST" action="{{ route('photos.destroy',$photo->id )}}">
			@method('DELETE')
			@csrf
			<input type="submit" class="btn btn-danger" value="Delete Photo">
		</form>
	</div>
	<hr>
</div>
	@include('layouts.footer')