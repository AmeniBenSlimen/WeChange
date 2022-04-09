<style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: verdana;
}

.container {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: space-between;
}


h1{
  line-height: 1.1;
  color: #371f1b;
}

.text {
  width: 47%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 3em;
  line-height: 165%;
}

p {
  padding-block: 2em;
    color: darkgray;
}

button {
  max-width: 240px;
  background-color: transparent;
  border-radius: 0.5em;
  padding: 1em 2em;
  border: none;
  color: #901c0f;
  font-weight: bold;
  font-size: 1rem;
  text-transform: uppercase;
}

.image {
  width: 40%;
  height: 100vh;
  background-image: url("images/web.jpg");
  background-size: cover;
  background-position: center;
}
</style>
@include('layouts.header')
<br>
<div class="container">
  <div class="decoration"></div>
  <div class="text">
    <h1>We Change نحن نغير</h1>
    <p> C'est une Association non gouvernementale, fondée le 10 mai 2018, à but non lucratif, a pour objectif renforcer
la citoyenneté et un développement équitable et durable à comme zone d’intervention le Nord-ouest</p>
  </div>
  <div class="image"></div>
</div>
<br>

@extends('layouts.footer')
@extends('layouts.historique')
