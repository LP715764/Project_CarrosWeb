<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width initial-scale=10">.
<title>Carros Web - ShowRoom</title>


<style>

*{
  margin: 0;
  padding: 0;
  border-style: border-box;
  overflow-x: hidden;
}

  body{
    background: linear-gradient(72deg, #375b2e 1%, #b8dea4 99%);
  } 
  .container{
    display: flex;
    justify-content: center;
  }
 
      .cabeçalho {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: #375b2e;
        height: 40px;
        width: 100%;  
        text-align: center;
        list-style: none;
        padding: 1em 0;
      }
      .cabeçalho__link {
        text-decoration: none;
        color: #000;
        font-size: 24px;
        margin-left: 50px;
        color: #f8be00;
      }
      .cabeçalho__lista {
        display: flex;
        justify-content: space-between;
      }
      .container1 {
        display: flex;
        justify-content: flex;
        text-align: center;
        margin-left: 20px;
        margin-top: 10px;
      }
      .container2 {
        display: flex;
        justify-content: center;
        text-align: center;
      }

      .formulario input{
        margin: 10px 0;
      
      }
      #botao {
        padding: 10px;
      }
  
body{
background-color: linear-gradient(72deg, #375b2e 1%, #b8dea4 99%);;
}
footer{

width: 100%;
position: absolute;
background-color: #375b2e;
color: white;
padding: 100px 0px 30px;
}
.row{
width: 100%;
margin: auto;
display: flex;
flex-wrap: wrap;
align-items: center;
justify-content: center;
}
.col{
flex-basis: 25%;
padding: 10px;
}
ul li{
list-style: none;
}
ul li a{
text-decoration: none;
}
h4{
text-decoration: underline;
text-decoration-thickness: 1px;
color: #f8be00;
}
i{
color: white;
font-weight: lighter;
}
i:hover{
color: rgb(193, 165, 42,);
}
          h2 {
              background-color: #375b2e;
              padding:10px 0;
              text-align: center;
              color: #f8be00;
          }
          .produto-single img{
              max-width: 100%;

          }
          .produto-single{
              text-align: center;
              font-size: 16px;
              padding: 10px;
          }
          .produto-single a{
              text-decoration: none;
              color: white;
              background-color: #a8c030;
              text-align: center;
              display: block;
              padding: 4px 0;
              font-size: 18px;
          }
          #produtos{
              /* padding: 5rem; */
              display: flex;
              padding: 3rem 0 3rem 0;
              align-items: center;
              justify-content: center;
              gap: 1rem;
              flex-wrap: wrap;
              width: 100em;
              /* background-color: red; */
              max-width: 100%;
         }

         .itemShowRoom{
            width: 26rem;
            height: 26rem;
            border: solid 10px #375b2e;
            align-self: start;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 1rem;
          }

          .itemShowRoom p{
            font-size: 3rem;
            text-align: center;
          }

          .itemShowRoom img{
            width: 23rem;
            border: 10px solid #375b2e;
            height: 15rem;
            object-fit: cover;
          }

          .botaoItem{
            background: #375b2e;
            color: white;
            padding: 1rem;
            width: 20rem;
            text-align: center;
          }

          .botaoItem span{
            font-size: 2rem;
          }

          .produto-single{
              width: 32%;
              margin-right:  1%;
              border: 1px solid black;
              margin-top: 20px;
              margin-bottom: 20px;
          }
          .info-single-checkout{
              border-bottom: 2px dotted;
              padding: 10px 0;
          }
          @media screen and (max-width: 768px){
              .produto-single{
                  width: 100%;
                  margin-right: 0;
              }          
          }
  </style>



</head>
<body>

<img src="CarrosWeb.PNG" alt="" style="width: 100vw;">

