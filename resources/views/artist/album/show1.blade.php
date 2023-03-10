<?php $page = 'album_list'; ?>
@extends('layout.mainlayout')
@section('content')
    <style>
        .image-area {
            position: relative;
            width: 100%;
            background: transparent;
        }


        .remove-image {
            display: none;
            position: absolute;
            top: -10px;
            right: -10px;
            border-radius: 10em;
            padding: 2px 6px 3px;
            text-decoration: none;
            font: 700 21px/20px sans-serif;
            background: #555;
            border: 3px solid #fff;
            color: #FFF;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5), inset 0 2px 4px rgba(0, 0, 0, 0.3);
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
            -webkit-transition: background 0.5s;
            transition: background 0.5s;
        }

        .remove-image:hover {
            background: #E54E4E;
            padding: 3px 7px 5px;
            top: -11px;
            right: -11px;
        }

        .remove-image:active {
            background: #E54E4E;
            top: -10px;
            right: -11px;
        }

        .delete-tash-btn {
            position: absolute;
            margin-top: -38px;
        }

        .card-header {
            border-bottom: 1px solid #f0f0f0;
            padding: 1rem 0.1rem;
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
                    {{-- {{$error ?? ''}} --}}

                    <div class="pro-head p-0 pb-4">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Album</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $album->name }}</li> 
                            </ol>                     
                        </nav>                        
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    @if($album->photos->count() > 0)
                                        <input type="checkbox" class="sub_chk" id="flexCheckIndeterminate">
                                        <label class="btn btn-link" for="flexCheckIndeterminate">Select All</label>
                                        <a style="border-radius: 5px !important;" class="btn btn-outline-danger delete_all" data-url="{{ url('deleteAll') }}">Delete</a>  
                                    @endif   
                                    <a class="btn btn-outline-warning" href="{{ route('albums.index') }}" style="border-radius: 5px !important; line-height: 1.2;">Back</a>
                                    <a type="" style="border-radius: 5px !important; line-height: 1.2;" class="btn btn-outline-success" data-bs-toggle="modal" href="#uploadphotos">Add Pics</a>                                                                    
                                </div>
                            </div>                        
                    </div>

                    <div class="row">
                        {{-- code Working hided --}}
                        @foreach ($album->photos as $photo)
                            <div class="col-md-4">
                                <div class="project-widget">                                  
                                    <img class="lightboxed" rel="group1" src="{{ asset('photo/'. $photo->photo) }}"
                                        data-link="{{ asset('photo/' . $photo->photo) }}" alt="Image Alt 1"
                                        data-caption="Caption 1" width="250" height="350" style="width: 100%; height:260px;" />
                                    <a class="remove-image" href="{{ route('photos.destroy',$photo->id) }}" style="display: inline;">&#215;</a>                                  
                                    <form method="POST" action="/photos/{{ $photo->id }}">
                                        @method('DELETE')
                                        @csrf                                       
                                        <a class="btn  delete-tash-btn" href="{{ route('photos.destroy', $photo->id) }}"><i class="fa fa-trash"
                                                aria-hidden="true" style="color:red;"></i>
                                        </a>
                                    </form>
                                    <a><input type="checkbox" class="sub_chk" data-id="{{$photo->id}}"></a>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </div>



    <!--Upload Photo modal-->
    <div class="modal fade" id="uploadphotos">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Upload Photos to Genre</h4>
                    <span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa fa-times"></i></a></span>
                </div>
                <div class="modal-body">                   
					@if($error == '' )	
                    <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data" id="form-upload">
                            @csrf
                        <div class="form-group mt-5">
                            <!-- <label for="">Upload Images</label> -->
                            <input type="file" id="upload-img" class="form-control" name="photo[]" multiple required/>
                            <input type="hidden" name="album_id" value="{{ $album->id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        </div>
                        <div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>
                        <button type="submit" class="btn btn-outline-dark from-prevent-multiple-submits">Upload</button>
                    </form>                                       
                    @else
						<p style="color:red;" class="text-center">{{ $error ?? '' }}</p>
					@endif
                </div>
            </div>
        </div>
    </div>



<script>
  
    
    function loadPreview(input) {
        var data = $(input)[0].files; //this file data
        $.each(data, function (index, file) {
            if (/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)) {
                var fRead = new FileReader();
                fRead.onload = (function (file) {
                    return function (e) {
                        var img = $('<img style="height:250px; width:300px;"/>').addClass('thumb').attr('src', e.target
                        .result); //create image thumb element
                        $('#thumb-output').append(img);
                    };
                })(file);
                fRead.readAsDataURL(file);
            }
        });
    }
    
</script>




<!-- /Main Wrapper -->
@endsection