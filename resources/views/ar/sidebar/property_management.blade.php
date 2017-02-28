<div class="page-sidebar navbar-collapse collapse custom-page-sidebar">
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
    
    
        <li class="nav-item active">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i> العقار و الوحدات
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item ">
                    <a href="/property/create"  class="nav-link">
                        <i class="icon-user"></i> اضافة عقار
                    </a>
                </li>   
                <li class="nav-item">
                    <a href="/property_unit/create"  class="nav-link">
                        <i class="icon-user"></i> اضافة وحدة  
                    </a>
                </li>     
                <li class="nav-item">    
                    <a href="/property/index"  class="nav-link">
                        <i class="icon-user"></i> عرض العقار
                    </a>
                </li>     
                <li class="nav-item">    
                    <a href="/property_unit/index"  class="nav-link">
                        <i class="icon-user"></i> عرض الوحدات
                    </a>
                </li>  
            </ul>       
                    
        </li>
        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i> عقود الايجار
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="/lease/index"  class="nav-link">
                        <i class="icon-user"></i> عرض عقود الداخلية
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/external_lease/index"  class="nav-link">
                        <i class="icon-user"></i> عرض عقود الخارجية
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lease/index"  class="nav-link">
                        <i class="icon-user"></i> عرض عقود بيع و شراء
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/sell_agreement/index"  class="nav-link">
                        <i class="icon-user"></i> عرض عقود ادارة الالملاك
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/lease_rent_payment/index;" target="_blank" class="nav-link">
                        <i class="icon-user"></i> تقارير العقود 
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lease_rent_payment/index"  class="nav-link">
                        <i class="icon-user"></i> ارشيف عقود الايجار
                    </a>
                </li>    
            </ul>    
        </li>


        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i> النظام المالي
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="/rent_payment/create"  class="nav-link">
                        <i class="icon-user"></i> تحصيل ايجار
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;"  class="nav-link">
                        <i class="icon-user"></i> استلام مبلغ*
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/debt/index"  class="nav-link">
                        <i class="icon-user"></i> سجلات المكتب
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/receipt/index" class="nav-link">
                        <i class="icon-user"></i> السندات
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;"  class="nav-link">
                        <i class="icon-user"></i> التزامات المالية*
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;"  class="nav-link">
                        <i class="icon-user"></i> ارصدة عملاء*
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;"  class="nav-link">
                        <i class="icon-user"></i> تحويل*
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;"  class="nav-link">
                        <i class="icon-user"></i> السندات المالية*
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="icon-user"></i> ارشيف سندات المالية*
                    </a>
                </li>
            </ul>    
        </li> 
        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i> كل العملاء*
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="/property_owner/index" target="_blank" class="nav-link">
                        <i class="icon-user"></i> اصحاب الاملاك
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/renter/index" target="_blank" class="nav-link">
                        <i class="icon-user"></i> الموستجرون
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/supplier/index" target="_blank" class="nav-link">
                        <i class="icon-user"></i> مزودو الخدمة
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/receiver/index" target="_blank" class="nav-link">
                        <i class="icon-user"></i> المحصلين
                    </a>
                </li>    
            </ul>    
        </li> 
        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i> ارشفة سريعة
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="#" target="_blank" class="nav-link">
                        <i class="icon-user"></i> عرض كافة العقود
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" target="_blank" class="nav-link">
                        <i class="icon-user"></i> عرض كافة السندات
                    </a>
                </li>    
            </ul>    
        </li> 
        
           
        </li>
   



    </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
    </div>