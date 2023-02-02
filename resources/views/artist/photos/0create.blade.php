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
						<a href="./index.html"><i class="fa fa-home"></i> Add Album             </a>
						<span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="container" style="padding:70px ;" >
	<div class="row" >
	<form method="POST" action="{{ route('photos.store')}}" enctype="multipart/form-data" class="mx-auto">
		@csrf
		<input type="hidden" name="album_id" value="{{ $album_id }}">
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" placeholder="Photo Title" class="form-control">

		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" placeholder="Photo Description" class="form-control"></textarea>
		</div>
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <span class="input-group-text">Upload Image</span>
		  </div>
		  <div class="custom-file">
		    <input type="file" class="custom-file-input" id="photo" name="photo">
		    <label class="custom-file-label" for="photo">Choose file</label>
		  </div>
		</div>
		<input class="btn btn-primary" type="submit" value="Add">
	</form>
</div>
</div>

@include('layouts.footer')