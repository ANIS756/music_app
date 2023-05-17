
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
                            <form action="{{route('update.music',['id'=>$music->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label class="col-md-4">Music Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{$music->name}}" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Singer Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="singer_name" value="{{$music->singer_name}}" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Image File</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image_file"  id="" accept="image/*" class="form-control-file">
                                        <img src="{{asset($music->image_file)}}" value="" style="width: 60px; height: 60px" alt="">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Audio File</label>
                                    <div class="col-md-8">
                                        <input type="file" name="audio_file" id="" value="" class="form-control-file">
                                        <audio src="{{asset($music->audio_file)}}" controls>

                                        </audio>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" id="" class="btn btn-success" value="Update Music">
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

