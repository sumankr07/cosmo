<?php
$locations = [
    [
        'img' => '/img/c-2.png', 
        'title' => "Dunao, California", 
        'name' => "95 Properties", 
    ],
    [
        'img' => '/img/c-3.png', 
        'title' => "Liverpool, London", 
        'name' => "95 Properties", 
    ],
    [
        'img' => '/img/c-4.png', 
        'title' => "San Francisco, New York", 
        'name' => "95 Properties", 
    ],
    [
        'img' => '/img/c-8.png', 
        'title' => "Dhaka, UAE", 
        'name' => "26 Properties", 
    ]
];
?>
<div class="row col-sm-6 showcase-left align-content-center m-0 p-0 h-75">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="location-property-wrap rounded-4 p-2">
            <div class="location-property-thumb rounded-4 h-75">
                <a href="listings-list-with-sidebar.php"><img src="<?php echo $static_url; ?>/img/c-1.png" class="img-fluid" alt="" /></a>
            </div>
            <div class="location-property-content">
                <div class="lp-content-flex">
                    <h4 class="lp-content-title">San Francisco, California</h4>
                    <span class="text-muted-2">95 Properties</span>
                </div>
                <div class="lp-content-right">
                    <a href="listings-list-with-sidebar.php" class="text-primary">
                        <span class="svg-icon svg-icon-2hx">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
                                <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row col-sm-6 showcase-right">
<?php foreach ($locations as $item): ?>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-1">
        <div class="location-property-wrap rounded-4 p-2">
            <div class="location-property-thumb rounded-4">
                <a href="listings-list-with-sidebar.php"><img src="<?php echo $static_url, $item['img']; ?>" class="img-fluid" alt="" /></a>
            </div>
            <div class="location-property-content">
                <div class="lp-content-flex">
                    <h4 class="lp-content-title"><?php echo $item['title']; ?></h4>
                    <span class="text-muted-2"><?php echo $item['name']; ?></span>
                </div>
                <div class="lp-content-right">
                    <a href="listings-list-with-sidebar.php" class="text-primary">
                        <span class="svg-icon svg-icon-2hx">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
                                <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>