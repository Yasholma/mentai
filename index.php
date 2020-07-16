<?php include_once "./core/init.php"; ?>
<?php 
    $allSubscribers = $subscriber->getAllSubscribers();
?>
<?php include_once "./assets/partials/head.php"; ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h1 class="display-4">Welcome to MentAi</h1>
                <form method="POST">
                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="subscribe to our newsletter" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="subscribe_btn" class="btn btn-loading btn-primary float-right mb-3">Submit</button>

                        <button class="btn btn-primary float-right d-none" id="loading_btn" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                        </button>
                    </div>
                </form>

                

            </div>
        </div>       

        <div class="row">
            <div class="col-md-6 mx-auto">
                <ul class="list-group">
                    <?php foreach(!empty($allSubscribers) ? $allSubscribers : [] as $sub): ?>
                        <li class="list-group-item"><strong>Email: </strong> <?php echo $sub->email; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
<?php include_once "./assets/partials/scripts.php"; ?>