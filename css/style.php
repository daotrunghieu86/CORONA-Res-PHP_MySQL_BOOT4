<style>
html {
  scroll-behavior: smooth;
}

* {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  font-family: 'Mulish', sans-serif;
}

/* NAVBAR */
.nav_style {
  background-color: #a29bfe !important;
}

.nav_style a {
  color: white !important;
}

/* HEADER */
.main_header {
  height: 450px;
  width: 100%;
  padding: 0 2rem;
}

.main_header .row {
  margin: 0;
}

.left_side img {
  animation: heartbeat 5s linear infinite;
}

@keyframes heartbeat {
  0% {
    transform: scale(.75);
  }

  20% {
    transform: scale(0.9);
  }

  40% {
    transform: scale(.75);
  }

  60% {
    transform: scale(0.9);
  }

  80% {
    transform: scale(.75);
  }

  100% {
    transform: scale(0.75);
  }
}

.img_rotate img {
  animation: corona_rotate 3s linear infinite;
}

@keyframes corona_rotate {
  0% {
    transform: rotate(0);
  }

  100% {
    transform: rotate(360deg);
  }
}

/* CORONA-WUHAN UPDATES */
.corona_updates {
  margin-bottom: 30px;
}

.corona_updates h3 {
  color: #ff7675;
}

.corona_updates h1 {
  font-size: 2rem;
  text-align: center;
}

/* ABOUT CORONA */
.sub_section {
  background-color: #fbfafd;
}

.row_about p {
  font-size: 1rem;
}

.row_about img {
  margin: auto;
}

.footer_style {
  width: 100%;
  height: 50px;
  background-color: #b088ff;
}

.footer_style p {
  color: white;
  margin: 0;
  line-height: 50px;
  font-weight: 600;
}

/* Top scroll */
#myBtn {
  display: none;
  position: fixed;
  bottom: 30px;
  right: 40px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: #00A8FF;
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 10px;
}

#myBtn:hover {
  background: #606060;
}

/* Responsive */
@media screen and (max-width: 780px) {
  .main_header {
    height: 600px;
    text-align: center;
    margin: 0;
    padding: 0;
  }

  .main_header h1 {
    text-align: center;
    padding: 1rem 2rem 0 2rem;
    width: 100%;
    font-size: 34px;
  }

  .corona_updates .detail_update {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .img-fluid {
    transform: translate(110%);
  }

  .row_about img {
    margin-bottom: 2rem;
  }
}
</style>