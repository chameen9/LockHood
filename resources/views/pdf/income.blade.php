<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Income Status Report</title>

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
  
  <h3 align="center">Income Status Report</h3>
    <p>
      Report Created At  : {{$date}}&nbsp;&nbsp;&nbsp;{{$time}} <br>
      Reprot Created By : {{$name}} ({{$role}})<br>
      Report Status : {{$reportstatus}}
    </p>

  <table cellspacing=0>
    <tr>
        <th style="padding: 5px">Date</th>
        <th style="padding: 5px">Total Revenue ($)</th>
        <th style="padding: 5px">Total Cost ($)</th>
        <th style="padding: 5px">Total Profit ($)</th>
    </tr>

        @foreach($incomestatus as $item)
          <tr>
            <td style="padding: 5px" align="center"><b>{{$item->date}}</b></td>
            <td style="padding: 5px" align="right">{{$item->revenue}}</td>
            <td style="padding: 5px" align="right">{{$item->cost}}</td>
            <td style="padding: 5px" align="right">{{$item->revenue - $item->cost}}</td>
          </tr>
        @endforeach

  </table>
</body>
</html>