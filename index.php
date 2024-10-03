<?php 
include("includes/config.php");
// include("php/queries.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home - <?=$name?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="dist/img/M.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <!-- <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
 -->
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <!-- <link href="assets/css/main.css" rel="stylesheet"> -->
  <style type="text/css">
   
:root {
  --default-font: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --heading-font: "Montserrat", sans-serif;
  --nav-font: "Lato", sans-serif;
}

/* Global Colors */
:root {
  --background-color: #ffffff;
  --background-color-rgb: 255, 255, 255;
  --default-color: #212529;
  --default-color-rgb: 33, 37, 41;
  --primary-color: #e84545;
  --primary-color-rgb: 232, 69, 69;
  --secondary-color: #32353a;
  --secondary-color-rgb: 50, 53, 58;
  --contrast-color: #ffffff;
  --contrast-color-rgb: 255, 255, 255;
}

/* Nav Menu Colors */
:root {
  --nav-color: #3a3939;
  --nav-hover-color: #e84545;
  --nav-dropdown-color: #3a3939;
  --nav-dropdown-hover-color: #e84545;
  --nav-dropdown-background-color: #ffffff;
  --nav-mobile-background-color: #ffffff;
}

/* Smooth scroll */
:root {
  scroll-behavior: smooth;
}

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  color: var(--default-color);
  background-color: var(--background-color);
  font-family: var(--default-font);
}

a {
  color: var(--primary-color);
  text-decoration: none;
  transition: 0.3s;
}

a:hover {
  color: rgba(var(--primary-color-rgb), 0.7);
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  color: var(--secondary-color);
  font-family: var(--heading-font);
}

section {
  color: var(--default-color);
  background-color: var(--background-color);
  padding: 60px 0;
  overflow: clip;
}

/*--------------------------------------------------------------
# Section Title
--------------------------------------------------------------*/
.section-title {
  text-align: center;
  padding-bottom: 60px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: 700;
  position: relative;
}

.section-title h2:before,
.section-title h2:after {
  content: "";
  width: 50px;
  height: 2px;
  background: <?=$theme?>;
  display: inline-block;
}

.section-title h2:before {
  margin: 0 15px 10px 0;
}

.section-title h2:after {
  margin: 0 0 10px 15px;
}

.section-title p {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Page Title & Breadcrumbs
--------------------------------------------------------------*/
.page-title {
  color: var(--default-color);
  background-color: var(--background-color);
}

.page-title .heading {
  padding: 80px 0;
  border-top: 1px solid rgba(var(--default-color-rgb), 0.1);
}

.page-title .heading h1 {
  font-size: 38px;
  font-weight: 700;
  color: var(--secondary-color);
}

.page-title nav {
  background-color: rgba(var(--default-color-rgb), 0.05);
  padding: 20px 0;
}

.page-title nav ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  font-size: 16px;
  font-weight: 600;
}

.page-title nav ol li+li {
  padding-left: 10px;
}

.page-title nav ol li+li::before {
  content: "/";
  display: inline-block;
  padding-right: 10px;
  color: rgba(var(--default-color-rgb), 0.3);
}

/*--------------------------------------------------------------
# Global Header
--------------------------------------------------------------*/
.header {
  --background-color: #ffffff;
  color: var(--default-color);
  background-color: var(--background-color);
  padding: 15px 0;
  transition: all 0.5s;
  z-index: 997;
}

.header .logo img {
  max-height: 40px;
  margin-right: 6px;
}

.header .logo h1 {
  font-size: 24px;
  margin: 0;
  font-weight: 600;
  color: var(--secondary-color);
}

.header .logo span {
  color: var(--primary-color);
  font-size: 24px;
  font-weight: 600;
  padding-left: 3px;
}

.header .btn-getstarted,
.header .btn-getstarted:focus {
  color: var(--contrast-color);
  background: <?=$theme?>;
  font-size: 14px;
  padding: 8px 26px;
  margin: 0;
  border-radius: 4px;
  transition: 0.3s;
}

.header .btn-getstarted:hover,
.header .btn-getstarted:focus:hover {
  color: var(--contrast-color);
  background: rgba(var(--primary-color-rgb), 0.85);
}

@media (max-width: 1200px) {
  .header .logo {
    order: 1;
  }

  .header .btn-getstarted {
    order: 2;
    margin: 0 15px 0 0;
    padding: 6px 20px;
  }

  .header .navmenu {
    order: 3;
  }
}

/* Global Header on page scroll
------------------------------*/
.scrolled .header {
  --background-color: #ffffff;
  --secondary-color: #444444;
  --nav-color: #444444;
  --nav-hover-color: #e84545;
  box-shadow: 0 0 30px 10px rgba(0, 0, 0, 0.1);
}

/* Global Scroll Margin Top
------------------------------*/
section {
  scroll-margin-top: 90px;
}

@media (max-width: 1199px) {
  section {
    scroll-margin-top: 66px;
  }
}

/* Home Page Custom Header
------------------------------*/
.index-page .header {
  --background-color: rgba(255, 255, 255, 0);
  --secondary-color: #ffffff;
  --nav-color: rgba(255, 255, 255, 0.515);
  --nav-hover-color: #ffffff;
}

/* Home Page Custom Header on page scroll
------------------------------*/
.index-page.scrolled .header {
  --background-color: #ffffff;
  --secondary-color: #444444;
  --nav-color: #444444;
  --nav-hover-color: #d83535;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
@media (min-width: 1200px) {
  .navmenu {
    padding: 0;
  }

  .navmenu ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }

  .navmenu li {
    position: relative;
  }

  .navmenu a,
  .navmenu a:focus {
    color: var(--nav-color);
    padding: 18px 15px;
    font-size: 16px;
    font-family: var(--nav-font);
    font-weight: 400;
    display: flex;
    align-items: center;
    justify-content: space-between;
    white-space: nowrap;
    transition: 0.3s;
  }

  .navmenu a i,
  .navmenu a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
    transition: 0.3s;
  }

  .navmenu li:last-child a {
    padding-right: 0;
  }

  .navmenu li:hover>a,
  .navmenu .active,
  .navmenu .active:focus {
    color: var(--nav-hover-color);
  }

  .navmenu .dropdown ul {
    margin: 0;
    padding: 10px 0;
    background: var(--nav-dropdown-background-color);
    display: block;
    position: absolute;
    visibility: hidden;
    left: 14px;
    top: 130%;
    opacity: 0;
    transition: 0.3s;
    border-radius: 4px;
    z-index: 99;
  }

  .navmenu .dropdown ul li {
    min-width: 200px;
  }

  .navmenu .dropdown ul a {
    padding: 10px 20px;
    font-size: 15px;
    text-transform: none;
    color: var(--nav-dropdown-color);
  }

  .navmenu .dropdown ul a i {
    font-size: 12px;
  }

  .navmenu .dropdown ul a:hover,
  .navmenu .dropdown ul .active:hover,
  .navmenu .dropdown ul li:hover>a {
    color: var(--nav-dropdown-hover-color);
  }

  .navmenu .dropdown:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
  }

  .navmenu .dropdown .dropdown ul {
    top: 0;
    left: -90%;
    visibility: hidden;
  }

  .navmenu .dropdown .dropdown:hover>ul {
    opacity: 1;
    top: 0;
    left: -100%;
    visibility: visible;
  }

  .navmenu .megamenu {
    position: static;
  }

  .navmenu .megamenu ul {
    margin: 0;
    padding: 10px;
    background: var(--nav-dropdown-background-color);
    box-shadow: 0px 0px 20px rgba(var(--default-color-rgb), 0.1);
    display: block;
    position: absolute;
    top: 130%;
    left: 0;
    right: 0;
    visibility: hidden;
    opacity: 0;
    display: flex;
    transition: 0.3s;
    border-radius: 4px;
    z-index: 99;
  }

  .navmenu .megamenu ul li {
    flex: 1;
  }

  .navmenu .megamenu ul li a,
  .navmenu .megamenu ul li:hover>a {
    padding: 10px 20px;
    font-size: 15px;
    color: var(--nav-dropdown-color);
  }

  .navmenu .megamenu ul li a:hover,
  .navmenu .megamenu ul li .active,
  .navmenu .megamenu ul li .active:hover {
    color: var(--nav-dropdown-hover-color);
  }

  .navmenu .megamenu:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
  }

  .navmenu .dd-box-shadow {
    box-shadow: 0px 0px 30px rgba(var(--default-color-rgb), 0.15);
  }
}

