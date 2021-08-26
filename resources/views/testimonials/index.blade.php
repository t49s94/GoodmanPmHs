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

  <div class="select">
  <select class="form-control" id="locale">
    <option value="af-ZA">af-ZA</option>
    <option value="ar-SA">ar-SA</option>
    <option value="ca-ES">ca-ES</option>
    <option value="cs-CZ">cs-CZ</option>
    <option value="da-DK">da-DK</option>
    <option value="de-DE">de-DE</option>
    <option value="el-GR">el-GR</option>
    <option value="en-US" selected>en-US</option>
    <option value="es-AR">es-AR</option>
    <option value="es-CL">es-CL</option>
    <option value="es-CR">es-CR</option>
    <option value="es-ES">es-ES</option>
    <option value="es-MX">es-MX</option>
    <option value="es-NI">es-NI</option>
    <option value="es-SP">es-SP</option>
    <option value="et-EE">et-EE</option>
    <option value="eu-EU">eu-EU</option>
    <option value="fa-IR">fa-IR</option>
    <option value="fi-FI">fi-FI</option>
    <option value="fr-BE">fr-BE</option>
    <option value="fr-FR">fr-FR</option>
    <option value="he-IL">he-IL</option>
    <option value="hr-HR">hr-HR</option>
    <option value="hu-HU">hu-HU</option>
    <option value="id-ID">id-ID</option>
    <option value="it-IT">it-IT</option>
    <option value="ja-JP">ja-JP</option>
    <option value="ka-GE">ka-GE</option>
    <option value="ko-KR">ko-KR</option>
    <option value="ms-MY">ms-MY</option>
    <option value="nb-NO">nb-NO</option>
    <option value="nl-NL">nl-NL</option>
    <option value="pl-PL">pl-PL</option>
    <option value="pt-BR">pt-BR</option>
    <option value="pt-PT">pt-PT</option>
    <option value="ro-RO">ro-RO</option>
    <option value="ru-RU">ru-RU</option>
    <option value="sk-SK">sk-SK</option>
    <option value="sv-SE">sv-SE</option>
    <option value="th-TH">th-TH</option>
    <option value="tr-TR">tr-TR</option>
    <option value="uk-UA">uk-UA</option>
    <option value="ur-PK">ur-PK</option>
    <option value="uz-Latn-UZ">uz-Latn-UZ</option>
    <option value="vi-VN">vi-VN</option>
    <option value="zh-CN">zh-CN</option>
    <option value="zh-TW">zh-TW</option>
  </select>
</div>

  <div id="toolbar">
  <button id="remove" class="btn btn-danger" disabled>
    <i class="fa fa-trash"></i> Delete
  </button>
</div>
<table
  id="table"
  data-show-pagination-switch="true"
  data-pagination="true"
  data-id-field="id"
  data-page-list="[10, 25, 50, 100, all]"
  data-show-footer="true"
  data-side-pagination="server"
  >
</table>
<!--
data-toolbar="#toolbar"
data-search="true"
data-show-refresh="true"
data-show-toggle="true"
data-show-fullscreen="true"
data-show-columns="true"
data-show-columns-toggle-all="true"
data-detail-view="true"
data-show-export="true"
data-click-to-select="true"
data-detail-formatter="detailFormatter"
data-minimum-count-columns="2"
data-show-pagination-switch="true"
data-pagination="true"
data-id-field="id"
data-page-list="[10, 25, 50, 100, all]"
data-show-footer="true"
data-side-pagination="server"
data-url="https://examples.wenzhixin.net.cn/examples/bootstrap_table/data"
data-response-handler="responseHandler"
-->

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

  // Adds a class to the compoment
  $(".title").addClass("on")




  var $table = $('#table')
  var $remove = $('#remove')
  var selections = []

  var data = {
  "total": 21,
  "totalNotFiltered": 21,
  "rows":[
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
    },
    {
      "id": 6,
      "name": "Item 6",
      "price": "$6"
    },
    {
      "id": 7,
      "name": "Item 7",
      "price": "$7"
    },
    {
      "id": 8,
      "name": "Item 8",
      "price": "$8"
    },
    {
      "id": 9,
      "name": "Item 9",
      "price": "$9"
    },
    {
      "id": 10,
      "name": "Item 10",
      "price": "$10"
    },
    {
      "id": 11,
      "name": "Item 11",
      "price": "$11"
    },
    {
      "id": 12,
      "name": "Item 12",
      "price": "$12"
    },
    {
      "id": 13,
      "name": "Item 13",
      "price": "$13"
    },
    {
      "id": 14,
      "name": "Item 14",
      "price": "$14"
    },
    {
      "id": 15,
      "name": "Item 15",
      "price": "$15"
    },
    {
      "id": 16,
      "name": "Item 16",
      "price": "$16"
    },
    {
      "id": 17,
      "name": "Item 17",
      "price": "$17"
    },
    {
      "id": 18,
      "name": "Item 18",
      "price": "$18"
    },
    {
      "id": 19,
      "name": "Item 19",
      "price": "$19"
    },
    {
      "id": 20,
      "name": "Item 20",
      "price": "$20"
    }
  ]
  }
