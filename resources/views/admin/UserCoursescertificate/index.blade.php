@extends('admin.index')

@section('content')

    @push('style')

    @endpush

    @push('js')
<script type="text/javascript">
    $('.select_id').on('change', function()
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
                        <span class="caption-subject bold uppercase"> {{trans('trans.UserCoursescertificate')}}</span>
                    </div>

                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                         
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column"
                           id="sample_2">
                        <thead>
                        <tr>
                             

                            <th> {{trans('trans.user_id')}}  </th>
                            <th> {{trans('trans.course')}}  </th>
                            <th> {{trans('trans.department')}}  </th>
                            <th> {{trans('trans.img')}}  </th>

                        <td>الحالة </td>

                           


                            <th>{{trans('trans.Actions')}}  </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($UserCoursescertificate as $Course)
                            <tr class="odd gradeX">
                                  <td>
      @if($Course->user_id != null)
       {{$Course->user->first_name}}    {{$Course->user->last_name}}
      @endif
                                      </td>    

                                    <td>
       {{$Course->course->title}}
                                      </td>

                                         
                                            <td>
                                        {{$Course->course->department->title}}
                                         </td>
                                         <td>

                                          <img src="{{url('/')}}/{{$Course->course->img}}" alt="" class="img-fluid float-right ml-3" style="width:100px;height: 100px;">
                                         </td>
                                   <td>
                   <!-- Button trigger modal -->
<a type="button"   data-toggle="modal" data-target="#exampleModal{{$Course->id}}">
  @if($Course->certificate_status == 'pending')
  <span class="btn btn-primary">
      {{trans('trans.pending')}} 
  </span>
            
               @endif
                   
@if($Course->certificate_status == 'requested')
  <span class="btn btn-secondary">

                    {{trans('trans.requested')}}   
                      </span>
               @endif
                               
@if($Course->certificate_status == 'accpted')
  <span class="btn btn-success">
            {{trans('trans.accpted')}} 
                      </span>

               @endif
@if($Course->certificate_status == 'rejected')
  <span class="btn btn-danger">

             {{trans('trans.rejected')}} 
                      </span>

               @endif
                  
                                 
                    
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$Course->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">الحالة </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form role="form" action="{{url('/')}}/UserCoursescertificateSatus" method="POST" enctype="multipart/form-data">
                    @csrf
                      <input type="hidden" name="id" value="{{$Course->id}}">

            <div class="form-group">
                               <label class="control-label">{{trans('trans.certificate_status')}}</label>

                <select name="certificate_status" class="form-control select_id" required=""  >
              <option value="">{{trans('trans.certificate_status')}}</option>
                    <option value="requested" 
                     @if($Course->certificate_status == 'requested')
              selected
               @endif>
                    {{trans('trans.requested')}}              
                    </option>
                     <option value="accpted"  
 @if($Course->certificate_status == 'accpted')
              selected
               @endif
                     >
                    {{trans('trans.accpted')}}              
                    </option>
                     <option value="rejected"  
 @if($Course->certificate_status == 'rejected')
              selected
               @endif
                     >
                    {{trans('trans.rejected')}}              
                    </option>
                
                </select>
          </div>


          <div class="form-group   sdfsdf" 
          @if($Course->certificate_status !== 'accpted')
              style="display:none;"
               @endif >
                               <label class="control-label">{{trans('trans.certificate')}}</label>

                <select name="certificate_id" class="form-control">

                    <option value="">من فضلك اختار الشهادة </option>
                    @foreach(App\Models\certificate::get() as $certificate)
                    <option value="{{$certificate->id}}" 
                
             @if($Course->certificate_id == $certificate->id)
            selected
             @endif
                        >
                      
                               {{$certificate->name}} 
                               
                                 
                    </option>
                    @endforeach
                    
                </select>
          </div>
                
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> غلق </button>
        <button type="submit" class="btn btn-primary">{{trans('trans.save')}}</button>
                                                            </form>

      </div>
    </div>
  </div>
</div>
               </td>


                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false"> {{trans('trans.Actions')}}
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">

                                             @if($Course->certificate_status == 'accpted')
               <li>
                                                <a href="{{url('/')}}/certificateadmin/{{$Course->user_courses_id}}">
                                                    <i class="icon-tag"></i>
                                                     عرض الشهادة 
                                                </a>
                                            </li>
               @endif

                                            

                                            <li>
                                                <a href="{{url('/')}}/UserCoursescertificate/{{$Course->id}}">
                                                    <i class="icon-tag"></i>
                                                    {{trans('trans.show details')}}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{url('/')}}/UserCoursescertificate/{{$Course->id}}/edit">
                                                    <i class="icon-docs"></i>
                                                    {{trans('trans.edit')}}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{url('/')}}/UserCoursescertificate/{{$Course->id}}/destroy">
                                                    <i class="icon-tag"></i>
                                                    {{trans('trans.delete')}}
                                                </a>
                                            </li>


                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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

