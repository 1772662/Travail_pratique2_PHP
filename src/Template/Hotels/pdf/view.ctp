<div class="Hotels view large-9 medium-8 columns content">
    <h3><?= h($hotel->hotel_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <td><?= h($hotel->hotel_address) ?></td>
        </tr>
        <tr>
            <td><?= h($hotel->hotel_postcode) ?></td>
        </tr>
        <tr>
            <td><?= h($hotel->url) ?></td>
        </tr>
    </table>

    <div class="related">
      <h4><?= __('Related Room Bookings') ?></h4>
      <?php if (!empty($hotel->room_bookings)): ?>

        <table cellpadding="0" cellspacing="0" border="1">
          <tr>
              <th scope="col"><?= __('Number Room') ?></th>
              <th scope="col"><?= __('Room Type') ?></th>
          </tr>

            <?php foreach ($hotel->room_bookings as $x): ?>
            <tr>
              <td><?= h($x->number_room) ?></td>
              <td><?= h($x->room_type) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