<header class="cabeçalho">
    <nav class="container1">
    <li class="cabeçalho__lista">
    <a class="cabeçalho__link" href="http://localhost/CarrosWeb/index.php">Início</a>
      <a class="cabeçalho__link" href="#">Favoritos</a>
      <a class="cabeçalho__link" href="https://cotar.seguroauto.org/?centro_utm_source=Adwords&centro_utm_medium=PPC&aff_id=1089_&utm_content=S_BR_Seguradoras_Teste&utm_adgroup=Porto_Seguro_Auto&utm_term=seguro%20de%20carro%20porto%7C645418197965&gclid=CjwKCAjwvdajBhBEEiwAeMh1U6V2gLVpGaLxDnxWwJHv5vwZQhCrkqcLVEz3tdbb4LwOBVMcggpxjRoCeqkQAvD_BwE">Seguro</a>
      <a class="cabeçalho__link" href="https://www.bb.com.br/site/pra-voce/financiamentos/financiamento-de-carro/">Financiamento</a>
      <a class="cabeçalho__link" href="http://localhost/CarrosWeb/login.php"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
  <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
</svg></a>
      <a class="cabeçalho__link" href="https://www.google.com/"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
  <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
</svg></a>
    </nav>  
    </li>
  </header>





        
        <h2>ShowRoom</h2>  


    <div style="display: flex; align-items: center; justify-content: center; " >
      <div id="produtos">


      <div class="itemShowRoom">

          <div>
              <img src="./images/Dodge 01.jpeg" alt="Dodge">
              <p>Dodge</p>
          </div>
          <a href="dodge.php">

              <div class="botaoItem">
                  <span class="comprar">Comprar</span>
              </div>
          </a>
          
      </div>

      <div class="itemShowRoom">

          <div>
              <img src="./images/Camaro 01.jpeg" alt="Challenger">
              <p>Camaro</p>
          </div>
          <a href="camaro.php">

              <div class="botaoItem">
                  <span class="comprar">Comprar</span>
              </div>
          </a>
          
      </div>

      <div class="itemShowRoom">

          <div>
              <img src="./images/Mustang 01.jpeg" alt="Mustang">
              <p>Mustang</p>
          </div>
          <a href="mustang.php">

              <div class="botaoItem">
                  <span class="comprar">Comprar</span>
              </div>
          </a>
          
      </div>

      <div class="itemShowRoom">
        
          <div>
              <img src="./images/Cadillac 01.jfif" alt="Cadillac">
              <p>Cadillac</p>
          </div>
          <a href="cadillac.php">

              <div class="botaoItem">
                  <span class="comprar">Comprar</span>
              </div>
          </a>
          
      </div>

      <div class="itemShowRoom">
        
          <div>
              <img src="./images/Fusca 01.jpeg" alt="Fusca">
              <p>Fusca</p>
          </div>
          <a href="fusca.php">

              <div class="botaoItem">
                  <span class="comprar">Comprar</span>
              </div>
          </a>
          
      </div>

      <div class="itemShowRoom">
        
          <div>
              <img src="./images/Kadett 01.jpeg" alt="Kadett">
              <p>Kadett</p>
          </div>
          <a href="kadett.php">

              <div class="botaoItem">
                  <span class="comprar">Comprar</span>
              </div>
          </a>
          
      </div>

      <div class="itemShowRoom">
        
          <div>
              <img src="./images/Opala 01.jpeg" alt="Opala">
              <p>Opala</p>
          </div>
          <a href="opala.php">

              <div class="botaoItem">
                  <span class="comprar">Comprar</span>
              </div>
          </a>
          
      </div>

      <div class="itemShowRoom">
        
          <div>
              <img src="./images/Omega 01.jpeg" alt="Omega">
              <p>Omega</p>
          </div>
          <a href="omega.php">

              <div class="botaoItem">
                  <span class="comprar">Comprar</span>
              </div>
          </a>
          
      </div>

      <div class="itemShowRoom">
        
          <div>
              <img src="./images/LandRover 1.jpg" alt="Land Rover">
              <p>Land Rover</p>
          </div>
          <a href="land rover.php">

              <div class="botaoItem">
                  <span class="comprar">Comprar</span>
              </div>
          </a>
          
      </div>

      <div class="itemShowRoom">
        
          <div>
              <img src="./images/FordKa.jpg" alt="Ford Ka">
              <p>Ford Ka</p>
          </div>
          <a href="ford ka.php">

              <div class="botaoItem">
                  <span class="comprar">Comprar</span>
              </div>
          </a>
          
      </div>

      <div class="itemShowRoom">
        
          <div>
              <img src="./images/Fiat.jpg" alt="Fiat">
              <p>Fiat</p>
          </div>
          <a href="fiat.php">

              <div class="botaoItem">
                  <span class="comprar">Comprar</span>
              </div>
          </a>
          
      </div>

      <div class="itemShowRoom">
        
          <div>
              <img src="./images/Fusion3.0.jpeg" alt="Fusion 3.0">
              <p>Fusion 3.0</p>
          </div>
          <a href="fusion.php">

              <div class="botaoItem">
                  <span class="comprar">Comprar</span>
              </div>
          </a>
          
      </div>

      <div class="itemShowRoom">
        
          <div>
              <img src="./images/Jetta.jpg" alt="Jetta">
              <p>Jetta</p>
          </div>
          <a href="jetta.php">

              <div class="botaoItem">
                  <span class="comprar">Comprar</span>
              </div>
          </a>
          
      </div>

      <div class="itemShowRoom">
        
          <div>
              <img src="./images/SantaFé.jpg" alt="Santa Fé">
              <p>Santa Fé</p>
          </div>
          <a href="santafe.php">

              <div class="botaoItem">
                  <span class="comprar">Comprar</span>
              </div>
          </a>
          
      </div>

      <div class="itemShowRoom">
        
          <div>
              <img src="./images/KiaCerato.jpeg" alt="Kia Cerato">
              <p>Kia Cerato</p>
          </div>
          <a href="kiacerato.php">

              <div class="botaoItem">
                  <span class="comprar">Comprar</span>
              </div>
          </a>
          
      </div>

      <div class="itemShowRoom">
        
          <div>
              <img src="./images/Captur2021.jpg" alt="Captur 2021">
              <p>Captur 2021</p>
          </div>
          <a href="captur2021.php">

              <div class="botaoItem">
                  <span class="comprar">Comprar</span>
              </div>
          </a>
          
      </div>




          
          
      </div>
    </div>
    
    <!---produtos--->
