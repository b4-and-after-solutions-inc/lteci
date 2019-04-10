<select class="form-control" id="select" onchange="loadTable()">
  <option selected value="1">------</option>
  <option value="2">yeet</option>
</select>
<br />
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>

<script>
  var url = "<?=base_url('access/get_names');?>";
  //initialization ng datatable.
  //kapag shinit mo uli kasi to, nadodoble ng declaration
  //bale dapat isang beses mo lang tatawagin as datatable tapos saka mo ieedit yung datatable na yun
  var mytable = $('.table').DataTable({
    //ajax request url and shits.
    ajax: {
      url: url,
      type: 'get',
      dataType: 'json',
      returnType: 'json'
    }
  });
  $(function(){
    loadTable();
  });
  function loadTable () {
    var value = $('#select').val();
    if(value == 1) url = "<?=base_url('access/get_names');?>";
    else url = "<?=base_url('access/get_names_2');?>";
    //maloload agad dito.
    mytable.ajax.url(url).load();
  }

</script>
