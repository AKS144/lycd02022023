<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

<!-- Bootstrap Bundle JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- Select2 JS -->
<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

<!-- Datatables JS -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>

<!-- Chart JS -->
@if (Route::is(['dashboard', 'freelancer-dashboard']))
<script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>
@endif

<!-- Sticky Sidebar JS -->
<script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
<script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

<!-- Fancybox JS -->
<script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>

<!-- Datetimepicker JS -->
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>

<!-- Owl Carousel -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

<!-- Select2 JS -->
<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

<!-- Range JS -->
@if (Route::is(['developer', 'project']))
<script src="{{ asset('assets/js/range.js') }}"></script>
@endif

<!-- Slick JS -->
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.signature.js') }}"></script>

<!-- Validate -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>

<!-- Date mobiscroll range -->
<script type="text/javascript" src="{{ asset('assets/js/mobiscroll.jquery.min.js') }}"></script>

<!-- Autocomplete in serach-->
{{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> this hide multiple select in artist/setting/business--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>


<!-- Pooper -->
<script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>


<!-- Bootstrap Tagsinput JS -->
<script src="{{ asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>

<!-- Toastr alert JS -->
<!-- <script src="{{ asset('assets/js/toastr.min.js') }}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<!-- cropper JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js" integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>

<!-- Summernote JS -->
<script src="{{ asset('assets/plugins/summernote/dist/summernote-lite.min.js') }}"></script>


<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Handlebars for addmore on estimate -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>


<!-- Dropzone -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>


<!-- Custom JS -->
@if (Route::is(['user-account-details']))
<script src="{{ asset('assets/js/chart.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
@endif

<script src="{{ asset('assets/js/profile-settings.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

<script src="https://www.jqueryscript.net/demo/fullscreen-lightbox-gallery/js/lightboxed/lightboxed.js"></script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://cdn.checkout.com/sandbox/js/checkout.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.signature.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script>
    let user = 'coderix.pc3@gmail.com';
</script>



<script>
    //start_date and end_date          
    //$('#date2').hide();
    $("#radio_1, #radio_2").change(function() {
        if ($("#radio_1").is(":checked")) {
            $('#date1').show();
            $('#date2').hide();
        } else if ($("#radio_2").is(":checked")) {
            $('#date1').show();
            $('#date2').show();
        }
    });

    $('#date4').hide();
    $("#radio_3, #radio_4").change(function() {
        if ($("#radio_3").is(":checked")) {
            $('#date3').show();
            $('#date4').hide();
        } else if ($("#radio_4").is(":checked")) {
            $('#date3').show();
            $('#date4').show();
        }
    });


    
    $('#date6').hide();
    $("#radio_5, #radio_6").change(function() {
        if ($("#radio_5").is(":checked")) {
            $('#date5').show();
            $('#date6').hide();
        } else if ($("#radio_6").is(":checked")) {
            $('#date5').show();
            $('#date6').show();
        }
    });


    //for job edit
    $("#radio_7, #radio_8").change(function() {
        if ($("#radio_7").is(":checked")) {
            $('#date7').hide();
            $('#date8').show();
        } else if ($("#radio_8").is(":checked")) {
            $('#date7').show();
            $('#date8').show();
        }
    });
    	   




    var route = "{{ url('autocomplete-search') }}";
    $('#search').typeahead({
        source: function(query, process) {
            return $.get(route, {
                query: query
            }, function(data) {
                return process(data);
            });
        }
    });

    var routejob = "{{ url('autocomplete-search-job') }}";
    $('#search_job').typeahead({
        source: function(query, process) {
            return $.get(routejob, {
                query: query
            }, function(data) {
                return process(data);
            });
        }
    });

    var copiedLink = '';

    function copyToClipboard(element, btnElem) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).val()).select();
        document.execCommand("copy");
        $temp.remove();
        $(btnElem).html(`<i class="fa fa-link"> </i> `);
        setTimeout(() => {
            $(btnElem).html(`<i class="far fa-clipboard"> </i> `);
        }, 2000);
    }

    



    //Genre image upload
   /* var imgUpload = document.getElementById('upload-img'),
        imgPreview = document.getElementById('img-preview'),
        imgUploadForm = document.getElementById('form-upload'),
        totalFiles, previewTitle, previewTitleText, img;

    imgUpload.addEventListener('change', previewImgs, true);

    function previewImgs(event) {
        totalFiles = imgUpload.files.length;

        if (!!totalFiles) {
            imgPreview.classList.remove('img-thumbs-hidden');
        }

        for (var i = 0; i < totalFiles; i++) {
            wrapper = document.createElement('div');
            wrapper.classList.add('wrapper-thumb');
            removeBtn = document.createElement("span");
            nodeRemove = document.createTextNode('x');
            removeBtn.classList.add('remove-btn');
            removeBtn.appendChild(nodeRemove);
            img = document.createElement('img');
            img.src = URL.createObjectURL(event.target.files[i]);
            img.classList.add('img-preview-thumb');
            wrapper.appendChild(img);
            wrapper.appendChild(removeBtn);
            imgPreview.appendChild(wrapper);

            $('.remove-btn').click(function() {
                $(this).parent('.wrapper-thumb').remove();
            });
        }
    }*/




    //loadmore
    $(document).ready(function(e) {
        var limit = 1;
        $(".loadMore li").slice(0, limit).show();
        $(document).on('click', '#load_more', function(e) {
            limit += 2;
            e.preventDefault();
            $(".loadMore li").slice(0, limit).show();
        });
        //var lenght_name = $(".loadMore li").length;
    });

    //dropzone
    Dropzone.options.dropzone = {
        maxFilesize: 12,
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
            return file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        timeout: 5000,
        addRemoveLinks: true,
        removedfile: function(file) {
            var name = file.upload.filename;
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                type: 'POST',
                url: '{{ url("photodelete") }}',
                data: {
                    filename: name
                },
                success: function(data) {
                    console.log("File deleted successfully!!");
                },
                error: function(e) {
                    console.log(e);
                }
            });
            var fileRef;
            return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
        success: function(file, response) {
            console.log(response);
        },
        error: function(file, response) {
            return false;
        }
    };
    //dropzone



    //For addmore 
    $(document).on('click', '#addMore', function() {

        $('.table').show();

        var product_name = $("#product_name").val();
        var qty = $("#qty").val();
        var description = $("#description").val();
        var unit_price = $("#unit_price").val();
        var price = $("#price").val();

        var user_id = $("#user_id").val();
        var artist_id = $("#artist_id").val();
        var quotes_id = $("#quotes_id").val();
        var contract_id = $("#contract_id").val();


        if (product_name != '' && unit_price != '' && description != '') {

            var source = $("#document-template").html();
            var template = Handlebars.compile(source);

            var data = {
                product_name: product_name,
                qty: qty,
                description: description,
                unit_price: unit_price,
                price: price,
                user_id: user_id,
                artist_id: artist_id,
                quotes_id: quotes_id,
                contract_id: contract_id
            }

            var html = template(data);
            if (html != '') {
                $("#addRow").append(html)
            }

            total_ammount_price();
            //total();

            $('#product_name').val('');
            //  $('#qty').val('');               
            $('#unit_price').val('');
            $('#description').val('');
            $('#price').val('');

        } else {
            alert('Fill all fields');
        }
    });

    $(document).on('click', '.removeaddmore', function(event) {
        $(this).closest('.delete_add_more_item').remove();
        total_ammount_price();
    });


    $('#qty, #unit_price').keyup(function() {
        var value1 = parseFloat($('#qty').val()) || 0;
        var value2 = parseFloat($('#unit_price').val()) || 0;
        $('#price').val(value1 * value2);
    });


    function total_ammount_price() {
        var price = 0;
        $('.price').each(function() {
            var value = $(this).val();
            if (value.length != 0) {
                price += parseFloat(value);
            }
        });
        $('#estimated_ammount').val(price);
    }
    //



    $(document).ready(function() {
        copiedLink = $('#share_url').val();

        $('#shareWithTwitter').click(function() {
            window.open("https://twitter.com/intent/tweet?url=" + copiedLink);
        });

        $('#shareWithFb').click(function() {
            window.open("https://www.facebook.com/sharer/sharer.php?u=" + copiedLink,
                'facebook-share-dialog', "width=626, height=436");
        });

        $('#shareWithFb').click(function() {
            window.open("https://www.facebook.com/sharer/sharer.php?u=" + copiedLink,
                'facebook-share-dialog', "width=626, height=436");
        });

        $('#shareWithMail').click(function() {
            var formattedBody = "This is cause link: " + (copiedLink);
            var mailToLink = "mailto:?subject= " + user +
                " wants you to donate to this noble cause&body=" + encodeURIComponent(formattedBody);
            window.location.href = mailToLink;
        });

        $('#shareWithWhatsapp').click(function() {
            var win = window.open('https://api.whatsapp.com/send?text=' + copiedLink, '_blank');
            win.focus();
        });

        $(document).on('click', '.ctoCb', function() {
            copyToClipboard($(this).parent().parent().find('input'), $(this));
        });
    });


    //show more and show less
    $(document).ready(function() {

        $('.show-more-content').hide();

        $('.show-more').click(function() {
            $('.show-more-content').show(300);
            $('.show-less').show();
            $('.show-more').hide();
        });

        $('.show-less').click(function() {
            $('.show-more-content').hide(150);
            $('.show-more').show();
            $(this).hide();
        });

    });



    //multiple image delete
    $(document).ready(function() {

        $('#flexCheckIndeterminate').on('click', function(e) {
            if ($(this).is(':checked', true)) {
                $(".sub_chk").prop('checked', true);
            } else {
                $(".sub_chk").prop('checked', false);
            }
        });

        $('.delete_all').on('click', function(e) {
            var allVals = [];
            $(".sub_chk:checked").each(function() {
                allVals.push($(this).attr('data-id'));
            });

            if (allVals.length <= 0) {
                alert("Please select something.");
            } else {

                var check = confirm("Are you sure you want to delete?");
                if (check == true) {

                    var join_selected_values = allVals.join(",");

                    $.ajax({
                        url: $(this).data('url'),
                        type: 'GET',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: 'ids=' + join_selected_values,
                        success: function(data) {
                            // if (data['success']) {
                            $(".sub_chk:checked").each(function() {
                                $(this).parents("tr").remove();
                                window.location.reload();
                            });
                            //     alert(data['success']);
                            // } else if (data['error']) {
                            //     alert(data['error']);
                            // } else {
                            //     alert('Whoops Something went wrong!!');
                            // }
                        },
                        error: function(data) {
                            alert(data.responseText);
                        }
                    });

                    $.each(allVals, function(index, value) {
                        $('table tr').filter("[data-row-id='" + value + "']").remove();
                    });
                }
            }
        });
    });
    //end



    //radio button for feedback
    $(document).ready(function() {
        $('#show-hidden-menu').click(function() {
            $('.hidden-menu').slideToggle("slow");
            // Alternative animation for example
            // slideToggle("fast");
        });
    });


    //prevent multiple form submit button
    $(document).ready(function() {
        $('.from-prevent-multiple-submits').on('submit', function() {
            $('.from-prevent-multiple-submits').attr('disabled', 'true');
        });
    });


  


    $(document).ready(function() {
        $('input[name="end_date2"]').on('click', function() {
            if ($(this).val() === 'show') {
                $('#input2').show();
            } else {
                $('#input2').val('').hide();
            }
        });
    });

    $(document).ready(function() {
        $("#searchjob").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: path,
                    type: 'GET',
                    dataType: "json",
                    data: {
                        search: request.term
                    },
                    success: function(data) {
                        response(data);
                    }
                });
            },
            select: function(event, ui) {
                $('#searchjob').val(ui.item.label);
                console.log(ui.item);
                return false;
            }
        });
    });


    //for image upload
    var MAX_FILE_SIZE = 5 * 1024 * 1024; // 5MB 
    $(document).ready(function() {
        $('#image').change(function() {
            fileSize = this.files[0].size;
            if (fileSize > MAX_FILE_SIZE) {
                this.setCustomValidity("File must not exceed 5 MB!");
                this.reportValidity();
            } else {
                this.setCustomValidity("");
            }
        });
    });



    /*  $.validator.addMethod(
          "validDOB",
          function() {     
              // var from = value.split("/"); // DD/MM/YYYY
              var day = $("#dobDay").val();
              var month = $("#dobMonth").val();
              var year = $("#dobYear").val();
              var age =  18;

              var mydate = new Date();
              mydate.setFullYear(year, month-1, day);

              var currdate = new Date();
              currdate.setFullYear(currdate.getFullYear() - age);

              if(currdate < mydate)
              {
                  return You must be at least 18 years of age;
              }
          },
       
      );*/


    /* jQuery.validator.addMethod(
         "regex",
         function(value, element, regexp) {
             var re = new RegExp(regexp);
             return this.optional(element) || re.test(value);
         },
         "Please check your input."
     );*/


    //for name in characters
    $.validator.addMethod(
        "regex",
        function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
        },
        'Only Characters Allowed.'
    );


    // $.validator.addMethod(
    //     "alNumRegex",
    //     function(value, element) {
    //         return this.optional(element) || value == value.match(/^[a-zA-Z0-9]+$/);
    //     },
    //     'Enter correct details'
    // );

    // var alNumRegex = /^([a-zA-Z0-9]+)$/; //only letters and numbers
    // if(alNumRegex.test($('#myTextbox').val())) {
    //     alert("value of myTextbox is an alphanumeric string");
    // }


    //
    //$.validator.addMethod('filesize', function (value, element, param) {
    //    return this.optional(element) || (element.files[0].size <= param)
    //    }, 
    //    'File size must be less than {0}'
    //);


    /*$(document).ready(function () {        
        $('.numberonly').keypress(function (e) {    
            var charCode = (e.which) ? e.which : event.keyCode  
            if (String.fromCharCode(charCode).match(/[^0-9]/g))    
                return false;                  
        });   
    });*/

    $(document).ready(function() {
        $("#artreason").validate({
            rules: {
                artist_reason: {
                    required: true,
                    //regex : true,               
                    minlength: 3,
                    maxlength: 255,
                },

            },
            messages: {
                artist_reason: {
                    required: "Field is required",
                    minlength: "Not less than 2 character",
                    maxlength: "Not more than 255 character",
                },
            }
        });
    });




    $(document).ready(function() {
        $("#equipments").validate({
            rules: {
                name: {
                    required: true,
                    regex: true,
                    minlength: 3,
                    maxlength: 30,
                },

            },
            messages: {
                name: {
                    required: "Field is required",
                    minlength: "Not less than 2 character",
                    maxlength: "Not more than 30 character",
                },
            }
        });
    });




    $(document).ready(function() {
        $("#equipments2").validate({
            rules: {
                name: {
                    required: true,
                    regex: true,
                    minlength: 3,
                    maxlength: 30,
                },

            },
            messages: {
                name: {
                    required: "Field is required",
                    minlength: "Not less than 2 character",
                    maxlength: "Not more than 30 character",
                },
            }
        });
    });


    //age 18+
    $.validator.addMethod("minAge", function(value, element, min) {
        var today = new Date();
        var birthDate = new Date(value);
        var age = today.getFullYear() - birthDate.getFullYear();

        if (age > min + 1) {
            return true;
        }
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        return age >= min;
    }, "You are not old enough!");



    //prfix +91 before mobile for otp login
    $(document).ready(function() {
        $('#mobile').keyup(function() {
            var oldvalue = $(this).val();
            var field = this;
            setTimeout(function() {
                if (field.value.indexOf('+91') !== 0) {
                    $(field).val("+91" + oldvalue);
                }
            }, 1);
        });
    });



    //for (ID type) option selected in basic form 
    /*$(document).ready(function(){
        $("select").change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                if(optionValue){
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else{
                    $(".box").hide();
                }
            });
        }).change();
    });*/

    //for id_type div hide
    $(document).ready(function() {
        $("#id_type").change(function() {
            if ($(this).val() == "") {
                $("#showdiv").hide();
            } else {
                $("#showdiv").show();
            }
        });
    });

    /*$(document).ready(function(){
        $("#id_type").change(function () {
            if ($(this).val() == "PAN") {
                $("#showdiv").show();
            } else if($(this).val() == "Aadhar") {
                $("#showdiv").show();
            } else if($(this).val() == "Passport") {
                $("#showdiv").show();
            } else if($(this).val() == "Voter") {
                $("#showdiv").show();
            } else {
                $("#showdiv").hide();
            }
        });
    });*/



    $(document).ready(function() {
        $("#basic").validate({
            rules: {
                name: {
                    required: true,
                    regex: true,
                    // pattern: "^[a-zA-Z'.\\s]{1,40}$",
                    minlength: 3,
                    maxlength: 30,
                },
                email: {
                    required: true,
                    minlength: 3,
                    maxlength: 30,
                    email: true
                },
                mobile: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    // phoneUS: true
                    digits: true
                },
                dob: {
                    required: true,
                    //date: true
                    minAge: 18
                },        
                id_type: {
                    required: true,
                },
                id_no: {
                    required: true,
                    // minlength: 9,
                    // maxlength: 20
                },
                gender: {
                    required: {
                        depends: function(element) {
                            return $("#gender").val() == "";
                        }
                    }
                },
            },
            messages: {
                name: {
                    required: "Field is required",
                    minlength: "Not less than 2 character",
                    maxlength: "Not more than 30 character",
                },
                email: {
                    required: "Field is required",
                    minlength: "Not less than 3 character",
                    maxlength: "Not more than 30 character",
                    email: "Must be an email"
                },
                mobile: {
                    required: "Field is required",
                    minlength: "Only 10 digits",
                    maxlength: "Only 10 digits",
                    number: "Must be a number"
                    //phoneUS: "Should be a number",
                },
                id_type: {
                    required: "Select from the list"
                },
                // id_no: {
                //     required: "Field is required",
                //     minlength: "Only 10 digits",
                //     maxlength: "Only 10 digits",
                // },
                gender: {
                    required: "Select from the list"
                },
                profile_img: {
                    required: "Field is required",
                    accept: "Must be in format:jpg|jpeg|png|ico|bmp",
                    filesize: "File size should be less than 3 Mb",
                },
                dob: {
                    required: "Field is required",
                    minAge: "You must be at least 18 years old!"
                },                  
            }
        });

        /*$.validator.addMethod( "alNumRegex",
            function(value, element) {
                return this.optional(element) || value == value.match(/^([a-zA-Z0-9]+)$/);
            },
            'Enter correct details'
        );*/

        $.validator.addMethod("alphanumeric",
            function(value, element) {
                return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
            }, 'Enter correct details'
        );


        // dynamically change the rules
        $('#id_type').on('change', function() {
            $('input[name="id_no"]').rules('remove');
            if ($(this).val() == 'PAN') { // Amount
                $('input[name="id_no"]').rules('add', {
                    //digits: true,
                    required: true,
                    alphanumeric: true,
                    minlength: 10,
                    maxlength: 10
                });
            } else if ($(this).val() == 'Aadhar') { // Name
                $('input[name="id_no"]').rules('add', {
                    //lettersonly: true,                       
                    required: true,
                    number: true,
                    minlength: 12,
                    maxlength: 12
                });
            } else if ($(this).val() == 'Passport') { // Name
                $('input[name="id_no"]').rules('add', {
                    //lettersonly: true,
                    required: true,
                    alphanumeric: true,
                    minlength: 12,
                    maxlength: 12
                });
            } else if ($(this).val() == 'Voter') { // Name
                $('input[name="id_no"]').rules('add', {
                    //lettersonly: true,
                    required: true,
                    alphanumeric: true,
                    minlength: 10,
                    maxlength: 10
                });
            }
            $('input[name="id_no"]').valid(); // trigger validation of the text field (optional)
        });
    });


    //
    $.validator.addMethod("ifsc", function(value, element) {
        var reg = /^[A-Za-z]{4}[0-9]{6,7}$/;
        if (this.optional(element)) {
            console.log(value);
            console.log(element);
            return true;
        }
        if (value.match(reg)) {
            return true;
        } else {
            return false;
        }
    }, "Please specify a valid IFSC CODE");


    $(document).ready(function() {
        $("#business").validate({
            rules: {
                loc: {
                    required: {
                        depends: function(element) {
                            return $("#loc").val() == "";
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
                //bank details
                holder: {
                    required: true,
                    // regex : true,                
                    minlength: 3,
                    maxlength: 30,
                },
                bank: {
                    required: true,
                    regex: true,
                    minlength: 3,
                    maxlength: 30,
                },
                account: {
                    required: true,
                    minlength: 9,
                    maxlength: 18,
                    number: true
                },
                branch: {
                    required: true,
                    regex: true,
                    minlength: 3,
                    maxlength: 50,
                },
                ifsc: {
                    required: true,
                    ifsc: true,
                },
                gst: {
                    minlength: 10,
                },
                //studio_address
                locality: {
                    minlength: 3,
                    maxlength: 255
                },
                street: {
                    minlength: 3,
                    maxlength: 255
                },
                city: {
                    minlength: 2,
                    maxlength: 50
                },
                state: {
                    minlength: 3,
                    maxlength: 20
                },
                zip: {
                    minlength: 6,
                    maxlength: 6
                },

                //overview
                overview: {
                    required: true,
                    minlength: 10,
                    maxlength: 2000
                },

                //qualification
                degree: {
                    regex: true,
                    minlength: 2,
                    maxlength: 50
                },
                institute: {
                    regex: true,
                    minlength: 2,
                    maxlength: 50
                },
                skills: {
                    // regex : true,
                    required: true,
                    minlength: 2,
                    maxlength: 50
                },
                courses: {
                    minlength: 2,
                    maxlength: 50
                },
                expyrs: {
                    required: true,
                    nummber: true,
                    maxlength: 2
                },
                workedloc: {
                    minlength: 2,
                    maxlength: 200,
                },

            },
            messages: {
                /* location : {
                     required: "Please select any option"                                   
                 },
                 categories : {
                     required: "Please select any option"                                   
                 },*/

                //bank details
                holder: {
                    required: "Field is required",
                    minlength: "Not less than 3 character",
                    maxlength: "Not more than 30 character",
                },
                bank: {
                    required: "Field is required",
                    minlength: "Not less than 3 character",
                    maxlength: "Not more than 30 character",
                },
                account: {
                    required: "Field is required",
                    minlength: "Not less than 9 digits",
                    maxlength: "Not more than 18 digits",
                    number: "Only number is allowed"
                },
                branch: {
                    required: "Field is required",
                    minlength: "Not less than 3 digits",
                    maxlength: "Not more than 50 digits",
                },
                ifsc: {
                    required: "Field is required",
                },

                //studio address
                locality: {
                    minlength: "Not less than 3 digits",
                    maxlength: "Not more than 255 digits",
                },
                street: {
                    minlength: "Not less than 3 digits",
                    maxlength: "Not more than 255 digits",
                },
                city: {
                    minlength: "Not less than 2 digits",
                    maxlength: "Not more than 50 digits",
                },
                state: {
                    minlength: "Not less than 3 digits",
                    maxlength: "Not more than 20 digits",
                },
                zip: {
                    minlength: "Not less than 6 digits",
                    maxlength: "Not more than 6 digits",
                },

                //overview
                overview: {
                    required: "Field is required",
                    minlength: "Not less than 10 digits",
                    maxlength: "Not more than 2000 digits",
                },

                //qualification
                degree: {
                    minlength: "Not less than 2 digits",
                    maxlength: "Not more than 50 digits",
                },
                institute: {
                    minlength: "Not less than 2 digits",
                    maxlength: "Not more than 50 digits",
                },
                skills: {
                    required: "Field is required",
                    minlength: "Not less than 2 digits",
                    maxlength: "Not more than 50 digits",
                },
                courses: {
                    minlength: "Not less than 2 digits",
                    maxlength: "Not more than 50 digits",
                },
                expyrs: {
                    required: "Field is required",
                    number: "Only number allowed",
                    maxlength: "Not more than two digits"
                },
                workedloc: {
                    minlength: "Not less than 2 digits",
                    maxlength: "Not more than 200 digits",
                },
            }
        });
    });




    $(document).ready(function() {
        $("#contract").validate({
            rules: {
                final_price: {
                    required: true,
                    minlength: 3,
                    maxlength: 10,
                    number: true
                },
            },
            messages: {
                final_price: {
                    required: "Field is required",
                    minlength: "Not less than 3 digits",
                    maxlength: "Not more than 10 digits",
                    number: "Price must be a number"
                },
            }
        });
    });



    $(document).ready(function() {
        $("#quotes").validate({
            rules: {
                client_price: {
                    required: true,
                    minlength: 3,
                    maxlength: 10,
                    number: true
                },
                /*start_date: {
                     required: true,
                     date: true
                 },
                 end_date: {
                     required: true,
                     date: true,
                     // greaterThan: "#start_date"
                 },*/
                price_type: {
                    required: {
                        depends: function(element) {
                            return $("#price_type").val() == "";
                        }
                    }
                },
                location_id: {
                    required: {
                        depends: function(element) {
                            return $("#location_id").val() == "";
                        }
                    }
                },
                category_id: {
                    required: {
                        depends: function(element) {
                            return $("#category_id").val() == "";
                        }
                    }
                },
                projected_budget: {
                    required: {
                        depends: function(element) {
                            return $("#projected_budget").val() == "";
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
                project_details: {
                    required: true,
                    minlength: 5,
                    maxlength: 2000,
                },
                address: {
                    required: true,
                    minlength: 5,
                    maxlength: 255,
                }
            },
            messages: {
                client_price: {
                    required: "Field is required",
                    minlength: "Minimum 3 digits",
                    maxlength: "Maximum 10 digits",
                    number: "Should be a number"
                },
                start_date: {
                    required: "Field is required",
                    date: "Date should be after yesterday"
                },
                end_date: {
                    required: "Field is required",
                    date: "Date should be after or equal to Start Date",
                    // greaterThan: "Date should be equal or greater than Start date"
                },
                price_type: {
                    required: "Please select from option"
                },
                location_id: {
                    required: "Please select from option"
                },
                category_id: {
                    required: "Please select from option"
                },
                projected_budget: {
                    required: "Please select from option"
                },
                jobtype: {
                    required: "Please select from option"
                },
                project_details: {
                    required: "Field is required",
                    minlength: "Not less than length 5 digits ",
                    maxlength: "Not more than 2000 digits ",
                },
                address: {
                    required: "Field is required",
                    minlength: "Minimum length of 5 digits ",
                    maxlength: "Minimum length 255 digits ",
                }
            }
        });
    });


    $(document).ready(function() {
        $("#jobpost").validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 200,
                    minlength: 2,
                    lettersonly: true
                },
                start_date: {
                    required: true,
                    date: true,
                },
                end_date: {
                    //required: true,
                    date: true,
                    greaterThan: "#start_date"
                },
                requirements: {
                    required: true,
                    minlength: 5,
                    maxlength: 5000,
                },
                address: {
                    required: true,
                    minlength: 5,
                    maxlength: 255,
                }
            },
            messages: {
                name: {
                    required: "Filed is requried",
                    minlength: "Not less than length 2",
                    maxlength: "Not more than 200 ",
                    lettersonly: "Letters only"
                },
                start_date: {
                    required: "Field is required",
                    date: "Date must be after yesterday",
                },
                end_date: {
                    //required: "Field is required",
                    date: "Date must be after or equal to Start Date",
                    greaterThan: "Date should be equal or greater than Start date"
                },
                requirements: {
                    required: "Field is required",
                    minlength: "Minimum length of 5 ",
                    maxlength: "Minimum length 5000",
                },
                address: {
                    required: "Field is required",
                    minlength: "Minimum length of 5",
                    maxlength: "Minimum length 255",
                }
            }
        });
    });




    /* $(document).ready(function() {
         $("#addproduct").validate({
             rules: {
                 product_name: {
                     required: true,
                     maxlength: 200,
                     minlength: 2,
                     lettersonly: true
                 },
                 qty: {
                     required: true,
                     maxlength: 100,
                     minlength: 1,
                     number: true,
                 },
                 unit_price: {
                     required: true,
                     maxlength: 100000,
                     minlength: 2,
                     number: true,
                 },
                 description: {
                     required: true,
                     minlength: 3,
                     maxlength: 5000,
                 },
             },
             messages: {
                 product_name: {
                     required: "Filed is requried",
                     minlength: "Not less than length 2",
                     maxlength: "Not more than 200 ",
                     lettersonly: "Character only",
                 },
                 qty: {
                     required: "Field is required",
                     maxlength: "Maximum length 100",
                     minlength: "Minimum length 1",
                     number: "Number Only",
                 },
                 unit_price: {
                     required: "Field is required",
                     minlength: "Minimum length 2",
                     maxlength: "Maximum length of 100000 ",
                     number: "Number Only",
                 },
                 description: {
                     required: "Field is required",
                     minlength: "Minimum length of 3 ",
                     maxlength: "Maximum length 5000",
                 },
             }
         });
     });*/



    $(document).ready(function(e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#photoform').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            let TotalFiles = $('#photo')[0].files.length; //Total files
            let files = $('#photo')[0];
            for (let i = 0; i < TotalFiles; i++) {
                formData.append('photo' + i, files.files[i]);
            }
            formData.append('TotalFiles', TotalFiles);
            $.ajax({
                type: 'POST',
                url: "{{ url('photos/store') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: (data) => {
                    this.reset();
                    alert('Photo has been uploaded');
                },
                error: function(data) {
                    alert(data.responseJSON.errors.files[0]);
                    console.log(data.responseJSON.errors);
                }
            });
        });
    });



    $('#status').change(function() {
        var id = $("#hid").val();
        var status = $("#status").val();

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "{{ url('project_update') }}",
            data: {
                'status': status,
                'id': id
            },
            success: function(data) {
                toastr.success('Status Changed Successfully');                
            }
        });
    });

    

    $('.updatestatus').change(function() {
        var id = $(".hidd").val();
        var status = $(".updatestatus").val();

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "{{ url('project_update_status') }}",
            data: {
                'status': status,
                'id': id
            },
            success: function(data) {
                toastr.success('Status Changed Successfully');
            }
        });
    });



    $(document).ready(function() {
        $('#myselection').on('change', function() {
            var demovalue = $(this).val();
            $("div.myDiv").hide();
            $("#show" + demovalue).show();
        });
    });



    // not requried
    $(document).ready(function() {
        $("#addadditional").click(function() {
            var html = '';
            html += '<div id="inputFormRowadditional">';
            html += '<div class="row">';
            html += '<div class="col-md-6">';
            html += '<label>&nbsp;</label>';
            html += '<input type="text" name="add_Equipment[]" class="form-control m-input" placeholder="Enter Equipment" autocomplete="off">';
            html += '</div >';
            html += '<div class="col-md-1" style="margin-top: -21px;">';
            html += '<label style="padding-bottom: 21px;">&nbsp;</label>';
            html += '<button id="removeadditionalRow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            $('#newadditionalRow').append(html);
        });
    });



    $(function() {
        $("input[name='studio']").click(function() {
            if ($("#chkYesstudio").is(":checked")) {
                $("#dvstudio").show();
            } else {
                $("#dvstudio").hide();
            }
        });
    });



    $(document).ready(function() {
        $(".promotions-carousel").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            responsive: [{
                breakpoint: 639,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    });




    $('.otp').hide();
    function sendOtp() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // alert($('#mobile').val());
        $.ajax({
            url: 'sendOtp',
            type: 'post',
            data: {
                'mobile': $('#mobile').val()
            },
            success: function(data) {
                // alert(data);
                if (data != 0) {
                    $('.otp').show();
                    $('.send-otp').hide();


                } else {
                    alert('Mobile No not found');
                }
            },
            error: function() {
                console.log('error');
            }
        });
    }



    /*$(document).ready(function() {    
        function resendOtp() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // alert($('#mobile').val());
            $.ajax({
                url: 'resendOtp',
                type: 'post',
                data: {
                    'mobile': $('#mobile').val()
                },
                success: function(data) {
                    // alert(data);
                    if (data != 0) {
                        $('.otp').show();
                        $('.resend-otp').hide();
                    } else {
                        alert('Mobile No not found');
                    }
                },
                error: function() {
                    console.log('error');
                }
            });
        }
    });  */




    $(document).ready(function() {
        $(".slideshow").slick({
            infinite: true,
            autoplay: false,
            dots: true,
            arrows: true,
            autoplaySpeed: 4000
        });
    });


    $(document).ready(function() {
        $(".slideshowjob").slick({
            infinite: true,
            autoplay: false,
            dots: true,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,

        });
    });


    $(document).ready(function() {
        $('.your-class').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            speed: 2000,
            fade: true,
            cssEase: 'linear'
        });
    });



    //signature temporaly hided from client side
    $(document).ready(function() {
        var sign = $('#sign').signature({
            syncField: '#signclient',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            sign.signature('clear');
            $("#signclient").val('');
        });
    });



    //signature temporaly hided from artist side
    $(document).ready(function() {
        var sig = $('#sig').signature({
            syncField: '#signature',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature").val('');
        });
    });


    //change status of value verify
    $('.toggle-class').change(function() {
        alert('hi');
        var status = $(this).prop('checked') == true ? 1 : 0;
        var user_id = $(this).data('id');

        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'users/changeStatus',
            data: {
                'status': status,
                'user_id': user_id
            },
            success: function(data) {
                console.log(data.success)
            }
        });
    })

    if ($('#album-slider').length > 0) {
        $('#album-slider').owlCarousel({
            items: 5,
            margin: 30,
            dots: false,
            nav: true,
            navText: [
                '<i class="fas fa-chevron-left"></i>',
                '<i class="fas fa-chevron-right"></i>'
            ],
            loop: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1170: {
                    items: 1
                }
            }
        });
    }
    $('.alert-success').hide();
    $('body').on('click', '#rzp-button1', function(e) {
        e.preventDefault();
        var amount = $('.amount').val();
        var total_amount = amount * 10000;
        var options = {
            "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard
            "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
            "currency": "INR",
            "name": "Lighterature",
            "description": "Test Transaction",
            "image": "{{ asset('assets/img/logoweb.png') }}",
            "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function(response) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: "{{ route('payment') }}",
                    data: {
                        razorpay_payment_id: response.razorpay_payment_id,
                        amount: amount
                    },
                    success: function(data) {
                        $('.alert-success').show();
                        $('.alert-success').text(data.success);
                        $('.amount').val('');
                    }
                });
            },
            "prefill": {
                "name": "Rahul Naik",
                "email": "rahul@coderix.io",
                "contact": "9877665523"
            },
            "notes": {
                "address": "test test"
            },
            "theme": {
                "color": "#FF0D0D"
            }
        };

        var rzp1 = new Razorpay(options);
        rzp1.open();
    });




    $('body').on('click', '#rzp_gold', function(e) {
        e.preventDefault();
        var amount = $('.rzp_gold').val();
        var total_amount = amount * 100;
        var options = {
            "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard
            "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
            "currency": "INR",
            "name": "Lighterature",
            "description": "Test Transaction",
            "image": "{{ asset('assets/img/logoweb.png') }}",
            "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function(response) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: "{{ route('package') }}",
                    data: {
                        razorpay_payment_id: response.razorpay_payment_id,
                        amount: amount,
                    },

                    success: function(data) {
                        $('.success-message').text(data.success);
                        $('.success-alert').fadeIn('slow', function() {
                            $('.success-alert').delay(5000).fadeOut();
                        });
                        $('.amount').val('');
                    }
                });
            },
            "prefill": {
                "name": "Rahul Naik",
                "email": "rahul@coderix.io",
                "contact": "9877665523"
            },

            "notes": {
                "address": "test test"
            },

            "theme": {
                "color": "#FF0D0D"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    });



    $('body').on('click', '#rzp_sliver', function(e) {
        e.preventDefault();
        var amount = $('.rzp_sliver').val();
        var total_amount = amount * 100;
        var options = {
            "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard
            "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
            "currency": "INR",
            "name": "Lighterature",
            "description": "Test Transaction",
            "image": "{{ asset('assets/img/logoweb.png') }}",
            "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function(response) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: "{{ route('package') }}",
                    data: {
                        razorpay_payment_id: response.razorpay_payment_id,
                        amount: amount,
                    },

                    success: function(data) {
                        $('.success-message').text(data.success);
                        $('.success-alert').fadeIn('slow', function() {
                            $('.success-alert').delay(5000).fadeOut();
                        });
                        $('.amount').val('');
                    }
                });
            },

            "prefill": {
                "name": "Rahul Naik",
                "email": "rahul@coderix.io",
                "contact": "9877665523"
            },
            "notes": {
                "address": "test test"
            },

            "theme": {
                "color": "#FF0D0D"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    });



    $('body').on('click', '#rzp_platinum', function(e) {
        e.preventDefault();
        var amount = $('.rzp_platinum').val();
        var total_amount = amount * 100;
        var options = {
            "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard
            "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
            "currency": "INR",
            "name": "Lighterature",
            "description": "Test Transaction",
            "image": "{{ asset('assets/img/logoweb.png') }}",
            "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function(response) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: "{{ route('package') }}",
                    data: {
                        razorpay_payment_id: response.razorpay_payment_id,
                        amount: amount,
                    },
                    success: function(data) {
                        $('.success-message').text(data.success);
                        $('.success-alert').fadeIn('slow', function() {
                            $('.success-alert').delay(5000).fadeOut();
                        });

                        $('.amount').val('');
                    }
                });
            },

            "prefill": {
                "name": "Rahul Naik",
                "email": "rahul@coderix.io",
                "contact": "9877665523"
            },

            "notes": {
                "address": "test test"
            },

            "theme": {
                "color": "#FF0D0D"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    });

    $(document).ready(function() {
        toastr.options.timeOut = 2000;
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error')}}');
        @elseif (Session::has('success'))
            toastr.success('{{ Session::get('success')}}');
        @elseif (Session::has('info'))
            toastr.info('{{ Session::get('info')}}');
        @elseif (Session::has('warning'))
            toastr.warning('{{ Session::get('warning')}}');
        @endif
    });
</script>