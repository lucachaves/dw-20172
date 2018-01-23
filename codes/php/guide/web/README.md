# PHP - Web

## HTTP Methods
---
### $_GET
[guide/web/get/hello/index.html](guide/web/get/hello/index.html)
```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="hello.php">
    <input type="text" name="name">
    <input type="submit" value="Olá...">
  </form>
</body>
</html>
```

[guide/web/get/hello/hello.php](guide/web/get/hello/hello.php)
```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <div class="">
    <?php
      $name = $_GET['name'] ?? '';
      echo "Olá $name";
    ?>
  </div>
</body>
</html>
```

[guide/web/get/hello/hello.php?name=Luiz](guide/web/get/hello/hello.php?name=Luiz)

### $_POST

[guide/web/post/hello/index.html](guide/web/post/hello/index.html)
```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="hello.php" method="post">
    <input type="text" name="name">
    <input type="submit" value="Olá...">
  </form>
</body>
</html>
```

[guide/web/post/hello/hello.php](guide/web/post/hello/hello.php)
```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <div class="">
    <?php
      $name = $_POST['name'] ?? '';
      echo "Olá $name";
    ?>
  </div>
</body>
</html>
```

[guide/web/post/hello-compact/index.php](guide/web/post/hello-compact/index.php)
```php
<?php
  $name = $_POST['name'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="name">
    <input type="submit" value="Olá...">
  </form>
  <?php if($name){ ?>
    <div>
      <?php echo "Olá $name"; ?>
    </div>
  <?php } ?>
</body>
</html>
```

<!-- 
TODO
### $_FILES 
upload
-->

## Cookie
---
### $_COOKIE

[Cookie](http://php.net/manual/en/features.cookies.php): name, value, expire, path, domain, secure, httponly
[setcookie()](http://php.net/manual/en/function.setcookie.php)

[guide/web/cookie/counter-cookie.php](guide/web/cookie/counter-cookie.php)
```php
<?php
	$times = $_COOKIE['count'] ?? 0;

	$times++;

	if(isset($_GET['zerar'])){
		$times = 0;
		setcookie('count', false);
	}else{
		setcookie('count', $times, time()+60*60*24);
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>A quantidade de vezes que vc acessou esta página é <?php echo $times ?></p>
	<a href="counter-cookie.php?zerar=true">zerar</a>
	<a href="counter-cookie.php">+1</a>
</body>
</html>
```

## Session
---
### $_SESSION

[guide/web/session/counter-session.php](guide/web/session/counter-session.php)
```php
<?php
	session_start();

	$times = $_SESSION['count'] ?? 0;

	$times++;

	if(isset($_GET['zerar'])){
		$times = 0;
		$_SESSION['count'] = 0;
	}else{
		$_SESSION['count'] = $times;
	}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>A quantidade de vezes que vc acessou esta página é <?php echo $times ?></p>
	<a href="counter-session.php?zerar=true">zerar</a>
	<a href="counter-session.php">+1</a>
</body>
</html>
```

### Auth

- [guide/web/session/auth/login.html](guide/web/session/auth/login.html)
- [guide/web/session/auth/home.php](guide/web/session/auth/home.php)

## Layout
---

[guide/web/layout/index.php](guide/web/layout/index.php)
```php
<?php
	$page = $_GET['page'] ?? "page1";
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<nav><a href="index.php?page=page1">pagina 1</a><a href="index.php?page=page2">pagina 2</a></nav>
	<div>
		<?php 
			include($page.".php"); 
		?>
	</div>
</body>
</html>
```

## API
---

### Hello World

[guide/web/api/hello/index.hello](guide/web/api/hello/index.hello)
```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form id="hello-form">
    <input type="text" name="name">
    <input type="submit" value="Olá...">
  </form>
  <div id="hello"></div>
  <script>
    const form = new FormData(document.querySelector('#hello-form'));
    const helloField = document.querySelector('div#hello');

    helloButton.addEventListener('click', helloWorld);

    function helloWorld(event){
      let name = nameField.value;
      let url = `hello.php?name=${name}`;

      fetch(url, {
        method: "POST",
        body: form
      })
      .then(function(res) {return res.text()})
      .then(function(responseText) {
        helloField.innerHTML = responseText;
      })

      event.preventDefault();
    }

  </script>
</body>
</html>
```

[guide/web/api/hello/hello.php](guide/web/api/hello/hello.php)
```php
<?php
  $name = $_GET['name'] ?? '';
  echo "Olá $name";
?>
```

[guide/web/api/hello/hello.php?name=Luiz](guide/web/api/hello/hello.php?name=Luiz)

## Ping API

- [guide/web/api/ping-api/public/index.html](guide/web/api/ping-api/public/index.html)
- [guide/web/api/ping-api/v1/ping.php?host=8.8.8.8](guide/web/api/ping-api/v1/ping.php?host=8.8.8.8)
- [guide/web/api/ping-api/v1/ping.php?host=8.8.8.8&count=2](guide/web/api/ping-api/v1/ping.php?host=8.8.8.8&count=2)