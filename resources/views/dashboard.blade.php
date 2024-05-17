<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta property="fb:pages" content="110128820399183" />
        <meta property="og:url" content="https://teamtrees.org" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Help Us Plant 20 Million Trees - Join #TeamTrees" />
        <meta property="og:description" content="The official site of #TeamTrees. One dollar plants a tree..." />
        <meta property="og:image" content="https://teamtrees.org/images/social-share-earth-astronaut-1-9x1.png" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous" />
        <!-- Google Fonts CSS -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,900&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="favicon.ico" />
        <!-- teamtrees CSS -->
        <link href="assets/dashboard/css/main.min.css" rel="stylesheet" />
        <link href="assets/dashboard/css/odometer.css" rel="stylesheet" />
<<<<<<< HEAD
        <script src="https://github.hubspot.com/odometer/odometer.js"></script>
        <script src="https://github.hubspot.com/odometer/odometer.js"></script>
=======
>>>>>>> parent of a48498a (change dashboard euy)
        <title>#teamtrees</title>

        <style>
            .hero-background {
                height: 100vh;
            }

            #link {
                color: inherit !important;
            }
<<<<<<< HEAD

            .map-container {
                position: relative;
                text-align: center;
                background-color: #273654;
            }

            .label {
                position: absolute;
                cursor: pointer;
                color: black;
                text-decoration: none;
            }
            
            .news{
                background-color: #CDE4E4;
            }

            .map-container {
                position: relative;
                text-align: center;
                background-color: #273654;
                z-index: 0;
            }

            .label {
                position: absolute;
                cursor: pointer;
                color: black;
                text-decoration: none;
            }

            .news {
                background-color: #CDE4E4;
            }

            .treeDonation {
                position: relative;
                z-index: 1;
                width: 400px;

                border-radius: 1em;
                box-shadow: 0px 2px 12px 2px rgba(0, 0, 0, 0.322);
                background-color: white;
                /* background: white; */
                text-align: center;
                padding: 20px 0;
            }

            .form-background {
                gap: 20px;
                height: 100vh;
                background-color: #273654;
                justify-content: center;
                display: flex;
                align-items: center;
                padding: 50px;
                flex-direction: column;

            }

            .btns {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 0.3em;
                margin: 1em;

                /* Mengatur margin agar lebih proporsional */
            }

            button {
                text-align: center;
                width: 150px;
                padding: 1em 2em;
                /* Menyesuaikan padding agar tombol lebih besar */
                background: #89B636;
                outline: none;
                border-radius: 0.51em;
                color: white;
                border: transparent;
                font-family: 'PT Sans', sans-serif;
                font-size: 1em;
                /* Menyesuaikan ukuran font agar proporsional dengan tombol yang lebih besar */
                transition: ease-in-out 0.20s;
                margin: 0.5em;
                font-size: 14px;
            }

            button:hover {
                background: rgb(0, 59, 25);
                color: white;
                cursor: pointer;
            }

            .mapButton {
                width: auto;
                text-align: center;
                padding: 1em 2em;
                /* Menyesuaikan padding agar tombol lebih besar */
                background: #518460;
                outline: none;
                border-radius: 0.51em;
                color: rgba(0, 0, 0, 0.726);
                border: transparent;
                font-family: 'PT Sans', sans-serif;
                font-size: 1em;
                color: white;
        
                /* Menyesuaikan ukuran font agar proporsional dengan tombol yang lebih besar */
                transition: ease-in-out 0.20s;

            }

            .mapButton:hover {
                background: rgb(0, 59, 25);
                color: white;
                cursor: pointer;
            }



            input[type="text"] {
                font-family: 'PT Sans', sans-serif;
                height: 2em;
                margin: 0.5em;
                /* Menyesuaikan margin agar lebih proporsional */
                font-size: 1em;
                /* Menyesuaikan ukuran font agar proporsional dengan lebar form yang lebih besar */
                border-radius: 0.3em;
                outline: none;
                border: 1px solid rgba(0, 0, 0, 0.397);
                text-align: center;
                width:320px;
                /* Menyesuaikan lebar input agar sesuai dengan form yang lebih besar */
            }

            input[type="submit"] {
                background: #CDE4E4;
                color: darkgreen;
                font-family: 'PT Sans', sans-serif;
                padding: 1em 2em;
                /* Menyesuaikan padding agar tombol lebih besar */
                font-weight: bold;
                margin-top: 1em;
                width:320px;

                /* Menyesuaikan margin agar lebih proporsional */
            }

            .counter-wrap {
                margin-bottom: 1em;
            }

            .measure-wrap {
                margin-top: 0.5em;
            }

            .team-trees-logo {
                width: 80%;
            }
