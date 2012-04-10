<html>
	<head>
		<title>eh toq github</title>
	</head>
	<body>
		<?php
			class SimpleBook {


    private $author;
    private $title;


    function __construct($author, $title) {
      $this->author = $author;
      $this->title  = $title;
    }


    function getAuthor() {return $this->author;}


    function getTitle() {return $this->title;}


  }
  
	class BookAdapter {


    private $book;


    function __construct(SimpleBook $book_in) {
      $this->book = $book_in;
    }


    function getAuthorAndTitle() {
      return $this->book->getTitle() . ' by ' . $this->book->getAuthor();
    }


  }
  
   $book = new SimpleBook("Dan Brown",
                         "Angels and demons");
  
  $bookAdapter = new BookAdapter($book);
  
  echo "$bookAdapter->getAuthorAndTitle()";
		?>
	</body>
</html>