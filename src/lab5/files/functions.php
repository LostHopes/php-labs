<?php
$path = "../files/";
function checkIfFileExists(string $file): void
{
    global $path;
    $full_path = "{$path}{$file}";
    if (is_file($full_path) && is_readable($full_path)) {
        echo "{$file} exists in {$path} and is ready to read";
        return;
    }
    $created_file = fopen($full_path, "w") or die("Could not create the file");
    fwrite($created_file, "<?php return 3.1415;?>");
    echo "$file was written";
    fclose($created_file);
}

function createAndReadFile(string $file): void
{
    global $path;
    $full_path = "{$path}{$file}";

    if (is_writable($full_path) && is_file($full_path)) {
        echo "File is on the server and ready to read";
        return;
    }

    $write = fopen($full_path, "w") or die("Could not open the file");
    fputs($write, " Запис в файл \n");
    fclose($write);
    $read = fopen($full_path, "a") or die("Could not create the file");
    fputs($read, " Додавання в кінець файлу ");
    fclose($read);


}

function sortWordsAlphabetically(string $filename)
{
    $file = fopen($filename, "r");
    $text = fread($file, filesize($filename));
    fclose($file);

    $words = explode(" ", $text);
    sort($words);
    $words = array_filter($words); // remove empty elements

    echo "<p>Words in alphabetical order:</p>";
    echo "<ul>";
    foreach ($words as $word) {
        echo "<li>" . $word . "</li>";
    }
    echo "</ul>";
}

function findMostFrequentWords(string $filename)
{
    $file = fopen($filename, "r");
    $text = fread($file, filesize($filename));
    fclose($file);

    $words = explode(" ", $text);
    $word_counts = array_count_values($words);
    arsort($word_counts);

    echo "<p>Most frequently occurring words:</p>";
    echo "<ul>";
    $i = 0;
    foreach ($word_counts as $word => $count) {
        if ($i == 2) {
            break;
        }
        echo "<li>" . $word . " (" . $count . " occurrences)</li>";
        $i++;
    }
    echo "</ul>";
}

function findLongestWord(string $filename)
{
    $file = fopen($filename, "r");
    $text = fread($file, filesize($filename));
    fclose($file);

    $words = explode(" ", $text);
    $longest_word_length = 0;
    foreach ($words as $word) {
        $word_length = strlen($word);
        if ($word_length > $longest_word_length) {
            $longest_word_length = $word_length;
        }
    }

    echo "<p>Longest word(s):</p>";
    echo "<ul>";
    foreach ($words as $word) {
        if (strlen($word) == $longest_word_length) {
            echo "<li>" . $word . " (" . $longest_word_length . " characters)</li>";
        }
    }
    echo "</ul>";
}

function findShortestWord(string $filename)
{
    $file = fopen($filename, "r");
    $text = fread($file, filesize($filename));
    fclose($file);
    $words = explode(" ", $text);
    $shortest_word_length = PHP_INT_MAX;
    foreach ($words as $word) {
        $word_length = strlen($word);
        if ($word_length < $shortest_word_length) {
            $shortest_word_length = $word_length;
        }
    }

    echo "<p>Shortest word(s):</p>";
    echo "<ul>";
    foreach ($words as $word) {
        if (strlen($word) == $shortest_word_length) {
            echo "<li>" . $word . " (" . $shortest_word_length . " characters)</li>";
        }
    }
    echo "</ul>";
}

function findWordsStartingWithA(string $filename)
{
    $file = fopen($filename, "r");
    $text = fread($file, filesize($filename));
    fclose($file);

    $words = explode(" ", $text);

    $wordsStartingWithA = array();

    foreach ($words as $word) {
        if (substr($word, 0, 1) == 'а' || substr($word, 0, 1) == 'A') {
            array_push($wordsStartingWithA, $word);
        }
    }

    echo "<p>Words starting with the letter 'a':</p>";
    echo "<ul>";
    foreach ($wordsStartingWithA as $word) {
        echo "<li>" . $word . "</li>";
    }
    echo "</ul>";
}

function replaceLowercaseO(string $filename)
{
    $file = fopen($filename, "r");
    $text = fread($file, filesize($filename));
    fclose($file);

    $new_text = str_replace('o', 'O', $text);

    echo "<p>Original text:</p>";
    echo "<p>" . $text . "</p>";

    echo "<p>New text:</p>";
    echo "<p>" . $new_text . "</p>";
}

function printRandomParagraph(string $filename)
{
    $paragraphs = file($filename, FILE_IGNORE_NEW_LINES);
    $numParagraphs = count($paragraphs);
    $randomIndex = rand(0, $numParagraphs - 1);
    echo $paragraphs[$randomIndex];
}

function tripleP($filename)
{
    $file = fopen($filename, "r");
    $text = fread($file, filesize($filename));
    fclose($file);

    $words = explode(" ", $text);

    foreach ($words as &$word) {
        $word = str_replace("P", "PPP", $word);
    }

    $sentence = implode(" ", $words);
    echo $sentence;
}

function printSentenceWithProgramming(string $filename)
{

    $search_word = "програмування";

    $file_contents = file_get_contents($filename);
    $sentences = explode(".", $file_contents);

    foreach ($sentences as $sentence) {
        if (strpos($sentence, $search_word) !== false) {
            echo $sentence;
            break;
        }
    }

}

function printSentenceWithReplaceComma(string $filename)
{
    $file = fopen($filename, "r");
    $text = fread($file, filesize($filename));
    fclose($file);

    $semicolon = str_replace(",", ";", $text);

    echo $semicolon;
}

?>