=======
>>>>>>> parent of a48498a (change dashboard euy)
        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="hero-background mb-0">
            <img class="cloud" id="cloud-1" src="assets/dashboard/images/cloud.svg" />
            <img class="cloud" id="cloud-2" src="assets/dashboard/images/cloud-translucent.svg" />
            <img class="cloud" id="cloud-3" src="assets/dashboard/images/cloud.svg" />
            <img class="cloud" id="cloud-4" src="assets/dashboard/images/cloud-translucent.svg" />
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="text-center intro-copy">
                            <h1 class="text-uppercase d-none">#teamtrees</h1>
                            <h1 class="text-center">
<<<<<<< HEAD
                                <img class="team-trees-logo" alt="#teamtrees" title="#teamtrees" src="assets/dashboard/images/GQ.png" />
                                <img class="team-trees-logo" alt="#teamtrees" title="#teamtrees" src="assets/dashboard/images/GQ.png" />
=======
                                <img class="team-trees-logo" alt="#teamtrees" title="#teamtrees"
                                    src="assets/dashboard/images/logo-teamtrees-full.svg" />
>>>>>>> parent of a48498a (change dashboard euy)
                            </h1>
                            <p class="lead mb-2">
                                Help us plant 20 million trees around the globe by January 1st,
                                2020.
                            </p>

                            <div class="counter-wrap">
                                <div id="totalTrees" class="counter odometer"> 0</div>
                                <div class="measure-wrap">
                                    <span class="text-uppercase letter-spacing" style="top: 4px">Total Donation</span>
<<<<<<< HEAD
                                    <img class="counter-underline" src="assets/dashboard/images/counter-underline-blue.svg" />
                                    <img class="counter-underline" src="assets/dashboard/images/counter-underline-blue.svg" />
=======
                                    <img class="counter-underline"
                                        src="assets/dashboard/images/counter-underline-blue.svg" />
>>>>>>> parent of a48498a (change dashboard euy)
                                    <br />
                                    <a href="https://teamtrees.org/" class="text-uppercase letter-spacing" id="link"
                                        style="top: 4px">Donate at teamtrees.org!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript">
<<<<<<< HEAD
            $(document).ready(function() {
                setInterval(function() {
            $(document).ready(function() {
                setInterval(function() {
                    $.ajax({
                        url: '/donations/sum', // replace with your endpoint
                        type: 'GET',
                        success: function(data) {
                            // Assuming the server returns the new total trees count
                            var totalTrees = $('#totalTrees');
                            totalTrees.html(data.sum); // Odometer uses innerHTML instead of text()
                        success: function(data) {
                            // Assuming the server returns the new total trees count
                            var totalTrees = $('#totalTrees');
                            totalTrees.html(data.sum); // Odometer uses innerHTML instead of text()
                        },
                        error: function(error) {
                        error: function(error) {
                            console.log(error);
                        }
                    });
                }, 1000); // 1000 milliseconds = 1 second
                }, 1000); // 1000 milliseconds = 1 second
=======

            $(document).ready(function () {
                setInterval(function () {
                    $.ajax({
                        url: '/donations/sum', // replace with your endpoint
                        type: 'GET',
                        success: function (data) {
                            // assuming the server returns the new total trees count
                            $('#totalTrees').text(data.sum);
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
                }, 1000); // 1000 milliseconds = 1 seconds
>>>>>>> parent of a48498a (change dashboard euy)
            });
        </script>
    </body>

    </html>

</x-app-layout>