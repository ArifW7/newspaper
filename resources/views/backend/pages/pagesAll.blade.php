@extends('backend.app')
@push('title')
{{ __('Configure Pages') }}
@endpush
@push('css')
    <style>
        ul.statuslist {
            margin: 0;
            padding: 0;
            list-style: none;
            text-align: right;
        }
        ul.statuslist li {
            display: inline-block;
            position: relative;
            padding: 0 5px;
        }
        ul.statuslist li a {
            color: #009c9f;
        }
    </style>
@endpush
@section('content')
<div class="section__content">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="border-bottom: 1px solid #e3ebf3;">
                        <h4 class="card-title">Pages List</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{route('pages')}}" class="mb-2">
                                <div class="row">
                                    <div class="col-md-6 mb-1">
                                        <div class="input-group">
                                            <input type="date" name="startDate" value="{{$r->startDate?Carbon\Carbon::parse($r->startDate)->format('Y-m-d') :''}}" class="form-control {{$errors->has('startDate')?'error':''}}" />
                                            <input type="date" value="{{$r->endDate?Carbon\Carbon::parse($r->endDate)->format('Y-m-d') :''}}" name="endDate" class="form-control {{$errors->has('endDate')?'error':''}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <div class="input-group">
                                            <input type="text" name="search" value="{{$r->search?$r->search:''}}" placeholder="Page Name" class="form-control {{$errors->has('search')?'error':''}}" />
                                            <button type="submit" class="btn btn-success rounded-0">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                            <form action="{{route('pages')}}">
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
                                            <li><a href="{{route('pages')}}">All ({{$totals->total}})</a></li>
                                            <li><a href="{{route('pages',['status'=>'active'])}}">Active ({{$totals->active}})</a></li>
                                            <li><a href="{{route('pages',['status'=>'inactive'])}}">Inactive ({{$totals->inactive}})</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{route('pagesCreate')}}" class="btn btn-primary float-end mb-1">Add Page</a>
                                    </div>
                                </div>


                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="min-width: 60px;">
                                                    <label style="cursor: pointer; margin-bottom: 0;">  SL </label>
                                                </th>
                                                <th style="min-width: 300px;">Name</th>
                                                <th style="min-width: 100px; width: 100px;">Image</th>
                                                <th style="min-width: 100px; width: 100px;">Status</th>
                                                <th style="min-width: 160px; width: 160px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pages as $i=>$page)
                                            <tr>
                                                <td>
                                                    {{$page->id}}
                                                    
                                                </td>
                                                <td>
                                                    <span>
                                                        <a href="{{route('pageView',$page->slug?:'no-slug')}}" target="_blank">{{$page->name}}
                                                        </a>
                                                    
                                                    	@if($page->id==1)
                                                    	<span style="color: #ccc;">(About Us)</span>
                                                    	@elseif($page->id==2)
                                                    	<span style="color: #ccc;">(Contact Us)</span>
                                                    	@elseif($page->id==3)
                                                    	<span style="color: #ccc;">(Depertment)</span>
                                                    	@elseif($page->id==4)
                                                    	<span style="color: #ccc;">(Doctor)</span>
                                                    	@endif
                                                  </span><br />

                                                    <span style="color: #ccc;"><i class="fa fa-calendar" style="color: #1ab394;"></i> {{$page->created_at->format('d-m-Y')}}</span>
                                                    
                                                </td>
                                                <td style="padding:0 5px;text-align: center;">
                                                    <img src="{{asset(getMedia($page->id, 4, 1))}}" style="max-width: 60px;max-height: 60px;" />
                                                </td>
                                                <td>
                                                    @if($page->status=='active')
                                                    <span style="color: #00812b;">Active </span>
                                                    @elseif($page->status=='inactive')
                                                    <span style="color: #dd25057c;">Inactive </span>
                                                    @else
                                                    <span style="color: #d2e0087c;">Draft </span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('pagesEdit',$page->id)}}" class="btn btn-sm btn-info">
                                                       Edit
                                                    </a>   

                                                    
                                                    <!-- 
												    //// Permission Page Delete
                                                    --> 

                                                    @if($page->id==1 || $page->id==2 || $page->id==3 || $page->id==4 || $page->id==5 || $page->id==6 || $page->id==7 || $page->id==8 || $page->id==9) @else
                                                    
                                                     <!--<a href="{{route('pagesDelete',$page->id)}}" onclick="return confirm('Are You Want To Delete')" class="btn btn-sm btn-danger">-->
                                                     <!--  Delete-->
                                                     <!--</a> -->
                                                    @endif
                                                     <!-- 
													//// Permission Page Delete
                                                    --> 

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    {!! $pages->links() !!}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Inputs end -->
</div>

@endsection @push('js') @endpush
