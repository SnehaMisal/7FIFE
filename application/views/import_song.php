<!doctype html>
<html lang="en" class="semi-dark color-header headercolor2">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7FIFE - Import Song</title>
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
                <div class="breadcrumb-title pe-3">Import Song</div>
                <div class="ps-3 bread_path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Import Song</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row justify-content-center mt-5">
                <div class="col-md-10">
                    <div class="card rounded-4">
                        <div class="card-header b-l-primary">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0">Import Song</h6>
                            </div>
                        </div>
                        <form action="" method="post" class="needs-validation" novalidate="">
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Select Categories Name<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select select2" id="img_video" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option value="1">Devotional</option>
                                            <option value="2">Podcasts</option>
                                            <option value="3">Party</option>
                                            <option value="4">Indian Classical</option>
                                        </select>
                                        <div class="invalid-feedback">Please Enter Categories Name.</div>
                                    </div>
                                    <!-- Sub-Categories Name -->
                                    <div class="col-md-6">
                                        <label class="form-label">Select Sub-Categories Name<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select select2" id="img_video" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option value="1">Popular Devotional Playlists</option>
                                            <option value="2">Punjabi Bhakti</option>
                                            <option value="3">Hindustani Classical</option>
                                            <option value="4">Carnatic Music</option>
                                        </select>
                                        <div class="invalid-feedback">Please select Sub-Categories Name.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Select Album Name<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select select2" id="img_video" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option value="1">Mahashivratri</option>
                                            <option value="2">Satnam Sri Waheguru Ji</option>
                                            <option value="3">Hindustani Classical</option>
                                            <option value="4">Sad Songs</option>
                                        </select>
                                        <div class="invalid-feedback">Please select Album Name.</div>
                                    </div>
                                    <!-- Song Title -->
                                    <div class="col-md-6">
                                        <label class="form-label">Song Title<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="" placeholder="Enter Song Title"
                                            value="" required="">
                                        <div class="invalid-feedback">Please Enter Song Title.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Select Artist Name<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select select2" id="img_video" required="" multiple>
                                            <option value="1">Lata Maneshkar</option>
                                            <option value="2">Kishore Kumar</option>
                                            <option value="3">Alka Yagnik</option>
                                            <option value="4">Mohammed Rafi</option>
                                        </select>
                                        <div class="invalid-feedback">Please select Artist Name.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Select Language Name<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select select2" id="img_video" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option value="1">English</option>
                                            <option value="2">Hindi</option>
                                            <option value="3">Tamil</option>
                                            <option value="4">Marathi</option>
                                        </select>
                                        <div class="invalid-feedback">Please select Language Name.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Upload Music<span
                                                class="text-danger">*</span></label>
                                                <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="upload_music"
                                                id="music_link" value="1" required>
                                            <label class="form-check-label" for="music_link">Upload Music Link</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="upload_music"
                                                id="music_file" value="2" required>
                                            <label class="form-check-label" for="music_file">Upload Music File</label>
                                        </div>
                                        <div class="invalid-feedback">Please select Upload Music Type.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="upload_music" class="row"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Song Image <span class="text-danger">*</span></label>
                                        <input name="" type="file" id="adv_img" class="dropify" data-default-file=""
                                            data-height="200" data-allowed-file-extensions="png jpg" />
                                        <div class="invalid-feedback">Please Enter Song Image .</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <button type="submit" class="btn btn_default px-4">Save Changes</button>
                            </div>
                        </form>
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
        
        $('input[type="radio"]').click(function() {
            if ($(this).attr('value') == '1') {
                $('#upload_music').empty().append(
                    '<div class="col-md-6"><label class="form-label">Music Link<span class="text-danger">*</span></label>'+
                    '<input class="form-control" type="url" name="" placeholder="Enter Music Link" value="" required="" >'+
                    '<div class="invalid-feedback">Please Enter Music Link</div></div>'+
                    '<div class="col-md-6"><label class="form-label">Tracker ID<span class="text-danger">*</span></label>'+
                    '<input class="form-control" type="text" name="" placeholder="Enter Music Tracker ID" value="" required="" >'+
                    '<div class="invalid-feedback">Please Enter Music Tracker ID</div></div>');
            } 
            if ($(this).attr('value') == '2') {
                $('#upload_music').empty().append(
                    '<div class="col-md-6"><label class="form-label">Music File<span class="text-danger">*</span></label>'+
                    '<input name="" type="file" id="adv_img" class="dropify" data-default-file=""data-height="200" data-allowed-file-extensions="mp3" />'+
                    '<div class="invalid-feedback">Please Enter Music File</div></div>'+
                    '<div class="col-md-6"><label class="form-label">Music Lyrics<span class="text-danger">*</span></label>'+
                    '<textarea id="summernote" class="summernote mb-0" name="example" required="required"></textarea>'+
                    '<div class="invalid-feedback">Please Enter Music Lyrics</div></div>');
                $('.dropify').dropify();
                $('.summernote').summernote({
                    height: 120,
                    minHeight: 120,
                    maxHeight: 120,
                });
            }
        })
    });
    </script>


</body>

</html>