<!-- 
  <script>
            const items =[
                {
                    id: 0,
                    nome: 'ALFA ROMEO 155 SUPER',
                    img: './images/Alfa 01.jfif',
                    quantidade: 0
                },
                {
                    id: 1,
                    nome: 'CHEVY CAMARO SS',
                    img: './images/Camaro 01.jpeg',
                    quantidade: 0
                },
                {
                    id: 2,
                    nome: 'DODGE CHARGER R/T',
                    img: './images/Dodge 01.jpeg',
                    quantidade: 0
                },
                {
                    id: 3,
                    nome: 'DODGE CHALLENGER 392 SRT8',
                    img: './images/Challenger 01.jpg',
                    quantidade: 0
                },
                {
                    id: 4,
                    nome: 'FORD MUSTANG SHELBY GT - 500',
                    img: './images/Mustang 01.jpeg',
                    quantidade: 0
                },
                {
                    id: 5,
                    nome: 'CADILLAC SEDAN DE VILLE - 1973',
                    img: './images/Cadillac 01.jfif',
                    quantidade: 0
                },
                {
                    id: 6,
                    nome: 'VW FUSCA 1300 L - 1976',
                    img: './images/Fusca 01.jpeg',
                    quantidade: 0
                },
                
                {
                    id: 7,
                    nome: 'GM KADETT GL 2.0 - 1995',
                    img: './images/Kadett 01.jpeg',
                    quantidade: 0
                },
                {
                    id: 8,
                    nome: 'GM OPALA SS - 1975',
                    img: './images/Opala 01.jpeg',
                    quantidade: 0
                },
                {
                    id: 9,
                    nome: 'GM OMEGA DIAMOND 3.0',
                    img: './images/Omega 01.jpeg',
                    quantidade: 0
                },
                
                {
                    id: 10,
                    nome: 'LAND ROVER VELAR - 2018',
                    img: './images/LandRover 1.jpg',
                    quantidade: 0
                },
                {
                    id: 11,
                    nome: 'FORD KA - 2020',
                    img: './images/FordKa.jpg',
                    quantidade: 0
                },
                {
                    id: 12,
                    nome: 'FIAT CRONOS - 2020',
                    img: './images/Fiat.jpg',
                    quantidade: 0
                },
                {
                    id: 13,
                    nome: 'FORD FUSION 3.0 V6 AWD - 2012',
                    img: './images/Fusion3.0.jpeg',
                    quantidade: 0
                },
                {
                    id: 14,
                    nome: 'VOLKSWAGEN JETTA - 2021',
                    img: './images/Jetta.jpg',
                    quantidade: 0
                },
                {
                    id: 15,
                    nome: 'HYUNDAI SANTA FÉ - 2016',
                    img: './images/SantaFé.jpg',
                    quantidade: 0
                },
                {
                    id: 16,
                    nome: 'KIA CERATO 1.6 - 2022',
                    img: './images/KiaCerato.jpeg',
                    quantidade: 0
                },
                {
                    id: 17,
                    nome: 'RENAULT CAPTUR - 2021',
                    img: './images/Captur2021.jpg',
                    quantidade: 0
                },
                {
                    id: 18,
                    nome: 'CAOA CHERY TIGGO 8 - 2023',
                    img: './images/caoacherytiggo82023.jpg',
                    quantidade: 0
                },
                {
                    id: 19,
                    nome: 'HYUNDAI IX 35 - 2015',
                    img: './images/ix35.jpg',
                    quantidade: 0
                },
            ]
            inicializarLoja = () => {
                var containerProdutos = document.getElementById('produtos');
                items.map((val)=>{
                    containerProdutos.innerHTML+= `
                    <div class="produto-single">
                    <img src="`+val.img+`" />
                    <p>`+val.nome+`</p>
                    <a key="`+val.id+`" href="#">Ver mais detalhes</a>
                    </div>
                `;
                })
            }
            inicializarLoja();


            atualizarCarrinho = () => {
                var containerCarrinho = document.getElementById('Favoritos');
                containerCarrinho.innertHTML = "";
                items.map((val)=>{
                    if(val.quantidade > 0){
                    containerCarrinho.innerHTML+= `
                    <div class= "info-single-checkout">
                    <p style= "float:left;">Produto: `+val.nome+`</p>
                    <p style= "float:rigth;">Quantidade: `+val.quantidade+`</p>
                    <div style= "clear:both"></div>
                    </div>
                `;
                    }
                })
            }


            var links = document.getElementsByTagName('a');

            for(var i = 0; i < links.length; i++){
                links[i].addEventListener("click",function(){
                    let key = this.getAttribute('key');
                    items[key].quantidade++;
                    atualizarCarrinho();
                    return false;

                })
            } -->

    </script>
    <footer>
      <div class="row">
        <div class="col">
          <h4>Enderço</h4><br>
          <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
  <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H3Zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Z"/>
</svg>Av. Presidente Wilson - José Menino</p>
          <p>Ed. Torre Eclipse</p>
          <p>197 - sala 26</p>
        </div>
        <div class="col">
          <h4>Serviços</h4><br>
          <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
  <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
</svg>App CarrosWeb</p>
          <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
  <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
</svg>Web CarrosWeb</p>
          <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
  <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
  <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
</svg>Mídias Sociais</p>
        </div>
        <div class="col">
          <h4>Siga-me</h4><br>
          <ul>
            <li>
              <a hre="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>Facebok</li>
            <li>
              <a hre="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>Instagram</li>
            <li>
              <a hre="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg>Twitter</li>
            <li>
              <a hre="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg>Linkedin</li>
          </ul>
          
      </div>  
          
      </div> 
      <hr/> 
      <div class="row">
      <div class="col"></div>
        <div class="col"><p>Copyright @copy; 2023 - All Right Reser</p></div>
        <div class="col"></div>
          
      </div>
    </footer>
  </body>
</html>
  <?php

  ?>