<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{url('/player/edit/'.$data->id)}}" method="POST" style="display: flex; flex-direction: column; width: 200px; gap:10px">
        @csrf
        <input type="text" name="name" placeholder="Nhập tên cầu thủ" value="<?php echo $data->name ?>">
        <input type="number" name="age" placeholder="Nhập tuổi" value="<?php echo $data->age ?>">
        <input type="text" name="national" placeholder="Nhập quốc tịch" value="<?php echo $data->national ?>">
        <input type="text" name="position" placeholder="Nhập vị trí" value="<?php echo $data->position ?>">
        <input type="text" name="salary" placeholder="Nhập lương" value="<?php echo $data->salary ?>">
        <p><?php
            try {
                echo $msg;
            } catch (Exception $ex) {
            }
            ?></p>
        <button type="submit" name="submit">Thêm</button>
    </form>
</body>

</html>