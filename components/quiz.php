<?php if (!$submitted): ?>
    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
        <?php foreach ($quiz as $key => $question): ?>
            <fieldset>
                <legend><?= 'Question ' . ($key + 1) . ': ' . $question['question'] ?></legend>
                <?php foreach ($question['options'] as $optionKey => $option): ?>
                    <label>
                        <input type="radio" name="q<?= ($key + 1) ?>" value="<?= $optionKey ?>">
                        <?= $option ?>
                    </label><br>
                <?php endforeach; ?>
            </fieldset>
        <?php endforeach; ?>
        <button type="submit">Submit</button>
    </form>
<?php else: ?>
    <?php if ($allQuestionsAnswered): ?>
        <p>Your score: <?= $score ?> out of <?= count($quiz) ?></p>
        <p><a href="hardware-quiz.php" class="button">Retry</a></p>
        <?php if ($score === count($quiz)): ?>
            <p><?= $perfectScoreMessage ?></p>
            <a href="software.php" class="button">Continue to software</a>
        <?php endif; ?>
    <?php else: ?>
        <p>Please answer all questions before submitting the quiz.</p>
        <p><a href="hardware-quiz.php" class="button">Retry</a></p>
    <?php endif; ?>
    <p><a href="hardware.php" class="button">Back to Hardware Overview</a></p>
<?php endif; ?>