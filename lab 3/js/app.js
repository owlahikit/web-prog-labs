function newTable(){
    if (document.getElementById('table') != null)
        alert("Oops! This very lite version does not support creating multiple tables.");
    else{
        let tb = document.createElement('table');
        tb.setAttribute('id','table')
        document.getElementById("add").removeAttribute("disabled");
        document.body.append(tb);
        new_line++;

        if (new_line==1){
            document.getElementById("delete").removeAttribute("disabled");
            document.getElementById("number").removeAttribute("disabled");
        }
        let insert_row = tb.insertRow();
        insert_row.insertCell().append(new_line);
        insert_row.insertCell().append("Hello, Логинов Иван Павлович!");
    }
}

function addLine(){
    new_line++;

    if (new_line==1){
        document.getElementById("delete").removeAttribute("disabled");
        document.getElementById("number").removeAttribute("disabled");
    }

    let tb = table.insertRow();
    tb.insertCell().append(new_line);
    var bro = groupmates[Math.floor(Math.random() * groupmates.length)];
    tb.insertCell().append(" Hello, " + bro + "!");
}

function deleteLine(){
    let tb = document.querySelector('table');
    let id_line = document.getElementById('number').value;
    let id_del = 0;

    if (id_line == ""){
        alert("You must enter a number!");
        return null;
    }

    for (var i = 0; i < table.rows.length; i++){
        let id_tb = document.querySelector('table').rows[i].cells[0].innerHTML;
        id_del++;
        if (id_tb === id_line){
            tb.deleteRow(id_del - 1);
            id_del = 0;
            return null;
        }
    }
    alert("There is no line matching this number in the table! You can try and enter again. Click \"OK\" to dismiss.");
}

let new_line=0;
let groupmates = ["Аль-Мошки Исмаил Абдулвахаб Мохаммед", "Амири Зикрулло Файзуллохуджа", "Аплавина Анна Алексеевна",
    "Банников Семён Сергеевич", "Бурчак Алексей Сергеевич", "Гераськин Алексей Сергеевич", "Истамов Улугбек Йулчи Угли", 
    "Калюжный Артём Андреевич", "Кобилов Сироджиддин Уктамжонович", "Макаров Семён Леонидович", "Мироян Элен Арменовна",
    "Моисеенкова Виктория Васильевна","Напирели Торнике","Никитин Владимир Витальевич, это же я", "Ризобоев Андрей",
    "Сальников Георгий Романович","Убайдуллоев Джовид Хикматуллоевич","Фиськович Никита Андреевич","Чепиго Павел Сергеевич",
    "Янь Пэйсинь"];