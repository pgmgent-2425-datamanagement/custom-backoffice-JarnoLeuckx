<div class="item">
    <div class="title">
        <?= $book->title; ?>
    </div>
    
    <div class="buttons">
        <a href="/book/edit/<?= $book->id; ?>">Edit</a>
        <a href="/book/delete/<?=$book->id?>">Delete</a>
       
    </div>
</div>