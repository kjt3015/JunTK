<style>
    .com{
        display:none;
    }
    @media only screen and (orientation: landscape) {
        #main {
            display: none;
        }
        nav, .title{
            display: none;
        }
        body>.com{
            display: block;
        }
    }
    
    .menu-bar {
      position: fixed;
      bottom: 10px;
      left: 0;
      width: 100%;
      background-color: white;
      display: flex;
      justify-content: space-around;
      align-items: center;
    }

    .menu-bar a {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-decoration: none;
      color: #333;
      font-size: 12px;
    }

    .menu-bar img {
      width: 30px;
      height: 30px;
      object-fit: cover;
      margin-bottom: 5px;
    }

    .menu-bar span {
      text-align: center;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      width: 60px;
    }
    
    
    .title{
        margin-bottom: 50px;
        position: fixed;
        top: 10px;
        left: 0;
        width: 100%;
        height: 80px;
        text-align: center;
        margin: 0px;
    }

    .title img{
        width: 120px;
        height: 40px;
        margin-top: 20px;
    }
</style>

<link rel="stylesheet" href="../src/css/style.css">

<a href="/CMS/index.php"><div class="title">
    <img src="../src/img/NeoDS/neods_a.jpg">
</div></a>

<nav>
    <div class="menu-bar">
      <a onclick = "history.go(-1)" href="#"><img src="../src/img/menu_bar_icon/back.png"><span>뒤로가기</span></a>
      <a href="../DevelopeNote/DEV_Note_index.php"><img src="../src/img/menu_bar_icon/board.png"><span>공지사항</span></a>
      <a onclick = "alert('차량추가 기능 개발중');" href="#"><img src="../src/img/menu_bar_icon/codeing.png"><span>개발중</span></a>
      <a href="../Login/MyPage.php"><img src="../src/img/menu_bar_icon/profile.png"><span>프로필</span></a>
      <a onclick="showNext()" href="#"><img src="../src/img/menu_bar_icon/next_car.png"><span>다음차량</span></a>
    </div>
</nav>

<h1 class="com">
    모바일 세로모드에서만 지원합니다.
</h1>