/* Mobile Navigation */
@media (max-width: 1199px) {
  .mobile-nav-toggle {
    color: var(--nav-color);
    font-size: 28px;
    line-height: 0;
    margin-right: 10px;
    cursor: pointer;
    transition: color 0.3s;
  }

  .navmenu {
    padding: 0;
    z-index: 9997;
  }

  .navmenu ul {
    display: none;
    position: absolute;
    inset: 60px 20px 20px 20px;
    padding: 10px 0;
    margin: 0;
    border-radius: 6px;
    background-color: var(--nav-mobile-background-color);
    overflow-y: auto;
    transition: 0.3s;
    z-index: 9998;
    box-shadow: 0px 0px 30px rgba(var(--default-color-rgb), 0.1);
  }

  .navmenu a,
  .navmenu a:focus {
    color: var(--nav-dropdown-color);
    padding: 10px 20px;
    font-family: var(--nav-font);
    font-size: 17px;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: space-between;
    white-space: nowrap;
    transition: 0.3s;
  }

  .navmenu a i,
  .navmenu a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: 0.3s;
    background-color: rgba(var(--primary-color-rgb), 0.1);
  }

  .navmenu a i:hover,
  .navmenu a:focus i:hover {
    background-color: var(--primary-color);
    color: var(--contrast-color);
  }

  .navmenu a:hover,
  .navmenu .active,
  .navmenu .active:focus {
    color: var(--nav-dropdown-hover-color);
  }

  .navmenu .active i,
  .navmenu .active:focus i {
    background-color: var(--primary-color);
    color: var(--contrast-color);
    transform: rotate(180deg);
  }

  .navmenu .dropdown ul,
  .navmenu .megamenu ul {
    position: static;
    display: none;
    z-index: 99;
    padding: 10px 0;
    margin: 10px 20px;
    background-color: var(--nav-dropdown-background-color);
    transition: all 0.5s ease-in-out;
  }

  .navmenu .dropdown ul ul,
  .navmenu .megamenu ul ul {
    background-color: rgba(33, 37, 41, 0.1);
  }

  .navmenu .dropdown>.dropdown-active,
  .navmenu .megamenu>.dropdown-active {
    display: block;
    background-color: rgba(33, 37, 41, 0.03);
  }

  .mobile-nav-active {
    overflow: hidden;
  }

  .mobile-nav-active .mobile-nav-toggle {
    color: #fff;
    position: absolute;
    font-size: 32px;
    top: 15px;
    right: 15px;
    margin-right: 0;
    z-index: 9999;
  }

  .mobile-nav-active .navmenu {
    position: fixed;
    overflow: hidden;
    inset: 0;
    background: rgba(33, 37, 41, 0.8);
    transition: 0.3s;
  }

  .mobile-nav-active .navmenu>ul {
    display: block;
  }
}

/*--------------------------------------------------------------
# Scroll Top Button
--------------------------------------------------------------*/
.scroll-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 99999;
  background-color: var(--primary-color);
  width: 40px;
  height: 40px;
  border-radius: 4px;
  transition: all 0.4s;
}

.scroll-top i {
  font-size: 24px;
  color: #ffffff;
  line-height: 0;
}

.scroll-top:hover {
  background-color: rgba(var(--primary-color-rgb), 0.8);
  color: #ffffff;
}

.scroll-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
#preloader {
  position: fixed;
  inset: 0;
  z-index: 9999;
  overflow: hidden;
  background-color: var(--background-color);
  transition: all 0.6s ease-out;
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

#preloader div {
  width: 13px;
  height: 13px;
  background-color: var(--primary-color);
  border-radius: 50%;
  animation-timing-function: cubic-bezier(0, 1, 1, 0);
  position: absolute;
  left: 50%;
}

#preloader div:nth-child(1) {
  left: calc(50% + 8px);
  animation: animate-preloader-1 0.6s infinite;
}

#preloader div:nth-child(2) {
  left: calc(50% + 8px);
  animation: animate-preloader-2 0.6s infinite;
}

#preloader div:nth-child(3) {
  left: calc(50% + 32px);
  animation: animate-preloader-2 0.6s infinite;
}

#preloader div:nth-child(4) {
  left: calc(50% + 56px);
  animation: animate-preloader-3 0.6s infinite;
}

@keyframes animate-preloader-1 {
  0% {
    transform: scale(0);
  }

  100% {
    transform: scale(1);
  }
}

@keyframes animate-preloader-3 {
  0% {
    transform: scale(1);
  }

  100% {
    transform: scale(0);
  }
}

@keyframes animate-preloader-2 {
  0% {
    transform: translate(0, 0);
  }

  100% {
    transform: translate(24px, 0);
  }
}

/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
.footer {
  --background-color: #f4f4f4;
  color: var(--default-color);
  background-color: var(--background-color);
  font-size: 14px;
  padding-bottom: 50px;
}

.footer .footer-top {
  padding-top: 50px;
}

.footer .footer-about .logo {
  line-height: 0;
  margin-bottom: 25px;
}

.footer .footer-about .logo img {
  max-height: 40px;
  margin-right: 6px;
}

.footer .footer-about .logo span {
  color: var(--secondary-color);
  font-size: 30px;
  font-weight: 700;
  letter-spacing: 1px;
  font-family: var(--heading-font);
}

.footer .footer-about p {
  font-size: 14px;
  font-family: var(--heading-font);
}

.footer .social-links a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 1px solid rgba(var(--default-color-rgb), 0.5);
  font-size: 16px;
  color: rgba(var(--default-color-rgb), 0.5);
  margin-right: 10px;
  transition: 0.3s;
}

.footer .social-links a:hover {
  color: var(--primary-color);
  border-color: var(--primary-color);
}

.footer h4 {
  color: var(--secondary-color);
  font-size: 16px;
  font-weight: bold;
  position: relative;
  padding-bottom: 12px;
}

.footer .footer-links {
  margin-bottom: 30px;
}

.footer .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer .footer-links ul i {
  padding-right: 2px;
  font-size: 12px;
  line-height: 0;
}

.footer .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

.footer .footer-links ul li:first-child {
  padding-top: 0;
}

.footer .footer-links ul a {
  color: rgba(var(--default-color-rgb), 0.8);
  display: inline-block;
  line-height: 1;
}

.footer .footer-links ul a:hover {
  color: var(--primary-color);
}

.footer .footer-contact p {
  margin-bottom: 5px;
}

.footer .copyright {
  padding-top: 25px;
  padding-bottom: 25px;
  background-color: rgba(var(--default-color-rgb), 0.05);
}

.footer .copyright p {
  margin-bottom: 0;
}

.footer .credits {
  margin-top: 6px;
  font-size: 13px;
}

