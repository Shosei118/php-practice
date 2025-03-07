<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++){
  if ($i % 4 == 0) {
    echo "tic-tac\n";
  } elseif ($i % 5 == 0) {
    echo "tac\n";
  } elseif ($i % 4 == 0 && $i % 5 == 0) {
    echo "tic-tac\n";
  } else {
    echo $i . "\n";
  }
}


// Q2 多次元連想配列
$personalInfos = [
  [
    'name' => 'Aさん',
    'mail' => 'aaa@mail.com',
    'tel' => '09011112222'
  ],
  [
    'name' => 'Bさん',
    'mail' => 'bbb@mail.com',
    'tel' => '08033334444'
  ],
  [
    'name' => 'Cさん',
    'mail' => 'ccc@mail.com',
    'tel' => '09055556666'
  ],
];

// Q2-1 Bさんの電話番号を表示
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

// Q2-2 foreachを使って情報を表示
foreach ($personalInfos as $index => $info) {
  echo ($index + 1) . "番目の" . $info['name'] . "のメールアドレスは" . $info['mail'] . "で、電話番号は" . $info['tel'] . "です。\n";
}

// Q2-3 ageというKeyに対して$ageListのそれぞれの年齢をValueとして追加
$ageList = [25, 30, 18];

foreach ($personalInfos as $i => $info) {
  $personalInfos[$i]['age'] = $ageList[$i];
}

// Q3 オブジェクト-1
<?php

class Student
{
  public $studentId;
  public $studentName;

  public function __construct($id, $name)
  {
    $this->studentId = $id;
    $this->studentName = $name;
  }

  public function attend()
  {
    echo '授業に出席しました。';
  }

  public function displayInfo()
  {
    if ($this->studentId > 0) {
      echo "学籍番号" . $this->studentId . "番の生徒は" . $this->studentName . "です。\n";
    }
  }
}

$student = new Student(120, "山田");
$student->displayInfo();

// Q4 オブジェクト-2
<?php

class Student
{
  public $studentId;
  public $studentName;

  public function __construct($id, $name)
  {
    $this->studentId = $id;
    $this->studentName = $name;
  }

  public function attend($subject)
  {
    echo "{$this->studentName}は{$subject}の授業に参加しました。学籍番号：{$this->studentId}\n";
  }

  public function displayInfo()
  {
    if ($this->studentId > 0) {
      echo "学籍番号" . $this->studentId . "番の生徒は" . $this->studentName . "です。\n";
    }
  }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
// Q5-1 1ヶ月前の日付を表すDateTimeインスタンスを作成し、出力結果と同じフォーマットで出力
<?php

$currentDate = new DateTime();
$currentDate->modify('-1 month');

echo $currentDate->format('Y-m-d');

// Q5-2 日付の差を計算して、総日数を出力
<?php

$currentDate = new DateTime();
$targetDate = new DateTime('1992-04-25');

$interval = $currentDate->diff($targetDate);

echo "あの日から" . $interval->days . "日経過しました。\n";

?>