

@extends('admin.index')

@section('content')

@push('js')
<script type="text/javascript">
    $('#select_id').on('change', function()
{
     if (this.value == 'accpted') 
     {
            
          $('.sdfsdf').show();
     } 
     else
     {
          
          $('.sdfsdf').hide(); 
     }
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
                                    <a href="{{url('/')}}/UserCourses">{{trans('trans.UserCourses')}}</a>
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
                  <form role="form" action="{{url('/')}}/UserCourses/{{$UserCourses->id}}" method="POST" enctype="multipart/form-data">
 					@csrf
 					{{ method_field('PATCH') }}

                             <input type="hidden" name="id" value="{{$UserCourses->id}}">

                    <input type="hidden" name="course_id" value="{{$UserCourses->course_id}}">

 					<input type="hidden" name="user_id" value="{{$UserCourses->user_id}}">


     <div class="form-group">
                               <label class="control-label">{{trans('trans.National_ID')}}</label>
              <input type="text" placeholder="{{trans('trans.National_ID')}}" class="form-control"    name="National_ID"  value="{{$UserCourses->National_ID}}"  /> 
          </div>

           <div class="form-group">
                               <label class="control-label">{{trans('trans.name_ar')}}</label>
              <input type="text" placeholder="{{trans('trans.name_ar')}}" class="form-control"    name="name_ar"  value="{{$UserCourses->name_ar}}"  /> 
          </div>

            <div class="form-group">
                               <label class="control-label">{{trans('trans.name_en')}}</label>
              <input type="text" placeholder="{{trans('trans.name_en')}}" class="form-control"    name="name_en"  value="{{$UserCourses->name_en}}"  /> 
          </div>

          <div class="form-group">
                               <label class="control-label">{{trans('trans.nationaly')}}</label>
              <input type="text" placeholder="{{trans('trans.nationaly')}}" class="form-control"    name="nationaly"  value="{{$UserCourses->nationaly}}"  /> 
          </div>

          <div class="form-group">
                               <label class="control-label">{{trans('trans.Qualification')}}</label>
              <input type="text" placeholder="{{trans('trans.Qualification')}}" class="form-control"    name="Qualification"  value="{{$UserCourses->Qualification}}"  /> 
          </div>

          <div class="form-group">
                               <label class="control-label">{{trans('trans.phone')}}</label>
              <input type="text" placeholder="{{trans('trans.phone')}}" class="form-control"    name="phone"  value="{{$UserCourses->phone}}"  /> 
          </div>

           <div class="form-group">
                               <label class="control-label">{{trans('trans.sex')}}</label>
              <input type="text" placeholder="{{trans('trans.sex')}}" class="form-control"    name="sex"  value="{{$UserCourses->sex}}"  /> 
          </div>

            <div class="form-group">
                               <label class="control-label">{{trans('trans.org_num')}}</label>
              <input type="text" placeholder="{{trans('trans.org_num')}}" class="form-control"    name="org_num"  value="{{$UserCourses->org_num}}"  /> 
          </div>

           <div class="form-group">
                               <label class="control-label">{{trans('trans.Where_Didyou_SeeThe_Address')}}</label>
              <input type="text" placeholder="{{trans('trans.Where_Didyou_SeeThe_Address')}}" class="form-control"    name="Where_Didyou_SeeThe_Address"  value="{{$UserCourses->Where_Didyou_SeeThe_Address}}"  /> 
          </div>
 
  

          <div class="form-group">
                               <label class="control-label">{{trans('trans.img')}}</label>

<input type="file" placeholder="{{trans('trans.UserCourses')}}" class="form-control" name="img" /> 

                               <br>
              <img src="{{url('/')}}/{{$UserCourses->course->img}}" alt="" class="img-fluid float-right ml-3" style="width:100px;height: 100px;">
          </div>

          


  <div class="form-group">
                               <label class="control-label">{{trans('trans.course')}}</label>

                <select name="department_id" class="form-control">
                    @foreach(App\Models\Course::get() as $Course)
                    <option value="{{$Course->id}}" 
                
             @if($UserCourses->course->id == $Course->id)
            selected
             @endif
                        >
                      
                               {{$Course->title}} 
                               
                                 
                    </option>
                    @endforeach
                    
                </select>
          </div>


          <div class="form-group">
                               <label class="control-label">{{trans('trans.user')}}</label>

                <select name="user_id" class="form-control">
                    @foreach(App\Models\User::get() as $User)
                    <option value="{{$User->id}}" 
                
             @if($UserCourses->user->id == $User->id)
            selected
             @endif
                        >
                      
                               {{$User->first_name}}  {{$User->last_name}} 
                               
                                 
                    </option>
                    @endforeach
                    
                </select>
          </div>

          <div class="form-group">
                               <label class="control-label">{{trans('trans.status')}}</label>

                <select name="status" class="form-control" required="">
                   <option value="">{{trans('trans.status')}}</option>
              <option  value="pending" 
              @if($UserCourses->status == 'pending')
              selected
               @endif
              >
                    {{trans('trans.pending')}}              
                    </option>

                    <option value="accepted"
@if($UserCourses->status == 'accepted')
              selected
               @endif
                    >
                    {{trans('trans.accepted')}}              
                    </option>

                      <option value="completed"  
@if($UserCourses->status == 'completed')
              selected
               @endif
                      >
                    {{trans('trans.completed')}}              
                    </option>

                    <option value="canceled"  

@if($UserCourses->status == 'canceled')
              selected
               @endif
                    >
                    {{trans('trans.canceled')}}              
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

