<?php

    # Ternary operators
    $isLoggedIn = true;
    echo $isLoggedIn ? "You are logged in" : "You are not logged in";

    # Nested ternary operators
    $age = 15
    $score = 20;
    echo "Your score is ".($score > 10 ? ($age > 10: "Average" : "Exceptional"):($age > 10: "Horrible" : "Average"));

?>

<!-- Normal way (with { and }) -->
<div>
    <?php if ($isLoggedIn) { ?>
        <h1>Welcome User</h1>
    <?php } else ?>
        <h1>Welcome Guest</h1>
    <?php } ?>
</div>

<!-- Shorthand way -->
<div>
    <?php if ($isLoggedIn): ?>
        <h1>Welcome User</h1>
    <?php else: ?>
        <h1>Welcome Guest</h1>
    <?php endif; ?>
</div>

<!-- Shorthand foreach loop -->
<div>
    <?php foreach ($arr as $val): ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>

<!-- Shorthand for loop -->
<div>
    <?php for($i = 0; $i < 10; $i++): ?>
        <li><?php echo $i; ?></li>
    <?php endfor; ?>
</div>