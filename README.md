# Installation sass

#### Dans le terminal

1. npm init -y
2. npm install -D sass

#### Dans package json

3. Ajouter dans script la tâche sass
```json
"scripts": {
    "sass": "sass ./sass:./css"
  },
```

#### Dans le terminal

4. npm run sass

#### Methode promesse

```
static main() {
		// https://chucknorrisfacts.fr/api/get?data=tri:alea;nb99;
		this
		.chargerJson("http://localhost:5500/data/citations.json")
		.then(data => {
			console.log(data);
		});
	}

	static chargerJson(url) {
		return new Promise( resolve => {

			var xhr = new XMLHttpRequest();
			xhr.open("get", url);
			xhr.responseType = "json";
			xhr.addEventListener("load", e => {
				resolve(xhr.response);
			});
	
	
			xhr.send();
		});
	}
```
