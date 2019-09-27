# Programmeerimise alused
Antud kursus annab ülevaate programmeerimise aluste baasteadmistest PHP keele baasil.
##Ajakava
###20.09.2019
* Tarkvara installeerimine
    * [PHPStorm] (https://www.jetbrains.com/phpstorm/)
    * [GIT] (https://git-scm.com/downloads)
* Tarkvara seadistamine
    * Valmistamine litsents
    * PHPStorm põhiseadistus (line numbers, soft wrap, zoom)
    * git.exe ühendus PHPStormiga
    * github.com repo loomine ning ühendamine PhpStormiga
### 25.09.2019
* git kasutamine käsureal
Kui repo ei ole initsialiseeritud, siis tulelb see ära teha
```
git init
```
Nüüd lisa muudatud fail jälgismis süsteemi (git)

```
git add failinimi
```

Koosta kirjeldus antud muudatusele
```
git commit -m "Kirjelduse sõne"
```

Lükka lokaalsest repost kirjeldus kausreposse (nt. github.com)
```
git push -uf origin master
```

Siin origin on ühenduse nimi ja master on peaharu

"Command+9" saad ligipääsu, et kas oled pushind githubiga (Log - origin % master)

"Shift+command+K" - giti push githubi

*git kasutamine läbi PhpStorimi

command+k
antud vali vajalikud failid, mis on vaja antud commitiga seostada, lisa commiti sõne ja vajuta commit või commit and push