/*--------------------------------------------------------------
# Home Page
--------------------------------------------------------------*/
/* Hero Section - Home Page
------------------------------*/
.hero {
  --default-color: #ffffff;
  --default-color-rgb: 255, 255, 255;
  --background-color: #000000;
  --background-color-rgb: 0, 0, 0;
  width: 100%;
  min-height: 100vh;
  position: relative;
  padding: 160px 0 80px 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero img {
  position: absolute;
  inset: 0;
  display: block;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
  z-index: 1;
}

.hero:before {
  content: "";
  background: rgba(var(--background-color-rgb), 0.5);
  position: absolute;
  inset: 0;
  z-index: 2;
}

.hero .container {
  position: relative;
  z-index: 3;
}

.hero h2 {
  color: var(--contrast-color);
  margin: 0;
  font-size: 44px;
  font-weight: 700;
}

.hero p {
  color: rgba(var(--default-color-rgb), 0.8);
  margin: 5px 0 0 0;
  font-size: 20px;
}

.hero .sign-up-form {
  margin-top: 20px;
  padding: 10px;
  border-radius: 7px;
  background: #fff;
  box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.1);
}

.hero .sign-up-form .form-control {
  border: none;
}

.hero .sign-up-form .form-control:active,
.hero .sign-up-form .form-control:focus {
  outline: none;
  box-shadow: none;
}

.chk-result a {
  box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.2);
  background-color: <?=$theme?>!important;
  border-color: var(--primary-color);
  padding: 8px 20px 10px 20px;
  border-radius: 7px;
  color: var(--contrast-color);
}

.hero .sign-up-form input[type=submit] {
  box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.2);
  background-color: <?=$theme?>;
  border-color: var(--primary-color);
  padding: 8px 20px 10px 20px;
  border-radius: 7px;
  color: var(--contrast-color);
}

.hero .sign-up-form input[type=submit]:hover {
  background-color: rgba(var(--primary-color-rgb), 0.9);
}

@media (max-width: 768px) {
  .hero h2 {
    font-size: 32px;
  }

  .hero p {
    font-size: 18px;
  }
}

/* Clients Section - Home Page
------------------------------*/
.clients {
  padding: 10px 0;
}

.clients .client-logo {
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

.clients .client-logo img {
  padding: 40px;
  max-width: 80%;
  transition: 0.3s;
  opacity: 0.5;
  filter: grayscale(100);
}

.clients .client-logo img:hover {
  filter: none;
  opacity: 1;
}

@media (max-width: 640px) {
  .clients .client-logo img {
    padding: 20px;
  }
}

/* About Section - Home Page
------------------------------*/
.about {
  --background-color: #f4f4f4;
}

.about .content h3 {
  font-size: 16px;
  font-weight: 500;
  line-height: 19px;
  padding: 10px 20px;
  background: rgba(var(--primary-color-rgb), 0.05);
  color: var(--primary-color);
  border-radius: 7px;
  display: inline-block;
}

.about .content h2 {
  font-weight: 700;
}

.about .content p:last-child {
  margin-bottom: 0;
}

.about .content .read-more {
  background: <?=$theme?>;
  color: var(--contrast-color);
  font-family: var(--heading-font);
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  padding: 12px 24px;
  border-radius: 5px;
  transition: 0.3s;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}

.about .content .read-more i {
  font-size: 18px;
  margin-left: 5px;
  line-height: 0;
  transition: 0.3s;
}

.about .content .read-more:hover {
  background: rgba(var(--primary-color-rgb), 0.8);
  padding-right: 19px;
}

.about .content .read-more:hover i {
  margin-left: 10px;
}

.about .icon-box {
  padding: 50px 40px;
  box-shadow: 0px 10px 50px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  transition: all 0.3s ease-out 0s;
  background-color: #fff;
}

.about .icon-box i {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 24px;
  font-size: 32px;
  line-height: 0;
  transition: all 0.4s ease-out 0s;
  background-color: rgba(var(--primary-color-rgb), 0.05);
  color: var(--primary-color);
}

.about .icon-box h3 {
  margin-bottom: 10px;
  font-size: 24px;
  font-weight: 700;
}

.about .icon-box p {
  margin-bottom: 0;
}

.about .icon-box:hover i {
  background-color: var(--primary-color);
  color: var(--contrast-color);
}

.about .icon-boxes .col-md-6:nth-child(2) .icon-box,
.about .icon-boxes .col-md-6:nth-child(4) .icon-box {
  margin-top: -40px;
}

@media (max-width: 768px) {

  .about .icon-boxes .col-md-6:nth-child(2) .icon-box,
  .about .icon-boxes .col-md-6:nth-child(4) .icon-box {
    margin-top: 0;
  }
}

/* Stats Section - Home Page
------------------------------*/
.stats {
  --default-color: #ffffff;
  --default-color-rgb: 255, 255, 255;
  --background-color: #000000;
  --background-color-rgb: 0, 0, 0;
  position: relative;
  padding: 120px 0;
}

.stats img {
  position: absolute;
  inset: 0;
  display: block;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
  z-index: 1;
}

.stats:before {
  content: "";
  background: rgba(var(--background-color-rgb), 0.6);
  position: absolute;
  inset: 0;
  z-index: 2;
}

.stats .container {
  position: relative;
  z-index: 3;
}

.stats .stats-item {
  padding: 30px;
  width: 100%;
}

.stats .stats-item span {
  font-size: 48px;
  display: block;
  color: var(--default-color);
  font-weight: 700;
}

.stats .stats-item p {
  padding: 0;
  margin: 0;
  font-family: var(--heading-font);
  font-size: 16px;
  font-weight: 700;
  color: rgba(var(--default-color-rgb), 0.6);
}

/* Services Section - Home Page
------------------------------*/
.services .service-item {
  position: relative;
  padding-top: 40px;
}

.services .service-item:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 2px;
  background: rgba(var(--default-color-rgb), 0.1);
}

.services .service-item::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 30px;
  height: 2px;
  background: <?=$theme?>;
  border-right: 5px solid var(--background-color);
}

.services .service-item .icon {
  width: 48px;
  height: 48px;
  position: relative;
  margin-right: 50px;
  line-height: 0;
}

.services .service-item .icon i {
  color: rgba(var(--default-color-rgb), 0.7);
  font-size: 56px;
  transition: ease-in-out 0.3s;
  z-index: 2;
  position: relative;
}

.services .service-item .icon:before {
  position: absolute;
  content: "";
  height: 30px;
  width: 30px;
  background: rgba(var(--primary-color-rgb), 0.3);
  border-radius: 50px;
  z-index: 1;
  bottom: -15px;
  right: -15px;
  transition: 0.3s;
}

.services .service-item .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

.services .service-item .title a {
  color: var(--secondary-color);
}

.services .service-item .title a:hover {
  color: var(--primary-color);
}

.services .service-item .description {
  line-height: 24px;
  font-size: 14px;
}

/* Features Section - Home Page
------------------------------*/
.features .features-item {
  color: rgba(var(--default-color-rgb), 0.8);
}

.features .features-item+.features-item {
  margin-top: 100px;
}

@media (max-width: 768px) {
  .features .features-item+.features-item {
    margin-top: 40px;
  }
}

.features .features-item h3 {
  font-weight: 700;
  font-size: 26px;
}

.features .features-item .btn-get-started {
  background-color: <?=$theme?>;
  color: var(--contrast-color);
  padding: 8px 30px 10px 30px;
  border-radius: 4px;
}

.features .features-item .btn-get-started:hover {
  background-color: rgba(var(--primary-color-rgb), 0.9);
}

.features .features-item ul {
  list-style: none;
  padding: 0;
}

