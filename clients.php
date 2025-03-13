<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-clients.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>Клиентам</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.html"><img src="img/logo.svg" alt=""></a>
        </div>
        <nav>
              <ul>
                <li><a href="about.html">О компании</a></li>
                <li><a style="border-bottom: #FF5B02 2px solid;" href="clients.php">Клиентам</a></li>
                <li><a href="news.html">Пресс центр</a></li>
                <li><a href="shareholders.html">Акционерам и инвесторам</a></li>
                <li><a href="people.html">Наши люди</a></li>
                <li><a href="contacts.html">Контакты</a></li>
              </ul>  
            </nav>
            <!-- выпадающее меню -->
        <div class="dropdown">
            <button class="dropbtn"><img src="img/material-symbols_menu.svg" alt=""></button>
            <div class="dropdown-content">
                <a href="about.html">О компании</a>
                <a href="clients.php">Клиентам</a>
                <a href="news.html">Пресс центр</a>
                <a href="shareholders.html">Акционерам и инвесторам</a>
                <a href="people.html">Наши люди</a>
                <a href="contacts.html">Контакты</a>
            </div>
        </div>
    </header>

    <div class="clients">
        <div class="clients-text">
            <h1>Уважаемые клиенты!</h1>
            <p id="p-one">Online-консультации по всем услугам компании «Россети Урал» вы можете получить</p>
            <div class="text-info">
                <div class="info-num">
                    <p>по телефону</p>
                    <h1>8-800-220-0-220</h1>
                </div>
                <div class="info-num">
                    <p>в нашем сообществе в </p>
                    <h1>VK</h1>
                </div>
            </div>

            <p id="p-two">Ниже вы можете оставить обращение по основным или дополнительным услугам компании, сообщить об бездоговорном (безучетном) потреблении электроэнергии, а также оставить отзыв о нашей работе. На указанную в обращении электронную почту поступит уведомление о регистрации, это означает что обращение перешло на этап рассмотрения.</p>
            <p id="p-three">Ответы на обращения в срок до 30 календарных дней направляются на электронный адрес, указанный в обращении.</p>
            <a href="#zaiavka"><img id="arrow" src="img-clients/arrownd.png" alt=""></a>
        </div>
        <div class="clients-img">
            <img src="img-clients/image (1).png" alt="">
        </div>
    </div>
    
    <div class="zaiavka">
        <p>Клиентам</p>
        <div class="forma" id="zaiavka">
            <form action="php/send-form-mail.php" method="post">
                <div class="info">
                    <div class="data">
                        <p>Личные данные</p>
                        <input name="name" type="text" placeholder="Фамилия, Имя, Отчество*" maxlenght="50">
                        <select name="category" id="category" name="category">
                            <option disabled selected>Категория потребителя*</option>
                            <option value="1">Физическое лицо</option>
                            <option value="2">Юридическое лицо</option>
                        </select>
                        <input name="organization" type="text" placeholder="Наименование организации" maxlenght="100">
                    </div>
                    <div class="data">
                        <p>Адрес</p>
                        <input name="place" type="text" placeholder="Область, населённый пункт*">
                        <input name="email" type="email" placeholder="Email">
                        <input name="number" type="text" placeholder="Контактный телефон" maxlenght="11">
                    </div>
                </div>
                <textarea name="message" id="" cols="30" rows="10" placeholder="Текст обращения*"></textarea>
                <button onclick="alert('Вы отправили заявку, мы рассмотрим её в течение 5 рабочих дней')">Отправить</button>
            </form>
        </div>
        
    </div>

    <footer>
        <div class="footer-nav">
            <ul>
                <li><a href="about.html">О компании</a></li>
                <li><a href="clients.php">Клиентам</a></li>
                <li><a href="news.html">Пресс центр</a></li>
                <li><a href="shareholders.html">Акционерам и инвесторам</a></li>
                <li><a href="people.html">Наши люди</a></li>
                <li><a href="contacts.html">Контакты</a></li>
              </ul>   
        </div>

        <p>© 2014-2024 ПАО «Россети Урал» 620026, г. Екатеринбург, ул. Мамина-Сибиряка, 140</p>
    </footer>
</body>
</html>