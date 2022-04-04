

@extends('admin.index')

@section('content')

  
            @push('js')
       

            <script>

                // Replace the <textarea id="editor1"> with a CKEditor

                // instance, using default configuration.

                CKEDITOR.replace( 'reply' , {

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
                                    <a href="{{url('/')}}/ContactUs">{{trans('trans.ContactUs')}}</a>
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
                  <form role="form" action="{{url('/')}}/ContactUs" method="POST" enctype="multipart/form-data">
                    @csrf
                   
 


                     <div class="form-group">
                               <label class="control-label">{{trans('trans.name')}}</label>
              <input type="text" placeholder="{{trans('trans.name')}}" class="form-control"    name="name"  value="{{$Contacts->name}}" readonly="" /> 
          </div>



          <div class="form-group">
                               <label class="control-label">{{trans('trans.email')}}</label>
              <input type="text" placeholder="{{trans('trans.email')}}" class="form-control"    name="email"  value="{{$Contacts->email}}"readonly=""  /> 
          </div>


   <div class="form-group">
                               <label class="control-label">{{trans('trans.phone')}}</label>
              <input type="text" placeholder="{{trans('trans.phone')}}" class="form-control"    name="phone"  value="{{$Contacts->phone}}" readonly="" /> 
          </div>
            

              <div class="form-group">
                               <label class="control-label">{{trans('trans.subject')}}</label>
              <input type="text" placeholder="{{trans('trans.content')}}" class="form-control"    name="content"  value="{{$Contacts->content}}" readonly="" /> 
          </div>
            

             
            
             <div class="form-group">
                               <label class="control-label">{{trans('trans.reply')}}</label>

              <textarea class="form-control"  name="reply" class="form-control reply"> 
                  
              </textarea>

          </div>
            


                 

          <div class="form-group">
            <button type="submit" class="btn green-meadow">{{trans('trans.reply')}}</button>
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