.features .features-item ul li {
  padding-bottom: 10px;
  display: flex;
  align-items: flex-start;
}

.features .features-item ul li:last-child {
  padding-bottom: 0;
}

.features .features-item ul i {
  font-size: 20px;
  padding-right: 4px;
  color: var(--primary-color);
}

.features .features-item img {
  border: 6px solid var(--background-color);
  box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.1);
}

.features .features-item .features-img-bg {
  position: relative;
  min-height: 500px;
}

@media (max-width: 640px) {
  .features .features-item .features-img-bg {
    min-height: 300px;
  }
}

.features .features-item .features-img-bg img {
  position: absolute;
  inset: 0;
  display: block;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
}

.features .features-item .image-stack {
  display: grid;
  position: relative;
  grid-template-columns: repeat(12, 1fr);
}

.features .features-item .image-stack .stack-back {
  grid-column: 4/-1;
  grid-row: 1;
  width: 100%;
  z-index: 1;
}

.features .features-item .image-stack .stack-front {
  grid-row: 1;
  grid-column: 1/span 8;
  margin-top: 20%;
  width: 100%;
  z-index: 2;
}

/* Portfolio Section - Home Page
------------------------------*/
.portfolio .portfolio-filters {
  padding: 0;
  margin: 0 auto 20px auto;
  list-style: none;
  text-align: center;
}

.portfolio .portfolio-filters li {
  cursor: pointer;
  display: inline-block;
  padding: 8px 20px 10px 20px;
  margin: 0;
  font-size: 15px;
  font-weight: 500;
  line-height: 1;
  margin-bottom: 5px;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
  font-family: var(--heading-font);
}

.portfolio .portfolio-filters li:hover,
.portfolio .portfolio-filters li.filter-active {
  color: var(--contrast-color);
  background-color: var(--primary-color);
}

.portfolio .portfolio-filters li:first-child {
  margin-left: 0;
}

.portfolio .portfolio-filters li:last-child {
  margin-right: 0;
}

@media (max-width: 575px) {
  .portfolio .portfolio-filters li {
    font-size: 14px;
    margin: 0 0 10px 0;
  }
}

.portfolio .portfolio-item {
  position: relative;
  overflow: hidden;
}

.portfolio .portfolio-item .portfolio-info {
  opacity: 0;
  position: absolute;
  left: 12px;
  right: 12px;
  bottom: -100%;
  z-index: 3;
  transition: all ease-in-out 0.5s;
  background: rgba(var(--background-color-rgb), 0.9);
  padding: 15px;
}

.portfolio .portfolio-item .portfolio-info h4 {
  font-size: 18px;
  font-weight: 600;
  padding-right: 50px;
}

.portfolio .portfolio-item .portfolio-info p {
  color: rgba(var(--default-color-rgb), 0.7);
  font-size: 14px;
  margin-bottom: 0;
  padding-right: 50px;
}

.portfolio .portfolio-item .portfolio-info .preview-link,
.portfolio .portfolio-item .portfolio-info .details-link {
  position: absolute;
  right: 50px;
  font-size: 24px;
  top: calc(50% - 14px);
  color: rgba(var(--default-color-rgb), 0.7);
  transition: 0.3s;
  line-height: 0;
}

.portfolio .portfolio-item .portfolio-info .preview-link:hover,
.portfolio .portfolio-item .portfolio-info .details-link:hover {
  color: var(--primary-color);
}

.portfolio .portfolio-item .portfolio-info .details-link {
  right: 14px;
  font-size: 28px;
}

.portfolio .portfolio-item:hover .portfolio-info {
  opacity: 1;
  bottom: 0;
}

/* Pricing Section - Home Page
------------------------------*/
.pricing {
  padding: 60px 0 120px 0;
}

.pricing .section-title {
  margin-bottom: 40px;
}

.pricing .pricing-item {
  box-shadow: 0 3px 20px -2px rgba(var(--default-color-rgb), 0.1);
  padding: 60px 40px;
  height: 100%;
  position: relative;
  border-radius: 15px;
}

.pricing h3 {
  font-weight: 600;
  margin-bottom: 15px;
  font-size: 20px;
  text-align: center;
}

.pricing .icon {
  margin: 30px auto 20px auto;
  width: 70px;
  height: 70px;
  background: <?=$theme?>;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.3s;
  transform-style: preserve-3d;
}

.pricing .icon i {
  color: var(--background-color);
  font-size: 28px;
  transition: ease-in-out 0.3s;
  line-height: 0;
}

.pricing .icon::before {
  position: absolute;
  content: "";
  height: 86px;
  width: 86px;
  border-radius: 50%;
  background: rgba(var(--primary-color-rgb), 0.2);
  transition: all 0.3s ease-out 0s;
  transform: translateZ(-1px);
}

.pricing .icon::after {
  position: absolute;
  content: "";
  height: 102px;
  width: 102px;
  border-radius: 50%;
  background: rgba(var(--primary-color-rgb), 0.1);
  transition: all 0.3s ease-out 0s;
  transform: translateZ(-2px);
}

.pricing h4 {
  font-size: 48px;
  color: var(--primary-color);
  font-weight: 700;
  font-family: var(--heading-font);
  margin-bottom: 25px;
  text-align: center;
}

.pricing h4 sup {
  font-size: 28px;
}

.pricing h4 span {
  color: rgba(var(--default-color-rgb), 0.5);
  font-size: 18px;
  font-weight: 400;
}

.pricing ul {
  padding: 20px 0;
  list-style: none;
  color: rgba(var(--default-color-rgb), 0.8);
  text-align: left;
  line-height: 20px;
}

.pricing ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

.pricing ul i {
  color: #059652;
  font-size: 24px;
  padding-right: 3px;
}

.pricing ul .na {
  color: rgba(var(--default-color-rgb), 0.3);
}

.pricing ul .na i {
  color: rgba(var(--default-color-rgb), 0.3);
}

.pricing ul .na span {
  text-decoration: line-through;
}

.pricing .buy-btn {
  color: rgba(var(--default-color-rgb), 0.8);
  background-color: var(--contrast-color);
  display: inline-block;
  padding: 10px 40px;
  border-radius: 4px;
  border: 1px solid rgba(var(--default-color-rgb), 0.2);
  transition: none;
  font-size: 16px;
  font-weight: 600;
  font-family: var(--heading-font);
  transition: 0.3s;
}

.pricing .buy-btn:hover {
  background-color: var(--primary-color);
  color: var(--contrast-color);
}

.pricing .featured {
  z-index: 10;
  border: 3px solid var(--primary-color);
}

.pricing .featured .buy-btn {
  background-color: var(--primary-color);
  color: var(--contrast-color);
}

.pricing .featured .buy-btn:hover {
  background-color: rgba(var(--primary-color-rgb), 0.9);
}

@media (min-width: 992px) {
  .pricing .featured {
    transform: scale(1.15);
  }
}

/* Faq Section - Home Page
------------------------------*/
.faq .content h3 {
  font-weight: 400;
  font-size: 34px;
}

.faq .content p {
  font-size: 15px;
  color: rgba(var(--default-color-rgb), 0.7);
}

.faq .faq-container .faq-item {
  position: relative;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 0px 5px 25px 0px rgba(var(--default-color-rgb), 0.1);
  overflow: hidden;
}

.faq .faq-container .faq-item:last-child {
  margin-bottom: 0;
}

.faq .faq-container .faq-item h3 {
  font-weight: 600;
  font-size: 18px;
  line-height: 24px;
  margin: 0 30px 0 0;
  transition: 0.3s;
  cursor: pointer;
  display: flex;
  align-items: flex-start;
}

