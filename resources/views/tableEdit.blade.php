<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Live Table Edit Delete Mysql Data using Tabledit Plugin in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
  </head>
  <body>
    <div class="container">
      <br />
      <h3 align="center">Live Table Edit Delete with jQuery Tabledit in Laravel</h3>
      <br />
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Sample Data</h3>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            @csrf
            <table id="editable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <!-- <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                   -->
                  <th>#</th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Year</th>
                  <th>program</th>
                  <th>College</th>
                  <th>Department</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
               
                
                @foreach ($data as $user)
                                
                  <tr>
                      <td></td>
                      <td>{{ $user->ID_no }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->gender }}</td>
                      <td>{{ $user->year }}</td>
                      <td>Regular</td>
                      <td>{{ $user->college }}</td>
                      <td>{{ $user->department }}</td>
                      <td>{{ $user->status }}</td>
                  </tr>

              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    
    $.ajaxSetup({
      headers:{
        'X-CSRF-Token' : $("input[name=_token]").val()
      }
    });

    $('#editable').Tabledit({
      url:'{{ route("tabledit.action") }}',
      dataType:"json",
      columns:{
        identifier:[0, 'id'],
        editable:[[1, 'ID_no'], [2, 'name'], [3, 'gender', '{"1":"Male", "2":"Female", "3":"Unspecified"}'],
                [4, 'year'], [5, 'program', '{"1":"Regular", "2":"Extension", "3":"Distance"}'], [6, 'college'], 
                [7, 'department'], [8, 'status', '{"1":"On-Class", "2":"Dismissed", "3":"Withdrow", "4":"Transfered"}']]
        },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
        if(data.action == 'delete')
        {
          $('#'+data.id).remove();
        }
      }
    });

  });  
</script>