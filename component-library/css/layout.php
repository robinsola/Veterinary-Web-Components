<?php header("Content-type: text/css; charset: UTF-8"); ?>

<?php session_start(); ?>
:root {
  --primary: <?php echo $_SESSION['primary_color']; ?>;
  --accent: <?php echo $_SESSION['accent_color']; ?>;
}


/*BODY STYLES FOR LANDING PAGE*/
.landing-page-plugin .landing-page-btn {
	display: block;
	text-align: center;
	background-color: var(--primary);
	padding: 10px;
  margin: 0 auto;
  font-size: 20px;
  color: white;
	position: relative;
}
.landing-page-plugin .landing-page-btn:hover {
  padding-bottom: 7px;
  border-bottom: 3px solid var(--accent);
}
@media (max-width: 1000px) {
	.landing-page-plugin .landing-page-btn {
		max-width: 500px;
    width: 100%;
	}
}
@media (max-width: 450px) {
	.landing-page-plugin .landing-page-btn {
		font-size: 15px !important;
	}
}
.landing-page-plugin .landing-page-btn i {
	position: absolute;
	left: 10px;
	line-height: 24px;
	font-size: 30px;
}
.landing-page-plugin .vc_row {
  margin-left: auto !important;
  margin-right: auto !important;
}
.landing-page-plugin .landing-page-btn.call {
	background-color: var(--accent);
}
.landing-page-plugin .landing-page-btn.call:hover {
	border-bottom-color: var(--primary);
}
@media (min-width: 1000px) {
	.desktop-links {
		display: flex;
		justify-content: space-between;
    margin: 30px 0;
    margin-top: 25px;
	}
	.desktop-links a {
		flex-basis: 50%;
	}
	.desktop-links a:first-child {
		margin-right: 3%;
	}
}
@media (max-width: 1000px) {
	.landing-page-plugin .landing-page-btn.call {
		top: 10px;
	}
}
.landing-page-plugin .address-info {
	border-top: 2px solid black;
  border-bottom: 2px solid black;
  text-align: center;
  padding: 10px;
  margin: 20px 0;
	color: black;
	font-size: 16px;
}
.landing-page-plugin .address-info::first-line {
	font-weight: bold;
}
.landing-page-plugin .full-site-link {
	display: block;
	text-align: center;
	margin-top: 30px;
  margin-bottom: 30px;
  color: var(--primary) !important;
}
.landing-page-plugin .full-site-link:hover {
  color: var(--accent) !important;
}
/*LANDING PAGE FOOTER STYLES*/
.landing-page-plugin .kode-item.k-content, .landing-page-plugin .kode-item.k-content {
	margin-bottom: 20px !important;
}
.landing-page-plugin footer .container, .landing-page-plugin footer .kf_pet_copyright_bg, .landing-page-plugin footer .container, .landing-page-plugin footer .kf_pet_copyright_bg {
	display: none;
}



.landing-page-plugin #navigation{
    display: none !important;
}
@media screen and (min-width: 1200px) {
    .landing-page-plugin #top{
        width: 18% !important;
        margin: 0 auto !important;
    }
}
.landing-page-plugin .newsletterbar{
    display: none !important;
}
.landing-page-plugin #footer-widgets{
    display: none !important;
}
.landing-page-plugin .main-title .right{
    display: none;
}

.landing-page-plugin .main-title .left {
    max-width: 100%;
    text-align: center;
    width: 100%;
}

.landing-page-plugin .main-title .left .entry-title{
    width: 100%;
    text-align: center;
}

.landing-page-plugin .make-appt-button{
     display: none !important;
}