.faq .faq-container .faq-item h3 .num {
  color: var(--primary-color);
  padding-right: 5px;
}

.faq .faq-container .faq-item h3:hover {
  color: var(--primary-color);
}

.faq .faq-container .faq-item .faq-content {
  display: grid;
  grid-template-rows: 0fr;
  transition: 0.3s ease-in-out;
  visibility: hidden;
  opacity: 0;
}

.faq .faq-container .faq-item .faq-content p {
  margin-bottom: 0;
  overflow: hidden;
}

.faq .faq-container .faq-item .faq-toggle {
  position: absolute;
  top: 20px;
  right: 20px;
  font-size: 16px;
  line-height: 0;
  transition: 0.3s;
  cursor: pointer;
}

.faq .faq-container .faq-item .faq-toggle:hover {
  color: var(--primary-color);
}

.faq .faq-container .faq-active h3 {
  color: var(--primary-color);
}

.faq .faq-container .faq-active .faq-content {
  grid-template-rows: 1fr;
  visibility: visible;
  opacity: 1;
  padding-top: 10px;
}

.faq .faq-container .faq-active .faq-toggle {
  transform: rotate(90deg);
  color: var(--primary-color);
}

/* Team Section - Home Page
------------------------------*/
.team {
  --background-color: #f4f4f4;
}

.team .member {
  position: relative;
}

.team .member .member-img {
  margin: 0 80px;
  border-radius: 50%;
  overflow: hidden;
  position: relative;
  border: 4px solid var(--background-color);
  box-shadow: 0 15px 35px -10px rgba(0, 0, 0, 0.2);
}

@media (max-width: 1024px) {
  .team .member .member-img {
    margin: 0 60px;
  }
}

.team .member .member-img img {
  position: relative;
  z-index: 1;
}

.team .member .member-img .social {
  position: absolute;
  inset: 0;
  background-color: rgba(0, 0, 0, 0.6);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 2;
  padding-bottom: 20px;
  transition: 0.3s;
  visibility: hidden;
  opacity: 0;
}

.team .member .member-img .social a {
  transition: 0.3s;
  color: var(--contrast-color);
  font-size: 20px;
  margin: 0 8px;
}

.team .member .member-img .social a:hover {
  color: var(--primary-color);
}

.team .member .member-info {
  margin-top: 30px;
}

.team .member .member-info h4 {
  font-weight: 700;
  margin-bottom: 6px;
  font-size: 18px;
}

.team .member .member-info span {
  font-style: italic;
  display: block;
  font-size: 15px;
  color: rgba(var(--default-color-rgb), 0.6);
  margin-bottom: 10px;
}

.team .member .member-info p {
  margin-bottom: 0;
  font-size: 14px;
}

.team .member:hover .member-img .social {
  padding-bottom: 0;
  visibility: visible;
  opacity: 1;
}

/* Call-to-action Section - Home Page
------------------------------*/
.call-to-action {
  --default-color: #ffffff;
  --background-color: #000000;
  --background-color-rgb: 0, 0, 0;
  padding: 80px 0;
  position: relative;
  -webkit-clip-path: inset(0);
  clip-path: inset(0);
}

.call-to-action img {
  position: fixed;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
  z-index: 1;
}

.call-to-action:before {
  content: "";
  background: rgba(var(--background-color-rgb), 0.5);
  position: absolute;
  inset: 0;
  z-index: 2;
}

.call-to-action .container {
  position: relative;
  z-index: 3;
}

.call-to-action h3 {
  font-size: 28px;
  font-weight: 700;
  color: var(--default-color);
}

.call-to-action p {
  color: var(--default-color);
}

.call-to-action .cta-btn {
  font-family: var(--heading-font);
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 40px;
  border-radius: 5px;
  transition: 0.5s;
  margin: 10px;
  border: 2px solid var(--contrast-color);
  color: var(--contrast-color);
}

.call-to-action .cta-btn:hover {
  background: <?=$theme?>;
  border: 2px solid var(--primary-color);
}

/* Testimonials Section - Home Page
------------------------------*/
.testimonials {
  --background-color: #f4f4f4;
}

.testimonials .info h3 {
  font-weight: 700;
  font-size: 32px;
}

.testimonials .swiper {
  box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.05);
  background-color: #fff;
}

.testimonials .testimonials-carousel,
.testimonials .testimonials-slider {
  overflow: hidden;
}

.testimonials .testimonial-item {
  box-sizing: content-box;
  min-height: 200px;
  position: relative;
  margin: 30px;
}

.testimonials .testimonial-item .testimonial-img {
  width: 90px;
  height: 90px;
  border-radius: 50px;
  border: 6px solid var(--background-color);
  margin-right: 10px;
}

.testimonials .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 10px 0 5px 0;
}

.testimonials .testimonial-item h4 {
  color: rgba(var(--default-color-rgb), 0.5);
  font-size: 14px;
  margin: 0;
}

.testimonials .testimonial-item .stars {
  margin: 10px 0;
}

.testimonials .testimonial-item .stars i {
  color: #ffc107;
  margin: 0 1px;
}

.testimonials .testimonial-item .quote-icon-left,
.testimonials .testimonial-item .quote-icon-right {
  color: rgba(var(--primary-color-rgb), 0.4);
  font-size: 26px;
  line-height: 0;
}

.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
  transform: scale(-1, -1);
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 15px auto 15px auto;
}

.testimonials .swiper-wrapper {
  height: auto;
}

.testimonials .swiper-pagination {
  margin-top: 20px;
  margin-bottom: 20px;
  position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 10px;
  height: 10px;
  background-color: rgba(var(--default-color-rgb), 0.15);
  opacity: 1;
  border: none;
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: var(--primary-color);
}

@media (max-width: 767px) {

  .testimonials .testimonials-carousel,
  .testimonials .testimonials-slider {
    overflow: hidden;
  }

  .testimonials .testimonial-item {
    margin: 15px;
  }
}

/* Recent-posts Section - Home Page
------------------------------*/
.recent-posts article {
  box-shadow: 0 4px 16px rgba(var(--default-color-rgb), 0.1);
  padding: 30px;
  height: 100%;
  border-radius: 10px;
  overflow: hidden;
}

.recent-posts .post-img {
  max-height: 240px;
  margin: -30px -30px 15px -30px;
  overflow: hidden;
}

.recent-posts .post-category {
  font-size: 16px;
  color: rgba(var(--default-color-rgb), 0.5);
  margin-bottom: 10px;
}

.recent-posts .title {
  font-size: 20px;
  font-weight: 600;
  padding: 0;
  margin: 0 0 20px 0;
}

.recent-posts .title a {
  color: var(--secondary-color);
  transition: 0.3s;
}

.recent-posts .title a:hover {
  color: var(--primary-color);
}

.recent-posts .post-author-img {
  width: 50px;
  border-radius: 50%;
  margin-right: 15px;
}

.recent-posts .post-author {
  font-weight: 600;
  margin-bottom: 5px;
}

.recent-posts .post-date {
  font-size: 14px;
  color: rgba(var(--default-color-rgb), 0.5);
  margin-bottom: 0;
}

/* Contact Section - Home Page
------------------------------*/
.contact .info-item {
  background: rgba(var(--default-color-rgb), 0.03);
  padding: 30px;
}

.contact .info-item i {
  font-size: 38px;
  line-height: 0;
  color: var(--primary-color);
}

.contact .info-item h3 {
  font-size: 20px;
  font-weight: 700;
  margin: 20px 0 10px 0;
}

