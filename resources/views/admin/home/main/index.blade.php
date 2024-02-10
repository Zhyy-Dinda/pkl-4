@extends('admin.index')
{{-- berita --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-9">
            <h4 class="text-center mt-9"></a></h4>
            <div class="card border-0 shadow-sm rounded-md mt-10">
                <div class="card-body mt-9">


                    <table class="table table-bordered table-striped">
                        <thead class="">
                            <tr class="text-center">
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Heading</th>
                                <th>Content</th>
                                {{-- <th>Aksi</th> --}}
                            </tr>
                        </thead>
                        <tbody id="table-posts">
                            @foreach($data as $post)
                            <tr class="" id="index_{{ $post->id }}">
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->sub_title }}</td>
                                <td>{{ $post->heading }}</td>
                                <td>{{ $post->content }}</td>
                                {{-- <td class="text-center">
                                    <a href="javascript:void(0)" id="btn-edit-post" data-id="{{ $post->id }}" class="btn btn-primary btn-sm">EDIT</a>
                                    <a href="javascript:void(0)" id="btn-delete-post" data-id="{{ $post->id }}" class="btn btn-danger btn-sm">DELETE</a>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
