<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DGB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
  <center><h1>DGB - Detecting malicious code <span class="badge badge-secondary"><a class="white" href="https://github.com/ezezbot/DGB">Link</a></span></h1></center>

    <table id="app" class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">File</th>
            <th scope="col">Type</th>
            <th scope="col">Code</th>
            <th scope="col">Certified</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="backdoor in backdoors">
            <th scope="row">{{ backdoor.id }}</th>
            <td>{{ backdoor.name }}</td>
            <td>{{ backdoor.file }}</td>
            <td>{{ backdoor.type }}</td>
            <td><textarea class="form-control">{{ backdoor.code }}</textarea></td>
            <td>{{ backdoor.certified }}</td>
          </tr>
        </tbody>
    </table>
   
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script></script>
</body>
</html>
