<style>
    .section1{
        background: url("asset/slider.png") no-repeat;
        background-size: cover;
        width: 100%;
        height: 350px;
        #head{
            padding-top: 150px;
            text-align: center;
            color: #fff;
        }
        #head h1{
            position: relative;
            font-family: "Wittgenstein", serif;
            font-size: 70px;
        }
        h1:after {
            content: "";
            position: absolute;
            left: 50%;
            margin-left: -50px;
            bottom: 0;
            width: 100px;
            border-bottom: 2px solid #fff;
        }
    }

    .section2{
        #card-calender{
            width: 316px;
            height: fit-content;
            background-color: #FFFFFF;
            border-radius: 15px;
            box-shadow: 0px 0px 10px #efefef;
        }
        input,
        button,
        textarea {
            font-family: "Open Sans", sans-serif;
            font-size: 14px;
        }

        .btn {
            font-family: "Wittgenstein", serif;
            font-size: 1em;
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
            background: #fff;
            color: #262626;
            border-radius: 10px;
            height: 50px;
            font-weight: 600;
            min-width: 100px;
            padding: 0px 20px;
            transition: 0.2s ease;
            cursor: pointer;
            outline: 0;
        }

        .btn:hover {
            color: #FFF;
            background: #455AF7;
        }

        .btn-small {
            min-width: 50px;
        }

        .btn-day {
            font-family: "Wittgenstein", serif;
            font-size: 1em;
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
            background: rgba(0, 0, 0, 0);
            width: 100%;
            height: 100%;
            cursor: pointer;
            z-index: 99;
            outline: 0;
            border-radius: 10px;
            transition: 0.4s all;
        }

        .btn-day.active {
            color: #FFF;
            font-weight: 600;
            z-index: 99;
        }

        .btn-day.active::before {
            position: absolute;
            content: '';
            width: 40px;
            height: 40px;
            background: #006805;
            border-radius: 10px;
            z-index: -1;
        }

        .text-field {
            padding: 10px;
            height: 50px;
            width: 200px;
            border: 1px solid #f0f0f0;
            border-radius: 10px;
            margin: 0px 10px 0 0;
        }

        .title {
            font-size: 1.3em;
        }

        .subtitle {
            font-size: 1.1em;
        }

        /* Calendar */

        .container {
            /* display: flex; */
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            min-height: 100vh;
            background: #ecf1f8;
        }

        /* .calendar-assets {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            padding: 10px;
        } */

        #currentDate{
            text-align:center;
            font-size:20px;
        }

        .field {
            display: flex;
            width: auto;
            flex-direction: column;
            align-items: left;
            justify-content: center;
            margin: 20px 0;
        }

        .field label {
            margin: 2px;
        }

        .form-input {
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: center;
        }

        .day-assets {
            display: flex;
            justify-content: space-between;
            width: 324px;
        }

        .day-assets .btn:nth-child(2) i {
            padding: 0 10px 0 0 !important;
        }

        .calendar {
            height: 370px;
            width: 300px;
            border-radius: 18px;
            background: #ffffff;
            padding: 10px;
            user-select: none;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 18px 18px 0px 0px;
            padding: 15px;
            height: 50px;
            width: 100%;
            color: #262626;
        }

        .month {
            font-size: 0.7em;
        }

        .icon {
            padding: 10px;
            font-size: 1em;
            margin: 0 0 0 5px;
            background: #ffffff;
            color: #006805;
            border: none;
            cursor: pointer;
            outline: 0;
        }

        .icon:hover {
            cursor: pointer;
        }

        #calendar {
            width: 100%;
        }

        .weekends th {
            font-size: 1em;
            color: gray;
            font-weight: 400;
            width: 40px;
            margin: 10px 0;
        }

        #calendar tr {
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            margin: 3px;
        }

        #calendar td {
            display: flex;
            height: 40px;
            width: 40px;
            justify-content: center;
            align-items: center;
            text-align: center;
            z-index: 0;
        }

        .side {
            flex: 70%;
            background-color: #fff;
            padding: 20px;
        }

        /* Main column */
        .main {
            flex: 30%;
            background-color: #f1f1f1;
            padding: 20px;
        }

        /* Fake image, just for this example */
        .fakeimg {
            background-color: #aaa;
            width: 100%;
            padding: 20px;
        }
    }
