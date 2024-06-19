<div style="display: flex; ">
    <?php
    $href = "https://amzn.to/3yQPq8A";
    $src = "https://m.media-amazon.com/images/I/7179ptx741L._AC_SX569_.jpg";
    $alt = "AAA"; ?>
    <div class="amazon-product" class="d-block w-100" style="width: 100px;">
        <a href="<?= $href; ?>" target="_blank">
            <img src="<?= $src; ?>" alt="AAA">
        </a>

    </div>

    <?php
    $href = "https://www.amazon.es/dp/B083TRM93Q?_encoding=UTF8&psc=1&linkCode=ll1&tag=adrian8204-21&linkId=d1e24e82c8da65099b62b711d64985da&language=es_ES&ref_=as_li_ss_tl";
    $src = "https://m.media-amazon.com/images/I/81ebFoB6-9L._AC_SX569_.jpg";
    $alt = "AAA"; ?>

    <div class="amazon-product" class="d-block w-100" style="width: 100px;">
        <a href="<?= $href; ?>" target="_blank">
            <img src="<?= $src; ?>" alt="AAA">
        </a>
    </div>


    <?php
    $href = "https://www.amazon.es/Danfiki-Camisa-Hawaiana-Hombre-Camisas/dp/B0D2CWH8C2?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1BJDM69TI67HB&dib=eyJ2IjoiMSJ9.g7Fo-DN7PeTgn0CpFJkDZHlEk8QxldBUOeaqjid44Er_UXbQ6bHvD9gHoN3Z4LkDoeDueF4itboCOPmKw3JzOXNxgJMb_HB_k67nnJxk9pR5QS-caD2u-oqwhtbLIy4w4d50A0lKPRoitXUupYk5QiOx9NSZztSuN9g8EyYxJ1S9qwVCHs1Wxy7RccyuxulLONMtE4SZJxgPjEgj1o6ME8m0JzinG_Bah8ILwpzM68V2Yuxka8XtIvpSYTAXZyZy5FZhJePrNRobMDTrNfT6NLFzOeDAhwUv773VvCFJZT8.OAp2NWwAtYxdzeuLg8cu2t2FhZGrr61SMrhkfqa7hvs&dib_tag=se&keywords=camisas+hawaianas&qid=1718143466&s=apparel&sprefix=camisas+hawayanas%2Cfashion-mens%2C138&sr=1-5&linkCode=ll1&tag=adrian8204-21&linkId=68e5aefc9d22c1a3d95b1337a5647042&language=es_ES&ref_=as_li_ss_tl";
    $src = "https://m.media-amazon.com/images/I/81RNOk6QC-L._AC_SX569_.jpg";
    $alt = "AAA"; ?>

    <div class="amazon-product" class="d-block w-100" style="width: 100px;">
        <a href="<?= $href; ?>" target="_blank">
            <img src="<?= $src; ?>" alt="AAA">
        </a>
    </div>
</div>

<style>
     .amazon-product{
        border: 1px solid black;
     }

    .amazon-product img:hover {
    transform: scale(1.2);
    border: 2px solid black;
    
}
</style>