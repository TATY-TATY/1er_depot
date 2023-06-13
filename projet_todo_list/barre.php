<!DOCTYPE html>
<html>
<head>
  <title>Background Animation</title>
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .background {
      width: 100%;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      z-index: -1;
      background: linear-gradient(45deg, #ff0055, #00ffaa, #0055ff);
      background-size: 400% 400%;
      animation: gradientAnimation 15s ease infinite;
    }

    @keyframes gradientAnimation {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }
  </style>
</head>
<body>
  <div class="background"></div>
  <!-- Votre contenu HTML ici -->
</body>
</html>
