<!-- BEGIN CONTAINER -->
<div class="page-container">


    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-light " data-keep-expanded="false"
                data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <!-- END SIDEBAR TOGGLER BUTTON -->

                @if(Auth::guard('admin')->check())

                @if(admin()->user()->role("dashboard_show"))
                    <li class="nav-item {{  request()->routeIs('dashboard.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/dashboard" class="nav-link ">
                            <i class="icon-home"></i>
                            <span class="title">{{trans('trans.Dashboard')}}</span>
                        </a>
                    </li>
                     @endif

                       @php
    $Setting= App\Models\Setting::orderBy('id','desc')->first();
@endphp

                      @if(admin()->user()->role("news_show"))
                    <li class="nav-item {{  request()->routeIs('news.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/news" class="nav-link ">
                            <i class="icon-social-dribbble"></i>
                            <span class="title"> {{trans('trans.news')}}</span>
                        </a>
                    </li>
 @endif

                      @if(admin()->user()->role("ourteam_show"))

                      <li class="nav-item {{  request()->routeIs('ourteams.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/ourteams" class="nav-link ">
                            <i class="icon-social-dribbble"></i>
                            <span class="title"> {{trans('trans.ourteam')}}</span>
                        </a>
                    </li>
 @endif

   @if(admin()->user()->role("carreer_show"))
         
                    <li class="nav-item {{  request()->routeIs('carreers.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/carreers" class="nav-link ">
                            <i class="icon-social-dribbble"></i>
                            <span class="title"> {{trans('trans.carreer')}}</span>
                        </a>
                    </li>
 @endif
                  

                     

                      @if(admin()->user()->role("values_show"))
     
                    <li class="nav-item {{  request()->routeIs('values.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/values" class="nav-link ">
                            <i class="icon-social-dribbble"></i>
                            <span class="title"> {{trans('trans.values')}}</span>
                        </a>
                    </li>
                     @endif

                     @if(admin()->user()->role("developmentcycle_show"))
     
                    <li class="nav-item {{  request()->routeIs('development_cycle.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/development_cycle" class="nav-link ">
                            <i class="icon-social-dribbble"></i>
                            <span class="title"> {{trans('trans.developmentcycle')}}</span>
                        </a>
                    </li>
                     @endif
                

           

                     @if(admin()->user()->role("Department_show"))
                    <li class="nav-item {{  request()->routeIs('department.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/department" class="nav-link ">
                            <i class="icon-social-dribbble"></i>
                            <span class="title"> {{trans('trans.Department')}}</span>
                        </a>
                    </li>
                     @endif

                      @if(admin()->user()->role("Courses_show"))
                    <li class="nav-item {{  request()->routeIs('ACourses.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/ACourses" class="nav-link ">
                            <i class="icon-social-dribbble"></i>
                            <span class="title"> {{trans('trans.Courses')}}</span>
                        </a>
                    </li>
                     @endif

                   
                    

                     @endif

                  

            @if(admin()->user()->role("Fieldworkadministration_show"))
                    <li class="nav-item {{  request()->routeIs('Fieldwork_administration.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/Fieldwork_administration" class="nav-link ">
                            <i class="icon-user"></i>
                            <span class="title"> {{trans('trans.Fieldworkadministration')}}</span>
                        </a>
                    </li>
                     @endif

                     @if(admin()->user()->role("Resourcescapabilities_show"))
                    <li class="nav-item {{  request()->routeIs('Resources_capabilities.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/Resources_capabilities" class="nav-link ">
                            <i class="icon-user"></i>
                            <span class="title"> {{trans('trans.Resourcescapabilities')}}</span>
                        </a>
                    </li>
                     @endif

                      @if(admin()->user()->role("Quality_show"))
                    <li class="nav-item {{  request()->routeIs('quality_control.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/quality_control" class="nav-link ">
                            <i class="icon-user"></i>
                            <span class="title"> {{trans('trans.Quality')}}</span>
                        </a>
                    </li>
                     @endif

                      @if(admin()->user()->role("SectorsOFexpertise_show"))
                    <li class="nav-item {{  request()->routeIs('Sectors_OF_expertise.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/Sectors_OF_expertise" class="nav-link ">
                            <i class="icon-user"></i>
                            <span class="title"> {{trans('trans.SectorsOFexpertise')}}</span>
                        </a>
                    </li>
                     @endif

                     
            

                @if(admin()->user()->role("users_show"))
                    <li class="nav-item {{  request()->routeIs('users.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/users" class="nav-link ">
                            <i class="icon-user"></i>
                            <span class="title"> {{trans('trans.users')}}</span>
                        </a>
                    </li>
                     @endif

 
 

                @if(admin()->user()->role("Sliders_show"))
                    <li class="nav-item {{  request()->routeIs('Sliders.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/Sliders" class="nav-link ">
                            <i class="icon-social-dribbble"></i>
                            <span class="title"> {{trans('trans.Sliders')}}</span>
                        </a>
                    </li>
                     @endif
         

                      @if(admin()->user()->role("ContactUs_show"))
                   
                    <li class="nav-item {{  request()->routeIs('ContactUs.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/ContactUs" class="nav-link ">
                            <i class="icon-paper-plane"></i>
                            <span class="title"> {{trans('trans.ContactUs')}}</span>
                        </a>
                    </li>
                     @endif

                     
 
   @if(admin()->user()->role("subscriptions_show"))
                   
                    <li class="nav-item {{  request()->routeIs('subscriptions.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/subscriptions" class="nav-link ">
                            <i class="icon-paper-plane"></i>
                            <span class="title"> {{trans('trans.subscriptions')}}</span>
                        </a>
                    </li>
                     @endif

                    

                   @if(admin()->user()->role("Photocategories_show"))

                     <li class="nav-item {{  request()->routeIs('Photocategories.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/Photocategories" class="nav-link ">
                            <i class="icon-diamond"></i>
                            <span class="title"> {{trans('trans.Photocategories')}}</span>
                        </a>
                    </li>
                @endif

                      
@if(admin()->user()->role("admins_show"))

                     <li class="nav-item {{  request()->routeIs('admins.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/admins" class="nav-link ">
                            <i class="icon-diamond"></i>
                            <span class="title"> {{trans('trans.admins')}}</span>
                        </a>
                    </li>
                @endif

@if(admin()->user()->role("AdminGroup_show"))

                     <li class="nav-item {{  request()->routeIs('AdminGroup.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/AdminGroup" class="nav-link ">
                            <i class="icon-diamond"></i>
                            <span class="title"> {{trans('trans.AdminGroup')}}</span>
                        </a>
                    </li>
                @endif
@if(admin()->user()->role("Settings_show"))
                    
                    <li class="nav-item {{  request()->routeIs('Settings.*') ? 'active' : '' }}">
                        <a href="{{url('/')}}/Settings/edit" class="nav-link ">
                            <i class="icon-settings"></i>
                            <span class="title"> {{trans('trans.Settings')}}</span>
                        </a>
                    </li>
                @endif
                    
                

            </ul>
            <!-- END SIDEBAR MENU -->
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->


    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
         