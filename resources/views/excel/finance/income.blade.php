<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Income Status Report</title>

</head>
<body>
  
<table cellspacing=0>
    <tr>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center" width="100px"><b>Date</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center" width="100px"><b>Total Revenue</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center" width="100px"><b>Total Cost</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center" width="100px"><b>Total Profit</b></th>
    </tr>
    
        @foreach($incomestatus as $item)
          <tr>
            <td align="center" style="padding: 5px;"><b>{{$item->date}}</b></td>
            <td align="right" style="padding: 5px;" data-format="$#,##0_-">{{$item->revenue}}</td>
            <td align="right" style="padding: 5px;" data-format="$#,##0_-">{{$item->cost}}</td>
            <td align="right" style="padding: 5px;" data-format="$#,##0_-">{{$item->revenue - $item->cost}}</td>
          </tr>
        @endforeach
  </table>
</body>
</html>