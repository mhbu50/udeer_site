
$(document).ready(function(){

    $("body.property_management .c-menue-item.pm_a").addClass("na_active");
    $("body.complain_management .c-menue-item.com_a").addClass("na_active");

  	$("body.property_management.p-show #side_property_show").addClass("side-active");
  	$("body.property_management.p-create #side_property_create").addClass("side-active");
  	$("body.property_management.p_u-show #side_property_unit_show").addClass("side-active");
  	$("body.property_management.p_u-create #side_property_unit_create").addClass("side-active");

  	$("body.lease_management.l-show #side_lease_show").addClass("side-active");
  	$("body.lease_management.l-create #side_lease_create").addClass("side-active");

  	$("body.financial_system.re_pa-show #side_rent_payment_show").addClass("side-active");
  	$("body.financial_system.pa_re-show #side_rent_payment_show").addClass("side-active");

  	$("body.financial_system.ca_re-show #side_catch_rec_show").addClass("side-active");

  	$("body.financial_system.pay_rec-show #side_pay_rec_show").addClass("side-active");

    $("body.financial_system.debt-show #side_debt_show").addClass("side-active")

  	$("body.customer_management.owner-show #side_owner_show").addClass("side-active");
  	$("body.customer_management.receiver-show #side_receiver_show").addClass("side-active");
  	$("body.customer_management.supplier-show #side_supplier_show").addClass("side-active");
  	$("body.customer_management.renter-show #side_renter_show").addClass("side-active");

     

  	$("body.property_management #collapseOne").addClass("in");
  	$("body.lease_management #collapseTow").addClass("in");
  	$("body.financial_system #collapseThree").addClass("in");
  	$("body.customer_management #collapseFour").addClass("in");

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
        console.log($('#del-arr').val());

        
    });

    $('.btn-primary').on('click',function(){$('.collapse').collapse('hide');})

    $("#annual_rent_amount").change(function(){
              com_val = $(this).val()*(5/200);

            $("#commission_amount").val(com_val);
    })



    // owner akax modal button handler

    

    // property ajax
    send_ajax = function(e){
     
      
      form = $(e).parent('form');
      console.log(form.attr("class"));
      $.ajax({
        url: form.attr("c-url"),
        data: form.serialize(),
        type: "POST",
        beforeSend: function(request){request.setRequestHeader('X-CSRF-TOKEN', form.find(".token").val() )},
        success: function(msg) {
            if(msg == 'error'){
              $(".modal-msg").html('<div class="alert alert-danger alert-dismissible fade in" role="alert">  error </div>');
              console.log('error');
            }else{
              $(form.attr("target")).val(msg);
              $('.c-ud-modal').modal('toggle');
            }
        }
      });
    };


    openNav = function () {
        document.getElementById("mySidenav").style.width = "100%";
    };

    /* Close/hide the sidenav */
    closeNav = function () {
        document.getElementById("mySidenav").style.width = "0";
    }


    // delete btn

    $("#del-btn").click(function(){
        form = $(this).parent('form');
        del_arr = form.find("input#del-arr").val()
        if(del_arr.length > 2){
          $("#Confirm_Modal").modal();
        }else{
          $(".del-check").toggle()
        }
      });

      $("#confirm").click(function(){
        form = $("form.del_arr");
        del_arr = form.find("input#del-arr").val()
        $.ajax({
          url: form.attr("c-url"),
          data: form.serialize(),
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
            $("[name='"+key+"']").val(data[key])
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
        
      


   

});