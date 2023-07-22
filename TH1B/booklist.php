<?php

class BookList {
  public $books = [];

  // Thêm sách vào danh sách
  public function addBook($book) {
    $this->books[] = $book;
  }

  // Sắp xếp theo tên tác giả
  public function sortByAuthor() {
    usort($this->books, function($a, $b) {
      return strcmp($a->author, $b->author);
    });
  }

  // Sắp xếp theo tiêu đề sách
  public function sortByTitle() {
    usort($this->books, function($a, $b) {
      return strcmp($a->title, $b->title);
    });
  }

  // Sắp xếp theo năm xuất bản
  public function sortByPublicationYear() {
    usort($this->books, function($a, $b) {
      return $a->publicationYear - $b->publicationYear;
    });
  }

  // Hiển thị danh sách sách
  public function displayBookList() {
    foreach ($this->books as $book) {
      $book->displayInfo();
    }
  }
}
?>
