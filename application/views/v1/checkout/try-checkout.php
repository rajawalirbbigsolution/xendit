<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Xendit Demo Store</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta
            name="description"
            content="Xendit demo store accepting payment with checkout integration"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="/css/try-checkout.css"
        />
        <link rel="icon" href="/images/logo.ico" />
    </head>

    <body>
        <main class="site">
            <!-- Header -->
            <div class="header header--blue">
                <div class="wrapper header__wrapper">
                    <div class="header__site">
                        <a class="header__link-site" href="/">Xendit Demo</a>
                    </div>
                    <div class="header__navigation">
                        <input
                            class="header__checkbox"
                            type="checkbox"
                            id="header__button-menu"
                        />
                        <label
                            for="header__button-menu"
                            class="header__button-menu"
                            ><span class="nav-icon"></span
                        ></label>
                        <ul class="header__links">
                            <li>
                                <a
                                    class="header__link-github"
                                    href="https://github.com/xendit/checkout-demo-codeigniter"
                                    target="_blank"
                                    >View Sample Code</a
                                >
                            </li>
                            <li>
                                <a
                                    class="header__link-docs"
                                    href="https://docs.xendit.co/xeninvoice/"
                                    target="_blank"
                                    >View Xendit Docs</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="body__icon-demo"></div>
                <h2 class="body__title">Thank you for trying our demo!</h2>
                <div class="body__message">
                    Ready to get started accepting payments<br />with Xendit?
                </div>
                <div class="body__links">
                    <a
                        class="button body__button"
                        href="https://dashboard.xendit.co/register/1"
                        >Register Now</a
                    >
                    <a
                        class="button body__button button--outline"
                        href="https://www.xendit.co/en/contact-sales/"
                        >Contact Sales</a
                    >
                </div>
                <div class="panel">
                    <h3 class="panel__title">Wasn’t that fun?</h3>
                    <div class="panel__description">
                        Try again with a different payment method.
                    </div>
                    <a class="panel__link" href="/">Retry Demo</a>
                </div>
            </div>
            <footer>
                <div class="footer__logo-xendit"></div>
            </footer>
        </main>
    </body>
</html>
