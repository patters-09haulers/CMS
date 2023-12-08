<!-- CMS.php -->
<?php
class CMS {
    private $articles = [];

    public function addArticle($article) {
        $this->articles[] = $article;
    }

    public function displayArticles() {
        echo "<h1>Articles in the CMS:</h1>";
        foreach ($this->articles as $article) {
            $article->display();
        }
    }
}
?>
