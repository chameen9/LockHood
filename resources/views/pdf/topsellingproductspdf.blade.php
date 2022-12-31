<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Top 10 Selling Products Report</title>

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
        </style>
</head>
<body>
  
  <h3 align="center">Top {{$takeNumber}} Selling Products Report</h3>
    <p>
      Report Created At  : {{$date}}&nbsp;&nbsp;&nbsp;{{$time}} <br>
      Reprot Created By : {{$name}} ({{$role}})
    </p>

  <table cellspacing=0>
    <tr>
        <th style="padding: 5px">ID</th>
        <th style="padding: 5px">Product Name</th>
        <th style="padding: 5px">Actual Price($)</th>
        <th style="padding: 5px">Sold Price($)</th>
        <th style="padding: 5px">Quantity</th>
        <th style="padding: 5px">Revenue($)</th>
    </tr>

        @foreach($topSellingProducts as $topSellingProduct)
          <tr>
            <td align="center" style="padding: 5px;">{{$topSellingProduct->product_id}}</td>
            <td style="padding: 5px;">{{Illuminate\Support\Str::limit($topSellingProduct->name, 30)}}</td>
            <td align="right" style="padding: 5px;">{{$topSellingProduct->price}}</td>
            <td align="right" style="padding: 5px;">{{$topSellingProduct->sold_price}}</td>
            <td align="center" style="padding: 5px;">{{$topSellingProduct->quantity}}</td>
            <td align="right" style="padding: 5px;">{{$topSellingProduct->sold_price * $topSellingProduct->quantity}}</td>
          </tr>
        @endforeach

  </table>
</body>
</html>