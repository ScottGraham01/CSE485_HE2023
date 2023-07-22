<!DOCTYPE html>
<html>
<head>
  <title>Hệ Thống Quản Lý Sách</title>
</head>
<body>
  <h1>Hệ Thống Quản Lý Sách</h1>
  <form method="post">
    <label for="title">Tiêu đề:</label>
    <input type="text" id="title" name="title" required>
    <br>
    <label for="author">Tác giả:</label>
    <input type="text" id="author" name="author" required>
    <br>
    <label for="publisher">Nhà xuất bản:</label>
    <input type="text" id="publisher" name="publisher" required>
    <br>
    <label for="publicationYear">Năm xuất bản:</label>
    <input type="number" id="publicationYear" name="publicationYear" required>
    <br>
    <label for="isbn">Mã sách:</label>
    <input type="text" id="isbn" name="isbn" required>
    <br>
    <label for="chapters">Chương:</label>
    <input type="text" id="chapters" name="chapters" required>
    <br>
    <input type="submit" name="addBook" value="Thêm sách">
    <input type="submit" name="sortByName" value="Xếp theo Tên">
    <input type="submit" name="sortByTitle" value="Xếp theo Tiêu đề">
    <input type="submit" name="sortByPublicationYear" value="Xếp theo Năm xuất bản">
  </form>

  <div id="bookList">
    <!-- Chi tiết sách được hiển thị tại đây -->
    <?php
      // Bao gồm các lớp Book và BookList
      include('book.php');
      include('booklist.php');

      session_start();

      if (!isset($_SESSION['bookList'])) {
        $_SESSION['bookList'] = new BookList();
      }

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['addBook'])) {
          $title = $_POST['title'];
          $author = $_POST['author'];
          $publisher = $_POST['publisher'];
          $publicationYear = $_POST['publicationYear'];
          $isbn = $_POST['isbn'];
          $chapters = explode(',', $_POST['chapters']);

          $book = new Book($title, $author, $publisher, $publicationYear, $isbn, $chapters);
          $_SESSION['bookList']->addBook($book);
        } elseif (isset($_POST['sortByName'])) {
          $_SESSION['bookList']->sortByAuthor();
        } elseif (isset($_POST['sortByTitle'])) {
          $_SESSION['bookList']->sortByTitle();
        } elseif (isset($_POST['sortByPublicationYear'])) {
          $_SESSION['bookList']->sortByPublicationYear();
        }
      }

      // hiển thị bookList
      $_SESSION['bookList']->displayBookList();
    ?>
  </div>
</body>
</html>
