<x-app-layout>

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
        <title>GreenQuest</title>

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
                width: 100%;
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
                background-color: #2654;
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

            .map-image {
                width: 100%;
                height: auto;
            }

            .label {
                position: absolute;
                transform: translate(-50%, -50%);
                background: rgba(255, 255, 255, 255);
                padding: 5px 10px;
                border-radius: 15px;
                /* Membuat bentuk lonjong */
                font-weight: bold;
                text-align: center;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                /* Menambahkan sedikit bayangan untuk efek 3D */
                width: 140px;
                /* Mengatur lebar tetap pada label */
                height: 30px;
                /* Mengatur tinggi tetap pada label */
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
                /* Menyembunyikan teks yang melampaui batas */
                white-space: nowrap;
                /* Mencegah teks melompat ke baris baru */
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
                width: 320px;
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
                width: 320px;

                /* Menyesuaikan margin agar lebih proporsional */
            }


            .news-content {
                display: flex;
                flex-direction: column;
                /* Mengubah dari flex-wrap ke kolom vertikal */
                gap: 20px;
            }

            .news-item {
                background-color: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 2px 12px 2px rgba(0, 0, 0, 0.1);
                width: 100%;
                /* Menggunakan lebar penuh */
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .news-item h3 {
                font-size: 1.5em;
                font-weight: bold;
            }

            .news-item img {
                max-width: 100%;
                border-radius: 10px;
            }

            .news-item .trees-planted {
                background-color: #89B636;
                color: white;
                padding: 5px 10px;
                border-radius: 5px;
                display: inline-block;
                margin-bottom: 10px;
                font-weight: bold;
            }

            .news-item .region {
                font-size: 0.9em;
                color: #555;
            }

            .news-item .content {
                flex-grow: 1;
            }

            .news-item .date {
                font-size: 0.8em;
                color: #999;
                margin-top: 10px;
            }

            .container {
                margin-top: 30px;
            }


            .container {
                margin-top: 30px;
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
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Animasi Map -->
        <script>
            $(document).ready(function() {
                $("#mapButton").click(function() {
                    $('html, body').animate({
                        scrollTop: $("#map-container").offset().top
                    }, 1000); // Waktu dalam milidetik untuk animasi gulir (misalnya 1000ms)
                });
            });
        </script>

        <!-- Menampilkan News berdasarkan Map -->
        <script>
            $(document).ready(function() {
                function loadNews(region) {
                    $.ajax({
                        url: '/news/' + region,
                        type: 'GET',
                        success: function(data) {
                            let newsContainer = $('#' + region + '-news');
                            newsContainer.empty();

                            data.forEach(news => {
                                let newsHtml = `
                        <div class="news-item">
                            <h3>${news.title}</h3>
                            <div class="trees-planted">${news.treePlanted.toLocaleString()} TREES</div>
                            <div class="content">${news.content}</div>
                            ${news.image ? `<img src="/storage/${news.image}" alt="${news.title}">` : ''}
                            <div class="region">Region: ${news.region}</div>
                            <div class="date">Date: ${new Date(news.created_at).toLocaleDateString()}</div>
                        </div>
                    `;
                                newsContainer.append(newsHtml);
                            });
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                }

                // Load news for each region
                ['sumatera', 'kalimantan', 'sulawesi', 'papua', 'jawa'].forEach(region => {
                    loadNews(region);
                });
            });
        </script>


        <!-- Resize Map -->
        <script>
            $(document).ready(function() {
                function updateLabels() {
                    $('.label').each(function() {
                        const top = $(this).data('top');
                        const left = $(this).data('left');
                        $(this).css({
                            top: top + '%',
                            left: left + '%'
                        });
                    });
                }

                $(window).on('resize', function() {
                    updateLabels();
                });

                updateLabels();
            });
        </script>


        <!-- Resize Map -->
        <script>
            $(document).ready(function() {
                function updateLabels() {
                    $('.label').each(function() {
                        const top = $(this).data('top');
                        const left = $(this).data('left');
                        $(this).css({
                            top: top + '%',
                            left: left + '%'
                        });
                    });
                }

                $(window).on('resize load', function() {
                    updateLabels();
                });

                updateLabels();
            });
        </script>

        <!-- Data donation -->
        <script>
            $(document).ready(function() {
                $(".donate-button").click(function() {
                    var amount = $(this).data('amount');
                    $("#donationAmount").val(amount);
                });
            });
        </script>

        <!-- Donate Other Amount -->
        <script>
            $(document).ready(function() {
                $(".donate-button").click(function() {
                    var amount = $(this).data('amount');
                    $("#donationAmount").val(amount);
                    $("#customAmount").val(''); // Clear the custom amount input
                });

                $("#customAmount").on('input', function() {
                    var customAmount = $(this).val();
                    $("#donationAmount").val(customAmount);
                });

                $("#donationForm").submit(function(e) {
                    var amount = $("#donationAmount").val();
                    if (!amount || amount <= 0) {
                        e.preventDefault();
                        alert("Please enter a valid donation amount.");
                    }
                });
            });
        </script>



    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="padding-top: 68px">
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
                                Bantu kami raih 150 ribu pohon untuk
                                pulau pulau di Indonesia
                            </p>

                            <div class="counter-wrap">
                                <div id="totalTrees" class="counter odometer"></div>
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
        <!-- <div class="form-background">


            <div class="treeDonation">
                <p style="padding: 0.5em 0; font-family: 'PT Sans', sans-serif; font-weight: bold; font-size: 24px;">
                    Choose your option
                </p>

                <div class="btns">
                    <button>1 <br>Trees</button>
                    <button>5 <br>Trees</button>
                    <button>20 <br>Trees</button>
                    <button>50 <br>Trees</button>
                    <input type="text" placeholder="Other amount">
                    <input type="submit">
                </div>

            </div>
            <div>
                <button class="mapButton" id="mapButton">Go to Map</button>
            </div>
        </div> -->

        <div class="form-background">
            <div class="treeDonation">
                <p style="padding: 0.5em 0; font-family: 'PT Sans', sans-serif; font-weight: bold; font-size: 24px;">
                    Choose your option
                </p>
                <form id="donationForm" method="POST" action="{{ route('donate') }}">
                    @csrf
                    <div class="btns">
                        <button type="button" class="donate-button" data-amount="1">1 <br>Trees</button>
                        <button type="button" class="donate-button" data-amount="5">5 <br>Trees</button>
                        <button type="button" class="donate-button" data-amount="20">20 <br>Trees</button>
                        <button type="button" class="donate-button" data-amount="50">50 <br>Trees</button>
                        <input type="text" id="customAmount" name="customAmount" placeholder="Other amount">
                        <input type="hidden" id="donationAmount" name="amount" value="">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
            <div>
                <button class="mapButton" id="mapButton">Go to Map</button>
            </div>
        </div>




        <div id="map-container" class="map-container">
            <img src="assets/dashboard/images/peta-indo.png" alt="Peta Indonesia" class="map-image">
            <a href="#sumatera-container" class="label" data-top="43.5" data-left="27.7">Sumatera</a>
            <a href="#kalimantan-container" class="label" data-top="40.8" data-left="43.2">Kalimantan</a>
            <a href="#sulawesi-container" class="label" data-top="47.2" data-left="53.6">Sulawesi</a>
            <a href="#papua-container" class="label" data-top="49.5" data-left="72.6">Papua</a>
            <a href="#jawa-container" class="label" data-top="61.3" data-left="40">Jawa</a>
            <a href="#all-container" class="label" data-top="80" data-left="25">Semua Berita</a>
        </div>



        <div id="news" class="news">
            <div id="sumatera-container" class="container">
                <h2>Sumatera</h2>
                <div class="news-content" id="sumatera-news"></div>
            </div>
            <div id="kalimantan-container" class="container">
                <h2>Kalimantan</h2>
                <div class="news-content" id="kalimantan-news"></div>
            </div>
            <div id="sulawesi-container" class="container">
                <h2>Sulawesi</h2>
                <div class="news-content" id="sulawesi-news"></div>
            </div>
            <div id="papua-container" class="container">
                <h2>Papua</h2>
                <div class="news-content" id="papua-news"></div>
            </div>
            <div id="jawa-container" class="container">
                <h2>Jawa</h2>
                <div class="news-content" id="jawa-news"></div>
            </div>
        </div>




        <!-- Total Amount Odomater -->
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

        <script>
            $(document).ready(function() {
                // Add click event listener to the labels
                $('#map-container .label').on('click', function(e) {
                    e.preventDefault();

                    // Get the region from the text of the label
                    var region = $(this).text().toLowerCase();
                    var container = $('#' + region + '-container');

                    if (region === 'semua berita') {
                        // Scroll to the map container
                        $('html, body').animate({
                            scrollTop: $('#map-container').offset().top
                        }, 1000, function() {
                            // This function will be called when the animation is complete
                            // Show all news containers
                            $('#news .container').show();
                        });

                    } else {
                        // Hide all news containers
                        $('#news .container').hide();

                        // Show the news container for the clicked region
                        container.show();

                        // Scroll to the news container
                        $('html, body').animate({
                            scrollTop: container.offset().top - 80
                        }, 1500);
                    }


                });
            });
        </script>

    </body>
</x-app-layout>