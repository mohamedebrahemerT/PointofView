@extends('admin.index')

@section('content')

    @push('style')

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
                        <span class="caption-subject bold uppercase"> {{trans('trans.UserCourses')}}</span>
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

                        @foreach($UserCourses as $Course)
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
  @if($Course->status == 'pending')
  <span class="btn btn-primary">
      {{trans('trans.pending')}} 
  </span>
            
               @endif
                   
@if($Course->status == 'accepted')
  <span class="btn btn-secondary">

                    {{trans('trans.accepted')}}   
                      </span>
               @endif
                               
@if($Course->status == 'completed')
  <span class="btn btn-success">
            {{trans('trans.completed')}} 
                      </span>

               @endif
@if($Course->status == 'canceled')
  <span class="btn btn-danger">

             {{trans('trans.canceled')}} 
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

        <form role="form" action="{{url('/')}}/UserCoursesSatus" method="POST" enctype="multipart/form-data">
                    @csrf
                      <input type="hidden" name="id" value="{{$Course->id}}">

           <div class="form-group">
                               <label class="control-label">{{trans('trans.status')}}</label>

                <select name="status" class="form-control" required="">
                   <option value="">{{trans('trans.status')}}</option>
              <option  value="pending" 
              @if($Course->status == 'pending')
              selected
               @endif
              >
                    {{trans('trans.pending')}}              
                    </option>

                    <option value="accepted"
@if($Course->status == 'accepted')
              selected
               @endif
                    >
                    {{trans('trans.accepted')}}              
                    </option>

                      <option value="completed"  
@if($Course->status == 'completed')
              selected
               @endif
                      >
                    {{trans('trans.completed')}}              
                    </option>

                    <option value="canceled"  

@if($Course->status == 'canceled')
              selected
               @endif
                    >
                    {{trans('trans.canceled')}}              
                    </option>                  
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
 


 
                                            <li>
                                                <a href="{{url('/')}}/UserCourses/{{$Course->id}}">
                                                    <i class="icon-tag"></i>
                                                    {{trans('trans.show details')}}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{url('/')}}/UserCourses/{{$Course->id}}/edit">
                                                    <i class="icon-docs"></i>
                                                    {{trans('trans.edit')}}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{url('/')}}/UserCourses/{{$Course->id}}/destroy">
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

