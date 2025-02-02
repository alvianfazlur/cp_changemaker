<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="wpOceans">
    <link rel="icon" type="image/png" href="../assets/images/logo.png">
    <title>Changemaker Admin</title>
    <link href="../../assets/css/themify-icons.css" rel="stylesheet">
        <link href="../../assets/css/flaticon.css" rel="stylesheet">
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/css/animate.css" rel="stylesheet">
        <link href="../../assets/css/owl.carousel.css" rel="stylesheet">
        <link href="../../assets/css/owl.theme.css" rel="stylesheet">
        <link href="../../assets/css/slick.css" rel="stylesheet">
        <link href="../../assets/css/slick-theme.css" rel="stylesheet">
        <link href="../../assets/css/swiper.min.css" rel="stylesheet">
        <link href="../../assets/css/owl.transitions.css" rel="stylesheet">
        <link href="../../assets/css/jquery.fancybox.css" rel="stylesheet">
        <link href="../../assets/css/odometer-theme-default.css" rel="stylesheet">
        <link href="../../assets/css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
</head>
<body>
    <!-- wpo-event-area start -->
    <div class="wpo-donation-page-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="wpo-donate-header">
                        <h2>Edit Your Recruitments</h2>
                    </div>
                    <div id="Donations" class="tab-pane">
                        <form action="/admin/updateDataRecruitments" method="post" enctype="multipart/form-data" novalidate>
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $recruitments->id }}"> <br/>
                            <div class="wpo-donations-amount">
                                <h2>Program Name</h2>
                                <input type="text" class="form-control" name="program_name"value="{{ $recruitments->program_name}}" id="text" required>
                                
                                <h2>Program Type</h2>
                                <select class="form-select" name="program_type" id="type" required>
                                    <option value="{{$recruitments->program_type}}">{{$recruitments->program_type}}</option>
                                    <option value="Social Action">Social Action</option>
                                    <option value="Exchange & Conference">Exchange & Conference</option>
                                    <option value="Summit">Summit</option>
                                    <option value="Volunteer">Volunteer</option>
                                </select> <br>                               
                           
                                <h2>Location</h2>
                                <input type="text" class="form-control" name="location"value="{{ $recruitments->location}}" id="text" required>
                           
                                <h2>Start Date</h2>
                                <input type="date" class="form-control" name="start_date"value="{{ $recruitments->start_date}}" id="text" required>
                           
                                <h2>End Date</h2>
                                <input type="date" class="form-control" name="end_date"value="{{ $recruitments->end_date}}" id="text" required>

                                <h2>Description</h2>
                                <textarea class="form-control" name="description" id="description" required>{{ $recruitments->decription}}</textarea>
                                <br>
                                <h2>Requirements</h2>
                                <textarea class="form-control" name="requirements" id="requirements" required>{{ $recruitments->requirements}}</textarea>
                                <br>
                           
                                <h2>Benefits</h2>
                                <textarea class="form-control" name="benefits" id="benefits">{{ $recruitments->benefits}}</textarea>
<br>
                                <h2>Guide Book Link</h2>
                                <input type="text" class="form-control" name="guidebook"value="{{ $recruitments->guidebook}}" id="text" required>

                                <h2>Self Funded Link</h2>
                                <input type="text" class="form-control" name="self_funded_link"value="{{ $recruitments->self_funded_link}}" id="text" required>

                                <h2>Fully & Special Funded Link</h2>
                                <input type="text" class="form-control" name="fully_funded_link"value="{{ $recruitments->fully_funded_link}}" id="text" required>
                                <h2>Image</h2>
                                <p style="color: lightgrey; font-size: small;">Supported Format : Jpg, Jpeg, Png</p>
                                <input type="file" class="form-control" name="image"value="file" id="image">
                                <br>
                                
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn submit-btn">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-event-area end -->
</div>
<script>
    let requirementsEditor, descriptionEditor, benefitEditor;
    
    ClassicEditor
        .create(document.querySelector('#requirements'))
        .then(editor => {
            visionEditor = editor;
        })
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#benefits'))
        .then(editor => {
            benefitEditor = editor;
        })
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#description'))
        .then(editor => {
            visionEditor = editor;
        })
        .catch(error => {
            console.error(error);
        });

  </script>
</body>
</html>