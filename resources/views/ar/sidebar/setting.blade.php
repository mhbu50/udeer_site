<div class="page-sidebar navbar-collapse collapse custom-page-sidebar setting-sidebar">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <li class="sidebar-toggler-wrapper hide">
        <div class="sidebar-toggler">
            <span></span>
        </div>
    </li>
    <!-- END SIDEBAR TOGGLER BUTTON -->
    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
    <li class="sidebar-search-wrapper">
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
        <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
        <form class="sidebar-search  sidebar-search-bordered" action="page_general_search_3.html" method="POST">
            <a href="javascript:;" class="remove">
                <i class="icon-close"></i>
            </a>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="بحث ...">
                <span class="input-group-btn">
                    <a href="javascript:;" class="btn submit">
                        <i class="icon-magnifier"></i>
                    </a>
                </span>
            </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
    </li>
    
    
        <li class="nav-item" id="side_account_m">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">الاعدادات</span>
                
            </a>
        </li> 

        <li class="nav-item" id="side_account_m">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">ثوابت النظام</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="/doctype/Terms%20and%20Conditions/index" class="nav-link">
                        <i class="icon-user"></i> نصوص عقود الايجار
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="/doctype/property_type/index?fields=property_type" class="nav-link">
                        <i class="icon-user"></i> انواع العقارات
                    </a>
                </li>    
                <li class="nav-item">
                    <a href="/doctype/property_unit_type/index?fields=type_name" class="nav-link">
                        <i class="icon-user"></i> انواع الوحدات
                    </a>
                </li>    
                <li class="nav-item">
                    <a href="/doctype/bank/index?fields=bank_name" class="nav-link">
                        <i class="icon-user"></i> قائمة البنوك
                    </a>
                </li>    
            </ul>    
        </li> 

        <li class="nav-item" id="side_account_m">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">المستخدمون</span>
                
            </a>
        </li> 

        <li class="nav-item" id="side_account_m">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">الصلاحيات</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="setting/account" class="nav-link">
                        <i class="icon-user"></i> صلاحيات النظام
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="icon-user"></i> صلاحيات العملاء
                    </a>
                </li>    
            </ul>    
        </li> 
        
           
        </li>
   



    </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
    </div>