<h1>BookDB</h1>
<p>Welcome to the book DB site.</p>
<?php foreach($books as $item) {
    //echo $item->name;
    include 'books/item.php';
} 
?>