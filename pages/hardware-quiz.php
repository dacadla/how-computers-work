<?php
// Define quiz questions and correct answers
$quiz = [
    [
        'question' => 'What is the CPU?',
        'options' => [
            'A' => 'The brain of the computer',
            'B' => 'A type of monitor',
            'C' => 'A storage device',
        ],
        'answer' => 'A',
    ],
    [
        'question' => 'What is the primary function of the motherboard?',
        'options' => [
            'A' => 'Rendering graphics',
            'B' => 'Providing power to components',
            'C' => 'Housing essential components and providing connectors',
        ],
        'answer' => 'C',
    ],
    [
        'question' => 'What does RAM stand for?',
        'options' => [
            'A' => 'Random Access Memory',
            'B' => 'Read-Only Memory',
            'C' => 'Red And Magenta',
        ],
        'answer' => 'A',
    ],
    [
        'question' => 'How does an SSD differ from an HDD in terms of storage technology?',
        'options' => [
            'A' => 'SSDs use spinning disks, while HDDs use flash memory.',
            'B' => 'SSDs and HDDs use the same storage technology.',
            'C' => 'HDDs use spinning disks, while SSDs use flash memory.',
        ],
        'answer' => 'C',
    ],
    [
        'question' => 'What is the primary role of a GPU?',
        'options' => [
            'A' => 'Providing power to components',
            'B' => 'Rendering graphics and images',
            'C' => 'Storing data',
        ],
        'answer' => 'B',
    ],
    [
        'question' => 'What is the function of a PSU in a computer?',
        'options' => [
            'A' => 'Providing network connectivity',
            'B' => 'Providing electrical power to the components',
            'C' => 'Storing data',
        ],
        'answer' => 'B',
    ],
    [
        'question' => 'What are optical drives typically used for?',
        'options' => [
            'A' => 'Reading and writing optical discs',
            'B' => 'Rendering graphics',
            'C' => 'Providing power to components',
        ],
        'answer' => 'A',
    ],
    [
        'question' => 'Why are cooling components important in a computer?',
        'options' => [
            'A' => 'To make the computer look cool',
            'B' => 'To prevent overheating of components',
            'C' => 'To increase the processing speed of the CPU',
        ],
        'answer' => 'B',
    ],
    [
        'question' => 'What is the primary role of a computer case (chassis)?',
        'options' => [
            'A' => 'Storing data',
            'B' => 'Housing and protecting internal components',
            'C' => 'Rendering graphics',
        ],
        'answer' => 'B',
    ],
    [
        'question' => 'What do input/output (I/O) ports on a computer allow you to do?',
        'options' => [
            'A' => 'Connect peripherals like keyboards and mice',
            'B' => 'Render high-quality graphics',
            'C' => 'Store data',
        ],
        'answer' => 'A',
    ],
    [
        'question' => 'What does a network interface card (NIC) provide in a computer?',
        'options' => [
            'A' => 'Wireless charging for peripherals',
            'B' => 'Wired or wireless network connectivity',
            'C' => 'Rendering graphics',
        ],
        'answer' => 'B',
    ],
    [
        'question' => 'What can you add to a computer by installing expansion cards?',
        'options' => [
            'A' => 'Additional cooling components',
            'B' => 'Extra storage space',
            'C' => 'Functionality and features',
        ],
        'answer' => 'C',
    ],
    [
        'question' => 'What are peripherals in the context of a computer?',
        'options' => [
            'A' => 'Internal storage devices',
            'B' => 'External devices like keyboards, mice, monitors, and printers',
            'C' => 'Sound cards and graphics cards',
        ],
        'answer' => 'B',
    ],
    [
        'question' => 'What do power cables and data cables connect within a computer?',
        'options' => [
            'A' => 'Peripherals to the power supply',
            'B' => 'Hardware components to the motherboard',
            'C' => 'The computer case to the monitor',
        ],
        'answer' => 'B',
    ],
    [
        'question' => 'What is the function of the BIOS/UEFI chip on the motherboard?',
        'options' => [
            'A' => 'Providing electrical power to the components',
            'B' => 'Initializing hardware components during the boot-up process',
            'C' => 'Rendering graphics',
        ],
        'answer' => 'B',
    ],
];

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Hardware Quiz</title>
</head>
<body>
<header>
    <h1>Computer Hardware Quiz</h1>
</header>

<main>
    <section>
        <?php require "../components/quiz.php"; ?>
    </section>
</main>

<footer>
    <p>&copy; <?= date("Y"); ?> Radovan Mihalik</p>
    <a href="../index.php">Return To Home Page</a>
</footer>
</body>
</html>