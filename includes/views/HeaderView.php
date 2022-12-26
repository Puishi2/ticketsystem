<?php

class HeaderView
{

    public function createLogoutHeader() {
        ?>
        <nav class="navbar" role="navigation" aria-label="main navigation">

            <div id="navbarBasicExample" class="navbar-menu">

                <div class="navbar-start">
                    <a class="navbar-item" href="index.php">Startseite</a>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary" href="register.php"><strong>Registrieren</strong></a>
                            <a class="button is-light" href="login.php">Anmelden</a>
                        </div>
                    </div>
                </div>

            </div>
        </nav>
        <?php
    }

    public function createLoginHeader() {
        ?>
        <nav class="navbar" role="navigation" aria-label="main navigation">

            <div id="navbarBasicExample" class="navbar-menu">

                <div class="navbar-start">
                    <a class="navbar-item" href="index.php">Startseite</a>
                    <a class="navbar-item" href="create_ticket.php">Ticket erstellen</a>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary" href="register.php"><strong>Registrieren</strong></a>
                            <a class="button is-light" href="login.php">Anmelden</a>
                        </div>
                    </div>
                </div>

            </div>
        </nav>
        <?php
    }

}