<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>National</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $item) { ?>
                <tr>
                    <td><?php echo $item->id ?></td>
                    <td><?php echo $item->name ?></td>
                    <td><?php echo $item->age ?></td>
                    <td><?php echo $item->national ?></td>
                    <td><?php echo $item->position ?></td>
                    <td><?php echo $item->salary ?></td>
                    <td><a href="{{url('/player/edit/'.$item->id)}}">Edit</a></td>
                    <td><a href="{{url('/player/delete/'.$item->id)}}">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>