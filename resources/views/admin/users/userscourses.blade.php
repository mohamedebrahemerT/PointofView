

@extends('admin.index')

@section('content')





<!-- END THEME PANEL -->
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
           <a href="{{url('/')}}">{{trans('trans.Home')}}</a>
           <i class="fa fa-circle"></i>
       </li>
       <li>
        <a href="{{url('/')}}/Services">{{trans('trans.Services')}}</a>
        <i class="fa fa-circle"></i>
    </li>

</ul>

</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->


<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- Begin: life time stats -->
        <div class="portlet light portlet-fit portlet-datatable bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">{{trans('trans.Order_id')}}  #{{$user->id}}
                        <span class="hidden-xs">|
                           

                       </span>
                   </span>
               </div>

           </div>
           <div class="portlet-body">
            <div class="tabbable-line">

                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="row">

                           
                <div class="col-md-6 col-sm-12">
                    <div class="portlet blue-hoki box">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>{{trans('trans.Customer Information')}} </div>
                                <div class="actions">
                                    <a href="{{url('/')}}/users/{{$user->id}}" class="btn btn-default btn-sm">
                                        <i class="fa fa-pencil"></i>  {{trans('trans.show')}}</a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row static-info">
                                        <div class="col-md-5 name"> {{trans('trans.name')}}: </div>
                                        <div class="col-md-7 value"> {{$user->first_name}} {{$user->last_name}}</div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name"> {{trans('trans.email')}}: </div>
                                        <div class="col-md-7 value"> {{$user->email}} </div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name"> {{trans('trans.phone')}}: </div>
                                        <div class="col-md-7 value"> {{$user->phone}} </div>
                                    </div>
                                                                    <!--div class="row static-info">
                                                                        <div class="col-md-5 name"> Phone Number: </div>
                                                                        <div class="col-md-7 value"> 12234389 </div>
                                                                    </div -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                   @if($UserCourses->count()  > 0)
                                                   <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="portlet grey-cascade box">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                 <i class="fa fa-cogs"></i>{{trans('trans.userscourses')}} </div>

                                                             </div>
                                                             <div class="portlet-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover table-bordered table-striped">
                                                                        <thead>
                                                                         <tr>
                                                                           <th> العميل  </th>
                                                                           <th>  الكورس </th>
                                                                           <th>  القسم   </th>
                                                                           <th> الصورة   </th>



                                                                           
                                                                       </tr>
                                                                   </thead>
                                                                   <tbody>
                                                                    @foreach($UserCourses as  $Course)
                                                                    <tr>
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

                                          <img src="{{url('/')}}/Forentend/{{$Course->course->img}}" alt="" class="img-fluid float-right ml-3" style="width:100px;height: 100px;">
                                         </td>

                                                               </tr>



                                                               @endforeach
                                                           </tbody>
                                                       </table>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   @endif

                                   <div class="row">



                                   </div>
                               </div>

                           </div>
                       </div>
                   </div>
               </div>
               <!-- End: life time stats -->
           </div>
       </div>


   </div>
   <!-- END CONTENT BODY -->
   @push('js')



   @endpush

   @endsection

