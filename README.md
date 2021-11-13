Olá!

Me chamo Matheus Teixeira, moro em Nova Iguaçu, Rio de Janeiro, e trabalho com o desenvolvimento de sites/sistemas. Além disso, sou um completo amante da música brasileira. 

Nesses últimos meses, tenho consumindo muitos artistas/bandas independentes. Depois que conheço um artista/banda sempre procuro ter um entendimento mais profundo da história dessa(s) pessoa(s).

Depois de conhecer vários artistas diferentes, percebi que a maioria deles não tinha um site próprio. Alguns possuem apenas Instagram e no máximo uma página no LinkTree.

Dando um exemplo pessoal, tanto eu quanto meus amigos, gostamos de buscar informações como biografia, agenda de shows, loja online etc, e encontrar todas essas informações espalhadas no feed a bela de uma caça ao tesouro. A partir disso comecei a pensar em como eu poderia ajudar as bandas que ouço e as quais um dia ouvirei a terem o seu próprio site de forma gratuita.

A ideia que estou a desenvolver é uma plataforma totalmente gratuita, no qual qualquer artista ou banda independente possa se cadastrar e partir do cadastro, a própria plataforma irá gerar um site no qual a banda ou artista poderá disponibilizar suas informações para seus ouvintes.

Sendo assim, para viabilizar essa proposta considero ser importante entender a realidade dos artistas/bandas e quais recursos a plataforma pode ter para ajudar a sua música chegar a mais ouvintes. 

Para isso, formulei algumas questões que contribuirão para o melhor desenvolvimento da plataforma. Reforço que é de grande importância o preenchimento completo do formulário.

Qualquer dúvida estou à disposição através do e-mail: contato@matheusteixeira.com.br

Muito obrigado!

# Perguntas
1 - Qual é o seu nome?
2 - Qual é o seu e-mail?
2 - Qual é o seu nome artístico / nome da sua banda?
3 - Você é um artista solo ou uma banda?
	a - Artista solo 
	b - Banda
4 - Quais desses itens  que você considera ser importante ter na primeira página do seu site?
- Foto da banda/artista
- Seção sobre banda/artista
- Redes sociais
- Agenda
- Itens da loja 
- Curiosidades
- Formulário de contato

5 - Quais outros seções você acha que seriam importantes ter na primeira página do seu site?

6 - Quais dessas páginas você acha interessante ter em seu site
- Uma página para blog/ultimas notícias
- Loja virtual
- SObre nós
- Contato
- Página de integrantes (caso seja banda)

7 - Você tem alguma outra sugestão de página que acabei deixando passar?

8 - O que você acha da plataforma ter um espaço para você ser encontrado por pesquisa de filtro em sua cidade e estado?
- Acho ótimo!
- Não acho legal

9 - Você teria interesse em fazer parte do projeto assim que a primeira versão da plataforma for ao ar?
# Banco de Dados

- artists
-- id
-- name
-- resume
-- image
-- subdomain
-- type ['soloist', 'band']
-- number_of_members [min:2]

- users
-- id
-- name
-- email
-- image
-- password

- type_of_members
-- name [
    'vocalist',
    'guitarist',
    'bass_player',
    'drummer',
    'keyboard_player'
    'pianist',
    'trumpeters',
    'saxophonists'
]

- artist_has_members
-- artist_id
-- member_id
-- type_id

- artist_has_fans
-- artist_id
-- fan_id

- schedule
-- title
-- image
-- description
-- date
-- call_to_action [
    'know more',
    'access'
    'secure_ticket'
    'buy_ticket'
]
-- artist_id

- albums
-- title
-- description
-- image
-- year
-- artist_id

- Songs
-- title
-- image
-- description
-- duration
-- album_id

- Song_has_members
-- Song_id
-- member_id
-- type [
    'performed',
    'written',
    'produced'
]

- Song_has_likes
-- Song_id
-- fan_id

- comments
-- content
-- user_id
-- parent_id
-- album_id

- type_of_likes
-- type [
    'like',
    'love',
    'sad',
    'awesome'
    'i_sang_together'
]
-- active

- comment_has_likes
-- type_id
-- comment_id
-- user_id
