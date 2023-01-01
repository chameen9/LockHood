<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Best Sales Execetives Report</title>

</head>
<body>
  
<table cellspacing=0>
    <tr>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center"><b>ID</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" width="200px"><b>Employee Name</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center" width="160px"><b>Department</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center"><b>Sold</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center" width="100px"><b>Status</b></th>
    </tr>
    
        @foreach($saleEmployees as $employee)
          <tr>
            <td align="center" style="padding: 5px;"><b>{{$employee->sold_by}}</b></td>
            <td style="padding: 5px;">{{$employee->first_name}} {{$employee->last_name}}</td>
            <td align="left" style="padding: 5px;">{{$employee->name}}</td>
            <td align="center" style="padding: 5px;">{{$employee->count}}</td>
            <td align="center" style="padding: 5px;">{{$employee->status}}</td>
          </tr>
        @endforeach
  </table>
</body>
</html>