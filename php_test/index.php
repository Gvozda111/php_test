<?php include './header.layout.php' ?>


   <p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis iure pariatur cumque, 
    sed, dolores cum libero voluptas atque suscipit alias necessitatibus nemo rem ipsa obcaecati impedit 
    quidem dolorem perspiciatis officia.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero, beatae tempora 
    iste pariatur eum aliquam nobis corporis in molestiae dicta ullam similique, odit explicabo, 
    fugiat et quos? Dolor, illo? In! Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Ad iure, reprehenderit ipsum laboriosam numquam cumque quidem dignissimos odit pariatur 
    ex non voluptate expedita in tenetur quibusdam nisi veniam porro mollitia
   </p>

    
      <form action="./index.php" method ="get">
        <input type="search" placeholder="Search for some word" name="search_input" class="search"value="<?php echo isset($_GET['search_button']) ? $_GET['search_button'] : "" ?>">
        <button name="search_button" class="search_button">Search</button>
      </form>
   
   

<?php include './footer.layout.php' ?>





