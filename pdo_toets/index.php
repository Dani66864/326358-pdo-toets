<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- custom css file link -->
  <link rel="stylesheet" href="./css/style.css">
  <title>pdo toets</title>
</head>

<body>


  <div class="container">

    <div class="mb-3">
      <h1 class="text-center">Maak je eigen pizza</h1>
    </div>
    <form action="./insert.php" method="POST">
      <div class="mb-3">
        <label for="bodemformaat" class="form-label">Bodemformaat</label>
        <select class="form-select" aria-label="Default select example" name="bodemformaat" required>
          <option selected>Maak je keuze</option>
          <option value="20">20 cm</option>
          <option value="25">25 cm</option>
          <option value="30">30 cm</option>
          <option value="35">35 cm</option>
          <option value="40">40 cm</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="saus" class="form-label">Saus</label>
        <select class="form-select" aria-label="Default select example" name="saus" required>
          <option selected>Maak je keuze</option>
          <option value="tomatensaus">Tomatensaus</option>
          <option value="extra_tomatensaus">Extra tomatensaus</option>
          <option value="spicy_tomatensaus">Spicy tomatensaus</option>
          <option value="BBQ_saus">BBQ saus</option>
          <option value="créme_fraiche">Créme fraiche</option>
        </select>
      </div>


      <div class="mb-3">
        <label for="pizzatoppings" class="form-label">Pizzatoppings</label>
        <div class="form-check">
          <input class="form-check-input" name="Pizzatoppings" value="vegen" type="radio" name="vegen" id="vegen">
          <label class="form-check-label" for="vegen">
            vegen
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" name="Pizzatoppings" value="vegetarisch" type="radio" name="vegetarisch" id="vegetarisch">
          <label class="form-check-label" for="vegetarisch">
            vegetarisch
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" name="Pizzatoppings" value="vlees" type="radio" name="vlees" id="vlees">
          <label class="form-check-label" for="vlees">
            vlees
          </label>
        </div>
      </div>


      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Kruiden</label>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="kruiden" value="peterselie" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Peterselie
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" name="kruiden" type="checkbox" value="oregano" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Oregano
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" name="kruiden" type="checkbox" value="chili_flakes" id="flexCheckChecked" checked>
          <label class="form-check-label" for="flexCheckChecked">
            Chili flakes
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" name="kruiden" value="zwarte_peper" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Zwarte peper
          </label>
        </div>
      </div>


      <div class="mb-3">
        <div class="d-grid gap-2">
          <button class="btn btn-primary" name="submit" type="submit">Bestel</button>
        </div>
      </div>
    </form>
  </div>


  <?php 
  
  include_once('read.php');
  ?>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>