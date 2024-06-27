<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP hotelt</title>
</head>
<body>
    <h1 class='d-flex justify-content-center text-primary'>I nostri hotel:</h1>
    <main>
        <section>
            <table class="table m-2">
                <thead>
                    <tr>
                        <th class ='text-primary'scope="col">Name</th>
                        <th class ='text-primary'scope="col">Description</th>
                        <th class ='text-primary'scope="col">Parking</th>
                        <th class ='text-primary'scope="col">Vote</th>
                        <th class ='text-primary'scope="col">Distance to center</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($hotels as $hotel ) {?>
                    <tr>
                        <th scope="row"><?php echo $hotel['name']  ?></th>
                        <td><?php echo $hotel['description']  ?></td>
                        <td><?php echo $hotel['parking']  ?></td>
                        <td><?php echo $hotel['vote']  ?></td>
                        <td><?php echo $hotel['distance_to_center']  ?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </section>
        <form action='./index.php' action='GET'>
            <div class="mb-3 form-check">
                <input type="checkbox"  name="parking" id="parking" />
                <label id="parking">Incluso parcheggio</label>
                <button type="submit" class="btn btn-primary m-2">Send</button>
            </div>
        </form>
    </main>

</body>
</html>