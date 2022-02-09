<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">

        <link href="{{ url('/css/reset.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="{{ url('/css/style.css') }}" rel="stylesheet">
        <link href="{{ url('/css/vagasFullData.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Noto+Sans&display=swap" rel="stylesheet">

        <title>MMtech</title>
    </head>

    <body>

        <header></header>
        
        <main>

        @if ($errors->any())
            <div class="alert alert-danger">
                <h4>Erro ao tentar enviar o cadastro!</h4>
            </div>
        @endif

        @if (!empty($mensagem))
        <div class="alert alert-success">
            {{$mensagem}}
        </div>
        @endif
  
            <h2 class="titulo-principal" id="sobre-nos">Faça seu cadastro que entraremos em contato.</h2>
            
            <div class="div-img-DataAnalist">
                <img class="img-DataAnalist" src="../../images/vagaFullStack.png">

                <form id="form-adiciona" action="{{ route('enviar_cadastro_fullstack') }}" method="post" enctype="multipart/form-data">
                @csrf

                    <label for="nomesobrenome">Nome completo</label>
                    <input type="text" id="nomesobrenome" name="nome" value="{{old('nome')}}" class="form-control @error('nome') is-invalid @enderror" placeholder="nome do candidato">
                    @if ($errors->has('nome'))
                        <span class="invalid-feedback">
                            <strong class="msg-validação">{{ $errors->first('nome') }}</strong>
                        </span>
                    @endif

                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" placeholder="seuemail@dominio.com">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" value="{{old('telefone')}}" class="form-control @error('telefone') is-invalid @enderror" placeholder="(xx) xxxxx-xxxx">
                    @if ($errors->has('telefone'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('telefone') }}</strong>
                        </span>
                    @endif

                    <fieldset>

                        <legend>Como prefere nosso contato?</legend>
                        <label for="radio-email"><input type="radio" name="preferencia_contato" value="email" id="radio-email">Email</label>
                        
    
                        <label for="radio-telefone"><input type="radio" name="preferencia_contato" value="telefone" id="radio-telefone">Telefone</label>
                       
    
                        <label for="radio-whatsapp"><input type="radio" name="preferencia_contato" value="whatsapp" id="radio-whatsapp" checked>WhatsApp</label>
                        
                    </fieldset>
    
                    <fieldset>

                        <legend>Qual sua opção de trabalho?</legend>
                        <select class="trabalho-opções" name="preferencia_trabalho">
                            <option value="presencial">Presencial</option>
                            <option value="híbrido">Híbrido</option>
                            <option value="home-office">Home-Office</option>
                        </select>

                    </fieldset>

                    <div class="mb-3 ">
                        <label for="formFile" class="form-label">Insira seu curriculo aqui!</label>
                        <input class="form-control @error('curriculo') is-invalid @enderror" name="curriculo" value="{{old('curriculo')}}" type="file" id="formFile">
                        @if ($errors->has('curriculo'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('curriculo') }}</strong>
                        </span>
                    @endif
                    </div>
                           
                    <button id="adicionar-candidato" type="submit" class="enviar">Enviar</button>
                </form>
            </div>

        </main>

        <footer>
            
            <div class="div-footer">

                <div class="footer-contatos">
                    <ul class="ul-redes-sociais">
                        <h3 class="h3-redes" id="contatos">REDES SOCIAIS</h3>
                        <li class="li-redes-sociais"><a href="https://instagram.com/mmtech.retail?utm_medium=copy_link" target="_blank"><img class="img-instagram" src="images/instagram.png"></a></li>
                        <li class="li-redes-sociais"><a href="https://www.linkedin.com/company/mmtechretail/mycompany/" target="_blank"><img class="img-linkedin" src="images/linkedin.png"></a></li>
                        <li class="li-redes-sociais"><a href="https://www.youtube.com/c/lojasmm/featured" target="_blank"><img class="img-youtube" src="images/youtube.png" ></a></li>
                    </ul> 

                    <ul class="ul-redes-sociais">
                        <h3 class="h3-telefone">TELEFONE</h3>
                        <li class="li-contatos"><a class="a-contatos">(44) 3046-2323</a></li>
                        <h3 class="h3-ouvidoria">OUVIDORIA</h3>
                        <li class="li-contatos"><a class="a-contatos">(42) 3220-6000</a></li>
                    </ul>
                </div>

                <div class="div-ultima-img">
                    <img class="ultima-img" src="../../images/MMTech0.png">
                </div>

            </div>
  
            <p class="p-footer-endereco">MMTech / CNPJ: 77500049000308 Rua Victor Meirelles - Ronda, 288 - CEP: 84051300 - Ponta Grossa - PR</p>
            <p class="copyright">&copy; Copyright MMtech - 2021</p>

        </footer>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>