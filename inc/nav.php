 <a class="navbar-brand" href="#">Navbar</a>

   

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <?php

 if( ! isset($_SESSION['auth']) ){
?>
                <li class="nav-item">
                    <a class="nav-link active" href="./index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./login.php">Login</a>
                </li>

                   <li class="nav-item">
                    <a class="nav-link" href="./register.php">Register</a>
                </li>


<?php } ; ?>



              <?php

 if(isset($_SESSION['auth']) ){
?>

                      <li class="nav-item">
                    <a class="nav-link" href="./logout.php">Logout</a>
                </li>

                       <li class="nav-item">
                    <a class="nav-link" href="./profile.php">Profile</a>
                </li>
<?php } ; ?>

              

            </ul>

            <!-- <form class="d-flex" role="search">
                <input class="form-control me-1"
                       type="search"
                       placeholder="Search"
                       aria-label="Search">

                <button class="btn btn-outline-success" type="submit">
                    Search
                </button>
            </form> -->

        </div>
    </div>
</nav>
<?php



?>