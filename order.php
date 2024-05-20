<?php
    session_start();
    if ($_SESSION['order']) {
        header('Location: reg.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Выложить обьявление</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Эх, прокачу!</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Эх, прокачу!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
        <header class = "header">
            <div class = "logo">
                <img src="img/2.jpg" alt="Logo" class = "logoimage">
            </div>
                </div>
                <nav class = "navigt">
                <ul>
                
                <li class="navigation"><a href="order.php">Заявка</a></li>
                <li class="navigation"><a href="myOrder.php">Мои заявки</a></li>
                    </ul>
                </nav>
                <nav class = "navig">
                <ul>
                
					<a class="navigation" href="vendor/logout.php">Выйти из аккаунта</a>
				
                     
                       
                    </ul>
                </nav>
            </div>
        </header>
 <!-- форма заявки -->
 <div class = "textH2">
 <h2>Оформление заказа</h2>
</div>
<form action="vendor/orderADD.php" method="POST">
                <label for = "mark">Выбор машины:</label>
        <input type="text" name="mark" placeholder="Введите свою марку автомобиля" required>
        <label>Категория товара</label>
                <label for = "date">Выбор даты:</label>
                <input type="date" id="date" name="date"  />
                <label for = "email">email:</label><input type = "text" name = "email" id = "email" required >
                <label for = "ydov">Серия и номер водительского удостоверения :</label><input type = "ydov" name = "ydov" id="ydov" required  >
                <button type = "submit" ">Оформить заявку</button>
            </form>
            <div class = "photo">
        <img src="img/7.png" alt="Logo" class = "images">
      
</div>
</body>
<footer class = "footer">
        <div class = "logo">
            <img src="img/1.jpg" alt="Logo" class = "logoimage">
        </div>
        <nav class = "navig">
            <span>Заявку можно оставлять 24/7</span>
            <br>
            <span></span>
        </nav>
        <div class="contacts">
            <p>Phone:89189037654</p>
            <p>Email:procat!@mail.ru</p>
        </div>
    </footer>
</html>
</body>
</html>
</body>
</html>