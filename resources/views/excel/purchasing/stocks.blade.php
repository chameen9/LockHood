<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Current Stock Levels Report</title>

</head>
<body>
  
<table cellspacing=0>
    <tr>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center"><b>ID</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" width="200px"><b>Material Name</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center" width="150px"><b>Max Stock Limit</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center" width="150px"><b>Available Quantity</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center" width="150px"><b>Re-Order Level</b></th>
    </tr>
    
        @foreach($stocks as $item)
          <tr>
            <td align="center" style="padding: 5px;"><b>{{$item->material_item_id}}</b></td>
            <td style="padding: 5px;">{{$item->name}}</td>
            <td align="center" style="padding: 5px;">{{$item->max_stock_limit}}</td>
            @if($item->reorder_level >= $item->available_qty)
                <td style="background-color: #F36464; color: black; padding: 5px" align="center">{{$item->available_qty}}</td>
            @else
                <td style="padding: 5px" align="center">{{$item->available_qty}}</td>
            @endif
            <td align="center" style="padding: 5px;">{{$item->reorder_level}}</td>
          </tr>
        @endforeach
  </table>
</body>
</html>