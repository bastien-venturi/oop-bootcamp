<?php
class Website {
    public $articles;
    public $ads;
    public $vacancies;

    function __construct($articles, $ads, $vacancies){
        $this->articles = $articles;
        $this->ads = $ads;
        $this->vacancies = $vacancies;
    }
}

class Article {
    public $title;
    public $content;

    function __construct($title, $content){
        $this->title = $title;
        $this->content = $content;
    }

    function displayTitleAndText() {
        return "Title: {$this->title} Content: {$this->content}";
    }
}

class Ad {
    public $title;
    public $content;

    function __construct($title, $content){
        $this->title = $title;
        $this->content = $content;
    }

    function displayTitleAndText() {
        return "Title: " . strtoupper($this->title) . " Content:" . strtoupper($this->content) . "";
    }
}

class Vacancy {
    public $title;
    public $content;

    function __construct($title, $content){
        $this->title = $title;
        $this->content = $content;
    }

    function displayTitleAndText() {
        return "Title: {$this->title} - Apply now! Content: {$this->content}";
    }
}

$article = new Article("Article Title", "Article Content");
$ad = new Ad("Ad Title", "Ad Content");
$vacancy = new Vacancy("Job Title", "Job Content");

$articles = array($article);
$ads = array($ad);
$vacancies = array($vacancy);

$website = new Website($articles, $ads, $vacancies);

echo "<table border='1'>";
foreach ($website->articles as $article) {
    echo "<tr><td>" . $article->displayTitleAndText() . "</td></tr>";
}

echo "<table border='1'>";
foreach ($website->ads as $ad) {
    echo "<tr><td>" . $ad->displayTitleAndText() . "</td></tr>";
}

foreach ($website->vacancies as $vacancy) {
    echo "<tr><td>" . $vacancy->displayTitleAndText() . "</td></tr>";
}
echo "</table>";

var_dump($website);
?>