</style>
<div class="section1">
    <div id="head">
        <h1>Berita</h1>
        <p>Ikatan Alumni Akuntansu UNJ</p>
    </div>
</div>
<div class="section2">
    <div class="container" style="background-color: #fff; height: auto; padding-top: 100px;">
        <div class="row">
            <!-- <div class="side col-md-3">
                <div class="card" style="height: 230px; border: 0px; border-bottom: #ebebeb dashed 1px;">
                    <div class="card-body">
                        <img src="asset/news.jpg" alt="" width="235px;">
                    </div>
                </div>
                <div class="card" style="height: 230px; border: 0px; border-bottom: #ebebeb dashed 1px;">
                    <div class="card-body" sytle="width: 200px;">
                        <img src="asset/news.jpg" alt="" width="235px;">
                    </div>
                </div>
                <div class="card" style="height: 230px; border: 0px;">
                    <div class="card-body" sytle="width: 200px;">
                        <img src="asset/news.jpg" alt="" width="235px;">
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-md-3">
                <div class="card" style="height: 230px; border: 0px; border-bottom: #ebebeb dashed 1px;">
                    <div class="card-body">
                        <img src="asset/news.jpg" alt="" width="235px;">
                    </div>
                </div>
                <div class="card" style="height: 230px; border: 0px; border-bottom: #ebebeb dashed 1px;">
                    <div class="card-body" sytle="width: 200px;">
                        <img src="asset/news.jpg" alt="" width="235px;">
                    </div>
                </div>
                <div class="card" style="height: 230px; border: 0px;">
                    <div class="card-body" sytle="width: 200px;">
                        <img src="asset/news.jpg" alt="" width="235px;">
                    </div>
                </div>
            </div> -->
            <div class="side">
                <div class="title"><h3><b>Berita Terbaru</b></h3></div>
                <div class="card" style="height: auto; border: 0px; border-bottom: #ebebeb dashed 1px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="asset/news.jpg" alt="" style="width: 150px;">
                            </div>
                            <div class="col-md-9">
                                <div>
                                    <a href="#" style="text-decoration: none; font-weight: bolder; color: #000;"><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</span></a>
                                </div>
                                <div style="padding-top: 5px; padding-bottom: 5px;">
                                    <i class="far fa-calendar-alt" style="color: grey; font-size: 13px;"> Kamis, 25 Juli 2024</i>
                                </div>
                                <button style="background-color: blue; color: #fff; border-radius: 7px; padding: 10px; border: 0px;">Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="height: auto; border: 0px; border-bottom: #ebebeb dashed 1px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="asset/news.jpg" alt="" style="width: 150px;">
                            </div>
                            <div class="col-md-9">
                                <div>
                                    <a href="#" style="text-decoration: none; font-weight: bolder; color: #000;"><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</span></a>
                                </div>
                                <div style="padding-top: 5px; padding-bottom: 5px;">
                                    <i class="far fa-calendar-alt" style="color: grey; font-size: 13px;"> Kamis, 25 Juli 2024</i>
                                </div>
                                <button style="background-color: blue; color: #fff; border-radius: 7px; padding: 10px; border: 0px;">Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
                <h2>TITLE HEADING</h2>
                <h5>Title description, Dec 7, 2017</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
        </div>
        <div class="row">
            
            

            <script src="https://kit.fontawesome.com/812e771e48.js" crossorigin="anonymous"></script>
        </div>
    </div>
