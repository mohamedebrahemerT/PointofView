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
                <a href="{{url('/')}}/ACourses">{{trans('trans.Courses')}}</a>
                <i class="fa fa-circle"></i>
            </li>

        </ul>

    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-sharp">
                            <span data-counter="counterup"
                                  data-value="{{$Coursescount}}">{{$Coursescount}}</span>

                        </h3>
                        <small>{{trans('trans.courses')}}</small>
                    </div>
                    <div class="icon">
                        <i class="icon-pie-chart"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                                            <span style="width: 76%;"
                                                  class="progress-bar progress-bar-success green-sharp">
                                                <span class="sr-only"> </span>
                                            </span>
                    </div>
                    <div class="status">
                        <div class="status-title"></div>
                        <div class="status-number"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-red-haze">
                            <span data-counter="counterup"
                                  data-value="{{$UserCoursescount}}">{{$UserCoursescount}}</span>
                        </h3>
                        <small>{{trans('trans.user_courses')}}</small>
                    </div>
                    <div class="icon">
                        <i class="icon-like"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                                            <span style="width: 85%;"
                                                  class="progress-bar progress-bar-success red-haze">
                                                <span class="sr-only"> </span>
                                            </span>
                    </div>
                    <div class="status">
                        <div class="status-title"></div>
                        <div class="status-number"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-blue-sharp">
                            <span data-counter="counterup"
                                  data-value="{{$CertificateRequests}}">{{$CertificateRequests}}</span>
                        </h3>
                        <small>{{trans('trans.Certificate requests')}}</small>
                    </div>
                    <div class="icon">
                        <i class="icon-basket"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                                            <span style="width: 45%;"
                                                  class="progress-bar progress-bar-success blue-sharp">
                                                <span class="sr-only"> </span>
                                            </span>
                    </div>
                    <div class="status">
                        <div class="status-title"></div>
                        <div class="status-number"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-purple-soft">
                            <span data-counter="counterup"
                                  data-value="{{$CertificateRequests}}">{{$CertificateRequests}}</span>
                        </h3>
                        <small>{{trans('trans.Registered requests')}}</small>
                    </div>
                    <div class="icon">
                        <i class="icon-user"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                                            <span style="width: 57%;"
                                                  class="progress-bar progress-bar-success purple-soft">
                                                <span class="sr-only"> </span>
                                            </span>
                    </div>
                    <div class="status">
                        <div class="status-title"></div>
                        <div class="status-number"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
               <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                  {{ Form::open( ['url' => ['search_user_name'],'method'=>'post'] ) }}
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                           <h4>{{trans('trans.search_user_name')}}</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
             <label>{{trans('trans.users')}}</label>
              <select name="User_id" id="User" class="form-control" style="padding: 2px;">
               <option value="">-- اختر المتدرب --</option>
                        @foreach(App\Models\User::get() as $User)
  <option value="{{$User->id}}">
  
                                            {{$User->first_name}}
                                            {{$User->last_name}}
                                         

</option>
 @endforeach
 
</select> 
                                        </div>
                                    </div>

                                     <div class="col-md-2">
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                           <h4>{{trans('trans.search_course_name')}}</h4>
                                        </div>
                                    </div>

                                     <div class="col-md-3">
                                        <div class="form-group">
             <label>{{trans('trans.courses')}}</label>

              <select name="course_id" id="User" class="form-control" style="padding: 2px;">
               <option value="">-- اختر الدورة --</option>

                        @foreach(App\Models\Course::get() as $Course)
  <option value="{{$Course->id}}">
  
                                            {{$Course->title}}
                                            
                                         

</option>
 @endforeach
 
</select> 
                                        </div>
                                    </div>
                                     
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label></label>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="text-align: center;">
                                         <div class="form-group">
                                            <label>&nbsp;</label>
                                           <button style="" type="submit" class="btn btn-info"><i class="fa fa-search"></i>&nbsp; {{trans('trans.search')}} </button>
                                        </div>
                                    </div>
                                </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    
                        <div class="card-body">
                            <div class="d-flex no-block">
                                <div class="align-self-center">
                                   
                                    <div class="row justify-content-center">
    <div class="col-auto lblock">
        <button onclick="printDiv()" class="btn btn-dark" id="print">طباعة</button>
    </div>
</div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portlet-body" id="content">
                    
                    <table class="table table-striped table-bordered table-hover table-checkable order-column"
                           id=" ">
                        <thead>
                        <tr>
                             
          <th> {{trans('trans.user_id')}}  </th>
                            <th> {{trans('trans.course')}}  </th>
                            <th> {{trans('trans.department')}}  </th>
                            <th> {{trans('trans.img')}}  </th>




                           


           
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

    <script>
        function printDiv() {

            var divToPrint = document.getElementById('content');

            var newWin = window.open('', 'Print-Window');

            newWin.document.open();

            newWin.document.write('<html><body dir="rtl" onload="window.print()">' + divToPrint.innerHTML + '</body></html>');

            newWin.document.title = 'التقرير ';

            newWin.document.close();
            setTimeout(function () {
                newWin.close();
            }, 100000);

        }
    </script>


    @endpush

@endsection

