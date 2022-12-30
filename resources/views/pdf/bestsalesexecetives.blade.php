<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Best Sales Execetives Report</title>

        <style>
          table{
            border: 1px solid black;
            width: 100%;
            
          }
          th{
            background: #A8D1DF;
            color: black;
            border: 1px solid black;
          }
          tr{
            background: white;
            color: black;
            border: 1px solid black;
          }
          td{
            background: white;
            color: black;
            border: 1px solid black;
          }
          .active{
            background: #F36464;
            color: black;
          }
          .none{
            background: #00BA49;
            color: black;
          }
        </style>
</head>
<body>
  
  <h3 align="center">Best Sales Execetives Report</h3>
    <p>
      Report Created At  : {{$date}}&nbsp;&nbsp;&nbsp;{{$time}} <br>
      Reprot Created By : {{$name}} ({{$role}})
    </p>

  <table cellspacing=0>
    <tr>
        <th style="padding: 5px">ID</th>
        <th style="padding: 5px">Employee</th>
        <th style="padding: 5px">Department</th>
        <th style="padding: 5px">Sold</th>
        <th style="padding: 5px">Status</th>
    </tr>

        @foreach($saleEmployees as $employee)
          <tr>
            <td style="padding: 5px" align="center"><b>#{{$employee->sold_by}}</b></td>
            <td style="padding: 5px">{{$employee->first_name}} {{$employee->last_name}}</td>
            <td style="padding: 5px">{{$employee->name}}</td>
            <td style="padding: 5px" align="center">{{$employee->count}}</td>
            @if($employee->status == "ACTIVE")
                <td style="padding: 5px" align="center" class="active">Active</td>
            @else
                <td style="padding: 5px" align="center" class="none">None</td>
            @endif
          </tr>
        @endforeach

  </table>
</body>
</html>