</div>
<script type="text/javascript">
    const months = [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember"
    ];

    const weekdays = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];



    // Váriavel principal
    let date = new Date();

    // Função que retorna a data atual do calendário 
    function getCurrentDate(element, asString) {
        if (element) {
            if (asString) {
                return element.textContent = weekdays[date.getDay()] + ', ' + date.getDate() + " de " + months[date.getMonth()] + " de " + date.getFullYear();
            }
            return element.value = date.toISOString().substr(0, 10);
        }
        return date;
    }


    // Função principal que gera o calendário
    function generateCalendar() {

        // Pega um calendário e se já existir o remove
        const calendar = document.getElementById('calendar');
        if (calendar) {
            calendar.remove();
        }

        // Cria a tabela que será armazenada as datas
        const table = document.createElement("table");
        table.id = "calendar";

        // Cria os headers referentes aos dias da semana
        const trHeader = document.createElement('tr');
        trHeader.className = 'weekends';
        weekdays.map(week => {
            const th = document.createElement('th');
            const w = document.createTextNode(week.substring(0, 3));
            th.appendChild(w);
            trHeader.appendChild(th);
        });

        // Adiciona os headers na tabela
        table.appendChild(trHeader);

        //Pega o dia da semana do primeiro dia do mês
        const weekDay = new Date(
            date.getFullYear(),
            date.getMonth(),
            1
        ).getDay();

        //Pega o ultimo dia do mês
        const lastDay = new Date(
            date.getFullYear(),
            date.getMonth() + 1,
            0
        ).getDate();

        let tr = document.createElement("tr");
        let td = '';
        let empty = '';
        let btn = document.createElement('button');
        let week = 0;

        // Se o dia da semana do primeiro dia do mês for maior que 0(primeiro dia da semana);
        while (week < weekDay) {
            td = document.createElement("td");
            empty = document.createTextNode(' ');
            td.appendChild(empty);
            tr.appendChild(td);
            week++;
        }

        // Vai percorrer do 1º até o ultimo dia do mês
        for (let i = 1; i <= lastDay;) {
            // Enquanto o dia da semana for < 7, ele vai adicionar colunas na linha da semana
            while (week < 7) {
                td = document.createElement('td');
                let text = document.createTextNode(i);
                btn = document.createElement('button');
                btn.className = "btn-day";
                btn.addEventListener('click', function () { changeDate(this) });
                week++;



                // Controle para ele parar exatamente no ultimo dia
                if (i <= lastDay) {
                    i++;
                    btn.appendChild(text);
                    td.appendChild(btn)
                } else {
                    text = document.createTextNode(' ');
                    td.appendChild(text);
                }
                tr.appendChild(td);
            }
            // Adiciona a linha na tabela
            table.appendChild(tr);

            // Cria uma nova linha para ser usada
            tr = document.createElement("tr");

            // Reseta o contador de dias da semana
            week = 0;
        }
        // Adiciona a tabela a div que ela deve pertencer
        const content = document.getElementById('table');
        content.appendChild(table);
        changeActive();
        changeHeader(date);
        document.getElementById('date').textContent = date;
        getCurrentDate(document.getElementById("currentDate"), true);
        getCurrentDate(document.getElementById("date"), false);
    }

    // Altera a data atráves do formulário
    function setDate(form) {
        let newDate = new Date(form.date.value);
        date = new Date(newDate.getFullYear(), newDate.getMonth(), newDate.getDate() + 1);
        generateCalendar();
        return false;
    }

    // Método Muda o mês e o ano do topo do calendário
    function changeHeader(dateHeader) {
        const month = document.getElementById("month-header");
        if (month.childNodes[0]) {
            month.removeChild(month.childNodes[0]);
        }
        const headerMonth = document.createElement("h3");
        const textMonth = document.createTextNode(months[dateHeader.getMonth()].substring(0, 3) + " " + dateHeader.getFullYear());
        headerMonth.appendChild(textMonth);
        month.appendChild(headerMonth);
    }

    // Função para mudar a cor do botão do dia que está ativo
    function changeActive() {
        let btnList = document.querySelectorAll('button.active');
        btnList.forEach(btn => {
            btn.classList.remove('active');
        });
        btnList = document.getElementsByClassName('btn-day');
        for (let i = 0; i < btnList.length; i++) {
            const btn = btnList[i];
            if (btn.textContent === (date.getDate()).toString()) {
                btn.classList.add('active');
            }
        }
    }

    // Função que pega a data atual
    function resetDate() {
        date = new Date();
        generateCalendar();
    }

    // Muda a data pelo numero do botão clicado
    function changeDate(button) {
        let newDay = parseInt(button.textContent);
        date = new Date(date.getFullYear(), date.getMonth(), newDay);
        generateCalendar();
    }

    // Funções de avançar e retroceder mês e dia
    function nextMonth() {
        date = new Date(date.getFullYear(), date.getMonth() + 1, 1);
        generateCalendar(date);
    }

    function prevMonth() {
        date = new Date(date.getFullYear(), date.getMonth() - 1, 1);
        generateCalendar(date);
    }

    document.onload = generateCalendar(date);
</script>