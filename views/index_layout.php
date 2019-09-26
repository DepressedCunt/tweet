<?php include 'indexhead.php' ?>
    <div class="container px-5">
    <?php foreach ($result as $row): ?>
        <section class="card mt-2">
            <header class="card-header d-flex align-items-center">
            <img class="img-thumbnail" src="https://robohash.org/ <?= $row['name'] ?>" alt="pfp">
                <h5 class="card-title pl-4 mb-0">
                    <?= $row['name'] ?>
                    <small class="pl-4">
                        <?= $row['created_at'] ?>
                    </small>
                </h5>
            </header>
            <a href="tweet.php?id=<?= $row['id'] ?>">
            <div class="card-body">
                <p class="card-text">
                    <?= $row['body'] ?>
                </p>
            </div>
            </a>
            <footer class="card-footer d-flex justify-content-end">
            <button type="button" class="btn btn-dark">Like</button>
                <button type="button" class="btn btn-dark">Dislike</button>
                <button type="button" class="btn btn-dark">Comment</button>
                <button type="button" class="btn btn-dark">Follow</button>
            </footer>
        </section>
    <?php endforeach ?>
    </div>
    <?php include 'indexfoot.php' ?>