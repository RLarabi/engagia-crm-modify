<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ul>

        <li><b>Nom : </b> {{ $details['full_name'] }} </li>

        <li><b>Email : </b> {{ $details['email'] }} </li>

        <li><b>Téléphone : </b> {{ $details['phone'] }} </li>

        <li><b>Société : </b> {{ $details['society'] }} </li>

    </ul>
    
</body>
</html>