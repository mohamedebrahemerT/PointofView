

@extends('admin.index')

@section('content')

@push('js')
            <script>
 
                

                CKEDITOR.replace( 'desc' , {

        language: 'ar',

});
 

            </script>

            <script>
 
                

                CKEDITOR.replace( 'what_you_will_learn' , {

        language: 'ar',

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
                  <form role="form" action="{{url('/')}}/ACourses" method="POST" enctype="multipart/form-data">
                    @csrf
                   
 
 
 



  <div class="form-group">
                               <label class="control-label">{{trans('trans.department_id')}}</label>

                <select name="department_id" class="form-control">
                    @foreach(App\Models\Department::get() as $department)
                    <option value="{{$department->id}}">
                      
                               {{$department->title}} 
                               
                                 
                    </option>
                    @endforeach
                    
                </select>
          </div>




 <div class="form-group">
                               <label class="control-label">{{trans('trans.title')}}</label>
              <input type="text" placeholder="{{trans('trans.title')}}" class="form-control"    name="title"  required="" /> 
          </div>

          <div class="form-group">
                               <label class="control-label">{{trans('trans.desc')}}</label>
                               <textarea type="text" 
                                class="form-control desc"    name="desc"required=""> </textarea>
               
          </div>

          <div class="form-group">
                               <label class="control-label">{{trans('trans.what_you_will_learn')}}</label>
                               <textarea  type="text" 
                                class="form-control what_you_will_learn"    name="what_you_will_learn" required=""> </textarea>
               
          </div>

          

                     <div class="form-group">
                               <label class="control-label">{{trans('trans.price')}}</label>
              <input type="number" placeholder="{{trans('trans.price')}}" class="form-control"    name="price"  required="" /> 
          </div>


  <div class="form-group">
                               <label class="control-label">{{trans('trans.lang')}}</label>
              <input type="text" placeholder="{{trans('trans.lang')}}" class="form-control"    name="lang"   required=""/> 
          </div>

          <div class="form-group">
                               <label class="control-label">{{trans('trans.duration')}}</label>
              <input type="number" placeholder="{{trans('trans.duration')}}" class="form-control"    name="duration"  required="" /> 
          </div>

              

                <div class="form-group">
                               <label class="control-label">{{trans('trans.img')}}</label>
              <input type="file" placeholder="{{trans('trans.img')}}" class="form-control"    name="img"  required=""/> 
          </div>


                   


  <div class="form-group">
                               <label class="control-label">{{trans('trans.certificate')}}</label>

                <select name="certificate" class="form-control" required="">
                   
                    <option value="1">
                    {{trans('trans.yes')}}              
                    </option>

                     <option value="2">
                    {{trans('trans.no')}}              
                    </option>
                   
                    
                </select>
          </div>

            <div class="form-group">
                               <label class="control-label">{{trans('trans.registered_users_count_status')}}</label>

                <select name="registered_users_count_status" class="form-control" required="">
                   
                    <option value="1">
                    {{trans('trans.yes')}}              
                    </option>

                     <option value="2">
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

