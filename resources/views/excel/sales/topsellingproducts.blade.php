<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Top 10 Selling Products Report</title>

</head>
<body>
  
  <table cellspacing=0>
    <tr>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center"><b>ID</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" width="350px"><b>Product Name</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="right" width="100px"><b>Actual Price</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="right" width="100px"><b>Sold Price</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="center"><b>Quantity</b></th>
        <th style="background-color: #4F81BD; color: white; padding: 5px" align="right" width="100px"><b>Revenue</b></th>
    </tr>
    
        @foreach($topSellingProducts as $topSellingProduct)
          <tr>
            <td align="center" style="padding: 5px;"><b>{{$topSellingProduct->product_id}}</b></td>
            <td style="padding: 5px;">{{$topSellingProduct->name}}</td>
            <td align="right" style="padding: 5px;" data-format="$#,##0_-">{{$topSellingProduct->price}}</td>
            <td align="right" style="padding: 5px;" data-format="$#,##0_-">{{$topSellingProduct->sold_price}}</td>
            <td align="center" style="padding: 5px;">{{$topSellingProduct->quantity}}</td>
            <td align="right" style="padding: 5px;" data-format="$#,##0_-">{{$topSellingProduct->sold_price * $topSellingProduct->quantity}}</td>
          </tr>
        @endforeach

  </table>
</body>
</html>