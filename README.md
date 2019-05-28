## Tema WordPress Igreja Verbo da Vida Santa Maria da Boa Vista - PE  
 Instale o tema e siga os passos relacionados a baixo.

### 1º Crie as Paginas
HOME`(slug 'home')`, NOSSOS LIDERES`(slug 'nossos-lideres')`, CONTATO`(slug 'contato)`, FOTOS`(slug 'fotos')`, VIDEOS`(slug 'videos')`, AUDIOS`(slug 'audios)`, estas paginas devem ser criadas como `modelo de pagina padrão`, as demais como `template uso geral`. A pagina  `HOME` deve ser ativa como pagina inicial do tema, var em `Cofiguração - Leitura`.
  
### 2º Categorias  
Devem ser definidas 05 (cinco) categorias basicas necessarias
`ÁUDIOS, FOTOS, VÍDEOS, MENSAGENS, MANÁ`
  
### Plugins
por padrão o tema requer todos plugins necessarios para o seu bom funcionamento, instale todos e ative.  
>Pode ocorrer mensagens de erros na instalação dos plugins, não se preocupe tudo vai funcionar perfeitamente.
  
### Widgets
>Em `Aparência - Widgets` fica todos os widgets e áreas de widgets do tema. Abaixo esta relacionada todas as áreas de widgets e suas especificações.
>Para utilizar os widgets arraste e solte na área especifica.  

##### Área - (Botão Pagina Home)  
Utilizar o Widget `HTML personalizado`.  

Insira o codigo abaixo dentro do contéudo do widget `HTML personalizado`

 `<a class="btn btn-block btn-outline-light" href="link-da-pagina-desejada"> NO QUE CREMOS </a>`

>Não esqueça de modificar o atributo `href` para o link desejado e o texo `NO QUE CREMOS` em um texto da sua preferência.
>Para mudar o estilos(cor, tamanho, formato ...) do botões acesse o site do [Boostrap 4.3](https://getbootstrap.com/docs/4.3/components/buttons/)
   de preferência utilizar a classe `btn-block`.  

##### Área - (Imagem da Home)  
Utilizar o Widget `Imagem`.  
  
Deixar o Titulo do widget `Imagem` em branco.  

>Para um melhor enquadramento da imagem na pagina inicial, as imagem devem ter dimensões de `256x411 ou 312x501` podendo ser editada essas dimensões após a imagem ser inserida, clicando no botão `Editar imagem` na seção `MOSTRAR CONFIGURAÇÕES - Tamanho` selecione `Tamanho personalizado`.  

##### Área - (Lider 1 a 8)  
Utilizar o Widget `Imagem` e `Texto`, o widget `Imagem` deve esta sempre acima do widget `Texto`.  
  
Deixar o Titulo do widget `Imagem` em branco e no widget `Texto` preencher somente o Titulo.

>A Área Lider 1 e 2 são reservadas para o Presidente e o Vice-Presidente.   

Para uma melhor visualização das imagens suas dimensões devem ser 150x150, podendo ser editada essas dimensões após a imagem ser inserida, clicando no botão `Editar imagem` na seção `MOSTRAR CONFIGURAÇÕES - Tamanho` selecione `Tamanho personalizado`.

##### Área - (Social Icons)  
Utilizar o Wdget `Social Icons`, coloque os links das redes sociais nas suas respectivas áreas dentro do widget.  

### Posts  
>Existem cinco (05) formatos de posts, cada um deles tem suas proprias características, sempre adicionar `imagem destacada` para a visualização da listagem dos posts fica bonito.

##### Formato Padrão  
Utilizado na criação de Posts relacionado a notícias.    
>É de boa prática adicionar um post de NOTÍCIAS OU MENSAGENS, e marcar a Categoria `NOTÍCIAS, MENSAGENS`.  

##### Formato Imagem  
Utilizado na criação de galerias de imagens. O formato Imagem coloca-se no conteúdo um `shortcode` que é gerado quando criamos uma galeria no plugin `FooGallery`.  
>É de boa prática adicionar um post de IMAGEM e marcar a Categoria `FOTOS`.  

##### Formato Áudio  
Utilizado na criação de posts de áudio. Incorpora-se o link do SoundCloud ou adiciona um audio interno clicando no botão `Adicionar mídia`.  
>É de boa prática adicionar um post de ÁUDIO e marcar a Categoria `ÁUDIOS`.  

##### Formato Vídeo  
Utilizado na criação de posts de vídeos. `Clicando em Adicionar mídia - Inserir a partir do URL - copia-se o link do video do YouTube/Vmeo - Inserir no post`.  
>É de boa prática adicionar um post de VÍDEOS e marcar a Categoria `VÍDEOS`.  

##### Formato Citação  
Utilizado para posts curtos sem imagens, Ex: Maná, Devocional...  
>É de boa prática adicionar um post de CITAÇÃO e marcar a Categoria `MANÁ, DEVOCIONAL...`.  
