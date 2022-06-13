@extends('admin.index')

@section('content')

   @push('js')
       

            <script>

                // Replace the <textarea id="editor1"> with a CKEditor

                // instance, using default configuration.

                CKEDITOR.replace( 'about_desc' , {

        language: 'en',

});

             
        
                CKEDITOR.replace( 'What_Makes_Us_unique_desc' , {

        language: 'en',

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
                <a href="{{url('/')}}/Settings">{{trans('trans.Settings')}}</a>
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
                            <form role="form" action="{{url('/')}}/Settings/update" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$Settings->id}}">
                                



 




  <div class="form-group col-md-3">
                                    <label class="control-label">Web site name</label>
                                    <input type="text" placeholder="{{trans('trans.name')}}" class="form-control"
                                           value="{{$Settings->name}}" name="name" required=""/>
                                </div>

                                

                                  <div class="form-group col-md-3">
                               <label class="control-label">Fivacon-  </label>

<input type="file" placeholder="{{trans('trans.Fivacon')}}" class="form-control" name="Fivacon" /> 

                               <br>
              <img src="{{url('/')}}/{{$Settings->Fivacon}}"  style="width:50px;height:50px" >
              - Width:50 px and Height:50 px 
          </div>

                                  <div class="form-group col-md-3">
                               <label class="control-label">top site logo  </label>

<input type="file" placeholder="{{trans('trans.logo')}}" class="form-control" name="logo" /> 

                               <br>
              <img src="{{url('/')}}/{{$Settings->logo}}" >
              - Width:237 px and Height:72 px 
          </div>

            <div class="form-group col-md-3">
                               <label class="control-label"> logo-gif-loader</label>

<input type="file" placeholder="{{trans('trans.logo_footer')}}" class="form-control" name="logo_footer" /> 

                               <br>
              <img src="{{url('/')}}/{{$Settings->logo_footer}}"   >
              - Width:237 px and Height:72 px 
          </div >


     <div class="form-group col-md-3">
                                    <label class="control-label">{{trans('trans.phone')}}</label>
                                    <input type="text" placeholder="{{trans('trans.phone')}}" class="form-control"
                                           value="{{$Settings->phone}}" name="phone" required=""/>
                                </div>

                                <div class="form-group col-md-3">
                                    <label class="control-label">{{trans('trans.email')}}</label>
                                    <input type="email" placeholder="{{trans('trans.email')}}" class="form-control"
                                           value="{{$Settings->email}}" name="email" required=""/>
                                </div>

                                  <div class="form-group col-md-3">
                                    <label class="control-label">
                                    Email for inquiries</label>
                                    <input type="email" placeholder="Email for inquiries" class="form-control"
                                           value="{{$Settings->inquiriesEmail}}" name="inquiriesEmail" required=""/>
                                </div>


                                

                                     <div class="form-group col-md-3">
                                    <label class="control-label">{{trans('trans.address')}}</label>
                                    <input type="text" placeholder="{{trans('trans.address')}}" class="form-control"
                                           value="{{$Settings->address}}" name="address" required=""/>
                                </div>


                                 <div class="form-group col-md-3">
                                    <label class="control-label">{{trans('trans.map_link')}}</label>
                                    <input type="text" placeholder="{{trans('trans.map_link')}}" class="form-control"
                                           value="{{$Settings->map_link}}" name="map_link" required=""/>
                                </div>



                                 <div class="form-group col-md-3">
                                    <label class="control-label">{{trans('trans.facebook_link')}}</label>
                                    <input type="text" placeholder="{{trans('trans.facebook_link')}}" class="form-control"
                                           value="{{$Settings->facebook_link}}" name="facebook_link" required=""/>
                                </div>

                                 <!--div class="form-group">
                                    <label class="control-label">{{trans('trans.twitter_link')}}</label>
                                    <input type="text" placeholder="{{trans('trans.twitter_link')}}" class="form-control"
                                           value="{{$Settings->twitter_link}}" name="twitter_link" required=""/>
                                </div -->

                                    <div class="form-group col-md-3">
                                    <label class="control-label">{{trans('trans.linkedin_link')}}</label>
                                    <input type="text" placeholder="{{trans('trans.linkedin_link')}}" class="form-control"
                                           value="{{$Settings->linkedin_link}}" name="linkedin_link" required=""/>
                                </div>

                                <!--div class="form-group">
                                    <label class="control-label">{{trans('trans.Whatsapp_link')}}</label>
                                    <input type="text" placeholder="{{trans('trans.Whatsapp_link')}}" class="form-control"
                                           value="{{$Settings->Whatsapp_link}}" name="Whatsapp_link" required=""/>
                                </div -->

                                 <!--div class="form-group">
                                    <label class="control-label">{{trans('trans.insta_link')}}</label>
                                    <input type="text" placeholder="{{trans('trans.insta_link')}}" class="form-control"
                                           value="{{$Settings->insta_link}}" name="insta_link" required=""/>
                                </div -->

                                <!--div class="form-group">
                                    <label class="control-label">{{trans('trans.snapchat_link')}}</label>
                                    <input type="text" placeholder="{{trans('trans.snapchat_link')}}" class="form-control"
                                           value="{{$Settings->snapchat_link}}" name="snapchat_link" required=""/>
                                </div -->

                                



                                 <!--div class="form-group">
                                    <label class="control-label">{{trans('trans.copy_right')}}</label>
                                    <input type="text" placeholder="{{trans('trans.copy_right')}}" class="form-control"
                                           value="{{$Settings->copy_right}}" name="copy_right" required=""/>
                                </div -->

                                    <div class="form-group col-md-3">
                                    <label class="control-label">
