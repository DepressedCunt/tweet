<?php include 'tweethead.php' ?>
    <div class="container px-5">
        <section class="card mt-2">
            <header class="card-header d-flex align-items-center">
            <img class="img-thumbnail" src="https://robohash.org/ <?= $result['name'] ?>" alt="pfp">
                <h5 class="card-title pl-4 mb-0">
                    <?= $result['name'] ?>
                    <small class="pl-4">
                        <?= $result['created_at'] ?>
                    </small>
                </h5>
            </header>
            <a href="index.php">
            <div class="card-body">
                <p class="card-text">
                    <?= $result['body'] ?>
                </p>
            </div>
            </a>
            <footer class="card-footer d-flex justify-content-end">
            </footer>
        </section>  
    </div>
    <?php include 'tweetfoot.php' ?>