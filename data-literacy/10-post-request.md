## Building an API with POST

https://github.com/nicklasdean/post-error-handling

#### A) /new

- Create a POST end-point that receives all data in a POST request of a new pokémon. The new pokémon will be inserted into the database with mysql2.



#### B) (Advanced - optional)

- If the new Pokémon pokedex number, name and primary_type, provided with the post request already exists in the database, the API will return the status **[418](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/418)** to the client

#### C) (Advanced - optional)

- Create a client-side HTML & Javascript application that takes user input and fetches the form content as a POST request to the server.
  - Inspiration: 