/*
  $(function() {

    $table.bootstrapTable({data: data})
    console.log("executed")
  })
  */

  function getIdSelections() {
    return $.map($table.bootstrapTable('getSelections'), function (row) {
      return row.id
    })
  }
/*
  function responseHandler(res) {
    $.each(res.rows, function (i, row) {
      row.state = $.inArray(row.id, selections) !== -1
    })
    return res
  }

  function detailFormatter(index, row) {
    var html = []
    $.each(row, function (key, value) {
      html.push('<p><b>' + key + ':</b> ' + value + '</p>')
    })
    return html.join('')
  }
  */

  function operateFormatter(value, row, index) {
    return [
      '<a class="like" href="javascript:void(0)" title="Like">',
      '<i class="fa fa-heart"></i>',
      '</a>  ',
      '<a class="remove" href="javascript:void(0)" title="Remove">',
      '<i class="fa fa-trash"></i>',
      '</a>'
    ].join('')
  }
/*
  window.operateEvents = {
    'click .like': function (e, value, row, index) {
      alert('You click like action, row: ' + JSON.stringify(row))
    },
    'click .remove': function (e, value, row, index) {
      $table.bootstrapTable('remove', {
        field: 'id',
        values: [row.id]
      })
    }
  }
*/
  function totalTextFormatter(data) {
    return 'Total'
  }

  function totalNameFormatter(data) {
    return data.length
  }

  function totalPriceFormatter(data) {
    var field = this.field
    return '$' + data.map(function (row) {
      return +row[field].substring(1)
    }).reduce(function (sum, i) {
      return sum + i
    }, 0)
  }


  function initTable() {
    $table.bootstrapTable('destroy').bootstrapTable({
      height: 550,
      locale: $('#locale').val(),
      columns: [
        [{
          field: 'state',
          checkbox: true,
          rowspan: 2,
          align: 'center',
          valign: 'middle'
        }, {
          title: 'Item ID',
          field: 'id',
          rowspan: 2,
          align: 'center',
          valign: 'middle',
          sortable: true,
          footerFormatter: totalTextFormatter
        }, {
          title: 'Item Detail',
          colspan: 3,
          align: 'center'
        }],
        [{
          field: 'name',
          title: 'Item Name',
          sortable: true,
          footerFormatter: totalNameFormatter,
          align: 'center'
        }, {
          field: 'price',
          title: 'Item Price',
          sortable: true,
          align: 'center',
          footerFormatter: totalPriceFormatter
        }]
      ],
      data: data
    })
    $table.on('check.bs.table uncheck.bs.table ' +
      'check-all.bs.table uncheck-all.bs.table',
    function () {
      $remove.prop('disabled', !$table.bootstrapTable('getSelections').length)

      // save your data, here just save the current page
      selections = getIdSelections()
      // push or splice the selections if you want to save all data selections
    })
    $table.on('all.bs.table', function (e, name, args) {
      console.log(name, args)
    })
    $remove.click(function () {
      var ids = getIdSelections()
      $table.bootstrapTable('remove', {
        field: 'id',
        values: ids
      })
      $remove.prop('disabled', true)
    })
  }

  $(function() {
    console.log($table)
      initTable()

      $('#locale').change(initTable)
    })

});

})(jQuery);


</script>

@endpush
