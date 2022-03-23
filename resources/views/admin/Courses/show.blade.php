

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
                                <i class="fa fa-cogs"></i>معلومات  الكورس </div>
                                <div class="actions">
                                     
                                    </div>
                                </div>
                                <div class="portlet-body">

                                    <div class="row static-info">
                                        <div class="col-md-5 name"> الاسم : </div>
                                        <div class="col-md-7 value">
                                            {{$Course->title}}
                                        </div>
                                    </div>

                                      

                                     <div class="row static-info">
                                        <div class="col-md-5 name">التصنيف : </div>
                                        <div class="col-md-7 value">
                                           {{$Course->department->title}}
                                        </div>
                                    </div>

                                      <div class="row static-info">
                                        <div class="col-md-5 name"> السعر :</div>
                                        <div class="col-md-7 value">
                                           {{$Course->price}}
                                        </div>
                                    </div>

                                      <div class="row static-info">
                                        <div class="col-md-5 name">لاشخاص المسجلين:</div>
                                        <div class="col-md-7 value">
                                           {{$Course->registered_users_count}}
                                        </div>
                                    </div>

                                    <div class="row static-info">
                                        <div class="col-md-5 name">اللغة :</div>
                                        <div class="col-md-7 value">
                                           {{$Course->lang}}
                                        </div>
                                    </div>

                                       <div class="row static-info">
                                        <div class="col-md-5 name"> {{trans('trans.duration')}} :</div>
                                        <div class="col-md-7 value">
                                           {{$Course->duration}} ايام
                                        </div>
                                    </div>

                                    <div class="row static-info">
                                        <div class="col-md-5 name">  شهادة اتمام الدورة  :</div>
                                        <div class="col-md-7 value">
                                             @if($Course->certificate == 1)
                                 شهادة اتمام الدورة  
                                @endif
                                        </div>
                                    </div>

                                     <div class="row static-info">
                                        <div class="col-md-5 name"> الصورة  :</div>
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

