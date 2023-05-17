<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <form action="/recieve.html" autocomplete="on">
    <label for=" fname">First name:</label>
    <input type="text" id="fname" name="fname" title="fname"><br><br>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname" title="lname"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" title="email"><br><br>
    <label for="fname">hidden:</label>
    <input type="hidden" id="hidden" name="hidden" title="hidden"><br><br>

    <label for="checkbox1">checkbox 1:</label>
    <input type="checkbox" id="checkbox1" name="checkbox1" value="value1" checked title="checkbox"><br><br>
    <label for="checkbox2">checkbox 2:</label>
    <input type="checkbox" id="checkbox2" name="checkbox2" value="value2" title="checkbox2"><br><br>
    <label for="list">list:</label>
    <input list="lists" name="list" id="list"><br><br>
    <datalist id="lists">
      <option value="Edge">
      <option value="Firefox">
      <option value="Chrome">
      <option value="Opera">
      <option value="Safari">
    </datalist>
    <label for="button">button:</label>
    <input type="button" id="button" name="button" onclick="alert('你按了我一下!')" value="按一下看看會發生什麼事"
      title="button"><br><br>
    <label for="search">search:</label>
    <input type="search" id="search" name="search" title="button"><br><br>
    <label for="url">url:</label>
    <input type="url" id="url" name="url" title="url"><br><br>
    <label for="password">password:</label>
    <input type="password" id="password" name="password" title="password"><br><br>
    <label for="tel">tel:</label>
    <input type="tel" id="tel" name="tel" title="tel"><br><br>
    <label for="number">number:</label>
    <input type="number" id="number" name="number" min="1" max="50" title="number"><br><br>
    <label for="range">range:</label>
    <input type="range" id="range" name="range" title="range"><br><br>
    <label for="color">color:</label>
    <input type="color" id="color" name="color" title="color"><br><br>
    <label for="file">file:</label>
    <input type="file" id="file" name="file" multiple title="file"><br><br>
    <label for="datetime-local">datetime-local:</label>
    <input type="datetime-local" id="datetime-local" name="datetime-local" max="2023-03-31T12:00"
      title="datetime-local"><br><br>
    <label for="month">month:</label>
    <input type="month" id="month" name="month" max="2023-03" title="month"><br><br>
    <label for="week">week:</label>
    <input type="week" id="week" name="week" max="2023-W14" title="week"><br><br>
    <label for="date">date:</label>
    <input type="date" id="date" name="date" max="2022-10-16" title="date"><br><br>
    <label for="time">time:</label>
    <input type="time" id="time" name="time" max="1:00AM" title="time"><br><br>
    <label for="reset">reset:</label>
    image <input type="image" src="img_submit.gif" width="20" height="15" title="image"><br>
    <input type="reset" id="reset" name="reset" title="reset"><br><br>
    <label for="submit">submit:</label>
    <input type="submit" id="submit" name="submit" title="submit"><br><br>
    <label for="submit2">submit2:</label>
    <input type="submit" id="submit2" name="anthor submit" formaction="/index.html"><br><br>


  </form>

</body>

</html>