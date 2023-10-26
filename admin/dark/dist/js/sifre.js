function SifreAl() {
  document.getElementById("sifre").value = Sifre(8);
}

function Sifre(n) {
  let result = "";
  let characters =
    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789#$)(_!@";
  let charactersLength = characters.length;
  for (let i = 0; i < n; i++) {
    result += characters.charAt(Math.floor(Math.random() * charactersLength));
  }
  return result;
}

function SifreTekrarYoxla() {
  let pass1 = document.getElementById("yenisifre").value;
  let pass2 = document.getElementById("yenisifretekrar").value;
  let msg = "";
  let cls = "";
  if (pass1 === pass2) {
    msg = "Şifrələr Uyğundur";
    cls = "success";
  } else {
    msg = "Şifrələr Uyğunlaşmır";
    cls = "danger";
  }
  document.getElementsByClassName(
    "passmessage"
  )[0].innerHTML = `<div class="alert alert-${cls}" role="alert">
  ${msg}
</div>`;
}
