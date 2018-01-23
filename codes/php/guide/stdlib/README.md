# Function Reference

<!-- program execution -->
## Run command
---

### [uname.php](uname.php)
```php
echo shell_exec('uname -a'); 
//=> Darwin Roadrunner.local 10.3.0 Darwin Kernel Version 10.3.0: Fri Feb 26 11:58:09 PST 2010; root:xnu-1504.3.12~1/RELEASE_I386 i386
```

```
$ php -S localhost:8000 -t .
$ php -S localhost:8000 uname.php
# service apache2 start
```

```
curl -I http://localhost:8000/?host=8.8.8.8
```

### [ping.php](ping.php)

```php
// get host
$host = $_GET['host'] ?? null;

// shell_exec -> string
$command = "ping -c1 {$host}";
$result = shell_exec($command);

// string -> json
// $json = json_encode($_GET);
$json = '';
if($host){
  $json = json_encode(['result' => $result]);
} else {
  $json = json_encode(['error' => 'host not found']);
}

// echo json
header('Content-type: application/json; charset=UTF-8');
echo $json;
```

[contrab.php](contrab.php)
```php
shell_exec("crontab <<EOF
00 09 * * 1-5 echo hello
EOF");

echo shell_exec("crontab -l");
```

## Run command as the system administrator (root)
---

### cat /etc/shadow by ssh

```php
echo shell_exec('sudo cat /etc/shadow');
```

[cat-shadow.php](cat-shadow.php)
```php
$connection = ssh2_connect('localhost', 22);
ssh2_auth_password($connection, 'ubuntu', 'ubuntu');

$stream = ssh2_exec($connection, 'sudo cat /etc/shadow');
stream_set_blocking($stream, true);
$stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
$output = stream_get_contents($stream_out);

echo "<pre>{$output}</pre>";
```

**root ssh**
```
// /etc/ssh/sshd_config
PermitRootLogin yes
```

```
# service ssh reload
````

## Change config file
---

### [display_error.php](display_error.php)
```php
// sed - stream editor
$display_error = 'sed -i -r -e 's/display_errors = Off/display_errors = On/g' /etc/php/7.1/apache2/php.ini'

$connection = ssh2_connect('localhost', 22);
ssh2_auth_password($connection, 'ubuntu', 'ubuntu');

ssh2_exec($connection, $display_error);
ssh2_exec($connection, 'service apache2 restart');
```

<!-- sed -i -r -e 's/short_open_tag = On/short_open_tag = Off/g' /etc/php5/fpm/php.ini
sed -i -r -e 's/error_reporting = E_ALL & ~E_DEPRECATED/error_reporting = E_ALL | E_STRICT/g' /etc/php5/fpm/php.ini -->

<!-- 
TODO
## [smb.php](smb.php)
reader/writer

cut, awk, file_get_content, file_put_content 
-->