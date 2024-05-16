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
        <title>#teamtrees</title>

        <style>
            .hero-background {
                height: 100vh;
            }

            #link {
                color: inherit !important;
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
                                <img class="team-trees-logo" alt="#teamtrees" title="#teamtrees"
                                    src="assets/dashboard/images/logo-teamtrees-full.svg" />
                            </h1>
                            <p class="lead mb-2">
                                Help us plant 20 million trees around the globe by January 1st,
                                2020.
                            </p>

                            <div class="counter-wrap">
                                <div id="totalTrees" class="counter odometer"></div>
                                <div class="measure-wrap">
                                    <span class="text-uppercase letter-spacing" style="top: 4px">Total Donation</span>
                                    <img class="counter-underline"
                                        src="assets/dashboard/images/counter-underline-blue.svg" />
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
            });
        </script>
    </body>

    </html>

</x-app-layout>