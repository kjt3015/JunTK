<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<title>CSS</title>
		<style>
            @keyframes vibration {
              from {
                transform: rotate(1deg);
              }
              to {
                transform: rotate(-1deg);
              }
            }
             .box {
              width: 150px;
              height: 150px;
              background: #febf00;
            }

            .box.vibration {
              animation: vibration 0.1s infinite;
            }           
		</style>
        <script>
            const vibration = (target) => {
              target.classList.add("vibration");

              setTimeout(function() {
                target.classList.remove("vibration");
              }, 400);
            }
        </script>
	</head>
	<body>
        <div class="box" onclick="vibration(this)"></div>
    </body>
</html>