<?php
$year = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>BALDYS BASUCS OFICIAL FRE DOUNLOD</title>

<style>
body {
  margin: 0;
  font-family: "Comic Sans MS", cursive;
  background: linear-gradient(45deg, yellow, pink, lime, cyan);
  animation: bg 5s linear infinite;
  overflow: hidden;
}

@keyframes bg {
  0% { filter: hue-rotate(0deg); }
  100% { filter: hue-rotate(360deg); }
}

h1 {
  text-align: center;
  color: red;
  font-size: 3rem;
  text-shadow: 2px 2px black;
  animation: shake 0.2s infinite;
}

@keyframes shake {
  0% { transform: translate(1px,1px); }
  50% { transform: translate(-2px,2px); }
  100% { transform: translate(1px,-1px); }
}

button {
  display: block;
  margin: 40px auto;
  padding: 20px 40px;
  font-size: 22px;
  background: red;
  color: white;
  border: 5px dashed black;
  cursor: pointer;
  animation: bounce 0.8s infinite;
}

@keyframes bounce {
  0%,100% { transform: translateY(0); }
  50% { transform: translateY(-15px); }
}

.popup {
  position: absolute;
  width: 220px;
  background: white;
  border: 4px solid red;
  padding: 10px;
  font-size: 12px;
}
</style>

</head>

<body>

<h1>BALDYS BASUCS OFICIAL FRE DOUNLOD</h1>

<p style="text-align:center;">
✔ 100% SAFE (probably)<br>
✔ NO VIRUS (trust me bro)<br>
✔ Works on ALL systems (even toaster)
</p>

<button onclick="spawnPopups()">DOWNLOAD NOW !!! (FREE $$$)</button>

<div style="position:absolute;bottom:10px;width:100%;text-align:center;font-size:10px;">
© 1999–<?php echo $year; ?> Definitely Legit Corporation™
</div>

<script>
function spawnPopups() {
  for (let i = 0; i < 6; i++) {
    let p = document.createElement("div");
    p.className = "popup";
    p.style.top = Math.random() * window.innerHeight + "px";
    p.style.left = Math.random() * window.innerWidth + "px";

    p.innerHTML = `
      <b>WARNING!!!</b><br>
      Your PC is experiencing LOW FUN LEVELS.<br><br>
      Install BALDYS BASUCS immediately!!!
      <br><br>
      <button onclick="this.parentElement.remove()">X</button>
    `;

    document.body.appendChild(p);

    setTimeout(() => p.remove(), 7000);
  }
}
</script>

</body>
</html>