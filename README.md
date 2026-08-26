# De Pasto

Officiële websitebestanden voor **De Pasto** in Kapellen.

## Structuur

- `index.php` — hoofdpagina van De Pasto
- `summer-jam.php` — aparte Summer Jam-eventpagina
- `includes/` — herbruikbare PHP-secties
- `assets/css/` — stylesheets
- `assets/js/` — JavaScript
- `assets/img/` — afbeeldingen

## Werkwijze

Deze GitHub-repository is de centrale bron van de website.

### Nieuwste versie ophalen

```bash
git pull origin main
```

### Eigen wijzigingen publiceren

```bash
git add .
git commit -m "Beschrijving van de wijziging"
git push origin main
```

## Publicatie naar Combell

GitHub bevat de actuele broncode. Na een `git pull` kunnen de gewijzigde bestanden via Combell File Manager naar de `public_html` van de website worden geüpload.

> Let op: plaats geen wachtwoorden, API-sleutels of andere geheimen in deze publieke repository.
