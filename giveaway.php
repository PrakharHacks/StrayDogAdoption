<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kuttey_Give_away</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\style1.css" type="text/css">
</head>

<body style="background-color: #E3E2DF;">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="index.php">
            <img src="images\download.jpg" width="45" alt="" class="d-inline-block align-middle mr-2">
            <!-- Logo Text -->
            <span class="text-uppercase font-weight-bold">Kuttey!</span>
        </a>

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="about.php" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Our Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
            </li>


        </ul>
    </nav>

    <section class="my-5">

        <div class="my-4">
            <div style="text-align: center; font-family: cursive;">
                <h1 class="giveaway">Do you have a dog that you can't keep ? <br> Then why not give it to us !</h1>
            </div>
        </div>
        <div class="my-4">
            <div style="text-align: center;">
                <img src="images\download.jpg" alt="Logo">
            </div>
        </div>
        <div class="my-5">
            <div style="text-align: center; font-family: cursive;">
                <h2>Fill the form and we will be in touch with you <br> as soon as possible</h2>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div>
            <h2 class="text-center">Send us the details</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="giveinfo.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="">Your Name</label>
                    <input type="text" name="user" id="user" class="form-control" autocomplete="off" placeholder="Your full name" required>
                </div>
                <div class="form-group">
                    <label class="">Email</label>
                    <input type="text" name="email" id="email" class="form-control" autocomplete="off" placeholder="Your email address" required>
                </div>
                <div class="form-group">
                    <label class="">Mobile No</label>
                    <input type="text" name="mobile" id="mobile" class="form-control" autocomplete="off" placeholder="Your Mobile number" required>
                </div>
                <div class="form-group">
                    <label for="comment">Describe your dog</label>
                    <textarea class="form-control" rows="5" id="comment" placeholder="Describe your dog in 100 or more words" name="comment"></textarea>
                </div>
                <div class="my-2">
                    <input type="file" accept="image/*" name="upload_image" id="upload_image" onchange="loadFile(event)" style="display: none;">
                    <label for="upload_image" style="cursor: pointer;" class="btn btn-danger">Upload Image of your Dog</label>
                    <img id="output" width="200" />
                </div>


                <div class="text-center my-3">
                    <button type="submit" class="btn btn-success" name="sent">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>