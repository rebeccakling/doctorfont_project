<?php
    $image = substr($post['image'], 3);
    $date = substr($post['date'], 0, -3);
?>

<div class="post_card">
    
    <h2 class="post_card_title"><?=$post["title"];?></h2>
    <?php
        if($_SESSION['is_admin'] === true){?>
            <a href="views/create_post_view.php?update_post=<?=$post['id']?>" class="edit_post">Redigera inlägg</a>
            <a href="includes/delete_post.php?remove_post=<?=$post['id']?>" class="edit_post">Ta bort inlägg</a>
        <?php } ?>
    <p class="post_card_date"><?=$date;?></p>
    <div class="post_card_image_frame">
        <img class="post_card_image" src="<?= $image;?>" alt="Bild för inlägget <?=$post['title'];?>">
    </div>
    <div class="post_card_description">
        <?=$post["description"];?>
    </div>

    <a href="views/comment_view.php?post=<?=$post['id']?>">Visa alla kommentarer()</a>

    <hr class="post_card_border">
            
</div>