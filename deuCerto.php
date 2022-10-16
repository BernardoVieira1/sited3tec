<?php
  session_start();

  if($_SESSION['usuarioId'] != null){
    if($_SESSION['usuarioAdmin']){
      header("Location: adminpage.php");
    }
  
  }else{
    $_SESSION['loginErro'] = "Usuario ou senha inválido";
    header("Location: index.php");
  }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iron Maiden Tour 2023</title>
  <meta name = "viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>
<body>
  <style>
   *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}
  .center{
    display: flex;
    flex-wrap: wrap;
    max-width: 1280px;
    margin:0 auto;
    padding: 0 2%;  
  }
  .logo{
        position: absolute;
        left:2%;
        
  }

  .logodois{
      position: absolute;
      left:25%;
  }
  .logotres{
    position: absolute;
    right: 2%;
  }
  .caixa {

height: 22vh;
width: 98vw;
background-color: aqua;
border-radius: 16px;

border: 5px;
border-color: black;
border-style: outset;
margin-left: 1%;

}

.primeirotitulo{
  position: absolute;
  font-size: 200%;
  right: 10%;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  
}
.primeiraimagem{
  position: absolute;
  right: 25%;
}
.nodia{
  position: absolute;
  left: 2%;
}
.continuidade{
  position: absolute;
  left: 2%;
}
.continuidadedois{
  position: absolute;
  left: 2%;
}
.senjutsufuturepast{
  position: absolute;
  right: 17%;
}
.continuidadeparagrafo{
  position: absolute;
  left: 2%;
}
.somew{
  position: absolute;
  left: 2%;
}
.imagemshow{
  position: absolute;
  right: 10%;
}

    </style>
  <header>
    <div class="caixa" align ="center">
    <div class = "center"> 
  <div class="logo"><img src="./arquivos/PORQUE.png" width="150" height="150" /></div>
  <div class="logodois"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Iron_Maiden_Logo.png" width="700" heigth="500"/></div>
  <a href="sair.php"><button>Sair</button></a>
  <div class="logotres"><img src="./arquivos/PORQUE.png" width="150" height="150" /></div>
  </div>
  </div>
  <br>
  <h1 class = "primeirotitulo">A UNIÃO ENTRE SOMEWHERE IN TIME E SENJUTSU ACONTECEU!!!!</h1>
  <br>
  <br>
  <br>
  <div class="primeiraimagem"><img src="https://i0.wp.com/www.xsnoize.com/wp-content/uploads/2022/10/5f4716cf-e259-08cb-5c1b-467b25aaa2b5_edited.jpg" width="700" height="600" /></div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
  <h2 class = "nodia"> No dia 06 de outubro de 2022, a banda de heavy metal, Iron Maiden, anunciou a sua turnê que ocorrerá em 2023, revelando o título, o tema e os albúns que serão comtemplados, e algumas datas e locais aonde ocorrerão os primeiros shows.</h2>
  <br>
  <br>
  <br>
  <h2 class = "continuidade">Depois do grande sucesso que foi a turnê da Legacy of The Beast, a banda decide dar continuidade aos seus shows ao redor de todo o mundo.</h2>
  </header>
  <br>
  <br>
  <br>
  <br>
  <div class= "senjutsufuturepast"><img src ="https://roadiecrew.com/wp-content/uploads/IRON-MAIDEN-2.png" width="900" height="500"/></div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <h2 class ="continuidadedois">A turnê marcada para o ano de 2023, veio com o título "The Future Past", fazendo referência a dois albuns e uma música do albúm mais novo da banda denominado "Senjutsu". Os albuns citados são: Senjutsu e Somewhere in Time.</h2>
  <br>
  <br>
  <br>
  <h2 class="continuidadeparagrafo">O album "Senjutsu" foi lançado no ano de 2021 e possui 10 músicas no total. A música que é referente ao título se chama "Days of Future Past", que em português significa "Dias de um Futuro Esquecido". A música possui 4:03 minutos de duração e é totalmente em inglês.</h2>
  <br>
  <br>
  <br>
  <br>
  <br>
  <h2 class ="somew">O album "Somewhere in Time" foi lançado no ano de 1986 e possui 8 músicas. O álbum foi remasterizado no ano de 2015.</h2>
  <br>
  <br>
  <br>
  <div class = "imagemshow"><img src="https://s2.glbimg.com/Oj1ojUeXmdnO6X44PHuxMImLieU=/0x0:1500x785/1008x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/u/c/haRhaESFq8Fr7oaBpbbw/iron-maiden.jpeg"/></div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <h2 class ="shows">No dia 6 de outubro de 2022, o Iron Maiden revelou aonde e quando ocorrerá os primeiros show da turnê "The Future Past" no ano de 2023. Logo abaixo é possível ver as datas e os locais aonde ocorrerão os shows.</h2>
  <br>
  <h2 class ="dataslocais">Junho de 2023 <br> 13 Tauron Arena, Cracóvia, POLÔNIA – (À venda sex 14 out ) <br>
19 Hallenstadion, Zurich, SWITZERLAND – (à venda quinta 13 out)<br>
24 3Arena, Dublin, IRELAND – ( venda Sex 14 Out)<br><br>
Julho de 2023<br>
03 Motorpoint Arena, Nottingham, INGLATERRA – (À venda sex 14 out)<br>
04 Utilita Arena, Birmingham, INGLATERRA – (à venda sex 14 out)<br>
07 O2 Arena, London, INGLATERRA – (à venda sex 14 out)<br>
11 Ziggo Dome , Amsterdam, PAÍSES BAIXOS – (À venda qui 13 out)<br>
13 Sportpaleis, Antuérpia, BÉLGICA – (À venda qui 13 out)<br>
15 The Return of the Gods Festival, Milão, ITÁLIA – (À venda amanhã! sex 7)</h2>

</body>
</html>
