<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      background-image: url("https://foto.data.kemdikbud.go.id/getImage/20328986/9.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      /* background-color: blue; */
      min-height: 100vh;
    }

    .container {
      width: 400px;
      display: flex;
      max-width: 850px;
      background: #fff;
      border-radius: 35px;
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
      /* background-color: Olive; */
    }

    .login {
      text-align: center;
      width: 500px;
    }

    form {
      width: 275px;
      margin: 25px auto;
    }

    h1 {
      margin: 20px;
      text-align: center;
      font-weight: bolder;
      text-transform: uppercase;
    }

    hr {
      border-top: 5px solid #ffa12c;
    }

    p {
      text-align: center;
      margin: 10px;
    }

    .right img {
      width: 350px;
      height: 100%;
      border-top-right-radius: 15px;
      border-bottom-right-radius: 15px;
    }

    form label {
      display: block;
      font-size: 16px;
      font-weight: 600;
      padding: 5px;
    }

    input {
      width: 100%;
      margin: 2px;
      border: none;
      outline: none;
      padding: 8px;
      border-radius: 15px;
      border: 1px solid gray;
    }

    button {
      border: none;
      outline: none;
      padding: 8px;
      width: 250px;
      color: white;
      font-size: 16px;
      cursor: pointer;
      margin-top: 20px;
      border-radius: 15px;
      background: #ffa12c;
    }

    button:hover {
      background: rgba(214, 86, 64, 1);
    }

    @media (max-width: 880px) {
      .container {
        width: 100%;
        max-width: 750px;
        margin-left: 20px;
        margin-right: 20px;
      }

      form {
        width: 300px;
        margin: 20px auto;
      }

      .login {
        width: 900px;
        padding: 20px;
      }

      button {
        width: 100%;
      }

      .right img {
        width: 100%;
        height: 100%;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="login">
      <form action="<?php echo base_url() ?>Auth/fungsi_login" method="post">
        <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" height="140PX;" width="185px">
        <h1>Login</h1>
        <hr>
        <p>Silahkan Isi Form Sesuai Reistrasi Anda</p>
        <label for="">Email</label>
        <input type="text" name="email" placeholder="Email">
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="submit">Login</button>
        <!-- <p>
          Jika Belum Registrasi, Silakan Klik <?php echo anchor(site_url() . 'auth/register', 'Register'); ?>
        </p> -->
      </form>


</body>
</html>
