

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
                                    <a href="{{url('/')}}/department">{{trans('trans.Department')}}</a>
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
                                            <span class="caption-subject bold uppercase"> {{trans('trans.Department')}}</span>
                                        </div>
                                         
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            
                                        </div >
                                        

    <meta name="csrf-token" content="{{ csrf_token() }}">

     
 

    <div class="row mt-5">

        <div class="col-md-10 offset-md-1">

            <h3 class="text-center mb-4">Drag and Drop to  arrange Sliders</h3>

            <table id="table" class="table table-bordered">

              <thead>

                <tr>

                  <th width="30px">#</th>

                  <th>Title</th>
                            <th> {{trans('trans.Sliders')}}  </th>


                  <th>Created At</th>

                </tr>

              </thead>

              <tbody id="tablecontents">

                @foreach($Sliders as $Slider)

    	            <tr class="row1" data-id="{{ $Slider->id }}">

    	              <td class="pl-3"><i class="fa fa-sort"></i></td>

    	              <td>{{ $Slider->title }}</td>
    	              <td>
    	              	<img src="{{url('/')}}/{{$Slider->img}}" style="width:100px;height: 100px;">
    	              </td>

    	              <td>{{ date('d-m-Y h:m:s',strtotime($Slider->created_at)) }}</td>

    	            </tr>

                @endforeach

              </tbody>                  

            </table>

            <hr>

            <h5>Drag and Drop the table rows and <button class="btn btn-success btn-sm" onclick="window.location.reload()">REFRESH</button> the page to check the Demo.</h5> 

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
             
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>

    <script type="text/javascript">

      $(function () {

        $("#table").DataTable();


        $( "#tablecontents" ).sortable({

          items: "tr",

          cursor: 'move',

          opacity: 0.6,

          update: function() {

              sendOrderToServer();

          }

        });


        function sendOrderToServer() {

          var order = [];

          var token = $('meta[name="csrf-token"]').attr('content');

          $('tr.row1').each(function(index,element) {

            order.push({

              id: $(this).attr('data-id'),

              position: index+1

            });

          });


          $.ajax({

            type: "POST", 

            dataType: "json", 

            url: "{{ url('post-sortable_Slider') }}",

                data: {

              order: order,

              _token: token

            },

            success: function(response) {

                if (response.status == "success") {

                  console.log(response);

                } else {

                  console.log(response);

                }

            }

          });

        }

      });

    </script>
                @endpush

  @endsection

  

