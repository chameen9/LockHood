<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Default Suppliers Report</title>

</head>
<body>
  
<table cellspacing=0>
    <tr>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center"><b>ID</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" width="150px"><b>Supplier Name</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" width="150px"><b>Material Name</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center" width="110px"><b>Quantity(KG)</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center" width="110px"><b>Price</b></th>
    </tr>
    
        @foreach($defaultsuppliers as $item)
          <tr>
            <td align="center" style="padding: 5px;"><b>{{$item->supplier_id}}</b></td>
            <td style="padding: 5px;">{{$item->supplier_name}}</td>
            <td style="padding: 5px;">{{$item->name}}</td>
            <td align="center" style="padding: 5px;">1</td>
            <td style="padding: 5px" align="right" data-format="$#,##0_-">{{$item->price}}</td>
          </tr>
        @endforeach
  </table>
</body>
</html>