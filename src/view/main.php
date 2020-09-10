<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Сепаратор текста</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel = "stylesheet" type = "text/css" href = "/src/public/css/style.css" />
</head>
  <body class="text-center">

    <form class="form-signin" action="/" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Сепаратор текста</h1>
      <h5><i>'<?= $text ?? 'Здесь будет Ваш текст' ?>'</i></h5>
      <label for="inputEmail" class="sr-only">Текст</label>
      <input type="text" id="text" name="text" class="form-control" placeholder="Введите текст" required autofocus>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>

  </body>
</html>
