<?php

/*
* Description: Ecommerce website
* Author - Eli Mounjim/ Hongshen Lin 
* Version - 11/22/2022
*/

include('../view/header.php');
?>

<main>

    <!-- wraper and figure css -->
    <div id="border_book_page">
    <div id="book_page">
        <figure>

            <!-- Display book image on the left -->
            <img class = "bookImage" src="<?php echo $select_book['pictureName'] ;?>">
  
                <figcaption>

                    <!-- display book name, description, isbn, authors and publisher -->
                    <h2><?php echo $select_book['bookName'];?></h2><br><br><br>
                    <?php echo "Description: ".$select_book['bookDescription']; ?><br><br>
                    <?php echo "isbn: ".$select_book['isbn']; ?><br><br>
                    <?php echo "author(s): ".$select_book['authors']; ?><br><br>
                    <?php echo "publisher: ".$select_book['publisher']; ?><br><br>

                    <!-- Check if there is discount, yes then display price after discount, no then display full price -->
                    <?php if($select_book['discountPercent'] > 0.00) 
                    {
                        //  Using s tag to cross out original price, and using number_format() to get it to display 2 decimal places
                        echo "<s>$".$select_book['listPrice']."</s>&ensp;Now:&nbsp;$".number_format(($select_book['listPrice'] *(1.00 - $select_book['discountPercent'])), 2, '.', '');
                    }
                    else
                    {
                        echo "$".$select_book['listPrice'];
                    }?>
                </figcaption>
        </figure>
    </div>

    <!-- add to cart button -->
    <a class="toCart" href="#">Add&nbsp;To&nbsp;Cart</a>
</main> 

<?php include('../view/footer.php'); ?>
