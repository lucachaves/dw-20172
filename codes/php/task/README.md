# Tasks

* [Basic (Expressions & operators, Statements & declarations)](#basic-expressions--operators-statements--declarations)
  * [Body mass index(BMI)](#body-mass-index-bmi)

## Basic (Expressions & operators, Statements & declarations)

* * *

### Body mass index (BMI)

| Category | BMI |
| -|- |
| Underweight | <18.5 |
| Normal weight | 18.5–24.9 |
| Overweight | 25–29.9 |
| Obesity | BMI of 30 or greater |

[basic/bmi-if.php](responses/basic/bmi-if.php)<br>

```php
// BMI = weight/height²
$height = 1.5;
$weight = 60;
```

### Numbers series

[basic/numbers-for.php](responses/basic/numbers-for.php)<br>
[basic/numbers-forfor.php](responses/basic/numbers-forfor.php)<br>

```
00 01 02 03 04 05 06 07 08 09
10 11 12 13 14 15 16 17 18 19
20 21 22 23 24 25 26 27 28 29
30 31 32 33 34 35 36 37 38 39
40 41 42 43 44 45 46 47 48 49
50 51 52 53 54 55 56 57 58 59
60 61 62 63 64 65 66 67 68 69
70 71 72 73 74 75 76 77 78 79
80 81 82 83 84 85 86 87 88 89
90 91 92 93 94 95 96 97 98 99
```

[basic/numbers-reverse-for.php](responses/basic/numbers-reverse-for.php)<br>

```
99 98 97 96 95 94 93 92 91 90
89 88 87 86 85 84 83 82 81 80
79 78 77 76 75 74 73 72 71 70
69 68 67 66 65 64 63 62 61 60
59 58 57 56 55 54 53 52 51 50
49 48 47 46 45 44 43 42 41 40
39 38 37 36 35 34 33 32 31 30
29 28 27 26 25 24 23 22 21 20
19 18 17 16 15 14 13 12 11 10
09 08 07 06 05 04 03 02 01 00
```

[basic/numbers-reverse-odd-for.php](responses/basic/numbers-reverse-odd-for.php)

```
99 97 95 93 91
89 87 85 83 81
79 77 75 73 71
69 67 65 63 61
59 57 55 53 51
49 47 45 43 41
39 37 35 33 31
29 27 25 23 21
19 17 15 13 11
09 07 05 03 01
```

<!--
TODO
 ### Harmonic series

[basic/harmonic-series.php](responses/basic/harmonic-series.php)

```php
// h = 1/1 + 1/2 + ... + 1/n

let n = 10
```

## Function

* * *

### Sum

[function/sum.php](responses/function/sum.php)<br>
[function/sum.test.php](responses/function/sum.test.php)

```php
function sum(operand1, operand2){
  // TODO
}

console.log(sum(1, 2)) //=> 3
console.log(sum(3, 2)) //=> 5
```

## Area of Circle

[function/area-of-circle.php](responses/function/area-of-circle-fn.php)<br>
[function/area-of-circle.test.php](responses/function/area-of-circle-fn.test.php)

```php
// A = πr²

function areaOfCircle(radius){
  // TODO
}

let radius = 10
console.log(areaOfCircle(radius)) //=> 314.16

radius = 20
console.log(areaOfCircle(radius)) //=> 1256.64
```

### Calc

[function/calc.php](responses/function/calc.php)<br>
[function/calc.test.php](responses/function/calc.test.php)

```php
/**
 * operator: '+', '-', '*', '/'
 */
function calc(operand1, operand2, operator){
  // TODO
}

console.log(calc(1, 1, '+')) //=> 2
console.log(calc(1, 1, '*')) //=> 1
```

### Triangle Checker

[function/triangle-checker.php](responses/function/triangle-checker.php)<br>
[function/triangle-checker.test.php](responses/function/triangle-checker.test.php)

```php
console.log(triangleChecker(2, 2, 2))    //=> equilateral
console.log(triangleChecker(10, 10, 10)) //=> equilateral

console.log(triangleChecker(3, 4, 4))    //=> isosceles
console.log(triangleChecker(4, 3, 4))    //=> isosceles
console.log(triangleChecker(4, 4, 3))    //=> isosceles
console.log(triangleChecker(10, 10, 2))  //=> isosceles

console.log(triangleChecker(3, 4, 5))    //=> scalene
console.log(triangleChecker(10, 11, 12)) //=> scalene
console.log(triangleChecker(5, 4, 2))    //=> scalene

console.log(triangleChecker(0, 0, 0))    //=> none
console.log(triangleChecker(3, 4, -5))   //=> none
console.log(triangleChecker(1, 1, 3))    //=> none
console.log(triangleChecker(2, 4, 2))    //=> none
```

## String

* * *

### List Generator

[string/list-generator.php](responses/string/list-generator.php)<br>
[string/list-generator.test.php](responses/string/list-generator.test.php)

```php
console.log(createList(5))
//=>
// <ul>
//   <li>Text 1</li>
//   <li>Text 2</li>
//   <li>Text 3</li>
//   <li>Text 4</li>
//   <li>Text 5</li>
// </ul>

console.log(createList(5, 'Item'))
//=>
// <ul>
//   <li>Item 1</li>
//   <li>Item 2</li>
//   <li>Item 3</li>
//   <li>Item 4</li>
//   <li>Item 5</li>
// </ul>
```

### Table Generator

[string/table-generator.php](responses/string/table-generator.php)<br>
[string/table-generator.test.php](responses/string/table-generator.test.php)

```php
console.log(createTable(3, 4))
//=>
// 1.1 1.2 1.3 1.4
// 2.1 2.2 2.3 2.4
// 3.1 3.2 3.3 3.4


console.log(createTable(3, 4, 'Item'))
//=>
// Item 1.1 Item 1.2 Item 1.3 Item 1.4
// Item 2.1 Item 2.2 Item 2.3 Item 2.4
// Item 3.1 Item 3.2 Item 3.3 Item 3.4

console.log(createTableHTML(3, 4, 'Item'))
//=>
// <table>
//   <tr>
//     <td>Item 1.1</td>
//     <td>Item 1.2</td>
//     <td>Item 1.3</td>
//     <td>Item 1.4</td>
//   </tr>
//   <tr>
//     <td>Item 2.1</td>
//     <td>Item 2.2</td>
//     <td>Item 2.3</td>
//     <td>Item 2.4</td>
//   </tr>
//   <tr>
//     <td>Item 3.1</td>
//     <td>Item 3.2</td>
//     <td>Item 3.3</td>
//     <td>Item 3.4</td>
//   </tr>
// </table>
``` -->

## Other tasks

* [Exercism](http://exercism.io/languages/php/exercises)