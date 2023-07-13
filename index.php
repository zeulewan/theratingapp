<!DOCTYPE html>
<html>
<head>
<style>
  .button_image {
    border: none;
    text-decoration: none;
  }

  .image_container {
    display: flex;
    justify-content: center;
    gap: 2em;
  }
</style>
</head>
<body>

<div class="image_container">
  <form action="process_vote.php" method="post">
    <button type="submit" class="button_image" name="vote" value="Picasso">
      <img src="https://upload.wikimedia.org/wikipedia/en/b/b1/Picasso_la_vie.jpg" alt="Picasso" width="300" height="200">
    </button>
  </form>

  <form action="process_vote.php" method="post">
    <button type="submit" class="button_image" name="vote" value="Van_Gogh">
      <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Vincent_van_Gogh_-_Road_with_Cypress_and_Star_-_c._12-15_May_1890.jpg" alt="Van Gogh" width="300" height="200">
    </button>
  </form>
</div>

</body>
</html>

