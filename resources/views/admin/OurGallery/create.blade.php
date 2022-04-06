

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
                                    <a href="{{url('/')}}/OurGallery">{{trans('trans.OurGallery')}}</a>
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
                  <form role="form" action="{{url('/')}}/OurGallery" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                     <div class="form-group">
                               <label class="control-label">{{trans('trans.title')}}</label>
              <input type="text" placeholder="{{trans('trans.title')}}" class="form-control"    name="title"  required=""/> 
          </div>
 

                <div class="form-group">
                               <label class="control-label">{{trans('trans.img')}}</label>
              <input type="file" placeholder="{{trans('trans.img')}}" class="form-control"    name="img"  required=""/> 
          </div> 
                     


  <div class="form-group">
              <label class="control-label">Photo category</label>

                <select name="photocategories_id" class="form-control">
                    @foreach(App\Models\Photocategories::get() as $Photocateg)
                    <option value="{{$Photocateg->id}}">
                      
                               {{$Photocateg->title}} 
                               
                                 
                    </option>
                    @endforeach
                    
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

