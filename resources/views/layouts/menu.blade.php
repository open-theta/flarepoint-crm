
    <nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas-sm" role="navigation">
        <div class="list-group panel">
            <p class="list-group-item siderbar-top" title="" style="background-color: #eee"><img src="{{url('images/cdp-logo.png')}}" alt="" style="display: block; margin-left: auto; margin-right: auto;"></p>
            <a href="{{route('dashboard', \Auth::id())}}" class=" list-group-item" data-parent="#MainMenu"><i
                        class="glyphicon sidebar-icon glyphicon-dashboard"></i><span id="menu-txt">{{ __('Dashboard') }}</span> </a>
            <a href="{{route('users.show', \Auth::id())}}" class=" list-group-item" data-parent="#MainMenu"><i
                        class="glyphicon sidebar-icon glyphicon-user"></i><span id="menu-txt">{{ __('Profile') }}</span> </a>
       
            <!-- for Marketing team -->
            <div style="width: 100%;height: 20px;background-color: rgb(255, 255, 255);text-align: center;" >Marketing Analytics</div>
            <a href="#cdp_collection" class=" list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                class="glyphicon sidebar-icon glyphicon-folder-open"></i><span id="menu-txt">Data Collection Builder</span>
            <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
            <div class="collapse in" id="cdp_collection">
                <a href="{{ route('cdp-build-by-tagging')}}" class="list-group-item childlist">Pixel Code Tagging</a>
                <a href="{{ route('cdp-build-by-api')}}" class="list-group-item childlist">API Endpoint</a>
                <a href="{{ route('cdp-build-by-profile-uploader')}}" class="list-group-item childlist">Profile Uploader</a>
                <a href="{{ route('cdp-build-by-profile-importer')}}" class="list-group-item childlist">Profile Importer</a>
            </div>

            <a href="#unified_analytics" class=" list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                class="glyphicon sidebar-icon glyphicon-signal"></i><span id="menu-txt">Unified Analytics</span>
            <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
            <div class="collapse in" id="unified_analytics">
                <a href="{{ route('cdp-analytics-collections')}}" class="list-group-item childlist">Data Collections</a>
                <a href="{{ route('cdp-analytics-profiles')}}" class="list-group-item childlist">Profiles</a>
                <a href="{{ route('cdp-analytics-campaigns')}}" class="list-group-item childlist">Campaigns</a>
                <a href="{{ route('cdp-analytics-brands')}}" class="list-group-item childlist">Brands</a>
                <a href="{{ route('cdp-analytics-products')}}" class="list-group-item childlist">Products</a>
            </div>

            <a href="#data_segmentation" class=" list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                class="glyphicon sidebar-icon glyphicon-search"></i><span id="menu-txt">Profile Segmentation</span>
            <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
            <div class="collapse in" id="data_segmentation">
                <a href="{{ route('cdp-segmetation-list')}}" class="list-group-item childlist">Segments</a>
                <a href="{{ route('cdp-segmetation-build')}}" class="list-group-item childlist">Create Segment</a>
            </div>

            <a href="#customer_activation" class=" list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                class="glyphicon sidebar-icon glyphicon-heart"></i><span id="menu-txt"> Customer Activation</span>
            <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
            <div class="collapse in" id="customer_activation">
                <a href="{{ route('cdp-segmetation-list')}}" class="list-group-item childlist"> Email Marketing</a>
                <a href="{{ route('cdp-segmetation-build')}}" class="list-group-item childlist">Content Marketing</a>
                <a href="{{ route('cdp-segmetation-build')}}" class="list-group-item childlist">Push Notification</a>
                <a href="{{ route('cdp-segmetation-build')}}" class="list-group-item childlist">POS Campaign</a>
                <a href="{{ route('cdp-segmetation-build')}}" class="list-group-item childlist">Affiliate Campaign</a>
                <a href="{{ route('cdp-segmetation-build')}}" class="list-group-item childlist">Programmatic Campaign</a>
            </div>

            <!-- for Sales team -->
            <div style="width: 100%;height: 20px;background-color: rgb(255, 255, 255);text-align: center;" >Customer Management</div>
            
            <a href="#clients" class=" list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                        class="glyphicon sidebar-icon glyphicon-tag"></i><span id="menu-txt">{{ __('Clients') }}</span>
            <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
            <div class="collapse" id="clients">
                <a href="{{ route('clients.my')}}" class="list-group-item childlist">{{ __('My Clients') }}</a>
                <a href="{{ route('clients.index')}}" class="list-group-item childlist">{{ __('All Clients') }}</a>
                @if(Entrust::can('client-create'))
                    <a href="{{ route('clients.create')}}"
                       class="list-group-item childlist">{{ __('New Client') }}</a>
                @endif
            </div>

            <a href="#contacts" class=" list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                        class="glyphicon sidebar-icon glyphicon-phone"></i><span id="menu-txt">{{ __('Contacts') }}</span>
            <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
            <div class="collapse" id="contacts">

                <a href="{{ route('contacts.my')}}" class="list-group-item childlist">{{ __('My Contacts') }}</a>
                <a href="{{ route('contacts.index')}}" class="list-group-item childlist">{{ __('All Contacts') }}</a>
                @if(Entrust::can('contact-create'))
                    <a href="{{ route('contacts.create')}}"
                       class="list-group-item childlist">{{ __('New Contact') }}</a>
                @endif
            </div>

            <a href="#tasks" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                        class="glyphicon sidebar-icon glyphicon-tasks"></i><span id="menu-txt">{{ __('Tasks') }}</span>
            <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
            <div class="collapse" id="tasks">
                <a href="{{ route('tasks.my')}}" class="list-group-item childlist">{{ __('My Tasks') }}</a>
                <a href="{{ route('tasks.index')}}" class="list-group-item childlist">{{ __('All Tasks') }}</a>
                @if(Entrust::can('task-create'))
                    <a href="{{ route('tasks.create')}}" class="list-group-item childlist">{{ __('New Task') }}</a>
                @endif
            </div>

            <a href="#leads" class=" list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                        class="glyphicon sidebar-icon glyphicon-hourglass"></i><span id="menu-txt">{{ __('Leads') }}</span>
            <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
            <div class="collapse" id="leads">
                <a href="{{ route('leads.my')}}" class="list-group-item childlist">{{ __('My Leads') }}</a>
                <a href="{{ route('leads.index')}}" class="list-group-item childlist">{{ __('All Leads') }}</a>
                @if(Entrust::can('lead-create'))
                    <a href="{{ route('leads.create')}}"
                       class="list-group-item childlist">{{ __('New Lead') }}</a>
                @endif
            </div>

           
            <!-- for Administrator -->
            <div style="width: 100%;height: 20px;background-color: rgb(255, 255, 255);text-align: center;" >System Administration</div>
            
            <a href="#user" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                class="sidebar-icon fa fa-users"></i><span id="menu-txt">{{ __('Users') }}</span>
            <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
            <div class="collapse" id="user">
                <a href="{{ route('users.index')}}" class="list-group-item childlist">{{ __('Users All') }}</a>
                @if(Entrust::can('user-create'))
                    <a href="{{ route('users.create')}}"
                    class="list-group-item childlist">{{ __('New User') }}</a>
                @endif
            </div>

            <a href="#departments" class=" list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                        class="sidebar-icon glyphicon glyphicon-list-alt"></i><span id="menu-txt">{{ __('Departments') }}</span>
            <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
            <div class="collapse" id="departments">
                <a href="{{ route('departments.index')}}"
                class="list-group-item childlist">{{ __('All Departments') }}</a>
                @if(Entrust::hasRole('administrator'))
                    <a href="{{ route('departments.create')}}"
                    class="list-group-item childlist">{{ __('New Department') }}</a>
                @endif
            </div>
            @if(Entrust::hasRole('administrator'))
                <a href="#settings" class=" list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i
                            class="glyphicon sidebar-icon glyphicon-cog"></i><span id="menu-txt">{{ __('Settings') }}</span>
                <i class="ion-chevron-up  arrow-up sidebar-arrow"></i></a>
                <div class="collapse" id="settings">
                    <a href="{{ route('settings.index')}}"
                       class="list-group-item childlist">{{ __('Overall Settings') }}</a>
                    <a href="{{ route('roles.index')}}"
                       class="list-group-item childlist">{{ __('Role Management') }}</a>
                    <a href="{{ route('integrations.index')}}"
                       class="list-group-item childlist">{{ __('Integrations') }}</a>
                </div>
            @endif
            <a href="{{ url('/logout') }}" class=" list-group-item impmenu" data-parent="#MainMenu"><i
                        class="glyphicon sidebar-icon glyphicon-log-out"></i><span id="menu-txt">{{ __('Sign Out') }}</span> </a>

        </div>
    </nav>