Contact Us title
                                     </label>
                                    <input type="text" placeholder="{{trans('trans.about_title')}}" class="form-control"
                                           value="{{$Settings->about_title}}" name="about_title" required=""/>
                                </div>

                                 <div class="form-group col-md-12">
                                    <label class="control-label">
                                        Contact Us content
                                    
                                </label>
  <textarea class="form-control" name="about_desc" class="form-control about_desc">
                   {{$Settings->about_desc}}
              </textarea>
                                </div>

 
 

                                    
                                </div>

                                 <div class="form-group col-md-4">
                                    <label class="control-label">
{{$Settings->ouridentity}}
                                     </label>
                                    <input type="text" placeholder="{{$Settings->ouridentity}}" class="form-control"
                                           value="{{$Settings->ouridentity}}" name="ouridentity" required=""/>
                                </div>

                                <div class="form-group col-md-4">
                                    <label class="control-label">
{{$Settings->OurDimensions}}
                                     </label>
                                    <input type="text" placeholder="{{$Settings->OurDimensions}}" class="form-control"
                                           value="{{$Settings->OurDimensions}}" name="OurDimensions" required=""/>
                                </div>

                                 <div class="form-group col-md-4">
                                    <label class="control-label">
{{$Settings->Carreers}}
                                     </label>
                                    <input type="text" placeholder="{{$Settings->Carreers}}" class="form-control"
                                           value="{{$Settings->Carreers}}" name="Carreers" required=""/>
                                </div>

                                 <div class="form-group col-md-4">
                                    <label class="control-label">
{{$Settings->POVTeam}}
                                     </label>
                                    <input type="text" placeholder="{{$Settings->POVTeam}}" class="form-control"
                                           value="{{$Settings->POVTeam}}" name="POVTeam" required=""/>
                                </div>

                                 <div class="form-group col-md-4">
                                    <label class="control-label">
{{$Settings->Gallery}}
                                     </label>
                                    <input type="text" placeholder="{{$Settings->Gallery}}" class="form-control"
                                           value="{{$Settings->Gallery}}" name="Gallery" required=""/>
                                </div>

                                <div class="form-group col-md-4">
                                    <label class="control-label">
{{$Settings->Contactus}}
                                     </label>
                                    <input type="text" placeholder="{{$Settings->Contactus}}" class="form-control"
                                           value="{{$Settings->Contactus}}" name="Contactus" required=""/>
                                </div>


                               
 
                             <div class="row">
                                     <div class="form-group col-md-6">
                               <label class="control-label">Do you want to view Gallery ?</label>

                <select name="Blogstatus" class="form-control" required="">
                   
                    <option value="1"  @if($Settings->Blogstatus == 1) selected @endif>
                    {{trans('trans.yes')}}              
                    </option>

                     <option value="0"  
                     @if($Settings->Blogstatus == 0) selected @endif>
                    {{trans('trans.no')}}              
                    </option>
                   
                    
                </select>
          </div>  


                                  <div class="form-group col-md-6">
                               <label class="control-label">Do you want to view Carreers ?</label>

                <select name="Carreersstatus" class="form-control" required="">
                   
                    <option value="1"  @if($Settings->Carreersstatus == 1) selected @endif>
                    {{trans('trans.yes')}}              
                    </option>

                     <option value="0"  
                     @if($Settings->Carreersstatus == 0) selected @endif>
                    {{trans('trans.no')}}              
                    </option>
                   
                    
                </select>
          </div> 
                                 
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

