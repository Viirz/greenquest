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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <!-- Google Fonts CSS -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,900&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="favicon.ico" />
        <!-- teamtrees CSS -->
        <link href="assets/dashboard/css/main.min.css" rel="stylesheet" />
        <link href="assets/dashboard/css/odometer.css" rel="stylesheet" />
        <script src="https://github.hubspot.com/odometer/odometer.js"></script>
        <title>#teamtrees</title>

        <style>
            .hero-background {
                height: 100vh;
            }

            #link {
                color: inherit !important;
            }

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
                                <img class="team-trees-logo" alt="#teamtrees" title="#teamtrees" src="assets/dashboard/images/GQ.png" />
                            </h1>
                            <p class="lead mb-2">
                                Help us plant 20 million trees around the globe by January 1st,
                                2020.
                            </p>

                            <div class="counter-wrap">
                                <div id="totalTrees" class="counter odometer"> 0</div>
                                <div class="measure-wrap">
                                    <span class="text-uppercase letter-spacing" style="top: 4px">Total Donation</span>
                                    <img class="counter-underline" src="assets/dashboard/images/counter-underline-blue.svg" />
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-container">
            <img src="assets/dashboard/images/petafix.png" alt="Peta Indonesia" style="width: 100%;">
            <a href="#sumatera-container" class="label" style="top: 39.5%; left: 25.7%;">Sumatera</a>
            <a href="#kalimantan-container" class="label" style="top: 36.8%; left: 43.2%;">Kalimantan</a>
            <a href="#sulawesi-container" class="label" style="top: 47.2%; left: 53.6%;">Sulawesi</a>
            <a href="#papua-container" class="label" style="top: 49.5%; left: 72.6%;">Papua</a>
            <a href="#jawa-container" class="label" style="top: 61.3%; left: 37.6%;">Jawa</a>
        </div>
        <div id="news" class="news">
            <div id="sumatera-container" class="container">
                <h2>Sumatera</h2>
                <p>Informasi tentang Sumatera...</p>
            </div>

            <div id="kalimantan-container" class="container">
                <h2>Kalimantan</h2>
                <p>Informasi tentang Kalimantan...</p>
            </div>

            <div id="sulawesi-container" class="container">
                <h2>Sulawesi</h2>
                <p>Informasi tentang Sulawesi...</p>
            </div>

            <div id="papua-container" class="container">
                <h2>Papua</h2>
                <p>Informasi tentang Papua...</p>
            </div>

            <div id="jawa-container" class="container">
                <h2>Jawa</h2>
                <p>Informasi tentang Jawa...</p>
            </div>
        </div>


        <script type="text/javascript">
            $(document).ready(function() {
                setInterval(function() {
                    $.ajax({
                        url: '/donations/sum', // replace with your endpoint
                        type: 'GET',
                        success: function(data) {
                            // Assuming the server returns the new total trees count
                            var totalTrees = $('#totalTrees');
                            totalTrees.html(data.sum); // Odometer uses innerHTML instead of text()
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                }, 1000); // 1000 milliseconds = 1 second
            });
        </script>
    </body>

    </html>
</x-app-layout>