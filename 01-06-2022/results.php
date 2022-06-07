<?php
include('includes/header.php');
include('includes/navbar.php');
include('includes/landing.php');
?>
<style>
    .results{
    display: grid;
    border: 1px solid ;
    grid-template-columns: repeat(3,auto);
    gap: 50px;
    justify-content: space-around;
}
li{
    border-bottom: 1px solid;
}


@media screen and (max-width:480px) {
    .results {
        display: grid;
        grid-template-columns: 100%;
        justify-content: start;
    }
}
</style>
<section class="main">
    <div class="selection mx-2">
        <a name="" id="" class="btn btn-dark" href="#" role="button">Verb</a>
        <a name="" id="" class="btn btn-dark" href="#" role="button">Noun</a>
        <a name="" id="" class="btn btn-dark" href="#" role="button">Add</a>
</div>
    <div class="results">
        <div class="heading">ad, or anything</div>
        <div class="tab">
            <h3>Meaning of </h3>
            <ol>
                <li>result</li>
                <li>result</li>
                <li>result</li>
                <li>result</li>
                <li>result</li>
                <li>result</li>
                <li>result</li>
                <li>result</li>
                <li>result</li>
                <li>result</li>
                <li>result</li>
                <li>result</li>
                <li>result</li>
                <li>result</li>
                <li>result</li>
                <li>result</li>
            </ol>
        </div>
        <div class="tab">
            <h3>Synonyms </h3>
            <ol>
                <li>result</li>
                <li>result</li>
                <li>result</li>
                <li>result</li>
            </ol>
        </div>
    </div>
</section>

<?php 
        include('includes/footer.php');
        ?>
