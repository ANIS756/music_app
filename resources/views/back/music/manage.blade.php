
@extends('back.master')

@section("title","Manage Music")

@section('body')
    <div class="container-fluid page-body-wrapper">
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Manage Blogs</h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Singer Name</th>
                                        <th>Image File</th>
                                        <th>Audio File</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($musics as $music)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $music->name }}</td>
                                            <td>{{ $music->singer_name }}</td>
                                            <td>
                                                <img style="height: 60px; width: 60px" src="{{asset($music->image_file)}}" alt="">
                                            </td>
                                            <td>
                                                <audio src="{{asset($music->audio_file)}}" controls>

                                                </audio>
                                            </td>
                                            <td>
                                                <a href="{{route('edit.music',['id'=>$music->id])}}" class="btn btn-warning">Edit</a>
                                                <a href="{{route('delete.music',['id'=>$music->id])}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection


