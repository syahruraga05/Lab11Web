<!DOCTYPE html>
<html>
<head>
    <title><?= $title; ?></title>
    <meta name=”viewport” content=”widthdevice-width, initial-scale=1.0″>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>
<body>
    <script src=”http://code.jquery.com/jquery.js”></script>
    <script src=”js/bootstrap.min.js”></script>
    <div class="header">
        <div class="jarak">
            <h2>Layout Sederhana</h2>
        </div>
    </div>
    <div class="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="jarak">
            <!-- kiri -->
            <div class="kiri">
                <!-- blog -->
                <div class="border">
                    <div class="jarak">
                        <h3>Lorem Ipsum</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, [...]</p>
                        <button class="btn">Read More ..</button>
                    </div>
                </div>
                <!-- end blog -->
                <!-- blog -->
                <div class="border">
                    <div class="jarak">
                        <h3>Lorem Ipsum</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, [...]</p>
                        <button class="btn">Read More ..</button>
                    </div>
                </div>
                <!-- end blog -->
            </div>
            <!-- kiri -->
            <!-- kanan -->
            <div class="kanan">
                <div class="jarak">
                    <h3>CATEGORY</h3>
                    <hr/>
                    <p><a href="#" class="undecor">HTML</a></p>
                    <p><a href="#" class="undecor">CSS</a></p>
                    <p><a href="#" class="undecor">BOOTSTRAP</a></p>
                </div>
            </div>
            <!-- kanan -->
        </div>
    </div>