@extends('admin.index')

@section('content')

    @push('style')

    @endpush




    <!-- END THEME PANEL -->
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{url('/')}}">{{trans('trans.Home')}}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{{url('/')}}/news">{{trans('trans.news')}}</a>
                <i class="fa fa-circle"></i>
            </li>

        </ul>

    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> {{trans('trans.ourteam')}}</span>
                    </div>

                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="btn-group">
                                    <a href="{{url('/')}}/ourteams/create" id="sample_editable_1_new"
                                       class="btn sbold green"> {{trans('trans.Add New')}}
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column"
                           id="sample_1">
                        <thead>
                        <tr>
                             

                            <th> # </th>
                            <th> {{trans('trans.name')}}  </th>
                            <th> {{trans('trans.jobtitle')}}  </th>
                            <th> {{trans('trans.img')}}  </th>


                           


                            <th>{{trans('trans.Actions')}}  </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($ourteams as $ourteam)
                            <tr class="odd gradeX">
                            <th> {{$ourteam->id}} </th>
                            <th> {{$ourteam->name}} </th>
                            <th> {{$ourteam->jobtitle}} </th>
                                
                                <td>

                                    <img src="{{url('/')}}/{{$ourteam->img}}" style="width:50px;height: 50px;">
                                </td>

                                 


                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false"> {{trans('trans.Actions')}}
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">

                                            <li>
                                                <a href="{{url('/')}}/ourteams/{{$ourteam->id}}">
                                                    <i class="icon-tag"></i>
                                                    {{trans('trans.show details')}}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{url('/')}}/ourteams/{{$ourteam->id}}/edit">
                                                    <i class="icon-docs"></i>
                                                    {{trans('trans.edit')}}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{url('/')}}/ourteams/{{$ourteam->id}}/destroy">
                                                    <i class="icon-tag"></i>
                                                    {{trans('trans.delete')}}
                                                </a>
                                            </li >


                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>


    </div>
    <!-- END CONTENT BODY -->
    @push('js')


    @endpush

@endsection

