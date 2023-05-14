<style>
    .bottom_menu {
        position: fixed;
        bottom: 0px;
        left: 0px;
        width: 100%;
        height: 50px;
        z-index: 100;
    }

    .bottom_menu>div {
        float: left;
        width: 20%;
        height: 100%;
        text-align: center;
        padding-top: 13px;
    }
</style>

<div class="bottom_menu">
    <div>
        <img src="../src/img/menu_bar_icon/menu.png">
    </div>
    <div>
        <img src="../src/img/menu_bar_icon/plus.png">
    </div>
    <div>
        <a href="../"><img src="../src/img/menu_bar_icon/home.png"></a>
    </div>
    <div>
        <img src="../src/img/menu_bar_icon/user.png">
    </div>
    <div>
        <img src="../src/img/menu_bar_icon/next.png" onclick="showNext()">
    </div>
</div>