<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Materials By Id Report</title>

</head>
<body>
  
<table cellspacing=0>
    <tr>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center"><b>ID</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" width="200px"><b>Material Name</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center" width="150px"><b>Available Quantity</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center" width="150px"><b>Re-Order Level</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center" width="100px"><b>Status</b></th>
    </tr>
    
        @foreach($materials as $item)
          <tr>
            <td align="center" style="padding: 5px;"><b>{{$item->id}}</b></td>
            <td style="padding: 5px;">{{$item->name}}</td>
            <td align="center" style="padding: 5px;">{{$item->available_qty}}</td>
            <td align="center" style="padding: 5px;">{{$item->reorder_level}}</td>
            @if($item->reorder_level >= $item->available_qty)
                <td align="center" style="background-color: #F36464; color: black; padding: 5px">Odrer</td>
            @else
                <td align="center" style="padding: 5px;">Active</td>
            @endif
            <td align="center" style="padding: 5px;"></td>
          </tr>
        @endforeach
  </table>
</body>
</html>