@section('module','property_management')
@section('page_title','lease')
@section('page_type','create_page')
@extends('template')
  
@section('css_page')
   
    <link href="/assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
@endsection
@section('js_page')
    <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
    <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>

    <script src="/assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      terms = {!!json_encode($terms)!!}
      $('#terms').hide();
      annual_rent_amount = 0;
      rent = 0;
      dof_number = 0;
      var start_day ;
      var properties = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        
        remote: {
          url: '/find/property%20unit/%QUERY',
          wildcard: '%QUERY'
        }
      });
     $('#property_unit_c1').typeahead({
        minLength: 0,
        highlight: true
        }, 
        {
        name: 'property_unit',
        display: 'name',
        source: properties,
        
      }).on('typeahead:selected', function() {
  
        // the second argument has the info you want
        
        $.ajax({
           url: '/get_rent/property_unit/'+this.value,
           type: "get",
          success: function(msg) {
              
              if(msg != "error"){
                  annual_rent_amount = msg;

              }
             
            }
        });
        $("#instalment_number").val('');
        $("#instalment_group").empty();

      });
      
      $("#terms_group").change(function() {
        // $('#terms').summernote({height: 300});
        $("#terms").summernote("code", terms[this.value]);
        })

        

        $('#instalment_number').change(function(){
          $("#instalment_group").empty();
          dof_number = $(this).val();
          rent = annual_rent_amount / dof_number ;
          d = $('#lease_starting_date').val();
          lease_starting_date = new Date(parseInt(d.substring(0, 4)),parseInt(d.substring(5,7)),parseInt(d.substring(8, 10))); 
          for(count=0;count<this.value;count++){
            lease_starting_date.setMonth(lease_starting_date.getMonth() + 1);
            $("#instalment_group").append('<tr><td>'+(count+1)+'</td><td><div class="form-group form-md-line-input "><div class="input-icon right"><input class="form-control form-control-inline instalment_amount edit_read_only " size="16" type="number" id="instalment_amount" name="instalment_amount['+count+']" value="'+rent+'" ></div></div></td><td><div class="form-group form-md-line-input "><div class="input-icon right"><input class="form-control form-control-inline date-picker" size="16" type="text" value="'+ (lease_starting_date).toISOString().slice(0,10) +'" id="due_date" placeholder="" name="due_date['+count+']" ><i class="fa fa-calendar"></i></div></div></td></tr>');
          }
        })

        


      })
      
    </script>
@endsection

@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <h3>اضافة عقد داخلى</h3>
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.lease.lease_form',['action' => action('LeaseController@store')])
          </div>

        </div>
      </div>
    </div>
    @include('ar.modals.property_modal')
    @include('ar.modals.property_unit_modal')
    @include('ar.modals.renter_modal')
    
@endsection
