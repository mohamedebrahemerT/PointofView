

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
                                    <a href="{{url('/')}}/ACourses">{{trans('trans.Courses')}}</a>
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
                                <i class="fa fa-cogs"></i>name</div>
                                <div class="actions">
                                     
                                    </div>
                                </div>
                                <div class="portlet-body">

                                    <div class="row static-info">
                                        <div class="col-md-5 name"> Name : </div>
                                        <div class="col-md-7 value">
                                            {{$Course->title}}
                                        </div>
                                    </div>

                                      

                                     <div class="row static-info">
                                        <div class="col-md-5 name">Parent : </div>
                                        <div class="col-md-7 value">
                                           {{$Course->department->title}}
                                        </div>
                                    </div>

                                   
                              
                                     <div class="row static-info">
                                        <div class="col-md-5 name"> Photo  :</div>
                                        <div class="col-md-7 value">
                                             
                                    <img src="{{url('/')}}/{{$Course->img}}" style="width:100px;height: 100px;">
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

