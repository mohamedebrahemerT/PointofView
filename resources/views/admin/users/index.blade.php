

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
                                    <a href="{{url('/')}}/users">{{trans('trans.users')}}</a>
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
                                            <span class="caption-subject bold uppercase"> {{trans('trans.users')}}</span>
                                        </div>
                                         
                                    </div>
                                    <div class="portlet-body">
                                        
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
                                                    <th>{{trans('trans.email')}}   </th>
                                                    
                                                     <th> {{trans('trans.status')}} </th>
                                                    <th> {{trans('trans.Joined')}} </th>
                                                    <th>{{trans('trans.Actions')}}  </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            	@foreach($users as $user)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" value="1" />
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td> {{$user->first_name}}  {{$user->last_name}} </td>
                                                    <td>
                                                        <a href="{{$user->email}}"> {{$user->email}}</a>
                                                    </td>
                                                     

                                                    <td class="text-lg-center">
                                   <div class="switch">
                                        <label>
                                            <input onchange="update_active(this)" value="{{ $user->id }}" type="checkbox" <?php if($user->status == 1) echo "checked";?> >
                                            <span class="lever switch-col-indigo"></span>
                                        </label>
                                    </div>
                               </td>
                                                    <td class="center">
                                                      
{{date('d-m-Y', strtotime($user->created_at))}} 
                                                      </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> {{trans('trans.Actions')}}
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                <li>
                                     <a href="{{url('/')}}/users/{{$user->id}}">
                                                                        <i class="icon-docs"></i> 
                                                    {{trans('trans.show details')}}
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
            
  <script type="text/javascript">
      function update_active(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('{{ route('users.actived') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                if(data == 1){
                    console.log('daaa = '.data);
                    toastr.success("{{trans('trans.statuschanged')}}");
                }
                else{
                    toastr.error("{{trans('trans.nottatuschanged')}}");
                }
            });
        }
  </script>
 
                @endpush

  @endsection

  