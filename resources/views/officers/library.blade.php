                
@extends('Layouts.libraryLayout')

@section('content')

<style>
  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
  }

  th, td {
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even){background-color: #f2f2f2}

  /* Add an active class to the active button/link */
  .column #logU {
    background-color: blue;
    color: white;
  }

</style>

<div class="admin-tables" style="height: 400px; overflow-x:auto;">
  <h2 style="text-align: center;">Logged Users</h2><hr>
  <table class="table table-hover"  >
    <thead>
      <th>Name</th>
      <th>Email</th>
      <th></th>
    </thead>
    <tbody>
        <tr>
          <td>{{ $LoggedUserInfo['name'] }}</td>
          <td>{{ $LoggedUserInfo['email'] }}</td>
          <td><a href="{{ route('auth.admin.logout') }}">Logout</a></td>
        </tr>
    </tbody>
  </table>

</div>
 
  <!-- <h2>Responsive Table</h2>
  <p>If you have a table that is too wide, you can add a container element with overflow-x:auto around the table, and it will display a horizontal scroll bar when needed.</p>
  <p>Resize the browser window to see the effect. Try to remove the div element and see what happens to the table.</p>

  <div style="overflow-x:auto;">
    <table>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Points</th>
        <th>Points</th>
        <th>Points</th>
        <th>Points</th>
        <th>Points</th>
        <th>Points</th>
        <th>Points</th>
        <th>Points</th>
        <th>Points</th>
        <th>Points</th>
      </tr>
      <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
      </tr>
      <tr>
        <td>Eve</td>
        <td>Jackson</td>
        <td>94</td>
        <td>94</td>
        <td>94</td>
        <td>94</td>
        <td>94</td>
        <td>94</td>
        <td>94</td>
        <td>94</td>
        <td>94</td>
        <td>94</td>
      </tr>
      <tr>
        <td>Adam</td>
        <td>Johnson</td>
        <td>67</td>
        <td>67</td>
        <td>67</td>
        <td>67</td>
        <td>67</td>
        <td>67</td>
        <td>67</td>
        <td>67</td>
        <td>67</td>
        <td>67</td>
      </tr>
    </table>
  </div> -->
  
@endsection
