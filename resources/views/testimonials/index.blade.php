@extends('layouts.app')

@section('content')
 <!--
https://examples.bootstrap-table.com/#welcome.html
-->
<link href="/css/TestimonialsIndexStyles.css" rel="stylesheet" defer>

<link href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css" rel="stylesheet" defer>

<div class="container px-0">

  <h3 class="title p-3">Testimonials</h3>

  <div id="separator" class="row">&nbsp;</div>


  <table id="table">
    <thead>
      <tr>
        <th data-field="id">ID</th>
        <th data-field="name">Item Name</th>
        <th data-field="price">Item Price</th>
      </tr>
    </thead>
  </table>









  <div id="page-filler" class="row flex-grow-1">
    <div>&nbsp;</div>
  </div>

</div>
@endsection

@push('head')

<script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js" defer></script>
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js" defer></script>
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table-locale-all.min.js" defer></script>
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/extensions/export/bootstrap-table-export.min.js" defer></script>

<script>

(function($){

$(window).on('load', function() {

  var $table = $('#table')

  $(function() {
    var data = [
      {
        'id': 0,
        'name': 'Item 0',
        'price': '$0'
      },
      {
        'id': 1,
        'name': 'Item 1',
        'price': '$1'
      },
      {
        'id': 2,
        'name': 'Item 2',
        'price': '$2'
      },
      {
        'id': 3,
        'name': 'Item 3',
        'price': '$3'
      },
      {
        'id': 4,
        'name': 'Item 4',
        'price': '$4'
      },
      {
        'id': 5,
        'name': 'Item 5',
        'price': '$5'
      }
    ]
    $table.bootstrapTable({data: data})
  })

  // Adds a class to the compoment
  $(".title").addClass("on")



});

})(jQuery);


</script>

@endpush
