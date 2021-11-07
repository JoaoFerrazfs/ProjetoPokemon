@extends('layouts.authPattern')
@section('content')

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="/img/logo.png" id="icon" alt="User Icon" />
                <h3>Cadastro de Usuario</h3>

            </div>

            <!-- Login Form -->
            <form method="POST" action="/logindoTreinador">
                @csrf
                <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="Senha">
                <input type="submit" class="fadeIn fourth" value="Acessar">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Esqueceu sua senha?</a>
            </div>

        </div>
    </div>

@endsection
