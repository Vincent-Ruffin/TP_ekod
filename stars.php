<!-- Connection de la base de donnée-->
<?php
    $connexion = mysqli_connect(
        "localhost", // server
        "root", //login mysql sur server
        "root", //mot de passe mysql
        "starwars" //nom de la base de données
    );
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page planète</title>
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
<nav class="navbar">
      <div class="container">
        <h1 class="logo">Stars wars Pédia</h1>
        <ul class="nav">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
        </ul>
      </div>
    </nav>
    <?php
        error_reporting(E_ERROR);
        ini_set("display_errors", true);
        // Récupérez le nom de la planète à partir de l'URL
        $nom_planete = $_GET["nom_planete"];
        var_dump($nom_planete);
        // Sélectionnez les données de la planète correspondant au nom
        $sql = "SELECT * FROM planets WHERE name='$nom_planete'";
        $result = mysqli_query($connexion, $sql);
        $planet = $result->fetch_assoc();
    ?>
    <!-- Showcase -->
    <section class="section-a">
      <div class="container">
        <div>
          <h1><?php print $nom_planete["name"]; ?></h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
            repudiandae rerum libero ipsum asperiores omnis mollitia, nostrum
            commodi placeat ea itaque modi corrupti corporis nam voluptas aut
            reprehenderit eaque culpa.
          </p>
          <a href="#" class="btn">Read More</a>
        </div>
        <img src="https://i.ibb.co/37Y74kv/showcase.jpg" alt="" />
      </div>
    </section>

    <!-- Large Text -->
    <section id="about" class="section-b">
      <div class="overlay">
        <div class="section-b-inner py-5">
          <h3 class="text-2">Loud & Clear</h3>
          <h2 class="text-5 mt-1">People Aren't Hearing All the Music</h2>
          <p class="mt-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
            repudiandae laboriosam quia, error tempore porro ducimus voluptate
            laborum nostrum iure.
          </p>
        </div>
      </div>
    </section>

    <!-- Gallery -->
    <section class="section-c">
      <div class="gallery">
        <a href="https://i.ibb.co/CHLBZnp/gal2323.jpg" class="big"
          ><img src="https://i.ibb.co/CHLBZnp/gal2323.jpg" alt=""
        /></a>
        <a href="https://i.ibb.co/4pBbhfY/gal39834.jpg" class="big"
          ><img src="https://i.ibb.co/4pBbhfY/gal39834.jpg" alt=""
        /></a>
        <a href="https://i.ibb.co/xSnHP7g/gal43884.jpg" class="big"
          ><img src="https://i.ibb.co/xSnHP7g/gal43884.jpg" alt=""
        /></a>
        <a href="https://i.ibb.co/QN6Bnrb/gal4958.jpg" class="big"
          ><img src="https://i.ibb.co/QN6Bnrb/gal4958.jpg" alt=""
        /></a>
        <a href="https://i.ibb.co/dGZvj75/gal4545.jpg" class="big">
          <img src="https://i.ibb.co/dGZvj75/gal4545.jpg" alt=""
        /></a>
        <a href="https://i.ibb.co/S6FVFNt/gal74744.jpg" class="big"
          ><img src="https://i.ibb.co/S6FVFNt/gal74744.jpg" alt=""
        /></a>
      </div>
    </section>

    <!-- Footer -->
    <footer class="section-footer py-4 bg-primary">
      <div class="container">
        <div>
          <h2 class="text-2 mb-1">Lorem ipsum dolor sit.</h2>
          <a href="http://twitter.com">
            <i class="fab fa-twitter fa-2x"></i>
          </a>
          <a href="http://facebook.com">
            <i class="fab fa-facebook fa-2x"></i>
          </a>
          <a href="http://youtube.com">
            <i class="fab fa-youtube fa-2x"></i>
          </a>
        </div>
        <div>
          <h3>Company Info</h3>
          <ul>
            <li><a href="#">All Products</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
        <div>
          <h3>Blog Posts</h3>
          <ul>
            <li><a href="#">Lorem ipsum dolor.</a></li>
            <li><a href="#">Lorem ipsum dolor.</a></li>
            <li><a href="#">Lorem ipsum dolor.</a></li>
            <li><a href="#">Lorem ipsum dolor.</a></li>
          </ul>
        </div>
        <div>
          <h3>Subscribe</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
          </p>
          <form
            class="mt-1"
            name="email-form"
            method="POST"
            data-netlify="true"
          >
            <div class="email-form">
              <span class="form-control-wrap"
                ><input
                  type="email"
                  name="email"
                  id="email"
                  size="40"
                  class="form-control"
                  placeholder="E-mail"/></span
              ><button type="submit" value="Submit" class="form-control submit">
                <i class="fas fa-chevron-right"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </footer>
</body>
</html>