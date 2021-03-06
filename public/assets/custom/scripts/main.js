
$(document).ready(function(){


    
    switch($('body').attr('page-id')) {
      // begin of property 
      case 'property_create':
            $('#side_property_m,#side_ad-pro_it').addClass('active');
            break;
      case 'property_index':
            $('#side_property_m,#side_sh-pro_it').addClass('active');
            break;
        case 'property_edit':
            $('#side_property_m,#side_sh-pro_it,.nav-tabs #show').addClass('active');
            break;
        case 'property_comment':
            $('#side_property_m,#side_sh-pro_it,.nav-tabs #notes').addClass('active');
            break;
        case 'property_docs':
             $('#side_property_m,#side_sh-pro_it,.nav-tabs #documents').addClass('active');
            break;
        case 'property_finance':
             $('#side_property_m,#side_sh-pro_it,.nav-tabs #financial_movements').addClass('active');
            break;
        case 'property_lease':
             $('#side_property_m,#side_sh-pro_it,.nav-tabs #leases').addClass('active');
            break;
        case 'property_expense':
             $('#side_property_m,#side_sh-pro_it,.nav-tabs #expenses').addClass('active');
            break;
        case 'property_units':
             $('#side_property_m,#side_sh-pro_it,.nav-tabs #units').addClass('active');
            break; 
        // begin of property_unit
        case 'unit_create':
             $('#side_property_m,#side_ad-pro-un_it').addClass('active');
            break;   
        case 'unit_index':
             $('#side_property_m,#side_sh-pro-un_it').addClass('active');
            break; 
        case 'unit_comments':
             $('#side_property_m,#side_sh-pro-un_it,.nav-tabs #notes').addClass('active');
            break;
        case 'unit_leases':
             $('#side_property_m,#side_sh-pro-un_it,.nav-tabs #leases').addClass('active');
            break;
        case 'unit_docs':
             $('#side_property_m,#side_sh-pro-un_it,.nav-tabs #documents').addClass('active');
            break;
        case 'unit_show':
             $('#side_property_m,#side_sh-pro-un_it,.nav-tabs #show').addClass('active');
            break;
        case 'unit_leases':
             $('#side_property_m,#side_sh-pro-un_it,.nav-tabs #leases').addClass('active');
            break;
        case 'unit_rents':
             $('#side_property_m,#side_sh-pro-un_it,.nav-tabs #rents').addClass('active');
            break;
        // lease
        case 'lease':
             $('#side_lease_m,#side_in-lea_it').addClass('active');
            break;
        case 'management_contract':
             $('#side_lease_m,#side_pro-man_it').addClass('active');
            break;
        case 'external_lease':
             $('#side_lease_m,#side_ex-lea_it').addClass('active');
            break;
        case 'sell_agreement':
             $('#side_lease_m,#side_sel-agr_it').addClass('active');
            break;
        case 'owner':
             $('#side_human-re_m,#side_pro-own_it').addClass('active');
            break; 
        case 'renter':
             $('#side_human-re_m,#side_renter_it').addClass('active');
            break; 
        case 'supplier':
             $('#side_human-re_m,#side_supplier_it').addClass('active');
            break; 
        case 'receiver':
             $('#side_human-re_m,#side_receiver_it').addClass('active');
            break;     
            
          
        // finannce   
        case 'debt':
             $('#side_finance_m,#side_fin-dbt_it').addClass('active');
            break; 
        case 'receipt':
             $('#side_finance_m,#side_fin-rec_it').addClass('active');
            break;   

        

    }



    $('#accordion .collapse').on('show.bs.collapse', function () {
        $('.collapse.in').each(function(){
            $(this).collapse('hide');
        });
      });

    var chkArray = [];
    $('.del-check').change(function(){
        var values = $('.del-check:checked').map(function () {
          return '"'+this.id+'"';
        }).get();
        unique = values.filter(function(elem, index, self) {
            return index == self.indexOf(elem);
        })
        $('#del-arr').val('['+unique+']');

        
    });

    $('.btn-primary').on('click',function(){$('.collapse').collapse('hide');})

    // property_unit 
    $("#annual_rent_amount").change(function(){
              com_val = $(this).val()*(5/200);

            $("#commission_amount").val(com_val);
            $("#commission_amount").addClass('edited');
    })



    // owner akax modal button handler

    

    // property ajax
    save_modal = function(e){
     
      
      form = $(e).parent().parent().parent().find('form');
      target_label = $(form.attr("target")).attr('doc-label');
      $.ajax({
        url: form.attr("c-url"),
        data: form.serialize(),
        type: "POST",
        beforeSend: function(request){request.setRequestHeader('X-CSRF-TOKEN', form.find(".token").val() )},
        success: function(msg) {
          
            if(msg == 'error'){
              $(".modal-msg").html('<div class="alert alert-danger alert-dismissible fade in" role="alert">  error </div>');
              
            }else{
              msg = JSON.parse(msg);
            
              $(form.attr("target")).empty().append('<option value="'+msg.name+'">'+msg[target_label]+'</option>');
              $(form.attr("target")).parent().parent().parent().addClass('pmd-textfield-floating-label-active pmd-textfield-floating-label-completed');
              
              $('.c-ud-modal').modal('hide');
            }
        }
      });

    };

    $('.img-circle').click(function(){
      console.log($('#property').parent())
      $('#property').parent().parent().parent().addClass('pmd-textfield-floating-label-active pmd-textfield-floating-label-completed');
      
    })



    openNav = function () {
        document.getElementById("mySidenav").style.width = "100%";
    };

    /* Close/hide the sidenav */
    closeNav = function () {
        document.getElementById("mySidenav").style.width = "0";
    }


    // delete btn

    $("#del-btn").click(function(){
        del_arr = $(this).find("input#del-arr").val()
        if(del_arr.length > 2){
          $("#Confirm_Modal").modal();
        }else{
          $(".del-check-lab").toggle()
        }
      });

      $("#confirm").click(function(){
        form = $("#del-btn");
        del_arr = form.find("input#del-arr").val()
        $.ajax({
          url: '/del_array',
          data: { doctype: form.attr("doctype"), names: del_arr },
          type: "POST",
          beforeSend: function(request){request.setRequestHeader('X-CSRF-TOKEN', form.find(".token").val() )},
          success: function(msg) {
              if(msg == 'error'){
                console.log('error');
              }else{
                location.reload();
              }
          }
        });
      });


      // set values on edit page function

      set_value = function(data){
        for (var key in data) {

          if(data[key]){
            $("[name='"+key+"']").val(data[key])
            $("[name='"+key+"']").addClass('edited')
          }
            
        }
      }



      // set map 

      set_map = function(longitude,latitude){

        initialize_map(longitude,latitude)
      }

      function initialize_map(longitude,latitude) {
          var latLng = new google.maps.LatLng(latitude,longitude);
          var map = new google.maps.Map(document.getElementById('mapCanvas'), {
            zoom: 8,
            center: latLng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          });
          var marker = new google.maps.Marker({
            position: latLng,
            title: 'Point A',
            map: map,
            draggable: true
          }); 

          google.maps.event.addListener(marker, 'dragend', function() {
              $("#longitude").val(marker.getPosition().lng());
              $("#latitude").val(marker.getPosition().lat());
          });
      }

      $("#PropertyModal").on("shown.bs.modal", function () {
          set_map(50.0301574,26.3320884)
      });      

      // Prevent users from submitting a form by hitting Enter
      $(window).keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          return false;
        }
      });


      printDiv = function (divName) {


            var headstr = '<html><head><title></title><link href="/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" /><link href="/assets/global/plugins/bootstrap-print.min.css" rel="stylesheet" type="text/css" /><link href="/assets/custom/css/main.css" rel="stylesheet" type="text/css" /></head><body dir="rtl">';
            var footstr = "</body>";
            var newstr = document.all.item(divName).innerHTML;
           
            var printContents = headstr+newstr+footstr;
            w = window.open();
            w.document.write(printContents);

            setTimeout(function(){
              w.print();
              w.close();  
            }, 10);
            
            
            
            return ;
           

      }


      // hadeling date input add class edited 
      $('.date-picker').on('changeDate', function(){
          $(this).addClass( "edited" );;
      });

      // select2 
      var global = new Array();
      $(".select2-c").select2({
            minimumInputLength: 0,
            ajax: {
              url: function (params) {
                global['doc-label'] = $(this).attr('doc-label')
                if(params.term){
                  return 'http://localhost:8001/find/'+$(this).attr('doctype')+'/key/'+params.term+'/field_search/'+$(this).attr('doc-label')
                }else{
                  return 'http://localhost:8001/find/'+$(this).attr('doctype')+'/key/all/field_search/name'
                }
                
              },
              dataType: 'json',
              data: function(term) {
                return {
                  q: term.term
                };
              },
              processResults: function(dat) {
                return {
                    results: $.map(dat, function(obj) {
                        return { id: obj.name, text: obj[global['doc-label']] };
                    })
                };
              }
            }
      });

      
      
      // property page
      $('#management_type').change(function(){
        switch(this.value) {
            case 'percentage':
                $("#percentage").show()
                $("#not_percentage").hide();
                $("#not_percentage input").val('');
                break;
            case 'not_percentage':
                $("#percentage").hide()
                $("#percentage select").val('');
                $("#not_percentage").show();
                break;
        }
      });
      // handling the special fileds ofor create type or edit
      $('body.create_page .create_hide').hide();
      $('body.create_page .create_read_only').attr('disabled', true);
      $('body.create_page .create_remove').remove();
      $('body.edit_page .edit_hide').hide();
      $('body.edit_page .edit_read_only').attr('disabled', true);
      $('body.edit_page .edit_remove').remove();
      // datae form
      $('.date-picker').datepicker({
          rtl: App.isRTL(),
          orientation: "left",
          autoclose: true,
          format: 'yyyy-mm-dd',
      });




   

});