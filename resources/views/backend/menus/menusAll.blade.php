@extends('backend.app')
@push('css')

@endpush

@push('title')
{{ __('All Menus') }}
@endpush

@section('content')


<div class="section__content">
    <div class="container-fluid">

        <div class="content-header row mb-3">
            <div class="content-header-left col-md-6 col-12">
                <h3 class="content-header-title mb-0">Menus List</h3>
            </div>
            <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
                <div class="btn-group float-md-right" style="float: right;">
                    <a class="btn btn-outline-primary" href="{{route('menusCreate')}}">Add Menu</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @if(Session::has('success'))
                <div class="alert alert-success alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <strong>Success! </strong> {{Session::get('success') }}.
                </div>
                @endif
                
                
                @if(session('error'))
                <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <strong>Oops! </strong> {{Session::get('error') }}.
                </div>
                @endif
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 60px;">S:L</th>
                                            <th style="min-width: 300px;">Menu Name</th>
                                            <th style="max-width: 100px;">Location</th>
                                            <th style="max-width: 100px;">Items</th>
                                            <th style="min-width: 160px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($menus as $i=>$menu)
                                        <tr>
                                            <td>
                                                {{$i+1}}
                                            </td>
                                            <td>
                                                <span>{{$menu->name}}</span> 
                                                @if($menu->status=='active')
                                                <span><i class="fa fa-check" style="color: #1ab394;"></i></span>
                                                @else
                                                <span><i class="fa fa-times" style="color: #ed5565;"></i></span>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">
                                                {{ucfirst($menu->location)}}
                                            </td>
                                            <td style="text-align: center;">
                                                {{$menu->MenuItems->count()}}
                                            </td>
                                            <td class="center">
                                                <a href="{{route('menusEdit',$menu->id)}}" class="btn btn-sm btn-info">Config</a>

                                                <!--<a href="#deleteModal{{$menu->id}}" class="btn btn-sm btn-danger" data-toggle="modal">Delete</a>-->
                                                <div class="modal fade" id="deleteModal{{$menu->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Confermation</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are Your Want To Delete
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <a href="{{route('menusDelete',$menu->id)}}" class="btn btn-primary">Yes</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {!! $menus->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Inputs end -->
</div>

@endsection 
@push('js') @endpush
