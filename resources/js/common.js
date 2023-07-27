// Vue側での改行処理。
const nl2br = (str) => {
  var res = str.replace(/\r\n/g, "<br");
  res = res.replace(/(\n|\r)/g, "<br>");
  return res;
}

// 共通処理化⇒エクスポート記述で、他の場所でも呼び出し可能にする。
export { nl2br }