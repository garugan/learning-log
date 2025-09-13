// 関数とは（1）
const greet = function() {
  console.log("こんにちは！");
  console.log("関数を学習していきましょう！");
};

// 関数を呼び出してください

greet();



// 関数とは（2）
// 定数helloに関数を代入してください
const hello = function() {
  console.log("こんにちは！");
  console.log("私の名前はぼくです");
} ;


// 定数helloに代入された関数を呼び出してください
hello();



// アロー関数
// 定数greetにアロー関数を代入してください
const greet = () => {
  console.log("こんにちは！");
}

// 定数greetを呼び出してください
greet ();



// 引数とは
// 定数greetにアロー関数を代入してください
const greet = () => {
  console.log("こんにちは！");
}

// 定数greetを呼び出してください
greet ();



// 複数の引数を受け取る関数
// 関数の引数にnumber1とnumber2を追加してください
const add = (number1, number2) => {
  // number1とnumber2を足した値をコンソールに出力してください
  console.log(number1 + number2);
  
};

// 引数に5と7を渡して関数を呼び出してください
add(5,7);



// 戻り値とは
const half = (number) => {
  // numberを2で割った値を戻り値として返してください
  return number / 2;
};

// 定数resultを定義してください
const result = half(130);

// 「130の半分は〇〇です」となるように出力してください
console.log(`130の半分は${result}です`);




// 戻り値の活用
const check = (number) => {
  // numberが3の倍数かどうかを戻り値として返してください
  return number % 3 === 0;
  
};

// if文の条件式で、checkを呼び出してください
if (check(123)) {
  console.log("3の倍数です");
} else {
  console.log("3の倍数ではありません");
}



// スコープ
// 関数の外側に定数nameを定義してください
const name ="ひつじ仙人";

const introduce = () => {
  // 関数の内側に定数nameを定義してください
  const name ="にんじゃわんこ";

  // 定数nameを出力してください
  console.log(name);
  
};

introduce();

// コードを貼り付けて、定数nameを出力してください。
console.log(name);



// 総合演習
// toMinutes関数を定義してください
const toMinutes = (hour,minute) => {

  // 定数resultに、toMinutes関数の戻り値を代入してください
    return hour*60 + minute;
  }
  
  const result = toMinutes(3,20);
  // 「◯◯分」となるように、分に換算した結果を出力してください
  console.log(`${result}分`);
  