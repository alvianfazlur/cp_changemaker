<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="wpOceans">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
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
</head>
<body>
    <!-- wpo-event-area start -->
    <div class="wpo-donation-page-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="wpo-donate-header">
                        <h2>New Partner</h2>
                    </div>
                    <div id="Donations" class="tab-pane">
                        <form action="/admin/store-partnership" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{-- <input type="hidden" name="id" value=""> <br/> --}}
                            <div class="wpo-donations-amount">
                                <h2>Name</h2>
                                <input type="text" class="form-control" name="name"value="" id="text" required>                             
                           
                                <h2>Type</h2>
                                <input type="text" class="form-control" name="type"value=" " id="text" required>

                                <h2>Description</h2>
                                <textarea class="form-control" name="description" id="description" required></textarea>
                                <br>

                                <h2>Link Profile (Optional)</h2>
                                <input type="text" class="form-control" name="link"value=" " id="text" >
                                <br>

                                <h2>Image</h2>
                                <p style="color: lightgrey; font-size: small;">Supported Format : Jpg, Jpeg, Png</p>
                                <input type="file" class="form-control" name="image"value="file" id="image" required>
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
</body>
</html>