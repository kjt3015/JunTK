// 변수 선언
let a = "";
let b = "";
let value = 0;
let pro_check = "false";
let v = "false";

document.getElementById("display").textContent = "";
document.getElementById("sub_display").textContent = "";
document.getElementById("parsing").textContent = "";


// 키를 눌렀을때 display에 출력되는 함수
function display_input(but_text) {
    v = "false";
    // 만약 숫자가 value값이 있으면 display를 초기화 하고 a에 현재 숫자 담기
    if (pro_check == "true") {
        alert("CE/C/Del을 누르세요.");
        document.getElementById("display").textContent = "CE/C/Del을 누르세요.";
    }
    else if (value != 0 && pro_check == "false") {
        a = document.getElementById("display").textContent;
        document.getElementById("display").textContent = "";
        value = a;
        value = 0;
    }

    console.log("누르신 버튼의 값은", but_text, "입니다.");
    document.getElementById("display").textContent += but_text;

}

// 기호를 눌렀을 때 a에 display의 숫자를 저장, b에 기호를 저장하고 display의 수와 연산후 display에 연산결과를 띄우는 함수
function justdoit(but_text) {
    let m_display = document.getElementById("display").textContent;
    let s_display = document.getElementById("sub_display").textContent;
    let p_display = document.getElementById("parsing").textContent;
    let but_text_set = but_text;
    v = "true";
    console.log(m_display, s_display, but_text_set);

    // 기호를 눌렀을 때 display 공백이면 무시
    if (m_display != "" && pro_check == "false") {
        if (s_display == "") {
            a = document.getElementById("display").textContent;
            console.log("a값을 저장했습니다", a);

            document.getElementById("parsing").textContent += a;
            document.getElementById("display").textContent = "";
            console.log("display의 값을 지웠습니다.");

            console.log("===========================");
            console.log("s_display에 아무값도 없습니다.");

            b = but_text_set;
            console.log("b값을 저장했습니다", b);

            document.getElementById("sub_display").textContent = but_text_set;
            document.getElementById("parsing").textContent += but_text_set;
            console.log("sub_display값에 기호를 출력했습니다.");
        }
        else if (s_display != "") {
            console.log("s_display가 공백이 아닙니다.");
            switch (b) {
                case "+":
                    document.getElementById("parsing").textContent += document.getElementById("display").textContent;
                    console.log(Number(a), m_display);
                    value = Number(a) + Number(m_display);
                    console.log("결과값은:", value);

                    document.getElementById("display").textContent = value;
                    console.log("main display에 value값을 출력했습니다.")

                    document.getElementById("sub_display").textContent = but_text_set;
                    b = but_text_set;
                    document.getElementById("parsing").textContent += b;
                    break;

                case "-":
                    document.getElementById("parsing").textContent += document.getElementById("display").textContent;
                    console.log(Number(a), m_display);
                    value = Number(a) - Number(m_display);
                    console.log("결과값은:", value);

                    document.getElementById("display").textContent = value;
                    console.log("main display에 value값을 출력했습니다.")

                    document.getElementById("sub_display").textContent = but_text_set;
                    b = but_text_set;
                    document.getElementById("parsing").textContent += b;
                    break

                case "*":
                    document.getElementById("parsing").textContent += document.getElementById("display").textContent;
                    console.log(Number(a), m_display);
                    value = Number(a) * Number(m_display);
                    console.log("결과값은:", value);

                    document.getElementById("display").textContent = value;
                    console.log("main display에 value값을 출력했습니다.")

                    document.getElementById("sub_display").textContent = but_text_set;
                    b = but_text_set;
                    document.getElementById("parsing").textContent += b;
                    break

                case "/":
                    document.getElementById("parsing").textContent += document.getElementById("display").textContent;
                    console.log(Number(a), m_display);
                    value = Number(a) / Number(m_display);
                    console.log("결과값은:", value);

                    document.getElementById("display").textContent = value;
                    console.log("main display에 value값을 출력했습니다.")

                    document.getElementById("sub_display").textContent = but_text_set;
                    b = but_text_set;
                    document.getElementById("parsing").textContent += b;
                    break
            }

            if (but_text_set == "=") {
                document.getElementById("sub_display").textContent = "";
                b = "";
                pro_check = "true";
            }
        }
    }
    else if (m_display == "" && pro_check == "false") {
        console.log("계산할 값이 없습니다.");
    }
    else {
        alert("CE를 눌러 초기화 해주세요.");
        document.getElementById("display").textContent = "CE를 눌러 초기화 해주세요.";
    }
}

// 초기화 함수
function C() {
    document.getElementById("display").textContent = "";
}
function CE() {
    document.getElementById("parsing").textContent = "";
    document.getElementById("display").textContent = "";
    document.getElementById("sub_display").textContent = "";
    value = 0;
    a = "";
    b = "";
    pro_check = "false";
}
function DEL() {
    let str = document.getElementById("display").textContent;
    console.log(str);
    str = str.substring(0, str.length - 1);
    console.log(str);
    document.getElementById("display").textContent = str;
}