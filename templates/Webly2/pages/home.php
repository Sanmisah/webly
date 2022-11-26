    <?= $this->include('Webly2/elements/header') ?>

    <?= $this->include('Webly2/elements/menu') ?>

    <?= $this->include('Webly2/elements/banners') ?>


    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?= $page->title ?>
                </h1>
            </div>
            <?= $page->content ?>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <?= $blocks['features'] ?>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <?= $blocks['action'] ?>
            </div>
        </div>

        <hr>

        <?= $this->include('Webly2/elements/footer') ?>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/templates/Webly2/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/templates/Webly2/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
