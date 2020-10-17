<?php
include('header.php');
?>
</body>

<div class="container">
    <div class="col-12 col-md-7 padtop">
        <h1>Domain Registration <span style="color: #ee7dee;">Now!</span></h1>
        <p class="sub-heading">Easy and affordable global Domain Names.</p>
        <a href="#prices"><button type="button" class="btn btn-light solution-btn"><i class="fas fa-thumbtack"></i>Register a domain</button></a>
        <a href="#features"><button type="button" class="btn btn-light contact-btn"><i class="fas fa-share"></i>Transfer a domain</button></a>
    </div>
        <img src="img/dd.png" class="svg-web" >
</div>

<section id="domains" class="domains">
<div class="wrapper container text-center">
            <h2>It all starts with a domain</h2>
            <div class="container py-4">
                <form action="" method="GET">
                  <span class="span-d"> www. </span> <input id="searchBar" class="searchbar" type="text" name="domain" placeholder="Find your perfect domain name" value="<?php if(isset($_GET['domain'])){ echo $_GET['domain']; } ?>">
                    <button type="submit" id="btnSearch" class="btn-search"><i class="fa fa-search"></i>Search</button>
                </form>
            </div>
            <?php
                error_reporting(0);
                if(isset($_GET['domain'])){
                    $domain = $_GET['domain'];
                    if ( gethostbyname($domain) != $domain ) {
                        echo "<h3 class='fail'>Domain <span style='color: red;'>Already</span> Registered!</h3>";
                    }
                    else {
                        echo "<h3 class='success'>Hurry, your <span style='color:#2ab94b;'>$domain</span> is available!, you can register it <i class='fas fa-cart-arrow-down'></i></h3>";
                    }
                }
            ?>
        </div>

        <div class="row justify-content-center" style="background: transparent;">
                            <div class="col-xl-2 col-md-3 col-sm-4 col-12">
                                <div class="domain-container-card">
                                    <img src="https://www.bluehost.com/static/img/library/components/tld-cards/com-81.png" alt="Slack" class="domain-img">
                                    <p>$ 12.33/yr</p>
                                    <a href="#prices"><button type="button" class="btn domain-btn"><i class="fas fa-mouse-pointer"></i>Select</button></a>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-12">
                                <div class="domain-container-card">
                                    <img src="https://www.bluehost.com/static/img/library/components/tld-cards/net-65.png" alt="Slack" class="domain-img">
                                    <p>$ 14.99/yr</p>
                                    <a href="#prices"><button type="button" class="btn domain-btn"><i class="fas fa-mouse-pointer"></i>Select</button></a>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-12">
                                <div class="domain-container-card">
                                    <img src="https://www.bluehost.com/static/img/library/components/tld-cards/org-46.png" alt="Slack" class="domain-img" style="    padding: 0.5rem;">
                                    <p>$ 9.99/yr</p>
                                    <a href="#prices"><button type="button" class="btn domain-btn"><i class="fas fa-mouse-pointer"></i>Select</button></a>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-12">
                                <div class="domain-container-card">
                                    <img src="https://www.bluehost.com/static/img/library/components/tld-cards/tech-79.png" alt="Slack" class="domain-img">
                                    <p>$ 4.99/yr</p>
                                    <a href="#prices"><button type="button" class="btn domain-btn"><i class="fas fa-mouse-pointer"></i>Select</button></a>
                                </div>
                            </div>
                        </div>
</div>
</section>

<section id="features" class="domain-class">
    <div class="domains-features py-5 text-center">
    <h1 class="text-center">Not just a domain name</h1>
    <p class="lead">Our Features will suits your domain.</p>

    <div class="container my-5">
  <div class="row" style="background: transparent;">
    <div class="col-md col-11 m-2 rounded border df">
      <div class="d-flex flex-column justify-content-around p-3">
        <div class="icon"><i class="fas fa-tools"></i></div>
        <div class="h4 py-3">Easy Mangement</div>
        <div class="">Landlubber or just lubber crow's nest Plate Fleet poop deck avast transom man-of-war Sea Legs. Spanish Main avast chase guns transom hearties matey strike colors holystone.</div>
      </div>
    </div>
    <div class="col-md col-11 m-2 rounded border">
      <div class="d-flex flex-column h-100 justify-content-around p-3">
        <div class="icon"><i class="fas fa-lock"></i></div>
        <div class="h4">Privacy and security</div>
        <div class="">Landlubber or just lubber crow's nest Plate Fleet poop deck avast transom man-of-war Sea Legs. Spanish Main avast chase guns transom hearties matey strike colors holystone.</div>
      </div>
      </div>
    <div class="col-md col-11 m-2 rounded border df">
      <div class="d-flex flex-column h-100 justify-content-around p-3">
        <div class="icon"><i class="fas fa-sync"></i></div>
        <div class="h4">Auto-Renewal</div>
        <div class="">Landlubber or just lubber crow's nest Plate Fleet poop deck avast transom man-of-war Sea Legs. Spanish Main avast chase guns transom hearties matey strike colors holystone.</div>
      </div>
    </div>
    </div>

    </div>
</section>
<?php
include('footer.php');
?>