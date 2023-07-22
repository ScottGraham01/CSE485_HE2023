<?php
// Book class
class Book {
  public $title;
  public $author;
  public $publisher;
  public $publicationYear;
  public $isbn;
  public $chapters;

  public function __construct($title, $author, $publisher, $publicationYear, $isbn, $chapters) {
    $this->title = $title;
    $this->author = $author;
    $this->publisher = $publisher;
    $this->publicationYear = $publicationYear;
    $this->isbn = $isbn;
    $this->chapters = $chapters;
  }

  // Hiển thị thông tin Sách
  public function displayInfo() {
    echo "<p><b>Title:</b> $this->title</p>";
    echo "<p><b>Author:</b> $this->author</p>";
    echo "<p><b>Publisher:</b> $this->publisher</p>";
    echo "<p><b>Publication Year:</b> $this->publicationYear</p>";
    echo "<p><b>ISBN:</b> $this->isbn</p>";
    echo "<p><b>Chapters:</b> " . implode(", ", $this->chapters) . "</p>";
    echo "<hr>";
  }
}
?>
