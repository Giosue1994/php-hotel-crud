<?php
  include __DIR__ . '/database.php';
  include __DIR__ . '/server.php';
  include __DIR__ . '/partials/header.php';
?>

    <!-- MAIN -->
    <main>
      <table>

        <thead>

          <tr>
            <td>ID</td>
            <td>NUMERO CAMERA</td>
            <td>PIANO</td>
            <td>DETTAGLI</td>
          </tr>

        </thead>

        <tbody>
          <?php foreach ($rooms as $room) {?>
            <tr>
              <td><?php echo $room['id'] ?></td>
              <td><?php echo $room['room_number'] ?></td>
              <td><?php echo $room['floor'] ?></td>
              <td><a href="<?php echo $url . 'show/show.php?id=' . $room['id']; ?>">View</a></td>
            </tr>
          <?php }; ?>
        </tbody>

      </table>
    </main>

  </body>
</html>
