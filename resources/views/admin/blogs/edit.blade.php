

@extends('admin.index')

@section('content')

  
 @push('js')
            <script>
 
                   CKEDITOR.replace( 'title' , {

        language: 'en',

});

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
                                            <span class="caption-subject bold uppercase"> {{trans('trans.edit')}}</span>
                                        </div>
                                         
                                    </div>
                                   <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <!-- PERSONAL INFO TAB -->
                                                        <div class="tab-pane active" id="tab_1_1">
                  <form role="form" action="{{url('/')}}/news/{{$blog->id}}" method="POST" enctype="multipart/form-data">
 					@csrf
 					{{ method_field('PATCH') }}

 					<input type="hidden" name="id" value="{{$blog->id}}">

                    <div class="form-group">
                               <label class="control-label">main title</label>
              <input type="text" placeholder="maintitle" class="form-control"    name="maintitle"  value="{{$blog->maintitle}}"  /> 
          </div>

 <div class="form-group">
                               <label class="control-label">{{trans('trans.title')}}</label>

<textarea type="text" 
                                class="form-control title"    name="title"> 
                            {{$blog->title}}</textarea> 
 
          </div>

          <div class="form-group">
                               <label class="control-label">{{trans('trans.desc')}}</label>
              

              <textarea type="text" 
                                class="form-control desc"    name="desc"> 
                            {{$blog->desc}}</textarea> 
          </div>

 
         
  

          <div class="form-group">
                               <label class="control-label">{{trans('trans.img')}} - Width:1110 px and Height:440 px</label>

<input type="file" placeholder="{{trans('trans.blog')}}" class="form-control" name="img" /> 

                               <br>
              <img src="{{url('/')}}/{{$blog->img}}"  style="width:200px;height:200px">
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

