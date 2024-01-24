<?php 

$posts = [
    '17/10/2023' => [
        [
            'title' => 'Runaway Houses City Clouds',
            'author' => 'Tame Impala',
            'text' => 'But dont remind me of home, theres everywhere id rather go',
        ],
        [
            'title' => 'Could Have Been Me',
            'author' => 'The Struts',
            'text' => 'I wanna live better days, never look back and say could have been me',
        ]
    ],
    '22/01/2024' => [
        [
            'title' => 'Revolution',
            'author' => 'The Score',
            'text' => 'I been waiting all my life to live when ive only been dreaming',
        ],
    ],
    '02/02/2024' => [
        [
            'title' => 'Alright',
            'author' => 'Superglass',
            'text' => 'We are strange in our worlds but e are young, we get by',
        ],
        [
            'title' => 'fineshrine',
            'author' => 'Purity Ring',
            'text' => 'Get a little closer let fold, cut open my sternum and pull my little ribs around you',
        ]
    ]
 ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
 
 <?php 
   foreach($posts as $index => $post) {
    echo '<h3>'.$index.'</h3>';

    foreach($post as $key => $elem) { 
       foreach($elem as $defpost) {
        echo '<li>'.$defpost.'</li>';
       }
    }
   }
 ?>

</body>
</html>