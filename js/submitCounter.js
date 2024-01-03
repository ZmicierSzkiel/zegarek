function getCookie(e) {
  let t = document.cookie.match(
    RegExp(
      "(?:^|; )" +
        e.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") +
        "=([^;]*)"
    )
  );
  return t ? decodeURIComponent(t[1]) : void 0;
}
function setCookie(e, t, o = {}) {
  (o = { path: "/", ...o }).expires instanceof Date &&
    (o.expires = o.expires.toUTCString());
  let i = encodeURIComponent(e) + "=" + encodeURIComponent(t);
  for (let n in o) {
    i += "; " + n;
    let r = o[n];
    !0 !== r && (i += "=" + r);
  }
  document.cookie = i;
}
function checkForm(e) {
  if (e.phone && !e.phone.value) return alert("Введите номер телефона"), !1;
  let t = document.createElement("input");
  (t.type = "hidden"),
    (t.id = "order-key"),
    (t.name = "order-key"),
    (t.value = "secret-code-12345"),
    e.append(t);
  let o = getCookie("submitCounter");
  if (o) {
    if (Number(o) >= 2) return alert("Вы уже отправили форму дважды"), !1;
    setCookie("submitCounter", String(Number(getCookie("submitCounter")) + 1), {
      "max-age": 3600,
    });
  } else setCookie("submitCounter", "1", { "max-age": 3600 });
  return !0;
}
