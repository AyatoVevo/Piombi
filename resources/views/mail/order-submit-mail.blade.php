<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


     @foreach($info['orders'] as $order)
        <h4>{{$order}}</h4>
    @endforeach

    @foreach($info['quantities'] as $quantity)
        <h4>{{$quantity}}</h4>
    @endforeach
    
    <p>{{$info['email']}}</p>

    <h4>More info:</h4>
    <p>{{$info['message']}}</p>
</body>
</html>