<?php for($i = 1; $i < 101; $i++): ?>
    <?php if(($i%3) == 0 && ($i%5) != 0): ?>
      fizz <br>
    <?php elseif(($i%3) != 0 && ($i%5) == 0): ?>
      buzz <br>
    <?php elseif(($i%3) == 0 && ($i%5) == 0): ?>
      fizzbuzz <br>
    <?php else: ?>
      <?= $i ?><br>
    <?php endif; ?>
<?php endfor; ?>