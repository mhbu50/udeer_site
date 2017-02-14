@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
    
@endsection

@section('body')
    



<body id="property_create" class="property_management p-create">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

    <div class="container-fluid c-body-con">
        <div class="col-md-9">
            
                 
                    <div id="propriety_unit_form" class="page-content">
                        @include('ar.property.property_form',['action' => action('PropertyController@store')])
                    </div>
                    

        </div>
        <div class="col-md-3">
            <div id="side_menu" >
                @include('ar.ar_side')
            </div>
        </div>
    </div>

    @include('ar.ar_footer')
    @include('ar.modals.Owner_modal')

    <script type="text/javascript">
        $(document).ready(function(){
          google.maps.event.addDomListener(window, 'load', set_map(50.0301574,26.3320884));

          $('#owner_name').typeahead({
              source: [
                @foreach( $property_owners as $property_owner)
                  {  
                    "value": "{{$property_owner->name}}",
                    "label": "{{ $property_owner->first_name.' '.$property_owner->second_name.' '.$property_owner->third_name.' '.$property_owner->last_name }}"
                  },
                @endforeach 
              ],
              displayText: function(item) {
                return item.label
              },
              afterSelect: function(item) {
                this.$element[0].value = item.value
              }
          });
        });

        $('select#management_type').change(function(){
          switch(this.value) {
              case 'percentage':
                  $("#percentage").show()
                  $("#not_percentage").hide()
                  break;
              case 'not_percentage':
                  $("#percentage").hide()
                  $("#not_percentage").show()
                  break;
          }
        });


    </script>
</body>
@endsection
