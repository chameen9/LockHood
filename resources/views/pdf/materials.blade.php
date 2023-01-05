<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Materials By Id Report</title>

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
            background: white;
            color: #00BA49;
          }
          .none{
            background: white;
            color: #F36464;
          }
        </style>
</head>
<body>
  
  <h3 align="center">Materials By Id Report</h3>
    <p>
      Report Created At  : {{$date}}&nbsp;&nbsp;&nbsp;{{$time}} <br>
      Reprot Created By : {{$name}} ({{$role}})<br>
      Report Status : {{$reportstatus}}
    </p>

  <table cellspacing=0>
    <tr>
        <th style="padding: 5px">ID</th>
        <th style="padding: 5px">Material Name</th>
        <th style="padding: 5px">Available Quantity</th>
        <th style="padding: 5px">Re-Order Level</th>
        <th style="padding: 5px">Status</th>
    </tr>

        @foreach($materials as $item)
          <tr>
            <td style="padding: 5px" align="center"><b>#{{$item->id}}</b></td>
            <td style="padding: 5px">{{$item->name}}</td>
            <td style="padding: 5px" align="center">{{$item->available_qty}}</td>
            <td style="padding: 5px" align="center">{{$item->reorder_level}}</td>
            @if($item->reorder_level >= $item->available_qty)
                <td style="padding: 5px" align="center" class="none">Oder !</td>
            @else
                <td style="padding: 5px" align="center" class="active">Active</td>
            @endif
          </tr>
        @endforeach

  </table>
</body>
</html>