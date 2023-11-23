<?php
class Website {
    public $articles;
    public $ads;
    public $vacancies;

    // Constructeur de la classe Website
    function __construct($articles, $ads, $vacancies){
        $this->articles = $articles;
        $this->ads = $ads;
        $this->vacancies = $vacancies;
    }
}

class Article {
    public $title;
    public $content;
    public $breaking; // Propriété pour indiquer si l'article est une actualité urgente

    // Constructeur de la classe Article
    function __construct($title, $content, $breaking = false){
        $this->title = $title;
        $this->content = $content;
        $this->breaking = $breaking;
    }

    // Méthode pour afficher le titre et le contenu de l'article avec des balises HTML
    function displayTitleAndText() {
        // Si l'article est une actualité urgente, préfixer le titre avec "BREAKING: "
        $title = $this->breaking ? "BREAKING: {$this->title}" : $this->title;
        $content = $this->content;
        // Utiliser des balises HTML <div> pour structurer le contenu affiché
        return "<div><strong>Title:</strong> {$title}</div><div><strong>Content:</strong> {$content}</div>";
    }
}

class Ad {
    public $title;
    public $content;

    // Constructeur de la classe Ad
    function __construct($title, $content){
        $this->title = $title;
        $this->content = $content;
    }

    // Méthode pour afficher le titre et le contenu de la publicité avec des balises HTML
    function displayTitleAndText() {
        // Utiliser des balises HTML <div> pour structurer le contenu affiché, en mettant le titre et le contenu en majuscules
        return "<div><strong>Title:</strong> " . strtoupper($this->title) . "</div><div><strong>Content:</strong> " . strtoupper($this->content) . "</div>";
    }
}

class Vacancy {
    public $title;
    public $content;

    // Constructeur de la classe Vacancy
    function __construct($title, $content){
        $this->title = $title;
        $this->content = $content;
    }

    // Méthode pour afficher le titre et le contenu de l'offre d'emploi avec des balises HTML
    function displayTitleAndText() {
        // Utiliser des balises HTML <div> pour structurer le contenu affiché
        return "<div><strong>Title:</strong> {$this->title} - Apply now!</div><div><strong>Content:</strong> {$this->content}</div>";
    }
}

$articles = array();
$ads = array();
$vacancies = array();

// Création d'instances d'Article, Ad et Vacancy
$article = new Article("Article Title", "Article Content");
$breakingArticle = new Article("Breaking News", "This is a breaking news article!", true);
$ad = new Ad("Ad Title", "Ad Content");
$vacancy = new Vacancy("Job Title", "Job Content");

$article2 = new Article("Lorem ipsum dolor sit.", "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex!");
$article3 = new Article("Lorem ipsum dolor sit.", "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex!");

$articles = array($article, $breakingArticle, $article2, $article3);

$ads2 = new Ad("Lorem ipsum dolor sit.", "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex!");

$ads = array($ads2);

$vacancy2 = new Vacancy("Lorem ipsum dolor sit.", "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex!");
$vacancy3 = new Vacancy("Lorem ipsum dolor sit.", "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex!");

$vacancies = array($vacancy2, $vacancy3);

// Création d'une instance de Website
$website = new Website($articles, $ads, $vacancies);

// Affichage des articles avec des balises HTML
echo "<h1>Articles</h1>";
foreach ($website->articles as $article) {
    echo $article->displayTitleAndText();
}

// Affichage des publicités avec des balises HTML
echo "<h1>Ads</h1>";
foreach ($website->ads as $ad) {
    echo $ad->displayTitleAndText();
}

// Affichage des offres d'emploi avec des balises HTML
echo "<h1>Vacancies</h1>";
foreach ($website->vacancies as $vacancy) {
    echo $vacancy->displayTitleAndText();
}

// Affichage des détails du site Web à des fins de débogage
var_dump($website);
?>
