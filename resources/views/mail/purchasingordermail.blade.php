<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchasing Order Request</title>
</head>
<body>
    <h3>{{$details['title']}}</h3>
    <p>{{$details['line1']}}</p>
    <p>{{$details['line2']}}</p>
    <p>{{$details['line3']}} <b>[{{$details['matid']}}] {{$details['materialname']}}</b></p>
    <p>{{$details['line4']}} <b>[{{$details['supid']}}] {{$details['suppliername']}} Suppliers</b></p>
    <p>{{$details['line5']}} <b>{{$details['currentstock']}}</b></p>
    <p>{{$details['line6']}} <b>${{$details['supplierprice']}}</b></p>
    <br>
    <br>
    <br>
    <br>
    <p>This is a system generated email</p>
</body>
</html>