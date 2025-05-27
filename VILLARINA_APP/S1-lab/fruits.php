<?php
$fruits = [
    [
        "name" => "Apple",
        "image" => "Apple.jpg",
        "description" => "Color<br>Red or Green",
        "fact" => "Apples are rich in antioxidants, dietary fiber, and vitamin C."
    ],
    [
        "name" => "Banana",
        "image" => "Banana.jpg",
        "description" => "Color<br>Yellow",
        "fact" => "Bananas are a good source of potassium and support heart health."
    ],
    [
        "name" => "Grapes",
        "image" => "Grapes.jpg",
        "description" => "Color<br>Purple or Green",
        "fact" => "Grapes contain antioxidants and may support brain health."
    ],
    [
        "name" => "Kiwifruit",
        "image" => "Kiwifruit.jpg",
        "description" => "Color<br>Brown outside, Green inside",
        "fact" => "Kiwifruit is high in vitamin C and helps digestion due to its fiber content."
    ],
    [
        "name" => "Lychee",
        "image" => "Lychee.jpg",
        "description" => "Color<br>Red shell, White flesh",
        "fact" => "Lychee is a tropical fruit rich in vitamin C and antioxidants."
    ],
    [
        "name" => "Mango",
        "image" => "Mango.jpg",
        "description" => "Color<br>Yellow to Orange",
        "fact" => "Mangoes improve immunity and aid in digestion."
    ],
    [
        "name" => "Oranges",
        "image" => "Oranges.jpg",
        "description" => "Color<br>Orange",
        "fact" => "Oranges are well known for their high vitamin C content."
    ],
    [
        "name" => "Star Apple",
        "image" => "Star-Apple.jpg",
        "description" => "Color<br>Purple or Green",
        "fact" => "Star apples are rich in polyphenols and help regulate blood sugar."
    ],
    [
        "name" => "Strawberries",
        "image" => "Strawberries.jpg",
        "description" => "Color<br>Red",
        "fact" => "Strawberries are rich in antioxidants and support heart health."
    ],
    [
        "name" => "Watermelon",
        "image" => "Water-melon.jpg",
        "description" => "Color<br>Green outside, Red inside",
        "fact" => "Watermelons help you stay hydrated and are low in calories."
    ],
];

// Sort the fruits by name alphabetically
usort($fruits, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Fruits</title>
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
        }
        td, th {
            border: 1px solid black;
            padding: 10px;
            vertical-align: top;
            text-align: left;
        }
        .image-cell {
            width: 150px;
        }
        .image-cell img {
            width: 100%;
            height: auto;
        }
        .header {
            text-align: center;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <td colspan="4" class="header">My Fruits</td>
    </tr>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Facts</th>
    </tr>

    <?php foreach ($fruits as $fruit): ?>
    <tr>
        <td class="image-cell">
            <img src="<?php echo $fruit['image']; ?>" alt="<?php echo $fruit['name']; ?>">
        </td>
        <td><?php echo $fruit['name']; ?></td>
        <td><?php echo $fruit['description']; ?></td>
        <td><?php echo $fruit['fact']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