.contact .info-item p {
  padding: 0;
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.contact .php-email-form {
  background: rgba(var(--default-color-rgb), 0.03);
  padding: 30px;
  height: 100%;
}

.contact .php-email-form .error-message {
  display: none;
  background: #df1529;
  color: #ffffff;
  text-align: left;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #ffffff;
  background: #059652;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: var(--background-color);
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid var(--primary-color);
  border-top-color: var(--background-color);
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input[type=text],
.contact .php-email-form input[type=email],
.contact .php-email-form textarea {
  font-size: 14px;
  padding: 10px 15px;
  box-shadow: none;
  border-radius: 0;
  color: var(--default-color);
  background-color: rgba(var(--background-color-rgb), 0.5);
  border-color: rgba(var(--default-color-rgb), 0.2);
}

.contact .php-email-form input[type=text]:focus,
.contact .php-email-form input[type=email]:focus,
.contact .php-email-form textarea:focus {
  border-color: var(--primary-color);
}

.contact .php-email-form input[type=text]::-moz-placeholder,
.contact .php-email-form input[type=email]::-moz-placeholder,
.contact .php-email-form textarea::-moz-placeholder {
  color: rgba(var(--default-color-rgb), 0.3);
}

.contact .php-email-form input[type=text]::placeholder,
.contact .php-email-form input[type=email]::placeholder,
.contact .php-email-form textarea::placeholder {
  color: rgba(var(--default-color-rgb), 0.3);
}

.contact .php-email-form button[type=submit] {
  background: <?=$theme?>;
  color: var(--contrast-color);
  border: 0;
  padding: 10px 30px;
  transition: 0.4s;
  border-radius: 4px;
}

.contact .php-email-form button[type=submit]:hover {
  background: rgba(var(--primary-color-rgb), 0.8);
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Portfolio Details Page
--------------------------------------------------------------*/
/* Portfolio-details Section - Portfolio Details Page
------------------------------*/
.portfolio-details .portfolio-details-slider img {
  width: 100%;
}

.portfolio-details .swiper-wrapper {
  height: auto;
}

.portfolio-details .swiper-button-prev,
.portfolio-details .swiper-button-next {
  width: 48px;
  height: 48px;
}

.portfolio-details .swiper-button-prev:after,
.portfolio-details .swiper-button-next:after {
  color: rgba(255, 255, 255, 0.8);
  background-color: rgba(0, 0, 0, 0.15);
  font-size: 24px;
  border-radius: 50%;
  width: 48px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.3s;
}

.portfolio-details .swiper-button-prev:hover:after,
.portfolio-details .swiper-button-next:hover:after {
  background-color: rgba(0, 0, 0, 0.3);
}

@media (max-width: 575px) {

  .portfolio-details .swiper-button-prev,
  .portfolio-details .swiper-button-next {
    display: none;
  }
}

.portfolio-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.portfolio-details .portfolio-info h3:after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 3px;
  background: <?=$theme?>;
  left: 0;
  bottom: 0;
}

.portfolio-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.portfolio-details .portfolio-info ul li {
  display: flex;
  flex-direction: column;
  padding-bottom: 15px;
}

.portfolio-details .portfolio-info ul strong {
  text-transform: uppercase;
  font-weight: 400;
  color: rgba(var(--default-color-rgb), 0.5);
  font-size: 14px;
}

.portfolio-details .portfolio-info .btn-visit {
  padding: 8px 40px;
  background: <?=$theme?>;
  color: var(--contrast-color);
  border-radius: 50px;
  transition: 0.3s;
}

.portfolio-details .portfolio-info .btn-visit:hover {
  background: rgba(var(--primary-color-rgb), 0.8);
}

.portfolio-details .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.portfolio-details .portfolio-description p {
  padding: 0;
}

.portfolio-details .portfolio-description .testimonial-item {
  padding: 30px 30px 0 30px;
  position: relative;
  background: rgba(var(--default-color-rgb), 0.03);
  margin-bottom: 50px;
}

.portfolio-details .portfolio-description .testimonial-item .testimonial-img {
  width: 90px;
  border-radius: 50px;
  border: 6px solid var(--background-color);
  float: left;
  margin: 0 10px 0 0;
}

.portfolio-details .portfolio-description .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 15px 0 5px 0;
  padding-top: 20px;
}

.portfolio-details .portfolio-description .testimonial-item h4 {
  font-size: 14px;
  color: #6c757d;
  margin: 0;
}

.portfolio-details .portfolio-description .testimonial-item .quote-icon-left,
.portfolio-details .portfolio-description .testimonial-item .quote-icon-right {
  color: rgba(var(--primary-color-rgb), 0.5);
  font-size: 26px;
  line-height: 0;
}

.portfolio-details .portfolio-description .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.portfolio-details .portfolio-description .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
  transform: scale(-1, -1);
}

.portfolio-details .portfolio-description .testimonial-item p {
  font-style: italic;
  margin: 0 0 15px 0 0 0;
  padding: 0;
}

/*--------------------------------------------------------------
# Services Details Page
--------------------------------------------------------------*/
/* Service-details Section - Services Details Page
------------------------------*/
.service-details .service-box {
  padding: 20px;
  box-shadow: 0px 2px 20px rgba(var(--default-color-rgb), 0.12);
}

.service-details .service-box+.service-box {
  margin-top: 30px;
}

.service-details .service-box h4 {
  font-size: 20px;
  font-weight: 700;
  border-bottom: 2px solid rgba(var(--default-color-rgb), 0.08);
  padding-bottom: 15px;
  margin-bottom: 15px;
}

.service-details .services-list a {
  color: rgba(var(--default-color-rgb), 0.8);
  background-color: rgba(var(--default-color-rgb), 0.04);
  display: flex;
  align-items: center;
  padding: 12px 15px;
  margin-top: 15px;
  transition: 0.3s;
}

.service-details .services-list a:first-child {
  margin-top: 0;
}

.service-details .services-list a i {
  font-size: 16px;
  margin-right: 8px;
  color: var(--primary-color);
}

.service-details .services-list a.active {
  color: var(--contrast-color);
  background-color: var(--primary-color);
}

.service-details .services-list a.active i {
  color: var(--contrast-color);
}

.service-details .services-list a:hover {
  background-color: rgba(var(--primary-color-rgb), 0.05);
  color: var(--primary-color);
}

.service-details .download-catalog a {
  color: var(--default-color);
  display: flex;
  align-items: center;
  padding: 10px 0;
  transition: 0.3s;
  border-top: 1px solid rgba(var(--default-color-rgb), 0.1);
}

.service-details .download-catalog a:first-child {
  border-top: 0;
  padding-top: 0;
}

.service-details .download-catalog a:last-child {
  padding-bottom: 0;
}

.service-details .download-catalog a i {
  font-size: 24px;
  margin-right: 8px;
  color: var(--primary-color);
}

.service-details .download-catalog a:hover {
  color: var(--primary-color);
}

.service-details .help-box {
  background-color: var(--primary-color);
  color: var(--contrast-color);
  margin-top: 30px;
  padding: 30px 15px;
}

.service-details .help-box .help-icon {
  font-size: 48px;
}

.service-details .help-box h4,
.service-details .help-box a {
  color: var(--contrast-color);
}

.service-details .services-img {
  margin-bottom: 20px;
}

.service-details h3 {
  font-size: 26px;
  font-weight: 700;
}

.service-details p {
  font-size: 15px;
}

.service-details ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.service-details ul li {
  padding: 5px 0;
  display: flex;
  align-items: center;
}

.service-details ul i {
  font-size: 20px;
  margin-right: 8px;
  color: var(--primary-color);
}

