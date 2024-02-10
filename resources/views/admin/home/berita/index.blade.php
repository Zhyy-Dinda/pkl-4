@extends('admin.index')
{{-- berita --}}
@section('content')
<div class="container-fluid">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card  shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('berita.create') }}" class="btn btn-md btn-primary mb-3">TAMBAH POST</a>
                           
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-warning text-white">
                                    <tr class="text-center ">
                                        <th scope="col">No</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Info</th>
                                        <th scope="col">Kontent</th>
                                        <th scope="col">AKSI</th>
                                    </tr>

                                </thead>
                                <tbody>
                    
                        
                            
                                
                                    @php
                                        $no = 1;
                                    @endphp
                                    @forelse ($data as $dt)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td class="text-center">
                                            <img src="{{ Storage::url('public/berita/') . $dt->image }}" class="rounded"
                                            style="width: 150px">
                                            {{-- <p>{{$dt->image}}</p> --}}
                                        </td>
                                        <td>{{ $dt->title }}</td>
                                        <td>{{ $dt->info }}</td>
                                        <td>{!! $dt->content !!}</td>  
                                        
                                        
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('berita.destroy', $dt->id) }}" method="POST">
                                            <div class="ms-auto">
                                                <div class="category-selector btn-group">
                                                  <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#"
                                                    role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                      <div class="category-business"></div>
                                                      <div class="category-social"></div>
                                                      <div class="category-important"></div>
                                                      <span class="more-options text-dark">
                                                        <i class="ti ti-dots-vertical fs-5"></i>
                                                      </span>
                                                    </div>
                                                  </a>
                                                  <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="
                                                              note-business
                                                              badge-group-item badge-business
                                                              dropdown-item
                                                              position-relative
                                                              category-business
                                                              d-flex
                                                              align-items-center
                                                            " href="javascript:void(0);">view</a>
                                                    <a class="
                                                              note-social
                                                              badge-group-item badge-social
                                                              dropdown-item
                                                              position-relative
                                                              category-social
                                                              d-flex
                                                              btn btn-primary
                                                              align-items-center"
                                                              href="{{ route('berita.edit', $dt->id) }}"> Edit</a>
                                                   
                                                              @csrf
                                                              @method('DELETE')
                                                              <button type="submit" class="btn m-2 btn-sm btn-danger">HAPUS</button>
                                                  </div>
                                                </div>
                                              </div>     
                                               
                                            </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                            Data Post belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="paginate my-5">
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    {{-- @include('admin.berita.create')
    @include('admin.berita.edit') --}}
@endsection
