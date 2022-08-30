# UDEMY- Testes unitários e TDD com PHP e PHPUnit

Github: (https://github.com/dorensbach/udemy-testes-unitarios-e-tdd)

Data de criação: 29.08.2022

### Link do curso:
(https://www.udemy.com/course/testes-unitarios-php-phpunit)

### Comandos já usados/testados:

```git
# Configuracao
# Para o projeto
git config --local
# Configuracao global
git config --global
# Mudar apenas o nome no projeto
git config --local user.name "Meu Nome"
# Visualizar o nome/email
git config user.name
git config user.email

# Comandos basicos
git init
git add .
git commit -m "Primeiro commit."
git remote add origin https://github.com/dorensbach/reaprendendo-git-2022.git
git push origin master
git add arquivo-02
git status

# Adicionar um branch (ramo)
git checkout -b ramo2
git checkout master
git checkout ramo2
git push origin ramo2

# Remover um branch
git checkout -b ramo3
git add arquivo-ramo3
git branch -d ramo3
git branch -D ramo3

# Merge
git checkout master
git status
git merge ramo2
git push origin master

# Ver diferenca entre 2 branch
git diff master ramo2

# Listar os remotes existenes
git remote -v

# Clonar um repositorio (SSH)
git clone git@github.com:dorensbach/reaprendendo-git-2022.git
#Tambem pode ser (HTTPS):
git clone https://github.com/dorensbach/reaprendendo-git-2022.git

# Buscar por alteracoes no servidor remoto
git pull origin master

# Mostra o historico de commits
git log
git log --oneline
git log -p

# Desfazer um commit
# Pegar o codigo do commit com o git log
git revert codigo
# Usar o push para enviar o revert pro remote
git push origin master

# Para mostrar para o git quais arquivos ele não deve monitorar, criar um arquivo
# com o nome .gitignore e incluir nele o nome dos arquivos que deverão ser ignorados.
```
### SSH
#### Criar chave e adicionar ao ssh-agent
(https://docs.github.com/pt/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent)
Importante usar o comando `eval "$(ssh-agent -s)"`
#### Adicionar chave à conta
(https://docs.github.com/pt/authentication/connecting-to-github-with-ssh/adding-a-new-ssh-key-to-your-github-account)
#### Mudar a url remota de HHTP para SSH
https://docs.github.com/pt/get-started/getting-started-with-git/managing-remote-repositories#switching-remote-urls-from-https-to-ssh