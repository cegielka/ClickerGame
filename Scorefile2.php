<?php

$conn = mysqli_connect('localhost', 'root','clicker');

$query = 'SELECT * FROM counter ORDER BY score DESC LIMIT 10';

$result = mysqli_query($conn, $query);

$records = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($records);