<?php
  include __DIR__ . '/header.php';
?>

    <!-- MAIN -->
    <main>
      <table>

        <thead>

          <tr>
            <td>ID</td>
            <td>NUMERO STANZA</td>
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
              <td><a href="<?php echo $url . "server.php"; ?>">View</a></td>
            </tr>
          <?php }; ?>
        </tbody>

      </table>
    </main>

  </body>
</html>
