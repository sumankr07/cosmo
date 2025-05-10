<?php
$places = [
    [
        'img' => '/img/ct-1.png', 
        'title' => 'Chikago', 
        'name' => '43 Properties', 
    ],
    [
        'img' => '/img/ct-2.png', 
        'title' => 'San Diego', 
        'name' => '35 Properties', 
    ],
    [
        'img' => '/img/ct-3.png', 
        'title' => 'San Francisco', 
        'name' => '42 Properties', 
    ],
    [
        'img' => '/img/ct-4.png', 
        'title' => 'Jacksonville', 
        'name' => '47 Properties', 
    ],
    [
        'img' => '/img/ct-5.png', 
        'title' => 'Virginia Beach', 
        'name' => '17 Properties', 
    ],
    [
        'img' => '/img/ct-6.png', 
        'title' => 'Philadelphia', 
        'name' => '37 Properties', 
    ],
    [
        'img' => '/img/ct-7.png', 
        'title' => 'Seattle', 
        'name' => '32 Properties', 
    ],
    [
        'img' => '/img/ct-8.png', 
        'title' => 'Houston', 
        'name' => '26 Properties', 
    ],
    [
        'img' => '/img/ct-9.png', 
        'title' => 'Los Angeles', 
        'name' => '18 Properties', 
    ],
    [
        'img' => '/img/ct-10.png', 
        'title' => 'Denver', 
        'name' => '12 Properties', 
    ],
    [
        'img' => '/img/ct-11.png', 
        'title' => 'Oklahoma City', 
        'name' => '22 Properties', 
    ],
    [
        'img' => '/img/ct-12.png', 
        'title' => 'Phoenix', 
        'name' => '15 Properties', 
    ],
    [
        'img' => '/img/ct-13.png', 
        'title' => 'New York', 
        'name' => '13 Properties', 
    ]
];
?>

<?php foreach ($places as $item): ?>
<!-- Single Package -->
<div class="col">
    <div class="position-relative">
        <a href="grid-layout-with-sidebar.php" class="d-flex align-items-center justify-content-start border rounded-pill p-2">
            <div class="explod-thumb flex-shrink-0"><img src="<?php echo $static_url, $item['img']; ?>" class="img-fluid circle" width="65" alt=""></div>
            
            <div class="explod-caps ps-3">
                <h5 class="fs-5 fw-medium mb-0"><?php echo $item['title']; ?></h5>
                <p class="text-muted-2 fs-sm m-0"><?php echo $item['name']; ?></p>
            </div>
        </a>
    </div>
</div>
<?php endforeach; ?>