

@extends('admin.index')

@section('content')

@push('js')
            <script>
 
                

                CKEDITOR.replace( 'desc' , {

        language: 'en',

});
 

            </script>
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
                                            <span class="caption-subject bold uppercase"> {{trans('trans.create')}}</span>
                                        </div>
                                         
                                    </div>
                                   <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <!-- PERSONAL INFO TAB -->
                                                        <div class="tab-pane active" id="tab_1_1">
                  <form role="form" action="{{url('/')}}/Sliders" method="POST" enctype="multipart/form-data">
                    @csrf
                   
 

 <div class="form-group">
                               <label class="control-label">{{trans('trans.title')}}</label>
              <input type="text" placeholder="{{trans('trans.title')}}" class="form-control"    name="title"   /> 
          </div>

          <div class="form-group">
                               <label class="control-label">{{trans('trans.desc')}}</label>
                               <textarea type="text" 
                                class="form-control desc"    name="desc"> </textarea>
               
          </div>

                     <div class="form-group">
                               <label class="control-label">{{trans('trans.url')}}</label>
              <input type="text" placeholder="{{trans('trans.url')}}" class="form-control"    name="url"   /> 
          </div>

              


                <div class="form-group">
                               <label class="control-label">{{trans('trans.slider')}} - Width:1920 px and Height:1080 px  </label>
              <input type="file" placeholder="{{trans('trans.slider')}}" class="form-control"    name="img"  required=""/> 
          </div>


          <div class="form-group">
           <label class="control-label">READ MORE text</label>
              <input type="text" placeholder="READ MORE text" class="form-control"    name="READ_MORE_text"   /> 
          </div>

              <div class="form-group">
                               <label class="control-label">Do you want to view READ MORE text </label>

                <select name="READ_MORE_visible" class="form-control" required="">
                   
                    <option value="1"  @if(old('READ_MORE_visible') == 1) selected @endif>
                    {{trans('trans.yes')}}              
                    </option>

                     <option value="0"  
                     @if(old('READ_MORE_visible') == 0) selected @endif>
                    {{trans('trans.no')}}              
                    </option>
                   
                    
                </select>
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

