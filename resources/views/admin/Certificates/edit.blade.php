

@extends('admin.index')

@section('content')

  
@push('js')
            <script>
 
                

                CKEDITOR.replace( 'content' , {

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
                                    <a href="{{url('/')}}/Certificate">{{trans('trans.Certificate')}}</a>
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
                                            <span class="caption-subject bold uppercase"> {{trans('trans.edit')}}</span>
                                        </div>
                                         
                                    </div>
                                   <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <!-- PERSONAL INFO TAB -->
                                                        <div class="tab-pane active" id="tab_1_1">
                  <form role="form" action="{{url('/')}}/Certificate/{{$Certificate->id}}" method="POST" enctype="multipart/form-data">
 					@csrf
 					{{ method_field('PATCH') }}

 					<input type="hidden" name="id" value="{{$Certificate->id}}">

 <div class="form-group">
                               <label class="control-label">{{trans('trans.name')}}</label>
              <input type="text" placeholder="{{trans('trans.name')}}" class="form-control"    name="name"  value="{{$Certificate->name}}"  /> 
          </div>

          <div class="form-group">
                               <label class="control-label">{{trans('trans.content')}}</label>
              

              <textarea type="text" 
                                class="form-control content"    name="content"> 
                            {{$Certificate->content}}</textarea> 
          </div>

    <select name="status" class="form-control" required="">
                   
                    <option value="1" @if($Certificate->status == 1) selected @endif>
                    {{trans('trans.active')}}              
                    </option>

                     <option value="0" @if($Certificate->status == 0) selected @endif>
                    {{trans('trans.notactive')}}              
                    </option>
                   
                    
                </select>

                      <br>
                
         
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

