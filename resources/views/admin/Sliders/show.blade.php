

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
                                    <a href="{{url('/')}}/Sliders">{{trans('trans.Sliders')}}</a>
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
                                            <span class="caption-subject bold uppercase"> {{trans('trans.show')}}</span>
                                        </div>
                                         
                                    </div>
                                   <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <!-- PERSONAL INFO TAB -->
                                                        <div class="tab-pane active" id="tab_1_1">
                  <form role="form" action="{{url('/')}}/Sliders/{{$Slider->id}}" method="POST" enctype="multipart/form-data">
 					@csrf
 					{{ method_field('PATCH') }}

 					 <div class="row">

                           
                <div class="col-md-6 col-sm-12">
                    <div class="portlet blue-hoki box">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i> معلومات السليدر 
 </div>
                                <div class="actions">
                                    
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row static-info">
                                        <div class="col-md-5 name">  {{trans('trans.title')}} : </div>
                                        <div class="col-md-7 value">{{$Slider->title}}</div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name">  {{trans('trans.desc')}}</div>
                                        <div class="col-md-7 value"> 
{!!$Slider->desc!!}
                                        </div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name"> {{trans('trans.url')}} </div>
                                        <div class="col-md-7 value"> {{$Slider->url}} </div>
                                    </div> 

                                    <div class="row static-info">
                                        <div class="col-md-5 name"> {{trans('trans.slider')}} </div>
                                        <div class="col-md-7 value"> 

                                              <img src="{{url('/')}}/{{$Slider->img}}"  style="width:100px;height:100px">


                                        </div>
                                    </div> 
                                                                </div>
                                                            </div>
                                                        </div>
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
