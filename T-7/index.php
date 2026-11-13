<!-- <?php
$categories = ["Développement", "Design", "Devops"];
foreach($categories as $cat){
    echo $cat ."|";
}



$articles = [
    ['titre' => 'Premier article'],
    ['titre' => 'Deuxiéme article']
];
?>
<ul>
<?php foreach ($articles as $article): ?>
    <li><?= $article['titre'] ?></li>
    <?php endforeach; ?>
</ul>
<?php
$texte = "Découvrir <strong>HTML & PHP</strong>";
echo htmlspecialchars ($texte, ENT_QUOTES, 'UTF-8');

$texte = "Voici un texte très long qui doit être raccourci pour l'affichage dans une carte.";
$date = "2026-02-14";
echo mb_substr($texte, 0, 30) . "... le " . date('d M Y', strtotime($date));?> -->


<?php

$articles = [
    [
        'id' => 1,
        'titre' => 'Comment structurer ses composants UI avec Atomic Design ?',
        'contenu' => 'Découvrez les concepts fondamentaux de la méthode Atomic Design...',
        'image' => 'article-example.png',
        'date_creation' => '2026-02-14',
        'categorie_libelle' => 'Développement',
        'categorie_couleur' => 'bleu'
    ],
    [
        'id' => 2,
        'titre' => 'Maîtriser les micro-interactions UX',
        'contenu' => 'Une interface belle n\'est pas suffisante...',
        'image' => 'article-example.png',
        'date_creation' => '2026-02-10',
        'categorie_libelle' => 'Design UI/UX',
        'categorie_couleur' => 'rose'
    ]
];

require 'index-template.php';