
<div class="box box-default color-palette-box">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-tag"></i> Table</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-xs-12">
        <div class="form-group">
          <select class="form-control" id="select" onchange="loadTable()">
            <option selected value="1">------</option>
            <option value="2">yeet</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <table class="table table-bordered table-hover datatable" style="width:100%">
          <thead>
            <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <td>Shit</td>
            <td>Ka</td>
            <td>bobo</td>
            <td>mo</td>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
  var url = "<?=base_url('access/user');?>";
  //initialization ng datatable.
  //kapag shinit mo uli kasi to, nadodoble ng declaration
  //bale dapat isang beses mo lang tatawagin as datatable tapos saka mo ieedit yung datatable na yun
  var mytable = $('.table').DataTable({
    "processing": true,
    "serverSide": true,
    "stateSave": true,
    "ajax": {
        "url": url,
        "type": "POST"
    },
    "deferLoading": 3
  });

  $(function(){
    //loadTable();
  });

  function loadTable () {
    var value = $('#select').val();
    if(value == 1) url = "<?=base_url('access/get_names');?>";
    mytable.ajax.url(url).load();
  }

  setInterval( function () {
    mytable.ajax.reload( null, false );
  }, 30000 );

</script>
