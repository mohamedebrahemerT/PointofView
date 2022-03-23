 
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
                                    <a href="{{url('/')}}/Contacts">{{trans('trans.Contacts')}}</a>
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
                                            <span class="caption-subject bold uppercase"> {{trans('trans.Contacts')}}</span>
                                        </div>
                                         
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            
                                        </div>
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th> {{trans('trans.name')}}  </th>

                                                    

													 <th>{{trans('trans.email')}} 
													</th>

                                                  
                                                    <th>{{trans('trans.phone')}} 
                                                    </th>
                                                      <th>{{trans('trans.subject')}} 
                                                    </th>

                                                   

                                                      <th>{{trans('trans.is_replied')}} 
                                                    </th>
                                                      
                                                     

                                                    <th>{{trans('trans.Actions')}}  </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            	@foreach($Contacts as $Contact)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" value="1" />
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                  
                                                    
                                                    <td>
                                                         {{$Contact->name}} 
                                                    </td>

                                                     <td>
                                                         {{$Contact->email}} 
                                                    </td>

                                                    <td>
                                                         {{$Contact->phone}} 
                                                    </td>

                                                     <td>
                                                         {{$Contact->content}} 
                                                    </td>

                                                   
                                                    

                                                      <td>
                                                        @if($Contact->is_replied == 1)
                                                        {{trans('trans.yes')}} 
                                                        @else
                                                         {{trans('trans.no')}} 
                                                        @endif
                                                    </td>
                                                      



                                                     
                                                     
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> {{trans('trans.Actions')}}
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">

                                                                 <li>
                                                 <a href="{{url('/')}}/ContactUs/{{$Contact->id}}">
                                                                        <i class="icon-tag"></i>
                                    {{trans('trans.reply')}}
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

  