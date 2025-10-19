@extends('backend.app')
@push('css')

@endpush

@section('content')
    <div class="section__content">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                    <form action="{{route('newsIndex')}}">
                    <div class="row mb-2">
                        <div class="col-md-5">
                            <div class="input-group mb-1 select-wrapper">
                                <select class="form-select form-select-lg" name="action" required="" style="width: 60%;">
                                    <option value="">Select Action</option>
                                    <option value="1">Active</option>
                                    <option value="2">InActive</option>
                                    <option value="3">Feature</option>
                                    <option value="4">Delete</option>
                                </select>
                                <button class="btn btn-primary rounded-0" onclick="return confirm('Are You Want To Action?')">Action</button>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <ul class="statuslist">
                                <li><a href="{{route('newsIndex')}}">All ({{$totals->total}})</a></li>
                                <li><a href="{{route('newsIndex',['status'=>'active'])}}">Active ({{$totals->active}})</a></li>
                                <li><a href="{{route('newsIndex',['status'=>'inactive'])}}">Inactive ({{$totals->inactive}})</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('newsAction','create') }}" class="btn btn-primary float-end mb-1">Add News</a>
                        </div>
                    </div>

                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" class="form-check-input custom-checkbox check-all">
                                    </th>
                                    <th>date</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $i=>$data)
                                    <tr>
                                        <td>
                                            <label class="au-checkbox">
                                                <input class="checkbox" type="checkbox" name="checkid[]" value="{{$data->id}}" /><br />
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>{{ Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</td>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->category->name??'' }}</td>
                                        <td>
                                            @if(getMedia($data->id, 1, 1))
                                            <img src="{{ asset(getMedia($data->id, 1, 1)) }}"
                                                alt="" style="width: 60px; height: 60px; object-fit: cover;">
                                            @endif
                                        </td>
                                        <td class="process">{{ $data->status }}</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="{{ route('newsAction',['edit', $data->id]) }}" class="item">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <a href="{{ route('newsAction',['delete', $data->id]) }}" class="item" onclick="return confirm('Are You Want To Delete?')">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $items->links('pagination::bootstrap-5') }}
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
  
@endpush