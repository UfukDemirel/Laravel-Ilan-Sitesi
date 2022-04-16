@extends('layouts.master')
@section('content')
    <div class="page-heading-section section bg-parallax" data-bg-image="assets/images/slider/slider-2.jpg" data-overlay="50">
        <div class="container">
            <div class="page-heading-content text-center">
                <h3 class="title">Logo Güncelleme</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('company')}}">Home</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="section section-padding">
        <div align="center"><div class="container">
            <form method="post" action="{{url('store')}}" enctype="multipart/form-data"
                  class="dropzone" id="dropzone">
                @csrf
            </form></div>
            <script type="text/javascript">
                Dropzone.options.dropzone =
                    {
                        maxFilesize: 1000,
                        renameFile: function(file) {
                            var dt = new Date();
                            var time = dt.getTime();
                            return time+file.name;
                        },
                        acceptedFiles: ".jpeg,.jpg,.png,.gif",
                        addRemoveLinks: true,
                        timeout: 50000,
                        removedfile: function(file)
                        {
                            var name = file.upload.filename;
                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                },
                                type: 'POST',
                                url: '{{ url("/images/delete") }}',
                                data: {filename: name},
                                success: function (data){
                                    console.log("File has been successfully removed!!");
                                },
                                error: function(e) {
                                    console.log(e);
                                }});
                            var fileRef;
                            return (fileRef = file.previewElement) != null ?
                                fileRef.parentNode.removeChild(file.previewElement) : void 0;
                        },

                        success: function(file, response)
                        {
                            console.log(response);
                        },
                        error: function(file, response)
                        {
                            return false;
                        }
                    };
            </script>
        </div>
    </div>
@endsection
