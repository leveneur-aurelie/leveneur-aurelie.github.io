<?php require 'utils/data.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CV - Aurélie Leveneur</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&family=Roboto:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class="wrapper">
    <header class="header">
        <div class="header__photo">
            <img src="../pictures/photo-de-moi.jpg" alt="Aurélie Leveneur">
        </div>
        <div class="header__left">
            <div class="name">
            <h1><?= $contacts['firstName'].' '.$contacts['lastName']; ?></h1>
            </div>
            <div class="title">
            <h2>Développeuse PHP</h2>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="main__top">
            <div class="softs__skills">
            <h3>Softs Skills</h3>
            <?php foreach ($softsSkills as $softSkill) { ?>  
            <p>
             <?= $softSkill; ?>
            </p>
            <?php } ?>
            </div>
            <div class="hards_skills">
            <h3>Hards Skills</h3>
            <?php foreach ($hardsSkills as $hardSkill) { ?>  
            <p>
             <?= $hardSkill; ?>
            </p>
            <?php } ?>
            </div>
        </div>
        <div class="main__bottom">
            <div class="professional__experiences">
            <h3>Expériences professionnelles</h3>
            <?php foreach ($professionalExperiences as $experience) { ?>
                <h4><?= $experience['jobLabel']; ?></h4>
                <div>
                    <span><?= $experience['companyName']; ?></span>
                    <span><?= $experience['city']; ?></span>
                </div>
                <div>
                    <span><?= $experience['fieldOfActivity']; ?></span>
                </div>
                <div>
                    <span><?= $experience['startEmploymentContract']; ?> - <?= $experience['endEmploymentContract']; ?></span>
                </div>
                <?php } ?>
            </div>
            <div class="training">
            <h3>Formations</h3>
            <?php foreach ($training as $diplome) { ?>
                <h4><?= $diplome['schoolLabel']; ?></h4>
                <div>
                    <span><?= $diplome['degreeLabel']; ?></span>
                    <span><?= $diplome['city']; ?></span>
                </div>
                <div>
                    <span><?= $diplome['optionDegree']; ?></span>
                </div>
                <div>
                    <span><?= $diplome['graduationDiploma']; ?></span>
                </div>
            <?php } ?>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div id="email">
        <span><?= $contacts['mailAddress'];?></span>
        </div>
        <div id="linkedin">
        <span><?= $contacts['linkedin'];?></span>
        </div>
        <div id="numero-mobile">
        <span><?= $contacts['numeroPortable'];?></span>
        </div>
        <div id="address">
        <span><?= $contacts['mailingAddressNumberAndLabel'];?></span>
        <span><?= $contacts['mailingAddressPostalCode'];?>  <?= $contacts['mailingAddressNameCity'];?></span>
        </div>
    </footer>
</div>
</body>
</html>