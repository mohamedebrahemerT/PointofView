

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
                                    <a href="{{url('/')}}/Departments">{{trans('trans.Department')}}</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                 
                            </ul>
                            
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                      <div class="col-md-12 col-sm-12">
                    <div class="portlet blue-hoki box">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>معلومات  القسم </div>
                                <div class="actions">
                                     
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row static-info">
                                        <div class="col-md-5 name"> الاسم : </div>
                                        <div class="col-md-7 value">
                                            {{$Department->name}}
                                        </div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name">
                                        عدد الكورسات
                                     </div>
                                        
                                    </div>
                                     
                                                                
                                                                </div>
                                                            </div>
                                                        </div>
 
                        
                    </div>
                    <!-- END CONTENT BODY -->
                @push('js')
            
 
 
                @endpush

  @endsection

