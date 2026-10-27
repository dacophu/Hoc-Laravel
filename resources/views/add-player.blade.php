<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{url('/player/add')}}" method="POST" style="display: flex; flex-direction: column; width: 200px; gap:10px">
        @csrf
        <input type="text" name="name" placeholder="Nhập tên cầu thủ">
        <input type="number" name="age" placeholder="Nhập tuổi">
        <input type="text" name="national" placeholder="Nhập quốc tịch">
        <input type="text" name="position" placeholder="Nhập vị trí">
        <input type="text" name="salary" placeholder="Nhập lương">
        <button type="submit" name="submit">Thêm</button>
    </form>
    @if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</body>

</html>