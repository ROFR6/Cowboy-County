<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cowboy County</title>
  <script src="https://unpkg.com/moralis/dist/moralis.js"></script>
  <link href="./style.css" rel="stylesheet">
</head>

<body>
  <!-- Navigation Bar -->
  <div class=top>
    <div class=logo>
      <img src="./images/logo_white.png">
    </div>
    <div class=top-container>
      <h1><a href="./html/about-us.php">About Us</a></h1>
    </div>
    <div class=top-container>
      <h1><a href="./html/mint.php">MINT</a></h1>
    </div>
    <!-- <div class=top-container onclick="logOut()">
      <h1><a>Logout</a></h1>
    </div> -->
    <!-- <div class=top-container>
                <h1><a href="./html/roadmap.html">Roadmap</a></h1>
            </div>
            <div class=top-container>
                <h1><a href="./html/contact.html">Contact</a></h1>
            </div>
            <div class=top-container>
                <h1><a href="./html/marketplace.html">Marketplace</a></h1>
            </div> -->
    <!-- <button onclick="login()" class="wallet">
      <h2>Start</h2>
    </button> -->
  </div>
  <!-- /Navigation Bar -->
  <center>
    <div class="container">
      <img src="./images/Web_BG.png" height="100%">
      <div class="row">
        <div class="column">
          <center>
            <div class="space"></div>
            <div class="group ">
              <h4>Howdy!</h4>
              <h5>Welcome to our project website! Cowboy County is a DAO (Decentralized autonomous organization) that
                will operate similar to an ETF or Mutual Fund but for Crypto/NFTs. The exciting part about this project
                running on NFTs and blockchain technology is that it allows for more community involvement. Every large
                acquisition and fund decision will be voted on and decided by our shareholders. Your NFT acts similar to
                a stock that grants access and voting rights. If you have any questions feel free to join the Discord
                and take a look around!</h5>
            </div>
            <div class="group reveal">
              <div class="big-logo-pic"><img src="./images/discord.png"></div>
              <a href="https://discord.gg/C7DGGxc6sc" <button class="button">JOIN US ON DISCORD</button> </a>
            </div>
            <div class="space"></div>
            <div class="group reveal">
              <div class="big-logo-pic"><img src="./images/opensea.png"></div>
              <button class="button">CHECK US OUT ON OPENSEA <br>(mint coming soon)</button>
            </div>
            <div class="space"></div>
            <div class="group reveal">
              <h4>FOLLOW US ON</h4>
              <h5>Twitter, Instagram, and TikTok by clicking the icons below.</h5>
            </div>
            <div class="side-by-side reveal">
              <div class="tiny-logo">
                <a href="https://twitter.com/county_cowboy"><img src="./images/twitter.png"></a>
              </div>
              <div class="tiny-logo">
                <a href="https://www.instagram.com/cowboycountynft/"><img src="./images/instagram.png"></a>
              </div>
              <div class="tiny-logo">
                <a href="https://www.tiktok.com/@cowboycounty?lang=en"><img src="./images/tiktok.png"></a>
              </div>
            </div>
            <div class="space"></div>
            <div class="group reveal">
              <h4>ABOUT US</h4>
              <h5>Cowboy County was created by a team of four. Our team members are experts in management, NFT
                communities, digital development, and graphic design.</h5>
            </div>
            <div class="mini-space"></div>
          </center>
        </div>
        <div class="column">
          <img src="./images/roadmap.png">
        </div>
      </div>

    </div><!-- /.container -->
    <div class="footer">
      Cowboy County &copy; 2022
    </div>
  </center>
</body>
<script type="text/javascript">
  window.addEventListener('scroll', reveal);
  function reveal() {
    var reveals = document.querySelectorAll('.reveal');
    for (var i = 0; i < reveals.length; i++) {
      var windowheight = window.innerHeight;
      var revealtop = reveals[i].getBoundingClientRect().top;
      var revealpoint = 150;
      if (revealtop < windowheight - revealpoint) {
        reveals[i].classList.add('active');
      }
      else {
        reveals[i].classList.remove('active');
      }
    }
  }

  var today = new Date();
  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

  const serverUrl = "https://cimugzkotah5.usemoralis.com:2053/server";
  const appId = "brnLYyndIs1VBTSzDQaDiDQo8o3VC0dPiSptyt2Q";
  Moralis.start({ serverUrl, appId });

  /* Authentication code */
  async function login() {
    let user = Moralis.User.current();
    if (!user) {
      user = await Moralis.authenticate({ signingMessage: "Signed in at "+ time })
        .then(function (user) {
          console.log("logged in user:", user);
          console.log(user.get("ethAddress"));
        })
        .catch(function (error) {
          console.log(error);
        });
    }
  }

  async function logOut() {
    await Moralis.User.logOut();
    console.log("logged out");
  }

  document.getElementById("btn-login").onclick = login;
  document.getElementById("btn-logout").onclick = logOut;
</script>

</html>