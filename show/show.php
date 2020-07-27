<?php
  include __DIR__ . '/server.php';
  include __DIR__ . '/../partials/header.php';
?>

<?php if (!empty($room)) { ?>

  <main>
    <h2>Stanza numero: <?php echo $room['room_number'] ?></h2>

    <ul>
        <li>ID: <?php echo $room['id'] ?></li>
        <li>NUMERO CAMERA: <?php echo $room['room_number'] ?></li>
        <li>PIANO: <?php echo $room['floor'] ?></li>
        <li>LETTI: <?php echo $room['beds'] ?></li>
        <li>CREATO IL: <?php echo $room['created_at'] ?></li>
    </ul>

    <h3><a href="<?php echo $url; ?>">TORNA ALLA PAGINA INIZIALE</a></h3>
  </main>

<?php } else { ?>
  <p>LA CAMERA NON ESISTE</p>
<?php } ?>
