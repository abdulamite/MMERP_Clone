<?php
/*--------
mmerp_login2.php

Guthrie Hayward (gmh234)
Nathan Ortolan (ndo28)
Becky Williams (rjw125)
Abdul Shaikh (ats234)

Created by Guthrie and Rebecca on 11/5/16

Modified by: rjw  on: 11/20/16
Modified by: gmh  on: 12/03/16
modified by: ats on: 12/08/2016

  function:  db_login
  purpose: expects nothing, returns nothing and makes a form
        for username and password
-------*/

    function db_login_new()
    {
        ?>
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <img src="css_main/whale.jpg" alt="">
            </div>
            <div class="col-md-4">
              <form method="post" action="mmerp.php">
                <h2>MMERP</h2>
                <img src="css_main/whale-ico.png" class="whale-ico" alt="whale icon">
                <input id="username" type="text" class="validate" name="username" required="required" placeholder="Username" name="username">
                <input id="password" type="password" class="validate" required="required" placeholder="Password" name="password">
                </br>
                <button type="submit">Login</button>
              </form>
            </div>
          </div>
        </div>
        <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat');
        </style>
        <style>
        ::-webkit-input-placeholder {
          color: #0D47A1;
        }
        .container
        {
          height: 100%;
          margin: 0em;
          padding: 0em;
        }
        html,body,.container,.row,.col-md-8
        {
          height: 100%;
          font-family: 'Montserrat', sans-serif;
          font-weight: bold;
        }
        .col-md-4>form
        {
          margin: 0em;
          width: 80%;
          padding: 5%;
          float: right;
          margin-top: 10%;
        }
        .col-md-8>img
        {
          height: 100%;
          width: 100%;
        }
        .col-md-8,.col-md-4
        {
          padding: 0em;
          margin: 0em;

        }
        button
        {
          width: 100%;
          color:white;
          border: none;
          background-color: #0D47A1;
          padding: .5em;
        }
        input
        {
          width: 100%;
          color:#0D47A1;
          border: none;
          border-bottom: solid #0D47A1;
          margin-bottom: 2em;
          padding-left:.2em;
        }
        h2
        {
          text-align: center;
          font-weight: bold;
          color: #0D47A1;
          margin-bottom: 2rem;
        }
        .whale-ico
        {
          display: block;
          margin: auto;
          width: 40%;
          margin-bottom:3rem;
        }
        </style>

        <?php
    }
    $_SESSION['next_screen'] = 'validate_user';
?>
