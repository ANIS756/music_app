
@extends("back.master")

@section('title','Add Music')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Add Category</h3>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="text-success">
                                    {{Session::get('success')}}
                                </h5>
                            </div>
                            <form action="{{route('create.music')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label class="col-md-4">Music Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Singer Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="singer_name" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Image File</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image_file" id="" accept="image/*" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Audio File</label>
                                    <div class="col-md-8">
                                        <input type="file" name="audio_file" id=""  class="form-control-file">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" id="" class="btn btn-success" value="Add Music">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
