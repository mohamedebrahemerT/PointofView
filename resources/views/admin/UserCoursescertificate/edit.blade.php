

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
                                    <a href="{{url('/')}}/UserCoursescertificate">{{trans('trans.UserCoursescertificate')}}</a>
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
                  <form role="form" action="{{url('/')}}/UserCoursescertificate/{{$UserCoursescertificate->id}}" method="POST" enctype="multipart/form-data">
 					@csrf
 					{{ method_field('PATCH') }}

                             <input type="hidden" name="id" value="{{$UserCoursescertificate->id}}">

                    <input type="hidden" name="course_id" value="{{$UserCoursescertificate->course_id}}">

 					<input type="hidden" name="user_id" value="{{$UserCoursescertificate->user_id}}">


     <div class="form-group">
                               <label class="control-label">{{trans('trans.National_ID')}}</label>
              <input type="text" placeholder="{{trans('trans.National_ID')}}" class="form-control"    name="National_ID"  value="{{$UserCoursescertificate->National_ID}}"  /> 
          </div>

           <div class="form-group">
                               <label class="control-label">{{trans('trans.name_ar')}}</label>
              <input type="text" placeholder="{{trans('trans.name_ar')}}" class="form-control"    name="name_ar"  value="{{$UserCoursescertificate->name_ar}}"  /> 
          </div>

            <div class="form-group">
                               <label class="control-label">{{trans('trans.name_en')}}</label>
              <input type="text" placeholder="{{trans('trans.name_en')}}" class="form-control"    name="name_en"  value="{{$UserCoursescertificate->name_en}}"  /> 
          </div>

          <div class="form-group">
                               <label class="control-label">{{trans('trans.nationaly')}}</label>
              <input type="text" placeholder="{{trans('trans.nationaly')}}" class="form-control"    name="nationaly"  value="{{$UserCoursescertificate->nationaly}}"  /> 
          </div>

          <div class="form-group">
                               <label class="control-label">{{trans('trans.Qualification')}}</label>
              <input type="text" placeholder="{{trans('trans.Qualification')}}" class="form-control"    name="Qualification"  value="{{$UserCoursescertificate->Qualification}}"  /> 
          </div>

          <div class="form-group">
                               <label class="control-label">{{trans('trans.phone')}}</label>
              <input type="text" placeholder="{{trans('trans.phone')}}" class="form-control"    name="phone"  value="{{$UserCoursescertificate->phone}}"  /> 
          </div>

           <div class="form-group">
                               <label class="control-label">{{trans('trans.sex')}}</label>
              <input type="text" placeholder="{{trans('trans.sex')}}" class="form-control"    name="sex"  value="{{$UserCoursescertificate->sex}}"  /> 
          </div>

            <div class="form-group">
                               <label class="control-label">{{trans('trans.org_num')}}</label>
              <input type="text" placeholder="{{trans('trans.org_num')}}" class="form-control"    name="org_num"  value="{{$UserCoursescertificate->org_num}}"  /> 
          </div>

           <div class="form-group">
                               <label class="control-label">{{trans('trans.Where_Didyou_SeeThe_Address')}}</label>
              <input type="text" placeholder="{{trans('trans.Where_Didyou_SeeThe_Address')}}" class="form-control"    name="Where_Didyou_SeeThe_Address"  value="{{$UserCoursescertificate->Where_Didyou_SeeThe_Address}}"  /> 
          </div>
 
  

          <div class="form-group">
                               <label class="control-label">{{trans('trans.img')}}</label>

<input type="file" placeholder="{{trans('trans.UserCoursescertificate')}}" class="form-control" name="img" /> 

                               <br>
              <img src="{{url('/')}}/{{$UserCoursescertificate->course->img}}" alt="" class="img-fluid float-right ml-3" style="width:100px;height: 100px;">
          </div>

          


  <div class="form-group">
                               <label class="control-label">{{trans('trans.course')}}</label>

                <select name="department_id" class="form-control">
                    @foreach(App\Models\Course::get() as $Course)
                    <option value="{{$Course->id}}" 
                
             @if($UserCoursescertificate->course->id == $Course->id)
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
                
             @if($UserCoursescertificate->user->id == $User->id)
            selected
             @endif
                        >
                      
                               {{$User->first_name}}  {{$User->last_name}} 
                               
                                 
                    </option>
                    @endforeach
                    
                </select>
          </div>

          
 
            <div class="form-group">
                               <label class="control-label">{{trans('trans.certificate_status')}}</label>

                <select name="certificate_status" class="form-control" required="" id="select_id">
              <option value="">{{trans('trans.certificate_status')}}</option>
                    <option value="requested" 
                     @if($UserCoursescertificate->certificate_status == 'requested')
              selected
               @endif>
                    {{trans('trans.requested')}}              
                    </option>
                     <option value="accpted"  
 @if($UserCoursescertificate->certificate_status == 'accpted')
              selected
               @endif
                     >
                    {{trans('trans.accpted')}}              
                    </option>
                     <option value="rejected"  
 @if($UserCoursescertificate->certificate_status == 'rejected')
              selected
               @endif
                     >
                    {{trans('trans.rejected')}}              
                    </option>
                
                </select>
          </div>


          <div class="form-group   sdfsdf" style="display:none;">
                               <label class="control-label">{{trans('trans.certificate')}}</label>

                <select name="certificate_id" class="form-control">

                    <option value="">من فضلك اختار الشهادة </option>
                    @foreach(App\Models\certificate::get() as $certificate)
                    <option value="{{$certificate->id}}" 
                
             @if($UserCoursescertificate->certificate == $certificate->id)
            selected
             @endif
                        >
                      
                               {{$certificate->name}} 
                               
                                 
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

