{{-- @section('content')
    <p>content section.</p>
@endsection


@hasSection ('content')
    <p>section ase.</p>
@else
    <p>section nai.</p>
@endif --}}



 
{{-- <span class="p-4 text-gray-500 bg-red"></span> --}}

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .bg-red{
            background-color: red;
        }
    </style>
</head>
<body>

    <input type="checkbox" name="active" value="@checked(old('active', $user->active))"  />
    
</body>
</html>