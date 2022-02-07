# Paquet NPM

# Instal·lació
 

```bash
npm install casteaching
```

# Usage

```javascript
import casteaching from 'casteaching'

// Obtenir la llista de videos publicats
casteaching.videos()

// Obtenir video per ID
casteaching.videos().show(1)

// Crear video
casteaching.videos().create({name: 'PHP 101', description: 'Bla bla bla', url: 'https://youtube.com/...'})

// Update video
casteaching.videos().update({name: 'PHP 101', description: 'Bla bla bla', url: 'https://youtube.com/...'})

// Destroy
casteaching.videos().destroy(1)

```

# Author 

Axel Tomas Altadill

# More info
- https://github.com/acacha/casteaching
