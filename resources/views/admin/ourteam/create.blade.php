

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
                                            <span class="caption-subject bold uppercase"> {{trans('trans.create')}}</span>
                                        </div>
                                         
                                    </div>
                                   <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <!-- PERSONAL INFO TAB -->
                                                        <div class="tab-pane active" id="tab_1_1">
                  <form role="form" action="{{url('/')}}/ourteams" method="POST" enctype="multipart/form-data">
                    @csrf
                   
 

 <div class="form-group">
                               <label class="control-label">{{trans('trans.name')}}</label>
              <input type="text" placeholder="{{trans('trans.name')}}" class="form-control"    name="name"   /> 
          </div>

         <div class="form-group">
                               <label class="control-label">{{trans('trans.jobtitle')}}</label>
              <input type="text" placeholder="{{trans('trans.jobtitle')}}" class="form-control"    name="jobtitle"   /> 
          </div>


         <div class="form-group">
                               <label class="control-label">{{trans('trans.linkedin_link')}}</label>
              <input type="text" placeholder="{{trans('trans.linkedin_link')}}" class="form-control"    name="linkedin_link"   /> 
          </div>


         <div class="form-group">
                               <label class="control-label">{{trans('trans.email')}}</label>
              <input type="text" placeholder="{{trans('trans.email')}}" class="form-control"    name="email"   /> 
          </div>

                  


                <div class="form-group">
                               <label class="control-label">{{trans('trans.img')}}- Width:650 px and Height:700 px</label>
              <input type="file" placeholder="{{trans('trans.slider')}}" class="form-control"    name="img"  required=""/> 
          </div>


                  

          <div class="form-group">
            <button type="submit" class="btn green-meadow">{{trans('trans.save')}}</button>
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