/*--------------------------------------------------------------
# Blog Page
--------------------------------------------------------------*/
/* Blog Section - Blog Page
------------------------------*/
.blog .posts-list article {
  box-shadow: 0 4px 16px rgba(var(--default-color-rgb), 0.1);
  padding: 30px;
  height: 100%;
  border-radius: 10px;
  overflow: hidden;
}

.blog .posts-list .post-img {
  max-height: 240px;
  margin: -30px -30px 15px -30px;
  overflow: hidden;
}

.blog .posts-list .post-category {
  font-size: 16px;
  color: rgba(var(--default-color-rgb), 0.6);
  margin-bottom: 10px;
}

.blog .posts-list .title {
  font-size: 22px;
  font-weight: 700;
  padding: 0;
  margin: 0 0 20px 0;
}

.blog .posts-list .title a {
  color: var(--secondary-color);
  transition: 0.3s;
}

.blog .posts-list .title a:hover {
  color: var(--primary-color);
}

.blog .posts-list .post-author-img {
  width: 50px;
  border-radius: 50%;
  margin-right: 15px;
}

.blog .posts-list .post-author {
  font-weight: 600;
  margin-bottom: 5px;
}

.blog .posts-list .post-date {
  font-size: 14px;
  color: rgba(var(--default-color-rgb), 0.6);
  margin-bottom: 0;
}

.blog .pagination {
  margin-top: 30px;
  color: rgba(var(--default-color-rgb), 0.6);
}

.blog .pagination ul {
  display: flex;
  padding: 0;
  margin: 0;
  list-style: none;
}

.blog .pagination li {
  margin: 0 5px;
  transition: 0.3s;
}

.blog .pagination li a {
  color: rgba(var(--default-color-rgb), 0.6);
  padding: 7px 16px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.blog .pagination li.active,
.blog .pagination li:hover {
  background: <?=$theme?>;
  color: var(--contrast-color);
}

.blog .pagination li.active a,
.blog .pagination li:hover a {
  color: var(--contrast-color);
}

/*--------------------------------------------------------------
# Blog Details Page
--------------------------------------------------------------*/
/* Blog-details Section - Blog Details Page
------------------------------*/
.blog-details .article {
  box-shadow: 0 4px 16px rgba(var(--default-color-rgb), 0.1);
  padding: 30px;
}

.blog-details .post-img {
  margin: -30px -30px 20px -30px;
  overflow: hidden;
}

.blog-details .title {
  color: var(--secondary-color);
  font-size: 28px;
  font-weight: 700;
  padding: 0;
  margin: 30px 0;
}

.blog-details .content {
  margin-top: 20px;
}

.blog-details .content h3 {
  font-size: 22px;
  margin-top: 30px;
  font-weight: bold;
}

.blog-details .content blockquote {
  overflow: hidden;
  background-color: rgba(var(--default-color-rgb), 0.05);
  padding: 60px;
  position: relative;
  text-align: center;
  margin: 20px 0;
}

.blog-details .content blockquote p {
  color: var(--default-color);
  line-height: 1.6;
  margin-bottom: 0;
  font-style: italic;
  font-weight: 500;
  font-size: 22px;
}

.blog-details .content blockquote:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 3px;
  background-color: var(--primary-color);
  margin-top: 20px;
  margin-bottom: 20px;
}

.blog-details .meta-top {
  margin-top: 20px;
  color: rgba(var(--default-color-rgb), 0.6);
}

.blog-details .meta-top ul {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  align-items: center;
  padding: 0;
  margin: 0;
}

.blog-details .meta-top ul li+li {
  padding-left: 20px;
}

.blog-details .meta-top i {
  font-size: 16px;
  margin-right: 8px;
  line-height: 0;
  color: rgba(var(--default-color-rgb), 0.6);
}

.blog-details .meta-top a {
  color: rgba(var(--default-color-rgb), 0.6);
  font-size: 14px;
  display: inline-block;
  line-height: 1;
}

.blog-details .meta-bottom {
  padding-top: 10px;
  border-top: 1px solid rgba(var(--default-color-rgb), 0.1);
}

.blog-details .meta-bottom i {
  color: rgba(var(--default-color-rgb), 0.6);
  display: inline;
}

.blog-details .meta-bottom a {
  color: rgba(var(--default-color-rgb), 0.6);
  transition: 0.3s;
}

.blog-details .meta-bottom a:hover {
  color: var(--primary-color);
}

.blog-details .meta-bottom .cats {
  list-style: none;
  display: inline;
  padding: 0 20px 0 0;
  font-size: 14px;
}

.blog-details .meta-bottom .cats li {
  display: inline-block;
}

.blog-details .meta-bottom .tags {
  list-style: none;
  display: inline;
  padding: 0;
  font-size: 14px;
}

.blog-details .meta-bottom .tags li {
  display: inline-block;
}

.blog-details .meta-bottom .tags li+li::before {
  padding-right: 6px;
  color: var(--default-color);
  content: ",";
}

.blog-details .meta-bottom .share {
  font-size: 16px;
}

.blog-details .meta-bottom .share i {
  padding-left: 5px;
}

.blog-details .sidebar {
  padding: 30px;
  box-shadow: 0 4px 16px rgba(var(--default-color-rgb), 0.1);
}

.blog-details .sidebar .sidebar-title {
  color: var(--secondary-color);
  font-size: 20px;
  font-weight: 700;
  padding: 0;
  margin: 0;
}

.blog-details .sidebar .sidebar-item+.sidebar-item {
  margin-top: 40px;
}

.blog-details .sidebar .search-form form {
  background: var(--background-color);
  border: 1px solid rgba(var(--default-color-rgb), 0.3);
  padding: 3px 10px;
  position: relative;
}

.blog-details .sidebar .search-form form input[type=text] {
  border: 0;
  padding: 4px;
  border-radius: 4px;
  width: calc(100% - 40px);
  background-color: var(--background-color);
  color: var(--default-color);
}

.blog-details .sidebar .search-form form input[type=text]:focus {
  outline: none;
}

.blog-details .sidebar .search-form form button {
  background: <?=$theme?>;
  color: var(--background-color);
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  font-size: 16px;
  padding: 0 15px;
  margin: -1px;
  transition: 0.3s;
  border-radius: 0 4px 4px 0;
  line-height: 0;
}

.blog-details .sidebar .search-form form button i {
  line-height: 0;
}

.blog-details .sidebar .search-form form button:hover {
  background: rgba(var(--primary-color-rgb), 0.8);
}

.blog-details .sidebar .categories ul {
  list-style: none;
  padding: 0;
}

.blog-details .sidebar .categories ul li+li {
  padding-top: 10px;
}

.blog-details .sidebar .categories ul a {
  color: rgba(var(--default-color-rgb), 0.8);
  transition: 0.3s;
}

.blog-details .sidebar .categories ul a:hover {
  color: var(--primary-color);
}

.blog-details .sidebar .categories ul a span {
  padding-left: 5px;
  color: rgba(var(--default-color-rgb), 0.5);
  font-size: 14px;
}

.blog-details .sidebar .recent-posts .post-item {
  display: flex;
  margin-top: 15px;
}

.blog-details .sidebar .recent-posts img {
  width: 80px;
  margin-right: 15px;
}

.blog-details .sidebar .recent-posts h4 {
  font-size: 15px;
  font-weight: bold;
  margin-bottom: 5px;
}

.blog-details .sidebar .recent-posts h4 a {
  color: var(--default-color);
  transition: 0.3s;
}

.blog-details .sidebar .recent-posts h4 a:hover {
  color: var(--primary-color);
}

.blog-details .sidebar .recent-posts time {
  display: block;
  font-style: italic;
  font-size: 14px;
  color: rgba(var(--default-color-rgb), 0.5);
}

