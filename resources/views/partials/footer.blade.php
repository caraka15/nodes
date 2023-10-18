<footer id="footer" class="footer-1">
    <div class="main-footer widgets-dark typo-light">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="widget subscribe no-box">
                        <h5 class="widget-title">Crxa Nodes<span></span></h5>
                        <p>CRXA NODES is a premier individual enterprise dedicated to providing exceptional node and
                            validator services across various networks, with a primary focus on the thriving Cosmos
                            ecosystem. With an unwavering commitment to excellence, we have established ourselves as a
                            trusted partner for network participants, offering reliable infrastructure and comprehensive
                            support to ensure optimal performance, security, and growth.</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="widget no-box">
                        <h5 class="widget-title">Quick Links<span></span></h5>
                        <ul class="thumbnail-widget">
                            <li>
                                <div class="thumb-content"><a href="https://crxa.my.id/">Get Started</a></div>
                            </li>
                            <li>
                                <div class="thumb-content"><a href="https://instagram.com/caraka1928_">Instagram</a>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-content"><a href="https://explorer.crxa.my.id">Mainnet Explorer</a>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-content"><a href="https://testnet-explorer.crxa.my.id">Testnet
                                        Explorer</a></div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="widget no-box">
                        <h5 class="widget-title">Get Started<span></span></h5>
                        <p>Get Update About Me</p>
                        <div class="subscribe">
                            <form action="index.php" method="POST">
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email"
                                        required>
                                </div>
                                <div class="subscribe-button">
                                    <button type="submit" class="btn btn-primary">Subscribe</button>
                                </div>
                            </form>
                            </form>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $email = $_POST["email"];

                                // Simpan email ke file Excel
                                $file = 'src/subscribers.xlsx'; // Ganti dengan nama file yang diinginkan
                                $data = array($email, date("Y-m-d H:i:s")); // Data yang akan disimpan
                                $row = implode("\t", $data) . "\n"; // Format baris data

                                // Menambahkan baris ke file Excel
                                if (file_exists($file)) {
                                    $fp = fopen($file, 'a');
                                    fwrite($fp, $row);
                                    fclose($fp);
                                } else {
                                    $fp = fopen($file, 'w');
                                    fwrite($fp, "Email\tDate\n"); // Header kolom
                                    fwrite($fp, $row);
                                    fclose($fp);
                                }

                                echo "<p>You are family now!!!</p>";
                            }
                            ?>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-3">

                    <div class="widget no-box">
                        <h5 class="widget-title">Contact Us<span></span></h5>

                        <p><a href="mailto:crxa@crxa.my.id" title="glorythemes">crxa@crxa.my.id</a></p>
                        <ul class="social-footer2">
                            <li class=""><a title="discord" target="_blank" href="https://discord.gg/G35JBXZBSN"><i
                                        class="fab fa-discord"></i></a></li>
                            <li class=""><a title="Twitter" target="_blank" href="https://twitter.com/Crk170619"><i
                                        class="fab fa-twitter"></i></a></li>

                            <li class=""><a title="Linkedin" target="_blank"
                                    href="https://www.linkedin.com/in/caraka15"><i class="fab fa-linkedin"></i></a></li>

                            <li class=""><a title="Github" target="_blank" href="https://github.com/caraka15"><i
                                        class="fab fa-github"></i></a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container1">
            <div class="row1">
                <div class="col-md-12 text-center">
                    <p>Copyright Company Name © 2022. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>