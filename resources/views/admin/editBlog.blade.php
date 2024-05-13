<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="../../assets/images/favicon.png">
    <title>Charitio - Multipurpose Charity Nonprofit HTML5 Template</title>
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
                        <h2>Edit Your Article</h2>
                    </div>
                    <div id="Donations" class="tab-pane">
                        <form action="/admin/updateDataBlog" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $blog->id }}"> <br/>
                            <div class="wpo-donations-amount">
                                <h2>Title</h2>
                                <input type="text" class="form-control" name="title"value="{{ $blog->title}}" id="text" required>                            
                           
                                <h2>Author</h2>
                                <input type="text" class="form-control" name="author"value="{{ $blog->author}}" id="text" required>
                           
                                <h2>Publication date</h2>
                                <input type="date" class="form-control" name="publication_date"value="{{ $blog->publication_date}}" id="text" required>

                                <h2>Content</h2>
                                <textarea class="form-control" name="content" id="description" required>{{ $blog->content}}</textarea>
                                <br>
                                <h2>Image Url</h2>
                                <textarea class="form-control" name="image" id="requirements" required>{{ $blog->image}}</textarea>
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