

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
                                    <a href="{{url('/')}}/department">{{trans('trans.Department')}}</a>
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
                                <i class="fa fa-cogs"></i> Scope of research</div>
                                <div class="actions">
                                     
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row static-info">
                                        <div class="col-md-5 name">
                                        Name: </div>
                                        <div class="col-md-7 value">
                                            {{$Department->title}}
                                        </div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name">
                                   desc :{!!$Department->desc!!}
                                     </div>
                                        
                                    </div>

                                     <div class="row static-info">
                                        <div class="col-md-5 name"> {{trans('trans.img')}} </div>
                                        <div class="col-md-7 value"> 

                                              <img src="{{url('/')}}/{{$Department->img}}"  style="width:100px;height:100px">


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

