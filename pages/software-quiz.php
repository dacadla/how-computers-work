<?php
// Define quiz questions and correct answers
$quiz = [
    [
        'question' => 'What is a Boot Loader?',
        'options' => [
            'A' => 'A type of software that manages computer hardware and software resources',
            'B' => 'A type of software that loads your kernel on boot',
            'C' => 'A type of software that protects your computer from viruses',
        ],
        'answer' => 'B',
    ],
    [
        'question' => 'What is a Kernel?',
        'options' => [
            'A' => 'A type of software that sits between the hardware and the software',
            'B' => 'A type of software that allows you to create documents',
            'C' => 'A type of software that protects your computer from viruses',
        ],
        'answer' => 'A',
    ],
    [
        'question' => 'What is a Driver in the context of software?',
        'options' => [
            'A' => 'A type of software that manages computer hardware and software resources',
            'B' => 'A type of software that allows you to create documents',
            'C' => 'A type of software that gives the kernel information on how to "drive" the hardware components',
        ],
        'answer' => 'C',
    ],
    [
        'question' => 'What is a Standard Library?',
        'options' => [
            'A' => 'A type of software that allows your applications to communicate with the kernel',
            'B' => 'A type of software that allows you to create documents',
            'C' => 'A type of software that protects your computer from viruses',
        ],
        'answer' => 'A',
    ],
    [
        'question' => 'What is a Display & Seat Manager?',
        'options' => [
            'A' => 'A type of software that manages computer hardware and software resources',
            'B' => 'A type of software that manages sign in and sign out, and usually has a frontend for sign in',
            'C' => 'A type of software that protects your computer from viruses',
        ],
        'answer' => 'B',
    ],
    [
        'question' => 'What is a Window Manager?',
        'options' => [
            'A' => 'A type of software that manages the display and interaction of windows on your screen',
            'B' => 'A type of software that allows you to create documents',
            'C' => 'A type of software that protects your computer from viruses',
        ],
        'answer' => 'A',
    ],
    [
        'question' => 'What is a Desktop Environment?',
        'options' => [
            'A' => 'A type of software that manages computer hardware and software resources',
            'B' => 'A type of software that allows you to create documents',
            'C' => 'A collection of programs needed for a GUI, including the window manager and other UI components',
        ],
        'answer' => 'C',
    ],
    [
        'question' => 'What is Utility Software?',
        'options' => [
            'A' => 'A type of software that helps users perform specific tasks, such as managing files or protecting against viruses',
            'B' => 'A type of software that allows you to create documents',
            'C' => 'A type of software that protects your computer from viruses',
        ],
        'answer' => 'A',
    ],
    [
        'question' => 'What is an Office Suite?',
        'options' => [
            'A' => 'A type of software that manages computer hardware and software resources',
            'B' => 'A collection of programs used to perform office work, such as word processing and spreadsheets',
            'C' => 'A type of software that protects your computer from viruses',
        ],
        'answer' => 'B',
    ],
    [
        'question' => 'What is a Web Browser?',
        'options' => [
            'A' => 'A type of software that manages computer hardware and software resources',
            'B' => 'A type of software that allows you to create documents',
            'C' => 'A program used to browse the web and access websites',
        ],
        'answer' => 'C',
    ],
];

shuffle($quiz);

// Initialize variables
$score = 0;
$submitted = false;
$perfectScoreMessage = "Congratulations, you should be proud!";
$allQuestionsAnswered = true;

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process user's answers
    foreach ($quiz as $key => $question) {
        $userAnswer = $_POST['q' . ($key + 1)];

        // Check if the user's answer matches the correct answer
        if ($userAnswer === $question['answer']) {
            $score++;
        } elseif (empty($userAnswer)) {
            // If any question is not answered, set the flag to false
            $allQuestionsAnswered = false;
        }
    }

    // Mark the quiz as submitted
    $submitted = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../components/head.php" ?>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Software Quiz</title>
</head>
<body>
<header>
    <h1>Computer Software Quiz</h1>
</header>

<main>
    <section>
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
                    <a href="system-software.php" class="button">Continue</a>
                <?php endif; ?>
            <?php else: ?>
                <p>Please answer all questions before submitting the quiz.</p>
                <p><a href="hardware-quiz.php" class="button">Retry</a></p>
            <?php endif; ?>
            <p><a href="system-software.php" class="button">Back to System software</a></p>
        <?php endif; ?>
    </section>
</main>

<footer>
    <p>&copy; <?= date("Y"); ?> Radovan Mihalik</p>
    <a href="../index.php">Return To Home Page</a>
</footer>
</body>
</html>