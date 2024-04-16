<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver connect</title>

    <script src="https://unpkg.com/openlayers@latest/dist/ol.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://unpkg.com/openlayers@latest/dist/ol.css" type="text/css">

    <link rel="stylesheet" href="style.css">

    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "lnwxcqk5ie");
    </script>
</head>

<body>
    <header class="header">
        <h1><a href="index.html">Driver Connect</a></h1>
        <nav>
            <ul>
                <li></li>
                <li><a href="direction.html">Directions</a></li>
                <li><a href="notification.html">Live Traffic</a></li>
                <li><a href="Locate-spare.html">Spare Parts Store</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header> -->
    <?php require ('partials/head.php')?>
    <?php require ('partials/header.php')?>
    <main>
        <section class="hero-image">
            <div class="hero-content">
                <h1>Driver connect</h1>
                <p>Empowering Local Delivery Network</p>
            </div>
           
            <!-- <img src="images/driver-image.webp" alt="Driver Image"/> -->
        </section>
        <section>
            <H1>Discussion for Drivers</H1>
            <div style="height: 500px;" class="discussion">
                <div class="discussion" id="rt-d9e66e51b658db9e45570c2f6b9caf53"></div>
                <script src="https://rumbletalk.com/client/?6eU4WK4q"></script>
            </div>
        </section>
        <section id="realtime-traffic">
            <h2>Real-time Traffic Notifications</h2>
            <div id="traffic-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d20646.97203951002!2d-125.00207210340237!3d49.69439253392638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sca!4v1710740635087!5m2!1sen!2sca"
                    width="80%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div>
                <a href="notification.html"><button class="btn-1" type="submit">Get Live Updates!</button></a>
            </div>
            
        </section>

        <section id="about">
            <h1 class="about">About Us</h1>
            <p>Welcome to Driver Connect, your go-to platform for seamless transportation services!</p>
            <p>At Driver Connect, we are committed to providing you with the best possible experience. Our platform integrates advanced technologies to ensure efficient and reliable transportation solutions.</p>
        </section>

        <section id="live-traffic">
            <h2>Live Traffic with TomTom API</h2>
            <p>Our platform utilizes the TomTom API to provide real-time traffic information. With TomTom's extensive database and advanced algorithms, we are able to offer accurate and up-to-date traffic data, allowing drivers to plan their routes more effectively and avoid congestion.</p>
        </section>

        <section id="discussion-chat">
            <h2>Discussion Chat with Rumbletalk</h2>
            <p>Driver Connect features a discussion chat powered by Rumbletalk, where drivers can interact, share tips, and exchange information. Whether it's discussing the best routes, sharing experiences, or seeking advice, our chat feature facilitates seamless communication among drivers, fostering a sense of community and collaboration.</p>
        </section>

        <section id="route-optimization">
            <h2>Route Optimization and Nearby Store Locator</h2>
            <p>Our platform offers advanced route optimization capabilities, allowing drivers to plan their journeys efficiently. By optimizing routes based on various factors such as traffic conditions, distance, and preferences, we help drivers save time and fuel, while ensuring timely and reliable service.</p>
            <p>In addition, Driver Connect includes a nearby store locator feature, enabling drivers to easily find essential amenities such as gas stations, restaurants, and rest areas along their route. With just a few clicks, drivers can locate nearby services, ensuring a convenient and hassle-free experience on the road.</p>
        </section>

        <section id="contact">
            <h1>Contact Us</h1>
            <p>Have a question or feedback? We'd love to hear from you!</p>
            <form id="contact-form" action="myModel" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </section>
        
        <!-- <section id="route-optimization">
            <h2 class="optimization">Route Optimization</h2>
            <form id="route-form">
                <label for="start">Start Location:</label>
                <input class="input" type="text" id="start" name="start"></br>
                <label for="destination">Destination:</label>
                <input class="input" type="text" id="destination" name="destination"></br>
                <!-- <a href="direction.html"><button class="btn-1" type="submit">Get direction</button></a>  -->

            <!-- </form>
            <a
                href="https://www.google.com/maps/dir/Comox+Valley+Airport+(YQQ),+Knight+Road,+Comox,+BC/Shoppers+Drug+Mart,+8th+Street,+Courtenay,+BC/Walmart+Supercentre,+Cliffe+Avenue,+Courtenay,+BC/@49.6866598,-124.9935917,13z/data=!3m1!5s0x54881386e6713d8b:0x51ae7c389741a72d!4m20!4m19!1m5!1m1!1s0x548812648ecab90d:0x35cfbe3eb23acb1a!2m2!1d-124.9078168!2d49.7061218!1m5!1m1!1s0x54881475806055b7:0xaa0ffd50f3723bfb!2m2!1d-124.996745!2d49.688324!1m5!1m1!1s0x548813877ca35719:0x8ac5a9759dde3dc6!2m2!1d-124.9815309!2d49.6671014!3e0!5m1!1e9?entry=ttu"><button
                    class="btn-1" type="submit">Get direction</button></a>

            <div id="route-map">
                <!-- <img src="images/map.jpeg" alt="Map"/> -->
            <!--</div>
            
        </section> --> 

    </main>
    <?php require ('partials/footer.php')?>
    <!-- <footer>
        <div class="social-links">
            <a href="https://www.facebook.com/" target="_blank"><img src="facebook-icon.png"
                    alt="Facebook"></a>
            <a href="https://www.instagram.com/" target="_blank"><img src="instagram-icon.png"
                    alt="Instagram"></a>
            <a href="https://www.twitter.com/yourDriverConnectPage" target="_blank"><img src="twitter-icon.png"
                    alt="Twitter"></a>
        </div>
        <p>&copy; 2024 Driver Connect. All rights reserved.</p>
    
    </footer>
    <script src="script.js"></script>

</body>

</html> -->