// 文字の表示
console.log("「ES6 学習コース」へようこそ！");
console.log("にんじゃわんこと一緒にES6を学んでいきましょう。");



// 計算
// 5と3を足した値を出力してください
console.log(5 + 3);

// 20から8を引いた値を出力してください
console.log(20 - 8);

// "4 + 5" を文字列として出力してください
console.log("4 + 5");



//掛け算「*」、割り算「/」
// 8と4をかけた結果を出力してください
console.log(8 * 4);

// 24を4で割った結果を出力してください
console.log(24 / 4);

// 7を2で割った余りを出力してください
console.log(7 % 2);



// 文字列の連結
// 「ひつじ」と「仙人」を連結してコンソールに出力してください
console.log("ひつじ" + "仙人");

// 文字列の「20」と「15」を連結してコンソールに出力してください
console.log("20" + "15");



//変数
// 変数nameを定義し、「にんじゃわんこ」を代入してください
let name = "にんじゃわんこ";

// 変数nameの値を出力してください
console.log(name);



//変数2
// 変数lengthを定義してください
let length = 5;

// 変数lengthの値を出力してください
console.log(length);

// 変数lengthを用いて、円の面積を出力してください
console.log(length * length * 3);



//変数の更新
let name = "にんじゃわんこ";
console.log(name);

// 変数nameの値を"とりずきん"に更新してください
name = "とりずきん";

// 変数nameの値を出力してください
console.log(name);



// 変数自身を更新する
let number = 7;
console.log(number);

// 変数numberの値に3を加えてください
number += 3;

console.log(number);

// 変数numberの値を2で割ってください
number /= 2;

console.log(number);



// 定数
// 定数languageを定義してください
const language = "フランス語";

// 定数languageの値を出力してください
console.log(language);

// 定数languageを用いて、「〇〇を話せます」と出力してください
console.log(language + "を話せます");



// テンプレートリテラル
const name = "にんじゃわんこ";
const age = 14;

// 「ぼくの名前は〇〇です」とコンソールに出力してください
console.log(`ぼくの名前は${name}です`);

// 「今は〇〇歳です」と出力してください
console.log(`今は${age}歳です`);



// if文、条件分岐
const level = 12;

// 条件式を「level > 10」とするif文を作ってください
if (level > 10) {
  console.log("レベルが10より大きいです");
}



// 真偽値と比較演算子
const age = 24;

// 「age >= 20」を出力してください
console.log(age >= 20);

// 「age < 20」を出力してください
console.log(age < 20);

// ageの値が20以上の場合に、「私は20歳以上です」と出力してください
if (age >= 20) {
  console.log("私は20歳以上です");
}



// 等価演算子
const password = "ninjawanko";

// passwordの値が"ninjawanko"の場合、「ログインに成功しました」と出力してください
if (password == "ninjawanko"){
  console.log("ログインに成功しました");
}


// passwordの値が"ninjawanko"でない場合、「パスワードが間違っています」と出力してください
if (password != "ninjawanko"){
  console.log("パスワードが間違っています");
}



// 