.blog-details .sidebar .tags {
  margin-bottom: -10px;
}

.blog-details .sidebar .tags ul {
  list-style: none;
  padding: 0;
}

.blog-details .sidebar .tags ul li {
  display: inline-block;
}

.blog-details .sidebar .tags ul a {
  color: rgba(var(--default-color-rgb), 0.7);
  font-size: 14px;
  padding: 6px 14px;
  margin: 0 6px 8px 0;
  border: 1px solid rgba(var(--default-color-rgb), 0.4);
  display: inline-block;
  transition: 0.3s;
}

.blog-details .sidebar .tags ul a:hover {
  color: var(--background-color);
  border: 1px solid var(--primary-color);
  background: <?=$theme?>;
}

.blog-details .sidebar .tags ul a span {
  padding-left: 5px;
  color: rgba(var(--default-color-rgb), 0.4);
  font-size: 14px;
}

.blog-details .blog-author {
  padding: 20px;
  margin-top: 30px;
  box-shadow: 0 4px 16px rgba(var(--default-color-rgb), 0.1);
}

.blog-details .blog-author img {
  max-width: 120px;
  margin-right: 20px;
}

.blog-details .blog-author h4 {
  font-weight: 600;
  font-size: 20px;
  margin-bottom: 0px;
  padding: 0;
  color: rgba(var(--default-color-rgb), 0.8);
}

.blog-details .blog-author .social-links {
  margin: 0 10px 10px 0;
}

.blog-details .blog-author .social-links a {
  color: rgba(var(--default-color-rgb), 0.4);
  margin-right: 5px;
}

.blog-details .blog-author p {
  font-style: italic;
  color: rgba(var(--default-color-rgb), 0.7);
  margin-bottom: 0;
}

.blog-details .comments {
  margin-top: 30px;
}

.blog-details .comments .comments-count {
  font-weight: bold;
}

.blog-details .comments .comment {
  margin-top: 30px;
  position: relative;
}

.blog-details .comments .comment .comment-img {
  margin-right: 14px;
}

.blog-details .comments .comment .comment-img img {
  width: 60px;
}

.blog-details .comments .comment h5 {
  font-size: 16px;
  margin-bottom: 2px;
}

.blog-details .comments .comment h5 a {
  font-weight: bold;
  color: var(--default-color);
  transition: 0.3s;
}

.blog-details .comments .comment h5 a:hover {
  color: var(--primary-color);
}

.blog-details .comments .comment h5 .reply {
  padding-left: 10px;
  color: rgba(var(--default-color-rgb), 0.8);
}

.blog-details .comments .comment h5 .reply i {
  font-size: 20px;
}

.blog-details .comments .comment time {
  display: block;
  font-size: 14px;
  color: rgba(var(--default-color-rgb), 0.6);
  margin-bottom: 5px;
}

.blog-details .comments .comment.comment-reply {
  padding-left: 40px;
}

.blog-details .comments .reply-form {
  margin-top: 30px;
  padding: 30px;
  box-shadow: 0 4px 16px rgba(var(--default-color-rgb), 0.1);
}

.blog-details .comments .reply-form h4 {
  font-weight: bold;
  font-size: 22px;
}

.blog-details .comments .reply-form p {
  font-size: 14px;
}

.blog-details .comments .reply-form input {
  background-color: var(--background-color);
  color: var(--default-color);
  border: 1px solid rgba(var(--default-color-rgb), 0.3);
  font-size: 14px;
  border-radius: 4px;
  padding: 10px 10px;
}

.blog-details .comments .reply-form input:focus {
  box-shadow: none;
  border-color: var(--primary-color);
}

.blog-details .comments .reply-form textarea {
  background-color: var(--background-color);
  color: var(--default-color);
  border: 1px solid rgba(var(--default-color-rgb), 0.3);
  border-radius: 4px;
  padding: 10px 10px;
  font-size: 14px;
  height: 120px;
}

.blog-details .comments .reply-form textarea:focus {
  box-shadow: none;
  border-color: var(--primary-color);
}

.blog-details .comments .reply-form .form-group {
  margin-bottom: 25px;
}

.blog-details .comments .reply-form .btn-primary {
  border-radius: 4px;
  padding: 10px 20px;
  border: 0;
  background-color: var(--primary-color);
  color: var(--contrast-color);
}

.blog-details .comments .reply-form .btn-primary:hover {
  color: var(--contrast-color);
  background-color: rgba(var(--primary-color-rgb), 0.8);
}
  </style>
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="dist/img/myechole.png" alt=""> -->
        <h1><?=$name?></h1>
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          
          <li><a href="#contact">Contact</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a class="btn-getstarted" href="login">Admin Panel</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

      <img src="dist/img/getway.jfif" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Student Portal</h2>
            <p data-aos="fade-up" data-aos-delay="200">Make Sure to Enter Your Details Currectly!</p>
          </div>
          <div class="col-lg-5 chk-result "><br><p></p>
          	<a href="result-checker" class="btn btn-primary">Check Result</a>
          </div>
        </div>
      </div>

    </section><!-- End Hero Section -->



    <!-- About Section - Home Page -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>About Us</h3>
            <h2><?=$name?></h2>
            <p>At <?=$name?>, we're dedicated to shaping young minds and preparing them for a bright future. With our primary, junior, and senior sections, we offer a holistic educational experience that nurtures curiosity, growth, and success. Discover excellence in education with us.</p>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-buildings"></i>
                  <h3>Primary Section</h3>
                  <p>The foundation of a bright future begins here. Our Primary Section is dedicated to nurturing young minds, fostering a love for learning, and building a solid educational base for our students.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-buildings"></i>
                  <h3>Junior Section</h3>
                  <p>As students progress, they enter our Junior Section, where they continue to explore a world of knowledge. We offer a diverse curriculum and a supportive environment to help students grow academically and personally.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-buildings"></i>
                  <h3>Senior Section</h3>
                  <p>At <?=$name?>, our Senior Section prepares students for the challenges and opportunities that lie ahead. We focus on academic excellence, character development, and career readiness to empower our students for a successful future.</p>
                </div>
              </div> <!-- End Icon Box --><br>

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-message"></i>
                  <!-- <h3>Delares sapiente</h3> -->
                  <p>We take pride in our dedicated faculty, state-of-the-art facilities, and a vibrant learning community. Join us on a journey of educational excellence, where young minds are shaped, dreams are nurtured, and futures are built. Together, we inspire and achieve excellence at every level.</p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- Call-to-action Section - Home Page -->
    <section id="call-to-action" class="call-to-action">

      <img src="dist/img/gatewayStudents.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3><?=$name?></h3>
              <p>Join us today and let your child's educational journey begin at <?=$name?>. Together, we'll inspire a future full of possibilities.</p>
              <a class="cta-btn" href="#contact">Join us!</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Call-to-action Section -->


    <!-- Contact Section - Home Page -->
    <section id="contact" class="contact">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><?=$name?> provide multiple options for you to reach us!</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <!-- <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Jigawa State</p>
                  <p>Gid-Dubu, Dutse</p>
                </div>
              </div> --> --><!-- End Info Item

              <!-- <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+2349040306788</p>
                  <p>+2349160163113</p>
                </div>
              </div> --><!-- End Info Item -->

             <!--  <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>solvecycleicon@gmail.com</p>
                  <p>solvecycleicon.com.ng</p>
                </div>
              </div> --><!-- End Info Item -->

              <!-- <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday</p>
                  <p>8:00AM - 02:00PM</p>
                </div>
              </div> --><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright</span> <strong class="px-1"><?=$name?></strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="">Abdurrahim Auwal Isah</a>
      </div>
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>