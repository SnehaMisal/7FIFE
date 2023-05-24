<!doctype html>
<html lang="en" class="semi-dark color-header headercolor2">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7FIFE - Privacy Policy</title>
    <?php include 'link/links.php'?>
</head>

<body>
    <div class="wrapper">
        <!--start top header-->
        <?php include 'common_files/header.php'?>

        <!--start sidebar -->
        <?php include 'common_files/sidebar.php'?>
        <!--end sidebar -->

        <!--start content-->
        <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3 justify-content-between">
                <div class="breadcrumb-title pe-3">Privacy Policy</div>
                <div class="ps-3 bread_path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <div class="card rounded-4">
                        <div class="card-body">
                            <textarea id="summernote" class="summernote mb-0" name="example"
                                required="required">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</textarea>
                        </div>
                        <div class="card-body text-center">
                            <button type="button" class="btn btn_default px-4">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <!--end page main-->
        <?php include 'common_files/footer.php'?>
        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->
    </div>
    <?php include 'link/script.php'?>
    <script>
    $(document).ready(function() {
        // summernote Script
        $('.summernote').summernote({
            height: 350,
            minHeight: 350,
            maxHeight: 350,
        });
    });
    </script>


</body>

</html>