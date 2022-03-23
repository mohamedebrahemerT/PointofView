@extends('admin.index')

@section('content')





    <!-- END THEME PANEL -->
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{url('/')}}">{{trans('trans.Home')}}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{{url('/')}}/users">{{trans('trans.users')}}</a>
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
                        <span class="caption-subject bold uppercase"> {{trans('trans.user details')}}</span>
                    </div>

                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        <!-- PERSONAL INFO TAB -->
                        <div class="tab-pane active" id="tab_1_1">
                            <form role="form" action="#">


                                <div class="form-group">
                                    <label class="control-label">{{trans('trans.first name')}}</label>
                                    <input type="text" placeholder="{{trans('trans.first name')}}" class="form-control"
                                           value="{{$user->first_name}}" readonly=""/>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">{{trans('trans.last name')}}</label>
                                    <input type="text" placeholder="{{trans('trans.first name')}}" class="form-control"
                                           value="{{$user->last_name}}" readonly=""/>
                                </div>

                                 

                                <div class="form-group">
                                    <label class="control-label">{{trans('trans.email')}}</label>
                                    <input type="text" placeholder="{{trans('trans.email')}}" class="form-control"
                                           value="{{$user->email}}" readonly=""/>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">{{trans('trans.phone')}}</label>
                                    <input type="text" placeholder="{{trans('trans.phone')}}" class="form-control"
                                           value="{{$user->phone}}" readonly=""/>
                                </div>

                           

                            </form>
                        </div>

                    </div>
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

