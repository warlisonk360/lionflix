# lionflix
meu site de filmes

Criei esse site e utilizo ele para meus estudos! esta funcional e online voce pode entrar e assistir os filmes!

linguagem PHP, HTML e CSS!
adicionais: JAVASCRIPT, JQUERY E JSON
Banco de dados: MYSQL via PDO

Segue Link: https://lionflix.xyz

caso queira testa-lo offline todos os arquivos estão disponivel!
ligue o site pelo arquivo connect.php que se encontra na pasta conexão!

Exemplo que uso para teste offline:
const host = 'localhost'; 
const dbname = 'lionflix';
const user = 'root';
const senha = '';

BANCO DE DADOS:
Nome das Tabelas;
links, info e episodios;

links - para os filmes!
info - para informaçoes das series!
episodios - para listar os episodios!

tabela links
'ID' = tipo (int) ativar auto increment 
'NameFilme' = tipo (varchar)
'LinkFilme' = tipo (varchar)
'Genero' = tipo (varchar) 
'Idade' = tipo (varchar)
'Ano' = tipo (int)
'Legenda' = tipo (tinyint) 0 = sem legenda, 1 = com legenda

estes 3 ultimos salve apenas o nome do arquivo ex: movie.png
'foto' = tipo (varchar)
'fotogrande' = tipo (varchar)
'Banner' = tipo (varchar)

tamanhos das imagens:
foto = 74x100
fotogrande = 290x430
banner = 416x159

tabela info:
'ID' tipo (int)
'Nome' tipo (varchar)
'Idade' tipo (varchar)
'Genero' tipo (varchar)
'Ano' tipo (int)
'foto' tipo (varchar)
'fotogrande' tipo (varchar)
'Total_Temporadas' tipo (varchar)

tabela episodios:
'ID' tipo (int)
'Nome' tipo (varchar)
'Link' tipo (varchar)
'Temporadas' tipo (varchar) Salvar com ex: 1 Temporada
'Ep' tipo (varchar)
'Nome_Ep' tipo (varchar)