/*REUSABLE SERVICES CODE TO MAKE INTO COMPONENT*/
.landing-page-plugin .services {
	margin: 10px 0;
  margin-bottom: 20px !important;
	padding: 10px;
  padding-bottom: 20px;
	border-top: none !important;
	border-bottom: 2px solid var(--primary);
	text-align: center;
}
.landing-page-plugin .service-section-title {
	font-weight: normal;
  margin: 15px 0 15px 0;
	font-size: 38px !important;
	color: var(--primary);
  text-align: center;
  padding-top: 15px;
}
.al-three-loc {
  cursor: pointer;
}
.services-two-column {
	display: flex;
}
.services-two-column .excerpt-container {
	flex-basis: 70%;
	background-color: rgba(192,192,192,.4);
	border-radius: 10px;
	padding: 10px;
}
.landing-page-plugin .services ul {
	margin: 0;
	list-style-type: none;
	flex-basis: 27%;
	padding-right: 3%;
	text-align: right;
  display: block !important;
}
@media (max-width: 600px) {
	.services-two-column {
		flex-direction: column;
	}
	.landing-page-plugin .services ul {
		padding-right: 0;
		text-align: center;
    width: 90%;
    margin-left: 5%;
	}
}
.landing-page-plugin .services ul > li {
  list-style-type: none;
}
.landing-page-plugin .services ul > li > .service-title {
  font-size: 17px;
line-height: 25px;
	color: white;
	background-color: var(--primary);
	border-radius: 5px;
	padding: 3px 7px;
	display: block;
margin-bottom: 5px
}
.landing-page-plugin .services ul > li > .service-title:hover {
	background-color: var(--accent);
	cursor: pointer;
}
.service-title.active-service {
	position: relative;
	background-color: var(--accent) !important;
	border-top-right-radius: 0px !important;
	border-bottom-right-radius: 0px !important;
}
.service-title.active-service:after {
	content: '';
	position: absolute;
	right: -15px;
	top: 0px;
	border-left: 15px solid var(--accent);
	border-top: 15.5px solid transparent;
	border-bottom: 15.5px solid transparent;
}
.services .excerpt-area {
	display: none;
  /*border-bottom: 2px solid var(--primary);
  border-top: 2px solid var(--primary);*/
	margin-top: 15px;
	position: relative;
}
.services .excerpt-area:before {
	content: none;
	position: absolute;
	left: 50%;
	margin-left: -10px;
	width: 0;
  height: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid var(--primary);
	top: -12px;
}
@media (max-width: 600px) {
	.landing-page-plugin .services ul {
		flex-direction: column;
	}
}

/*STYLES SPECIFIC TO THE GIVEN LANDING PAGE ON MEADOWLAWN*/
.lp-hero-image {
  position: relative;
}
.lp-hero-image:after {
  content: '';
  background-image: url(/wp-content/uploads/2017/11/welcome-to.png);
  height: 136px;
  width: 400px;
  position: absolute;
  left: 20%;
  top: 40%;
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
}
@media (max-width: 767px) {
  .lp-hero-image:after {
    width: 60%;
    left: 20%;
    top: 0;
    background-size: contain;
  }
}
.landing-page-plugin .title_outer {
  display: none;
}
.landing-page-plugin #homepage-three-icons-row:after, .landing-page-plugin #homepage-three-icons-row:before {
  content: none !important;
}
.landing-page-plugin .header-contact-2 {
  display: none !important;
}
.landing-page-plugin .container_inner > a[href="/appointments"] {
  display: none !important;
}
.landing-page-plugin .alsmenu {
  margin-top: 0px !important;
}
.landing-page-plugin header .header_bottom {
  height: 126px !important;
  position: relative;
}
.landing-page-plugin header .header_bottom:before {
  content: '';
    position: absolute;
    background-image: url(/wp-content/uploads/2017/11/logo-header-no-border.png);
    width: 100%;
    left: 0;
    right: 0;
    height: 127px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: 145px;
}
.landing-page-plugin .alslogo {
  display: none !important;
}
.landing-page-plugin .mission-img {
  width: 100%;
}
.page-id-1024 hgroup.page-head {
  display: none;
}
.services .excerpt-area, .services .excerpt-area * {
  text-align: left;
}
.services .excerpt-area img {
  display: none;
}
