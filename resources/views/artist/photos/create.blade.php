<?php $page = "upload"; ?>
@extends('layout.mainlayout')
@section('content')
<!-- <link href="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<style>
       .thumb{
           margin: 10px 5px 0 0;
           width: 300px;
       }
</style>

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <!-- sidebar -->
            @include('artist.sidebar')

            <!-- /sidebar -->

            <div class="col-xl-9 col-md-8">
       
				<form id="file-upload-form" class="uploader" action="{{ route('photos.store') }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                       @csrf
                       <input type="file" id="file-input" onchange="loadPreview(this)" name="photo[]" multiple/>
					   <input type="hidden" name="album_id" value="{{ $album_id }}">
					   <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                       <span class="text-danger">{{ $errors->first('photo') }}</span>
                       <div id="thumb-output"></div>
                       <br>
                       <button type="submit" class="btn btn-success">Submit</button>
                   </form>

                <!-- <script src="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.js"></script> -->
                <script>
                    // var uppy = Uppy.Core()
                    //     .use(Uppy.Dashboard, {
                    //         inline: true,
                    //         target: '#drag-drop-area'
                    //     })
                    //     .use(Uppy.Tus, {
                    //         endpoint: 'https://master.tus.io/files/'
                    //     }) //you can put upload URL here, where you want to upload images

                    // uppy.on('complete', (result) => {
                    //     console.log('Upload complete! We�ve uploaded these files:', result.successful)
                    // })
					function loadPreview(input){
						var data = $(input)[0].files; //this file data
						$.each(data, function(index, file){
							if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
								var fRead = new FileReader();
								fRead.onload = (function(file){
									return function(e) {
										var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image thumb element
										$('#thumb-output').append(img);
									};
								})(file);
								fRead.readAsDataURL(file);
           }
       });
   }
                </script>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- /Page Content -->


</div>

<!-- /Main Wrapper -->

@endsection