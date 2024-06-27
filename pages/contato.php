
<div class="inicio">
    <a href="home.php" title="logo_Nave_Play" class="logo"  >
        <img src="img/Nave/1.svg" alt="site-logo" style="width: 10%; height: 20%;">
    </a>
    <div class="menu2" >
        <ul style="margin-left: 5%">

            <li>
                <a href="pages/desenvolvedores.php" title="Desenvolvedor" >Desenvolvedores</a>
            </li>
            
            <li>
                <a href="pages/indicacoes.php" title="Indicacao" >Indicações</a>
            </li>

            <li>
                <a href="pages/ferramenta.php" title="Ferramenta">Ferramenta</a>
            </li>

            

        </ul>
    </div>
</div>



<div class="formulario">
    <form name="conta" action="contato" method="POST">
    
    <form name="meu_form" >

    <h1>Entre em contato</h1>

    <label for="nome" >Nome</label></br>
    <input type="text" class="dados" id="nomeid" placeholder="José da Silva" required="required" name="nome"   ; /></br>
    
    <label for="fone" >Fone</label></br>
    <input type="tel" class="dados" id="foneid" placeholder="(xx)xx-xx-xx-xx" name="fone" /></br>
   
    <label for="email">Email</label></br>
    <input type="email" class="dados" id="emailid" placeholder="fulano@mail.com" name="email" /></br>
    
    <label for="mensagem" >Mensagem</label></br>
    <textarea placeholder="Deixe sua opnião"></textarea></br>

    <input type="submit" class="enviar" onclick="Enviar();" value="Enviar" /></br>

    <img src="img/Nave/3.svg" alt="site-logo" style="width: 10%; height: 20%;margin-left: 43%">
    </form>

    


    </form>
</div>



