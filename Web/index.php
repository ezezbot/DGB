<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DGB</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900">

    <center>
      <br>
      <div class="container mx-auto bg-white rounded-md">
        <table id="app" class="table-fixed">
          <thead>
            <tr>
              <th class="w-1/2 px-4 py-2">ID</th>
              <th class="w-1/4 px-4 py-2">Name</th>
              <th class="w-1/4 px-4 py-2">File</th>
              <th class="w-1/4 px-4 py-2">Type</th>
              <th class="w-1/4 px-4 py-2">Code</th>
              <th class="w-1/4 px-4 py-2">Certified</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="backdoor in backdoors">
              <td class="border px-4 py-2">{{ backdoor.id }}</td>
              <td class="border px-4 py-2">{{ backdoor.name }}</td>
              <td class="border px-4 py-2">{{ backdoor.file }}</td>
              <td class="border px-4 py-2">{{ backdoor.type }}</td>
              <td class="border px-4 py-2"><textarea class="form-control">{{ backdoor.code }}</textarea></td>
              <td class="border px-4 py-2">{{ backdoor.certified }}</td>
            </tr>
          </tbody>
      </table>
      </div>
    </center>
   
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script>
      const app = new Vue({
        el: '#app',
        data: {
            backdoors: ''
        },
        created() {
            fetch('./dev.json')
                .then(response => response.json())
                .then(json => {
                    this.backdoors = json.backdoors
                })
        }
    })

    </script>
</body>
</html>
