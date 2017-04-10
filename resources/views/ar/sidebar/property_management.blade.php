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
    
    
        <li class="nav-item" id="side_property_m">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-diamond"></i>
                <span class="title">العقار و الوحدات</span>
                <span class="arrow"></span>
            </a>

            <ul class="sub-menu">
                <li class="nav-item " id="side_ad-pro_it">
                    <a href="/property/create"  class="nav-link">
                        <i class="icon-user"></i> 
                        اضافة عقار
                    </a>
                </li>   
                <li class="nav-item" id="side_ad-pro-un_it">
                    <a href="/property_unit/create"  class="nav-link">
                        <i class="icon-user" ></i> اضافة وحدة  
                    </a>
                </li>     
                <li class="nav-item" id="side_sh-pro_it">    
                    <a href="/property/index"  class="nav-link">
                        <i class="icon-user"></i> عرض العقار
                    </a>
                </li>     
                <li class="nav-item" id="side_sh-pro-un_it">    
                    <a href="/property_unit/index"  class="nav-link">
                        <i class="icon-user"></i> عرض الوحدات
                    </a>
                </li>  
            </ul>       
                    
        </li>

        <li class="nav-item" id="side_lease_m">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings" ></i>
                <span class="title"> عقود الايجار</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item" id="side_in-lea_it">
                    <a href="/lease/index"  class="nav-link">
                        <i class="icon-user"></i>  عقود الداخلية
                    </a>
                </li>
                <li class="nav-item" id="side_ex-lea_it">
                    <a href="/external_lease/index"  class="nav-link">
                        <i class="icon-user"></i>  عقود الخارجية
                    </a>
                </li>
                <li class="nav-item" id="side_sel-agr_it">
                    <a href="/sell_agreement/index"  class="nav-link">
                        <i class="icon-user"></i>  عقود بيع و شراء
                    </a>
                </li>
                <li class="nav-item" id="side_pro-man_it">
                    <a href="/property_management_contract/index"  class="nav-link">
                        <i class="icon-user"></i>  عقود ادارة الالملاك
                    </a>
                </li>

                <li class="nav-item" id="side_lea-rep_it">
                    <a href="#" class="nav-link">
                        <i class="icon-user"></i> تقارير العقود *
                    </a>
                </li>
                <li class="nav-item" id="side_lea-arch_it">
                    <a href="#"  class="nav-link">
                        <i class="icon-user"></i> ارشيف عقود الايجار*
                    </a>
                </li>    
            </ul>    
        </li>


        <li class="nav-item" id="side_finance_m">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i> 
                <span class="title">النظام المالي</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item" >
                    <a href="#"  class="nav-link">
                        <i class="icon-user" ></i> تحصيل ايجار*
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;"  class="nav-link">
                        <i class="icon-user"></i> استلام مبلغ*
                    </a>
                </li>
                <li class="nav-item" id="side_fin-dbt_it">
                    <a href="/debt/index"  class="nav-link">
                        <i class="icon-user"></i> سجلات المكتب
                    </a>
                </li>
                <li class="nav-item" id="side_fin-rec_it">
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
        <li class="nav-item" id="side_human-re_m">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i> 
                <span class="title">كل العملاء</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item" id="side_pro-own_it">
                    <a href="/property_owner/index" class="nav-link">
                        <i class="icon-user"></i> اصحاب الاملاك
                    </a>
                </li>
                <li class="nav-item" id="side_renter_it">
                    <a href="/renter/index"  class="nav-link">
                        <i class="icon-user"></i> المستأجرون
                    </a>
                </li>
                <li class="nav-item" id="side_supplier_it" >
                    <a href="/supplier/index"  class="nav-link">
                        <i class="icon-user"></i> مزودو الخدمة
                    </a>
                </li>
                <li class="nav-item" id="side_receiver_it">
                    <a href="/receiver/index" class="nav-link">
                        <i class="icon-user"  ></i> المحصلين
                    </a>
                </li>    
            </ul>    
        </li> 
        <li class="nav-item" id="side_archive_m">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">ارشفة سريعة</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="icon-user"></i> عرض كافة العقود*
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="icon-user"></i> عرض كافة السندات*
                    </a>
                </li>    
            </ul>    
        </li> 
        <li class="nav-item" id="side_archive_m">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">الاعدادات</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="setting/account" class="nav-link">
                        <i class="icon-user"></i> اعدادت النظام
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="icon-user"></i> *
                    </a>
                </li>    
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="icon-user"></i> *
                    </a>
                </li>    
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="icon-user"></i> *
                    </a>
                </li>    
            </ul>    
        </li> 
        
           
        </li>
   



    </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
    </div>