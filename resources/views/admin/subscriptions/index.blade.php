

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
                                    <a href="{{url('/')}}/subscriptions">{{trans('trans.subscriptions')}}</a>
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
                                            <span class="caption-subject bold uppercase"> {{trans('trans.subscriptions')}}</span>
                                        </div>

                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            <div class="row">
                                                <div class="col-md-12">
{{--                                                    <div class="btn-group">--}}
{{--                 <a id="sample_editable_1_new" class="btn sbold green" href="{{url('/')}}/subscriptionss/create"> {{trans('trans.Add New')}}--}}
{{--                                                            <i class="fa fa-plus"></i>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
                                                </div>

                                            </div>
                                        </div >
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                            <thead>
                                                <tr>
                                                   <th>#</th>
                                          <th> {{trans('trans.email')}}  </th>





                                                    <th>{{trans('trans.Actions')}}  </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            	@foreach($subscriptions as $subs)
                                                <tr class="odd gradeX">
                                                      <td>
                                                          {{$subs->id}}

                                                       </td>
                                                    <td>
                                                          {{$subs->email}}

                                                       </td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> {{trans('trans.Actions')}}
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">


                                                              
                                                                <li>
                                              <a href="{{url('/')}}/subscriptions/{{$subs->id}}/destroy">
                                                                        <i class="icon-tag"></i>
                                     {{trans('trans.delete')}}
                                                                         </a>
                                                                </li>



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

