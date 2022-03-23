@extends('admin.index')

@section('content')




    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{url('/')}}">{{trans('trans.Home')}}</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>{{trans('trans.Dashboard')}}</span>
            </li>
        </ul>

    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title">{{trans('trans.Dashboard')}}
        <small>{{trans('trans.Dashboard')}} & {{trans('trans.statistics')}} </small>
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-sharp">
                            <span data-counter="counterup"
                                  data-value="{{App\Models\User::count()}}">{{App\Models\User::count()}}</span>

                        </h3>
                        <small>{{trans('trans.users')}}</small>
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
                                  data-value="{{App\Models\Course::count()}}">{{App\Models\Course::count()}}</span>
                        </h3>
                        <small>{{trans('trans.courses')}}</small>
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
                                  data-value="{{App\Models\Department::count()}}">{{App\Models\Department::count()}}</span>
                        </h3>
                        <small>{{trans('trans.Department')}}</small>
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
                                  data-value="{{App\Models\UserCourses::count()}}">{{App\Models\UserCourses::count()}}</span>
                        </h3>
                        <small>{{trans('trans.UserCourses')}}</small>
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
    <h1 class="page-title">{{trans('trans.orders')}}
        <small>آخر 10 طلبات </small>
    </h1>

    <div class="row">
        <div class="col-lg-12 col-md-12col-sm-12 col-xs-12">


            <table class="table table-striped table-bordered table-hover table-checkable order-column">
                <thead>
                <tr>
                    <th>#</th>
                    <th> {{trans('trans.user_id')}}  </th>
                    <th>القسم</th>
                    <th>الكورس</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $UserCourses=App\Models\UserCourses::get();
                @endphp
                @foreach($UserCourses as $Course)

                    <tr class="odd gradeX">
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if($Course->user_id != null)
                                {{$Course->user->first_name}}    {{$Course->user->last_name}}
                            @endif
                        </td>
                        <td>
                            {{$Course->course->department->title}}
                        </td>
                        <td>
                            {{$Course->course->title}}
                        </td>
                    </tr>



                @endforeach
                </tbody>
            </table>
        </div>


    </div>
    </div>


    </div>
    <!-- END CONTENT BODY -->


@endsection

