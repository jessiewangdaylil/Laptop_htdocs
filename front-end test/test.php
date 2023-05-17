<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
#flex-container {
  display: flex;
  font-family: Consolas, Arial, sans-serif;
}

#flex-container>div {
  padding: 1rem;
}

#flex-auto {
  flex: auto;
  border: 1px solid #f00;
}

#flex-initial {
  border: 1px solid #000;
}
</style>

<body>

  <div id="flex-container">
    <div id="flex-auto">flex: auto (click to toggle raw box)</div>
    <div id="flex-initial">flex: initial</div>
  </div>

  <script>
  const flexAuto = document.getElementById("flex-auto");
  const flexInitial = document.getElementById("flex-initial");
  flexAuto.addEventListener("click", () => {
    flexInitial.style.display =
      flexInitial.style.display === "none" ? "block" : "none";
  });
  </script>
</body>

</html>