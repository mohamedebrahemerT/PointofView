@extends('admin.index')

@section('content')


    @push('js')
        <script>


            CKEDITOR.replace('desc', {

                language: 'ar',

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
                <a href="{{url('/')}}/Sliders">{{trans('trans.Sliders')}}</a>
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
                            <form role="form" action="{{url('/')}}/Sliders/{{$Slider->id}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PATCH') }}

                                <input type="hidden" name="id" value="{{$Slider->id}}">

{{--                                <div class="form-group">--}}
{{--                                    <label class="control-label">{{trans('trans.title')}}</label>--}}
{{--                                    <input type="text" placeholder="{{trans('trans.title')}}" class="form-control"--}}
{{--                                           name="title" value="{{$Slider->title}}"/>--}}
{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label class="control-label">{{trans('trans.desc')}}</label>--}}


{{--                                    <textarea type="text"--}}
{{--                                              class="form-control desc" name="desc"> --}}
{{--                            {{$Slider->desc}}</textarea>--}}
{{--                                </div>--}}


{{--                                <div class="form-group">--}}
{{--                                    <label class="control-label">{{trans('trans.url')}}</label>--}}
{{--                                    <input type="text" placeholder="{{trans('trans.url')}}" class="form-control"--}}
{{--                                           value="{{$Slider->url}}" name="url"/>--}}
{{--                                </div>--}}


                                <div class="form-group">
                                    <label class="control-label">{{trans('trans.slider')}}</label>

                                    <input type="file" placeholder="{{trans('trans.slider')}}" class="form-control"
                                           name="img"/>

                                    <br>
                                    <img src="{{url('/')}}/{{$Slider->img}}" style="width:200px;height:200px">
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

