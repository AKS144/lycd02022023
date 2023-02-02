		<!-- jQuery -->
		<script src="{{asset('/assets_admin/js/jquery-3.6.0.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{asset('/assets_admin/js/bootstrap.bundle.min.js')}}"></script>
		
		<!-- Feather Icon JS -->
		<script src="{{asset('/assets_admin/js/feather.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
		<script src="{{asset('/assets_admin/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Select2 JS -->
		<script src="{{asset('/assets_admin/plugins/select2/js/select2.min.js')}}"></script>
		
		<!-- Datatables JS -->
		<script src="{{asset('/assets_admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('/assets_admin/plugins/datatables/datatables.min.js')}}"></script>

		<!-- Datepicker Core JS -->
		<script src="{{asset('/assets_admin/js/moment.min.js')}}"></script>
		<script src="{{asset('/assets_admin/js/bootstrap-datetimepicker.min.js')}}"></script>
		
		<!-- Mask JS -->
		<script src="{{asset('/assets_admin/js/jquery.maskedinput.min.js')}}"></script>
        <script src="{{asset('/assets_admin/js/mask.js')}}"></script>
		
		<!-- Form Validation JS -->
        {{-- <script src="{{asset('/assets_admin/js/form-validation.js')}}"></script> --}}
						
		<!-- Validation JS -->
        <script src="{{asset('/assets_admin/js/jquery.validate.min.js')}}"></script>


		<!-- Pooper JS -->
        <script src="{{asset('/assets_admin/js/popper.min.js')}}"></script>

		<script src="{{asset('/assets_admin/js/apexcharts1.js')}}"></script>
		
		<!-- Ck Editor JS -->
		<script src="{{asset('/assets_admin/js/ckeditor.js')}}"></script>

		
		<!-- Toastr alert JS -->      
		<script src="{{asset('/assets_admin/js/toastr.min.js')}}"></script>
		<!-- Fotorama from CDNJS, 19 KB -->
      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
		<!-- Custom JS -->
		<script src="{{asset('/assets_admin/js/script.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
		<script src="https://www.jqueryscript.net/demo/Flash-Toast-Notification/flash.js"></script>
               
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
              

		<script>
            
            $('#date2').hide();
            $("#radio_1, #radio_2").change(function () {
                if ($("#radio_1").is(":checked")) {
                    $('#date1').show();
                    $('#date2').hide();
                }
                else if ($("#radio_2").is(":checked")) {
                    $('#date1').show();
                    $('#date2').show();
                }                
            });    
            
            $('#date4').hide();
            $("#radio_3, #radio_4").change(function () {
                if ($("#radio_3").is(":checked")) {
                    $('#date3').show();
                    $('#date4').hide();
                }
                else if ($("#radio_4").is(":checked")) {
                    $('#date3').show();
                    $('#date4').show();
                }                
            });  
        
		
        $('#status').hide();
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0; 
            var user_id = $(this).data('id'); 
            
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{url("admin/changeStatus")}}',
                data: {'status': status, 'user_id': user_id},
                success: function(data){
                    if(data.success == 'Status change successfully.'){
                        flash(data.success,{'bgColor' :'green'});
                            
                    }else{
                        flash(data.success,{'bgColor' :'red'});
                    }         
                
                }
            });
        })
    


    $('#rating').change(function() {
            var id =$("#user").val();
            var rating =$("#rating").val();
            
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{url("admin/user_rating")}}',
                data: {'rating': rating, 'id': id},
                success: function(data){
                    if(data.success == 'Rating saved successfully.'){
                        flash(data.success,{'bgColor' :'green'});                            
                    }else{
                        flash(data.success,{'bgColor' :'red'});
                    }
                }
            });
        })


	
    $('.verify-class').change(function() {
        var verify = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{url("admin/verifyStatus")}}',
            data: {'verify': verify, 'user_id': user_id},
			
            success: function(data){
                if(data.success == 'verify  successfully.'){
                     flash(data.success,{'bgColor' :'green'
            });
                          
                }else{
                     flash(data.success,{'bgColor' :'red'});
                }
                
			
            }
        });
    })


