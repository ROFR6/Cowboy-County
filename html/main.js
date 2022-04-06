/* Moralis init code */
const serverUrl = "https://jsotamk6fp3e.usemoralis.com:2053/server";
const appId = "mxC5xwV2xmfNGdc9Zoj7HdBidtMrvn7wB4hxS85X";
Moralis.start({ serverUrl, appId });

/* Authentication code */
async function login() {
  let user = Moralis.User.current();
  if (!user) {
    user = await Moralis.authenticate({
      signingMessage: "Log in using Moralis",
    })
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

async function stake(x){
    const wallet = getWallet();
        const id = getId();
        const vault = x;
        const time = getTime();

        const tokens = Moralis.Object.extend("tokens");
        const t = new tokens();
        t.set("id", id);
        t.set("wallet", wallet);
        t.set("isStaked", vault);
        t.set("timeStaked", time);
        t.save();
}
function getWallet(){
    return "hi";
}
function getTime(){
    return 0;
}
function getId(){
    return 0;
}

document.getElementById("btn-login").onclick = login;
document.getElementById("btn-logout").onclick = logOut;