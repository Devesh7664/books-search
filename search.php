<?php
include 'config.php';
$book_name = $_GET['book_name'] ?? '';
$author_name = $_GET['author_name'] ?? '';

if (strlen($book_name) > 1 && strlen($author_name) >1) {
    $sql = "SELECT book_name, author_name, price from books where book_name like '%$book_name%' or  author_name like '%$author_name%'";
} else if (strlen($book_name) > 1) {
    $sql = "SELECT book_name, author_name, price from books where book_name like '%$book_name%'";
} else if (strlen($author_name) > 1) {
    $sql = "SELECT book_name, author_name, price from books where author_name like '%$author_name%'";
} else {
    $sql = "SELECT book_name, author_name, price from books";
}


$query = mysqli_query($conn, $sql);

echo '<table class="table table-bordered mt-2"> 
    <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
<tbody>';

while($rows = mysqli_fetch_assoc($query)) {
    echo "<tr>
            <td>" . $rows['book_name'] . " </td> 
            <td> " . $rows['author_name'] . "</td>
            <td> $" . $rows['price'] . "</td>
        </tr>";
}
echo '</tbody>
</table>';
?>