//start and end date
  /* $(document).ready(function(){
            $('input[name="end_date"]').on('click',function(){
                if($(this).val() === 'show'){
                    $('#input1').show();
                }else{
                    $('#input1').val('').hide();
                }
            });
    });

    $(document).ready(function(){
            $('input[name="end_date2"]').on('click',function(){
                if($(this).val() === 'show'){
                    $('#input2').show();
                }else{
                    $('#input2').val('').hide();
                }
            });
    });*/


    $.validator.addMethod(
        "regex", 
        function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
        },
        'Only Characters Allowed.'
    );

    $.validator.addMethod(
        "regex", 
        function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
        },
        'Only Characters Allowed.'
    );


//for image upload
   var MAX_FILE_SIZE = 5 * 1024 * 1024; // 5MB 
    $(document).ready(function() {
        $('#cat_image').change(function() {
            fileSize = this.files[0].size;
            if (fileSize > MAX_FILE_SIZE) {
                this.setCustomValidity("File must not exceed 5 MB!");
                this.reportValidity();
            } else {
                this.setCustomValidity("");
            }
        });
    });


	$(document).ready(function() {
        $("#categories").validate({
               rules: {                    
                    name: {
                        required: true,
                        regex : true,                
                        minlength: 3,
                        maxlength: 30,                   
                },  
                //cat_image: {
                //    image: true,
                //},                    
               },
               messages: {
                    name: {
                        required: "Field is required",
                        minlength: "Not less than 3 character",
                        maxlength: "Not more than 30 character",   
                    },
                    //cat_image: {
                    //    image: "Image should be less than 5Mb",   
                    //},                    
               }
         });
    });

    $(document).ready(function() {
        $("#categoriesedit").validate({
               rules: {                    
                    name: {
                        required: true,
                        regex : true,                
                        minlength: 3,
                        maxlength: 30,                   
                },  
                //cat_image: {
                //    image: true,
                //},                    
               },
               messages: {
                    name: {
                        required: "Field is required",
                        minlength: "Not less than 3 character",
                        maxlength: "Not more than 30 character",   
                    },
                    //cat_image: {
                    //    image: "Image should be less than 5Mb",   
                    //},                    
               }
         });
    });


     $(document).ready(function() {
        $("#location").validate({
               rules: {
                    name: {
                        required: true,
                        minlength: 3,
                        maxlength: 255,
                        regex: true,                      
                    },  
                    latitude: {
                        required: true,
                        number: true
                    },
                    longitude: {
                        required: true,
                        number: true,
                    },                   
               },
               messages: {
                    name: {
                        required: "Field required",
                        minlength: "Not less than 3 character",
                        maxlength: "Not more than 255 character",                        
                        lettersonly: "Only character allowed",                       
                    },   
                    latitude: {
                        required: "Latitude required",
                        number: "Only Number allowed"
                    },
                    longitude: {
                        required: "Longitude is required",
                        number: "Only Number allowed",
                    },                       
               }
         });
    });



    $(document).ready(function() {
        $("#locationedit").validate({
               rules: {
                    name: {
                        required: true,
                        minlength: 3,
                        maxlength: 255,
                        regex: true,  //this made true above                    
                    },  
                    latitude: {
                        required: true,
                        number: true
                    },
                    longitude: {
                        required: true,
                        number: true,
                    },                   
               },
               messages: {
                    name: {
                        required: "Field required",
                        minlength: "Not less than 3 character",
                        maxlength: "Not more than 255 character",                        
                        lettersonly: "Only character allowed",                       
                    },   
                    latitude: {
                        required: "Latitude required",
                        number: "Only Number allowed"
                    },
                    longitude: {
                        required: "Longitude is required",
                        number: "Only Number allowed",
                    },                       
               }
         });
    });




      $(document).ready(function() {
        $("#rewards").validate({
               rules: {
                    budget: {
                        required: true,
                        minlength: 3,
                        maxlength: 100,                                           
                    },                      
                    coins: {
                        required: true,
                        minlength: 2,
                        maxlength: 3,
                        number: true,
                    },                   
               },
               messages: {
                    budget: {
                        required: "Field is required",
                        minlength: "Not less than 3 character",
                        maxlength: "Not more than 100 character",                        
                                    
                    },  
                  
                    coins: {
                        required: "Field is required",
                        number: "Only Number allowed",
                        minlength: "Not less than 2 digit",
                        maxlength: "Not more than 3 digit",    
                    },                       
               }
         });
    });

    $(document).ready(function() {
        $("#rewardsedit").validate({
               rules: {
                    budget: {
                        required: true,
                        minlength: 3,
                        maxlength: 100,                                           
                    },                      
                    coins: {
                        required: true,
                        minlength: 2,
                        maxlength: 3,
                        number: true,
                    },                   
               },
               messages: {
                    budget: {
                        required: "Field is required",
                        minlength: "Not less than 3 character",
                        maxlength: "Not more than 100 character",                        
                                    
                    },  
                  
                    coins: {
                        required: "Field is required",
                        number: "Only Number allowed",
                        minlength: "Not less than 2 digit",
                        maxlength: "Not more than 3 digit",    
                    },                       
               }
         });
    });



    $(document).ready(function() {
        $("#packageedit").validate({
               rules: {
                pack_name: {
                        required: true,
                        minlength: 2,
                        maxlength: 100,
                        regex: true                                           
                    },  
                    message: {
                        required: true,
                        minlength: 3,
                        maxlength: 50,
                        regex: true,
                    },                    
                    amount: {
                        required: true,
                        minlength: 3,
                        maxlength: 4,
                        number: true,
                    },  
                    genre1: {
                        required: true,
                        minlength: 1,
                        maxlength: 2,
                        number: true,
                    },  
                    pics1: {
                        required: true,
                        minlength: 1,
                        maxlength: 2,
                        number: true,
                    }, 
                    genre2: {
                        required: true,
                        minlength: 1,
                        maxlength: 2,
                        number: true,
                    },  
                    pics2: {
                        required: true,
                        minlength: 1,
                        maxlength: 2,
                        number: true,
                    }, 
                    coins: {
                        required: true,
                        minlength: 2,
                        maxlength: 3,
                        number: true,
                    },
                    duration: {
                        required: true,
                        minlength: 2,
                        maxlength: 10,
                        //number: true,
                    },                         
               },
               messages: {
                  pack_name: {
                        required: "Filed is required",
                        minlength: "Not less than 2 character",
                        maxlength: "Not more than 100 character",                       
                        regex: "Only character allowed"            
                    },   
                    message: {
                        required: "Filed is required",
                        minlength: "Not less than 2 character",
                        maxlength: "Not more than 50 character",                       
                        regex: "Only character allowed"            
                    },                      
                    amount: {
                        required: "Filed is required",
                        number: "Numbers only",
                        minlength: "Not less than 3 digit",
                        maxlength: "Not more than 4 digit",    
                    }, 
                    genre1: {
                        required: "Filed is required",
                        number: "Numbers only",
                        minlength: "Not less than 2 digit",
                        maxlength: "Not more than 3 digit", 
                    },   
                    pics1: {
                        required: "Filed is required",
                        number: "Numbers only",
                        minlength: "Not less than 2 digit",
                        maxlength: "Not more than 3 digit", 
                    },
                    genre2: {
                        required: "Filed is required",
                        number: "Numbers only",
                        minlength: "Not less than 2 digit",
                        maxlength: "Not more than 3 digit", 
                    },  
                    pics2: {
                        required: "Filed is required",
                        number: "Numbers only",
                        minlength: "Not less than 2 digit",
                        maxlength: "Not more than 3 digit", 
                    }, 
                    coins: {
                        required: "Filed is required",
                        number: "Numbers only",
                        minlength: "Not less than 2 digit",
                        maxlength: "Not more than 3 digit", 
                    }, 
                    duration: {
                        required: "Filed is required",
                        number: "Numbers only",
                        minlength: "Not less than 2 digit",
                        maxlength: "Not more than 10 digit", 
                    },                
               }
         });
    });



    $(document).ready(function() {
        $("#job").validate({
               rules: {
                    name: {
                        required: true,
                        minlength: 3,
                        maxlength: 255,
                        regex: true,    
                    },  
                    date1: {
                        required: true,
                    },
                    date2 : {
                        //required: true,
                        greaterThan: "#date1",
                    },
                    budget: {
                        required: {
                            depends: function(element) {
                                                return $("#budget").val() == "";
                                            }
                        }           
                    },
                    location: {
                        required: {
                            depends: function(element) {
                                                return $("#location").val() == "";
                                            }
                        }                                
                    },
                    categories: {
                        required: {
                            depends: function(element) {
                                                return $("#categories").val() == "";
                                            }
                        }                                  
                    },         
                    jobtype: {
                        required: {
                            depends: function(element) {
                                                return $("#jobtype").val() == "";
                                            }
                        }                                  
                    },   
                    price_type: {
                        required: {
                            depends: function(element) {
                                                return $("#price_type").val() == "";
                                            }
                        }                                  
                    },
                    address: {
                        required: true, 
                        minlength: 3,
                        maxlength: 255,
                    },  
                    requirements: {
                        required: true, 
                        minlength: 3,
                        maxlength: 255,
                    },          
               },
               messages: {
                    name: {
                        required: "Name is required",
                        minlength: "Not less than 3 character",
                        maxlength: "Not more than 255 character",                        
                       // regex: "Name must be a character",                       
                    },   
                    date1: {
                        required: "Date is required",
                    },
                    date2: {
                        //required: "Date is required",
                        greaterThan: "Date should be more than Start date",
                    },
                    location: {
                        required: "Please select",                      
                    },
                    budget: {
                        required: "Please select",
                    },
                    categories: {
                        required: "Please select",                      
                    },    
                    jobtype: {
                        required: "Please select",                      
                    },  
                    price_type: {
                        required: "Please select",                      
                    },  
                     address: {
                        required: "Address is required", 
                        minlength: "Not less than 3 character",
                        maxlength: "Not more than 255 character",
                    },  
                    requirements: {
                        required: "Fill requirements", 
                        minlength: "Not less than 3 character",
                        maxlength: "Not more than 255 character",
                    },                   
               }
         });
    });

    $(document).ready(function() {
        $("#jobedit").validate({
               rules: {
                    name: {
                        required: true,
                        minlength: 3,
                        maxlength: 255,
                        regex: true, 
                    },  
                    start_date: {
                        required: true,
                    },
                    end_date: {
                        //required: true,
                        greaterThan: "#start_date",
                    },
                    budget: {
                        required: {
                            depends: function(element) {
                                                return $("#budget").val() == "";
                                            }
                        }               
                    },
                    location: {
                        required: {
                            depends: function(element) {
                                                return $("#location").val() == "";
                                            }
                        }                     
                    },
                    categories: {
                        required:   {
                            depends: function(element) {
                                                return $("#categories").val() == "";
                                            }
                        }                                  
                    },         
                    jobtype: {
                        required: {
                            depends: function(element) {
                                                return $("#jobtype").val() == "";
                                            }
                        }                                      
                    },   
                    price_type: {
                        required: {
                            depends: function(element) {
                                                return $("#price_type").val() == "";
                                            }
                        }                                     
                    },
                    address: {
                        required: true, 
                        minlength: 3,
                        maxlength: 255,
                    },  
                    requirements: {
                        required: true, 
                        minlength: 3,
                        maxlength: 255,
                    },          
               },
               messages: {
                    name: {
                        required: "Name is required",
                        minlength: "Not less than 3 character",
                        maxlength: "Not more than 255 character",                        
                        regex: "Only Character required",                       
                    },   
                    start_date: {
                        required: "Date is required",
                    },
                    end_date: {
                        greaterThan: "Date should be more than Start date",
                    },
                    location: {
                        required: "Please select",                      
                    },
                    budget: {
                        required: "Please select",
                    },
                    categories: {
                        required: "Please select",                      
                    },    
                    jobtype: {
                        required: "Please select",                      
                    },  
                    price_type: {
                        required: "Please select",                      
                    },  
                     address: {
                        required: "Address is required", 
                        minlength: "Not less than 3 character",
                        maxlength: "Not more than 255 character",
                    },  
                    requirements: {
                        required: "Fill requirements", 
                        minlength: "Not less than 3 character",
                        maxlength: "Not more than 255 character",
                    },                   
               }
         });
    });

  

    $(document).ready(function() {   
        var i = 0;       
        $("#add").click(function(){   
            ++i;   
            $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][name]" placeholder="Enter your Name" class="form-control" /></td><td><input type="text" name="addmore['+i+'][qty]" placeholder="Enter your Qty" class="form-control" /></td><td><input type="text" name="addmore['+i+'][price]" placeholder="Enter your Price" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
        });
    
        $(document).on('click', '.remove-tr', function(){  
            $(this).parents('tr').remove();
        });  
    }); 
    

     $(document).ready(function() {
            toastr.options.timeOut = 2000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
			@elseif(Session::has('info'))
                toastr.info('{{ Session::get('info') }}');
			@elseif(Session::has('warning'))
                toastr.warning('{{ Session::get('warning') }}');
            @endif
        });

</script>



