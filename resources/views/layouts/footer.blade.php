<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <!-- Link CSS của Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS tùy chỉnh cho footer -->
    <style>
        /* CSS cho phần footer */
    .footer {
    background-color: #f8f8f8;
    padding: 20px;
    color: #555;
    }

    .footer h5 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
    }

    .footer p {
    margin-bottom: 5px;
    }

    .footer hr {
    border-color: #ddd;
    }

    .footer .row {
    margin-bottom: 10px;
    }

    .footer .text-center {
    margin-top: 20px;
    }

    .footer p.copyright {
    margin-top: 10px;
    font-size: 14px;
    color: #888;
    }
    </style>
</head>
<body>
    <footer class="footer bg-dark" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-white">
                    <h5>Contact Us</h5>
                    <p>Email: hoangg@example.com</p>
                    <p>Phone: 0351645627</p>
                    <p>Address: 77878 Nguyen hue, Hue City, TT</p>
                </div>
                <div class="col-md-6 text-white">
                    <h5>Follow Us</h5>
                    <p>Facebook</p>
                    <p>Twitter</p>
                    <p>Instagram</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 text-center text-white">
                    <p>&copy; 2024 Company Name. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Link JS của Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
